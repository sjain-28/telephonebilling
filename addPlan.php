<?php require_once 'includes/header1.php'; ?>
<?php 
$user_id = $_SESSION['userId'];
$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
$query = $connect->query($sql);
$result = $query->fetch_assoc();


?>


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="page-heading">Add Plan</div>
            </div>

            <div class="panel-body">


                <div id="usernameForm">
                    <form action="payment.php" method="post" class="form-horizontal" id="changeUsernameForm">
                        <fieldset>

                            <hr style="margin-top:5px;">



                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="<?php echo $result['username']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userId" class="col-sm-2 control-label">Customer Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="userId" name="userId"
                                        value="<?php echo $result['user_id']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact" class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contact" name="contact" value="<?php
                      $productSql = "SELECT * FROM bills where user_id = {$user_id} GROUP BY client_contact";
                      $productData = $connect->query($productSql);

                      while($row = $productData->fetch_array()) {                     
                        echo "$row[7]";
                      }
                    ?> " required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="client_email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="client_email" name="client_email" value="<?php
                      $productSql = "SELECT * FROM bills where user_id = {$user_id} GROUP BY client_email";
                      $productData = $connect->query($productSql);

                      while($row = $productData->fetch_array()) {                     
                        echo "$row[3]";
                      }
                    ?> " required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="<?php echo $result['customer_address']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="date">Order Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="date" id="date"
                                        value="<?php echo date("Y-m-d"); ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="planId">Select Plan Id</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="planId" id="planId">
                                        <option value="">---Select---</option>
                                        <?php
                      $productSql = "SELECT * FROM plans";
                      $productData = $connect->query($productSql);

                      while($row = $productData->fetch_array()) {                     
                        echo "<option value='".$row['plan_id']."' id='plan".$row['plan_id']."'>".$row['plan_id']."</option>";
                      }
                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="categoryId">Select Category Id</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="categoryId" id="categoryId">
                                        <option value="">---Select---</option>
                                        <?php
                      $productSql = "SELECT * FROM category";
                      $productData = $connect->query($productSql);

                      while($row = $productData->fetch_array()) {                     
                        echo "<option value='".$row['category_id']."' id='category".$row['category_id']."'>".$row['category_id']."</option>";
                      }
                    ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="hidden" name="user_id" id="user_id"
                                        value="<?php echo $result['user_id'] ?>" />
                                    <button style="margin: 30px 0 30px 0;" type="submit" class="btn btn-primary"
                                        id="addOrdersBtn">Continue to payment details</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>



            </div>

        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {

    $("#topNavSetting").addClass('active');
});
</script>
<?php require_once 'includes/footer.php'; ?>