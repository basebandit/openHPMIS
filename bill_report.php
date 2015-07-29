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
        <title></title>
        <script type="text/javascript" $this->lang - > lineuage = "javascript" src = "style/extra/js/jquery.dropdownPlain.js" ></script>

        <link rel="stylesheet" href='style/extra/css/style.css' type="text/css"/>
    </head>
    <body>


        <div class="puchase_report">

            <h3>Bill Report</h3>            
            <hr/>

            <table style="border: 0;">
                <thead>
                    <tr><th>Id</th><th>Patient Name</th><th></th><th>Bill No</th><th>Amount</th></tr>
                </thead>    
                <tbody>

                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center"></td>                                    
                        <td style="text-align: right;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
