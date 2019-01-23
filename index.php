<?php
require 'boot.php';

session_start();

if (isset($_SESSION['id'])) {
  require('accounts.php');
} else {
  require 'login.view.php';
}

 ?>
