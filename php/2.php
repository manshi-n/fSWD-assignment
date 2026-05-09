<?php
setcookie("user", "Manshi", time() + 3600);
if(isset($_COOKIE["user"])) {
    echo "Cookie Value: " . $_COOKIE["user"];
} else {
    echo "Cookie is set. Refresh the page to read it.";
}
?>