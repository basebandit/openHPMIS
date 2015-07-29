<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>openHPMIS</title>

        <script src="style/extra/js/jquery.timepicker.js"></script>
        <script src="style/extra/js/jquery.dataTables.js"></script>
        <script src="style/extra/js/common.js"></script>

        <script type="text/javascript" language="javascript" src="style/extra/js/jquery-ui.js"></script>
        <script type="text/javascript" language="javascript" src="style/extra/js/autocomplete.js"></script>

        <link rel="stylesheet" href='style/extra/js/jquery.timepicker.css' type="text/css"/>

        <link rel="stylesheet" href='style/extra/js/themes/smoothness/jquery-ui-1.8.4.custom.css' type="text/css"/>


        <!--Start Lightbox JS and CSS-->

<!--        <script src="style/extra/js/lightbox/jquery-1.7.2.min.js"></script>-->
        <script src="style/extra/js/lightbox/lightbox.js"></script>        
        <link href="style/extra/css//lightbox.css" rel="stylesheet" />

        <!--End Lightbox JS and CSS-->        

        <!-- CSS FOR MULTIPLE SELECT -->
        <link rel="stylesheet" href="style/extra/css/docsupport/chosen.css">
        <style type="text/css" media="all">
            /* fix rtl for demo */
            .chzn-rtl .chzn-drop { left: -9000px; }
        </style>

        <!-- END CSS MULTIPLE SELECT -->
        <link rel="stylesheet" href='style/extra/css//style.css' type="text/css"/>
        <!-- BOOTSTRAP STYLES-->
        <link href="style/extra/assets/css/bootstrap.css" rel="stylesheet" />
        <!-- JQUERY UI STYLES-->
        <link href="style/extra/assets/css/jquery-ui-1.9.1.custom.min.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="style/extra/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="style/extra/assets/css/custom.css" rel="stylesheet" />
        <!-- CHIKITSA STYLES-->
        <link href="style/extra/assets/css/chikitsa.css" rel="stylesheet" />
        <!-- TABLE STYLES-->
        <link href="style/extra/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


        <!-- JQUERY SCRIPTS -->
        <script src="style/extra/assets/js/jquery-1.10.2.js"></script>
        <!-- JQUERY UI SCRIPTS -->
        <script src="style/extra/assets/js/jquery-ui.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="style/extra/assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="style/extra/assets/js/jquery.metisMenu.js"></script>
        <!-- DATA TABLE SCRIPTS -->
        <script src="style/extra/assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="style/extra/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <!-- TimePicker SCRIPTS-->
        <script src="style/extra/assets/js/jquery.datetimepicker.js"></script>
        <link href="style/extra/assets/js/jquery.datetimepicker.css" rel="stylesheet" />
        <!-- CHOSEN SCRIPTS-->
        <script src="style/extra/assets/js/chosen.jquery.min.js"></script>
        <link href="style/extra/assets/css/chosen.min.css" rel="stylesheet" />
        <!-- Lightbox SCRIPTS-->
        <script src="style/extra/assets/js/lightbox.min.js"></script>
        <link href="style/extra/assets/css/lightbox.css" rel="stylesheet" />
        <!-- Sketch SCRIPTS-->
        <script src="style/extra/assets/js/sketch.js"></script>	
        <!-- CUSTOM SCRIPTS -->
        <script src="style/extra/assets/js/custom.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost/Chikitsa0.1.4/main.php/appointment/index">
                        Chikitsa</a> 
                </div>
                <div style="color: white;float:left;font-size: 16px;margin-left:25px;">
                    <h3>Tag Line					</h3>
                </div>
                <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                    Welcome, Administrator				<a href="http://localhost/Chikitsa0.1.4/main.php/admin/change_profile" class="btn btn-primary square-btn-adjust">Change Profile</a>
                    <a href="http://localhost/Chikitsa0.1.4/main.php/login/logout" class="btn btn-danger square-btn-adjust">Log Out</a> 
                </div>
            </nav> 
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/main.php/patient/index"><i class="fa fa-users fa-3x"></i>Patients</a>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/main.php/appointment/index"><i class="fa fa-calendar fa-3x"></i>Appointments</a>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/main.php/#"><i class="fa fa-user-md fa-3x"></i>Doctor</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/main.php/appointment/inavailability">Inavailablity</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="main.php/#"><i class="fa fa-line-chart fa-3x"></i>Reports</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="appointment_report.php">Appointment Report</a>
                                </li>							
                                <li>
                                    <a href="purchase_report.php">Purchase Report</a>
                                </li>							
                                <li>
                                    <a href="bill_detail_report.php">Bill Detail Report</a>
                                </li>							
                                <li>
                                    <a href="patient_report.php">Patient Report</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="main.php/#"><i class="fa fa-cog fa-3x"></i>Administration</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="clinic.php">Clinic Detail</a>
                                </li>							
                                <li>
                                    <a href="invoice.php">Invoice</a>
                                </li>							
                                <li>
                                    <a href="users.php">Users</a>
                                </li>							
                                <li>
                                    <a href="template.php">Change Template</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/main.php/settings/change_settings">Setting</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/main.php/module/index"><i class="fa fa-shopping-cart fa-3x"></i>Modules</a>
                        </li>				

                        <!--li>
        <a href="http://localhost/Chikitsa0.1.4/main.php/patient/index"><i class="fa fa-users fa-3x"></i>Patients</a>
