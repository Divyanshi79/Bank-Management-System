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

    <style type="text/css">
    button{
        transition: 1.5s;
    }
    button:hover{
        background-color: #616C6F;
        color:white;
    }
    
    </style>

    <body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    ?>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
    <h2 class="text-center pt-4">
    <b>Transfer Money</b>
    </h2>
    <div class="row">
    <div class="col">
    <div class="table-responsive-sm">
    <table class="table table-hover table-sm  table-condensed table-bordered"  style="border:2px solid black ; margin-top:20px;font-family:verdana">
    <thead >
    <tr >
    <th scope="col" class="text-center py-2" style="border:2px solid black ;">Id</th>
    <th scope="col" class="text-center py-2" style="border:2px solid black ;">Name</th>
    <th scope="col" class="text-center py-2" style="border:2px solid black ;">E-Mail</th>
    <th scope="col" class="text-center py-2" style="border:2px solid black ;">Balance</th>
    <th scope="col" class="text-center py-2" style="border:2px solid black ;"> Operation</th>
    
    
    </tr>
    
    </thead>
    <?php
    while($rows=mysqli_fetch_assoc($result)){


?>
<tr >

<td class="py-2" style="border:2px solid black ;"><?php echo $rows['id']?></td>
<td class="py-2" style="border:2px solid black ;"><?php echo $rows['name']?></td>
<td class="py-2" style="border:2px solid black ;"><?php echo $rows['email']?></td>
<td class="py-2" style="border:2px solid black ;"><?php echo $rows['balance']?></td>
<td style="border:2px solid black ;">
<a href="selecteduserdetail.php?id=<?php echo $rows['id'];?>">


<button class="btn btn-danger btn-sm" type=button style="margin-left:15px;" >Transaction </button>


</a>
</td>
</tr>





<?php
}
?>
    </table>
    
    
    
    </div>
    
    </div>
    
    
    </div>
    
    </div>

        

    </body>