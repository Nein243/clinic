<?php
session_start();
unset($_SESSION["user"]);
header("location:authorization.php");
exit;