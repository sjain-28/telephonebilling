var manageBrandTable;

$(document).ready(function () {

	$("#navBrand").addClass('active');

	manageBrandTable = $("#manageBrandTable").DataTable({
		'ajax': 'php_action/fetchPlan.php',
		'order': [],
		"paging": false,
		"info": false
	});
});


