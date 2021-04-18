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
        <title>Create User</title>
        <!-- CSS only -->
    </head>

<body>
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "
            <script> alert('Hurray!User Created');
            windows.location= 'transfermoney.php';
            
            </script>
            ";
        }
    }

    ?>

    <?php
    include 'navbar.php';
    ?>
    <h1 class="text-center pt-4" style="margin-top:10px;">Create User</h1>
    <div class="background" >
        <div class="container" >



            <div class="card mb-3" style="max-width: 30rem; margin-top:50px;margin-left:22vw; font-weight:bold; border:2px solid;">

                <div class="card-body">

                    <form method="post" class="app-form">
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" style="border:2px solid;" class="form-control" name="name" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" style="border:2px solid;" class="form-control" name="email" required>

                        </div>
                        <div class="app-form-group">
                            <label for="exampleInputEmail1">Balance</label>
                            <input type="BALANCE" style="border:2px solid;" class="form-control" name="balance" required>

                        </div>
                        <br>
                        <div class="app-f`orm-group-button">
                            <input type="submit" class="form-button btn btn-danger" value="CREATE" name="submit"></input>

                            <input type="reset" class="form-button btn btn-danger" value="RESET" name="reset"></input>

                        </div>

                    </form>
                </div>
            </div>

        </div>


    </div>

    <footer class="page-footer font-small blue" style="position:absolute;bottom:0;width:100vw;">

 
  <div class="footer-copyright text-center py-1 bg-dark text-white">© 2021 Copyright:
    Divyanshi Bajpai
  </div>
  

</footer>




</body>