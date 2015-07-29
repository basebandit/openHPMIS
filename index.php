<?php
require_once("./include/membersite_config.php");

if (!$membersite->CheckLogin()) {
    $membersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>openHPMIS</title>

        <script src="style/extra/assets/js/jquery.timepicker.js"></script>
        <script src="style/extra/assets/js/jquery.dataTables.js"></script>
        <script src="style/extra/assets/js/common.js"></script>

        <script type="text/javascript" language="javascript" src="style/extra/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" language="javascript" src="style/extra/assets/js/autocomplete.js"></script>

        <link rel="stylesheet" href='style/extra/assets/js/jquery.timepicker.css' type="text/css"/>

        <link rel="stylesheet" href='style/extra/assets/js/themes/smoothness/jquery-ui-1.8.4.custom.css' type="text/css"/>


        <!--Start Lightbox JS and CSS-->

<!--        <script src="style/extra/assets/js/lightbox/jquery-1.7.2.min.js"></script>-->
        <script src="style/extra/assets/js/lightbox/lightbox.js"></script>        
        <link href="style/extra/assets/css/lightbox.css" rel="stylesheet" />

        <!--End Lightbox JS and CSS-->        

        <!-- CSS FOR MULTIPLE SELECT -->
        <link rel="stylesheet" href="style/extra/assets/css/docsupport/chosen.css">
        <style type="text/css" media="all">
            /* fix rtl for demo */
            .chzn-rtl .chzn-drop { left: -9000px; }
        </style>

        <!-- END CSS MULTIPLE SELECT -->
        <link rel="stylesheet" href='style/extra/assets/css/style.css' type="text/css"/>
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
                    <a class="navbar-brand" href="main">
                        openHPMIS</a> 
                </div>
                <div style="color: white;float:left;font-size: 16px;margin-left:25px;">
                    <h3>	Patient				</h3>
                </div>
                <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                    Welcome,<?php echo $membersite->UserFullName(); ?>				
                    <!--  <a href="http://localhost/Chikitsa0.1.4/main.php/admin/change_profile" class="btn btn-primary square-btn-adjust">Change Profile</a>-->
                    <a href="logout.php" class="btn btn-danger square-btn-adjust">Log Out</a> 
                </div>
            </nav> 
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a href="main.php"><i class="fa fa-users fa-3x"></i>Patients</a>
                        </li>				
                        <li>
                            <a href="appointment.php"><i class="fa fa-calendar fa-3x"></i>Appointments</a>
                        </li>				
                        <li>
                            <a href="main.php/#"><i class="fa fa-user-md fa-3x"></i>Doctor</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="appointment.php">Inavailablity</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/main.php/#"><i class="fa fa-line-chart fa-3x"></i>Reports</a>

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
                                    <a href="change_settings.php">Setting</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="modules.php"><i class="fa fa-shopping-cart fa-3x"></i>Modules</a>
                        </li>				
                        <li>
                            <a target="_blank" title="devmars Solutions" href="http://devmars.org">&copy; 2015 Powered by d3vm4r5</a>
                            <a target="_blank" href="openHPMIS-HIV-patient-management-system/">openHPMIS Version 0.1.1</a>
                        </li>
                    </ul>

                </div>

            </nav>  

            <div id="page-wrapper" >
                <script type="text/javascript">
                    function readURL(input) {
                        if (input.files && input.files[0]) {//Check if input has files.
                            var reader = new FileReader(); //Initialize FileReader.

                            reader.onload = function (e) {
                                $('#PreviewImage').attr('src', e.target.result);
                                $("#PreviewImage").resizable({aspectRatio: true, maxHeight: 300});
                            };
                            reader.readAsDataURL(input.files[0]);
                        } else {
                            $('#PreviewImage').attr('src', "#");
                        }
                    }
                </script>
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Patient
                                </div>
                                <div class="panel-body">
                                    <form action="edit.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">															<div class="col-md-12">
                                            <div class="col-md-3">
                                                <label for="first_name">Name</label> 
                                            </div>
                                            <div class="col-md-3">
                                                <input type="input" name="first_name" class="form-control" value=""/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="input" name="middle_name" class="form-control" value=""/>						
                                            </div>
                                            <div class="col-md-3">
                                                <input type="input" name="last_name" class="form-control" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p></p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="display_id">Patient ID</label>
                                                    <input type="input" name="display_id" class="form-control" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="display_name">Display Name</label>
                                                    <input type="input" name="display_name" class="form-control" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="reference_by">Reference By</label>
                                                    <input type="input" name="reference_by" class="form-control" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone_number">Phone Number</label>
                                                    <input type="input" name="phone_number" class="form-control" value=""/><br/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="input" name="email" class="form-control" value=""/><br/>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-primary" type="submit" name="submit" />Save</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img id="PreviewImage" src="http://localhost/Chikitsa0.1.4/images/Profile.png" alt="Profile Image"  height="100" width="100" />
                                                    <input type="file" id="userfile" name="userfile" class="form-control" size="20" onchange="readURL(this);" />
                                                    <input type="hidden" id="src" name="src" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Address Type</label> 
                                                    <select name="type" class="form-control">
                                                        <option></option>
                                                        <option value="Home" >Home</option>
                                                        <option value="Office" >Office</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Address Line 1</label> 
                                                    <input type="input"  class="form-control" name="address_line_1" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type"></label> 
                                                    <input type="input" class="form-control" name="address_line_2" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City</label> 
                                                    <input type="input" class="form-control" name="city" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="state">State</label> 
                                                    <input type="input" class="form-control" name="state" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="postal_code">Postal Code</label> 
                                                    <input type="input" class="form-control" name="postal_code" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="country">Country</label> 
                                                    <input type="input" class="form-control" name="country" value=""/>
                                                </div>    
                                            </div>
                                        </div>
                                    </form>				</div>
                            </div>
                        </div>
                    </div>
                </div></div>

    </body>
</html>