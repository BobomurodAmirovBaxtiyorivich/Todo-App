<?php

require "views/components/header.php"
?>
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
                        <li class="nav-item">
                            <a class="nav-link active add-todos" aria-current="page" href="/telegram">Telegram bot</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-success log-in" href="/">Log in</a>
                    <a class="btn btn-outline-success" href="/">Sing up</a>
                </div>
            </div>
        </nav>
        <div class="row d-flex justify-content-center">
            <div class="todo-body mt-5 p-3">
                <form action="/send_message" method="POST">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="chat_id" placeholder="Chat id"
                               aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-primary" name="sub" type="submit" id="button-addon2">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
<?php
require "views/components/footer.php";

?>