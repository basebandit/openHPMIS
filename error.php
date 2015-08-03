<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$errorNum = (int) $_GET['err'];
$err_str = array(404 => 'Not Found', 400 => 'Bad Request', 401 => 'Unauthorized', 403 => 'Forbidden', 500 => 'Internal Server Error');
echo '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>' . $err_str[$errorNum] . '</title>
</head>
<body>
<h1>An error occured: ' . $err_str[$errorNum] . '</h1>
<!-- place here your advertisement -->
<!-- place here your Google analytics code -->
</body>
</html>';
