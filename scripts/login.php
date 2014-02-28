<?php
	session_start();
	include 'connect.php';

	Class Authorized{

		private static $login = '';
		private static $password = '';
		public static $result = '';

		function __construct(){
			if( !isset($_GET['login']) || !isset($_GET['password'])){
				echo 'error';
				return;
			}

			self::$login = htmlentities($_GET['login']);
			self::$password = htmlentities($_GET['password']);

			self::findUser();
			self::writeSession();

			echo self::$result;
		}

		private function findUser(){
			$login = self::$login;
			$password =  md5(self::$password);

			$query = "SELECT COUNT(ID) as result 
					  FROM users 
					  WHERE Login = '$login' AND Password = '$password'";

			$result = mysql_query($query);
			$result = mysql_fetch_assoc($result);

			$user = (int) $result['result'];

			if( $user < 1 )
				self::$result = 'error';
			else
				self::$result = 'sucsses';
		}

		private function writeSession(){
			if( self::$result === 'error' ) return;

			if( isset($_GET['admin']) ){
				$_SESSION['admin'] = true;
			}
			else{
				$_SESSION['login'] = true;
			}
		}
	}

	$login = new Authorized;
?>