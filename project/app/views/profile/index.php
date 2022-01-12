<?php ?>
<div class="container mt-5 ps-5 pe-5">

    <div class="card border-info mb-3" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-4 mt-4">
      <img src="<?= PUBLIC_URL ?>/images/mahasiswa/<?= $data['user']['foto'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $data['user']['nama'] ?></h5>
        <p class="card-text"><?= $data['user']['npm'] ?></p>
        <p class="card-text"><?= $data['user']['jurusan'] ?></p>
        <p class="card-text"><?= $data['user']['email'] ?></p>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="<?= URL ?>">kembali</a></li>
        </ol>
    </nav>
      </div>
    </div>
  </div>
</div>
   
</div>