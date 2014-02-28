<?php
	include 'header.php';
?>
<?php 
	if( !isset($_GET['id']) && !isset($_SESSION['login']) ){
		// header('Location: http://seat2013.nichost.ru/seat_diller/ancets.php');
		return;
	}

	$id = mysql_escape_string($_GET['id']);
	$query = "SELECT * FROM form WHERE id = $id";
	$result = mysql_query($query);
	$result = mysql_fetch_assoc($result);
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover table-striped table-bordered">
					<tr>
						<th>VIN автомобиля</th>
						<th>Договор №</th>
						<th>Договор от</th>
						<th>Модель приобретенного автомобиля</th>
						<th>Объем двигателя</th>
						<th>Трансмиссия</th>
						<th>Цвет автомобиля</th>
					</tr>
					<tr>
						<td><?php echo $result['vin']; ?></td>
						<td><?php echo $result['contract']; ?></td>
						<td><?php echo $result['contract_date']; ?>/<?php echo $result['contract_month']; ?>/<?php echo $result['contract_year']; ?></td>
						<td><?php echo $result['engine_type']; ?></td>
						<td><?php echo $result['engine_value']; ?></td>
						<td><?php echo $result['transmission']; ?></td>
						<td><?php echo $result['car_color']; ?></td>
					</tr>
				</table>

				<table class="table table-hover  table-striped table-bordered">
					<tr>
						<th>Название дилерского центра</th>
						<th>Город</th>
						<th>ФИ менеджера дилерского центра</th>
						<th>Дата заполнения</th>
						<th>Фамилия</th>
						<th>Имя</th>
						<th>Отчество</th>
					</tr>
					<tr>
						<td><?php echo $result['diller']; ?></td>
						<td><?php echo $result['city']; ?></td>
						<td><?php echo $result['manadger']; ?></td>
						<td><?php echo $result['write_date']; ?>/<?php echo $result['write_month']; ?>/<?php echo $result['write_year']; ?></td>
						<td><?php echo $result['second_name']; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['patronymic']; ?></td>
					</tr>
				</table>

				<table class="table table-hover  table-striped table-bordered">
					<tr>
						<th>E-mail</th>
						<th>Город</th>
						<th>Укажите,  пожалуйста, Ваш возраст:</th>
						<th>Семейное положение</th>
						<th>Дети</th>
						<th>Образование</th>
						<th>Род деятельности</th>
					</tr>
					<tr>
						<td><?php echo $result['diller']; ?></td>
						<td><?php echo $result['city']; ?></td>
						<td><?php echo $result['age']; ?></td>
						<td><?php echo $result['marital_status']; ?></td>
						<td><?php echo $result['childrens']; ?></td>
						<td><?php echo $result['education']; ?></td>
						<td><?php echo $result['job']; ?></td>
					</tr>
				</table>

				<table class="table table-hover table-striped table-bordered">
					<tr>
						<th>Увлечение/хобби</th>
						<th>Сфера деятельности</th>
						<th>Как часто Вы уезжаете отдыхать во время отпуска</th>
						<th>Пожалуйста, укажите, что вы считаете главным в своей жизни</th>
						<th>Сколько автомобилей в Вашей семье</th>
						<th>Ваш предыдущий автомобиль</th>
						<th>Вы были первым владельцем автомобиля</th>
					</tr>
					<tr>
						<td><?php echo $result['hobbi']; ?></td>
						<td><?php echo $result['scope']; ?></td>
						<td><?php echo $result['weekend']; ?></td>
						<td><?php echo $result['life']; ?></td>
						<td><?php echo $result['cars']; ?></td>
						<td><?php echo $result['car_mark']; ?>/<?php echo $result['car_model']; ?>/<?php echo $result['car_year']; ?></td>
						<td><?php echo $result['owner']; ?></td>
					</tr>
				</table>
								
				<table class="table table-hover table-striped table-bordered">
					<tr>
						<th>Какие еще автомобили Вы рассматривали при покупке альтернативно SEAT</th>
						<th>Почему Вы выбрали автомобиль марки SEAT</th>
						<th>Из каких источников Вы получили информацию о Вашем новом автомобиле SEAT</th>
						<th>Журналы</th>
						<th>Радиостанции</th>
						<th>Интернет-сайты</th>
						<th>Телевизионные каналы</th>
					</tr>
					<tr>
						<td>
							<?php echo $result['car_view_mark']; ?>, <?php echo $result['car_view_model']; ?>, 
							<?php echo $result['car_view_mark1']; ?>, <?php echo $result['car_view_model1']; ?>
						</td>
						<td><?php echo $result['choose']; ?></td>
						<td><?php echo $result['source']; ?></td>
						<td><?php echo $result['magazine']; ?></td>
						<td><?php echo $result['radio']; ?></td>
						<td><?php echo $result['cites']; ?></td>
						<td><?php echo $result['tv']; ?></td>
					</tr>
				</table>					
					
				<table class="table table-hover table-striped table-bordered">
					<tr>
						<th>Программы/передачи</th>
						<th>Оказала ли реклама влияние на Ваше решение о покупке автомобиля SEAT</th>
						<th>Покупатель согласен на обработку персональной информации</th>
						<th>Наличие подписи покупателя</th>
					</tr>
					<tr>
						<td><?php echo $result['tv_programs']; ?></td>
						<td><?php echo $result['advertising']; ?></td>
						<td><?php echo $result['processing']; ?></td>
						<td><?php echo $result['subscription']; ?></td>
					</tr>
				</table>	
					
			</div>
		</div>
	</div>	
</body>
</html>