<?php
require_once('boot.php');
  if ($db->isLog()) {
    $result = $db->getAll();
    require('accounts.view.php');
  } else {
    echo "Not logged in !";
  }


 ?>
