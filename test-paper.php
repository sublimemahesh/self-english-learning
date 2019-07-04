<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
 
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Paper</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">

        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/shopping-cart.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="layout layout-header-fixed">
        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main">
            <!-- Navigation -->
            <?php include './disable-navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form id="form-data" method="POST"> 
                                <div class="tab-content"> 
                                    <div class="payment">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3"> 
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="student_level" class="form-label">Student level</label>
                                                            <select id="student_level" class="custom-select" name="student_level">
                                                                <option value="" selected="selected">Select a Student level</option>
                                                                <option value="1">Beginner</option>
                                                                <option value="2">Intermediate</option>
                                                                <option value="3">Advanced</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <input type="hidden" name="action" value="UPDATESTUDENTLEVEL"/> 
                                                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id'] ?>"/>
                                                <button type="submit" class="btn btn-primary btn-block" id="create">Submit</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
    </body> 
</html>