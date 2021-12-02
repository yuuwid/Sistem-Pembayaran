<?php
$user = $data['user'];
$month = Date::rangeMonth(6);
?>

<div class="container ps-5 pe-5">

    <div class="card p-3">
        <h3>Form Pembayaran</h3>
        <hr>

        <div>
            <form class="g-3">

                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="<?= $user['nama'] ?>" disabled>

                <label class="form-label mt-2">NPM</label>
                <input type="text" name="npm" class="form-control" value="<?= $user['npm'] ?>" disabled>

                <label class="form-label mt-2">Jurusan</label>
                <input type="text" class="form-control" value="<?= $user['jurusan'] ?>" disabled>

                <label for="inputBulan" class="form-label mt-2">Bulan</label>
                <select id="inputBulan" class="form-select">
                    <option selected id="null">Choose...</option>
                    <?php foreach ($month as $m) : ?>
                        <option id="<?= Generate::slugify($m) ?>"><?= $m ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="npm" value="<?= $user['npm'] ?>">
            </form>
        </div>
    </div>

</div>