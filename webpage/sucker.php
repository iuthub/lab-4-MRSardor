<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sucker.php</title>
<link rel="stylesheet" type="text/css" href="sucker.css">
</head>
<body>
<h1>Thanks, sucker!</h1>
<p>Your information has been recorded.</p>
	<dl>
		<dt>Name</dt>
<dd><?= $name=$_REQUEST["name"]; ?> </dd>
		<dt>Section</dt>
<dd><?= $section=$_REQUEST["section"]; ?> </dd>
		<dt>Credit Card</dt>
<dd><?= $creditcard=$_REQUEST["creditcard"]; ?> (<?= $cc=$_REQUEST["cc"] ?>) </dd>
	</dl>
<?php 
$file=("suckers.txt");
$input=array("$name",";$section",";$creditcard",";$cc\n");
file_put_contents("suckers.txt", $input, FILE_APPEND);
$input=file_get_contents("suckers.txt");
 ?>
<pre><?= $input ?></pre>
</body>
</html>