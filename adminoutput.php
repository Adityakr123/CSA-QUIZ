<?php
//  echo"Username";

if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CSAQUIZ";
    // echo"Username";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    }
    $Username = $_POST['Adminusername'];
    $password = $_POST['Adminpassword'];
    if($Username=='CSAADMIN' and $password=="CSA@Admin@2018")
    {
      
                 
     $query = "SELECT * FROM REGISTRATIONS";  
     $result = mysqli_query($conn, $query);  
     while($row = mysqli_fetch_array($result))  
     {  
          echo "<tr> <td>  Name   " . $row["name"]."  UserName   " . $row["Username"]."  Email:   " . $row["Email"]. "  Phone Number:  " . $row["Phone"]."  SAPID:  " . $row["SAPID"]."   Transaction Id  ".$row["Tid"]." </td></tr>";
          
          //  Email = $row['Email'] Phone Number = $row['Phone'] SAPID = $row['SAPID'] TRANSACTION_ID = $row['Tid']";
          echo '  
               <tr>  
                    <td>  
                         <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
                    </td>  
               </tr>  
               <br>
               <br>
              
          ';
         

     }  
    }
    else{
         echo"Wrong";
    }
    

}
?>

