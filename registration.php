<?php
require_once("./include/membersite_config.php");

if (isset($_POST['submitted'])) {
    if ($membersite->RegisterUser()) {
        $membersite->RedirectToURL("thank-you.html");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<<<<<<< HEAD
        <title>Sign up</title>
=======
        <title>Contact us</title>
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
        <link rel="STYLESHEET" type="text/css" href="style/membersite.css" />
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700" rel="stylesheet" type="text/css"></link>
        <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
<<<<<<< HEAD

=======
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
        <script src="scripts/pwdwidget.js" type="text/javascript"></script> 


    </head>
    <body>

        <!-- Form Code Start -->
        <div id='membersite'>
            <form id='register' action='<?php echo $membersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                <fieldset >
<<<<<<< HEAD
                    <!--                    <legend>Register</legend>-->
=======
                    <!--                    <h1>Register</h1>-->
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe

                    <input type='hidden' name='submitted' id='submitted' value='1'/>

                    <div class='short_explanation'>* required fields</div>
                    <input type='text'  class='spmhidip' name='<?php echo $membersite->GetSpamTrapInputName(); ?>' />

                    <div><span class='error'><?php echo $membersite->GetErrorMessage(); ?></span></div>
                    <div class='container'>
                        <label for='name' >Your Full Name*: </label><br/>
<<<<<<< HEAD
                        <input type='text' name='name' id='name' value='<?php echo $membersite->SafeDisplay('name') ?>' maxlength="50" onclick="this.value = ''"/><br/>
=======
                        <input type='text' name='name' id='name' value='<?php echo $membersite->SafeDisplay('name') ?>' maxlength="50" onfocus="this.value = '';"/><br/>
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
                        <span id='register_name_errorloc' class='error'></span>
                    </div>
                    <div class='container'>
                        <label for='email' >Email Address*:</label><br/>
<<<<<<< HEAD
                        <input type='text' name='email' id='email' value='<?php echo $membersite->SafeDisplay('email') ?>' maxlength="50" onclick="this.value = ''"/><br/>
=======
                        <input type='text' name='email' id='email' value='<?php echo $membersite->SafeDisplay('email') ?>' maxlength="50" onfocus="this.value = '';"/><br/>
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
                        <span id='register_email_errorloc' class='error'></span>
                    </div>
                    <div class='container'>
                        <label for='username' >UserName*:</label><br/>
<<<<<<< HEAD
                        <input type='text' name='username' id='username' value='<?php echo $membersite->SafeDisplay('username') ?>' maxlength="50" onclick="this.value = ''"/><br/>
=======
                        <input type='text' name='username' id='username' value='<?php echo $membersite->SafeDisplay('username') ?>' maxlength="50" onfocus="this.value = '';"/><br/>
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
                        <span id='register_username_errorloc' class='error'></span>
                    </div>
                    <div class='container' style='height:80px;'>
                        <label for='password' >Password*:</label><br/>
                        <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                        <noscript>
                            <input type='password' name='password' id='password' maxlength="50" />
                        </noscript>    
                        <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    </div>

                    <div class='container'>
<<<<<<< HEAD
                        <input type='submit' name='Sign up' value='Submit' />
=======
                        <input type='submit' name='Submit' value='Sign up' />
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
                    </div>

                </fieldset>
            </form>
<<<<<<< HEAD

            <!-- client-side Form Validations:
            Uses the excellent form validation script from JavaScript-coder.com-->
=======
            <!-- client-side Form Validations:
            -->
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe

            <script type='text/javascript'>
                // <![CDATA[
                var pwdwidget = new PasswordWidget('thepwddiv', 'password');
                pwdwidget.MakePWDWidget();

                var frmvalidator = new Validator("register");
                frmvalidator.EnableOnPageErrorDisplay();
                frmvalidator.EnableMsgsTogether();
                frmvalidator.addValidation("name", "req", "Please provide your name");

                frmvalidator.addValidation("email", "req", "Please provide your email address");

                frmvalidator.addValidation("email", "email", "Please provide a valid email address");

                frmvalidator.addValidation("username", "req", "Please provide a username");

                frmvalidator.addValidation("password", "req", "Please provide a password");

                // ]]>
            </script>
<<<<<<< HEAD

=======
            <!--
            Form Code End 
            -->
        </div>
>>>>>>> 2ddc6cba457731a68db5c0c383605a2f0082d4fe
    </body>
</html>