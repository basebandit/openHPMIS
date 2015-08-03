<?php
require_once("./include/membersite_config.php");

if (!$membersite->CheckLogin()) {
    $membersite->RedirectToURL("login.php");
    exit;
}
?>

<!--    <body>
        <div id='membersite_content'>
                        <h2>Home Page</h2>
                        Welcome back <?php //echo $membersite->UserFullName();                                                                          ?>!
            
                        <p><a href='change-pwd.php'>Change password</a></p>
            
                        <p><a href='access-controlled.php'>A sample 'members-only' page</a></p>
                        <br><br><br>
                                    <p><a href='logout.php'>Logout</a></p>

        </div>

    </body>-->

<!DOCTYPE html>
<html lang="en" class="js no-touch">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>openHPMIS - Home</title>
        <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
        <meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
        <meta name="author" content="openHPMIS" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="style/normalize.css" />
        <link rel="stylesheet" type="text/css" href="style/demo.css" />
        <link rel="stylesheet" type="text/css" href="style/component.css" />
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li class="gn-search-item">
                                    <input placeholder="Search" type="search" class="gn-search">
                                    <a class="gn-icon gn-icon-search"><span>Search</span></a>
                                </li>
                                <li>
                                    <a class="gn-icon gn-icon-download">New Patient</a>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-illustrator">HEI Followup</a></li>
                                        <li><a class="gn-icon gn-icon-photoshop">Adult ICT/IPT</a></li>
                                        <li><a class="gn-icon gn-icon-photoshop">Pediatric ICT/IPT</a></li>
                                    </ul>
                                </li>
                                <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                                <li><a class="gn-icon gn-icon-help">Help</a></li>
                                <li>
                                    <a class="gn-icon gn-icon-archive">Archives</a>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-article">Articles</a></li>
                                        <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                                        <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li><a href="http://tympanus.net/codrops"><span class="lowercase">open</span>HPMIS</a></li>
                <li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Home</span></a></li>
                <li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span> Welcome back <?php echo $membersite->UserFullName(); ?></span></a></li>
            </ul>
            <header>
                <h1>Thank you for trying openHPMIS <span>Changing lives across <a href="http://www.google.com/nexus/index.html">Africa</a> and beyond</span></h1>	
            </header> 
        </div><!-- /container -->
        <script src="scripts/classie.js"></script>
        <script src="scripts/gnmenu.js"></script>
        <script>
            new gnMenu(document.getElementById('gn-menu'));
        </script>
    </body>
</html>