<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Create database --------------------------------------------------------
	$sql = "CREATE DATABASE IF NOT EXISTS chart1";

	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully<br>";
	} else {
	    echo "Error creating database: " . mysqli_error($conn) . "<br>";
	}

	$dbname = 'chart1';
	mysqli_select_db ( $conn , $dbname);

	if (!$conn) {
	    die("select db connection failed: " . mysqli_connect_error());
	}

	//create accelaration table --------------------------------------------------
	$sql = "CREATE TABLE IF NOT EXISTS `data` (
	  `name` VARCHAR(50) NOT NULL,
	  `age` VARCHAR(50) NOT NULL,
	  `ID` INT NOT NULL AUTO_INCREMENT,
	  PRIMARY KEY (`ID`))";

	if(mysqli_query($conn, $sql)){
	    echo "Table accelaration created successfully<br>";
	} else {
	    echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
	}
			
	$query = "INSERT INTO data (name, age) VALUES
	('amir', '23'), ('reshma', '23') ,('ram', '5'),('shyam', '15'),('krishna', '25'),('manish', '30'),('shankar', '80')";
	
	$conn->query($query);
	mysqli_close($conn);
?>