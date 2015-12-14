<?php

include_once '../includes/psl-config.php';   // Needed because functions.php is not included

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    // Create database
    
    $name = $_POST["name"];
    
  //  echo $name;
    
    
$sql1 = "CREATE DATABASE IF NOT EXISTS "; 
$sql2 = $name;

$clients = "CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NULL AUTO_INCREMENT,
  `title` varchar(10) NULL,
  `firstname` varchar(30) NULL,
  `surname` varchar(30) NULL,
  `organisation` varchar(30) NULL,
  `address` varchar(30) NULL,
  `email` varchar(50) NULL,
  `tel` varchar(50) NULL,
  `fax` varchar(50) NULL,
  `comment` blob NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;";

$sql = $sql1 . " " . $sql2 . ";" ;


$use = "USE " . $sql2;

/*
$table = " CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)
";
*/

if ($mysqli->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}

if ($mysqli->query($use) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}

if ($mysqli->query($clients) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}






?>