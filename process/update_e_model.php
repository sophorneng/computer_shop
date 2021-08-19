<?php
    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] =='POST'){
       updateComputer($_POST);
       header('Location: http://localhost/2021-basic-php-project-sophorneng/?page=electro');
    }