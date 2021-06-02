<?php
    session_start();
    if (isset($_SESSION['username'])){
        $usernameCurr = $_SESSION['username'];
    }

    if (isset($_SESSION['email'])){
        $userEmail = $_SESSION['email'];
    }

    if (isset($_SESSION['userType'])){
        $userCategory = $_SESSION['userType'];
    }

    if (isset($_SESSION['displayName'])){
        $userDisplayName = $_SESSION['displayName'];
    }
 
    if (isset($_SESSION['verified'])){
        $userVerified = $_SESSION['verified'];
    }
 
?>

