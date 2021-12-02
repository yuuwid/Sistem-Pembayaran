<?php
$user = $data['user'];
$jenis_pembayaran = $data['jenis_pembayaran'];

?>

<div class="container ps-5 pe-5">

    <div class="card p-3">
        <h3>Form Pembayaran</h3>
        <hr>

        <div>
            <form class="g-3" action="<?= URL ?>/bayar" method="POST">

                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="<?= $user['nama'] ?>" disabled>

                <label class="form-label mt-2">NPM</label>
                <input type="text" name="npm" class="form-control" value="<?= $user['npm'] ?>" disabled>

                <label class="form-label mt-2">Jurusan</label>
                <input type="text" class="form-control" value="<?= $user['jurusan'] ?>" disabled>

                <label for="inputBulan" class="form-label mt-2">Keperluan</label>
                <select id="inputBulan" class="form-select">
                    <option selected id="null">Choose...</option>
                    <option id="her-reg">Her Registrasi</option>
                    <option id="praktikum">Praktikum</option>
                    <option id="lainnya">Lainnya</option>
                    
                </select>
                <input type="hidden" name="jenis" value="bpp">

                <button type="submit" class="btn btn-midnight hover-gold mt-3 ms-auto">Bayar</button>
            </form>
        </div>
    </div>

</div>