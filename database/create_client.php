<?php

include_once '../includes/psl-config.php';   // Needed because functions.php is not included

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE); // Establishing Connection with Server..


    // Fetching Values From URL
$name2 = $_POST['name1'];
$surname2 = $_POST['surname1'];
$email2 = $_POST['email1'];

$title2 = $_POST["title1"];
$organisation2 = $_POST["organisation1"];
$address2 = $_POST["address1"];

$tel2 = $_POST["tel1"];
$fax2 = $_POST["fax1"];
$comment2 = $_POST["comment1"];


$use = "USE testing";

/*

$db = mysql_select_db("testing", $mysqli); // Selecting Database


if (isset($_POST['name1'])) {
$query = mysql_query("insert into clients(id,firstname, email) values (10,'$name2', '$email2')"); //Insert Query
echo "Form Submitted succesfully";
}

*/

if ($mysqli->query($use) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}


/*
$result = $mysqli->query("SELECT * FROM clients WHERE surname = '$surname2' and firstname = '$name2'");


if (!$result) {
  die($mysqli->error);
}

echo "num_rows = ".$result->num_rows."\n";
if ($result->num_rows > 0) {
   echo "Duplicate email\n";
   // do something to alert user about non-unique email
} else {
    
    */
  $sql = "INSERT INTO `clients` (`firstname`, `surname` , `email` , `title` , `organisation` , `address` , `tel` , `fax` , `comment`) VALUES
(

trim('$name2'), trim('$surname2') ,  trim('$email2'), trim('$title2') , 

trim('$organisation2'), trim('$address2'), trim('$tel2'), trim('$fax2'), trim('$comment2') );
";






if ($mysqli->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}






?>