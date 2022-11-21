<?php
session_start();

unset($_SESSION['adiministrador']);
header('location: index.php');

?>