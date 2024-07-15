import json
from django.http import JsonResponse
from django.shortcuts import get_object_or_404, render, redirect
from django.views.decorators.csrf import csrf_exempt
from django.contrib import messages
from django.urls import reverse
from . import models as management_models
from account import models as account_models
from . import forms as management_forms
from account import models as account_models
from account.models import *
from django.contrib.auth.decorators import login_required


@login_required
def manager_shift(request):
    if request.method == 'POST':
        employee = request.POST.get('userprofile', None)
        date = request.POST.get('date', None)
        start_time = request.POST.get('start_time', None)
        end_time = request.POST.get('end_time', None)
        notes = request.POST.get('notes', None)
        shift = management_models.Shift.objects.create(userprofile_id=employee, date=date, start_time=start_time,
                                                       end_time=end_time, notes=notes)
        messages.success(request, "Shift added successfully")
    
    shift_form = management_forms.ManagerShiftForm()
    all_sales_advisors = account_models.UserProfile.objects.filter(role=account_models.sales_advisor)
    shift_form.fields['userprofile'].queryset = all_sales_advisors
    all_shifts = management_models.Shift.objects.all()
    context = {
        'form_title': "Add Shift",
        'form': shift_form,
        'nav_class': "shift_management",
        'full_name': request.user.get_full_name(),
        'shifts': all_shifts,
    }

    return render(request, 'add_or_edit.html', context)


@login_required
def manager_task_assignment(request):
    if request.method == 'POST':
        user = request.POST.get('userprofile', None)
        task_title = request.POST.get('title', None)
        task_description = request.POST.get('description', None)
        due_date = request.POST.get('due_date', None)
        department = request.POST.get('department', None)
        task = management_models.Task.objects.create(title=task_title, description=task_description, due_date=due_date,
                                                     department=department, userprofile_id=user)
        messages.success(request, "Task added successfully")
    
    task_form = management_forms.ManagerTaskAssignmentForm()
    all_sales_advisors = account_models.UserProfile.objects.filter(role=account_models.sales_advisor)
    task_form.fields['userprofile'].queryset = all_sales_advisors
    all_tasks = management_models.Task.objects.all()
    context = {
        'form_title': "Add Task",
        'form': task_form,
        'nav_class': 'task_management',
        'full_name': request.user.get_full_name(),
        'tasks': all_tasks,
    }

    return render(request, 'add_or_edit.html', context)



@login_required
def manager_leave_requests(request):
    if request.method == "POST":
        form = management_forms.ManagerShiftForm()
        all_sales_advisors = account_models.UserProfile.objects.filter(role=account_models.sales_advisor)
        form.fields['userprofile'].queryset = all_sales_advisors
        if request.method == "POST":
            sales_advisor = request.POST.get('userprofile')
            requests = management_models.Request.objects.filter(userprofile_id=sales_advisor)
            context = {
                'requests': requests,
                'form': form,
                'nav_class': 'leave_request',
                'full_name': request.user.get_full_name(),

            }
            return render(request, 'leave_manager.html', context)

        return render(request, 'leave_manager.html', {'form': form})
    all_leave_requests = management_models.Request.objects.all().order_by('-created_at')
    context = {
        'leave_requests': all_leave_requests,
        'form_title': "All Leave Requests",
        'nav_class': 'leave_request',
        'full_name': request.user.get_full_name(),

    }
    return render(request, 'add_or_edit.html', context)


@login_required
def manager_leave_requests_action(request, id):
    print("entered this is id====", id)
    status_param = request.GET.get('decision')
    print("status_param====", status_param)
    request_obj = management_models.Request.objects.get(id=id)
    if status_param == '1':
        request_obj.approval_status = management_models.approved
        request_obj.save()
        messages.success(request, "Leave request approved")
    elif status_param == '0':
        request_obj.approval_status = management_models.denied
        request_obj.save()
        messages.success(request, "Leave request denied")
    return redirect('manager-leave-requests')


@login_required
def manager_sales_advisors_directory(request):
    all_sales_advisors = account_models.UserProfile.objects.filter(role=account_models.sales_advisor)
    context = {
        'advisors': all_sales_advisors,
        'nav_class': 'sales_advisor_directory',
        'form_title': 'Sales Advisors',
        'full_name': request.user.get_full_name(),

    }
    return render(request, 'add_or_edit.html', context)


