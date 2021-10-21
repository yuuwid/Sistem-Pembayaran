<?php ?>

<nav class="navbar navbar-expand-md navbar-dark bg-midnight">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= PUBLIC_URL . "/images/logo.png" ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Pembayaran BPP / NON-BPP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/akun/status_pembayaran">Status Pembayaran</a>
                <a class="nav-link" href="https://sim.itats.ac.id/krs">Histori Pembayaran</a>
                <a class="nav-link" aria-current="page" href="<?= URL ?>/home/logout">Keluar</a>
            </div>

        </div>
    </div>
</nav>