<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="../../elephant.html">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="../../elephant.html">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/login-1.min.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="#">
            <img class="img-responsive" src="../img/logo.png" alt="Elephant">
        </a>
        <h3 class="login-heading">Admin</h3>
        <div class="login-form">
           
         
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input id="username" class="form-control" type="text" name="username" spellcheck="false" autocomplete="off" data-msg-required="Please enter your username." required>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password</label>
              <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
                            <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
                        </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="form-group">
              <ul class="list-inline">
                <li>
                  <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Keep me signed in</span>
                  </label>
                </li>
              </ul>
              <ul class="list-inline">
                <li><a href="#">Forgot username?</a></li>
                <li>
                  <span aria-hidden="true"> · </span>
                </li>
                <li><a href="#">Forgot password?</a></li>
              </ul>
            </div>
          
        </div>
      </div>
      <div class="login-footer">
        <ul class="list-inline">
          <li><a class="link-muted" href="#">Sign up</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Privacy Policy</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Terms</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Cookie Policy</a></li>
          <li>|</li>
          <li>© Synotec 2019</li>
        </ul>
      </div>
    </div>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.formValid.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>