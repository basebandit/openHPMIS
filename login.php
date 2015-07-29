<?php
require_once("./include/membersite_config.php");

if (isset($_POST['submitted'])) {
    if ($membersite->Login()) {
        $membersite->RedirectToURL("main.php");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <title>openHPMIS</title>
        <meta charset="utf-8">
            <link href="style/style.css" rel="stylesheet" type="text/css"/>
            <meta name="viewport" content="width=device - width,initial-scale=1">
                <script type="application/x-javascript">addEventListener("load", function() {
                    setTimeout(hideURLbar, 0);
                    }, false); function hideURLbar(){window.scrollTo(0,1);}
                </script>
                <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700" rel="stylesheet" type="text/css">
                    </head>
                    <body>
                        <!-- start-main-->
                        <div id = "membersite" class="main">
                            <div class="login-form">
                                <h1>openHPMIS</h1>
                                <div class="head">
                                    <img src="images/profile.png" alt="user profile picture"/>
                                </div>

                                <form name="login" id="login" action='<?php echo $membersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                                    <div><span class='error'><?php echo $membersite->GetErrorMessage(); ?></span></div>

                                    <input type="text" class="text" name="username" value='<?php echo $membersite->SafeDisplay('USERNAME') ?>' maxlength="50" onfocus="this.value = '';">
                                        <span id='login_username_errorloc' class='error'></span>
                                        <input type="password" value="password" name="password" onfocus="this.value = '';" maxlength="50" >
                                            <span id='login_password_errorloc' class='error'></span>
                                            <div class="submit">
                                                <input type="submit" name="submit" value="LOGIN">
                                            </div>
                                            <p><a href="reset-pwd-req.php">Forgot Password ?</a></p>
                                            <p class="signup_link"><a href="registration.php">Signup</a></p>
                                            </form>
                                            <!-- client-side Form Validations:
                            Uses the excellent form validation script from JavaScript-coder.com
                                            -->

                                            <script type='text/javascript'>
                                                // <![CDATA[

                                                var frmvalidator = new Validator("login");
                                                frmvalidator.EnableOnPageErrorDisplay();
                                                frmvalidator.EnableMsgsTogether();

                                                frmvalidator.addValidation("username", "req", "Please provide your username");

                                                frmvalidator.addValidation("password", "req", "Please provide the password");

                                                // ]]>
                                            </script>
                                            </div>
                                            <div class="copy-right">
                                                <p><a href="#">Powered by devm4r5</a></p>
                                            </div>
                                            </div>
                                            <!--        end main-->
                                            </body>
                                            </html>
