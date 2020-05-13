<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
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

            <div class="layout-content">
                <div class="layout-content-body" >
                    <div class="row "> 

                        <div class="col-xs-12 col-md-4">  

                            <div class="card p-l-card"  >
                                <div class="card-header">

                                    <strong class="text-center"><center>Company Description</center></strong>
                                </div>
                                <div class="card-body" style="  height: 458px!important;">
                                    <center>
                                        <div class="col-md-12 m-y">
                                            <p class="text-justify" style="line-height: 1.8;">
                                                2020 ජනවාරි මස සිට Covid-19 රෝගය, ලංකාව පුරා ව්‍යාප්ත වීමත් සමග ලංකාවේ සියළු ආකාරයේ රජයේ හා පෞද්ලික අධ්‍යපන පද්ධතිය එක් වරම නවතා දමනු ලැබීය. එම නිසා අසරණ වූ ශිෂ්‍යා නැවත ප්‍රකෘතිමත් කිරීම පිණිස ගුරුවරයා සහ ශිෂ්‍යා නැවත මුණ ගැස්වීමට අප තීරණය කළෙමු.
                                            </p>
                                            <p class="text-justify" style="line-height: 1.8;">
                                                ඒ අනුව අන්තර්ජාලය හා ඩිජිටල් තාක්ෂණය පිළිබද හසල අත්දැකීම් සහිත තාක්ෂණික කණ්ඩායමක සේවාව හා ගුරු ශිෂ්‍ය ප්‍රජාව එකම වෙබ් පිටුවකට ගෙන එනු ලැබූ ලංකාවේ එකම ඩිජිටල් මධ්‍යස්ථානය අප ගොඩනගා ඇත.                                            </p>
                                            <p class="text-justify" style="line-height: 1.8;">
                                                ඩිජිටල් තාක්ෂණය හා අන්තර්ජාලය භාවිත කරමින් ශ්‍රී ලංකාවේ අධ්‍යපනය වඩාත් ප්‍රතිඵලදායක ලෙස සිසුන් වෙත ලගා කරවීම සදහාත් ගුරුවරයා සහ ශිෂ්‍යා කාර්යක්ෂමව බැද තැබීම සදහාත් ඩිජිටල් පාලමක් වීම පිණිස ඩිජිටල් තාක්ෂණය ප්‍රචලිත කරවීම උදෙසා කැප වී සිටිමු.                                            </p>

                                        </div>  
                                    </center>

                                </div>
                            </div> 
                        </div>

                        <div class="col-xs-12 col-md-8"> 
                            <iframe id="existing-iframe-example "   class="video-res" height="510" src="<?php echo $PAGES->title ?>" allow="autoplay" allowfullscreen></iframe>
<!--                            <iframe id="existing-iframe-example" width="92%" height="510"  src="https://www.youtube.com/embed/40wafTmaMro?enablejsapi=1autoplay=1"    frameborder="0" ></iframe>-->

                        </div>
                    </div>
                </div> 

                <!--                <div class="row" >
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
                
                                </div>-->

                <?php include './footer.php'; ?>

            </div>




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