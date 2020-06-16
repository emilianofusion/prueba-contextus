<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN"  xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="img/contextus.png">
	<style>
        .container {
        	font-family: 'arial';
            width: 75%;
			text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

<?php
// If allow push notification, import javascript files
if ($allow_pnotification) {
	$app->render('javascript-push');
}
?>

	<title>Contextus - Push</title>
</head>

<body>
<div class="container">

<h2>Contextus - Push notifications</h2>

<h3>Allow notifications: <?php echo ($allow_pnotification) ? "Yes" : "No" ?></h3>
</div>
</body>
</html>