<?php
session_start();
include("db_conn.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
   
   $user= $_POST['username'];
  $pass= $_POST['pwd'];
try  
{ 
       $sql="SELECT admin_name,pass FROM admin WHERE admin_name = '$user' AND pass = '$pass'";
       $query = mysqli_query($conn,$sql);

       $row = mysqli_num_rows($query);
          if($row == 1){
             $_SESSION['admin'] = $user;
             header('location:admin_panel.php');
             exit();
          }else{
            echo "<script>
            alert('Incorrect username and/or password!');
            window.location.href='index.php';
            </script>";
            exit();
          }
         }
catch(Exception $error)  
{  
     $message = $error->getMessage(); 
     echo $message; 
} 
}


?>