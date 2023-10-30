<?php

session_start();

session_destroy();

setcookie("crewInfo", "", time() - 0, "/");

header("location: index.php");
