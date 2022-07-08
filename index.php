<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="login.php">Login</a>
        </div>
        </div>
    </div>
    </nav>


<?php
$username = "Ahmed";
$password = "Ahmed@123";
    session_start();
    
    if (isset($_SESSION['USER']) && isset( $_SESSION['PASSWORD'] ) && isset( $_SESSION['LOGIN'] ) ) {
        if ($username === $_SESSION['USER'] && $password === $_SESSION['PASSWORD']) {
            echo "Welcome " . $username . "<br>";
            echo "Do You Want To Logout" . "<br>";
            echo "<form method='POST'> <button type='submit' class='btn btn-danger' name='logout'>Logout</button> </form>";
        }
    }

    else {
        echo "<script> location.replace('login.php') </script>" ;
    }

    if (isset($_POST['logout'])) {
        echo "<script> location.replace('login.php') </script>" ;
        session_unset();
    }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>