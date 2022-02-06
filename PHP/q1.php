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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="q1.css">
    <title>Question-1</title>
  </head>
  <body>
  <header role="banner">
  <img style="padding-left:1%;padding-top:1%" id="logo-main" src="../images/logoo.jpg" width="100" height="90px" alt="Logo Thing main logo">
<nav id="navbar-primary" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <h4 style="margin-left: 45%;margin-bottom:2%; font-size:40px; border-style:double; border-width:8px; border-color:green;font-style:sans-serif">CFT QUESTIONS</h4>
</nav>
</header><!-- header role="banner" -->
<div class="wrapper">
			<div class="inner">
				<form action="q2.php" method="post">
					<h3 style="color:#111; padding: bottom 10px;">QUESTION-1</h3>
				
					<h4 style= "margin-top:3%; margin-left:4.2%; color:green;font-size:2rem"><u>Question</u></h4>
          <div class="form-floating mx-3">
          <h4 style="color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime exercitationem fugiat perspiciatis facere optio quas placeat aspernatur veritatis eaque voluptates, nobis deserunt eum laborum iure nesciunt perferendis ipsum enim minima reprehenderit eligendi. Asperiores adipisci excepturi modi voluptas veritatis sapiente, dolorem dicta doloribus voluptate assumenda amet distinctio dignissimos error aspernatur maxime? Nobis ullam dolore delectus rerum! Ratione nisi nostrum aperiam tempora? Aut fuga sunt quos ratione aliquam rerum? In esse odit suscipit laudantium. Commodi beatae incidunt similique esse, eum vitae temporibus dolorum aut, natus architecto, dignissimos tempore accusamus minima soluta blanditiis perspiciatis sequi omnis dolor quas. In obcaecati facere deserunt nostrum rerum voluptas ducimus beatae ipsa. Debitis eius porro, magni excepturi iure impedit nostrum quis voluptatum nulla, pariatur repudiandae ab, earum reiciendis architecto veniam nihil totam illo soluta facere delectus necessitatibus. Corrupti voluptas quibusdam id placeat repudiandae nisi vel animi perferendis cum, laborum quos perspiciatis ullam odio? Consectetur laboriosam exercitationem illo esse iste dolores enim quod optio perspiciatis amet, asperiores eius nam aspernatur deleniti nesciunt aperiam ipsa! Quisquam, optio laborum. Velit soluta fugiat neque dolorem debitis eum beatae doloribus! Nemo ratione laudantium vitae iure. Commodi optio corporis magni! Aliquid nobis sed voluptas. Maxime eum magni reiciendis alias beatae harum quod natus!</h4>
          <textarea rows = "5" cols = "90" class="form-control"  id="floatingTextarea"></textarea>
          <label for="floatingTextarea"></label>
					<h4 style= "margin-top:2%; margin-left:2%; color:black; color:green;font-size:2rem"><u>Answer</u></h4>
          <div class="form-floating mx-3">
         <textarea class="form-control" id="floatingTextarea"></textarea>
          <label for="floatingTextarea"></label>
					<label for="floatingTextarea"></label>
         <button type="submit" class="btn btn-success mt-2">Submit</button>
         <a style="padding-left: 30%;" href='output.php'><button type="button" class="btn btn-warning ml-2 mt-2">Exit and check result</button></a>
</form>


				</form>
			</div>
		</div>
		
	</body>
    <script type="text/javascript">
// (function(){
//    setTimeout(function(){
//      window.location="output.php";
//    },3000); /* 1000 = 1 second*/
// })();
</script>
</body>
</html>


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