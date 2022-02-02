
<?php

$submit=0;

if(isset($_POST['ans3'])){
    $server="localhost";
    $username="root";
    $password="";
    $dbname = "quiz";
    $con=mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("connection to this databassed faliled due to".mysqli_connect_error());

    }
    
    $ans1 = $_POST['ans3'];
   
    if($ans1=='1'){
        echo"correct<br>";
        session_start();
        $ID=$_SESSION['ID'];
        
        $sql="UPDATE leaderboard1 SET marks= '400'  WHERE id='$ID'";
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
    
}
?>