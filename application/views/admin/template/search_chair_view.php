<table class="table table-striped_ table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="16%">Slot Time</th>
            <th width="16%">Chair 1</th>
            <th width="16%">Chair 2</th>
            <th width="16%">Chair 3</th>
            <th width="16%">Chair 4</th>
            <th width="16%">Chair 5</th>
        </tr>
    </thead>
    <tbody> 
        <?php
        $range = range(strtotime("10:00"), strtotime("19:45"), 15 * 60);
        $now = strtotime(date('h:i A'));
        $date = date('y-m-d');
        foreach ($range as $time) {
            $list_time = strtotime(date("h:i A", $time));
            ?>
            <tr>
                <td><strong><?php echo date("h:i A", $time); ?></strong></td> 
                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                    <a href="javascript://">Allot</a>
                </td> 
                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                    <a href="javascript://">Allot</a>
                </td> 
                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                    <a href="javascript://">Allot</a>
                </td> 
                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                    <a href="javascript://">Allot</a>
                </td> 
                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                    <a href="javascript://">Allot</a>
                </td> 
            </tr> 
        <?php } ?>

    </tbody>

</table>