<?php
require_once("./include/membersite_config.php");

$success = false;
if ($membersite->ResetPassword()) {
    $success = true;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <title>Reset Password</title>
        <link rel="STYLESHEET" type="text/css" href="style/membersite.css" />
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    </head>
    <body>
        <div id='membersite_content'>
            <?php
            if ($success) {
                ?>
                <h2>Password is Reset Successfully</h2>
                <span id="subheading">
                    Your new password is sent to your email address.
                </span>
                <?php
            } else {
                ?>
                <h2>Error</h2>
                <span class='error'><?php echo $membersite->GetErrorMessage(); ?></span>
                <?php
            }
            ?>
        </div>

    </body>
</html>