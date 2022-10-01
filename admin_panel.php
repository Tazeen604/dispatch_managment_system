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
    <form class="p-4 bg-light" method="post" action="dispatch_details.php">
    <div class="text-dark pt-5"><h1>New Letter Dispatch </h1></div>
    <div class="form-row pt-5">
    
</div>
   
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputname">Dispatch No</label>
      <input type="text" class="form-control" id="no" name="no" value="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputtype">Date</label>
      <input type="text" class="form-control" id="dt" name="dt" value="<?php echo date("d-m-y"); ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputname">Dispatch To</label>
      <input type="text" class="form-control" id="disName" name="disName"  placeholder="Enter Name where letter is dispatch">
    </div>
    <div class="form-group col-md-4">
      <label for="inputtype">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Address where dispatched">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputname">Title Of letter</label>
      <input type="text" class="form-control" id="title" name="title"  placeholder="Title Of the letter to be dispatched">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="submit" class="btn btn-lg btn-danger">
    </div>
  </div>
  </form>
    </div>
  </div>
   
    </div>
</header>