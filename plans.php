<?php require_once 'includes/header.php'; ?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">Manage Plans</div>
            <div class="panel-body">
                <div class="div-action">
                    <button class="btn btn-info" data-toggle="modal" data-target="#addPlanModal">Add a Plan</button>
                    <a href="editDelPlan.php" class="btn btn-danger" role="button">Edit / Remove Plans</a>
                </div>

                <table class="tables" id="manageBrandTable" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Plan ID</th>
                            <th style="text-align: center;">Plan Cost</th>

                            <th style="text-align: center;">Plan Duration</th>
                            <th style="text-align: center;">Plan Type</th>
                        </tr>
                    </thead>

                </table>


            </div>
        </div>


    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addPlanModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Plans</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="form-horizontal" id="submitBrandForm" action="php_action/createPlans.php" method="POST">
                <div class="modal-body">
                    <div id="add-brand-messages"></div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_id">Plan Id:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="plan_id" name="plan_id"
                                placeholder="Enter plan Id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_cost">Plan Cost:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="plan_cost" name="plan_cost"
                                placeholder="Enter plan Cost" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_duration">Plan Duration:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="plan_duration" name="plan_duration"
                                placeholder="Enter plan Duration" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="plan_type">Plan Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="plan_type" name="plan_type"
                                placeholder="Enter plan type" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category_id">Category Id:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="category_id" name="category_id"
                                placeholder="Enter Category ID" required>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" id="createBrandBtn"
                            data-loading-text="Loading..">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>




<script type="text/javascript" src="custom/js/plan.js"></script>

<?php require_once 'includes/footer.php'; ?>