<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Train MHAPAO</title>
    <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/signup.css"> 
</head>
<body>
    <form class ="form-add"action="../Welcome/add_train" method="POST">
        <h1> สถานีรถไฟ Mhapao_ </h1>
    <div class="form-train">
    <label>ขบวน</label>
    <input type="text" name="train_box">
  </div>
  <br>

    <div class="tontang">
        <div class="form-tontang">
            <label>ต้นทาง</label>
            <input type="text" name="ton_id" >
            <label>สถานี</label>
            <input type="text" name="ton_Station" >
            <label>เวลาออก</label>
            <input type="text" name="ton_timeout" >
         </div>
    </div><br>

    <div class="huyrach">
        <div class="form-huyrach">
            <label>ห้วยราช</label>
            <input type="text" name="huyrach_id" >
            <label>ถึง</label>
            <input type="text" name="at_complase" >
            <label>ออก</label>
            <input type="text" name="h_timeout" >
        </div>
    </div><br>

    <div class="praytang">
        <div class="form-praytang">
            <label>ปลายทาง</label>
            <input type="text" name="pray_id" >
            <label>สถานี</label>
            <input type="text" name="pray_Station" >
            <label>ถึงเวลา</label>
            <input type="text" name="time_complase" >
        </div>
    </div>
    <br>
    <select name="status" >
    <option value="รถธรรมดา">รถธรรมดา</option>
    <option value="รถดีเซลราง">รถดีเซลราง</option>
    <option value="รถด่วนดีเซลราง">รถด่วนดีเซลราง</option>
  </select>
  
  <br><br>
  <input type="submit" class="btn btn-primary">
  <a class="a"href="../Welcome/showall">back</a>
  
  <!--<div class="back-login">
    <a class="button" href="../Welcome/index">Back to home page</a><br><br>-->
  </div>
  
</form>


</body>
</html>