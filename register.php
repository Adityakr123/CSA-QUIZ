
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
              
            // Insert image content into database 
            $insert = $db->query("INSERT into REGISTRATIONS(name,Username,Email,Phone,SAPID,password,Cpassword,Tid,image) VALUES ('$name','$Username','$Email','$Phone','$SAPID','$Tid','0','0','$imgContent')"); 
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
 <form  action="register.php" method="post" enctype="multipart/form-data">
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
          <input type="password" name ="CPassword" placeholder="Confirm your password" required>
          <?php
       if($checkcopy==1){
        echo"<h4 >Password and confirmpassword are same</h4>";
      
    }
    ?>
      </div>
    </div>

   
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
      <div class="input-box">
        <span class="details">Transaction Id </span>
          <input type="text" name ="Tid" placeholder="Transaction Id" required>
      </div>
    </div>

    </div>
    </div>
    <h4>Screenshot of Transaction:</h4>
    <div class="input-group">
      <input type="file" name ="image"  class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload"   required>
    </div>
  </div>
  <div class="button">
    <input type="submit" name="submit"value="Upload">
    <a href="index.html"><h3>LOGIN</h3></a>
    <?php
    if($FIND==1){
      
      echo"<h3>Successfully Registered</h3>";
    }
    ?>
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