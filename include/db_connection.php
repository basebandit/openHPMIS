<?php

/*
 * Define constant to connect to database
 */
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', '');
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'hpmis');
/* Default time zone, to be able to send mail */
date_default_timezone_set('UTC');

/* You might not need this
 * Override the default php.ini settings for sending mail
 */
ini_set('SMTP', 'mail.myt.mu');

//This is the address that will appear coming from (sender)
define('EMAIL', 'email@gmail.com');

/* Define the root url where the script will be found such as
 * http://website.com or http://website.com/Folder  
 */
define('WEBSITE_URL', 'http://localhost');

//Make the connection:

$db = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

//Make the connection
if (!$db) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
