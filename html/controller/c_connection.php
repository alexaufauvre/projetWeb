<?php

require_once('../model/m_admin.php');


$adminmodel = new AdminModel();

$username = $_POST["username"];
$password = $_POST["password"];




include_once('../view/c_editMenu.php');

 ?>
