<?php
//session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);

unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_unset();
// destroy the session
//session_destroy();
session_destroy();
header("Location:index.php");

?>