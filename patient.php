<!DOCTYPE html>
<html>
    <head>
        <title>Chikitsa - Patient Management System</title>

        <script src="http://localhost/Chikitsa0.1.4/js/jquery.timepicker.js"></script>
        <script src="http://localhost/Chikitsa0.1.4/js/jquery.dataTables.js"></script>
        <script src="http://localhost/Chikitsa0.1.4/js/common.js"></script>

        <script type="text/javascript" language="javascript" src="http://localhost/Chikitsa0.1.4/js/jquery-ui.js"></script>
        <script type="text/javascript" language="javascript" src="http://localhost/Chikitsa0.1.4/js/autocomplete.js"></script>

        <link rel="stylesheet" href='http://localhost/Chikitsa0.1.4/js/jquery.timepicker.css' type="text/css"/>

        <link rel="stylesheet" href='http://localhost/Chikitsa0.1.4/js/themes/smoothness/jquery-ui-1.8.4.custom.css' type="text/css"/>


        <!--Start Lightbox JS and CSS-->

<!--        <script src="http://localhost/Chikitsa0.1.4/js/lightbox/jquery-1.7.2.min.js"></script>-->
        <script src="http://localhost/Chikitsa0.1.4/js/lightbox/lightbox.js"></script>        
        <link href="http://localhost/Chikitsa0.1.4/css/lightbox.css" rel="stylesheet" />

        <!--End Lightbox JS and CSS-->        

        <!-- CSS FOR MULTIPLE SELECT -->
        <link rel="stylesheet" href="http://localhost/Chikitsa0.1.4/css/docsupport/chosen.css">
        <style type="text/css" media="all">
            /* fix rtl for demo */
            .chzn-rtl .chzn-drop { left: -9000px; }
        </style>

        <!-- END CSS MULTIPLE SELECT -->
        <link rel="stylesheet" href='http://localhost/Chikitsa0.1.4/css/style.css' type="text/css"/>
        <!-- BOOTSTRAP STYLES-->
        <link href="http://localhost/Chikitsa0.1.4/assets/css/bootstrap.css" rel="stylesheet" />
        <!-- JQUERY UI STYLES-->
        <link href="http://localhost/Chikitsa0.1.4/assets/css/jquery-ui-1.9.1.custom.min.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="http://localhost/Chikitsa0.1.4/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="http://localhost/Chikitsa0.1.4/assets/css/custom.css" rel="stylesheet" />
        <!-- CHIKITSA STYLES-->
        <link href="http://localhost/Chikitsa0.1.4/assets/css/chikitsa.css" rel="stylesheet" />
        <!-- TABLE STYLES-->
        <link href="http://localhost/Chikitsa0.1.4/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


        <!-- JQUERY SCRIPTS -->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/jquery-1.10.2.js"></script>
        <!-- JQUERY UI SCRIPTS -->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/jquery-ui.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/jquery.metisMenu.js"></script>
        <!-- DATA TABLE SCRIPTS -->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="http://localhost/Chikitsa0.1.4/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <!-- TimePicker SCRIPTS-->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/jquery.datetimepicker.js"></script>
        <link href="http://localhost/Chikitsa0.1.4/assets/js/jquery.datetimepicker.css" rel="stylesheet" />
        <!-- CHOSEN SCRIPTS-->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/chosen.jquery.min.js"></script>
        <link href="http://localhost/Chikitsa0.1.4/assets/css/chosen.min.css" rel="stylesheet" />
        <!-- Lightbox SCRIPTS-->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/lightbox.min.js"></script>
        <link href="http://localhost/Chikitsa0.1.4/assets/css/lightbox.css" rel="stylesheet" />
        <!-- Sketch SCRIPTS-->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/sketch.js"></script>	
        <!-- CUSTOM SCRIPTS -->
        <script src="http://localhost/Chikitsa0.1.4/assets/js/custom.js"></script>
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
                    <a class="navbar-brand" href="http://localhost/Chikitsa0.1.4/index.php/appointment/index">
                        Chikitsa</a> 
                </div>
                <div style="color: white;float:left;font-size: 16px;margin-left:25px;">
                    <h3>Tag Line					</h3>
                </div>
                <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                    Welcome, Administrator				<a href="http://localhost/Chikitsa0.1.4/index.php/admin/change_profile" class="btn btn-primary square-btn-adjust">Change Profile</a>
                    <a href="http://localhost/Chikitsa0.1.4/index.php/login/logout" class="btn btn-danger square-btn-adjust">Log Out</a> 
                </div>
            </nav> 
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/index.php/patient/index"><i class="fa fa-users fa-3x"></i>Patients</a>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/index.php/appointment/index"><i class="fa fa-calendar fa-3x"></i>Appointments</a>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/index.php/#"><i class="fa fa-user-md fa-3x"></i>Doctor</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/appointment/inavailability">Inavailablity</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/index.php/#"><i class="fa fa-line-chart fa-3x"></i>Reports</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/appointment/appointment_report">Appointment Report</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/stock/purchase_report">Purchase Report</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/patient/bill_detail_report">Bill Detail Report</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/patient/patient_report">Patient Report</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/index.php/#"><i class="fa fa-cog fa-3x"></i>Administration</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/settings/clinic">Clinic Detail</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/settings/invoice">Invoice</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/admin/users">Users</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/template/index">Change Template</a>
                                </li>							
                                <li>
                                    <a href="http://localhost/Chikitsa0.1.4/index.php/settings/change_settings">Setting</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="http://localhost/Chikitsa0.1.4/index.php/module/index"><i class="fa fa-shopping-cart fa-3x"></i>Modules</a>
                        </li>				


                        <li>
                            <a target="_blank" title="Sanskruti Technologies" href="http://sanskrutitech.in">&copy; 2014 Sanskruti Technologies</a>
                            <a target="_blank" href="http://sanskrutitech.in/chikitsa-patient-management-system/">Chikitsa Version 0.1.4</a>
                        </li>
                    </ul>

                </div>

            </nav>  

            <div id="page-wrapper" >
                <script type="text/javascript" charset="utf-8">
                    $(window).load(function () {

                        $('.confirmDelete').click(function () {
                            return confirm("Are you sure you want to delete?");
                        })

                        $("#patient_table").dataTable({
                            "pageLength": 50
                        });
                    });
                </script>
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Patients
                                </div>
                                <div class="panel-body">
                                    <a title="Add Patient" href="http://localhost/Chikitsa0.1.4/index.php/patient/insert/" class="btn btn-primary square-btn-adjust">Add Patient</a>
                                    <p></p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="patient_table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Display Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Reference By</th>
                                                    <th>Visit</th>
                                                    <th>Follow Up</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>

            </div>

    </body>
</html>