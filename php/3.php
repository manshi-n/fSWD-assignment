<?php
session_start();

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

echo "Page Views: " . $_SESSION['count'];
?>