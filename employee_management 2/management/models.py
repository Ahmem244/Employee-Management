from django.db import models


class Task(models.Model):
    userprofile = models.ForeignKey('account.UserProfile', on_delete=models.CASCADE, null=True, blank=True)
    title = models.CharField(max_length=200, null=True, blank=True)
    description = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True, null=True, blank=True)
    is_completed = models.BooleanField(default=False, null=True, blank=True)
    due_date = models.DateField(null=True, blank=True)
    department = models.CharField(max_length=100, null=True, blank=True)

    def __str__(self):
        return self.title


class Shift(models.Model):
    userprofile = models.ForeignKey('account.UserProfile', on_delete=models.CASCADE)
    date = models.DateField(null=True, blank=True)
    start_time = models.TimeField()
    end_time = models.TimeField()
    is_published = models.BooleanField(default=False)
    notes = models.TextField(null=True, blank=True)

    # def __str__(self):
    #     return self.shift_name


class Announcement(models.Model):
    userprofile = models.ForeignKey('account.UserProfile', on_delete=models.CASCADE, related_name='announcements')
    title = models.CharField(max_length=200)
    description = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)
    acknowledged_by = models.ManyToManyField('account.UserProfile', related_name='acknowledged_announcements')

    def __str__(self):
        return self.title


pending = 'PENDING'
approved = 'APPROVED'
denied = 'DENIED'
approval_choices = [
    (pending, pending),
    (approved, approved),
    (denied, denied)
]


# Approve or deny leave and shift change requests.
class Request(models.Model):
    userprofile = models.ForeignKey('account.UserProfile', on_delete=models.CASCADE)
    title = models.CharField(max_length=200)
    description = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)
    approval_status = models.CharField(max_length=20, default=pending,
                                       choices=approval_choices)
    approved_by = models.ForeignKey('account.UserProfile', on_delete=models.CASCADE, related_name='approved_requests',
                                    null=True, blank=True)

    def __str__(self):
        return self.title


# messaging system between users and managers


class ReceiverGroup(models.Model):
    name = models.CharField(max_length=200)
    users = models.ManyToManyField('account.UserProfile', related_name='receiver_groups')
    is_group = models.BooleanField(default=False)

    def __str__(self):
        return self.name


class Message(models.Model):
    sender = models.ForeignKey('account.UserProfile', on_delete=models.CASCADE)
    message_content = models.TextField()
    receiver = models.ForeignKey(ReceiverGroup, on_delete=models.CASCADE, related_name='received_messages')
    created_at = models.DateTimeField(auto_now_add=True)
    is_read = models.BooleanField(default=False)

    def __str__(self):
        return f"{self.sender.user.get_full_name()}" + " to " + f"{self.receiver.name}"
