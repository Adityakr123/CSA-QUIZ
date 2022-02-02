<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$ID=$_SESSION['ID'];
// echo$ID;
$sql = "SELECT name,id,marks FROM leaderboard1 where id='$ID'";
$result = $conn->query($sql);
// $sql1 = "SELECT COUNT(*) FROM users";
// $stmt = $conn->query($sql1);
// $count = $stmt->fetchColumn();

// $rowcount=mysqli_num_rows($result);
//     echo "The total number of rows are: ".$rowcount;

if (!empty($result) && $result->num_rows > 0) {

//   $idarray= array();
//   $idarra= array();
//   $idarr= array();
  while($row = mysqli_fetch_assoc($result)) {

        echo"<div >"."id: " . $row["id"]. " - Name: " . $row["name"]. " " ." - Marks " . $row["marks"]."<div>"."<br>";
        // array_push($idarray,$row['emp_salary']);
        // array_push($idarra,$row['emp_id']);
        // array_push($idarr,$row['emp_name']);
    }   
//     for($j=count($idarray)-7;$j<count($idarray);$j++){
//         // echo"id: " . $row["emp_id"]. " - Name: " . $row["emp_name"]. " " . $row["emp_salary"]. "<br>";
//         echo $idarra[$j].$idarr[$j].$idarray[$j]."<br>";
//   }
 
}
else {
  echo "0 results";
}
$conn->close();
?>