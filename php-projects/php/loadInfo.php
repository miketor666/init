<?php
include 'classes/User.php';
$user = new User();
$user->getUserInfo($_SESSION['user']);