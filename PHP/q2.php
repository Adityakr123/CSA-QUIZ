
<?php

$submit=0;

if(isset($_POST['ans'])){
    $server="localhost";
    $username="root";
    $password="";
    $dbname = "quiz";
    $con=mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("connection to this databassed faliled due to".mysqli_connect_error());

    }
    
    $ans1 = $_POST['ans'];
   
    if($ans1=='1'){
        echo"correct<br>";
        session_start();
        $ID=$_SESSION['ID'];
        
        $sql="UPDATE leaderboard1 SET marks= '200'  WHERE id='am2222'";
        if($con->query($sql)== true)
        {
            // echo"Successfully inserted";
            $submit=1;
    
        }
        else{
            echo"error: $sql <br> $con->error";
        }
        $con->close();
    }
    else{
        echo"wrong";
    }
    
    
   
    // $sql="INSERT INTO `quiz`.`leaderboard1` (`name`,`phone`,`id`, `date`, `marks`) VALUES ('$name','$phone', '$id', current_timestamp(), '$marks');";
    
    // if($con->query($sql)== true)
    // {
    //     // echo"Successfully inserted";
    //     $submit=1;
    // }
    // else{
    //     // echo"error: $sql <br> $con->error";
    // }
    // $con->close();
}
?>