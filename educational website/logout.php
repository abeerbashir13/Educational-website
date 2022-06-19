<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['role']);
unset($_SESSION['id']);
session_destroy();
header("Location: login.php");
die();