from django.urls import path
from . import sales_advisor_views as sa_views
from . import manager_views as m_views

urlpatterns = [
    #     ==============MANAGER====================
    path('manager/shift/', m_views.manager_shift, name='manager-shift'),
    path('task_announcement/', m_views.manager_task_assignment, name='manager-task-assignment'),
    path('leave_requests/', m_views.manager_leave_requests, name='manager-leave-requests'),
    path('leave_requests/<int:id>', m_views.manager_leave_requests_action, name='manager-take-action-on-leave-requests'),
    path('sales_advisors_directory/', m_views.manager_sales_advisors_directory, name='manager-sales-advisors-directory'),
    path('edit_advisor_department/<int:id>', m_views.manager_edit_advisor_department, name='manager-edit-advisor-department'),
    path('manage/message/', m_views.manager_messages, name='manager-message'),
    path('get_messages', m_views.get_messages, name='manager-get-messages'),
    path('get_group_messages', m_views.get_group_messages, name='manager-get-group-messages'),
    path('send_messages', m_views.send_messages, name='manager-send-messages'),
    path('create_group', m_views.create_group, name='create-group'),
    path('manager/delete/advisor/', m_views.manager_delete_advisor, name='manager-delete-advisor'),
    path('latest/announcements', m_views.m_latest_announcements, name='m-latest-accouncement'),
    path('announcements/add/', m_views.add_announcement, name='add_announcement'),
    path('announcements/edit/<int:pk>/', m_views.edit_announcement, name='edit_announcement'),
    path('announcements/delete/', m_views.delete_announcement, name='delete_announcement'),
    path('add_sales_advisor', m_views.add_sales_advisor, name="add_sales_advisor"),


    #     ======================SALES ADVISORS=========================
    path('next/shift/', sa_views.next_shifts, name='next-shifts'),
    path('task/overview', sa_views.task_overview, name='task-overview'),
    path('latest/announcement', sa_views.sa_latest_announcements, name='sa-latest-accouncement'),
    path('request/status', sa_views.sa_leave_request_status, name='sa-leave-request-status'),
    path('request/add', sa_views.add_request, name='sa-add-request'),
    path('task/complete/<int:id>', sa_views.mark_task_as_complete, name='sa_mark_task_as_complete'),
    path('sa_message', sa_views.sa_messages, name='sa-messages'),
]
