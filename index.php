<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/templatemonster/spinzhr/source/light/pages/dashboard/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Oct 2018 01:03:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>SpinzHR - Human Resource Management Admin Template</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">
                    <img src="assets/images/logo.png" alt="" />
                    <span class="logo-name">SpinzHR</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu-collapse">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                    <li>
                        <div class="search-box">
                            <input type="search" id="search" placeholder="Search..." />
                            <button class="icon">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->

                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-bell"></i>
                            <span class="label-count bg-orange">7</span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">12 new members joined</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">4 sales made</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">
                                                    <b>Nancy Doe</b> deleted account</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">
                                                    <b>Nancy</b> changed name</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">
                                                    <b>John</b> commented your post</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">
                                                    <b>John</b> updated status</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Settings updated</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- #START# Message-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-comments"></i>
                            <span class="label-count bg-green">4</span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">MESSAGES</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user2.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user3.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user4.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user5.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user6.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user7.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Message-->
                    <li class="dropdown user_profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="assets/images/user.jpg" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="assets/images/usrbig.jpg" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> John Deo </div>
                            <div class="profile-usertitle-job ">HR Manager </div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="../examples/profile.html" data-toggle="tooltip" title="Profile">
                                <i class="far fa-user sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../email/inbox.html" data-toggle="tooltip" title="Mail">
                                <i class="far fa-envelope sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../apps/chat.html" data-toggle="tooltip" title="Chat">
                                <i class="far fa-comment-alt sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../examples/sign-in.html" data-toggle="tooltip" title="Logout">
                                <i class="fas fa-sign-out-alt sidebarQuickIcon"></i>
                            </a>
                        </div>
                    </li>
                    
                    <li  >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Lession 1</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="dashboard2.html">Dashboard 2</a>
                            </li>
                            <li class="active">
                                <a href="dashboard3.html">Dashboard 3</a>
                            </li>
                        </ul>
                    </li>
                     
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-user-tie"></i>
                            <span>Lession 2</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../employee/all-employees.html">All Employee</a>
                            </li>
                            <li>
                                <a href="../employee/add-employee.html">Add Employee</a>
                            </li>
                            <li>
                                <a href="../employee/edit-employee.html">Edit Employee</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Projects</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../projects/all-projects.html">All Projects</a>
                            </li>
                            <li>
                                <a href="../projects/add-project.html">Add Project</a>
                            </li>
                            <li>
                                <a href="../projects/edit-project.html">Edit Project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-user-alt"></i>
                            <span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../clients/all-clients.html">All Clients</a>
                            </li>
                            <li>
                                <a href="../clients/add-client.html">Add Client</a>
                            </li>
                            <li>
                                <a href="../clients/edit-client.html">Edit Client</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Leave Applications</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../leave/all-leave.html">All Leave Request</a>
                            </li>
                            <li>
                                <a href="../leave/add-leave.html">New Leave Request</a>
                            </li>
                            <li>
                                <a href="../leave/edit-leave.html">Edit Leave Request</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-bed"></i>
                            <span>Holidays</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../holiday/all-holidays.html">All Holidays</a>
                            </li>
                            <li>
                                <a href="../holiday/add-holiday.html">Add Holiday</a>
                            </li>
                            <li>
                                <a href="../holiday/edit-holiday.html">Edit Holiday</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-book"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../accounts/income.html">Income</a>
                            </li>
                            <li>
                                <a href="../accounts/expense.html">Expenses</a>
                            </li>
                            <li>
                                <a href="../accounts/invoice.html">Invoices</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-sitemap"></i>
                            <span>Departments</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../departments/all-departments.html">All Departments</a>
                            </li>
                            <li>
                                <a href="../departments/add-department.html">Add Department</a>
                            </li>
                            <li>
                                <a href="../departments/edit-department.html">Edit Departments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-id-card"></i>
                            <span>Payroll</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../payroll/payslip.html">Payslip</a>
                            </li>
                            <li>
                                <a href="../payroll/employee-salary.html">Employee Salary</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-landmark"></i>
                            <span>Consultancy</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../consultancy/all-consultancy.html">All Consultancy</a>
                            </li>
                            <li>
                                <a href="../consultancy/add-consultancy.html">Add Consultancy</a>
                            </li>
                            <li>
                                <a href="../consultancy/edit-consultancy.html">Edit Consultancy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../email/inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="../email/compose.html">Compose</a>
                            </li>
                            <li>
                                <a href="../email/view-mail.html">Read Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-google-play"></i>
                            <span>Apps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../apps/chat.html">Chat</a>
                            </li>
                            <li>
                                <a href="../apps/contact_list.html">Contact List</a>
                            </li>
                            <li>
                                <a href="../apps/contact_grid.html">Contact Grid</a>
                            </li>
                            <li>
                                <a href="../apps/support.html">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../widgets/widget.html">
                            <i class="fas fa-braille"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-drafting-compass"></i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="../ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="../ui/badges.html">Badges</a>
                            </li>


                            <li>
                                <a href="../ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="../ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="../ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="../ui/cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="../ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="../ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="../ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="../ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="../ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="../ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="../ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="../ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="../ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                            </li>
                            <li>
                                <a href="../ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="../ui/waves.html">Waves</a>
                            </li>
                            <li>
                                <a href="../ui/typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="../ui/helper-classes.html">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="../forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="../forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="../forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="../forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="../forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="../tables/jquery-datatable.html">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="../tables/group-table.html">Grouping</a>
                            </li>
                            <li>
                                <a href="../tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-images"></i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="../medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="../charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="../charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="../charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="../charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-file-alt"></i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../examples/timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="../examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="../examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="../examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="../examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="../examples/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="../examples/invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="../examples/faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="../examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="../examples/locked.html">Locked</a>
                            </li>
                            <li>
                                <a href="../examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="../examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-globe-americas"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="../maps/jqvmap.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-angle-double-down"></i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <a href="#settings" data-toggle="tab">SETTINGS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>GENERAL SETTINGS</p>
                            <ul class="setting-list list-unstyled m-t-20">
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Save History
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Show Status
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Auto Submit Issue
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Show Status To All
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="white" class="actived">
                                    <div class="white white-theme-border"></div>
                                </li>
                                <li data-theme="black">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="red">
                                    <div class="red"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="deep-purple">
                                    <div class="deep-purple"></div>
                                </li>
                                <li data-theme="indigo">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="light-blue">
                                    <div class="light-blue"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="yellow">
                                    <div class="yellow"></div>
                                </li>
                                <li data-theme="amber">
                                    <div class="amber"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="deep-orange">
                                    <div class="deep-orange"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>Logo Header</p>
                            <ul class="demo-choose-logoheader choose-theme-logoheader list-unstyled">
                                <li data-theme="light-blue" class="actived">
                                    <div class="light-blue"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white white-theme-border"></div>
                                </li>
                                <li data-theme="black">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="red">
                                    <div class="red"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="deep-purple">
                                    <div class="deep-purple"></div>
                                </li>
                                <li data-theme="indigo">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="yellow">
                                    <div class="yellow"></div>
                                </li>
                                <li data-theme="amber">
                                    <div class="amber"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="deep-orange">
                                    <div class="deep-orange"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item 	bcrumb-1">
                                <a href="../../index.html">
                                    <i class="material-icons">home</i>
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard 3</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 text-right">
                        <div class="breadcrumb-chart m-l-50">
                            <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar">
                                        <canvas width="49" height="40" style="display: inline-block; width: 49px; height: 40px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right m-r-10">
                                <div class="chart-info">
                                    <i class="fas fa-dollar-sign m-r-5"></i>
                                    <span>$8,968</span>
                                    <p>Total Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-chart m-l-50">
                            <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar2">
                                        <canvas width="49" height="40" style="display: inline-block; width: 49px; height: 40px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right m-r-10">
                                <div class="chart-info">
                                    <i class="fas fa-user-tie m-r-5"></i>
                                    <span>2,568</span>
                                    <p>New Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center cyan">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="text m-b-10">Total Income</div>
                        <h3 class="m-b-0">$1512
                            <i class="material-icons">trending_up</i>
                        </h3>
                        <small class="displayblock">21% Higher Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center purple">
                        <div class="icon m-b-10">
                            <span class="chart chart-line"></span>
                        </div>
                        <div class="text m-b-10">Orders Received</div>
                        <h3 class="m-b-0">1236
                            <i class="material-icons">trending_up</i>
                        </h3>
                        <small class="displayblock">13% Highr Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center blue">
                        <div class="icon m-b-10">
                            <div class="chart chart-pie"></div>
                        </div>
                        <div class="text m-b-10">Total Sales</div>
                        <h3 class="m-b-0">1107
                            <i class="material-icons">trending_down</i>
                        </h3>
                        <small class="displayblock">34% Lower Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center green">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="text m-b-10">Total Active Users</div>
                        <h3 class="m-b-0">167
                            <i class="material-icons">trending_down</i>
                        </h3>
                        <small class="displayblock">06% Lower Than Average </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="singel-bar-chart"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="polar-chart"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Clients</strong> Details</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Project Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </td>
                                            <td>John Doe</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>ERP System</td>
                                            <td style="display: table-cell;">
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user2.jpg" alt="">
                                            </td>
                                            <td>Sarah Smith</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-red shadow-style">Inactive</span>
                                            </td>
                                            <td>Abc Website</td>
                                            <td style="display: table-cell;">
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user3.jpg" alt="">
                                            </td>
                                            <td>Airi Satou</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>Android App</td>
                                            <td style="display: table-cell;">
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user4.jpg" alt="">
                                            </td>
                                            <td>Angelica Ramos</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>Ios App</td>
                                            <td style="display: table-cell;">
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user5.jpg" alt="">
                                            </td>
                                            <td>Ashton Cox</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-red shadow-style">Inactive</span>
                                            </td>
                                            <td>Java Website</td>
                                            <td style="display: table-cell;">
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user6.jpg" alt="">
                                            </td>
                                            <td>Cara Stevens</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>Desktop App</td>
                                            <td style="display: table-cell;">
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>New </strong>Projects</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Product</th>
                                                <th class="border-top-0">Employees</th>
                                                <th class="border-top-0">Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate">iPhone X</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$8999</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Pixel 2</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$5550</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">OnePlus</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$9000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Galaxy</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$7500</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Moto Z2</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$8500</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">iPhone X</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$8999</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">iPhone X</td>
                                                <td class="text-truncate">
                                                    <ul class="list-unstyled order-list">
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user1.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user2.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="assets/images/user/user3.jpg" alt="user">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge">+4</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-truncate">$8999</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                <!-- Activity -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>Activity</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="assign-style">
                                <ul class="feedBody">
                                    <li class="active-feed">
                                        <div class="feed-user-img">
                                            <img src="assets/images/user/user1.jpg" class="img-radius " alt="User-Profile-Image">
                                        </div>
                                        <h6>
                                            <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith
                                            <small class="text-muted">6 hours ago</small>
                                        </h6>
                                        <p class="m-b-15 m-t-15">
                                            hii John, I have upload doc related to task.
                                        </p>

                                    </li>
                                    <li class="diactive-feed">
                                        <div class="feed-user-img">
                                            <img src="assets/images/user/user2.jpg" class="img-radius " alt="User-Profile-Image">
                                        </div>
                                        <h6>
                                            <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi
                                            <small class="text-muted">5 hours ago
                                            </small>
                                        </h6>
                                        <p class="m-b-15 m-t-15">
                                            Please do as specify. Let me know if you have any query.
                                        </p>
                                    </li>
                                    <li class="diactive-feed">
                                        <div class="feed-user-img">
                                            <img src="assets/images/user/user3.jpg" class="img-radius " alt="User-Profile-Image">
                                        </div>
                                        <h6>
                                            <span class="feedLblStyle lblCommentStyle">comment</span> Lina Smith
                                            <small class="text-muted">6 hours ago</small>
                                        </h6>
                                        <p class="m-b-15 m-t-15">
                                            Hey, How are you??
                                        </p>
                                    </li>
                                    <li class="active-feed">
                                        <div class="feed-user-img">
                                            <img src="assets/images/user/user4.jpg" class="img-radius " alt="User-Profile-Image">
                                        </div>
                                        <h6>
                                            <span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan
                                            <small class="text-muted">7 hours ago</small>
                                        </h6>
                                        <p class="m-b-15 m-t-15">
                                            I am fine. You??
                                        </p>
                                    </li>
                                    <li class="active-feed">
                                        <div class="feed-user-img">
                                            <img src="assets/images/user/user5.jpg" class="img-radius " alt="User-Profile-Image">
                                        </div>
                                        <h6>
                                            <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith
                                            <small class="text-muted">6 hours ago</small>
                                        </h6>
                                        <p class="m-b-15 m-t-15">
                                            hii John, I have upload doc related to task.
                                        </p>

                                    </li>
                                    <li class="diactive-feed">
                                        <div class="feed-user-img">
                                            <img src="assets/images/user/user6.jpg" class="img-radius " alt="User-Profile-Image">
                                        </div>
                                        <h6>
                                            <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi
                                            <small class="text-muted">5 hours ago
                                            </small>
                                        </h6>
                                        <p class="m-b-15 m-t-15">
                                            Please do as specify. Let me know if you have any query.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Activity -->
                <!-- TODO List -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Todo</strong> List</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="to-do-list ui-sortable" id="sortable-todo">
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Add salary details in system
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Announcement for holiday
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> call bus driver
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Office picnic
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Add salary details in system
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Announcement for holiday
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> call bus driver
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" class="todo-remove">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# TODO List -->
            </div>
        </div>
    </section>



    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/demo.js"></script>

    <script src="assets/js/pages/dashboard/dashboard3.js"></script>
    <!-- Knob Js -->
    <script src="assets/js/pages/charts/jquery-knob.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <script src="assets/js/pages/todo/todo.js"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/spinzhr/source/light/pages/dashboard/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Oct 2018 01:03:44 GMT -->
</html>