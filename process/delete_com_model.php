<?php
require_once('../database/database.php');
$id = $_GET['id1'];
$isDeleted = deletecomputer($id);

if ($isDeleted) {
    header("Location: http://localhost/computer_shop/?page=computer");
}