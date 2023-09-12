<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5: Weather Report</title>
</head>

<body>
    <?php
    require('task_list.php')
    ?>
    <style>
        .task_five {
            background: gray;
        }

        h3 {
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Task 5: Weather Report</h1>
        <form method="post" action="">
            <input type="number" step="" name="temperature" placeholder="What's the Temperature" required>

            <label>
                <input type="radio" name="temp_unit" value="C" checked>
                °C
            </label>

            <label>
                <input type="radio" name="temp_unit" value="F">
                °F
            </label>
            <input type="submit" class="button" name="wether_report" value="Wether Report">
        </form>

        <h3>
            <?php
            if (isset($_POST['wether_report'])) {
                $temperature = $_POST['temperature'];
                $temp_unit = $_POST['temp_unit'];

                $temperature = ($temp_unit == 'C' ? $temperature : (($temperature - 32) * 5 / 9));

                if ($temperature < 0) {
                    echo "<h3>It's freezing cold!</h3>";
                } elseif ($temperature >= 0 && $temperature < 10) {
                    echo "<h3>It's cold outside.</h3>";
                } elseif ($temperature >= 10 && $temperature < 20) {
                    echo "<h3>It's cool and comfortable.</h3>";
                } elseif ($temperature >= 20 && $temperature < 30) {
                    echo "<h3>It's warm and pleasant.</h3>";
                } else {
                    echo "<h3>It's hot!</h3>";
                }
            }

            ?>
        </h3>
    </div>
</body>

</html>