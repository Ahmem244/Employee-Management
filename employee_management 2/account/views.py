from django.shortcuts import render
from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.shortcuts import render, redirect
from .models import *
from django.views.decorators.csrf import csrf_exempt
from django.contrib import messages
from django.utils.http import urlsafe_base64_encode, urlsafe_base64_decode
from django.core.mail import EmailMultiAlternatives
from management import models as management_models
import datetime
from django.contrib.auth.decorators import login_required
from .forms import EditProfileForm
from django.contrib.auth.tokens import default_token_generator
from django.template.loader import render_to_string
from django.utils.encoding import force_bytes, force_str
from django.http import HttpResponse
from .forms import CustomPasswordResetForm, CustomSetPasswordForm
from django.conf import settings


@login_required
def edit_profile(request):
    user = request.user
    if request.method == 'POST':
        form = EditProfileForm(request.POST, instance=user.userprofile, user=user)
        if form.is_valid():
            form.save()
            messages.success(request, 'Your profile was successfully updated!')
            return redirect('index')
        else:
            messages.error(request, 'Please correct the error below.')
    else:
        form = EditProfileForm(instance=user.userprofile, user=user)

    return render(request, 'account/edit_profile.html', {'form': form})


@login_required
def index(request):
    user = request.user
    if user.userprofile.role == manager:
        all_sales_advisors = UserProfile.objects.filter(role=sales_advisor).count()
        today_shifts = management_models.Shift.objects.filter(date=datetime.date.today()).count()
        today_announcements = management_models.Announcement.objects.filter(
            created_at__date=datetime.date.today()).count()
        today_requests = management_models.Request.objects.filter(created_at__date=datetime.date.today()).count()
        context = {
            'user': request.user,
            'nav_class': 'dashboard',
            'is_admin': True,
            "all_sales_advisors": all_sales_advisors,
            "today_shifts": today_shifts,
            "today_announcements": today_announcements,
            "today_requests": today_requests,
            'full_name': request.user.get_full_name(),

        }
        return render(request, 'admin/panel.html', context)
    elif user.userprofile.role == sales_advisor:
            context = {
                'user': request.user,
                'is_admin': False,
                'full_name': request.user.get_full_name(),
            }
            return render(request, 'admin/sa_panel.html', context)


@csrf_exempt
def signup(request):
    if request.method == 'POST':
        first_name = request.POST.get('first_name', None)
        middle_name = request.POST.get('middle_name', None)
        surname = request.POST.get('surname', None)
        email = request.POST.get('employee_email', None)
        phone = request.POST.get('employee_phone', None)
        address = request.POST.get('employee_address', None)
        employee_number = request.POST.get('employee_number', None)
        department = request.POST.get('department', None)
        password = request.POST.get('password', None)

        # Check if the username already exists
        if User.objects.filter(username=employee_number).exists():
            messages.error(request, "An account with this employee number already exists.")
            return render(request, 'account/signup.html')

        user_obj = User.objects.create(
            email=email, first_name=first_name, last_name=surname, username=employee_number
        )
        user_obj.set_password(password)
        user_obj.save()

        UserProfile.objects.create(
            user=user_obj, phone=phone, address=address, department=department,
            employee_number=employee_number, middle_name=middle_name,
            role=manager
        )

        messages.success(request, "Your account has been created successfully. Please log in.")
        return redirect('login')

    return render(request, 'account/signup.html')


def login_view(request):
    if request.method == 'POST':
        employee_number = request.POST.get('employee_number')
        password = request.POST.get('password')
        user = authenticate(request, username=employee_number, password=password)
        if user is not None:
            login(request, user)
            messages.success(request, " Login Successfully.")
            return redirect('index')  # Redirect to your desired homepage

        else:
            print("Invalid credentials")
            # Invalid credentials
            messages.error(request, "Invalid Credentials, Try again.")
            return redirect('login')

    return render(request, 'account/login.html')


@login_required
def logout_view(request):
    logout(request)
    messages.success(request, "Logout Successfully!")
    return redirect('login')  # Redirect to login page after logout


def password_reset_request(request):
    if request.method == "POST":
        password_reset_form = CustomPasswordResetForm(request.POST)
        if password_reset_form.is_valid():
            data = password_reset_form.cleaned_data['email']
            associated_users = User.objects.filter(email=data)
            if associated_users.exists():
                for user in associated_users:
                    subject = "Password Reset Requested"
                    email_template_name = "account/password_reset_email.html"
                    context = {
                        "email": user.email,
                        'domain': request.META['HTTP_HOST'],
                        'site_name': 'Website',
                        "uid": urlsafe_base64_encode(force_bytes(user.pk)),
                        "user": user,
                        'token': default_token_generator.make_token(user),
                        'protocol': 'http',  # Change to 'https' in production
                    }
                    email_html_content = render_to_string(email_template_name, context)
                    email = EmailMultiAlternatives(subject, email_html_content, settings.EMAIL_HOST_USER, [user.email])
                    email.attach_alternative(email_html_content, "text/html")
                    email.send(fail_silently=False)

            return redirect("password_reset_done")
    else:
        password_reset_form = CustomPasswordResetForm()
    return render(request, "account/password_reset.html", {"password_reset_form": password_reset_form})


def password_reset_done(request):
    return render(request=request, template_name="account/password_reset_done.html")


def password_reset_confirm(request, uidb64=None, token=None):
    try:
        uid = force_str(urlsafe_base64_decode(uidb64))
        user = User.objects.get(pk=uid)
    except (TypeError, ValueError, OverflowError, User.DoesNotExist):
        user = None

    if user is not None and default_token_generator.check_token(user, token):
        if request.method == 'POST':
            form = CustomSetPasswordForm(user, request.POST)
            if form.is_valid():
                form.save()
                return redirect('password_reset_complete')
        else:
            form = CustomSetPasswordForm(user)
        return render(request, 'account/password_reset_confirm.html', {'form': form})
    else:
        return HttpResponse('Password reset link is invalid!')

def password_reset_complete(request):
    return render(request=request, template_name="account/password_reset_complete.html")
