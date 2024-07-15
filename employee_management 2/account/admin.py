from django.contrib import admin
from . import models as account_models

admin.site.register(account_models.UserProfile)
