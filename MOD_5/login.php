<?php
session_start();

require 'check_cookie.php';

$msg = "";

if (isset($_POST['login'])) {

    function encryptCookieData($data)
    {
        $key = "CREW/321";
        $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
        return base64_encode($iv . $encrypted);
    }


    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $file = "./userData.json";

    $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    if (isset($users[$email])) {
        if ($users[$email]["password"] == $password) {
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $users[$email]['username'];
            $_SESSION["role"] = $users[$email]['role'];


            if (isset($_POST['remember_me'])) {
                $crewInfo = [
                    'username' => $users[$email]['username'],
                    'email' => $email,
                    'role' => $users[$email]['role']
                ];


                setcookie('crewInfo', encryptCookieData(json_encode($crewInfo)), time() + 3600);
            }

            header('location: index.php');
        } else {
            $msg = "Password does not match!";
        }
    } else {
        $msg = "{$email} not found!";
    }
}



include "includes/head.php";
include "includes/menu.php";

?>
<h1>Login</h1>
<form action="" method="post" class="form-control flex flex-grid">
    <label>Email</label>
    <input class="form-control" name="email" type="email">

    <label>Password</label>
    <input class="form-control" name="password" type="password">

    <label>Rermember Me </label>
    <input type="checkbox" name="remember_me">
    <br>
    <input type="submit" name="login" value="Login">


</form>
<h5 style="color: red;"><?= $msg ?></h5>
<h5>Do not have an account? <a href="register.php">Open Here!</a></h5>
<?php
include "includes/footer.php";
?>