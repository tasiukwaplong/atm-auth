<?php
exec("mode com1: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
$fp =fopen("/dev/cu.usbserial-1420",'r+');
// $fp =fopen("com4", "w");
// $fp = fopen('/dev/ttyUSB0','r+'); //use this for Linux
echo $fp;
fwrite($fp, "string to send"); //write string to serial
fclose($fp);

// $fp =fopen('/dev/ttyUSB0',r+');