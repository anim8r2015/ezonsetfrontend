<?php
//session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:index.php");
?>