<?php
date_default_timezone_set("Asia/Kathmandu");
$today = date("d/M/Y");
echo $today."<br>";
echo date("d/m/Y")."<br>";
echo date("d-m-Y")."<br>";
echo date("d.m.Y")."<br>";
echo date("h:i:s")."<br>";
echo date("F d, Y h:i:s A")."<br>";
echo date("h:i a");
?>
<br>
<h4>time stamp</h4>
<?php
//from date to timestamp
$timestamp = time();
echo($timestamp)."<br>";
//from timestamp to date
$timestamp = 1646368901;
echo(date("F d, Y h:i:s", $timestamp)) . "<br>";


//create the timestamp for a particular date
echo date('l',mktime(0,0,0,7,19,5000)zs);
?>
