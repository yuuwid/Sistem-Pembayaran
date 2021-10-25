<?php ?>

<div class="wrapper">

    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>Sistem Pembayaran Online</h4>
        </div>

        <ul class="list-unstyled components">
            <img src="<?= PUBLIC_URL ?>/images/mahasiswa/<?= $data['user']['foto'] ?>" class="border border-white border-rounded border-2" alt="" style="width: 92%; height: 375px; margin: 10px; margin-bottom: 20px;">

            <li>
                <a href="<?= URL ?>"><span class="bi bi-house"></span> Home</a>
            </li>
            <li>
                <a href="<?= URL ?>"><span class="bi bi-wallet2"></span> Pembayaran BPP</a>
            </li>
            <li>
                <a href="<?= URL ?>"><span class="bi bi-wallet"></span> Pembayaran Non-BPP</a>
            </li>
        </ul>

        <ul class="list-unstyled components">
            <li>
                <a href="<?= URL ?>/profile"><span class="bi bi-person"></span> Profile</a>
            </li>
            <li>
                <a href="<?= URL ?>"><span class="bi bi-hourglass-split"></span> Status Pembayaran</a>
            </li>
        </ul>
    </nav>

    <!-- Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-md navbar-dark login_c">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-light text-white">
                    <i class="fas fa-align-left"></i>
                    <span class="bi bi-list text-dark"></span>
                </button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>/home/logout">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>