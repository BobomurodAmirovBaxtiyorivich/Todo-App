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

        table {
            border-collapse: collapse;
            width: 100%;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: gold;
        }

        .log-in {
            margin-right: 5px;
        }

        .todos-app {
            font-weight: bolder;
        }

        .todos-list {
            font-weight: bolder;
        }

        .add-todos {
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
            <form action="/add-todos" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="task" placeholder="Task"
                           aria-label="Recipient's username" aria-describedby="button-addon2" required>
                    <input type="datetime-local" class="form-control" name="due_date" placeholder="Task"
                           aria-label="Recipient's username" aria-describedby="button-addon2" required>
                    <button class="btn btn-outline-primary" name="sub" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>