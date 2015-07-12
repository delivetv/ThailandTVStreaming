<?php

$time=time();
$nu=time()-60; # ประมาณ 1 นาที ที่แล้ว

$file="useronline2.txt"; #ชื่อไฟล์ที่ต้องการเก็บ

$f=fopen($file,"a+");
fputs($f,$time."\n"); # จัดเก็บเวลาปัจจุบัน ลง file
fclose($f);

$count_users = count(file($file)); # นับจำนวนบรรทัด

$f=file($file);
$f1=fopen($file,"w");
for ($i=0;$i<count($f);$i++) {
if ($f[$i]>$nu) { fputs($f1,$f[$i]); } # ถ้าค่า time ที่เก็บไว้มากกว่า ค่า $nu ให้ลบออก
}
fclose($f1);

?>
