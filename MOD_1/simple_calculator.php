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
        .task_seven {
            background: gray;
        }

        h3 {
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Task 7: Simple Calculator</h1>
        <form method="post" action="">
            <input type="number" step="" name="user_val1" placeholder="Enter a number" required>
            <input type="number" step="" name="user_val2" placeholder="Enter another number" required>
            <div style="    display: inline-flex;gap: 5px;justify-content: space-evenly;">
                <input type="submit" class="button" name="add" value="+">
                <input type="submit" class="button" name="substract" value="-">
                <input type="submit" class="button" name="multifply" value="x">
                <input type="submit" class="button" name="devide" value="/">
            </div>

        </form>

        <h3>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $val1 = $_POST['user_val1'];
                $val2 = $_POST['user_val2'];

                if (isset($_POST['add'])) {
                    $result = $val1 + $val2;
                    echo "<h3>{$result}</h3>";
                } elseif (isset($_POST['substract'])) {
                    $result = $val1 - $val2;
                    echo "<h3>{$result}</h3>";
                } elseif (isset($_POST['multifply'])) {
                    $result = $val1 * $val2;
                    echo "<h3>{$result}</h3>";
                } elseif (isset($_POST['devide'])) {
                    if ($val2 != 0) {
                        $result = $val1 * $val2;
                        echo "<h3>{$result}</h3>";
                    } else {
                        echo "<h3>&#8734;</h3>";
                    }
                }
            }
            ?>
        </h3>
    </div>
</body>

</html>