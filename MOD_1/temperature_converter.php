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
        .task_two {
            background: gray;
        }

        h3 {
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Task 2: Temperature Converter</h1>
        <form method="post" action="">
            <input type="number" step="any" name="user_val" placeholder="Enter a number" required>
            <input type="submit" class="button" name="f2c" value="Fahrenheit to Celcius">
            <input type="submit" class="button" name="c2f" value="Celcius to Fahrenheit">
        </form>

        <h3>
            <?php
            if (isset($_POST['f2c'])) {
                $val = $_POST['user_val'];
                $celsius = ($val - 32) * 5 / 9;
                echo "<h3>{$val}°C is equal to {$celsius}°F</h3>";
            }
            if (isset($_POST['c2f'])) {
                $val = $_POST['user_val'];
                $fahrenheit = ($val * 9 / 5) + 32;
                echo "<h3>{$val}°C is equal to {$fahrenheit}°F</h3>";
            }
            ?>
        </h3>
    </div>
</body>

</html>