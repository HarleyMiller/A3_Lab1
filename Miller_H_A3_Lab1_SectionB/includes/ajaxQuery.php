<?php
	include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}

	$mysqli->set_charset("utf8");

	// set some post stuff up here
	$modelId = $_POST["F55,F56,R58"];
	$modelNo = $_GET["model"];
	$modelName = $_GET["modelName"];	
	$modelPrice = $_GET["pricing"];
	$modelDetails = $_GET["modelDetails"];
	

	$myQuery = "SELECT * FROM mainmodel WHERE F55,F56,R58 = '$modelId' AND model = '$modelNo' AND modelName = '$modelName' AND pricing = '$modelPrice' AND modelDetails = '$modelDetails'";
	$result = mysqli_query($mysqli, $myQuery);
	$row = mysqli_fetch_assoc($result);	

	echo json_encode($row);
	//echo mysqli_num_rows($result);			
?>