<?php
require 'boot.php';
  if (isset($_POST['sub'])) {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($db->logWorker($username,$password)) {
        header("Location: index.php");
      }else{
        header("Location: login.view.php");
      }

    } else {
      header("Location: login.view.php");
    }

  }else{
    header("Location: login.view.php");
  }
 ?>
