<?php
require 'boot.php';
$db->deleteAccount($_GET['id']);
header('Location: accounts.php');
 ?>
