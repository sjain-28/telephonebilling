<?php require_once 'includes/header.php'; ?>

<?php
if($_POST) {
      $plan_id = $_POST["plan_id"];

      $result = "SELECT * FROM plans WHERE plan_id = '$plan_id'";
      $resultConn = $connect->query($result);
      $row = $resultConn->fetch_array();
}
?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">Edit Plan</div>

            <div class="panel-body">
                <div class="addOrderMessages"></div>

                <div class="okay">
                    <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="plan_id" name="plan_id"
                                placeholder="Enter plan id">
                        </div>
                        <button type="submit" class="btn btn-success">Get details</button>
                    </form>
                </div>


                <form class="form-horizontal" id="submitOrderForm" action="php_action/editPlan.php" method="POST">
                    <div style="display:none;" class="form-group">
                        <input type="text" class="form-control" id="plan_id" name="plan_id"
                            value="<?php echo $row['plan_id'];?>">
                    </div>
                    <h4>Edit Plan</h4>
                    <hr style="margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_cost">Plan Cost</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_cost" id="plan_cost"
                                value="<?php echo $row['plan_cost'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_duration">Plan Duration</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_duration" id="plan_duration"
                                value="<?php echo $row['plan_duration'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_type">Plan Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_type" id="plan_type"
                                value="<?php echo $row['plan_type'];?>">
                        </div>
                    </div>





                    <button style="margin: 30px 0 30px 0;float:left;" type="submit" class="btn btn-success">Update
                        Plan</button>

                </form>

                <form class="form-inline" action="php_action/deletePlan.php" method="POST">
                    <div style="display:none;" class="form-group">
                        <input type="text" class="form-control" id="plan_id" name="plan_id"
                            value="<?php echo $row['plan_id'];?>">
                    </div>
                    <button style="margin: 30px 0 30px 10px;" type="submit" class="btn btn-primary">Delete
                        Plan</button>
                </form>


            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>