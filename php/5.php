<?php
$user = "admin";
$pass = "123";

$uid = $_POST['uid'] ?? '';
$pwd = $_POST['pwd'] ?? '';

if($uid === $user && password_verify($pwd, password_hash($pass, PASSWORD_DEFAULT))){
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
```
However, the above code still has issues because the password is being hashed every time the user tries to log in. The correct way to store passwords is to hash them when they are created and then store the hash. When the user tries to log in, hash the input password and compare it to the stored hash.

Here is the corrected version:
```php
<?php
$user = "admin";
$pass = password_hash("123", PASSWORD_DEFAULT);

$uid = $_POST['uid'] ?? '';
$pwd = $_POST['pwd'] ?? '';

if($uid === $user && password_verify($pwd, $pass)){
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