<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Log History</title>
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
                      <?php include './head-nav-right.php';?>
                        <div class="title-bar">
                            <h1 class="title-bar-title">
                                <span class="d-ib">Student Login History
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
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
<!--                            <p><small>The tables presented below use <a href="https://datatables.net/extensions/colreorder/" target="_blank">DataTables ColReorder Extension</a>, the styling of which is completely rewritten in SASS, without modifying however anything in JavaScript.</small></p>-->
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions">
                                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                        <button type="button" class="card-action card-reload" title="Reload"></button>
                                        <button type="button" class="card-action card-remove" title="Remove"></button>
                                    </div>
                                    <strong>Student Login History Details</strong>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Seq.</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>No of Sessions</th>
                                                <th>Last Seen</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Seq.</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>No of Sessions</th>
                                                <th>Last Seen</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>pludani</td>
                                                <td>udani00@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lgnkaushalya</td>
                                                <td>kaushalya@gmail.com</td>
                                                <td>2</td>
                                                <td>Active 1 our ago</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>ymlakmal</td>
                                                <td>lakmal@gmail.com</td>
                                                <td>1</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>wakanchana</td>
                                                <td>kanchanaWA@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>gamage</td>
                                                <td>gamage99@gmail.com</td>
                                                <td>8</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>basnayakenadee</td>
                                                <td>nadeebasnayake@gmail.com</td>
                                                <td>6</td>
                                                <td>Active 5 minutes ago</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>samanthika</td>
                                                <td>gayanisamanthika@gmail.com</td>
                                                <td>10</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>desh</td>
                                                <td>deshan94@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>hgsmadu</td>
                                                <td>madushika33@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>kusal</td>
                                                <td>kusalperera@gmail.com</td>
                                                <td>4</td>
                                                <td>Active 5 ours ago</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>tmedirisighe</td>
                                                <td>edirisinghe11@gmail.com</td>
                                                <td>3</td>
                                                <td>Active 1 our ago</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>prithika</td>
                                                <td>khu.prithika@gmail.com</td>
                                                <td>1</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>kodithuwakku</td>
                                                <td>kodithuwakku@gmail.com</td>
                                                <td>6</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>madushika</td>
                                                <td>mail.madu@gmail.com</td>
                                                <td>11</td>
                                                <td>Active yesterday</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>madusanjaya</td>
                                                <td>madusanjayaMA@gmail.com</td>
                                                <td>4</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>nayananjali</td>
                                                <td>nayananjali50@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>pathum</td>
                                                <td>pathumwijewardhana@gmail.com</td>
                                                <td>2</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>vindi</td>
                                                <td>vindyamail@gmail.com</td>
                                                <td>2</td>
                                                <td>Active 15 minutes ago</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>samith</td>
                                                <td>gayansamith@gmail.com</td>
                                                <td>9</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>waruna</td>
                                                <td>Lakmalwaruna@gmail.com</td>
                                                <td>1</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>nwprabha</td>
                                                <td>25prabhashani@gmail.com</td>
                                                <td>10</td>
                                                <td>Active 5 days ago</td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>sksaveen</td>
                                                <td>dewapriyasaveen@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>sshegoda</td>
                                                <td>ShegodaS@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>shanika</td>
                                                <td>ridmishanika202@gmail.com</td>
                                                <td>7</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>hiruhansi</td>
                                                <td>hansi.mail@gmail.com</td>
                                                <td>4</td>
                                                <td>Active 2 ours ago</td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>sandamali</td>
                                                <td>sandamaliSR@gmail.com</td>
                                                <td>8</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>bhagya</td>
                                                <td>bhagyaharshi@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>jayani</td>
                                                <td>jayanimunasinghe@gmail.com</td>
                                                <td>1</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>jayani</td>
                                                <td>jayanimunasinghe@gmail.com</td>
                                                <td>2</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>lakshan</td>
                                                <td>pahanlakshan119@gmail.com</td>
                                                <td>3</td>
                                                <td>Active 50 minutes ago</td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>dilmini</td>
                                                <td>madudilmini@gmail.com</td>
                                                <td>6</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>sampath</td>
                                                <td>sumudusampath@gmail.com</td>
                                                <td>5</td>
                                                <td>Active 1 our ago</td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>madushika</td>
                                                <td>madushikawickramasekara@gmail.com</td>
                                                <td>3</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>prasadika</td>
                                                <td>prasadi1997@gmail.com</td>
                                                <td>3</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>sanjula</td>
                                                <td>sanjulakasun44@gmail.com</td>
                                                <td>3</td>
                                                <td>Active 5 minutes ago</td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>madushani</td>
                                                <td>dinumadushani@gmail.com</td>
                                                <td>4</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td>shanrayan</td>
                                                <td>rayanlakshan505@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>hiruni</td>
                                                <td>hiruniwitanachchi@gmail.com</td>
                                                <td>8</td>
                                                <td>Active 25 minutes ago</td>
                                            </tr>
                                            <tr>
                                                <td>39</td>
                                                <td>shamika</td>
                                                <td>ashanishamika@gmail.com</td>
                                                <td>8</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>chathuranga</td>
                                                <td>chathumahesh@gmail.com</td>
                                                <td>1</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>uththara</td>
                                                <td>PiumiUththara@gmail.com</td>
                                                <td>2</td>
                                                <td>Active 4 ours ago</td>
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>eranda</td>
                                                <td>erandakasun90@gmail.com</td>
                                                <td>9</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>kanchana</td>
                                                <td>kanchanadissanayake@gmail.com</td>
                                                <td>10</td>
                                                <td>Active 1 day ago</td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>mayuri</td>
                                                <td>mailmayuri@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>45</td>
                                                <td>mayuri</td>
                                                <td>mailmayuri@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46</td>
                                                <td>saumya</td>
                                                <td>saumyaTDT@gmail.com</td>
                                                <td>5</td>
                                                <td>Active 10 minutes ago</td>
                                            </tr>
                                            <tr>
                                                <td>47</td>
                                                <td>samankumari</td>
                                                <td>jchathukumari@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48</td>
                                                <td>nalika</td>
                                                <td>nalika1122@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49</td>
                                                <td>sandamali</td>
                                                <td>nisansalamali@gmail.com</td>
                                                <td>5</td>
                                                <td>Active 2 days ago</td>
                                            </tr>
                                            <tr>
                                                <td>50</td>
                                                <td>thejan</td>
                                                <td>thejanmadugalla@gmail.com</td>
                                                <td>5</td>
                                                <td> 
                                                    <i class="icon icon-circle" style="color: #4faf41; margin-right: 10px;"></i>Active Now
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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