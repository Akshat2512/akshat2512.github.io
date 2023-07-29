<?php
if(isset($_POST['url1']))
{
$url = $_POST['url1'];
$img = file_get_contents($url);
$file = fopen("captures\IMG.jpg", "w");
fwrite($file, $img);
fclose($file);

$file = fopen("C:\\Users\\Akshat\\Documents\\Project\\Plant_Disease\\input\\IMG.jpg", "w");
fwrite($file, $img);
fclose($file);
die;
}
if(isset($_POST['url2']))
{   
    $dlt="C:\\xampp\\htdocs\\php\\Web_Application\\temp\\info.json";
    unlink($dlt);
    die;
}
die;
?>
