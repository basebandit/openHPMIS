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
        <title> Report</title>
        <link rel="stylesheet" href='style/extra/css/style.css' type="text/css"/>
    </head>
    <body>
        <div class="receipt">

            <h3>Patient Report</h3>            
            <hr/>

            <table>                
                <tr><th>Patient Name</th><th>Phone Number</th><th>Visit</th></tr>



            </table>
        </div>
    </body>
</html>
