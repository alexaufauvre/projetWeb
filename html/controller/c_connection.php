<?php

require_once('../model/m_admin.php');


$adminmodel = new AdminModel();

$username = $_POST["username"];
$password = $_POST["password"];




include_once('../controller/c_editMenu.php');

 ?>
