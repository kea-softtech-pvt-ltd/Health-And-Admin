<?php
// include header
include_once('class/class_department_list.php');
include_once('header.php');

$dept = new Department();
$department = $dept->getAllDepartment();
$num = count($department);

// include tpl
include('template/department-list.tpl.php');
?> 