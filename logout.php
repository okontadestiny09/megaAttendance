<?php
session_start();

$_SESSION ['name'] = null;
$_SESSION ['email'] = null;
$_SESSION ['authenticated'] = null;
header("location:register.php");