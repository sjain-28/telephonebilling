<?php require_once 'includes/header1.php'; ?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">Please verify the details and finalize payment</div>
            <div class="panel-body">
                <form class="form-horizontal" id="submitOrderForm" action="php_action/createPlansC.php" method="POST">
                    <h4>Customer Details</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="username">Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Enter customer's full name" value="<?php echo $_POST["username"]; ?>"
                                readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="userId">Customer Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="userId" id="userId" placeholder="Customer Id"
                                value="<?php echo $_POST["userId"]; ?>" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contact">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact" id="contact"
                                placeholder="Enter customer's phone number" value="<?php echo $_POST["contact"]; ?>"
                                readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="client_email">Client Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="client_email" id="client_email"
                                placeholder="Enter customer's Email Id" value="<?php echo $_POST["client_email"]; ?>"
                                readonly="readonly">
                        </div>
                    </div>


                    <h4 style="margin-top:40px;">Order Details</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="date">Order Date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="date" id="date"
                                value="<?php echo $_POST["date"]; ?>" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_type">Selected Plan type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_type" id="plan_type"
                                value="<?php
          $pid = $_POST["planId"];$productSql = "SELECT * FROM plans WHERE plan_id = '$pid'";$productData = $connect->query($productSql);$value = $productData->fetch_assoc();$p_name = $value['plan_type'];echo "$p_name";?>"
                                readonly="readonly">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_id">Plan ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_id" id="plan_id"
                                value="<?php echo $value['plan_id'] ;?>" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category_name">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" id="category_name"
                                value="<?php
          $pid = $_POST["categoryId"];$productSql = "SELECT * FROM category WHERE category_id = '$pid'";$productData = $connect->query($productSql);$value1 = $productData->fetch_assoc();$p_name = $value1['category_name'];echo "$p_name";?>"
                                readonly="readonly">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category_id">Category ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_id" id="category_id"
                                value="<?php echo $value1['category_id'] ;?>" readonly="readonly">
                        </div>
                    </div>

                    <h4 style="margin-top:40px;">Amount Details (in Rupees)</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_cost">Total Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_cost" id="plan_cost"
                                value="<?php echo $value['plan_cost']; ?>" readonly="readonly">
                        </div>
                    </div>


                    <h4 style="margin-top:40px;">Payment Details</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="date">Payment Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="paymentType" id="paymentType" required>
                                <option value="">---Select---</option>
                                <option value="cash">cash</option>
                                <option value="card">Debit/Credit Card</option>
                                <option value="ebanking">Internet Banking</option>
                                <option value="upi">upi</option>
                            </select>
                        </div>
                    </div>

                    <button style="margin: 30px 0 30px 0;" type="submit" class="btn btn-primary" id="addOrdersBtn">Buy
                        Plan</button>
                </form>


            </div>
        </div>
    </div>
</div>




<?php require_once 'includes/footer.php'; ?>