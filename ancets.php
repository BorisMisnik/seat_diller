<?php  
	include 'header.php'; 
	if( !isset($_SESSION['login']) ){
		header('Location: http://seat2013.nichost.ru/seat_diller');
		// header('Content-Type: text/html; charset=utf-8');
		return;
	}
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="form">
					<h2>Фильтер</h2>
					<label for="diller">Название дилерского центра</label>
					<select name="diller" id="diller">
						<option data-city="Москва" value="Абрера Мотор">Абрера Мотор</option>
						<option data-city="Москва" value="АМКапитал">АМКапитал</option>
						<option data-city="Москва, г. Мытищи" value="Автодина Центр">Автодина Центр</option>
						<option data-city="Уфа" value="Барс-Авто С">Барс-Авто С</option>
						<option data-city="Казань" value="Прогресс 06">Прогресс 06</option>
						<option data-city="Тула" value="Вива">Вива</option>
						<option data-city="Челябинск" value="Торрес Моторс">Торрес Моторс</option>
						<option data-city="Пермь" value="Эспаньол Авто">Эспаньол Авто</option>
						<option data-city="Санкт-Петербург" value="Сигма Сервис">Сигма Сервис</option>
						<option data-city="Санкт-Петербург" value="Эль-Торо">Эль-Торо</option>
						<option data-city="Москва" value="Ривьера">Ривьера</option>
						<option data-city="Санкт-Петербург" value="Автопремиум">Автопремиум</option>
						<option data-city="Сургут" value="Альянс-Моторс">Альянс-Моторс</option>
						<option data-city="Н.Новгород" value="Нижегородец Центр">Нижегородец Центр</option>
						<option data-city="Краснодар" value="Тринити">Тринити</option>
						<option data-city="Ижевск" value="Аспэк-Прайм">Аспэк-Прайм</option>
						<option data-city="Волгоград" value="А.С.Авто-Юг">А.С.Авто-Юг</option>
						<option data-city="Екатеринбург" value="Каталония Авто">Каталония Авто</option>
						<option data-city="Ростов-на-Дону" value="СК-Моторс">СК-Моторс</option>
						<option data-city="Москва" value="Фаворит Моторс">Фаворит Моторс</option>
						<option data-city="Воронеж" value="Ринг Авто">Ринг Авто</option>
						<option data-city="Белгород" value="Автоцентр Спутник">Автоцентр Спутник</option>
						<option data-city="Владимир" value="Агротрактор">Агротрактор</option>
						<option data-city="Иркутск" value="АльтеррА">АльтеррА</option>
						<option data-city="Красноярск" value="Гранада">Гранада</option>
						<option data-city="Москва" value="Автолайт">Автолайт</option>
						<option data-city="Москва" value="Автодина Центр - Юг">Автодина Центр - Юг</option>
						<option data-city="Санкт-Петербург" value="Автоцентр Аврора">Автоцентр Аврора</option>
						<option data-city="Саратов" value="Карсар Юг">Карсар Юг</option>
						<option data-city="Тюмень" value="Феникс моторс">Феникс моторс</option>
					</select> 
					<input type="submit" class="btn btn-success btn-lg" style="margin:20px 0;" value="Применить">
					<a href="ancets.php" class="btn btn-warning btn-lg" style="margin:20px 0;">Сбросить</a>
				</form>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Диллер центр</th>
							<th>Город</th>
							<th>Менеджер</th>
							<th>Дата</th>
							<th>Скан анкеты</th>
							<th>Посмотреть</th>
							<th>Удалить</th>
						</tr>
					</thead>
					<tbody>
				<?php 	
					if( isset($_GET['remove_id']) ){
						$id = htmlentities($_GET['remove_id']);
						$query = "DELETE FROM form WHERE id = $id";
						mysql_query($query);
					}

					if( isset($_GET['diller']) ){
						$diller = htmlentities($_GET['diller']);
						echo "SELECT * FROM form WHERE diller = '$diller'";
						$query = "SELECT * FROM form WHERE diller = '$diller'";
						echo mysql_error();
					}
					else{
						$query = "SELECT * FROM form";
					}

					

					$result = mysql_query($query);
					$i = 1;
					while ($row = mysql_fetch_assoc($result)) { ?>
						<tr>
							<td>
								<?php
									echo $i;
									$i++;
								?>
							</td>
							<td>
								<?php 
									echo($row['diller']);
								?>
							</td>
							<td>
								<?php 
									echo $row['city'];
								?>
							</td>
							<td>
								<?php 
									echo $row['manadger'];
								?>
							</td>
							<td>
								<?php 
									$date = $row['write_date'];
									$month = $row['write_month'];
									$year = $row['write_year'];
									$allDate = $date .'/'. $month .'/'. $year;
									echo $allDate;
								?>
							</td>
							<td>
								<?php 
									$files = $row['image'];
									$array = explode(',', $files);
									foreach ($array as $key) {
										echo "<a href='$key' class='img-thumbnail image'><img src='$key'></a>";
									}
								?>
							</td>
							<td>
								<a href="ancet.php?id=<?php echo $row['id']; ?>" class="btn btn-primary target='_blank'">Посмотреть</a>
							</td>
							<td>
								<a href="ancets.php?remove_id=<?php echo $row['id']; ?>" class="btn btn-danger target='_blank'">Удалить</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</body>
</html>