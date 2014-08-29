<?php
include '/classes/User.php';

function register($data){
    $usuario = new User($data);
    $usuario->insertUser();
}