document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleBtn');
    const sidebar = document.getElementById('sales_advisor');

    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('active');
        });
    }
});

function hello() {
    console.log("Hello world!");
}

function toggleSidebar() {
  
    const sidebar = document.querySelector('.sidebar');
    const body = document.querySelector('body');
    
    sidebar.classList.toggle('sidebar-open');
    body.classList.toggle('sidebar-open');
}
