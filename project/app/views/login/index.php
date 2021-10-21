<?php ?>
<div class="container mt-5">

    <div class="card p-3 pt-5 pb-5">

        <?= Flasher::showndrop("login_error") ?>

        <h1 class="text-center fw-bold">LOGIN</h1>

        <form class="container" method="post" action="<?= URL . "/login/auth" ?>">
            <div class="mb-3">
                <label for="identifyID" class="form-label"><b><u>NPM</u> / Email</b></label>
                <input name="akun" type="text" class="form-control" id="identifyID" autofocus autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="passwordID" class="form-label"><b>Password</b></label>
                <input name="password" type="password" class="form-control" id="passwordID" required>
            </div>

            <div class="text-end">
                <button class="btn btn-midnight">Masuk <i class="bi bi-caret-right-fill"></i></button>
            </div>
        </form>


    </div>

</div>