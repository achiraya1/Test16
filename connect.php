<?php

$mysqli = new mysqli("localhost","root","","achiraya");
 
if($mysqli->connect_error){
   die("เชื่อต่อฐานข้อมูลไม่สำเร็จ".$mysqli->connect_error."\n");
}


?>