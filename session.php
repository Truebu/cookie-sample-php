<?php 
session_start(); 

if(isset( $_SESSION['session'])){
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session cookie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="card-body">
        <form action="" method="POST" class="form-inline"><br>
            Usuario: <input type="text" name="user" class="form-control"><br>
            Clave: <input type="password" name="password" class="form-control"><br>
            <input type="submit" name="send" value="Inciar sesión" class="btn btn-success">
        </form>

        <?php
            if(isset($_POST['send'])) {
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $_SESSION['session'] = true;
                setcookie('session', $user, time() +(60*60),'WE2_5', 'localhost', false, false);
                header("Location: home.php");
                exit;
            }
        ?>
    </div>
</body>
</html>