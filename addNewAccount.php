<?php
require_once 'boot.php';
if (isset($_POST['sub'])) {
  $name = $_POST['name'];
  $deposit = $_POST['deposit'];
  $cCard = $_POST['cCard'];
  $worker_id = $_POST['worker_id'];

  $db->addAccount($name,$deposit,$cCard,$worker_id);

  header("Location: accounts.php");
}else{
  header("Location: add.account.view.php");
}

 ?>
