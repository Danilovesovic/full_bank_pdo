<?php
require 'boot.php';
$id = $_GET['id'];
$account = $db->getOne($id);
require('edit.view.php');
 ?>
