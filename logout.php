<?php
session_start();

$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['name'] = null;
$_SESSION['level'] = null;
        
header("Location: admin.php");