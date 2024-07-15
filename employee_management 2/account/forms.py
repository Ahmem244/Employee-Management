from django import forms
from django.contrib.auth.models import User
from .models import UserProfile
from django.contrib.auth.forms import PasswordResetForm, SetPasswordForm


class EditProfileForm(forms.ModelForm):
    email = forms.EmailField(widget=forms.EmailInput(attrs={'class': 'form-control'}), label='Email')
    first_name = forms.CharField(widget=forms.TextInput(attrs={'class': 'form-control'}), label='First Name')
    middle_name = forms.CharField(widget=forms.TextInput(attrs={'class': 'form-control'}), label='Middle Name', required=False)
    last_name = forms.CharField(widget=forms.TextInput(attrs={'class': 'form-control'}), label='Last Name')
    phone = forms.CharField(widget=forms.TextInput(attrs={'class': 'form-control'}), label='Phone')
    address = forms.CharField(widget=forms.Textarea(attrs={'class': 'form-control'}), label='Address', required=False)
    department = forms.CharField(widget=forms.TextInput(attrs={'class': 'form-control'}), label='Department')

    class Meta:
        model = UserProfile
        fields = ['email', 'first_name', 'middle_name', 'last_name', 'phone', 'address', 'department']

    def __init__(self, *args, **kwargs):
        user = kwargs.pop('user', None)
        super(EditProfileForm, self).__init__(*args, **kwargs)
        if user:
            self.fields['email'].initial = user.email
            self.fields['first_name'].initial = user.first_name
            self.fields['middle_name'].initial = user.userprofile.middle_name
            self.fields['last_name'].initial = user.last_name
            self.fields['phone'].initial = user.userprofile.phone
            self.fields['address'].initial = user.userprofile.address
            self.fields['department'].initial = user.userprofile.department

    def save(self, commit=True):
        user = super(EditProfileForm, self).save(commit=False)
        user.user.email = self.cleaned_data['email']
        user.user.first_name = self.cleaned_data['first_name']
        user.user.last_name = self.cleaned_data['last_name']
        user.middle_name = self.cleaned_data['middle_name']
        user.phone = self.cleaned_data['phone']
        user.address = self.cleaned_data['address']
        user.department = self.cleaned_data['department']
        if commit:
            user.user.save()
            user.save()
        return user


class SignupForm(forms.ModelForm):
    password1 = forms.CharField(label='Password', widget=forms.PasswordInput)
    password2 = forms.CharField(label='Confirm Password', widget=forms.PasswordInput)

    class Meta:
        model = User
        fields = ('email',)

    def clean_password2(self):
        password1 = self.cleaned_data.get('password1')
        password2 = self.cleaned_data.get('password2')
        if password1 and password2 and password1 != password2:
            raise forms.ValidationError('Passwords not matched')
        return password2

    def save(self, commit=True):
        user = super().save(commit=False)
        user.set_password(self.cleaned_data['password1'])
        if commit:
            user.save()
        return user


class LoginForm(forms.Form):
    email = forms.CharField(label='email')
    password = forms.CharField(label='Password', widget=forms.PasswordInput)


class CustomPasswordResetForm(PasswordResetForm):
    email = forms.EmailField(max_length=254, widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Email'}))

    def clean_email(self):
        email = self.cleaned_data.get('email')
        if not User.objects.filter(email=email).exists():
            raise forms.ValidationError('There is no user registered with the specified email address.')
        return email

class CustomSetPasswordForm(SetPasswordForm):
    new_password1 = forms.CharField(widget=forms.PasswordInput(attrs={'class': 'form-control', 'placeholder': 'New password'}))
    new_password2 = forms.CharField(widget=forms.PasswordInput(attrs={'class': 'form-control', 'placeholder': 'Confirm new password'}))
