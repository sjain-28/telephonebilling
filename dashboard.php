<?php require_once 'includes/header.php'; ?>

<div style="background-color: transparent;margin:0px;padding:0px;border-radius:0px;" class="jumbotron">

    <p style="color: #ffffff;">Overview</p>
    <div class="row">
        <div class="col-sm-4" id="totalBrands">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of customers</h5>
                    <h2 class="card-text" style="text-align: center;">
                        <?php 
$totalCustomers = "SELECT COUNT(user_id) FROM users WHERE customer_status=1";
$totalCustomersResult = $connect->query($totalCustomers);
$totalCustomersResultRow = $totalCustomersResult->fetch_array();
echo $totalCustomersResultRow[0];
?>
                    </h2>
                </div>
            </div>
        </div>


        <div class="col-sm-4" id="totalCategories">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of Categories</h5>
                    <h2 class="card-text" style="text-align: center;">
                        <?php 
$totalCategories = "SELECT COUNT(category_id) FROM category";
$totalCategoriesResult = $connect->query($totalCategories);
$totalCategoriesResultRow = $totalCategoriesResult->fetch_array();
echo $totalCategoriesResultRow[0];
?>
                    </h2>
                </div>
            </div>
        </div>


        <div class="col-sm-4" id="totalProducts">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of Plans</h5>
                    <h2 class="card-text" style="text-align: center;">
                        <?php 
$totalPlans = "SELECT COUNT(plan_id) FROM plans";
$totalPlansResult = $connect->query($totalPlans);
$totalPlansResultRow = $totalPlansResult->fetch_array();
echo $totalPlansResultRow[0];
?>
                    </h2>
                </div>
            </div>
        </div>
    </div>











</div>


<?php require_once 'includes/footer.php'; ?>