@login_required
def manager_edit_advisor_department(request, id):
    advisor = account_models.UserProfile.objects.get(id=id)
    form = management_forms.EditAdvisorDepartmentForm(instance=advisor)
    if request.method == 'POST':
        department = request.POST.get('department', None)
        advisor.department = department
        advisor.save()
        messages.success(request, "Department updated successfully")
        return redirect('manager-sales-advisors-directory')
    context = {
        'form': form,
        'nav_class': 'sales_advisor_directory',
        'form_title': 'Edit Advisor Department',
        'full_name': request.user.get_full_name(),

    }
    return render(request, 'add_or_edit.html', context)


@login_required
def manager_messages(request):
    if request.method == "POST":
        return render(request, 'leave_manager.html')
    form = management_forms.MessageForm()
    form.fields['user'].queryset = account_models.UserProfile.objects.all().exclude(user_id=request.user.id)
    users = account_models.UserProfile.objects.all().exclude(user_id=request.user.id)
    all_receiver_groups = management_models.ReceiverGroup.objects.filter(users=request.user.userprofile, is_group=True)
    allusers = []
    allgroups = []
    for group in all_receiver_groups:
        allgroups.append({"name": group.name, "id": group.id})
    for user in users:
        allusers.append({"name": user.user.get_full_name(), "id": user.user.id})

    print("users====", users)
    context = {
        "form": form,
        "all_users": allusers,
        "all_groups": allgroups,
        "request": request,
        "admin": True,
        'nav_class': "messages",
        'links': [
            {
                'button': "Add Group",
                'href': reverse('sa-add-request'),
                'color': 'blue'
            },

        ],
    }
    return render(request, 'admin/messages.html', context)


@login_required
def get_messages(request):
    if request.method == 'GET':
        receiver = request.GET.get('receiver')
        userprofile_obj = account_models.UserProfile.objects.get(user_id=request.user.id)
        receiver_objs = management_models.ReceiverGroup.objects.filter(users=userprofile_obj, is_group=False)
        for receiver_obj in receiver_objs:
            users = receiver_obj.users.all()
            for user in users:
                if user.user_id == int(receiver):
                    messages = management_models.Message.objects.filter(receiver=receiver_obj).order_by(
                        'created_at')
                    all_messages = []
                    for message in messages:
                        all_messages.append({
                            "sender": message.sender.user.get_full_name(),
                            "message": message.message_content,
                            "created_at": message.created_at,
                            "is_read": message.is_read,
                            "is_sent_by_user": 'YES' if message.sender.user_id == request.user.id else "NO",
                            "requested_user": request.user.id
                        })
                    return JsonResponse(all_messages, safe=False)

                else:
                    pass
        return JsonResponse([], safe=False)


@login_required
def get_group_messages(request):
    if request.method == 'GET':
        group = request.GET.get('group')
        receiver_obj = management_models.ReceiverGroup.objects.get(id=group, is_group=True)
        messages = management_models.Message.objects.filter(receiver=receiver_obj).order_by('created_at')
        all_messages = []
        for message in messages:
            all_messages.append({
                "sender": message.sender.user.get_full_name(),
                "message": message.message_content,
                "created_at": message.created_at,
                "is_read": message.is_read,
                "is_sent_by_user": 'YES' if message.sender.user_id == request.user.id else "NO",
                "requested_user": request.user.id
            })
        return JsonResponse(all_messages, safe=False)


