<?php
require_once('../database/database.php');
$id = $_GET['id'];
$isDeleted = deleteElectric($id);

if ($isDeleted) {
    header("Location: http://localhost/computer_shop/?page=electro");
}