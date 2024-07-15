from django.urls import path
from . import views as account_views


urlpatterns = [
    path('signup/', account_views.signup, name='signup'),
    path('', account_views.login_view, name='login'),
    path('logout/', account_views.logout_view, name='logout'),
    path('index/', account_views.index, name='index'),  # Add payment view URL
    path('password_reset/', account_views.password_reset_request, name='password_reset'),
    path('password_reset/done/', account_views.password_reset_done, name='password_reset_done'),
    path('reset/<uidb64>/<token>/', account_views.password_reset_confirm, name='password_reset_confirm'),
    path('reset/done/', account_views.password_reset_complete, name='password_reset_complete'),
    path('edit_profile/', account_views.edit_profile, name='edit_profile'),
]
