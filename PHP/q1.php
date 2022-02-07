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
    <link rel="stylesheet" href="../CSS/q1.css">
    <title>Question-1</title>
  </head>
  <body>
  <header role="banner">
  <img style="padding-left:1%;padding-top:1%" id="logo-main" src="../images/logoo.jpg" width="100" height="90px" alt="Logo Thing main logo">
<nav id="navbar-primary" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <h4 style="margin-left: 38%; margin-bottom:2%;font-size:40px; border-style:double; border-width:1rem; border-color:#111;font-style:sans-serif">CFT QUESTIONS</h4>
    
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
</nav>
</header><!-- header role="banner" -->
<div class="wrapper">
			<div class="inner">
				<form action="q2.php" method="post">
					<h3 style="color:#111; padding-bottom:10px;">QUESTION-1</h3>
				
					<h4 style= "margin-top:3%; margin-left:6.8%; color:green;font-size:2rem"><u>Question</u></h4>
          <div class="form-floating mx-3">
          <h4 style="color:black;padding-left:4.8%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae tempora dolores dignissimos rem nobis ducimus soluta voluptatum itaque, quaerat accusamus iste numquam iusto et culpa, nihil at dolor, omnis veritatis similique ab beatae natus reprehenderit? Magni aliquid error aliquam corrupti blanditiis veritatis illo eum assumenda praesentium, reprehenderit quas fugit!</h4>
					<h4 style= "margin-top:2%; margin-left:4%; color:black; color:green;font-size:2rem"><u>Answer</u></h4>
          <div class="form-floating mx-3">
         <!-- <textarea rows="4" cols="60" style="color:#111" input type="text" id="floatingTextarea"></textarea> -->
         <input type="text" name="ans" id="ans2" textarea rows="4" cols="60" style="color:#111" d="floatingTextarea" placeholder="Answer">
          <label for="floatingTextarea"></label>
					<label for="floatingTextarea"></label>
          <button type="submit" class="btn btn-success mt mt-2">Submit</button>
				</form>    
            
			</div>
      
         <a style="padding-left:9%" href='output.php'><button type="button" class="btn btn-warning ml-2 mt-2">Exit and check result</button></a>
		</div>		
    <script type="text/javascript">
// (function(){
//    setTimeout(function(){
//      window.location="output.php";
//    },3000); /* 1000 = 1 second*/
// })();
function getTimeRemaining(endtime) {
  const total = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  const days = Math.floor(total / (1000 * 60 * 60 * 24));
  
  return {
    total,
    days,
    hours,
    minutes,
    seconds
  };
}

function initializeClock(id, endtime) {
  const clock = document.getElementById(id);
  const daysSpan = clock.querySelector('.days');
  const hoursSpan = clock.querySelector('.hours');
  const minutesSpan = clock.querySelector('.minutes');
  const secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    const t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

const timeInMinutes = 60;
const currentTime = Date.parse(new Date());
const deadline = new Date(currentTime + timeInMinutes*60*1000);

initializeClock('clockdiv', deadline);

(function(){
  setTimeout(function(){
     window.location="output.php";
   },3600000); /* 1000 = 1 second*/
})();
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


<!-- <form action="q2.php" method="post">
            <input type="text" name="ans" id="ans2" placeholder="Enter 1">
            <button class="btn" >Submit</button>
</form> -->
