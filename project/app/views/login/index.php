<?php ?>
<!-- Main Content -->
<div class="container-fluid d-flex justify-content-center">
    <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo">
                <img src="<?= PUBLIC_URL ?>/images/login.png" alt="">
            </span>

        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="mt-2">Log In</h2>
                </div>
                <div class="row">
                    <form class="form-group" method="post" action="<?= URL . "/login/auth" ?>">
                        <div class="row">
                            <input name="akun" type="text" class="form__input" id="identifyID" placeholder="NPM / Email" autofocus autocomplete="off" required>
                        </div>
                        <div class="row">
                            <!-- <span class="fa fa-lock"></span> -->
                            <input name="password" type="password" class="form__input" id="passwordID" placeholder="Password" required>
                        </div>
                        <div class="row">
                            <!-- <input type="submit" value="Submit" class="btn"> -->
                            <button class="btn">Masuk <i class="bi bi-caret-right-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>