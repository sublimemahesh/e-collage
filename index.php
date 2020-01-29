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
            <?php include './disable-navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row gutter-xs panel"> 
                        <div class="col-xs-12 col-md-12">
                            <div class="card">
                                <iframe id="existing-iframe-example" width="100%" height="610"  src="https://www.youtube.com/embed/OgVfft035Z8?enablejsapi=1"    frameborder="0" ></iframe>
                            </div>
                        </div>
                    </div>
                </div> 


                <div class="layout-footer">
                    <div class="layout-footer-body">
                        <small class="version">Version 1.4.0</small>
                        <small class="copyright"><?php echo date('Y') ?>&copy;  <a href="#">Synotect Private Limited.</a></small>
                    </div>
                </div>
            </div>

            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script src="js/vendor.min.js"></script>
            <script src="js/elephant.min.js"></script>
            <script src="js/application.min.js"></script>
            <script src="js/sweetalert.min.js" type="text/javascript"></script>
            <script src="https://youtu.be/UTZjhCH80Zg/player_api"></script>


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

                function onPlayerStateChange(event) {
                    if (event.data === 0) {
                        swal({
                            title: "Congratulation.!",
                            text: "Now you selected beginner level.",
                            type: 'success',
                            showCancelButton: false,
                            confirmButtonColor: "rgb(240, 169, 0)",
                            confirmButtonText: "Continue.",
                        }, function () {
                            window.location = "lesson.php";
                        });
                    }
                }

            </script>

    </body>
</html>