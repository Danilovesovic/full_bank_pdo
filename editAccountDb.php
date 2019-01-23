<?php
require 'boot.php';
$id = $_POST['id'];
$name = $_POST['name'];
$deposit = $_POST['deposit'];
$cCard = $_POST['cCard'];
$worker_id = $_POST['worker_id'];
$db->editAccount($id,$name,$deposit,$cCard,$worker_id);
header('Location: accounts.php');
 ?>
