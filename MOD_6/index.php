<?php
include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mod-6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .container.p-3 {
            background: #ebebeb;
            border-radius: 7px;
        }

        .tab-content>.tab-pane {
            padding-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container p-3 mt-3">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="task1-tab" data-bs-toggle="tab" data-bs-target="#task1-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Task 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="task2-tab" data-bs-toggle="tab" data-bs-target="#task2-tab-pane" type="button" role="tab" aria-controls="task2-tab-pane" aria-selected="false">Task 2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="task3-tab" data-bs-toggle="tab" data-bs-target="#task3-tab-pane" type="button" role="tab" aria-controls="task3-tab-pane" aria-selected="false">Task 3</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="task4-tab" data-bs-toggle="tab" data-bs-target="#task4-tab-pane" type="button" role="tab" aria-controls="task4-tab-pane" aria-selected="false">Task 4</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="task1-tab-pane" role="tabpanel" aria-labelledby="task1-tab" tabindex="0">

                <?php include 'tasks/task1.php' ?>


            </div>
            <div class="tab-pane fade" id="task2-tab-pane" role="tabpanel" aria-labelledby="task2-tab" tabindex="0">

                <?php include 'tasks/task2.php' ?>

            </div>
            <div class="tab-pane fade" id="task3-tab-pane" role="tabpanel" aria-labelledby="task3-tab" tabindex="0">

                <?php include 'tasks/task3.php' ?>

            </div>
            <div class="tab-pane fade" id="task4-tab-pane" role="tabpanel" aria-labelledby="task4-tab" tabindex="0">

                <?php include 'tasks/task4.php' ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>