<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
$dis_no=$_POST['no'];
$dis_date=$_POST['dt'];
$dis_name=$_POST['disName'];
$dis_add=$_POST['address'];
$dis_title=$_POST['title'];
$status="waiting";



include("db_conn.php");
try  
{ 
    $sql="INSERT INTO dispatch_details VALUES (Null,?, ?, ?, ?,?)";
    if($stmt = mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt, 'sssss',$dis_date,$dis_name,$dis_add,$dis_title,$status);
        mysqli_stmt_execute($stmt);

        $username = "Tazeen";///Your Username
        $password = "123456";///Your Password
        $mobile = "923357077474";///Recepient Mobile Number
        $sender = "SenderID";
        $message = "Test SMS From sendpk.com";
         
        ////sending sms
         
        $post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
        $url = "https://sendpk.com/api/sms.php?username=".$username."&password=".$password."";
        $ch = curl_init();
        $timeout = 10; // set to zero for no timeout
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $result = curl_exec($ch); 
        /*Print Responce*/
        echo $result;

       header("location: dispatch_details.php");
      
    }
else{
    $error = $conn->errno . ' ' . $conn->error;
   echo $error; 
    echo "There is some problem in data insertion";
}
}catch(Exception $e)
{
    $message = $e->getMessage(); 
    echo $message; 
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/other.css">
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<header id="header">
<div class="container-fluid">   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
    <div class="navbar-header">
      <a class="navbar-brand text-light" href="#">Dispatch Management System</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav ml-auto "> 
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Show Dispatch Details</a>
      </li>
    </ul>
    </nav>
    <div class="row d-flex justify-content-center p-5 m-5">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
   
    <table class="table table-striped table-sm mb-3">
                                <thead>
                                <tr>
                                <th>Dispatch No</th>
                                <th>Date</th>
                                <th> Dispatch To</th>
                                <th>Address</th>
                                <th>Letter Title</th>
                                <th> Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                           <?php
                           include("db_conn.php");
                           $sql="SELECT * FROM dispatch_details ";
                           $res=mysqli_query($conn,$sql);
                           if($res)
                           {                               
                               while($row=mysqli_fetch_array($res)){

                                  ?> 
                            <tr>   
                            <td > <?php echo $row['dis_no']; ?></td>  
                            <td > <?php echo $row['dis_date']; ?></td> 
                            <td > <?php echo $row['dis_to']; ?></td>  
                            <td> <?php echo $row['address']; ?></td>  
                            <td > <?php echo $row['title']; ?></td>  
                            <td > </td>  
                           
                          </tr> 


                              <?php }
                              }?>
                              </tbody>  </table>


    </div>
  </div>
   
    </div>
</header>