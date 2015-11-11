<?php
session_start();

unset($_SESSION["user"]);
unset($_SESSION["password"]);

session_destroy();
header('location:http://localhost:8081/megashop/');
exit();
?>