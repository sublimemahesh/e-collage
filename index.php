<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$PAGES = new Page(1);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SSM net - Index   </title>
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

            <?php include './disable-navigation.php'; ?>

            <div class="layout-content">
                <div class="layout-content-body" style="margin-top: 2%; padding: 0px">
                    <div class="row "> 

                        <div class="col-xs-12 col-md-3">  

                            <div class="card p-l-card"  >
                                <div class="card-header">

                                    <strong>Company Description</strong>
                                </div>
                                <div class="card-body">
                                    <center>
                                        <div class="col-md-12 m-y">
                                            <p class="text-justify">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentiall
                                            </p>
                                            <p class="text-justify">
                                                Lorem Ipsum is simply dummy text of  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentiall
                                            </p>
                                            <ul class="list-group list-group-divided">

                                                <li class="list-group-item" style=" ">
                                                    Lorem Ipsum is simply dummy    
                                                </li>
                                                <li class="list-group-item">
                                                    Lorem Ipsum is simply dummy    
                                                </li>
                                                <li class="list-group-item">
                                                    Lorem Ipsum is simply dummy    
                                                </li>

                                            </ul>
                                        </div>  
                                    </center>

                                </div>
                            </div> 
                        </div>

                        <div class="col-xs-12 col-md-9"> 
                            <iframe id="existing-iframe-example "   class="video-res" height="510" src="<?php echo $PAGES->title ?>" allow="autoplay" allowfullscreen></iframe>
<!--                            <iframe id="existing-iframe-example" width="92%" height="510"  src="https://www.youtube.com/embed/40wafTmaMro?enablejsapi=1autoplay=1"    frameborder="0" ></iframe>-->

                        </div>
                    </div>
                </div> 

                <div class="row" >
                    <div class="col-xs-6 col-md-5"></div>
                    <div class="col-xs-12 col-md-4" style="margin-top: 2% ;margin-bottom: 28px;">
                        <div class="">
                            <div class="card-body">
                                <center> 
                                    <div class="form-group "  style="margin-top: 2%;" id="btn-disply" > 
                                        <a href="lesson.php">  
                                            <button class=" btn btn-outline-primary btn-block btn-next "   type="button" id="create" style="width: 80%;font-size: 16px" >Start Your Lessons</button>
                                        </a>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3"></div>

                </div>

                <?php
                if (empty($STUDENT->nic_back)) {
                    ?>
                    <div class="layout-footer ">  
                        <div class="pull-right" data-toggle="match-height">
                            <h4 style="margin-right: 15px; "> 
                                <a class="label label-success" href="verify-id-card.php" >
                                    <span>Please Verify Your ID Card from here.! </span>
                                </a>
                            </h4> 
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>

            <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">


            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script src="js/vendor.min.js"></script>
            <script src="js/elephant.min.js"></script>
            <script src="js/application.min.js"></script>
            <script src="js/sweetalert.min.js" type="text/javascript"></script>
            <script src="ajax/js/check-login.js" type="text/javascript"></script>


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