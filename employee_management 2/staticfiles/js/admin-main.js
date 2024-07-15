var link = document.createElement('link');
link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css';
document.head.appendChild(link);

var link1 = document.createElement('script');
link1.type = 'text/javascript';
link1.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
document.head.appendChild(link1);


var link2 = document.createElement('script');
link2.type = 'text/javascript';
link2.src = 'https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js';
document.head.appendChild(link2);



$(document).ready(function(){
        $('.suspend-link').on('click', function(){
            console.log('click');
            var url = $(this).attr('href');
            $('#si').attr('href', url);
        });
    });








$(document).ready(function () {
    var table = $('table').DataTable({
        paging: false,
        info: false,
        "pagingType": "full_numbers",
        "pageLength": 10,
    });
    // hide the "search" label
    $('.dataTables_filter').eq(0).hide();
    $('#buscar').on('keyup', function () {
        // Filter the table
        table.search(this.value).draw();
    });

    $('.page-link').on('click', function() {
        var page = $(this).text();

        if (page === 'Next') {
            table.page('next').draw('page');
        } else if (page === 'Previous') {
            table.page('previous').draw('page');
        } else {
            // Subtract 1 because DataTables uses zero-based indexing
            table.page(parseInt(page) - 1).draw('page');
        }
    });
});

