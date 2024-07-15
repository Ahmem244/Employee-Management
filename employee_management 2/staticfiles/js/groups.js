


$(document).ready(function () {
    // Listen for changes on radio buttons
    $('input[type=radio][name=course_type]').change(function () {
        console.log(this.value);
        // Clear the select field
        $('#afiliados').empty();
        // Make an AJAX call to the server to get the courses
        $.get('/adminportal/groups/get_courses/', {course_type: this.value}, function (data) {
            // Add the courses to the select field
            for (var i = 0; i < data.length; i++) {
                $('#afiliados').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
            }
        });
    });
});


$(document).ready(function () {
    $('.editgroupbtn').click(function (e) {

        e.preventDefault();
        var url = $(this).data('url');
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                // Do something with the response
                //insert html into modal-body
                $('#editGroupModel').html(response)


            }
        });
    });
});

$(document).ready(function () {
    // Listen for changes on radio buttons
    $('input[type=radio][name=course_type1]').change(function () {
        console.log(this.value);
        // Clear the select field
        $('#afiliados1').empty();
        // Make an AJAX call to the server to get the courses
        $.get('/adminportal/groups/get_courses/', {course_type: this.value}, function (data) {
            // Add the courses to the select field
            for (var i = 0; i < data.length; i++) {
                $('#afiliados1').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
            }
        });
    });
});

//custum pagination





