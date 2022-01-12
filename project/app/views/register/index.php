<?php ?>
<div class="p-4">
    <form action="<?= URL . "/login/hidden" ?>" method="POST">

        <input name="password" class="form-control" type="text">
        <button class="btn">Generate</button>
    </form>

    <?php if(isset($data['hash'])): ?>
        
        <p><?= $data['hash'] ?></p>
    
    <?php endif; ?>


</div>