<?php

include_once '../includes/psl-config.php';   // Needed because functions.php is not included

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE); // Establishing Connection with Server..


    // Fetching Values From URL
    
    $id2 = $_POST['id'];
// $name2 = $_POST['name1'];
// $surname2 = $_POST['surname1'];
// $email2 = $_POST['email1'];

// $title2 = $_POST["title1"];
// $organisation2 = $_POST["organisation1"];
// $address2 = $_POST["address1"];

// $tel2 = $_POST["tel1"];
// $fax2 = $_POST["fax1"];
// $comment2 = $_POST["comment1"];


$use = "USE testing";

/*

$db = mysql_select_db("testing", $mysqli); // Selecting Database


if (isset($_POST['name1'])) {
$query = mysql_query("insert into clients(id,firstname, email) values (10,'$name2', '$email2')"); //Insert Query
echo "Form Submitted succesfully";
}

*/

if ($mysqli->query($use) === TRUE) {
   // echo "Database selected successfully";
} else {
  // echo "Error selecting database: " . $mysqli->error;
}



$sql = "SELECT * FROM clients WHERE id = '$id2' ";


$result = $mysqli->query($sql);


$found = array();

$str;

 if ($result->num_rows > 0) {
     // output data of each row
    // echo "num_rows = ".$result->num_rows."\n";
     while($row = $result->fetch_assoc()) {
         
         //$str = " id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["surname"];
        // array_push($found,$row);
        $str = $row;

     }
      //Display the JSOn data
    $string = json_encode($str);
    echo $string;
    
}


// $rows = array();
// while($r = mysql_fetch_array($sqlResult)) {
//     $row[0] = $r[0];
//     $row[1] = $r[1];
//     array_push($rows,$row);
// }
// //Display the JSOn data
// $string = json_encode($rows);
// echo $string;
    


// if ($result->num_rows > 0) {
//      // output data of each row
//      echo "num_rows = ".$result->num_rows."\n";
//      while($row = $result->fetch_assoc()) {
         
         
         
// //       //  echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["surname"] . "<br>";
         
// //      }
     
//          echo "<div class=\"dropdown\">
//     <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Clients
//     <span class=\"caret\"></span></button>
//     <ul class=\"dropdown-menu\" > "
//      . $string . 
     
//   " </ul>
//   </div>";
// } else {
//      echo "0 results";
// }

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


//$sql = "SELECT * FROM clients WHERE surname = '$surname2' ";
/*

$sql = "SELECT firstname, lastname FROM clients";
$result = $mysqli->query($sql);


*/
// if ($result->num_rows > 0) {
//      // output data of each row
//      echo "num_rows = ".$result->num_rows."\n";
     
//      while($row = $result->fetch_assoc()) {
//          echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["surname"] . "<br>";
//      }
// } else {
//      echo "0 results";
// }


?>