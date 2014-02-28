<?php
	include 'connect.php';
	Class Form{
		public static $result = '';
		function __construct(){

			if( !isset($_SESSION['login']) ){
				self::$result = 'false';
			};
			self::write();
		}

		private function write(){
			$vin = isset($_POST['vin']) ? $_POST['vin'].'' : '';
			$contract = isset($_POST['contract']) ? $_POST['contract'].'' : '';
			$contract_date = isset($_POST['contract_date']) ? $_POST['contract_date'] : '';
			$contract_month = isset($_POST['contract_month']) ? $_POST['contract_month'] : '';
			$contract_year = isset($_POST['contract_year']) ? $_POST['contract_year'] : '';
			$engine_type = isset($_POST['engine_type']) ? $_POST['engine_type'] : '';
			$engine_value = isset($_POST['engine_value']) ? $_POST['engine_value'] : '';
			$transmission = isset($_POST['transmission']) ? $_POST['transmission'] : '';
			$car_color = isset($_POST['car_color']) ? $_POST['car_color'] : '';
			$diller = isset($_POST['diller']) ? $_POST['diller'] : '';
			$city = isset($_POST['city']) ? $_POST['city'] : '';
			$manadger = isset($_POST['manadger']) ? $_POST['manadger'] : '';
			$write_date = isset($_POST['write_date']) ? $_POST['write_date'] : '';
			$write_month = isset($_POST['write_month']) ? $_POST['write_month'] : '';
			$write_year = isset($_POST['write_year']) ? $_POST['write_year'] : '';
			$second_name = isset($_POST['second_name']) ? $_POST['second_name'] : '';
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$patronymic = isset($_POST['patronymic']) ? $_POST['patronymic'] : '';
			$e_mail = isset($_POST['e_mail']) ? $_POST['e_mail'] : '';
			$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
			$age = isset($_POST['age']) ? $_POST['age'] : '';
			$marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : '';
			$childrens = isset($_POST['childrens']) ? $_POST['childrens'] : '';
			$education = isset($_POST['education']) ? $_POST['education'] : '';
			$job = isset($_POST['job']) ? $_POST['job'] : '';
			$hobbi = isset($_POST['hobbi']) ? implode(',', $_POST['hobbi']) : '';
			$scope = isset($_POST['scope']) ? $_POST['scope'] : '';
			$weekend = isset($_POST['weekend']) ? $_POST['weekend'] : '';
			$life = isset($_POST['life']) ? implode(',', $_POST['life']) : '';
			$cars =  isset($_POST['cars']) ? $_POST['cars'] : '';
			$car_mark = isset($_POST['car_mark']) ? $_POST['car_mark'] : '';
			$car_model = isset($_POST['car_model']) ? $_POST['car_model'] : '';
			$car_year = isset($_POST['car_year']) ? $_POST['car_year'] : '';
			$owner = isset($_POST['owner']) ? $_POST['owner'] : '';
			$car_view_mark = isset($_POST['car_view_mark']) ? $_POST['car_view_mark'] : '';
			$car_view_model = isset($_POST['car_view_model']) ? $_POST['car_view_model'] : '';
			$car_view_mark1 = isset($_POST['car_view_mark1']) ? $_POST['car_view_mark1'] : '';
			$car_view_model1 = isset($_POST['car_view_model1']) ? $_POST['car_view_model1'] : '';
			$choose = isset($_POST['choose']) ? implode(',', $_POST['choose']) : '';
			$source = isset($_POST['source']) ? implode(',', $_POST['source']) : '';
			$magazine = isset($_POST['magazine']) ? implode(',', $_POST['magazine']) : '';
			$radio = isset($_POST['radio']) ? implode(',', $_POST['radio']) : '';
			$cites = isset($_POST['cites']) ? implode(',', $_POST['cites']) : '';
			$tv = isset($_POST['tv']) ? implode(',', $_POST['tv']) : '';
			$tv_programs = isset($_POST['tv_programs']) ? implode(',', $_POST['tv_programs']) : '';
			$advertising = isset($_POST['advertising']) ? $_POST['advertising'] : '';
			$processing = isset($_POST['processing']) ? $_POST['processing'] : '';
			$subscription = isset($_POST['subscription']) ? $_POST['subscription'] : '';
			$file = $this->file();
			$date = date('Y-m-d H:i:s');

			$query = "INSERT INTO form (vin, contract, contract_date, contract_month, contract_year, 
									   engine_type, engine_value, transmission, car_color, diller, city, 
									   manadger, write_date, write_month, write_year, second_name, name, patronymic, 
									   e_mail, phone, age, marital_status, childrens, education, job, 
									   hobbi, scope, weekend, life, cars, car_mark, car_model, car_year, 
									   owner, car_view_mark, car_view_model, car_view_mark1, car_view_model1, 
									   choose, source, magazine, radio, cites, tv, tv_programs, advertising, processing, subscription, Date) 
					VALUES ('$vin', '$contract', '$contract_date', '$contract_month', '$contract_year', 
						    '$engine_type', '$engine_value', '$transmission', '$car_color', '$diller', '$city', 
							'$manadger', '$write_date', '$write_month', '$write_year', '$second_name', '$name', '$patronymic', 
							'$e_mail', '$phone', '$age', '$marital_status', '$childrens', '$education', '$job', 
							'$hobbi', '$scope', '$weekend', '$life', '$cars', '$car_mark','$car_model', '$car_year', 
							'$owner', '$car_view_mark', '$car_view_model', '$car_view_mark1','$car_view_model1', 
							'$choose', '$source', '$magazine', '$radio', '$cites', '$tv', '$tv_programs', '$advertising',
							'$processing', '$subscription', '$date')";

			$result = mysql_query($query);

			if($result){
				self::$result = 'true';
			}
			else{
				self::$result = mysql_error();
			}
	
		}

		private function file(){

		}
	}

	$app = new Form;
	echo $app::$result;
?>