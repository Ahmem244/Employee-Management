from django import forms
from . import models as management_models
from django.forms.widgets import DateInput, TimeInput
from account import models as account_models
from management.models import Announcement


class ManagerShiftForm(forms.ModelForm):
    class Meta:
        model = management_models.Shift
        fields = ['userprofile', 'date', 'start_time', 'end_time', 'notes']
        widgets = {
            'date': DateInput(attrs={'type': 'date'}),
            'start_time': TimeInput(attrs={'type': 'time'}),
            'end_time': TimeInput(attrs={'type': 'time'}),
        }
        labels = {
            'userprofile': 'Sales Advisors',
        }


class ManagerTaskAssignmentForm(forms.ModelForm):
    class Meta:
        model = management_models.Task
        fields = ['userprofile', 'title', 'due_date', 'department', 'description', ]
        widgets = {
            'due_date': DateInput(attrs={'type': 'date'}),
        }
        labels = {
            'userprofile': 'Sales Advisors',
        }


class AddRequestForm(forms.ModelForm):
    class Meta:
        model = management_models.Request
        fields = ['title', 'description']


class EditAdvisorDepartmentForm(forms.ModelForm):
    class Meta:
        model = account_models.UserProfile
        fields = ['department', ]


class MessageForm(forms.ModelForm):
    class Meta:
        model = account_models.UserProfile
        fields = ['user', ]


class GroupCreateForm(forms.ModelForm):
    class Meta:
        model = management_models.ReceiverGroup
        fields = ['name','users', ]


class AnnouncementForm(forms.ModelForm):
    class Meta:
        model = Announcement
        fields = ['title', 'description']
