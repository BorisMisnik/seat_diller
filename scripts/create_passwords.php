<?php
	include 'connect.php';
	$file = '../passwords.txt';
	$count = 0;
	$current = file_get_contents($file);

	if( isset($_GET['count']) ){
		$c = $_GET['count'];
		$count = is_numeric($c) ? $c : 0;
		$count = (int) $count;
	}

	for ($i=0; $i < $count ; $i++) { 
		$login = random();
		$pass = random();
		$string = 'Login: ' . $login . ' password: ' . $pass . "\r\n";
		file_put_contents($file, $string, FILE_APPEND);

		query($login, $pass);
	}

	if (file_exists($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;
	}

	function random(){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$newString = "";
		for ( $i = 0; $i < 5; $i++ ){
			$newString .= $chars[ mt_rand(0, strlen($chars) - 1) ];
		}
		return $newString;
	};

	function query($l, $p){
		$p = md5($p);

		$query = "INSERT INTO users (Login, Password) VALUES (\"$l\", \"$p\")";

		mysql_query($query);
		echo mysql_error();
	};
?>