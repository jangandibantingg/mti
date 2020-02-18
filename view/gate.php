<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="library/assets/images/favicon.png">
    <title><?php echo "Codercoffee.id"; ?></title>
    <link href="library/assets/node_modules/wizard/steps.css" rel="stylesheet">
  <!--alerts CSS -->
  <link href="library/assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="library/material/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="library/material/dist/css/style.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

                  <?php

                      if(empty($page)){
                        include 'form.login.php';
                      }elseif($page == 'register'){
                        include "form.register.php";
                      }elseif($page == 'login'){
                        include "form.login.php";
                      }else{
                        include 'form.login.php';
                      }

                   ?>

                    <!-- <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form> -->


    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="library/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="ajax/signup.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="library/assets/node_modules/popper/popper.min.js"></script>


    <script src="library/assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="library/assets/node_modules/wizard/jquery.validate.min.js"></script>

<!-- </body></html> -->
</body>

</html>
<!--  -->
