<?php
require_once('../database/database.php');
$id = $_GET['id1'];
$isDeleted = deletecomputer($id);

if ($isDeleted) {
    header("Location: http://localhost/2021-basic-php-project-sophorneng/?page=computer");
}