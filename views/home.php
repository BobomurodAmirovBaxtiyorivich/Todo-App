<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .todo-body {
            max-width: 800px;
            box-shadow: 0 0 5px 5px #635f5f;
        }

        .todo-text {
            font-weight: bold;
        }

        .info_table {
            border-radius: 15px;
        }

        .strikethrough {
            text-decoration: line-through;
            color: red;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        .truncated {
            border: 1px solid #ddd;
            padding: 8px;
            max-width: 150px; /* Maksimal kenglik */
            white-space: nowrap; /* Matnni bir qatorda saqlash */
            overflow: hidden; /* Chegaradan chiqmaslik uchun */
            text-overflow: ellipsis; /* "..." ni qo‘shadi */
        }
        a{
            text-decoration: none;
        }
        a:hover{
            color: gold;
        }
        .actions{
            width: 50%;
        }
        .status{
            width: 15%;
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
            <form action="/todos" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="task" placeholder="Task"
                           aria-label="Recipient's username" aria-describedby="button-addon2" required>
                    <input type="datetime-local" class="form-control" name="due_date" placeholder="Task"
                           aria-label="Recipient's username" aria-describedby="button-addon2" required>
                    <button class="btn btn-outline-primary" name="sub" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
            <table class="table table-primary info_table" border="1">
                <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Status</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /** @var TYPE_NAME $todos  */

                foreach ($todos as $task) { ?>
                    <tr>
                        <?php
                        if ($task['status'] == 'completed') { ?>
                            <td class="strikethrough truncated"><a href="/full_title?title=<?= $task['title'] ?>"><?= $task['title'] ?></a></td>
                        <?php } else { ?>
                            <td class="truncated"><a href="/full_title?title=<?= $task['title'] ?>"><?= $task['title'] ?></a></td>
                        <?php }
                        if ($task['status'] == 'in_progress') {
                            ?>
                            <td><?php $task['status'] = "in progress";
                                echo $task['status']; ?></td>
                        <?php } else {
                            ?>
                            <td class="status"><?= $task['status'] ?></td>
                        <?php }
                        ?>
                        <td><?= $task['due_date'] ?></td>
                        <td class="actions">
                            <?php
                            if ($task['status'] == 'completed') {
                                ?>
                                <a href="/pending?id=<?= $task['id'] ?>" type="button" class="btn btn-primary">Pending</a>
                                <a href="/delete?id=<?= $task['id'] ?>" type="button" class="btn btn-danger">Delete</a>
                            <?php } else {
                                ?>
                                <a href="/start?id=<?= $task['id'] ?>" type="button" class="btn btn-primary">Start</a>
                                <a href="/complete?id=<?= $task['id'] ?>" type="button" class="btn btn-success">Done</a>
                                <a href="/pending?id=<?= $task['id'] ?>" type="button" class="btn btn-primary">Pending</a>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <a href="/delete?id=<?= $task['id'] ?>" type="button" class="btn btn-danger">Delete</a>
                            <?php }
                            ?>
                        </td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>