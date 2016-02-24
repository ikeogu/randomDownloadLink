<?php
require('connect.php');
if(isset($_GET['f'])){
//echo "hello";
/*
#
#	ADD SOME SECURITY PARAMETERS FOR $_GET['f']
#
*/
$realFile = $_GET['f'];
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$randfilename = substr(str_shuffle($chars), 0, 15);

$storeLink = mysqli_query($conn, "INSERT INTO downloadlink VALUES('','$realFile','$randfilename','')");
$downloadScript = "download.php?file=$randfilename";
//header('location:'.$downloadScript);
echo $randfilename;
}
else{
echo 'your ip has been recorded';//give a redirect to another page
}

?>