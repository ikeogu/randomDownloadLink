<?php
require('connect.php');

if(isset($_GET['file'])){
$thisFile = $_GET['file'];
if(ctype_alnum($thisFile)){
$searchForFile = mysqli_query($conn,"SELECT filename FROM downloadlink WHERE fakeName = '$thisFile'");
$getFileName = mysqli_fetch_assoc($searchForFile);
$realFile = $getFileName['filename'];
// download file
$filepath = 'SecretFolder/';
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"".$realFile."\"");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filepath.$realFile));
ob_end_flush();
@readfile($filepath.$realFile);

$deleteRecord  = mysqli_query($conn,"DELETE FROM downloadlink WHERE fakeName = '$thisFile'");
}}
else{
echo 'Sorry for the error Please try again';
}
?>