<?php if($session->has('success')):?>
    <div class=" fs-5 alert alert-success text-center">
        <?= $session->get('success');?>
    </div>
<?php endif; $session->remove('success')?>    