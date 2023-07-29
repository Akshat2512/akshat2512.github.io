<?php
if(isset($_POST['url1']))
{
$url = $_POST['url1'];
$img = file_get_contents($url);
$file = fopen("captures\\IMG.jpg", "w");
fwrite($file, $img);
fclose($file);

$file = fopen("C:\\Users\\Akshat\\Documents\\Project\\Plant_Disease\\input\\IMG.jpg", "w");
fwrite($file, $img);
fclose($file);
die;
}
if(isset($_POST['url2']))
{   
    $dlt=$_POST['url2'];
    unlink($dlt);
    die;
}
die;
?>
