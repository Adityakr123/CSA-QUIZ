
<?php

$submit=0;

if(isset($_POST['ans3'])){
    $server="localhost";
    $username="root";
    $password="";
    $dbname = "CSAQUIZ";
    $con=mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("connection to this databassed faliled due to".mysqli_connect_error());

    }
    
    $ans1 = $_POST['ans3'];
   
    if($ans1=='1'){
        echo"correct<br>";
        session_start();
        $ID=$_SESSION['id'];
        
        $sql="UPDATE leaderboard1 SET marks= '400'  WHERE id='$ID'";
        if($con->query($sql)== true)
        {
            // echo"Successfully inserted";
            $submit=1;
            
            
    
        }
        else{
            echo"error: $sql <br> $con->error";
        }
        
        // if ($result->num_rows > 0) {
        //     // output data of each row
        //     while($row = $result->fetch_assoc()) {
        //       echo "id: " . $row["id"];
        //     }
        //   } else {
        //     echo "0 results";
        //   }
        // if($con->query($sql)== true)
        // {
        //     // echo"Successfully inserted";
        //     $submit=1;
            
            
    
        // }
        // else{
        //     echo"error: $sql <br> $con->error";
        // }
        $con->close();
       
    }
    else{
        echo"wrong";
    }
    
}
?>
<a href='output.php'><button>RESULT</button></a>
<!-- <script type="text/javascript">
(function(){
   setTimeout(function(){
     window.location="output.php";
   },3000); /* 1000 = 1 second*/
})();
</script> -->