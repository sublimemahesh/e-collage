<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SSM Net</title>
         
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
                        <?php include './head-nav-right.php'; ?>
                        <div class="title-bar">
                            <h1 class="title-bar-title">
                                <span class="d-ib">Dashboard
                                    <small></small>
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
                    <div class="row gutter-xs">
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>Visitors</small>
                                        <h3 class="card-title fw-l">185,118</h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"colorStop1": "#feeeda", "colorStop2": "#ffffff", "y0": 0, "y1": 36, "borderColor": "#f7a033", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 31072}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>New visitors</small>
                                        <h3 class="card-title fw-l">68,494</h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"colorStop1": "#feeeda", "colorStop2": "#ffffff", "y0": 0, "y1": 36,"borderColor": "#f7a033", "data": [8796, 11317, 8678, 9452, 8453, 11853, 9945]}]' data-scales='{"yAxes": [{ "ticks": {"max": 12853}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>Pageviews</small>
                                        <h3 class="card-title fw-l">925,590</h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"colorStop1": "#feeeda", "colorStop2": "#ffffff", "y0": 0, "y1": 36,"borderColor": "#f7a033", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]' data-scales='{"yAxes": [{ "ticks": {"max": 157004}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>Average duration</small>
                                        <h3 class="card-title fw-l">00:07:56</h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"colorStop1": "#feeeda", "colorStop2": "#ffffff", "y0": 0, "y1": 36,"borderColor": "#f7a033", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]' data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="pull-left">
                                        <h4 class="card-title">Audience Overview</h4>
                                    </div>
                                    <div class="pull-right" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-xs btn-pill active">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked="checked"> Past 24hr
                                        </label>
                                        <label class="btn btn-outline-primary btn-xs btn-pill">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> Past 7 days
                                        </label>
                                        <label class="btn btn-outline-primary btn-xs btn-pill">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Past 30 days
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-chart">
                                        <canvas data-chart="line" data-animation="false" data-labels='["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]' data-values='[{"label": "This week", "backgroundColor": "#f7a033", "borderColor": "#f7a033", "data": [5022, 11017, 12230, 8801, 14102, 21512, 9932]}, {"label": "Last week", "backgroundColor": "#ed4882", "borderColor": "#ed4882", "data": [5012, 7203, 10204, 15052, 14820, 21805, 13203]}]' data-tooltips='{"mode": "label"}' data-hide='["gridLinesX", "legend", "points"]' data-scales='{"yAxes": [{"gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6", "maxTicksLimit": 5}}], "xAxes": [{ "gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6"}} ]}' height="128"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">229 Signups</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-chart">
                                        <canvas data-chart="bar" data-animation="false" data-labels='["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]' data-values='[{"label": "This week", "backgroundColor": "#f7a033", "borderColor": "#f7a033", "data": [23167, 15991, 13905, 17447, 24558, 22594, 23067]}, {"label": "Last week", "backgroundColor": "#ed4882", "borderColor": "#ed4882", "data": [7374, 16740, 22929, 16788, 12103, 16459, 24058]}]' data-tooltips='{"mode": "label"}' data-hide='["gridLinesX", "legend", "points"]' data-scales='{"yAxes": [{"gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6", "maxTicksLimit": 5}}], "xAxes": [{ "gridLines": {"color": "#f5f5f5"}, "ticks": {"fontColor": "#bcc1c6"}} ]}' height="128"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-middle media-left">
                                            <span class="bg-gray sq-64 circle">
                                                <span class="icon-works">&#228;</span>
                                            </span>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h3 class="media-heading">
                                                <span class="fw-l">1,256 Issues</span>
                                                <span class="fw-b fz-sm text-danger">
                                                    <span class="icon icon-caret-up"></span>
                                                    15%
                                                </span>
                                            </h3>
                                            <small>6 issues are unassigned</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-middle media-left">
                                            <div class="media-chart">
                                                <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#f7a033", "#667589"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                                            </div>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h2 class="media-heading">
                                                <span class="fw-l">879</span>
                                                <small>Resolved</small>
                                            </h2>
                                            <small>More than 70% resolved issues</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-middle media-left">
                                            <div class="media-chart">
                                                <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#667589", "#f7a033"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                                            </div>
                                        </div>
                                        <div class="media-middle media-body">
                                            <h2 class="media-heading">
                                                <span class="fw-l">377</span>
                                                <small>Unresolved</small>
                                            </h2>
                                            <small>Less than 30% unresolved issues</small>
                                        </div>
                                    </div>
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