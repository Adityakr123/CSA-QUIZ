<?php
// $submit=0;
// if(isset($_POST['name'])){
//     $server="localhost";
//     $username="root";
//     $password="";
//     $con=mysqli_connect($server,$username,$password);
//     if(!$con){
//         die("connection to this databassed faliled due to".mysqli_connect_error());

//     }
//     $name = $_POST['name'];

//     $phone = $_POST['phone'];
//     $id=$name[0].$name[1].$phone;
//     $marks=0;
   
//     $sql="INSERT INTO `quiz`.`leaderboard1` (`name`,`phone`,`id`, `date`, `marks`) VALUES ('$name','$phone', '$id', current_timestamp(), '$marks');";
//     session_start();
//     $=$_SESSION['username'];
//     // session_start();
//     // $_SESSION['ID']=$id;
//     if($con->query($sql)== true)
//     {
//         // echo"Successfully inserted";
//         $submit=1;

//     }
//     else{
//         // echo"error: $sql <br> $con->error";
//     }
//     $con->close();
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link style="stylesheet" href="q1.css">
    <title>Question-1</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logoo.jpg" alt="" width="7%" height="7%" class="d-inline-block align-text-top">
      <b>CTF QUESTIONS</b>
    </a>
  </div>
</nav>
<div>
<h1 style= "margin-top:3%; margin-left:1%">Question-1</h1>
<div class="form-floating mx-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea"></label>
</div>

<div>
<h1 style= "margin-top:3%; margin-left:1%">Answer</h1>
<form action="q2.php" method="post">
            <input type="text" name="ans" id="ans2" placeholder="Enter 1">
            <button class="btn" >Submit</button>
</form>
<a href='output.php'><button type="button" class="btn btn-warning ml-2 mt-2">Exit and check result</button></a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>
    <script type="text/javascript">
// (function(){
//    setTimeout(function(){
//      window.location="output.php";
//    },3000); /* 1000 = 1 second*/
// })();
</script>
</body>
</html>
