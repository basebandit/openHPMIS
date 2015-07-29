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

            <h3>Receipt</h3>            
            <hr/>

            <table style="border: 0;">
                <thead>
                    <tr><th>Purchase Date</th><th>Bill No.</th><th>Supplier</th><th>Item</th><th>Quantity</th><th>Cost Price</th><th>M.R.P.</th><th>Total</th></tr>
                </thead>    
                <tbody>
                </tbody>

            </table>

        </div>

    </body>
</html>