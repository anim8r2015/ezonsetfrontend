<?php
//session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);

session_unset();
// destroy the session
session_destroy();
header("Location:index.php");
?>