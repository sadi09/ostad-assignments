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
        .task_six {
            background: gray;
        }

        h3 {
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Task 6: Comparison Tool</h1>
        <form method="post" action="">
            <input type="number" step="" name="user_val1" placeholder="Enter a number" required>
            <input type="number" step="" name="user_val2" placeholder="Enter another number" required>
            <input type="submit" class="button" name="check" value="Compare">
        </form>

        <h3>
            <?php
            if (isset($_POST['check'])) {
                $val1 = $_POST['user_val1'];
                $val2 = $_POST['user_val2'];
                if ($val1 != $val2) {
                    echo ($val1 > $val2 ? "<h3>{$val1} is Larger between {$val1} & {$val2}</h3>" : "<h3>{$val2} is larger between {$val1} & {$val2}</h3>");
                } else {
                    echo "<h3>Both are same number</h3>";
                }
            }
            ?>
        </h3>
    </div>
</body>

</html>