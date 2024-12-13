<?php

include('connect.php');

$table = "CREATE TABLE evidences(
order_id varchar(10) NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
bank varchar(100) NOT NULL COMMENT 'ธนาคารที่ชำระ',
money double COMMENT ' จำนวนเงิน',
date varchar(50) NOT NULL COMMENT 'วันที่',
time varchar(20) NOT NULL COMMENT 'เวลา',
comment varchar(100) NOT NULL COMMENT 'รายละเอียด',
PRIMARY KEY (order_id)
)";

if($mysqli->query($table) === TRUE){
    echo "สร้างตารางสำเร็จ";
 }else{
    echo "สร้างตารางไม่สำเร็จ :".$mysqli->error;
 }
 
 $mysqli->close();
 
?>