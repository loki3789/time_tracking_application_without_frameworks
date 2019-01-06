<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\PhpProject2\Model\MODEL_DATA.php');



$t = new MODEL_DATA;

$data = $t->get_task_details();

include(realpath($_SERVER["DOCUMENT_ROOT"]) . '\PhpProject2\Views\mainpage.php');


