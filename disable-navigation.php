<div class="layout-sidebar disabled">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
            <ul class="sidenav level-1">

                <?php
                date_default_timezone_set("Asia/Calcutta");
     
                $today = date('Y-m-d');
                $begin = new DateTime('2020-01-15');
                $end = new DateTime('2020-02-10');
                $interval = DateInterval::createFromDateString('1 day');
                $period = new DatePeriod($begin, $interval, $end);
                foreach ($period as $key => $date) {
                    $key++;

                    if (date('Y-m-d') == $date->format("Y-m-d")) {
                        ?>

                        <li class="sidenav-item has-subnav card"> 
                            <a href="lesson.php?date=<?php echo $date->format("Y-m-d"); ?>" style="padding-left: 10px;color: #0f660c;font-weight: 600;font-size: 16px;">Lesson <?php echo $key ?>    <b style="padding-left: 8px;"><?php echo $date->format(" Y-m-d"); ?></b> </a>
                        </li> 
                        <?php
                    } else if (date('Y-m-d') < $date->format("Y-m-d")) {
                        ?>
                        <li class="sidenav-item has-subnav card disabled"> 
                            <a href="#" style="padding-left: 10px;">Lesson <?php echo $key ?>    <b style="padding-left: 8px;"><?php echo $date->format(" Y-m-d"); ?></b> </a>
                        </li> 
                        <?php
                    } else {
                        ?>
                        <li class="sidenav-item has-subnav card"> 
                            <a href="lesson.php?date=<?php echo $date->format("Y-m-d"); ?>" style="padding-left: 10px;">Lesson <?php echo $key ?>    <b style="padding-left: 8px;"><?php echo $date->format(" Y-m-d"); ?></b> </a>
                        </li> 
                        <?php
                    }
                }
                ?>
            </ul>        
        </div>
    </div>
</div>
