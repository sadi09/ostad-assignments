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
        .task_three {
            background: gray;
        }

        h3 {
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Task 3: Grade Calculator</h1>
        <form method="post" action="">
            <input type="number" step="" name="test1" placeholder="Test 1 Marks" required>
            <input type="number" step="" name="test2" placeholder="Test 2 Marks" required>
            <input type="number" step="" name="test3" placeholder="Test 3 Marks" required>
            <input type="submit" class="button" name="cal_grade" value="Calculate Grade">
        </form>

        <h3>
            <?php
            if (isset($_POST['cal_grade'])) {
                $test1 = $_POST['test1'];
                $test2 = $_POST['test2'];
                $test3 = $_POST['test3'];

                $avg = ($test1 + $test2 + $test3) / 3;

                $grade = "N/A";

                if ($avg < 60) {
                    $grade = "F";
                } elseif (60 <= $avg && $avg < 70) {
                    $grade = "D";
                } elseif (70 <= $avg && $avg < 80) {
                    $grade = "C";
                } elseif (80 <= $avg && $avg < 90) {
                    $grade = "B";
                } else {
                    $grade = "A";
                }

                echo "<h3>Test 1 Mark: {$test1}</h3>";
                echo "<h3>Test 2 Mark: {$test2}</h3>";
                echo "<h3>Test 3 Mark: {$test3}</h3>";
                echo "<h3>Avg. Mark: {$avg}</h3>";
                echo "<h3>Grade: {$grade}</h3>";
            }

            ?>
        </h3>
    </div>
</body>

</html>