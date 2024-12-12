<nav class="navbar navbar-expand-lg bg-body-tertiary mt-4">
    <div class="container-fluid">
        <a class="navbar-brand todos-app" href="/">Main</a>
        <?php
        if (isset($_SESSION['user'])): ?>
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
            </div>
        <?php else: ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/log_in">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="/register">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php endif;
        ?>
    </div>
</nav>