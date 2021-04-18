<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>

<body>
  <?php

  include 'navbar.php';


?>
  <div class="row justify-content-around" style="margin-top: 5rem;width:100vw;margin-bottom:2px;">
  <div class="col-sm-1"></div>
    <div class="card col-sm-4" style="width: 20rem;">
      <img class="card-img-top" src="./images/customer.jpg" alt="Card image cap" style="margin-top:5px; height:90%;">
      <div class="card-body">
        <h5 class="card-title">View Customer</h5>
        <a href="transfermoney.php" class="btn btn-danger">Click to View</a>
      </div>
    </div>
    <div class="card col-sm-4" style="width: 20rem;">
      <img class="card-img-top" src="./images/money-transfer.svg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Transaction History</h5>
        <a href="transactionhistory.php" class="btn btn-danger">Click to View</a>
      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>

  <footer class="page-footer font-small blue" style="position:fixed;bottom:0;width:100vw;">

 
<div class="footer-copyright text-center py-1 bg-dark text-white">© 2021 Copyright:
  Divyanshi Bajpai
</div>


</footer>

</body>

</html>