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
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="log-bck">
        <div class="login">
            <div class="login-body">
                <a class="login-brand" href="#">
                    <img class="img-responsive" src="img/logo.png" alt="self english learning">
                </a>
                <div class="login-form">
                    <form   id="form">
                        <div class="form-group">
                            <label for="student_id">Student ID</label>
                            <input id="student_id" class="form-control" type="text" name="student_id"  data-field="student_id"  >
                            <div class="valid-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password"  name="password" minlength="6"  data-field="password">
                            <div class="valid-message"></div>
                        </div> 
                        <div class="form-group">
                            <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit"  >Sign in</button>
                    </form>
                </div>
                <div class="login-footer">
                    Don't have an account? <a href="registration.php">Sign Up</a>
                </div>
            </div>

        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/login.js" type="text/javascript"></script>


    </body>
</html>