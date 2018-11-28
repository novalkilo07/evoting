<?php
	mysql_connect("localhost","root","");
	mysql_select_db("vote")or die(mysql_error());

	$op = $_GET['op'];

	if($op == "load_hasil"){
		$no_urut = $_GET['no_urut'];
		$query = mysql_fetch_array(mysql_query("SELECT suara FROM vote WHERE no_urut = $no_urut"));
		echo $query['suara'];
	}else if($op == "vote"){
		$no_urut = $_GET['no_urut'];
		$query = mysql_query("UPDATE vote SET suara = suara + 1 WHERE no_urut = $no_urut");
	}else if($op == "sum_suara"){
		$query = mysql_fetch_array(mysql_query("SELECT SUM(suara) FROM vote"));
		echo $query['SUM(suara)'];
	}