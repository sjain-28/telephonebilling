var manageUsersTable;

$(document).ready(function () {

    $("#navProduct").addClass('active');

    manageUsersTable = $("#manageUsersTable").DataTable({
        'ajax': 'php_action/fetchCustomerBill.php',
        'order': [],
        "paging": false,
        "info": false
    });
});