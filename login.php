<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log In - Self English Learning</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/login-2.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="login">
            <div class="login-body">
                <a class="login-brand" href="index-2.html">
                    <img class="img-responsive" src="img/logo.svg" alt="Elephant">
                </a>
                <div class="login-form" >
                    <form data-toggle="validator" autocomplete="off" method="POST" id="form-data" > 
                        <div class="form-group">
                            <label for="student_id">Student Id</label>
                            <input id="student_id" class="form-control" type="text" name="student_id" placeholder="Enter Your Student Id"    >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="Password" >
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-control-primary custom-checkbox">
                                <input class="custom-control-input" type="checkbox" checked="checked">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-label">Keep me signed in</span>
                            </label>
                            <span aria-hidden="true"> · </span>
                            <a href="#">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit" id="login">Sign in</button>
                    </form>
                </div>
            </div>
            <div class="login-footer">
                Don't have an account? <a href="registration.php">Sign Up</a>
            </div>
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/login.js" type="text/javascript"></script>
    </body>
</html>