@csrf_exempt
def send_messages(request):
    if request.method == 'POST':
        data = json.loads(request.body)
        receiver = data.get('receiver_id')
        message = data.get('message')
        group_id = data.get('group_id')
        if group_id:
            receiver_obj = management_models.ReceiverGroup.objects.get(id=group_id)
            message_obj = management_models.Message.objects.create(sender=request.user.userprofile,
                                                                   message_content=message,
                                                                   receiver=receiver_obj)
            return JsonResponse({"message": message_obj.message_content, "created_at": message_obj.created_at,
                                 "sender": message_obj.sender.user.get_full_name(), "is_sent_by_user": 'YES',
                                 "requested_user": request.user.id}, safe=False)
        sender = request.user.id

        from django.contrib.auth.models import User
        sender_user = account_models.UserProfile.objects.get(user_id=sender)
        sender_name = sender_user.user.get_full_name()
        receiver_user = account_models.UserProfile.objects.get(user_id=receiver)
        receiver_name = receiver_user.user.get_full_name()
        if sender_user.id < receiver_user.id:
            receiver_obj = management_models.ReceiverGroup.objects.filter(name=f'{sender_name}_{receiver_name}').last()
        else:
            receiver_obj = management_models.ReceiverGroup.objects.filter(name=f'{receiver_name}_{sender_name}').last()
        if not receiver_obj:
            if sender_user.id < receiver_user.id:
                receiver_obj = management_models.ReceiverGroup.objects.create(name=f'{sender_name}_{receiver_name}')
            else:
                receiver_obj = management_models.ReceiverGroup.objects.create(name=f'{receiver_name}_{sender_name}')
            receiver_obj.users.add(sender_user)
            receiver_obj.users.add(receiver_user)
        message_obj = management_models.Message.objects.create(sender=request.user.userprofile, message_content=message,
                                                               receiver=receiver_obj)
        return JsonResponse({"message": message_obj.message_content, "created_at": message_obj.created_at,
                             "sender": message_obj.sender.user.get_full_name(), "is_sent_by_user": 'YES',
                             "requested_user": request.user.id}, safe=False)


@login_required
def create_group(request):
    form = management_forms.GroupCreateForm()

    if request.method == 'POST':
        name = request.POST.get('name')
        users = request.POST.getlist('users')
        print("there are the names======", name, users)
        obj = management_models.ReceiverGroup.objects.create(name=name, is_group=True)
        for user in users:
            obj.users.add(account_models.UserProfile.objects.get(id=user))
        obj.users.add(request.user.userprofile)
        return redirect('manager-message')

    all_users = account_models.UserProfile.objects.all().exclude(user_id=request.user.id)
    form.fields['users'].queryset = all_users
    context = {
        'form': form,

    }
    return render(request, 'add_or_edit.html', context)


@login_required
def manager_delete_advisor(request):
    if request.method == 'GET':
        advisor_id = request.GET.get('id')
        advisor = UserProfile.objects.filter(id=advisor_id).first()
        advisor = get_object_or_404(account_models.User, id=advisor.user.id)
        advisor.delete()
        messages.success(request, " deleted successfully.")
        return redirect('manager-sales-advisors-directory')
    return redirect('manager-sales-advisors-directory')


@login_required
def m_latest_announcements(request):
    announcements = management_models.Announcement.objects.all().order_by('-created_at')
    context = {
        'announcements': announcements,
        'nav_class': 'latest_announements',
        'form_title': 'Latest Announcements',
        'full_name': request.user.get_full_name(),

    }
    return render(request, 'm_add_or_edit.html', context)


@login_required
def add_announcement(request):
    if request.method == 'POST':
        form = management_forms.AnnouncementForm(request.POST)
        if form.is_valid():
            announcement = form.save(commit=False)
            announcement.userprofile = request.user.userprofile
            announcement.save()
            messages.success(request, 'Announcement created successfully.')
            return redirect('m-latest-accouncement')
    else:
        form = management_forms.AnnouncementForm()

    context = {
        'form': form,
        'nav_class': 'add_announcement',
        'form_title': 'Add Announcement',
        'full_name': request.user.get_full_name(),
    }
    return render(request, 'm_add_or_edit.html', context)


@login_required
def edit_announcement(request, pk):
    announcement = get_object_or_404(management_models.Announcement, pk=pk)
    if request.method == 'POST':
        form = management_forms.AnnouncementForm(request.POST, instance=announcement)
        if form.is_valid():
            form.save()
            messages.success(request, 'Announcement updated successfully.')
            return redirect('m-latest-accouncement')
    else:
        form = management_forms.AnnouncementForm(instance=announcement)

    context = {
        'form': form,
        'nav_class': 'edit_announcement',
        'form_title': 'Edit Announcement',
        'full_name': request.user.get_full_name(),
    }
    return render(request, 'm_add_or_edit.html', context)


@login_required
def delete_announcement(request):
    announcement_id = request.GET.get('id')
    announcement = get_object_or_404(management_models.Announcement, id=announcement_id)
    announcement.delete()
    messages.success(request, 'Announcement deleted successfully.')
    return redirect('m-latest-accouncement')


@csrf_exempt
def add_sales_advisor(request):
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
            role=sales_advisor
        )
        return redirect('manager-sales-advisors-directory')
    
    return render(request, 'account/signup.html')
