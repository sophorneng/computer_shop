<?php
require_once('../database/database.php');
$id = $_GET['id'];
$isDeleted = deleteElectric($id);

if ($isDeleted) {
    header("Location: http://localhost/2021-basic-php-project-sophorneng/?page=electro");
}