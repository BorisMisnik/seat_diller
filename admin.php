<?php include 'header.php'; ?>
		<?php  // if user logined 
			if( isset($_SESSION['admin']) ){
		?>
			<div class="container" ng-app="admin" ng-controller="IndexCtrl">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						 <a class="navbar-brand" href="./admin.php">Seat Diller</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							 <li><a href="#!/graffics" ng-class="">Графики</a></li>
							 <li  ng-class="{true:'active'}['/ancets'==href]"><a href="#/ancets">Посмотреть анкеты</a></li>
							 <li><a href="#/ancets-editor">Редактор Анкет</a></li>
							 <li><a href="#/passwords">Генератор паролей</a></li>
						</ul>
					</div>
				</nav>
				<div ng-view></div>
			</div>
			<?php } else{ ?>

				<div class="container">
					<form class="login-form" parsley-validate novalidate >
						<h2>Пожалуйста авторизируйтесь</h2>
						<!-- login -->
						<label for="login">Login :</label>
						<input type="text"
								id="login"
								class="form-control" 
								placeholder="Login" 
								name="login" 
								parsley-validation-minlength="2"
								parsley-required="true">
						<!-- password -->
						<label for="password">Password :</label>
						<input type="password" 
							   id="passwrod"
							   class="form-control" 
							   placeholder="Password"
							   name="password" 
							   parsley-required="true"
							   parsley-validation-minlength="2">
						<!-- submit -->
						<input type="hidden" name="admin" value="admin">
						<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
					</form>
				</div>

			<?php } 
		?>
<?php  include 'footer.php';  ?>
