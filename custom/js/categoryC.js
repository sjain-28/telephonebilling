var manageCategoryTable;

$(document).ready(function () {

    $("#navCategory").addClass('active');

    manageCategoryTable = $("#manageCategoryTable").DataTable({
        'ajax': 'php_action/fetchCategoryC.php',
        'order': [],
        "paging": false,
        "info": false
    });
});