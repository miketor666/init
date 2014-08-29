<?php
session_start();
include 'classes/Controller.php';

$data = $_POST['data'];
parse_str($data);

$controlador = new Controller($action, $data);
$controlador->goToAction();