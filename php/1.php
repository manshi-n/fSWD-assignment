<?php
session_start();

$_SESSION["user"] = "Manshi";

echo "Session created for: " . $_SESSION["user"];
?>