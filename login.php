<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav"  style="width: 90%;">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="login.php">Login</a>
        </div>
        </div>
    </div>
    </nav>


    <?php
        $username = "Ahmed";
        $password = "Ahmed@123";

        if (isset($_POST['submit'])) {
            $getUserName = $_POST['userName'];
            $getPassword = $_POST['password'];

            if ($username === $getUserName && $password === $getPassword) {
                session_start();
                echo "Valid";
                $_SESSION['USER'] = $getUserName;
                $_SESSION['PASSWORD'] = $getPassword;
                $_SESSION['LOGIN'] = true;
                echo "<script> location.replace('index.php') </script>";
            } else {
                echo '<div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>';
            }
        }
    ?>


    <form method="POST" style="margin-top: 60px; width: 10%;">
        <input type="text" class="form-control" name="userName" placeholder="Username" required><br>
        <input type="password" class="form-control" name="password" placeholder="Password" required><br>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
