<?php


// if(isset($_POST["submit"])){
//     $server="localhost";
//     $username="root";
//     $password="";
//     $dbname = "CSAQUIZ";

// // Create connection
// $con = new mysqli($servername, $username, $password, $dbname);
//     if(!$con){
//         die("connection to this databassed faliled due to".mysqli_connect_error());

//     }
//     $Username = $_POST['username'];

//     $password = $_POST['password'];
//     $sql = "SELECT Username,password FROM login where Username='$Username'";
//     $result = $con->query($sql);
// if (!empty($result) && $result->num_rows > 0) {
//   while($row = mysqli_fetch_assoc($result)) 
//   {
//         $safePassword=$row["password"];
//         $passback = password_verify($Password, $safePassword);
//         if ($passback) {
//             echo"Password Verified!";
//         } 
//         else {
//             echo"Incorrect Password!";
//         }
//         // echo"<div >"."id: " . $row["id"]. " - Name: " . $row["name"]. " " ." - Marks " . $row["marks"]."<div>"."<br>";
       
//     }   

 
// }
// else {
//   echo "0 results";

// $con->close();
// }
?>
<?php
//  echo"Username";

if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CSAQUIZ";
    // echo"Username";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    }
    $Username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT Username,password FROM login where Username='$Username'";
    $result = $conn->query($sql);
    if (!empty($result) && $result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $safePassword=$row["password"];
            $passback = password_verify($password, $safePassword);
            if ($passback) {
                include "instructioncopy.php";
                echo"hello  $Username";
            } 
            else {
                echo"Incorrect Password!";
            }
            
        }
    }

}
?>