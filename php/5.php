<?php
$user = "admin";
$pass = "123";

if(isset($_POST['uid']) && isset($_POST['pwd'])) {
    $uid = filter_var($_POST['uid'], FILTER_SANITIZE_STRING);
    $pwd = $_POST['pwd'];
    if($uid == $user && $pwd == $pass){
        echo "Welcome User";
    } else {
        echo "Invalid Login";
    }
} else {
    echo "Please fill in the form";
}
?>

<form method="post">
<input name="uid" placeholder="User ID">
<input name="pwd" type="password" placeholder="Password">
<button>Login</button>
</form>