<?php
	include 'connect.php';
	include '../libs/PHPExcel.php';

	$objPHPExcel = new PHPExcel();
	$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A1', 'VIN автомобиля')
				->setCellValue('A2', 'Договор №')
				// ->setCellValue('C1', 'Date')
				->setCellValue('A3', 'Договор от')
				->setCellValue('A4', 'Договор от Месяц')
				->setCellValue('A5', 'Договор от Год')
				->setCellValue('A6', 'Модель приобретенного автомобиля')
				->setCellValue('A7', 'Объем двигателя')
				->setCellValue('A8', 'Трансмиссия')
				->setCellValue('A9', 'Цвет автомобиля')
				->setCellValue('A10', 'Название дилерского центра')
				->setCellValue('A11', 'Город')
				->setCellValue('A12', 'ФИ менеджера дилерского центра')
				->setCellValue('A13', 'Дата заполнения')
				->setCellValue('A14', 'Дата заполнения Месяц')
				->setCellValue('A15', 'Дата заполнения Год')
				->setCellValue('A16', 'Фамилия')
				->setCellValue('A17', 'Имя')
				->setCellValue('A18', 'Отчество')
				->setCellValue('A19', 'E-mail')
				->setCellValue('A20', 'Контактный телефон')
				->setCellValue('A21', 'Укажите,  пожалуйста, Ваш возраст:')
				->setCellValue('A22', 'Семейное положение')
				->setCellValue('A23', 'Есть ли у Вас дети?')
				->setCellValue('A24', 'Образование')
				->setCellValue('A25', 'Род деятельности')
				->setCellValue('A26', 'Укажите пожалуйста как вы любите проводить свободное время, есть ли у Вас увлечение/хобби')
				->setCellValue('A27', 'Сфера деятельности')
				->setCellValue('A28', 'Укажите, пожалуйста, как часто Вы уезжаете отдыхать во время отпуска')
				->setCellValue('A29', 'Пожалуйста, укажите, что вы считаете главным в своей жизни')
				->setCellValue('A30', 'Сколько автомобилей в Вашей семье')
				->setCellValue('A31', 'Ваш предыдущий автомобиль марка')
				->setCellValue('A32', 'Ваш предыдущий автомобиль модель')
				->setCellValue('A33', 'Ваш предыдущий автомобиль год выпуска')
				->setCellValue('A34', 'Вы были первым владельцем автомобиля?')
				->setCellValue('A35', 'Какие еще автомобили Вы рассматривали при покупке альтернативно SEAT марка')
				->setCellValue('A36', 'Какие еще автомобили Вы рассматривали при покупке альтернативно SEAT модель')
				->setCellValue('A37', 'Какие еще автомобили Вы рассматривали при покупке альтернативно SEAT марка')
				->setCellValue('A38', 'Какие еще автомобили Вы рассматривали при покупке альтернативно SEAT модель')
				->setCellValue('A39', 'Почему Вы выбрали автомобиль марки SEAT')
				->setCellValue('A40', 'Из каких источников Вы получили информацию о Вашем новом автомобиле SEAT')
				->setCellValue('A41', 'Укажите, пожалуйста, какие журналы Вы читаете чаще всего?')
				->setCellValue('A42', 'Укажите, какие радиостанции Вы слушаете чаще всего?')
				->setCellValue('A43', 'Укажите, какие Интернет-сайты Вы обычно посещаете?')
				->setCellValue('A44', 'Укажите, пожалуйста, какие телевизионные каналы Вы смотрите чаще всего?')
				->setCellValue('A45', 'Укажите, пожалуйста, какие программы/передачи на телевидении Вы смотрите чаще всего?')
				->setCellValue('A46', 'Оказала ли реклама влияние на Ваше решение о покупке автомобиля SEAT')
				->setCellValue('A47', 'Покупатель согласен на обработку персональной информации')
				->setCellValue('A48', 'Наличие подписи покупателя');

	$category = htmlentities($_GET['category']);

	$sql = "SELECT * FROM form WHERE engine_type='$category'";
	$result = mysql_query($sql);
	$rowCount = 1;
	while($row = mysql_fetch_row($result)){
		$coll = getNameFromNumber($rowCount + 1);
		$objPHPExcel->getActiveSheet()->SetCellValue($coll.'1',  '#'.$row[0]);
		$objPHPExcel->getActiveSheet()->SetCellValue($coll.'2',  '#'.$row[1]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'3', $row[2]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'4', $row[3]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'5', $row[4]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'6', $row[5]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'7', $row[6]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'8', $row[7]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'9', $row[8]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'10', $row[9]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'11', $row[10]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'12', $row[11]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'13', $row[12]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'14', $row[13]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'15', $row[14]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'16', $row[15]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'17', $row[16]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'18', $row[17]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'19', $row[18]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'20', $row[19]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'21', $row[20]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'22', $row[21]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'23', $row[22]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'24', $row[23]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'25', $row[24]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'26', $row[25]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'27', $row[26]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'28', $row[27]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'29', $row[28]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'30', $row[29]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'31', $row[30]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'32', $row[31]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'33', $row[32]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'34', $row[33]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'35', $row[34]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'36', $row[35]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'37', $row[36]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'38', $row[37]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'39', $row[38]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'40', $row[39]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'41', $row[40]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'42', $row[41]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'43', $row[42]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'44', $row[43]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'45', $row[44]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'46', $row[45]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'47', $row[46]);
		$objPHPExcel->getActiveSheet()->setCellValue($coll.'48', $row[47]);
		$rowCount++;
	}
	function getNameFromNumber($number) {
		$abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$abc_len = strlen($abc);

		$result = "";
		$tmp = $number;

		while($number > $abc_len) {
			$remainder = $number % $abc_len;
			$result = $abc[$remainder-1].$result;
			$number = floor($number / $abc_len);
		}
		return $abc[$number-1].$result;
	}
	// Redirect output to a client’s web browser (Excel5)
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="01simple.xls"');
	header('Cache-Control: max-age=0');
	// // If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	// // If you're serving to IE over SSL, then the following may be needed
	header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header ('Pragma: public'); // HTTP/1.0

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	exit;
?>