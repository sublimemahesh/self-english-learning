<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>SpinzHR - Human Resource Management Admin Template</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
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
                <a class="navbar-brand" href="index.html">
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
                            <a class="tooltips" href="pages/examples/profile.html" data-toggle="tooltip" title="Profile">
                                <i class="far fa-user sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="pages/email/inbox.html" data-toggle="tooltip" title="Mail">
                                <i class="far fa-envelope sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="pages/apps/chat.html" data-toggle="tooltip" title="Chat">
                                <i class="far fa-comment-alt sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="pages/examples/sign-in.html" data-toggle="tooltip" title="Logout">
                                <i class="fas fa-sign-out-alt sidebarQuickIcon"></i>
                            </a>
                        </div>
                    </li>
                    <li class="header">-- Main</li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard3.html">Dashboard 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/apps/calendar.html">
                            <i class="far fa-calendar"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-user-tie"></i>
                            <span>Employees</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/employee/all-employees.html">All Employee</a>
                            </li>
                            <li>
                                <a href="pages/employee/add-employee.html">Add Employee</a>
                            </li>
                            <li>
                                <a href="pages/employee/edit-employee.html">Edit Employee</a>
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
                                <a href="pages/projects/all-projects.html">All Projects</a>
                            </li>
                            <li>
                                <a href="pages/projects/add-project.html">Add Project</a>
                            </li>
                            <li>
                                <a href="pages/projects/edit-project.html">Edit Project</a>
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
                                <a href="pages/clients/all-clients.html">All Clients</a>
                            </li>
                            <li>
                                <a href="pages/clients/add-client.html">Add Client</a>
                            </li>
                            <li>
                                <a href="pages/clients/edit-client.html">Edit Client</a>
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
                                <a href="pages/leave/all-leave.html">All Leave Request</a>
                            </li>
                            <li>
                                <a href="pages/leave/add-leave.html">New Leave Request</a>
                            </li>
                            <li>
                                <a href="pages/leave/edit-leave.html">Edit Leave Request</a>
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
                                <a href="pages/holiday/all-holidays.html">All Holidays</a>
                            </li>
                            <li>
                                <a href="pages/holiday/add-holiday.html">Add Holiday</a>
                            </li>
                            <li>
                                <a href="pages/holiday/edit-holiday.html">Edit Holiday</a>
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
                                <a href="pages/accounts/income.html">Income</a>
                            </li>
                            <li>
                                <a href="pages/accounts/expense.html">Expenses</a>
                            </li>
                            <li>
                                <a href="pages/accounts/invoice.html">Invoices</a>
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
                                <a href="pages/departments/all-departments.html">All Departments</a>
                            </li>
                            <li>
                                <a href="pages/departments/add-department.html">Add Department</a>
                            </li>
                            <li>
                                <a href="pages/departments/edit-department.html">Edit Departments</a>
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
                                <a href="pages/payroll/payslip.html">Payslip</a>
                            </li>
                            <li>
                                <a href="pages/payroll/employee-salary.html">Employee Salary</a>
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
                                <a href="pages/consultancy/all-consultancy.html">All Consultancy</a>
                            </li>
                            <li>
                                <a href="pages/consultancy/add-consultancy.html">Add Consultancy</a>
                            </li>
                            <li>
                                <a href="pages/consultancy/edit-consultancy.html">Edit Consultancy</a>
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
                                <a href="pages/email/inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="pages/email/compose.html">Compose</a>
                            </li>
                            <li>
                                <a href="pages/email/view-mail.html">Read Email</a>
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
                                <a href="pages/apps/chat.html">Chat</a>
                            </li>
                            <li>
                                <a href="pages/apps/contact_list.html">Contact List</a>
                            </li>
                            <li>
                                <a href="pages/apps/contact_grid.html">Contact Grid</a>
                            </li>
                            <li>
                                <a href="pages/apps/support.html">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/widgets/widget.html">
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
                                <a href="pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Badges</a>
                            </li>


                            <li>
                                <a href="pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="pages/ui/cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="pages/ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                            </li>
                            <li>
                                <a href="pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="pages/ui/waves.html">Waves</a>
                            </li>
                            <li>
                                <a href="pages/ui/typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="pages/ui/helper-classes.html">Helper Classes</a>
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
                                <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
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
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/group-table.html">Grouping</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
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
                                <a href="pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
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
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
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
                                <a href="pages/examples/timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages/examples/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages/examples/invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages/examples/faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/locked.html">Locked</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
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
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/jqvmap.html">Vector Map</a>
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
                                <a href="index.html">
                                    <i class="material-icons">home</i>
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
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

            <!-- Widgets -->
            <div class="row state-overview">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box5 animate-bar bg-b-purple">
                        <div class="knob-icon">
                            <input type="text" class="dial" value="45" data-width="80" data-height="80" data-fgColor="#67de69">
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text">Projects</span>
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-green shadow-style" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 45%;"></div>
                            </div>
                            <span class="progress-description">
                                <small>10% Increase in 28 Days</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box5 animate-bar bg-b-purple">
                        <div class="knob-icon">
                            <input type="text" class="dial" value="69" data-width="80" data-height="80" data-fgColor="#f98050">
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text">Clients</span>
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 45%;"></div>
                            </div>
                            <span class="progress-description">
                                <small>26% Increase in 28 Days</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box5 animate-bar bg-b-purple">
                        <div class="knob-icon">
                            <input type="text" class="dial" value="84" data-width="80" data-height="80" data-fgColor="#8FD8FE">
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text p-b-10">Employee</span>
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 45%;"></div>
                            </div>
                            <span class="progress-description">
                                <small>14% Increase in 28 Days</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box5 animate-bar bg-b-purple">
                        <div class="knob-icon">
                            <input type="text" class="dial" value="56" data-width="80" data-height="80" data-fgColor="#ac8bde">
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text">Task</span>
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-purple shadow-style" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 45%;"></div>
                            </div>
                            <span class="progress-description">
                                <small>50% Increase in 28 Days</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
           
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Employee</strong> List</h2>
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
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Starus</th>
                                            <th>Performance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </td>
                                            <td>Jens Brincker</td>
                                            <td>Developer</td>
                                            <td>
                                                <span class="label light-green shadow-style">Available</span>
                                            </td>
                                            <td>
                                                <div id="sparkline">&nbsp;</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user2.jpg" alt="">
                                            </td>
                                            <td>Anthony Davie</td>
                                            <td>Designer</td>
                                            <td>
                                                <span class="label l-bg-purple shadow-style">Break</span>
                                            </td>
                                            <td>
                                                <div id="sparkline3">&nbsp;</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user3.jpg" alt="">
                                            </td>
                                            <td>David Perry</td>
                                            <td>Manager</td>
                                            <td>
                                                <span class="label l-bg-orange shadow-style">Leave</span>
                                            </td>
                                            <td>
                                                <div id="sparkline4">&nbsp;</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user4.jpg" alt="">
                                            </td>
                                            <td>Anthony Davie</td>
                                            <td>Tester</td>
                                            <td>
                                                <span class="label l-bg-cyan shadow-style">Resigned</span>
                                            </td>
                                            <td>
                                                <div id="sparkline5">&nbsp;</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user5.jpg" alt="">
                                            </td>
                                            <td>Alan Gilchrist</td>
                                            <td>Developer</td>
                                            <td>
                                                <span class="label light-green shadow-style">Available</span>
                                            </td>
                                            <td>
                                                <div id="sparkline6">&nbsp;</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </td>
                                            <td>Jens Brincker</td>
                                            <td>Manager</td>
                                            <td>
                                                <span class="label light-green shadow-style">Available</span>
                                            </td>
                                            <td>
                                                <div id="sparkline7">&nbsp;</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="owl-carousel owl-theme" id="dashboard_slide">
                        <div class="item">
                            <div class="carousel-content bg-indigo m-b-30">
                                <div class="col-white">
                                    <div class="slide-heading padding-15">
                                        <i class="fas fa-quote-left h3 text-white-50"></i>
                                    </div>
                                    <p class="m-l-15 m-r-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare
                                        mi. In quis scelerisque dui, eget rhoncus orci</p>
                                    <h5 class="margin-15">- John Deo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content bg-red m-b-30">
                                <div class="col-white">
                                    <div class="slide-heading padding-15">
                                        <i class="fas fa-quote-left h3 text-white-50"></i>
                                    </div>
                                    <p class="m-l-15 m-r-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare
                                        mi. In quis scelerisque dui, eget rhoncus orci</p>
                                    <h5 class="margin-15">- John Deo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content bg-blue m-b-30">
                                <div class="col-white">
                                    <div class="slide-heading padding-15">
                                        <i class="fas fa-quote-left h3 text-white-50"></i>
                                    </div>
                                    <p class="m-l-15 m-r-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare
                                        mi. In quis scelerisque dui, eget rhoncus orci</p>
                                    <h5 class="margin-15">- John Deo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="dashboard_slide2">
                        <div class="item">
                            <div class="carousel-content bg-purple">
                                <div class="col-white">
                                    <div class="slide-heading padding-15">
                                        <i class="fas fa-quote-left h3 text-white-50"></i>
                                    </div>
                                    <p class="m-l-15 m-r-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare
                                        mi. In quis scelerisque dui, eget rhoncus orci</p>
                                    <h5 class="margin-15">- John Deo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content cyan">
                                <div class="col-white">
                                    <div class="slide-heading padding-15">
                                        <i class="fas fa-quote-left h3 text-white-50"></i>
                                    </div>
                                    <p class="m-l-15 m-r-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare
                                        mi. In quis scelerisque dui, eget rhoncus orci</p>
                                    <h5 class="margin-15">- John Deo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content bg-brown">
                                <div class="col-white">
                                    <div class="slide-heading padding-15">
                                        <i class="fas fa-quote-left h3 text-white-50"></i>
                                    </div>
                                    <p class="m-l-15 m-r-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare
                                        mi. In quis scelerisque dui, eget rhoncus orci</p>
                                    <h5 class="margin-15">- John Deo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Activities</h2>
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
                            <div class="sl-item sl-primary">
                                <div class="sl-content">
                                    <small class="text-muted">
                                        <i class="fa fa-user position-left"></i>
                                        5 mins ago</small>
                                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                                </div>
                            </div>
                            <div class="sl-item sl-danger">
                                <div class="sl-content">
                                    <small class="text-muted">
                                        <i class="fa fa-user position-left"></i>
                                        8 mins ago</small>
                                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                                </div>
                            </div>
                            <div class="sl-item sl-success">
                                <div class="sl-content">
                                    <small class="text-muted">
                                        <i class="fa fa-user position-left"></i>
                                        10 mins ago</small>
                                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                                </div>
                            </div>
                            <div class="sl-item sl-warning">
                                <div class="sl-content">
                                    <small class="text-muted">
                                        <i class="fa fa-user position-left"></i>
                                        12 mins ago</small>
                                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                                </div>
                            </div>
                            <div class="sl-item sl-primary">
                                <div class="sl-content">
                                    <small class="text-muted">
                                        <i class="fa fa-user position-left"></i>
                                        5 mins ago</small>
                                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="assets/images/user/user2.jpg" alt="avatar">
                                <div class="chat-about">
                                    <div class="chat-with">Aiden Chavez</div>
                                    <div class="chat-num-messages">2 new messages</div>
                                </div>
                            </div>
                            <div class="chat-history" id="chat-conversation">
                                <ul>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">10:10 AM, Today
                                            </span>
                                            &nbsp; &nbsp;
                                            <span class="message-data-name">Michael</span>
                                            <i class="zmdi zmdi-circle me"></i>
                                        </div>
                                        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name">
                                                <i class="zmdi zmdi-circle online"></i>
                                                Aiden</span>
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>Are we meeting today? Project has been already finished and I have results to
                                                show you.</p>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name">
                                                <i class="zmdi zmdi-circle online"></i>
                                                Aiden</span>
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>Are we meeting today? Project has been already finished and I have results to
                                                show you.</p>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">10:10 AM, Today
                                            </span>
                                            &nbsp; &nbsp;
                                            <span class="message-data-name">Michael</span>
                                            <i class="zmdi zmdi-circle me"></i>
                                        </div>
                                        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Enter text here.." />
                                    </div>
                                </div>
                                <div class="chat-upload">
                                    <a href="#">
                                        <i class="material-icons">attach_file</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">insert_emoticon</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Annual Sales Report</h2>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div id="worldMap2" style="width: 100%; height: 390px; overflow: hidden;"></div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">USA</div>
                                        </div>
                                        <div class="status">
                                            <span>40</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 40%">
                                                <span class="sr-only">40%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">Canada</div>
                                        </div>
                                        <div class="status">
                                            <span>38</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 31%">
                                                <span class="sr-only">38%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">Asia</div>
                                        </div>
                                        <div class="status">
                                            <span>12</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-lightred" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 22%">
                                                <span class="sr-only">12%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">Germany</div>
                                        </div>
                                        <div class="status">
                                            <span>49</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 49%">
                                                <span class="sr-only">49%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">France</div>
                                        </div>
                                        <div class="status">
                                            <span>65</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                <span class="sr-only">65%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">India</div>
                                        </div>
                                        <div class="status">
                                            <span>28</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 28%">
                                                <span class="sr-only">28%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list m-b-10 shadow-style">
                                        <div class="details">
                                            <div class="title">Other</div>
                                        </div>
                                        <div class="status">
                                            <span>16</span>% </div>
                                        <div class="progress-xs not-rounded progress">
                                            <div class="progress-bar progress-bar-hotpink" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 16%">
                                                <span class="sr-only">16%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plugins Js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/map.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/pages/charts/jquery-knob.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <script src="assets/js/pages/medias/carousel.js"></script>

</body>