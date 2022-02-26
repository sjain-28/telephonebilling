<?php require_once 'includes/header.php';?>

<?php
if ($_POST) {
    $bill_id = $_POST["bill_id"];

    $result = "SELECT * FROM bills WHERE bill_id = '$bill_id'";
    $resultConn = $connect->query($result);
    $rowCount = mysqli_num_rows($resultConn);
    $row = $resultConn->fetch_array();
}
?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">View Specific Bill</div>
            <div class="panel-body">
                <div class="addOrderMessages"></div>

                <div class="okay">
                    <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="bill_id" name="bill_id"
                                placeholder="Enter a bill id">
                        </div>
                        <button type="submit" class="btn btn-primary">Get details</button>
                    </form>
                </div>

                <?php if ($_POST): ?>

                <?php if ($rowCount < 1): ?>
                <h4 class="text-center text-danger">Bill not found!!!</h4>
                <?php exit();?>
                <?php endif;?>

                <form class="form-horizontal" id="submitOrderForm" action="php_action/updatePayment.php" method="POST">
                    <h4>Customer Details</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name"
                                value="<?php echo $row['client_name']; ?>" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contact">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact" id="contact"
                                value="<?php echo $row['client_contact']; ?>" readonly="readonly">
                        </div>
                    </div>



                    <h4 style="margin-top:40px;">Bill Details</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="date">Bill Date</label>
                        <?php echo $row['bill_date']; ?>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_type">Plan Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_type" id="plan_type"
                                value="<?php echo $row['plan_type']; ?>" readonly="readonly">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_id">Plan ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_id" id="plan_id"
                                value="<?php echo $row['plan_id']; ?>" readonly="readonly">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category_name">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" id="category_name"
                                value="<?php echo $row['category_name']; ?>" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contact">Category Id</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="category_id" id="category_id"
                                value="<?php echo $row['category_id']; ?>" readonly="readonly">
                        </div>
                    </div>




                    <h4 style="margin-top:40px;">Amount Details (in Rupees)</h4>
                    <hr style="margin-top: 10px;">


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="date">Total Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="total" id="total"
                                value="<?php echo $row['total_amount']; ?>" readonly="readonly">
                        </div>
                    </div>


                    <h4 style="margin-top:40px;">Payment Details</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="date">Payment Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="paymentType" id="paymentType"
                                value="<?php echo $row['payment_type']; ?>" readonly="readonly">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contact">Amount Paid</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="paid" id="paid"
                                value="<?php echo $row['total_amount']; ?>" readonly="readonly">
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
}
<?php endif;?>

<?php require_once 'includes/footer.php';?>