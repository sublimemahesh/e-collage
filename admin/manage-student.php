<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Manage Student</title>
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
                        <?php include './head-nav-right.php';?>
                        <div class="title-bar">
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
            <?php
            include 'navigation.php';
            ?>
            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
<!--                            <p><small>The tables presented below use <a href="https://datatables.net/extensions/colreorder/" target="_blank">DataTables ColReorder Extension</a>, the styling of which is completely rewritten in SASS, without modifying however anything in JavaScript.</small></p>-->
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Manage Students</strong>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Seq.</th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Email</th>
                                                <th>User Name</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Seq.</th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Email</th>
                                                <th>User name</th>
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>19ST0001</td>
                                                <td>P.L. Udani</td>
                                                <td>udani00@gmail.com</td>
                                                <td>pludani</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>19ST0002</td>
                                                <td>L.G.N. Kaushalya</td>
                                                <td>kaushalya@gmail.com</td>
                                                <td>lgnkaushalya</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>19ST0003</td>
                                                <td>Y.M Lakmal</td>
                                                <td>lakmal@gmail.com</td>
                                                <td>ymlakmal</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>19ST0004</td>
                                                <td>W.A. Kanchana</td>
                                                <td>kanchanaWA@gmail.com</td>
                                                <td>wakanchana</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>19ST0005</td>
                                                <td>K.C.C. Gamage</td>
                                                <td>gamage99@gmail.com</td>
                                                <td>gamage</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>19ST0006</td>
                                                <td>N.C.S. Basnayake</td>
                                                <td>nadeebasnayake@gmail.com</td>
                                                <td>basnayakenadee</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>19ST0007</td>
                                                <td>N.G. Samanthika</td>
                                                <td>gayanisamanthika@gmail.com</td>
                                                <td>samanthika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>19ST0008</td>
                                                <td>P.L.D. Wijesinghe</td>
                                                <td>deshan94@gmail.com</td>
                                                <td>desh</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>19ST0009</td>
                                                <td>H.G.S. Madushika</td>
                                                <td>madushika33@gmail.com</td>
                                                <td>hgsmadu</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>19ST0010</td>
                                                <td>K.M. Perera</td>
                                                <td>kusalperera@gmail.com</td>
                                                <td>kusal</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>19ST0011</td>
                                                <td>T.M Edirisinghe</td>
                                                <td>edirisinghe11@gmail.com</td>
                                                <td>tmedirisighe</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>19ST0012</td>
                                                <td>K.H.U. Prithika</td>
                                                <td>khu.prithika@gmail.com</td>
                                                <td>prithika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>19ST0013</td>
                                                <td>C.N.E. Kodithuwakku</td>
                                                <td>kodithuwakku@gmail.com</td>
                                                <td>kodithuwakku</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>19ST0014</td>
                                                <td>N.T.T. Madushika</td>
                                                <td>mail.madu@gmail.com</td>
                                                <td>madushika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>19ST0015</td>
                                                <td>M.A. Madusanjaya</td>
                                                <td>madusanjayaMA@gmail.com</td>
                                                <td>madusanjaya</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>19ST0016</td>
                                                <td>G.G.C. Nayananjali</td>
                                                <td>nayananjali50@gmail.com</td>
                                                <td>nayananjali</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>19ST0017</td>
                                                <td>K.P. Wijewardhana</td>
                                                <td>pathumwijewardhana@gmail.com</td>
                                                <td>pathum</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>19ST0018</td>
                                                <td>M.L.T. Vindya</td>
                                                <td>vindyamail@gmail.com</td>
                                                <td>vindi</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>19ST0019</td>
                                                <td>G. Samith</td>
                                                <td>gayansamith@gmail.com</td>
                                                <td>samith</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>19ST0020</td>
                                                <td>M.K.W. Lakmal</td>
                                                <td>Lakmalwaruna@gmail.com</td>
                                                <td>waruna</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>19ST0021</td>
                                                <td>N.W. Prabhashani</td>
                                                <td>25prabhashani@gmail.com</td>
                                                <td>nwprabha</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>19ST0022</td>
                                                <td>S.K.S. Dewapriya</td>
                                                <td>dewapriyasaveen@gmail.com</td>
                                                <td>sksaveen</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>19ST0023</td>
                                                <td>S.S. Hegoda</td>
                                                <td>ShegodaS@gmail.com</td>
                                                <td>sshegoda</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>19ST0024</td>
                                                <td>H.K.R.S. Haloluwa</td>
                                                <td>ridmishanika202@gmail.com</td>
                                                <td>shanika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>19ST0025</td>
                                                <td>E.W.H. Hansika</td>
                                                <td>hansi.mail@gmail.com</td>
                                                <td>hiruhansi</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>19ST0026</td>
                                                <td>S.R.Sandamali</td>
                                                <td>sandamaliSR@gmail.com</td>
                                                <td>sandamali</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>19ST0027</td>
                                                <td>A.G.H. Bhagya</td>
                                                <td>bhagyaharshi@gmail.com</td>
                                                <td>bhagya</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>19ST0028</td>
                                                <td>R.J. Munasinghe</td>
                                                <td>jayanimunasinghe@gmail.com</td>
                                                <td>jayani</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>19ST0029</td>
                                                <td>R.J. Munasinghe</td>
                                                <td>jayanimunasinghe@gmail.com</td>
                                                <td>jayani</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>19ST0030</td>
                                                <td>W.P. Lakshan</td>
                                                <td>pahanlakshan119@gmail.com</td>
                                                <td>lakshan</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>19ST0031</td>
                                                <td>N.T.M Dilmini</td>
                                                <td>madudilmini@gmail.com</td>
                                                <td>dilmini</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>19ST0031</td>
                                                <td>G.H.S. Sampath</td>
                                                <td>sumudusampath@gmail.com</td>
                                                <td>sampath</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>19ST0033</td>
                                                <td>P.M.M. Wickramasekara</td>
                                                <td>madushikawickramasekara@gmail.com</td>
                                                <td>madushika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>19ST0034</td>
                                                <td>M.K.S.N. Prasadika</td>
                                                <td>prasadi1997@gmail.com</td>
                                                <td>prasadika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>19ST0035</td>
                                                <td>T.K.S. Silva</td>
                                                <td>sanjulakasun44@gmail.com</td>
                                                <td>sanjula</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>19ST0036</td>
                                                <td>N.W.W.G.D. Madushani</td>
                                                <td>dinumadushani@gmail.com</td>
                                                <td>madushani</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td>19ST0037</td>
                                                <td>G.R. Lakshan</td>
                                                <td>rayanlakshan505@gmail.com</td>
                                                <td>shanrayan</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>19ST0038</td>
                                                <td>N.S.H. Witanachchi</td>
                                                <td>hiruniwitanachchi@gmail.com</td>
                                                <td>hiruni</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39</td>
                                                <td>19ST0039</td>
                                                <td>A.S. Gurusinghe</td>
                                                <td>ashanishamika@gmail.com</td>
                                                <td>shamika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>19ST0040</td>
                                                <td>W.G.D.C.M. Kumarasinhe</td>
                                                <td>chathumahesh@gmail.com</td>
                                                <td>chathuranga</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>19ST0041</td>
                                                <td>L.G.P Uththara</td>
                                                <td>PiumiUththara@gmail.com</td>
                                                <td>uththara</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>19ST0042</td>
                                                <td>E.K. Rathnayake</td>
                                                <td>erandakasun90@gmail.com</td>
                                                <td>eranda</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>19ST0043</td>
                                                <td>N.K. Dissanayake</td>
                                                <td>kanchanadissanayake@gmail.com</td>
                                                <td>kanchana</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>19ST0044</td>
                                                <td>P.L.Mayuri</td>
                                                <td>mailmayuri@gmail.com</td>
                                                <td>mayuri</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>45</td>
                                                <td>19ST0045</td>
                                                <td>P.L.Mayuri</td>
                                                <td>mailmayuri@gmail.com</td>
                                                <td>mayuri</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46</td>
                                                <td>19ST0046</td>
                                                <td>T.D.T. Saumya</td>
                                                <td>saumyaTDT@gmail.com</td>
                                                <td>saumya</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>47</td>
                                                <td>19ST0047</td>
                                                <td>J.C. Samankumari</td>
                                                <td>jchathukumari@gmail.com</td>
                                                <td>samankumari</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48</td>
                                                <td>19ST0048</td>
                                                <td>D.M.G. Nalika</td>
                                                <td>nalika1122@gmail.com</td>
                                                <td>nalika</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49</td>
                                                <td>19ST0049</td>
                                                <td>H.K.N Sandamali</td>
                                                <td>nisansalamali@gmail.com</td>
                                                <td>sandamali</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50</td>
                                                <td>19ST0050</td>
                                                <td>A.T. Madugalla</td>
                                                <td>thejanmadugalla@gmail.com</td>
                                                <td>thejan</td>
                                                <td> 
                                                    <a href="#" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-pages btn btn-sm btn-danger" data-id=""><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |   
                                                    <a href="view-student.php" class="op-link btn btn-sm btn-primary"><i class="icon icon-eye"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
                </div>
            </div>-->
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-83990101-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>