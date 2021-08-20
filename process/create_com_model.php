<?php
    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      createcomputer($_POST);
      
      header("Location: http://localhost/computer_shop/?page=computer");
    }
?>