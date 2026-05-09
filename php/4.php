<?php
if(isset($_COOKIE['last'])){
    echo "Last visited: " . $_COOKIE['last'];
} else {
    echo "This is your first visit";
}

setcookie("last", date("Y-m-d H:i:s"), time()+3600);
?>