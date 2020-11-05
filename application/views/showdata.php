<html>
<head>
<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/signup.css"> 
</head>
<body>
<div class="back-login">
    <a class="button" href="../Welcome/index">เพิ่มรอบรถไฟ</a>
</div>
<table  bgcolor="#eed9d4">
    <tr id="r1">
        <td rowspan=2>ขบวน</td>
        <td >ต้นทาง</td>
        <td >ห้วยราช</td>
        <td >ปลายทาง</td>
        <td rowspan=2>หมายเหตุ</td>
    </tr>
    <tr>
        <td>สถานี
        เวลาออก</td>

        <td>ถึง
        ออก</td>

        <td>สถานี
        ถึงเวลา</td>
    </tr>
    <?php
        foreach($TN as $row){
    ?>
    <tr>
        <td><?=$row->t_id;?></td>

        <td><?=$row->st_name?>
        <?=$row->time_at?></td>

        <td><?=$row->at_time?>
        <?=$row->timeout?></td>

        <td><?=$row->pray_name?>
        <?=$row->timeOut?></td>
        
	    <td><?=$row->status?></td>
    </tr>
    <?php
     }
    ?>
</table>
    </body>
</html>