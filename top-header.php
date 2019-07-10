<?php
$STUDENT = new Student($_SESSION['id']);
?>
<div class="layout-header">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-center" href="index.php">
                <img class="navbar-brand-logo" src="img/logo.png" alt="Self-English-Learning">
            </a>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                <span class="sr-only">Toggle navigation</span>
                <span class="bars">
                    <span class="bar-line bar-line-1 out"></span>
                    <span class="bar-line bar-line-2 out"></span>
                    <span class="bar-line bar-line-3 out"></span>
                </span>
                <span class="bars bars-x">
                    <span class="bar-line bar-line-4"></span>
                    <span class="bar-line bar-line-5"></span>
                </span>
            </button>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="arrow-up"></span>
                <span class="ellipsis ellipsis-vertical">
                    <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
                </span>
            </button>
        </div>
        <div class="navbar-toggleable">
            <nav id="navbar" class="navbar-collapse collapse">
                <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="bars">
                        <span class="bar-line bar-line-1 out"></span>
                        <span class="bar-line bar-line-2 out"></span>
                        <span class="bar-line bar-line-3 out"></span>
                        <span class="bar-line bar-line-4 in"></span>
                        <span class="bar-line bar-line-5 in"></span>
                        <span class="bar-line bar-line-6 in"></span>
                    </span>
                </button>
                <ul class="nav navbar-nav navbar-right">


                    <li class="visible-xs-block">
                        <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
                    </li>
                    <li class="dropdown">

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <div class="dropdown-header">
                                <a class="dropdown-link" href="#">New Message</a>
                                <h5 class="dropdown-heading">Recent messages</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="list-group list-group-divided custom-scrollbar">
                                    <a class="list-group-item" href="#">
                                        <div class="notification">
                                            <div class="notification-media">
                                                <img class="circle" width="40" height="40" src="img/0299419341.jpg" alt="Harry Jones">
                                            </div>
                                            <div class="notification-content">
                                                <small class="notification-timestamp">16 min</small>
                                                <h5 class="notification-heading">Harry Jones</h5>
                                                <p class="notification-text">
                                                    <small class="truncate">Hi Teddy, Just wanted to let you know we got the project! We should be starting the planning next week. Harry</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="list-group-item" href="#">
                                        <div class="notification">
                                            <div class="notification-media">
                                                <img class="circle" width="40" height="40" src="img/0980726243.jpg" alt="Eliot Morgan">
                                            </div>
                                            <div class="notification-content">
                                                <small class="notification-timestamp">Sep 15</small>
                                                <h5 class="notification-heading">Eliot Morgan</h5>
                                                <p class="notification-text">
                                                    <small class="truncate">Dear Teddy, Please accept this message as notification that I was unable to work yesterday, due to personal illness.m</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a class="dropdown-btn" href="#">See All</a>
                            </div>
                        </div>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                            <span class="icon-with-child hidden-xs">
                                <span class="icon icon-bell-o icon-lg"></span>
                                <span class="badge badge-primary badge-above right">1</span>
                            </span>
                            <span class="visible-xs-block">
                                <span class="icon icon-bell icon-lg icon-fw"></span>
                                <span class="badge badge-primary pull-right">1</span>
                                Notifications
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <div class="dropdown-header">
                                <h5 class="dropdown-heading">Recent Notifications</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="list-group list-group-divided custom-scrollbar">
                                    <a class="list-group-item" href="#">
                                        <div class="notification">
                                            <div class="notification-media">
                                                <span class="icon icon-flag bg-success circle sq-40"></span>
                                            </div>
                                            <div class="notification-content">
                                                <small class="notification-timestamp">43 min</small>
                                                <h5 class="notification-heading">Student login</h5>
                                                <p class="notification-text">
                                                    <small class="truncate">Successfully login as student.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a class="dropdown-btn" href="#">See All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                            <img class="circle" width="36" height="36" src="img/0180441436.jpg" alt=""> <?php echo $STUDENT->full_name ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">  
                            <li><a href="#">Profile</a></li>
                            <li><a href="log-out.php">Sign out</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs-block">
                        <a href="#">
                            <span class="icon icon-users icon-lg icon-fw"></span>
                            Contacts
                        </a>
                    </li>
                    <li class="visible-xs-block">
                        <a href="#">
                            <span class="icon icon-user icon-lg icon-fw"></span>
                            Profile
                        </a>
                    </li>
                    <li class="visible-xs-block">
                        <a href="#">
                            <span class="icon icon-power-off icon-lg icon-fw"></span>
                            Sign out
                        </a>
                    </li>
                </ul>


                <div class="title-bar">
                    <div class="row gutter-xs">
                        <?php
                        if ($STUDENT->level == 1) {
                            ?> 

                            <div class="col-md-4">
                                <div class="card back-color"   >
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">BEGINNER</span>

                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>

                                                </h3>
                                                <small class="black-color">70% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 disabled">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                  <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#667589", "#f7a033"], "data": [879, 1]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">INTERMEDIATE</span>
                                                    <span class="icon icon-lock pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">0% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 disabled">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#667589", "#f7a033"], "data": [879, 1]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">ADVANCED</span>
                                                    <span class="icon icon-lock pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">0% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($STUDENT->level == 2) {
                            ?>
                            <div class="col-md-4">
                                <div class="card "  >
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [100, 1]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">BEGINNER</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">100% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="card back-color " >
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [60, 100]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">INTERMEDIATE</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">40% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 disabled">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#667589", "#f7a033"], "data": [879, 1]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">ADVANCED</span>
                                                    <span class="icon icon-lock pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">0% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } elseif ($STUDENT->level == 3) {
                            ?>
                            <div class="col-md-4 ">
                                <div class="card "   >
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">BEGINNER</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>

                                                <small class="black-color">100% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  ">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">INTERMEDIATE</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">100% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card back-color ">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#667589", "#f7a033"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">ADVANCED</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">10% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                        
                            </div>
                        <?php } else { ?>
                            <div class="col-md-4 disabled">
                                <div class="card "   >
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">BEGINNER</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>

                                                <small class="black-color">0% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 disabled">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">INTERMEDIATE</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">0% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 disabled">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <div class="media-chart">
                                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#667589", "#f7a033"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="50" width="50"></canvas>
                                                </div>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h3 class="media-heading">
                                                    <span class="fw-l black-color">ADVANCED</span>
                                                    <span class="icon icon-unlock-alt pull-right black-color"></span>
                                                </h3>
                                                <small class="black-color">0% Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                        
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id'] ?>"/>