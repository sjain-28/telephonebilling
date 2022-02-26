<?php require_once 'php_action/core.php';?>


<!DOCTYPE html>
<html>

<head>
    <title>Telephone Billing System Group-21 Project</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="custom/css/custom.css">
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
    <script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="indexC.php">Group-21</a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav">
                    <li id="navDashboard" style="border-right: solid 1px #ddd;"><a href="dashboardC.php">Dashboard</a>
                    </li>
                    <li id="navBrand" style="border-right: solid 1px #ddd;"><a href="plansC.php">Plans</a></li>
                    <li id="navCategory" style="border-right: solid 1px #ddd;"><a href="categoryC.php">Category</a></li>

                    <li id="topNavAddOrder" style="border-right: solid 2px #1d6b1d;"><a style="color:#000;"
                            href="addPlan.php">Add Plan</a></li>

                    <li id="topNavManageOrder" style="background-color:#097173;"><a style="color:#ffffff;"
                            href="billC.php">View Bill</a></li>
                </ul>


                <ul class="nav navbar-nav navbar-right" id="navProfile">
                    <li id="topNavSetting" style="border-left: solid 1px #ddd;border-right: solid 1px #ddd;"><a
                            href="settingC.php">Account</a></li>
                    <li id="topNavLogout"><a href="logoutC.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">