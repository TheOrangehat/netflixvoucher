<?php
//open up the log file
$file = fopen("log.html", "a");

//write the time of access

$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
// $HTTP_REFFERER = $_SERVER['HTTP_REFERRER'];
$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

$time = date("l jS \of F Y h:i:s A");
fwrite($file, `<b>Time:</b> $time<br/>` );

//write the users IP address
fwrite( $file, `‘<b>IpAddress:</b> $REMOTE_ADDR<br/>’`);

//write out the page that sent them here
// fwrite($file, `‘<b>Referer:</b> $HTTP_REFFERER<br/>’`);

//write the users browser details

fwrite( $file, `‘<b>Browser:</b> $HTTP_USER_AGENT<hr/>’`);

//and finial, close the log file
fclose( $file );







//
//// $counter_file = "count.txt";
//// /* create counter file if doesn't exists */
// if(!file_exists($counter_file)){
// $f = fopen($counter_file, "w");
// fwrite($f,"0");
// fclose($f);
// }
///* get current value of counter */
// $f = fopen($counter_file, "r");
// $count = fread($f, filesize($counter_file));
// fclose($f);
///* set session if not done before and write new counter value */
// if(!isset($_SESSION['visitedBefore'])){
// $_SESSION['visitedBefore'] = TRUE;
// $count++;
// $f = fopen($counter_file, "w");
// fwrite($f, $count);
// fclose($f);
// }
//// optional statement to print counter value
// print("Counter :".$count);
?>