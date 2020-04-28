<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$EDUCATION_SUBJECT = new EducationSubject($id);
$CATEGORY_ID=$EDUCATION_SUBJECT->sub_category;
$SUB_CATEGORIES=new EducationCategory($CATEGORY_ID);
$CATEGORY_NAME=$SUB_CATEGORIES->name;
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Subject</title>

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
        <?php
        include './top-header.php';
        ?>
        <div class="layout-main">


            <?php
            include './navigation.php';
            ?>

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
                                            <strong>Edit Subject</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card "  method="post" style="padding: 50px"   id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">Name </label>
                                                <div class="col-sm-11">
                                                    <input id="name" name="name" class="form-control" type="text" value="<?php echo $EDUCATION_SUBJECT->name ?>"  >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">Category: </label>
                                                <div class="col-sm-11">
                                                    <select id="category" class="custom-select" name="category">
                                                        <option value="" selected="selected"> <?php echo $CATEGORY_NAME ?></option>
                                                        <?php
                                                        $EDUCATION_CATEGORY = new EducationCategory(NULL);
                                                        foreach ($EDUCATION_CATEGORY->activeCategory() as $education_category) {
                                                            
                                                            if ($EDUCATION_SUBJECT->education_category == $education_category['id']) {
                                                                ?>
                                                                <option value="<?php echo $education_category['id'] ?>" selected=""><?php echo $education_category['name'] ?></option> 
                                                            <?php } else { ?>
                                                                <option value="<?php echo $education_category['id'] ?>"  ><?php echo $education_category['name'] ?></option> 
                                                            <?php }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"> 
                                                    <input type="hidden" name="id" value="<?php echo $EDUCATION_SUBJECT->id ?>">
                                                    <input type="hidden" name="update"  >
                                                    <input type="submit" class="btn btn-primary btn-block"   id="update"  value="update" >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
        <script src="ajax/js/subject.js" type="text/javascript"></script>
    </body>
</html>