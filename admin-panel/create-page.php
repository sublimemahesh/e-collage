<!DOCTYPE html>
<?php
include '../class/include.php';
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Manage Active Student</title>

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-iconaa.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/demo.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="layout layout-header-fixed">
        <div class="layout-header">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-brand-center" href="dashboard.php">
                        <img class="navbar-brand-logo" src="./../img/logo.png" alt="Elephant">
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
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="icon-with-child hidden-xs">
                                        <span class="icon icon-bell-o icon-lg"></span>
                                        <span class="badge badge-primary badge-above right">7</span>
                                    </span>
                                    <span class="visible-xs-block">
                                        <span class="icon icon-bell icon-lg icon-fw"></span>
                                        <span class="badge badge-primary pull-right">7</span>
                                        Notifications
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                    <div class="dropdown-header">
                                        <a class="dropdown-link" href="#">Mark all as read</a>
                                        <h5 class="dropdown-heading">Recent Notifications</h5>
                                    </div>
                                    <div class="dropdown-body">
                                        <div class="list-group list-group-divided custom-scrollbar">
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">35 min</small>
                                                        <h5 class="notification-heading">Update Status</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <span class="icon icon-flag bg-success circle sq-40"></span>
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">43 min</small>
                                                        <h5 class="notification-heading">Account Contact Change</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">1 hr</small>
                                                        <h5 class="notification-heading">Failed Login Warning</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <img class="circle" width="40" height="40" src="img/0310728269.jpg" alt="Daniel Taylor">
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">4 hr</small>
                                                        <h5 class="notification-heading">Daniel Taylor</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <img class="circle" width="40" height="40" src="img/0872116906.jpg" alt="Emma Lewis">
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">8 hr</small>
                                                        <h5 class="notification-heading">Emma Lewis</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <img class="circle" width="40" height="40" src="img/0601274412.jpg" alt="Sophia Evans">
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">8 hr</small>
                                                        <h5 class="notification-heading">Sophia Evans</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <div class="notification">
                                                    <div class="notification-media">
                                                        <img class="circle" width="40" height="40" src="img/0180441436.jpg" alt="Teddy Wilson">
                                                    </div>
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp">9 hr</small>
                                                        <h5 class="notification-heading">Teddy Wilson</h5>
                                                        <p class="notification-text">
                                                            <small class="truncate">Published a new post: "Everything you know about Bootstrap is wrong".</small>
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
                                    <img class="circle" style="margin-right: 10px;" width="36" height="36" src="../img/0180441436.jpg" alt="Admin"> 
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="log-out.php">Sign out</a></li>
                                </ul>
                            </li>
                            <li class="visible-xs-block">
                                <a href="contacts.html">
                                    <span class="icon icon-users icon-lg icon-fw"></span>
                                    Contacts
                                </a>
                            </li>
                            <li class="visible-xs-block">
                                <a href="profile.html">
                                    <span class="icon icon-user icon-lg icon-fw"></span>
                                    Profile
                                </a>
                            </li>
                            <li class="visible-xs-block">
                                <a href="login-1.html">
                                    <span class="icon icon-power-off icon-lg icon-fw"></span>
                                    Sign out
                                </a>
                            </li>
                        </ul>                        <div class="title-bar">
                            <h1 class="title-bar-title">
                                <span class="d-ib">Student
                                    <small>Details</small>
                                </span>
                                <span class="d-ib">
                                    <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                                        <span class="sr-only">Add to shortcut list</span>
                                    </a>
                                </span>
                            </h1>
                            <p class="title-bar-description">
                                <small>You can personalize your dashboard by using <a href="widgets.html">widgets</a>.</small>
                            </p>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layout-main">


            <div class="layout-sidebar">
                <div class="layout-sidebar-backdrop"></div>
                <div class="layout-sidebar-body">
                    <div class="custom-scrollbar">
                        <nav id="sidenav" class="sidenav-collapse collapse">
                            <ul class="sidenav level-1">


                                <li class="sidenav-item has-subnav" style="margin-top: 20px">
                                    <a href="#" aria-haspopup="true">
                                        <span class="sidenav-icon icon icon-works">p</span>
                                        <span class="sidenav-label">Student</span>
                                    </a>
                                    <ul class="sidenav level-2 collapse">
                                        <li class="sidenav-heading">Students</li>
                                        <li><a href="active-student.php">Active Student</a></li>
                                        <li><a href="inactive-student.php">InActive Student</a></li>
                                        <li><a href="manage-all-students.php">Manage All Student</a></li>
                                    </ul>
                                </li>
                                <li class="sidenav-item has-subnav" style="margin-top: 20px">
                                    <a href="#" aria-haspopup="true">
                                        <span class="sidenav-icon icon icon-works">a</span>
                                        <span class="sidenav-label">Pages</span>
                                    </a>
                                    <ul class="sidenav level-2 collapse"> 
                                        <li><a href="create-page.php">Video URL</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> 

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="row">  
                               
                                <div class="col-md-12"> 
                                     <?php
                                if (isset($_GET['message'])) {

                                    $MESSAGE = New Message($_GET['message']);
                                    ?>
                                    <div class="alert alert-<?php echo $MESSAGE->status; ?>" role = "alert">
                                        <?php echo $MESSAGE->description; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                                    <div class="card">
                                        <div class="card-header"> 
                                            <strong>Create Page</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card "  method="post" style="padding: 50px"  action="ajax/post-and-get/pages.php">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">URL: </label>
                                                <div class="col-sm-11">
                                                    <input id="title" name="title" class="form-control" type="text"   >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3">  
                                                    <input type="submit" class="btn btn-primary btn-block"  name="create"  value="create" >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <strong>Manage Page</strong>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th> 
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $PAGES = new Page(NULL);
                                        foreach ($PAGES->all() as $key => $pages) {
                                            $key++;
                                            ?>
                                            <tr id="div<?php echo $pages['id'] ?>">
                                                <td><?php echo $key ?></td>
                                                <td><?php echo $pages['title'] ?></td>

                                                <td> 
                                                    <a href="edit-page.php?id=<?php echo $pages['id'] ?>" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-student btn btn-sm btn-danger" data-id="<?php echo $pages['id'] ?>"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> 

                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>

                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>        
        <script src="delete/js/student.js" type="text/javascript"></script>
    </body>
</html>