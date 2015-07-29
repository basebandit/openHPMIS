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
                    <a class="navbar-brand" href="main.php/appointment/index">
                        openHPMIS</a> 
                </div>
                <div style="color: white;float:left;font-size: 16px;margin-left:25px;">
                    <h3>Appointment					</h3>
                </div>
                <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                    Welcome,<?php echo $membersite->UserFullName(); ?>					<!--<a href="main.php/admin/change_profile" class="btn btn-primary square-btn-adjust">Change Profile</a>-->
                    <a href="main.php/login/logout" class="btn btn-danger square-btn-adjust">Log Out</a> 
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
                                    <a href="main.php/appointment/inavailability">Inavailablity</a>
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
                                    <a href="main.php/stock/purchase_report">Purchase Report</a>
                                </li>							
                                <li>
                                    <a href="main.php/patient/bill_detail_report">Bill Detail Report</a>
                                </li>							
                                <li>
                                    <a href="main.php/patient/patient_report">Patient Report</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="main.php/#"><i class="fa fa-cog fa-3x"></i>Administration</a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="main.php/settings/clinic">Clinic Detail</a>
                                </li>							
                                <li>
                                    <a href="main.php/settings/invoice">Invoice</a>
                                </li>							
                                <li>
                                    <a href="main.php/admin/users">Users</a>
                                </li>							
                                <li>
                                    <a href="main.php/template/index">Change Template</a>
                                </li>							
                                <li>
                                    <a href="main.php/settings/change_settings">Setting</a>
                                </li>							
                            </ul>
                        </li>				
                        <li>
                            <a href="main.php/module/index"><i class="fa fa-shopping-cart fa-3x"></i>Modules</a>
                        </li>				


                        <li>
                            <a target="_blank" title="Sanskruti Technologies" href="http://sanskrutitech.in">&copy; 2015 Powered By d3vm4r5</a>
                            <a target="_blank" href="http://sanskrutitech.in/chikitsa-patient-management-system/">openHPMIS Version 0.1.1</a>
                        </li>
                    </ul>

                </div>

            </nav>  

            <div id="page-wrapper" >
                <script type="text/javascript" charset="utf-8">
                    $(window).load(function () {
                        $('.confirmCancel').click(function () {
                            return confirm(Are you sure you want to Cancel Appointment?);
                        });

                        $(".todo").change(function () {
                            var element = $(this);
                            var id = $(this).val();
                            if ($(this).is(':checked')) {
                                $.ajax({
                                    type: "POST",
                                    url: "main.php/appointment/todos_done/1/" + id,
                                    success: function () {
                                        element.parent().addClass("done");
                                    }
                                });
                            } else {
                                $.ajax({
                                    type: "POST",
                                    url: "main.php/appointment/todos_done/0/" + id,
                                    success: function () {
                                        element.parent().removeClass("done");
                                    }
                                });
                            }
                        });


                    });
                </script>

                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <!----------------------------  Display Calendar ------------------------------->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Calendar</div>
                                    <div class="panel-body" style="padding:0;">
                                        <div class="calendar">
                                            <table border="0" cellpadding="4" cellspacing="0">

                                                <tr>
                                                    <th><a href="main.php/appointment/index/2015/06">&lt;&lt;</a></th>
                                                    <th colspan="5">July&nbsp;2015</th>
                                                    <th><a href="main.php/appointment/index/2015/08">&gt;&gt;</a></th>
                                                </tr>

                                                <tr>
                                                    <td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td>
                                                </tr>

                                                <tr>
                                                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><a href="main.php/appointment/index/2015/7/1">1</a></td><td><a href="main.php/appointment/index/2015/7/2">2</a></td><td><a href="main.php/appointment/index/2015/7/3">3</a></td><td><a href="main.php/appointment/index/2015/7/4">4</a></td>
                                                </tr>

                                                <tr>
                                                    <td><a href="main.php/appointment/index/2015/7/5">5</a></td><td><a href="main.php/appointment/index/2015/7/6">6</a></td><td><a href="main.php/appointment/index/2015/7/7">7</a></td><td><a href="main.php/appointment/index/2015/7/8">8</a></td><td><a href="main.php/appointment/index/2015/7/9">9</a></td><td><a href="main.php/appointment/index/2015/7/10">10</a></td><td><a href="main.php/appointment/index/2015/7/11">11</a></td>
                                                </tr>

                                                <tr>
                                                    <td><a href="main.php/appointment/index/2015/7/12">12</a></td><td><a href="main.php/appointment/index/2015/7/13">13</a></td><td><a href="main.php/appointment/index/2015/7/14">14</a></td><td><a href="main.php/appointment/index/2015/7/15">15</a></td><td><a href="main.php/appointment/index/2015/7/16">16</a></td><td><a href="main.php/appointment/index/2015/7/17">17</a></td><td><a href="main.php/appointment/index/2015/7/18">18</a></td>
                                                </tr>

                                                <tr>
                                                    <td><a href="main.php/appointment/index/2015/7/19">19</a></td><td><a href="main.php/appointment/index/2015/7/20">20</a></td><td><a href="main.php/appointment/index/2015/7/21">21</a></td><td><a href="main.php/appointment/index/2015/7/22">22</a></td><td><a href="main.php/appointment/index/2015/7/23">23</a></td><td><a href="main.php/appointment/index/2015/7/24">24</a></td><td><a href="main.php/appointment/index/2015/7/25">25</a></td>
                                                </tr>

                                                <tr>
                                                    <td><a href="main.php/appointment/index/2015/7/26">26</a></td><td><a href="main.php/appointment/index/2015/7/27"><strong>27</strong></a></td><td><a href="main.php/appointment/index/2015/7/28">28</a></td><td><a href="main.php/appointment/index/2015/7/29">29</a></td><td><a href="main.php/appointment/index/2015/7/30">30</a></td><td><a href="main.php/appointment/index/2015/7/31">31</a></td><td>&nbsp;</td>
                                                </tr>

                                            </table>						</div>
                                    </div>
                                </div>
                                <!----------------------------  Display Calendar ------------------------------->
                                <!--------------------------- Display Follow-Up  ------------------------------->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Follow Ups</div>
                                    <div class="panel-body"  style="overflow:scroll;height:250px;padding:0;">
                                    </div>
                                </div>
                                <!--------------------------- Display Follow-Up  ------------------------------->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Tasks</div>
                                    <div class="panel-body">
                                        <!--------------------------- Display To Do  ------------------------------->
                                        <form action="main.php/appointment/todos" method="post" accept-charset="utf-8">						<div class="input-group">
                                                <input type="text" name="task"  class="form-control">
                                                <span class="form-group input-group-btn">
                                                    <input type="submit" class="btn btn-primary" value='Submit' />
                                                </span>
                                            </div>
                                        </form>										</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!--------------------------- Display Appointments  ------------------------------->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        27 July 2015, Monday   
                                    </div>
                                    <div class="panel-body">
                                        <!--------------------------- Display Doctor's Screen  ------------------------------->
                                        <!--------------------------- Display Administration's Screen / Staff Scrren  ------------------------------->	
                                        <div style="position:relative;">
                                            <table class="table table-condensed table-striped table-bordered table-hover dataTable no-footer"  >
                                                <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>	
                                                <tbody>
                                                    <tr>
                                                        <th>09:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>09:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>10:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>10:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>11:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>11:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>12:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>12:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>01:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>01:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>02:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>02:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>03:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>03:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>04:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>04:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>05:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>05:30</th>
                                                    </tr>
                                                    <tr>
                                                        <th>06:00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>06:30</th>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        </tbody></table><br /><br /><br /><table><tr><td id = "Appointments" style="height: 15px;width: 15px;"></td><td id = "action">Appointment</td><td id = "Consultation" style="height: 15px;width: 15px;"></td><td id = "action">Consultation</td></tr><tr><td id ="Complete" style="height: 15px;width: 15px;"></td><td id = "action">Complete Appointment</td><td id = "Cancel" style="height: 15px;width: 15px;"></td><td id = "action">Cancelled Appointment </td></tr><tr><td id = "Waiting" style="height: 15px;width: 15px;"></td><td id = "action">Waiting</td><td id = "NotAvailable" style="height: 15px;width: 15px;"></td><td id = "action">Not Available</td></tr></tr></table></div></br>			</div>

                            </div>
                        </div>
                    </div>
                </div>

                </body>
                </html>
