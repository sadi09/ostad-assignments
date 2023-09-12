<?php
$name = 'Abdullah Aal Amin';
$age = 29;
$country = "Bangladesh";
$profession = "Software Engineer";
$about_me = "Human by born, coder by passion";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
</head>

<body>
    <?php
    require('task_list.php')
    ?>
    <style>
        .task_one {
            background: gray;
        }
    </style>
    <div class="content">
        <h1>Task 1: Personal Info</h1>
        <p><?= "Hi, I am {$name}, a {$age} years old {$profession} from {$country}. People say '{$about_me}' about me!" ?></h1>
    </div>
</body>

</html>