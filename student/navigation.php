<div class="layout-sidebar">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
            <ul class="sidenav level-1">

                <?php
                date_default_timezone_set("Asia/Calcutta");

                // Start date
                $date = date('Y-m-d');
                // End date
                $end_date = '2020-1-24';
                $key = 1;

                while (strtotime($date) >= strtotime($end_date)) {


                    if (date('Y-m-d') == $date) {
                        ?>

                        <li class="sidenav-item has-subnav card"> 
                            <a href="lesson.php?date=<?php echo $date ?>" style="padding-left: 10px;color: #0f660c;font-weight: 600;font-size: 16px;">Lesson <?php echo $key ?>    <b style="padding-left: 8px;"><?php echo $date; ?></b> </a>
                        </li> 

                        <?php
                    } else if (date('Y-m-d') > $date) {
                        ?>
                        <li class="sidenav-item has-subnav card"> 
                            <a href="lesson.php?date=<?php echo $date ?>" style="padding-left: 10px;">Lesson <?php echo $key ?>    <b style="padding-left: 8px;"><?php echo $date; ?></b> </a>
                        </li> 
                        <?php
                    }

                    $date = date("Y-m-d", strtotime("-1 day", strtotime($date)));
                    $key++;
                }
                ?>





            </ul>        
        </div>
    </div>
</div>
