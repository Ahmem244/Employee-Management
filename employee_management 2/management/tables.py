"""this file has the tables of vehicles that are using in company and employees views"""
import django_tables2 as tables
from django.utils.html import format_html
from management import models as management_models, urls as management_urls


# Vehicle Table For Company
class ShiftsTables(tables.Table):
    actions = tables.Column(empty_values=())

    class Meta:
        attrs = {"class": "table  table-stripped data-table", "data-add-url": "Url here"}
        model = management_models.Shift
        fields = ['userprofile', 'date', 'start_time', 'end_time', 'notes']

    # def render_driver(self, record):
    #     return record.driver.userprofile.user.get_full_name()
    #
    # def render_actions(self, record):
    #     vehicle_details = "{vehicle_name} ({plate_number})".format(vehicle_name=record.all_vehicle_name,
    #                                                                plate_number=record.plate_number)
    #     return format_html("<a class='btn btn-sm text-primary' href='{update}'><i class='fa fa-pen'></i></a>"
    #                        "{detail}"
    #                        "{delete}"
    #                        "<a class='btn btn-sm text-primary' href='{checklist}'><i class='fa fa-list'></i></a>".format(
    #         update=vehicle_urls.edit_vehicle(record.pk),
    #         delete=delete_action(vehicle_urls.delete_vehicle(record.pk), vehicle_details),
    #         detail=backend_utils.detail_action(vehicle_urls.get_detail_vehicle(record.pk),
    #                                            'Vehicle Details'),
    #         checklist=vehicle_urls.get_checklist_vehicle(record.pk)))
    #
    # def render_photo(self, record):
    #     image_link = "/staticfiles/assets/img/no_image.png"
    #     if record.image:
    #         image_link = record.image.url
    #     return format_html("""
    # <img height="70px" src='{}'/>
    # """.format(image_link))
