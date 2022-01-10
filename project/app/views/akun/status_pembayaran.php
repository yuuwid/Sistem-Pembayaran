<?php

?>

<div class="container ps-5 pe-5 mt-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="<?= URL ?>">kembali</a></li>
        </ol>
    </nav>

    <h5>Status Pembayaran</h5>
    <table class="table table-hover">
        <thead>
            <tr class="bg-skyblue">
                <th scope="col">No Transaksi</th>
                <th scope="col">Total Bayar</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['transaksi'] as $transaksi) : ?>
                <tr>
                    <td scope="row"><?= $transaksi['no_transaksi'] ?></td>
                    <td scope="row">Rp. <?= Generate::rupiah($transaksi['total_biaya']) ?></td>
                    <td scope="row"><?= $data['jenis_transaksi'][$i - 1] ?></td>
                    <td scope="row"><?= Generate::statusClean($transaksi['status']) ?></td>
                    <td scope="row">
                        <a class="btn btn-danger" href="#" role="button" title="Batalkan"><i class="bi bi-x"></i></a>
                        <a class="btn btn-spring" href="<?= URL ?>/pembayaran/transaksi/<?= $transaksi['no_transaksi'] ?>" role="button"><i class="bi bi-info" title="Info"></i></a>
                    </td>
                </tr>
                <?php $i += 1; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>