<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tabs &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
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
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/demo.min.css">
    </head>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row">
                        <div class="col-md-12"style="margin-top: 15px;">
                            <div class="col-md-12">
                                <h3 style="text-align: center">   Manage Class </h3>
                            </div>
                            <div class="panel m-b-lg">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">Class Room</a></li>
                                    <li><a href="#past_lesson" data-toggle="tab">Pass Lesson</a></li>
                                    <li><a href="#mcq_papers" data-toggle="tab">MCQ Papers</a></li>
                                    <li><a href="#tutorials" data-toggle="tab">Tutorials</a></li>
                                    <li><a href="#assignment" data-toggle="tab">Assignment</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home">
                                        <div class="col-lg-12 col-sm-12 grid-margin " style="margin-top:30px">
                                            <div class="col-md-12">
                                                <div class="box-shadow">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="past_lesson">
                                        <div class="col-lg-12 col-sm-12 grid-margin " style="margin-top:30px">
                                            <h4 class="card-title">A/L CHEMISTRY  2020  / Enroll ID: 35</h4>
                                            <div class="card">
                                                <div class="box-shadow">
                                                    <div class="card-header">
                                                        <h5>
                                                            <a href="#" >
                                                                Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                                <span class="fas-fa fa-chevron-down"> 
                                                                </span> 
                                                            </a>
                                                        </h5>
                                                        <hr>
                                                        <div>
                                                            <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="tab-pane fade" id="mcq_papers">
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down">
                                                            </span>
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <div class="file">
                                                        <a href="#" class="file-link" title="file-name.pdf">
                                                            <div class="file-thumbnail file-thumbnail-pdf">

                                                            </div>
                                                            <div class="file-info">
                                                                <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>  
                                                            </div>

                                                        </a>

                                                        <button class="file-delete-btn delete"title="Delete" type="button">
                                                            <span class="icon icon-remove"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="tab-pane fade" id="tutorials">
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down">
                                                            </span>
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <div class="file">
                                                        <a href="#" class="file-link" title="file-name.pdf">
                                                            <div class="file-thumbnail file-thumbnail-pdf">

                                                            </div>
                                                            <div class="file-info">
                                                                <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>  
                                                            </div>

                                                        </a>

                                                        <button class="file-delete-btn delete"title="Delete" type="button">
                                                            <span class="icon icon-remove"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down">
                                                            </span>
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <div class="file">
                                                        <a href="#" class="file-link" title="file-name.pdf">
                                                            <div class="file-thumbnail file-thumbnail-pdf">

                                                            </div>
                                                            <div class="file-info">
                                                                <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>  
                                                            </div>

                                                        </a>

                                                        <button class="file-delete-btn delete"title="Delete" type="button">
                                                            <span class="icon icon-remove"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="assignment">
                                        <div class="col-lg-4 col-sm-12 grid-margin ">
                                            <div class="card-header">

                                                <div class="box-shadow">

                                                    <div class="text-center">
                                                        <h4 class="">පළමු ප්‍රශ්නය - මෙම ප්‍රශ්නය ඩවුන්ලෝඩ් කරගෙන, හෙට පන්තියට පලමු නියමිත පරිදි පිළිතුරු සපයාගෙන සූදානම් කර තබාගන්න.</h4>
                                                        <p>2020-05-16</p>

                                                        <a href="" target="blank" class="btn btn-success">  VIEW ASSIGNMENT </a>
                                                        <br/><br/>
                                                        <p class="label label-danger">Not Submitted / +6 Days Late</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 grid-margin ">
                                            <div class="card-header">
                                                <div class="box-shadow">

                                                    <div class="text-center">
                                                        <h4 class="">පළමු ප්‍රශ්නය - මෙම ප්‍රශ්නය ඩවුන්ලෝඩ් කරගෙන, හෙට පන්තියට පලමු නියමිත පරිදි පිළිතුරු සපයාගෙන සූදානම් කර තබාගන්න.</h4>
                                                        <p>2020-05-16</p>

                                                        <a href="" target="blank" class="btn btn-success">  VIEW ASSIGNMENT </a>
                                                        <br/><br/>
                                                        <p class="label label-danger">Not Submitted / +6 Days Late</p>
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
            </div>
        </div>
        <div class="layout-footer">
            <div class="layout-footer-body">
                <small class="version">Version 1.4.0</small>
                <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
            </div>
        </div>
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

<!-- Mirrored from demo.madebytilde.com/elephant-v1.4.0/theme-5/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2019 07:44:47 GMT -->
</html>