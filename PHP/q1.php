<?php
$submit=0;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this databassed faliled due to".mysqli_connect_error());

    }
    $name = $_POST['name'];

    $phone = $_POST['phone'];
    $id=$name[0].$name[1].$phone;
    $marks=0;
   
    $sql="INSERT INTO `quiz`.`leaderboard1` (`name`,`phone`,`id`, `date`, `marks`) VALUES ('$name','$phone', '$id', current_timestamp(), '$marks');";
    session_start();
    $_SESSION['ID']=$id;
    if($con->query($sql)== true)
    {
        // echo"Successfully inserted";
        $submit=1;

    }
    else{
        // echo"error: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="q2.php" method="post">
        <input type="text" name="ans" id="ans" placeholder="Enter 1">

        <button class="btn" >Submit</button>
    </form>
</body>
</html>