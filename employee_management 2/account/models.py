from django.contrib.auth.models import User
from django.db import models


sales_advisor = 'Sales Advisor'
manager = 'Manager'
user_role_choices = [
    (sales_advisor, sales_advisor),
    (manager, manager)
]


class UserProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    profile_pic = models.ImageField(upload_to='profile_pics', blank=True)
    middle_name = models.CharField(max_length=50, blank=True)
    employee_number = models.CharField(max_length=50, blank=True)
    department = models.CharField(max_length=50, blank=True)
    phone = models.CharField(max_length=20, blank=True)
    address = models.TextField(blank=True)
    role = models.CharField(max_length=50, blank=True, choices=user_role_choices, default=manager)

    def __str__(self):
        return self.user.get_full_name()
