<?php
if (isset($_POST["register"])) {

    $username = $_POST["username"] ?? '';
    $password = md5($_POST["password"]) ?? '';
    $email = $_POST["email"] ?? '';

    $file = './userData.json';
    $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    if ($username != '' && $password != '' && $email != '') {

        if (isset($users[$email])) {
            echo "Already Registered";
        } else {

            $users[$email] = [
                'username' => $username,
                'password' => $password,
                'role' => '',
            ];

            file_put_contents("./userData.json", json_encode($users, JSON_PRETTY_PRINT));

            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["role"] = '';
            $_SESSION["email"] = $email;

            header("Location: index.php");
        }
    } else {
        echo "Empty Data";
    }
}


include "includes/head.php";
include "includes/menu.php";
?>
<h1>Register</h1>
<form action="" method="post" class="form-control">
    <label>User Name</label>
    <input class="form-control" name="username" type="text">
    <label>Email</label>
    <input class="form-control" name="email" type="email">
    <label>Password</label>
    <input class="form-control" name="password" type="password">
    <input type="submit" name="register" value="Register">
</form>
<?php
include "includes/footer.php";
?>