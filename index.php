
<?php 


// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "CSAQUIZ";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

 
// If file upload form is submitted 
$status = $statusMsg = ''; 
$FIND=0;
$checkcopy=0;
$CPASSCOPY;
$PASSCOPY;
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    

    if(!empty($_FILES["image"]["name"])) 
    { 
        // Get file info 

        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $name = $_POST['name'];
            $Username = $_POST['Username'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $SAPID = $_POST['SAPID'];
            $Password = $_POST['Password'];
            $safePassword=password_hash($Password, PASSWORD_DEFAULT);
            // $passback = password_verify($Password, $safePassword); used to check the whether 
            
            $CPASSCOPY=$Password;
            $CPassword = $_POST['CPassword'];
            $PASSCOPY=$CPassword;
            $Tid = $_POST['Tid'];
            $imgContent = addslashes(file_get_contents($image)); 
            if($CPASSCOPY!==$PASSCOPY){
            
              $checkcopy=1;
            }
            else
          {    
            session_start();
            $_SESSION["id"] = $Username;
            // Insert image content into database 
            $insert = $db->query("INSERT into REGISTRATIONS(name,Username,Email,Phone,SAPID,Tid,password,Cpassword,image) VALUES ('$name','$Username','$Email','$Phone','$SAPID','$Tid','0','0','$imgContent')"); 
            $insert = $db->query("INSERT into leaderboard1(name,Phone,id,date,marks,idcopy) VALUES ('$name','$Phone','$Username',NOW(),'0','$Username')"); 

            $insert = $db->query("INSERT into login(Username,password) VALUES ('$Username','$safePassword')"); 
             if($insert){ 
                $FIND=1;
            }
            else{ 
            }
          }  
        }else{ 
            
        } 
    }else{ 
       
    } 
} 
 
// Display status message 
echo $statusMsg; 

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
<body>


<!--     <div class="banner">
        <div class="sliderbackground">
            <img src="images/img1.jpg" id="bgimg" class="smallheight">
        </div>
    </div> -->
   
        <!-- <div class="navbar" ><span style="position:relative;"><img src="logonew.png" class="logo"></span><span class="h1" style="align-self:center; width:65%;">Registration Portal</span></div> -->
        
        <div class=" smallheight">
        <div class="topnav">
        <ahref="#">
         <img alt="logo" src="images/logoo.jpg"
         width="170" height="90">
      </a>
<a href="#">
         <img alt="logo" src="images/hackershala logo.jpg"
         width="170" height="90">
      </a>
<a style="padding-left:58%;" href="#">
         <img alt="logo" src="images/upeslogo.jpg"
         width="15rem" height="85">
      </a>
</div>
<div class="container-fluid">
            <div class="row">              
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
    <div class="container" style="margin-top: 5%; margin-left:25%;background-image: url(images/back.jpg);opacity">
      <p style="text-align: center; padding-top:20px; color:white" class="h3"><u>Registration Form</u></p><br>
    <form  action="index.php" method="post" enctype="multipart/form-data">
      <div class="user-details">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white"class="input-box">
          <span class="details">Full Name</span>
          <input style="font-size:20px;" type="text" name ="name"  placeholder="Enter your name" required >
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white" class="input-box">
          <span class="details">Email</span>
          <input style="font-size:20px;" type="email" name ="Email" placeholder="Enter your email" required>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white" class="input-box">
          <span class="details">Whatsapp Number</span>
          <input style="font-size:20px;" type="phone" name ="Phone"  placeholder="Enter your email" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white" class="input-box">
          <span class="details">College name</span>
          <input style="font-size:20px;" type="text" name ="College Name" placeholder="Enter your College Name" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white" class="input-box">
          <span class="details">Academic Year</span>
          <input style="font-size:20px;" type="text" name ="Year" placeholder="Enter your Year" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div  style="color:white" class="input-box">
          <span class="details">City</span>
          <input style="font-size:20px;" type="text" name ="City" placeholder="Enter your City" required>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white" class="input-box">
          <span class="details">Course Name</span>
          <input style="font-size:20px;" type="text" name ="Course Name" placeholder="Enter your Course Name" required>
        </div>
    </div> 


       <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <div style="color:white" class="input-box">
          <span class="details">Password</span>
          <input style="color:red;font-size:20px;" type="password" name ="Password" placeholder="Enter your password" required>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
          <div style="color:white" class="input-box">
            <span style="font: style 20px;" class="details">Confirm Password</span>
              <input style="color:red;font-size:20px;" type="password" name ="Confirm Password" placeholder="Confirm your password" required>
              <?php
         // if($checkcopy==1){
         // echo"<h4 >Password and confirmpassword are same</h4>";
          
         // }    
        ?>
      </div>
    </div>-->
    
    
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
    <div style="color:white" class="input-box">
    <span style="font-style:20px;" class="details">Date Of Birth</span>
    <input type="date" id="birthday" name="birthday">
    </div>
</div> 

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

<div style="color:white" class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>


    </div>
    </div>
  <div class="button">
    <input  type="submit" name="submit"value="Register">
    <a style="color:yellow" href="login.html"><h3>LOGIN</h3></a>
    <?php
    if($FIND==1){
      
      echo"<h3>Successfully Registered</h3>";
    }
    ?>
  </div>
</form>
</body>
</html>