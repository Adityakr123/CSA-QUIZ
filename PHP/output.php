<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CSAQUIZ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$ID=$_SESSION['id'];
echo"$ID";
// echo$ID;
$sql = "SELECT name,id,marks FROM leaderboard1 where id='$ID'";
$sql1="UPDATE leaderboard1 SET id= '0'  WHERE idcopy='$ID'";

$result = $conn->query($sql);
$conn->query($sql1);
if (!empty($result) && $result->num_rows > 0) {
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
