<?php
$pembayaran = $data['pembayaran'];
?>

<div class="container mt-5 mb-5 pb-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="<?= URL ?>">kembali</a></li>
        </ol>
    </nav>

    <div class="card p-3">
        <div class="text-center">
            <h4 class="text-coral">Status</h4>
            <h2><?= $data['status'] ?></h2>
        </div>
        <hr>
        <div class="container text-center">
            <p>No Transaksi</p>
            <p><b><?= $pembayaran['no_transaksi'] ?></b></p>
            <p>Tanggal Transaksi</p>
            <p><b><?= $pembayaran['tanggal_transaksi'] ?></b></p>
            <br>
        </div>
        <div class="container text-center">
            Nomor Virtual Account
            <h4 class="text-gold"><?= $data['va'] ?></h4>
            <br>
        </div>
        <div class="container text-center">
            <p>Jenis Transaksi</p>
            <p><b><?= $data['jenis_tr']['jenis'] ?>
                <?php if($pembayaran['keterangan'] != ''): ?>
                    (<?= $pembayaran['keterangan'] ?>)
                <?php endif;?>
                </b></p>
            <p>Total Bayar</p>
            <p><b>Rp. <?= Generate::rupiah($data['total_biaya']) ?></b></p>
            <br>
        </div>
        <div class="container">
            <h5>Bantuan</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Cara Pembayaran
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ol>
                                <li>Masukan ke mobile bankink atau sejenisny</li>
                                <li>Pilih menu <b>TRANSAKSI LAINNYA > TRANSFER > KE REKENING VIRTUAL ACCOUNT</b></li>
                                <li>Masukan <b><?= $data['va'] ?></b> sebagai rekening tujuan</li>
                                <li>Ikuti instruksi ntuk menyelesaikan transaksi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>