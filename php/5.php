<?php
$user = "admin";
$pass = "123";

if($_POST['uid']==$user && $_POST['pwd']==$pass){
    echo "Welcome User";
} else {
    echo "Invalid Login";
}
?>

<form method="post">
<input name="uid" placeholder="User ID">
<input name="pwd" type="password" placeholder="Password">
<button>Login</button>
</form>