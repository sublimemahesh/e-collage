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
        <meta property="og:type" content="website"> >
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
                                 <img id="loading" src="https://www.vedantalimited.com/SiteAssets/Images/loading.gif" style=" display: none;position: absolute;margin-top: 20%;margin-left: 37%;z-index: 9999;"/>

                                <label class="control-label">Share what you are thinking here...</label>
                                <textarea class="form-control post-description control-label" placeholder=""  name="description" style="border: none;margin-top: -15px;height: 36px;margin-bottom: 5px;"></textarea>
                                <div class="flipScrollableArea hidden  " id="image-list"  >
                                    <div class="flipScrollableAreaWrap">

                                        <div class="flipScrollableAreaBody"  >
                                            <div class="flipScrollableAreaContent">
                                                <div class="flipScrollableAreaContent1"> 
                                                    <span class="_uploadouterbox">
                                                        <div class="_m _6a">
                                                            <a class="_uploadbox" rel="ignore">
                                                                <div class="_upload"> 
                                                                    <input multiple="" name="upload-other-images" title="Choose a file to upload" data-test  display="inline-block" type="file" class="_uploadinput _outlinenone" id="add-more-photos">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </span>
                                                </div>
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
                                            <input type="file" id="upload_first_image" name="post-image"/>  <span class="icon icon-camera icon-fw"></span>
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
                                        <input type="submit"class="btn btn-primary btn-block pull-right share-post"  disabled="" style="width: 60px"  name="save-post" value="POST">
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>

            <?php
            $posts = Post::getPostsByStudent($_SESSION['id']);
            if (count($posts) > 0) {
                foreach ($posts as $key => $post) {
                    $photos = PostImage::getPhotosByPostId($post['id']);
                    ?> 

                    <div class="profile-body">  

                        <div class="col-md-8" style="margin-left: 120px">
                            <div class="post" style="padding-top: 15px;">
                                <div class="post-header">
                                    <div class="post-author">
                                        <div class="post-author-avatar">
                                            <?php
                                            if (empty($STUDENT->image_name)) {
                                                ?>
                                                <input type="image" src="img/0180441436.jpg" width="48" height="48"  class="append_img profile-avetar-img " />

                                            <?php } else { ?>
                                                <img   class="profile-avetar-img  append_img  " width="48" height="48"  src="upload/student/profile/<?php echo $STUDENT->image_name ?>"  >  
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
                                    <div class="post-body">
                                        <div class="post-content">
                                            <p> <?php echo $post['description'] ?>
                                            </p>
                                        </div>
                                        <div class="post-img">
                                            <a href="#">
                                                <div id="gallery<?php echo $post['id'] ?>"></div>
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
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>  
                    <?php
                }
            }
            ?> 
        </div>
    </div>

    <!--check Login-->

    <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">

    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/profile.min.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/heartcode-canvasloader.js" type="text/javascript"></script>
    <script src="js/images-grid.js" type="text/javascript"></script>

    <script src="ajax/js/post-photo.js" type="text/javascript"></script>
    <script src="ajax/js/student-post.js" type="text/javascript"></script>


</body>

</html>