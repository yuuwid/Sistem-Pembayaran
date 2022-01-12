<?php ?>

<div class="container ps-5 pe-5">
    <h3>Selamat Datang, <?= $data['user']['nama'] ?></h3>

    <table class="table">
        <tr>
            <td>NPM</td>
            <td><?= $data['user']['npm'] ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><?= $data['user']['jurusan'] ?></td>
        </tr>
        <tr>
            <td>Status BPP</td>
            <td><?= $data['user']['status_bpp'] ?></td>
        </tr>
    </table>


    </p>
</div>