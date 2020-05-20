<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Ecollage.lk | Teachers</title>
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
        <link rel="stylesheet" href="assets/libs/slick/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
    </head>

    <body id="teachers" class="page">

        <?php include './header.php'; ?>

        <main>

            <div class="page-heading text-center">
                <h2>OUR LECTURES</h2>
            </div>
            <div class="container teachers-browse pros">
                <div class="row toolbar">
                    <div class="col-md-4 col-sm-6 col-xs-12 select-categories">
                        <select class="jquery-select">	
                            <option>choose a category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 select-numofvids">
                        <select class="jquery-select">	
                            <option>number of videos</option>
                            <option value="1">2</option>
                            <option value="2">4</option>
                            <option value="3">8</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 select-name">
                        <select class="jquery-select">	
                            <option>name</option>
                            <option value="1">Name 1</option>
                            <option value="2">Name 2</option>
                            <option value="3">Name 3</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-xs-12 text-keywords">
                        <input class="keywords" name="keywords" type="text" placeholder="keywords">	
                    </div>
                    <div class="col-sm-6 col-xs-12 search-button">
                        <button class="search-teachers">SEARCH</button>
                    </div>
                </div>
                <div class="row text-center">
                    <?php
                    $LECTURE = new Lecture(NULL);
                    foreach ($LECTURE->all() as $lecture) {
                        ?>
                        <div class="col-md-2 col-sm-4 col-xs-6">		
                            <div class="teacher">
                                <div class="imgcontainer">
                                    <?php
                                    if (empty($lecture['image_name'])) {
                                        ?>
                                        <img src="assets/member.jpg" alt="Avatar" class="img-responsive">
                                    <?php } else { ?>
                                        <img src="lecture/upload/lecture/profile/<?php echo $lecture['image_name'] ?>" alt="Avatar" class="img-responsive">

                                    <?php } ?>
                                </div>
                                <a href="./lecture-view.php?id=<?php echo $lecture['id'] ?>"><?php echo $lecture['full_name'] ?></a>
                                <p><?php echo $lecture['email'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>



            </div>
            <div class="row text-center " style="margin-top: 20px;">
                <div class="col-xs-12">
                    <div class="paginations">
                        <a class="prev" href="#"><i class="zmdi zmdi-chevron-left"></i>PREV</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a class="next" href="#">NEXT<i class="zmdi zmdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="ready">
                <div class="container">
                    <div class="row">
                        <a href="#" class="whitebutton">SIGN UP NOW</a>
                        <p>ONLINE LEARNING FROM EVERYWHERE</p>
                        <h4>Are you ready to start learning?</h4>
                    </div>
                </div>
            </div>
        </main>

        <?php include './footer.php'; ?>

        <script src="assets/libs/jquery/jquery.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/libs/rslides/responsiveslides.min.js"></script>
        <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/libs/slick/slick.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>