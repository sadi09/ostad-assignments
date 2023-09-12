<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp Converter</title>
</head>

<body>
    <?php
    require('task_list.php')
    ?>
    <style>
        .task_four {
            background: gray;
        }

        h3 {
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Task 4: Even or Odd Checker</h1>
        <form method="post" action="">
            <input type="number" step="" name="user_val" placeholder="Enter a number" required>
            <input type="submit" class="button" name="check" value="Check Even or Odd">
        </form>

        <h3>
            <?php
            if (isset($_POST['check'])) {
                $val = $_POST['user_val'];
                echo ($val % 2 == 0 ? "<h3>Pretty <strong>EVEN</strong></h3>" : "<h3>Well, Thats's <strong>ODD</strong></h3>");
            }
            ?>
        </h3>
    </div>
</body>

</html>