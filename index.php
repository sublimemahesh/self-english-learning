<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Self Learning English</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="layout layout-header-fixed layout-sidebar-fixed">

        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main">

            <!-- Navigation -->
            <?php include './navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row gutter-xs">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Visitors</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-chart">
                                        <canvas id="demo-visitors" data-chart="bar" data-animation="false" data-labels='["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5", "Aug 6", "Aug 7", "Aug 8", "Aug 9", "Aug 10", "Aug 11", "Aug 12", "Aug 13", "Aug 14", "Aug 15", "Aug 16", "Aug 17", "Aug 18", "Aug 19", "Aug 20", "Aug 21", "Aug 22", "Aug 23", "Aug 24", "Aug 25", "Aug 26", "Aug 27", "Aug 28", "Aug 29", "Aug 30", "Aug 31"]' data-values='[{"label": "Visitors", "backgroundColor": "#f7a033", "borderColor": "#f7a033",  "data": [29432, 20314, 17665, 22162, 31194, 35053, 29298, 36682, 45325, 39140, 22190, 28014, 24121, 39355, 36064, 45033, 42995, 30519, 20246, 42399, 37536, 34607, 33807, 30988, 24562, 49143, 44579, 43600, 18064, 36068, 41605]}]' data-hide='["legend", "scalesX"]' data-scales='{"yAxes": [{"gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6", "maxTicksLimit": 5}}], "xAxes": [{ "gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6"}} ]}' height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sales</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-chart">
                                        <canvas id="demo-sales" data-chart="bar" data-animation="false" data-labels='["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5", "Aug 6", "Aug 7", "Aug 8", "Aug 9", "Aug 10", "Aug 11", "Aug 12", "Aug 13", "Aug 14", "Aug 15", "Aug 16", "Aug 17", "Aug 18", "Aug 19", "Aug 20", "Aug 21", "Aug 22", "Aug 23", "Aug 24", "Aug 25", "Aug 26", "Aug 27", "Aug 28", "Aug 29", "Aug 30", "Aug 31"]' data-values='[{"label": "Sales", "backgroundColor": "#e64a19", "borderColor": "#e64a19",  "data": [3601.09, 2780.29, 1993.39, 4277.07, 4798.58, 6390.75, 3337.37, 6786.94, 5632.1, 5460.43, 3905.17, 3070.82, 4263.55, 7132.64, 6103.88, 6020.76, 4662.25, 4084.34, 3464.87, 4947.89, 4486.55, 5898.46, 5528.33, 3616.03, 3255.17, 7881.06, 7293.8, 6863.6, 3161.31, 6711.08, 7942.9]}]' data-hide='["legend", "scalesX"]' data-scales='{"yAxes": [{"gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6", "maxTicksLimit": 5}}], "xAxes": [{ "gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6"}} ]}' height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Traffic Source / Top Referrals</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 m-y">
                                            <ul class="list-group list-group-divided">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-middle media-body">
                                                            <h6 class="media-heading">
                                                                <span>Direct</span>
                                                            </h6>
                                                            <h4 class="media-heading">67%
                                                                <small>691,279</small>
                                                            </h4>
                                                        </div>
                                                        <div class="media-middle media-right">
                                                            <span class="bg-primary circle sq-40">
                                                                <span class="icon icon-arrow-right"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-middle media-body">
                                                            <h6 class="media-heading">
                                                                <span>Referrals</span>
                                                            </h6>
                                                            <h4 class="media-heading">21%
                                                                <small>216,670</small>
                                                            </h4>
                                                        </div>
                                                        <div class="media-middle media-right">
                                                            <span class="bg-primary circle sq-40">
                                                                <span class="icon icon-link"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-middle media-body">
                                                            <h6 class="media-heading">
                                                                <span>Search Engines</span>
                                                            </h6>
                                                            <h4 class="media-heading">12%
                                                                <small>123,811</small>
                                                            </h4>
                                                        </div>
                                                        <div class="media-middle media-right">
                                                            <span class="bg-primary circle sq-40">
                                                                <span class="icon icon-search"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 m-y">
                                            <table class="table table-borderless table-fixed">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">1.</td>
                                                        <td class="col-xs-7 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">themeforest.net</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-4 text-right">115,928</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">2.</td>
                                                        <td class="col-xs-7 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">facebook.com</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-4 text-right">43,651</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">3.</td>
                                                        <td class="col-xs-7 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">twitter.com</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-4 text-right">20,117</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">4.</td>
                                                        <td class="col-xs-7 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">linkedin.com</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-4 text-right">19,115</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">5.</td>
                                                        <td class="col-xs-7 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">pinterest.com</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-4 text-right">11,292</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Sales / Top Brands</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 m-y">
                                            <ul class="list-group list-group-divided">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-middle media-body">
                                                            <h6 class="media-heading">
                                                                <span>Women's Clothing</span>
                                                            </h6>
                                                            <h4 class="media-heading">28%
                                                                <small>$43,498.69</small>
                                                            </h4>
                                                        </div>
                                                        <div class="media-middle media-right">
                                                            <span class="bg-danger circle sq-40">
                                                                <span class="icon icon-female"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-middle media-body">
                                                            <h6 class="media-heading">
                                                                <span>Men's Clothing</span>
                                                            </h6>
                                                            <h4 class="media-heading">19%
                                                                <small>$29,516.97</small>
                                                            </h4>
                                                        </div>
                                                        <div class="media-middle media-right">
                                                            <span class="bg-danger circle sq-40">
                                                                <span class="icon icon-male"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-middle media-body">
                                                            <h6 class="media-heading">
                                                                <span>Computers</span>
                                                            </h6>
                                                            <h4 class="media-heading">15%
                                                                <small>$23,302.87</small>
                                                            </h4>
                                                        </div>
                                                        <div class="media-middle media-right">
                                                            <span class="bg-danger circle sq-40">
                                                                <span class="icon icon-laptop"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 m-y">
                                            <table class="table table-borderless table-fixed">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">1.</td>
                                                        <td class="col-xs-6 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">Banana Republic</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-5 text-right">$7,124.23</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">2.</td>
                                                        <td class="col-xs-6 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">Calvin Klein</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-5 text-right">$6,389.26</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">3.</td>
                                                        <td class="col-xs-6 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">Ralph Lauren</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-5 text-right">$5,826.64</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">4.</td>
                                                        <td class="col-xs-6 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">Tommy Hilfiger</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-5 text-right">$5,064.62</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1 text-left">5.</td>
                                                        <td class="col-xs-6 text-left">
                                                            <a class="link-muted" href="#">
                                                                <span class="truncate">Lenovo</span>
                                                            </a>
                                                        </td>
                                                        <td class="col-xs-5 text-right">$4,536.72</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-md-4 col-md-push-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Most Viewed Products</strong>
                                    <span aria-hidden="true"> · </span>
                                    <a href="#">View full report</a>
                                </div>
                                <div class="card-body">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/5615854990.jpg" alt="Raja Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="product.html">Raja Elephant T-shirt Women's S-XL #4398</a>
                                                </h5>
                                            </div>
                                            <div class="media-middle media-right">
                                                <small class="label arrow-left arrow-danger">97k views</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/5991713086.jpg" alt="Maliha Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="product.html">Maliha Elephant T-shirt Women's S-XL #4909</a>
                                                </h5>
                                            </div>
                                            <div class="media-middle media-right">
                                                <small class="label arrow-left arrow-danger">92k views</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/6501906268.jpg" alt="Donna Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="product.html">Donna Elephant T-shirt Men's S-2XL #4872</a>
                                                </h5>
                                            </div>
                                            <div class="media-middle media-right">
                                                <small class="label arrow-left arrow-danger">81k views</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Most Sold Products</strong>
                                    <span aria-hidden="true"> · </span>
                                    <a href="#">View full report</a>
                                </div>
                                <div class="card-body">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/5991713086.jpg" alt="Maliha Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="product.html">Maliha Elephant T-shirt Women's S-XL #4909</a>
                                                </h5>
                                                <small>197 Items
                                                    <span class="rating">
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                    </span>
                                                </small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/5774898501.jpg" alt="Sri Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="product.html">Sri Elephant T-shirt Men's S-2XL #4323</a>
                                                </h5>
                                                <small>165 Items
                                                    <span class="rating">
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star-half-o"></span>
                                                    </span>
                                                </small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/6711938749.jpg" alt="Tess Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="product.html">Tess Elephant T-shirt Women's S-XL #4972</a>
                                                </h5>
                                                <small>125 Items
                                                    <span class="rating">
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star"></span>
                                                        <span class="icon icon-star-o"></span>
                                                    </span>
                                                </small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-pull-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Activity Feed</strong>
                                    <span aria-hidden="true"> · </span>
                                    <a href="#">View full report</a>
                                </div>
                                <div class="card-body">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/0299419341.jpg" alt="Harry Jones">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a href="#">Harry Jones</a>
                                                    <small>5 min ago</small>
                                                </h5>
                                                <small>Published a product: "Jade Elephant T-shirt".</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/0180441436.jpg" alt="Teddy Wilson">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a href="#">Teddy Wilson</a>
                                                    <small>(10 min ago)</small>
                                                </h5>
                                                <small>Created a new collection: "Summer with Style".</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-middle media-left">
                                                <a href="product.html">
                                                    <img class="img-circle" width="48" height="48" src="img/0310728269.jpg" alt="Daniel Taylor">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a href="#">Daniel Taylor</a>
                                                    <small>(12 min ago)</small>
                                                </h5>
                                                <small>Created a new page: "Free tools".</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright"><?php echo date('Y') ?>&copy;  <a href="#">Made by Synotec Private Limited</a></small>
                </div>
            </div>
        </div>
        <div class="theme">
            <div class="theme-panel theme-panel-collapsed">
                <div class="theme-panel-controls">
                    <button class="theme-panel-toggler" title="Expand theme panel ( ] )" type="button">
                        <span class="icon icon-cog icon-spin" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="theme-panel-body">
                    <div class="custom-scrollbar">
                        <div class="custom-scrollbar-inner">
                            <h5 class="theme-heading">
                                <a href="http://demo.madebytilde.com/elephant/buy" class="btn btn-primary btn-block">Buy Elephant Now!</a>
                            </h5>
                            <ul class="theme-settings">
                                <li class="theme-settings-heading">
                                    <div class="divider">
                                        <div class="divider-content">Theme Settings</div>
                                    </div>
                                </li>
                                <li class="theme-settings-item">
                                    <div class="theme-settings-label">Header fixed</div>
                                    <div class="theme-settings-switch">
                                        <label class="switch switch-primary">
                                            <input class="switch-input" type="checkbox" name="layout-header-fixed" data-sync="true">
                                            <span class="switch-track"></span>
                                            <span class="switch-thumb"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="theme-settings-item">
                                    <div class="theme-settings-label">Sidebar fixed</div>
                                    <div class="theme-settings-switch">
                                        <label class="switch switch-primary">
                                            <input class="switch-input" type="checkbox" name="layout-sidebar-fixed" data-sync="true">
                                            <span class="switch-track"></span>
                                            <span class="switch-thumb"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="theme-settings-item">
                                    <div class="theme-settings-label">Sidebar sticky*</div>
                                    <div class="theme-settings-switch">
                                        <label class="switch switch-primary">
                                            <input class="switch-input" type="checkbox" name="layout-sidebar-sticky" data-sync="true">
                                            <span class="switch-track"></span>
                                            <span class="switch-thumb"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="theme-settings-item">
                                    <div class="theme-settings-label">Sidebar collapsed</div>
                                    <div class="theme-settings-switch">
                                        <label class="switch switch-primary">
                                            <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed" data-sync="false">
                                            <span class="switch-track"></span>
                                            <span class="switch-thumb"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="theme-settings-item">
                                    <div class="theme-settings-label">Footer fixed</div>
                                    <div class="theme-settings-switch">
                                        <label class="switch switch-primary">
                                            <input class="switch-input" type="checkbox" name="layout-footer-fixed" data-sync="true">
                                            <span class="switch-track"></span>
                                            <span class="switch-thumb"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="theme-settings-description">
                                    <span>
                                        <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached. <a href="page-layouts.html">Learn more</a></span>
                                </li>
                            </ul>
                            <hr class="theme-divider">
                            <ul class="theme-variants">
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-1/" title="Theme 1">
                                        <img class="img-responsive" src="img/f420a3cea0fb04862eb630f5a54b2733.jpg" alt="Theme 1">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-2/" title="Theme 2">
                                        <img class="img-responsive" src="img/3dd124286157b729cc38d9bd7045e384.jpg" alt="Theme 2">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-3/" title="Theme 3">
                                        <img class="img-responsive" src="img/35e0765272cd421a5352331003ae2ab1.jpg" alt="Theme 3">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-4/" title="Theme 4">
                                        <img class="img-responsive" src="img/4fcb4322807f1fd92aa3140adb37d4d9.jpg" alt="Theme 4">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="index.html" title="Theme 5">
                                        <img class="img-responsive" src="img/b787e62313c23880e0797bfbbc3d150c.jpg" alt="Theme 5">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-6/" title="Theme 6">
                                        <img class="img-responsive" src="img/7489e404fb5088d63e5a5d55b27d546c.jpg" alt="Theme 6">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-7/" title="Theme 7">
                                        <img class="img-responsive" src="img/972b6c5882a45ee73d83a90a9852660c.jpg" alt="Theme 7">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-8/" title="Theme 8">
                                        <img class="img-responsive" src="img/0100e8b81ad03f81a64a0a5f49c5be41.jpg" alt="Theme 8">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-9/" title="Theme 9">
                                        <img class="img-responsive" src="img/69ece2eb60bdd2126e2acf27af43aa9b.jpg" alt="Theme 9">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-10/" title="Theme 10">
                                        <img class="img-responsive" src="img/2ef1cfdcf1da5256d7b994983bd8d457.jpg" alt="Theme 10">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-11/" title="Theme 11">
                                        <img class="img-responsive" src="img/cca2226fdaba079b321ba5cf05ba0adc.jpg" alt="Theme 11">
                                    </a>
                                </li>
                                <li class="theme-variants-item">
                                    <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-12/" title="Theme 12">
                                        <img class="img-responsive" src="img/7a4ee939781f6165006cff1b5b8096d4.jpg" alt="Theme 12">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="theme-panel-footer">
                    <a class="rounded sq-36 bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;t=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device" title="Share on Facebook" target="_blank">
                        <span class="icon icon-facebook"></span>
                    </a>
                    <a class="rounded sq-36 bg-twitter" href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;text=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device:%20http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;via=madebytilde" title="Tweet" target="_blank">
                        <span class="icon icon-twitter"></span>
                    </a>
                    <a class="rounded sq-36 bg-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Share on Google+" target="_blank">
                        <span class="icon icon-google-plus"></span>
                    </a>
                    <a class="rounded sq-36 bg-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;title=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&amp;summary=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.&amp;source=http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Share on LinkedIn" target="_blank">
                        <span class="icon icon-linkedin"></span>
                    </a>
                    <a class="rounded sq-36 bg-pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;media=http://demo.madebytilde.com/elephant.jpg&amp;description=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner." title="Pin it" target="_blank">
                        <span class="icon icon-pinterest-p"></span>
                    </a>
                    <a class="rounded sq-36 bg-default" href="mailto:?subject=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&body=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.:%20http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Send email" target="_blank">
                        <span class="icon icon-envelope-o"></span>
                    </a>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>
    </body>
</html>