<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$PAGES = new Page(1);
?> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Index   </title>
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website"> >

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

        <div class="layout-main parallax">

            <?php include './navigation.php'; ?>

            <div class="layout-content" style="padding: 10px;">


                <div class="row  ">  
                    <div class="layout-content-body">
                        <div class="row gutter-xs">
                            <div class="col-md-6 col-lg-3 col-lg-push-0">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-primary-inverse circle sq-48">
                                                    <span class="icon icon-works">&#80;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Students</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l">10</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-lg-push-3">
                                <div class="card bg-danger">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-danger-inverse circle sq-48">
                                                    <span class="icon icon-works">&#90;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Class</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l">14</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-lg-pull-3">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-primary-inverse circle sq-48">
                                                    <span class="icon icon-works">&#105;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Schedule Class</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l">13</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-lg-pull-0">
                                <div class="card bg-danger">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-danger-inverse circle sq-48">
                                                    <span class="icon icon-works">&#36;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Manage Profile</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l">15</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  ">   
                    <div class="col-md-4 col-md-push-4">
                        <div class="card">
                            <div class="card-header"> 
                                <strong>Manage Students</strong>
                                <span aria-hidden="true"> · </span>
                                <a href="#">View All</a>
                            </div>
                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
                                            </a>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h5 class="media-heading">
                                                <a href="#">Harry Jones</a>
                                                <small>5 min ago</small>
                                            </h5>
                                            <small>Published </small>
                                        </div>

                                    </li>
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
                                            </a>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h5 class="media-heading">
                                                <a href="#">Harry Jones</a>
                                                <small>5 min ago</small>
                                            </h5>
                                            <small>Published </small>
                                        </div>

                                    </li>
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
                                            </a>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h5 class="media-heading">
                                                <a href="#">Harry Jones</a>
                                                <small>5 min ago</small>
                                            </h5>
                                            <small>Published </small>
                                        </div>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-push-4">
                        <div class="card">
                            <div class="card-header"> 
                                <strong>Schedule Class</strong>
                                <span aria-hidden="true"> · </span>
                                <a href="#">View full report</a>
                            </div>
                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">

                                            </a>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h5 class="media-heading">
                                                <a href="#">Harry Jones</a>
                                                <small>5 min ago</small>
                                            </h5>
                                            <small>Published </small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
                                            </a>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h5 class="media-heading">
                                                <a href="#">Harry Jones</a>
                                                <small>5 min ago</small>
                                            </h5>
                                            <small>Published </small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
                                            </a>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h5 class="media-heading">
                                                <a href="#">Harry Jones</a>
                                                <small>5 min ago</small>
                                            </h5>
                                            <small>Published </small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-8">
                        <div class="card">
                            <div class="card-header">

                                <strong>New Class</strong>
                                <span aria-hidden="true"> · </span>
                                <a href="#">View full    </a>
                            </div>
                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-middle media-left">
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
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
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
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
                                            <a href="#">
                                                <img class="img-circle" width="48" height="48" src="img/member.jpg" alt="Raja Elephant T-shirt">
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
    </div>

    <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">


    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>



    <script type="text/javascript">
        var tag = document.createElement('script');
        tag.id = 'iframe-demo';
        tag.src = 'https://www.youtube.com/iframe_api';
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('existing-iframe-example', {
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }
        function onPlayerReady(event) {
            document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
        }

        //                function onPlayerStateChange(event) {
        //                    if (event.data === 0) {
        //                        $('#btn-disply-none').hide();
        //                        $('#btn-disply').show();
        //
        //                    }
        //                }

    </script>

</body>
</html>