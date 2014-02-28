<?php session_start();?>
<?php 
	header('Content-Type: text/html; charset=utf-8');
	include 'scripts/connect.php'; 
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- <meta charset="UTF-8"> -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>SEAT</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/1.2.2/parsley.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
		<script src="//code.createjs.com/easeljs-0.7.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Chart.js"></script>
		<script src="js/messages.ru.js"></script>
		<script src="js/login.js"></script>
		<script src="js/data.js"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.10/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
		<script src="js/admin/app.js"></script>
		<script src="js/admin/controllers/main-controller.js"></script>
		<script src="js/admin/controllers/ancets-controller.js"></script>
		<script src="js/admin/controllers/index-controller.js"></script>
		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<a href="http://www.seat.ru/" id="logo"></a>
			<ul id="seat_menu">
				<li>
					<a href="http://www.seat.ru/content/ru/brand/ru/company/we-are-seat.html" target="_blank"> КОМПАНИЯ </a>
				</li>
				<li>
					<a href="http://www.seat.ru/content/ru/brand/ru/contact/dealersmaps.html" target="_blank"> ДИЛЕРЫ SEAT </a>
				</li>
				<li>
					<a href="http://www.seat.ru/content/ru/brand/ru/news-and-events/seat-world.html" target="_blank"> МИР SEAT </a>
				</li>
				<li>
					<a href="http://www.seat.ru/content/ru/brand/ru/finance/about-finance.html" target="_blank"> SEAT ФИНАНС </a>
				<li>
					<a href="http://www.seat.ru/content/ru/brand/ru/service/home.html" target="_blank"> SEAT SERVICE </a>
				</li>
				<li>
					<a href="http://www.seat.ru/content/ru/brand/ru/contact/contacts.html" target="_blank"> КОНТАКТЫ </a>
				</li>
			</ul>
			<div class="wrapper-table">
				<table id="seat_cars" cellspacing="0" cellpadding="0" width="960">
					<tr>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/ibiza-5d/discover.html" target="_blank">
								<span>IBIZA</span>
							</a>
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/ibiza-sc/discover.html"target="_blank">
								<span>IBIZA&nbsp;SC</span>
							</a>
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/leon/leon-reference-copa.html" target="_blank">
								<span>leon&nbsp;copa</span>
							</a>	
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/new-leon/discover.html" target="_blank">
								<span>NEW&nbsp;LEON</span>
							</a>
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/leon-sc/discover.html" target="_blank"> 
								<span>NEW&nbsp;LEON&nbsp;SC</span>
							</a>
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/altea-freetrack/discover.html">
								<span>FREETRACK&nbsp;4x4</span>
							</a>
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/models/alhambra/discover.html" target="_blank">
								<span>ALHAMBRA&nbsp;</span>
							</a>
						</td>
						<td>
							<a href="http://www.seat.ru/content/ru/brand/ru/news-and-events/special-offer/off.html" target="_blank">
								<span>СПЕЦИАЛЬНЫЕ&nbsp;ПРЕДЛОЖЕНИЯ</span>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</header>
