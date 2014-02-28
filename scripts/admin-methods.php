<?php
	include 'connect.php';
	if( isset($_GET['dillers']) ){
		$query = "SELECT DISTINCT  diller FROM form";
		$result = mysql_query($query);
		$rows = array();
		while ($r = mysql_fetch_array($result)) {
			$rows[] = $r;
		}
		echo json_encode($rows);
	}

	if( isset($_GET['ancets']) ){
		$query = "SELECT * FROM form";
		$result = mysql_query($query);
		$rows = array();
		while ($r = mysql_fetch_assoc($result)) {
			$r['image'] = explode(',', $r['image']);
			$rows[] = $r;
		}
		echo json_encode($rows);
	}
?>