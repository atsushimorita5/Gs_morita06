<?php
//var_dump($_POST);
//exit();


$kg = $_POST["kg"];
$mezame = $_POST["mezame"];
$time = $_POST["time"];
$level = $_POST["level"];
$conditontext = $_POST["conditontext"];

$array= array("$kg","$mezame","$time","$level","$conditontext");
$file_handler = fopen('data/data.csv', 'a');
fputcsv($file_handler, $array);
// flock($file, LOCK_EX);
// fwrite($file, $write_data);
// flock($file, LOCK_UN);
fclose($file);

header("Location:weight_input.php");
// echo"saveした"
?>

