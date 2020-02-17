<?php
include_once(dirname(__FILE__) . '/class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile &middot;   </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../../elephant.html">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@madebytilde">
        <meta name="twitter:creator" content="@madebytilde">
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
        <link rel="stylesheet" href="css/profile.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/images-grid.css" rel="stylesheet" type="text/css"/>

    </head>
    <style>

        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .flipScrollableArea {

            overflow: hidden;
            position: relative;
            width: 100%;
        }
        .flipScrollableAreaWrap, .native .flipScrollableAreaWrap:active {

            overflow-y: hidden;

            position: relative;

        }
        .flipScrollableAreaBody {
            position: relative;
            display: inline-block;
        }
        .flipScrollableAreaContent {
            white-space: nowrap;
        }
        ._uploadedimagesbox, ._uploadedimagesbox_edit {
            display: inline-block;
            vertical-align: top;
        }
        ._uploadbox {
            border: 2px dashed 
                #dddfe2;
            border-radius: 2px;
            box-sizing: border-box;
            display: inline-block;
            height: 100px;
            margin-right: 5px;
            min-width: 100px;
            position: relative;
            width: auto;
            background-image: url(img/EWLe5fNY_Iz.png);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 20px;
            float: right;
        }

    </style>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './disable-navigation.php'; ?>

            <div class="profile-body"> 
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div class="post" style="padding-top: 15px;">
                        <div class="post-header">
                            <div class="post-author">
                                <div class="post-author-avatar">

                                    <?php
                                    if (empty($STUDENT->image_name)) {
                                        ?>
                                        <input type="image" src="img/0180441436.jpg" width="48" height="48"  class="append_img profile-avetar-img " /><i class="fa fa-camera fa-lg fa-color "></i> 

                                    <?php } else { ?>
                                        <img   class="profile-avetar-img  append_img  " width="48" height="48"  src="upload/student/profile/<?php echo $STUDENT->image_name ?>"  >  <i class="fa fa-camera fa-lg fa-color "></i> 
                                    <?php } ?>

                                </div>
                                <div class="post-author-info">
                                    <span class="post-author-name">
                                        <a href="#"><?php echo $STUDENT->full_name ?></a>
                                    </span> 
                                    <span class="post-timestamp">41 minutes ago</span>
                                </div>
                            </div>
                            <div class="post-dropdown">
                                <div class="dropdown">
                                    <a class="dropdown-toggler" href="#" data-toggle="dropdown" aria-haspopup="true" role="button">
                                        <span class="icon icon-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Mute</a></li>
                                        <li><a href="#">Block</a></li>
                                        <li><a href="#">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="post-body"> 
                            <form action="ajax/post-and-get/post.php" method="post" id="post-form">
                                <label class="control-label">Share what you are thinking here...</label>
                                <textarea class="form-control post-description control-label" placeholder=""  name="description" style="border: none;margin-top: -15px;height: 36px;margin-bottom: 5px;"></textarea>
                                <div class="flipScrollableArea hidden  " id="image-list"  >
                                    <div class="flipScrollableAreaWrap">

                                        <div class="flipScrollableAreaBody"  >
                                            <div class="flipScrollableAreaContent">
                                                <div class="flipScrollableAreaContent1">
                                                </div>
                                                <span class="_uploadouterbox">
                                                    <div class="_m _6a">
                                                        <a class="_uploadbox" rel="ignore">
                                                            <div class="_upload"> 
                                                                <input multiple="" name="upload-other-images" title="Choose a file to upload" data-testid="add-more-photos" display="inline-block" type="file" class="_uploadinput _outlinenone" id="add-more-photos">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </span>
                                                <span class="_uploadloaderbox abc">
                                                    <div class="_m _6a">
                                                        <a class="_uploadbox" rel="ignore">
                                                            <div class="_upload">

                                                            </div>
                                                        </a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flipScrollableAreaTrack invisible_elem" style="opacity: 0;">
                                        <div class="flipScrollableAreaGripper hidden_elem"></div>
                                    </div>
                                </div>

                                <div class="post-img">
                                    <a href="#">
                                        <label class="custom-file-upload">
                                            <input type="file" id="upload_first_image" name="post-image"/>     Image
                                        </label>
                                    </a>
                                    <input type="hidden" id="upload-post-image" name="upload-post-image" value="upload-post-image">

                                </div>



                                <div class="post-actions">
                                    <a class="post-action" href="#">
                                        <span class="icon icon-thumbs-up icon-fw"></span>
                                        Like
                                    </a>
                                    <a class="post-action" href="#">
                                        <span class="icon icon-share icon-fw"></span>
                                        Share
                                    </a>
                                    <div class="post-summary">
                                        <input type="hidden" name="student" value="<?php echo $_SESSION['id'] ?>" >
                                        <input type="submit"class="btn btn-primary btn-block pull-right"  style="width: 60px"  name="save-post" value="POST">

                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
                <?php
                $posts = Post::getPostsByStudent($_SESSION['id'] );
                if (count($posts) > 0) {
                    foreach ($posts as $key => $post) {
                        $photos = PostImage::getPhotosByPostId($post['id']);
                        
                        ?>

                <li class="feed-item">
                    <div class="post">
                        <div class="post-header">
                            <div class="post-author">
                                <div class="post-author-avatar">
                                    <img class="img-circle" width="48" height="48" src="img/2832982242.jpg" alt="Agatha Ford">
                                </div>
                                <div class="post-author-info">
                                    <span class="post-author-name">
                                        <a href="#">Agatha Ford</a>
                                    </span>
                                    <span class="post-author-action">commented on this</span>
                                    <span class="post-timestamp">41 minutes ago</span>
                                </div>
                            </div>
                            <div class="post-dropdown">
                                <div class="dropdown">
                                    <a class="dropdown-toggler" href="#" data-toggle="dropdown" aria-haspopup="true" role="button">
                                        <span class="icon icon-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Mute</a></li>
                                        <li><a href="#">Block</a></li>
                                        <li><a href="#">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <div class="post-content">
                                <p>Trying to understand why he did what he did...
                                    <small><a href="#" target="_blank">#JohnMiller</a></small>
                                </p>
                            </div>
                            <div class="post-img">
                                <a href="#">
                                    <img class="img-responsive" src="img/5037874725.jpg" alt="Me and my monkey">
                                </a>
                            </div>
                            <div class="post-actions">
                                <a class="post-action" href="#">
                                    <span class="icon icon-thumbs-up icon-fw"></span>
                                    Like
                                </a>
                                <a class="post-action" href="#">
                                    <span class="icon icon-share icon-fw"></span>
                                    Share
                                </a>
                                <div class="post-summary">
                                    <small class="truncate">
                                        <a class="link-muted" href="#">Likes: Ruby Dixon, Agatha Ford and 2.2k others</a>
                                    </small>
                                </div>
                            </div>
                        </div> 
                    </div>
                </li> 
                    <?php }}?>
                </ol>
            </div>
        </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/profile.min.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/heartcode-canvasloader.js" type="text/javascript"></script>

    <script src="ajax/js/student-post.js" type="text/javascript"></script>
</body>

</html>