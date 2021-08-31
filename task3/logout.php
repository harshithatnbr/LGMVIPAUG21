<?php
session_start();
unset  ($_SESSION['USER_LOGIN']);
unset ($_SESSION['USER_EMAIL']);
header('location:index.php');
?>