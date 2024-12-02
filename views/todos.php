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

        a {
            text-decoration: none;
        }

        a:hover {
            color: gold;
        }

        .actions {
            width: 50%;
        }

        .status {
            width: 15%;
        }
        .log-in{
            margin-right: 5px;
        }
        .todos-app{
            font-weight: bolder;
        }
        .todos-list{
            font-weight: bolder;
        }
        .add-todos{
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary mt-4">
        <div class="container-fluid">
            <a class="navbar-brand todos-app" href="/">Todos app</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active todos-list" aria-current="page" href="/todos-list">Todos list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active add-todos" aria-current="page" href="/add-todos">Add todos</a>
                    </li>
                </ul>
                <a class="btn btn-outline-success log-in" href="/">Log in</a>
                <a class="btn btn-outline-success" href="/">Sing up</a>
            </div>
        </div>
    </nav>
    <div class="row d-flex justify-content-center">
        <div class="todo-body mt-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci blanditiis dicta ducimus error
                excepturi fugit ipsum itaque labore maiores nisi praesentium quia, ratione reiciendis rem rerum totam
                veniam
                vero?
            </p>
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
                /** @var TYPE_NAME $todos */

                foreach ($todos as $task) { ?>
                    <tr>
                        <?php
                        if ($task['status'] == 'completed') { ?>
                            <td class="strikethrough truncated"><a
                                        href="/full_title?title=<?= $task['title'] ?>"><?= $task['title'] ?></a></td>
                        <?php } else { ?>
                            <td class="truncated"><a
                                        href="/full_title?title=<?= $task['title'] ?>"><?= $task['title'] ?></a></td>
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
                                <a href="/pending?id=<?= $task['id'] ?>" type="button"
                                   class="btn btn-primary">Pending</a>
                                <a href="/delete?id=<?= $task['id'] ?>" type="button" class="btn btn-danger">Delete</a>
                            <?php } else {
                                ?>
                                <a href="/start?id=<?= $task['id'] ?>" type="button" class="btn btn-primary">Start</a>
                                <a href="/complete?id=<?= $task['id'] ?>" type="button" class="btn btn-success">Done</a>
                                <a href="/pending?id=<?= $task['id'] ?>" type="button"
                                   class="btn btn-primary">Pending</a>
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