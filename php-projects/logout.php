<?php
session_start();
echo $_SESSION['user'];
unset($_SESSION['user']);
session_destroy();

header("Location: http://mikecomponents.com/php-projects/index.html");