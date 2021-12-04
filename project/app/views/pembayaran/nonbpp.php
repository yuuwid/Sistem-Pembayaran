<?php
$user = $data['user'];
$jenis_pembayaran = $data['jenis_pembayaran'];

?>

<div class="container ps-5 pe-5">

    <div class="card p-3">
        <h3>Form Pembayaran</h3>
        <hr>
        <div>
            <form class="g-3" action="<?= URL ?>/pembayaran/securedpaymentnonbpp" method="POST">

                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="<?= $user['nama'] ?>" disabled>

                <label class="form-label mt-2">NPM</label>
                <input type="text" class="form-control" value="<?= $user['npm'] ?>" disabled>

                <label class="form-label mt-2">Jurusan</label>
                <input type="text" class="form-control" value="<?= $user['jurusan'] ?>" disabled>

                <label for="inputKeperluan" class="form-label mt-2">Keperluan</label>
                <select id="inputKeperluan" name="id_jenis" class="form-select">
                    <?php foreach($jenis_pembayaran as $jenis): ?>
                        <?= $jenis['kode'] ?>
                        <option value="<?= $jenis['id'] ?>"><?= $jenis['jenis'] ?> ( Rp.<?= Generate::rupiah($jenis['biaya']) ?> )</option>
                    <?php endforeach;?>
                </select>
                <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
                <input type="hidden" name="npm" value="<?= $user['npm'] ?>">
                <input type="hidden" name="token" value="<?= $data['token'] ?>">

                <button type="submit" class="btn btn-midnight hover-gold mt-3 ms-auto">Bayar</button>
            </form>
        </div>
    </div>
</div>



</div>