</li>
                                                <li>
        <a href="http://localhost/Chikitsa0.1.4/main.php/appointment/index"><i class="fa fa-calendar fa-3x"></i>Appointments</a>
</li>
                                                <li>
        <a href="#"><i class="fa fa-user-md fa-3x"></i>Doctor</a>
        <ul class="nav nav-second-level">
<li><a href="http://localhost/Chikitsa0.1.4/main.php/appointment/inavailability">Inavailablity</a></li>
                 <li><a href="http://localhost/Chikitsa0.1.4/main.php/doctor/index">Doctor Detail</a></li>
                  <li><a href="http://localhost/Chikitsa0.1.4/main.php/doctor/department">Department</a></li>
                  <li><a href="http://localhost/Chikitsa0.1.4/main.php/doctor/doctor_type">Type</a></li>
                  <li><a href="http://localhost/Chikitsa0.1.4/main.php/doctor/fees">Fees Detail</a></li>
                  <li><a href="http://localhost/Chikitsa0.1.4/main.php/doctor/doctor_schedule">Doctor Schdule</a></li>					 
                  
        </ul>
</li>
                                                <li>
        <a href="#"><i class="fa fa-calculator fa-3x"></i>Stock</a>
<ul class="nav nav-second-level">
<li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/item">Items</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/supplier">Supplier</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/purchase">Purchase</a></li>
<li><a href="#">Sell</a>
<ul class="nav nav-third-level">
    <li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/all_sell">All Sell</a></li>
    <li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/sell">New Sell</a></li>
</ul>
</li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/stock_report">Stock Report</a></li>
</ul>
</li> 
                                                <li >
        <a href="#"><i class="fa fa-line-chart fa-3x"></i>Reports</a>
<ul class="nav nav-second-level">
<li><a href="http://localhost/Chikitsa0.1.4/main.php/appointment/appointment_report">Appointment Report</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/stock/purchase_report" target="_blank">Purchase Register</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/patient/bill_detail_report" target="_blank">Bill Report</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/patient/patient_report" target="_blank">Patient Report</a></li>
</ul>
</li>
                                                <li >
         
        <a href="http://localhost/Chikitsa0.1.4/main.php/settings/treatment"><i class="fa fa-medkit fa-3x"></i>Treatments</a>
</li>
                                                <li >
        <a href="#"><i class="fa fa-cog fa-3x"></i>Administration</a>
<ul class="nav nav-second-level">
<li><a href="http://localhost/Chikitsa0.1.4/main.php/settings/clinic">Clinic Details</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/settings/invoice">Invoice Settings</a></li>
<li><a href="http://localhost/Chikitsa0.1.4/main.php/admin/users">Users</a></li>
                 <li><a href="http://localhost/Chikitsa0.1.4/main.php/admin/category">Category</a></li>
                <li><a href="http://localhost/Chikitsa0.1.4/main.php/template/index">Change Template</a></li> 
                <li><a href="http://localhost/Chikitsa0.1.4/main.php/settings/change_settings">Settings</a></li>	
                <li><a href="http://localhost/Chikitsa0.1.4/main.php/admin/menu_access">Menu Access</a></li>					
</ul> 
</li-->
                        <li>
                            <a target="_blank" title="Sanskruti Technologies" href="http://sanskrutitech.in">&copy; 2014 Sanskruti Technologies</a>
                            <a target="_blank" href="http://sanskrutitech.in/chikitsa-patient-management-system/">Chikitsa Version 0.1.4</a>
                        </li>
                    </ul>

                </div>

            </nav>  

            <div id="page-wrapper" >
                <script type="text/javascript" charset="utf-8">

                    $(function ()
                    {
                        $("#doctor").autocomplete({
                            source: [],
                            minLength: 1, //search after one characters
                            select: function (event, ui) {
                                //do something
                                $("#doctor_id").val(ui.item ? ui.item.id : '');
                            }
                        });
                    });
                </script>
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Appointment Report				</div>
                                <div class="panel-body">
                                    <form action="http://localhost/Chikitsa0.1.4/main.php/appointment/appointment_report" method="post" accept-charset="utf-8">					<div class="col-md-3">
                                            Date						<input type="date" name="app_date" id="app_date" class="form-control" value="" />
                                        </div>
                                        <div class="col-md-3" >
                                            Doctor						<select name="doctor" class="form-control">
                                                <option></option>
                                                <input type="hidden" name="doctor_id" id="doctor_id" value="" />
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" name="submit" class="btn btn-primary">Go</button>
                                        </div>
                                    </form>				</div>
                            </div>
                        </div>	

                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="attendance_table" >
                                        <thead>
                                            <tr>
                                                <th width="100px;">Patient Name</th>
                                                <th width="100px;">Appointment Time</th>
                                                <th>Waiting Time</th>
                                                <th>Waiting Duration</th>
                                                <th>Consultation</th>
                                                <th>Consultation Duration</th>
                                                <th>Bill Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="8">No Record Found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </body>
</html>

