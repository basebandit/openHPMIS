<?php
require_once("./include/membersite_config.php");

if (isset($_GET['code'])) {
    if ($membersite->ConfirmUser()) {
        $membersite->RedirectToURL("thank-you-regd.html");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <title>Confirm registration</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700" rel="stylesheet" type="text/css"></link>
            <link rel="STYLESHEET" type="text/css" href="style/membersite.css" />
            <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    </head>
    <body>
        <div id="header-container">
            <h2>Confirm registration</h2>

            <p>
                Please enter the confirmation code in the box below
            </p>
        </div>
        <!-- Form Code Start -->
        <div id='membersite'>
            <form id='confirm' action='<?php echo $membersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
                <div class='short_explanation'>* required fields</div>
                <div><span class='error'><?php echo $membersite->GetErrorMessage(); ?></span></div>
                <div class='container'>
                    <label for='code' >Confirmation Code:* </label><br/>
                    <input type='text' name='code' id='code' maxlength="50" /><br/>
                    <span id='register_code_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <input type='submit' name='Submit' value='Confirm' />
                </div>

            </form>
            <!-- client-side Form Validations:
            Uses the excellent form validation script from JavaScript-coder.com-->

            <script type='text/javascript'>
                // <![CDATA[

                var frmvalidator = new Validator("confirm");
                frmvalidator.EnableOnPageErrorDisplay();
                frmvalidator.EnableMsgsTogether();
                frmvalidator.addValidation("code", "req", "Please enter the confirmation code");

                // ]]>
            </script>
        </div>
        <!--
        Form Code End (see html-form-guide.com for more info.)
        -->

    </body>
</html>

