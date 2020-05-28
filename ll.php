<?php
session_start();
$error = "Login faild";

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == '56_vxr' && $_POST['password'] == 'zaidsabah123321zaid') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } elseif ($_POST['username'] == 'alan_najib' && $_POST['password'] == 'alan-najib321-222-435') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } elseif ($_POST['username'] == 'iisoft' && $_POST['password'] == 'jori-224-453-22-iisoft') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } elseif ($_POST['username'] == 'mw0t' && $_POST['password'] == 'khaled-123-455-2-mw0t') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } elseif ($_POST['username'] == 'ahmed_rafaa' && $_POST['password'] == 'ahmed-ra23-faa344-55-3') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } elseif ($_POST['username'] == 'upux' && $_POST['password'] == 'u66-p456-u655-x324-1') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } elseif ($_POST['username'] == 'ounz' && $_POST['password'] == 'ou45-p54-uz223-3') {
            $_SESSION['vip'] = true;
            echo header('location: ./vip.php');
        } else {
            echo '<script type="text/javascript">alert("Login Faild")</script>';
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mohammed Majid</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Mohammed Majid</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="./index.html">Home Page</a>
                    </li>
                    <li class="page-scroll">
                        <a href="./buy_vip.html">Buy VIP-Account</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <br><button type="button" class="btn btn-primary" onclick="window.location.href='./buy_vip.html'">Get VIP-Account</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Section -->

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Mohammed-Majid 2020
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
