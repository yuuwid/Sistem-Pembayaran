<?php
$user = $data['user'];
$month = $data['month'];
?>

<div class="container ps-5 pe-5">

    <div class="card p-3">
        <h3>Form Pembayaran</h3>
        <hr>

        <div>
            <form class="g-3" action="<?= URL ?>/pembayaran/securedpaymentbpp" method="POST">

                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="<?= $user['nama'] ?>" disabled>

                <label class="form-label mt-2">NPM</label>
                <input type="text" name="npm" class="form-control" value="<?= $user['npm'] ?>" disabled>

                <label class="form-label mt-2">Jurusan</label>
                <input type="text" class="form-control" value="<?= $user['jurusan'] ?>" disabled>

                <label for="inputKelas" class="form-label mt-2">Kelas</label>
                <select id="inputKelas" name="id_jenis" class="form-select">
                    <?php foreach ($data['jenis_pembayaran'] as $jenis) : ?>
                        <option value="<?= $jenis['id'] ?>"><?= $jenis['jenis'] ?>  ( Rp.<?= Generate::rupiah($jenis['biaya']) ?> )</option>
                    <?php endforeach; ?>
                </select>

                <label for="inputBulan" class="form-label mt-2">Bulan</label>
                <select id="inputBulan" name="keterangan" class="form-select">
                    <?php foreach ($month as $m) : ?>
                        <option value="<?= $m ?>"><?= $m ?></option>
                    <?php endforeach; ?>
                </select>

                <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
                <input type="hidden" name="npm" value="<?= $user['npm'] ?>">
                <input type="hidden" name="token" value="<?= $data['token'] ?>">

                <button type="submit" class="btn btn-midnight hover-gold mt-3 ms-auto">Bayar</button>
            </form>
        </div>
    </div>

</div>