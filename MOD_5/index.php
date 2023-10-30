<?php

session_start();

require 'check_cookie.php';

if (isset($_SESSION["email"])) {


    include "includes/head.php";

    include "includes/menu.php";


    switch ($_SESSION["role"]) {
        case "user":
            include "user_home.php";
            break;
        case "admin":
            include "admin_home.php";
            break;
        case "manager":
            include "admin_home.php";  //manager can access the admin_home page but the content modification can only be done by admin
            break;
        default:
            include "pending_user.php";
    }


    include "includes/footer.php";
} else {
    header("location: login.php");
}
