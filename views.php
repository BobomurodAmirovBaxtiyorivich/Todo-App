<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .todo-body {
            max-width: 800px;
            box-shadow: 0 0 5px 5px #ccc;
        }

        .todo-text {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body mt-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci blanditiis dicta ducimus error
                excepturi fugit ipsum itaque labore maiores nisi praesentium quia, ratione reiciendis rem rerum totam
                veniam
                vero?
            </p>
            <form action="index.php" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="task" placeholder="Task"
                           aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" name="sub" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
            <div>
                <?php

                if (isset($_POST['sub'])) {
                    $task = $_POST['task'];
                }
                ?>
                <ul class="list-group">
                    <?php

                    if (!empty($task)) { ?>
                        <li class="list-group-item d-flex justify-content-between"><?= $task ?>
                            <button class="btn btn-outline-success">Done</button>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>