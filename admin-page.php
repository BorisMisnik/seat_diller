<?php session_start();?>
<?php 
	if( !isset($_SESSION['admin']) ) return;
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html ng-app="admin">
<head>
	<meta charset="utf-8" />
	<title></title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.10/angular.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/admin/app.js"></script>
	
</head>
<body>

</body>
</html>