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
                    <div class="row gutter-xs">
                        <div class="col-md-12">
                            <div class="card"> 
                                <form id="form-data" method="POST"> 
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 m-y" style="padding: 50px 0px 0px 50px;">
                                                <p>
                                                    1).   To change the appearance   of this element you can use variables. Depending on the changes in these values, the element can take a completely different view.
                                                </p>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="custom-controls-stacked m-t">
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_1" value="1" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_1" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_1" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_1" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 m-y" style="    padding: 15px 0px 0px 50px;">
                                                <p>
                                                    2).   To change the appearance   of this element you can use variables. Depending on the changes in these values, the element can take a completely different view.
                                                </p>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="custom-controls-stacked m-t">
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_2" value="0"/>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_2" value="1"   />
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_2" value="0" />
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"  name="que_2" value="0"  />
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 m-y" style="padding: 15px 0px 0px 50px;">
                                                <p>
                                                    3).   To change the appearance   of this element you can use variables. Depending on the changes in these values, the element can take a completely different view.
                                                </p>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="custom-controls-stacked m-t">
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"  name="que_3" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_3" value="0"  >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"    name="que_3" value="1" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_3" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label> 
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 m-y" style="padding: 15px 0px 0px 50px;">
                                                <p>
                                                    4).   To change the appearance   of this element you can use variables. Depending on the changes in these values, the element can take a completely different view.
                                                </p>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="custom-controls-stacked m-t">
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"  name="que_4" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_4" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_4" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_4" value="1"  >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label> 

                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 m-y" style="padding: 15px 0px 0px 50px;">
                                                <p>
                                                    5).   To change the appearance   of this element you can use variables. Depending on the changes in these values, the element can take a completely different view.
                                                </p>
                                                <div class="form-group"> 
                                                    <div class="col-sm-9">
                                                        <div class="custom-controls-stacked m-t">
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_5" value="0"  >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"   name="que_5" value="0" >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" name="que_5" value="0"  >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label>
                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox"  name="que_5" value="1"  >
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-label">Put site into maintenance mode</span>
                                                            </label> 
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2  pull-left "  style="padding: 0px 0px 15px 55px;"> 

                                                <input type="hidden" name="action" value="UPDATESTUDENTLEVEL"/> 
                                                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id'] ?>"/>
                                                <button type="submit" class="btn btn-primary btn-block" id="create">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>

                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright">2017 &copy; Elephant <a href=" ">test</a></small>
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