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
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql="INSERT INTO `Trip`.`trip` (`name`, `age`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$email', '$phone', '$desc', current_timestamp());";
    
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
    
    <link href="CSS/registrationstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/register1style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Registration</title>

</head>

<!--     <div class="banner">
        <div class="sliderbackground">
            <img src="images/img1.jpg" id="bgimg" class="smallheight">
        </div>
    </div> -->
    <div class=" smallheight">
        <!-- <div class="navbar" ><span style="position:relative;"><img src="logonew.png" class="logo"></span><span class="h1" style="align-self:center; width:65%;">Registration Portal</span></div> -->
        
        <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
      
 <div class="container" style="margin-top: 10%;">
  <p style="text-align: center; padding-top:20px;" class="h3">Registration Form </p><br>
 <form  action="register.php" method="post">
  <div class="user-details">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div class="input-box">
      <span class="details">Full Name</span>
      <input type="text" name ="name"  placeholder="Enter your name" required >
    </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div class="input-box">
      <span class="details">Username</span>
      <input type="text" name ="Username" placeholder="Enter your username" required>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div class="input-box">
      <span class="details">Email</span>
      <input type="email" name ="Email"  placeholder="Enter your email" required>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div class="input-box">
      <span class="details">Phone Number</span>
      <input type="phone" name ="Phone" placeholder="Confirm your Phone Number" required>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div class="input-box">
      <span class="details">SAP ID</span>
      <input type="text" name ="SAPID" placeholder="Enter your SAP ID" required>
    </div>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div class="input-box">
      <span class="details">Password</span>
      <input type="password" name ="Password" placeholder="Enter your password" required>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

    <div class="input-box">
      <span class="details">Confirm Password</span>
      <input type="text" name ="Confirm-Password" placeholder="Confirm your password" required>
    </div>
    </div>
    </div>
    </div>
    <h4>Screenshot of Transaction:</h4>
    <div class="input-group">
      <input type="file" name ="ss-transaction"  class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
    </div>
  </div>
  <div class="button">
    <input type="submit" value="Register">
    <a href="index.html"><h3>LOGIN</h3></a>
  </div>
</form>


                </div></div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " style="margin-top:2.2%;">

                  <div style="background-color:#9cd4fa;" style="padding-bottom:20px;">
              
                  
                    <h5 class="h5" style="padding-top:40px;color:black;">PAYMENT METHODS</h5><p style="color:black; margin-top:50px;  margin-left:50px;">PAYTM<br></p><div  style=" margin-left:50px; margin-top:20px"><img src="images/paytm.jpeg" width="90%" height="200px" style="padding-right: 40px; margin-top:10px"></div><p style="color:black; margin-top:50px;  margin-left:50px; ">GPAY<br></p><div  style=" margin-left:50px;"><img src="images/gpay.jpeg" width="90%" height="250px" style="padding-right: 40px; padding-bottom:20px; margin-top:20px"></div></div></div>
                    
                  </div>
        </div>
    </div>

</body>
</html>