from django.contrib import admin
from . import models as management_models

# Register your models here.


admin.site.register(management_models.Task)
admin.site.register(management_models.Shift)
admin.site.register(management_models.Announcement)
admin.site.register(management_models.Request)
admin.site.register(management_models.ReceiverGroup)
admin.site.register(management_models.Message)
