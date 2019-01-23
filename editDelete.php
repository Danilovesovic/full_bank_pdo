<?php
require_once "boot.php";

$result = $db->getAll();

require 'editDelete.view.php';

 ?>
