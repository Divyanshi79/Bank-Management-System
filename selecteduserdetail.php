<?php
include 'config.php';
if(isset($_POST['submit'])) 
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];


// $sql = "SELECT * from users where id=$form";
// $query = mysqli_query($conn,$sql);
// $sql1 = mysqli_fetch_array($query);


$sql = "SELECT * from users where id=$from";
$query = mysqli_query($conn, $sql);
$sql1 = mysqli_fetch_array($query);

$sql = "SELECT * from users where id=$to";
$query = mysqli_query($conn,$sql);
$sql2 = mysqli_fetch_array($query);

if(($amount)<0){
    echo '<script type="text/javascript">';
    echo 'alert("OOPS! negative value")';
    echo '</script>';
}

else if($amount > $sql1['balance']){

    echo '<script type="text/javascript">';
    echo 'alert("Bad Luck! Insufficint Balance")';
    echo '</script>';
}
else if($amount==0){
    echo '<script type="text/javascript">';
    echo 'alert("OOPs! Balance is 0")';
    echo '</script>';
}
else
{
    $newbalance = $sql1['balance'] - $amount;
    $sql = "UPDATE users set balance=$newbalance where id=$from";
    mysqli_query($conn,$sql);

    $newbalance = $sql2['balance'] + $amount;
    $sql = "UPDATE users set balance=$newbalance where id=$to";
    mysqli_query($conn,$sql);
    
    $sender = $sql1['name'];
    $reciever = $sql2['name'];
    $sql = "INSERT INTO transaction(`sender`,`reciever`,`balance`) VALUES ('$sender','$reciever','$amount')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>
        alert('Transaction Successful');
        windows.location='transactionhistory.php';       
        
        </script>";
    }
    $newbalance=0;
    $amount=0;
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
    </head>

<body>
<?php

include 'navbar.php';

?>

<div class="container">
<h2 class="text-center pt-4">TRANSACTION</h2>
<?php
include 'config.php';
$sid=$_GET['id'];
$sql = "SELECT * FROM users where id=$sid";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "ERROR :".$sql."<br>".mysqli_error($conn);

}
$rows=mysqli_fetch_assoc($result);
?>

<form method="post" name="tcredit" class="tabletext" ><br>
<div>
<table class="table table-striped table-condensed table-bordered">
<tr>
<th class="text-center">Id</th>
<th class="text-center">Name</th>
<th class="text-center">Email</th>
<th class="text-center">Balance</th>
</tr>
<tr>
<td class="py-2"><?php echo $rows['id'] ?></td>
<td class="py-2"><?php echo $rows['name'] ?></td>
<td class="py-2"><?php echo $rows['email'] ?></td>
<td class="py-2"><?php echo $rows['balance'] ?></td>
</tr>
</table>


</div>
<br><br> <br>
<label for=""><b>Transfer To: </b></label>
<select name="to" class="form-control" required>
<option value="" disabled selected>CHOOSE</option>
<?php
include 'config.php';
$sid=$_GET['id'];
$sql= "SELECT * FROM users where id!=$sid";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error".$sql."<br>".mysqli_error($conn);

}
while($rows = mysqli_fetch_assoc($result)){
   


?>

<option class="table" value="<?php echo $rows['id'];?>">

<?php echo $rows['name'];?> (Balance:
<?php echo $rows['balance'];?>

)

</option>

<?php
}

?>

</select>
<br>
<br>
<label for=""><b>Amount:</b></label>
<input type="number" class="form-control" name="amount" required>
<br><br>
<div class="text-center">
<button class="btn mt-3 btn-danger btn-lg" name="submit" type="submit" id="myBtn">Transfer</button>
</div>

</form>
  

</div>
<footer class="page-footer font-small blue" style="position:absolute;bottom:0;width:100vw;">

 
<div class="footer-copyright text-center py-1 bg-dark text-white">© 2021 Copyright:
  Divyanshi Bajpai
</div>


</footer>
</body>
</html>

