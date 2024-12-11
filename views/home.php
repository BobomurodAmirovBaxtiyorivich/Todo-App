<?php

require "views/components/header.php";
?>
<div class="container">
    <?php

    require "views/components/navbar.php";
    ?>
    <div class="row mt-5">
        <div class="col-8">
            <img src="https://t3.ftcdn.net/jpg/02/59/31/70/360_F_259317013_nJJaBgGGzvXMd6cAyLd6yMJtbdnd61wk.jpg"
                class="img-fluid main-img" alt="...">
        </div>
        <div class="col-4 main-info">
            <ul class="no-bullets">
                <li>
                    <p class="main-p">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </li>
                <li>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quos accusantium. Laborum officiis quasi vel sit possimus ipsa temporibus quia ipsum earum atque eaque, cum excepturi et iusto hic alias.</p>
                </li>
                <li><a href="/register" class="btn btn-primary main-sign-up">Sign up</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<?php

require "views/components/footer.php";
?>