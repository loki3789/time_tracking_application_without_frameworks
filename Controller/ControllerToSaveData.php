<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'\PhpProject2\Model\MODEL_DATA.php');

$working_on = $_REQUEST['working_on'];
$time =(int)$_REQUEST['time_elapsed'];
$category = $_REQUEST['category'];

$time=$time/10;                  //coverting total seconds into hours:minute:seconds format
$hours = floor($time / 3600);
$minutes = floor(($time / 60) % 60);
$seconds = $time % 60;
$date = date("Y-m-d");
$duration="$hours:$minutes:$seconds";

$t = new MODEL_DATA;
$t->saverecords($working_on, $category, $duration, $date);
echo 'data stored succefully';
header('Location:../index.php');   // redirecting to same page after saving data to database