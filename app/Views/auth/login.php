<?= $this->extend('layouts/guest') ?>

<?= $this->section('content') ?>
<form action="login" method="POST">

    <h3 class="mb-4 fw-semibold"><?= $title ?></h3>

    <?= view('components/input-email', ['id' => 'email', 'name' => 'email', 'label' => 'Email']); ?>
    <?= view('components/input-password', ['id' => 'password', 'name' => 'password', 'label' => 'Password']); ?>
    <?= view('components/button-primary', ['content' => 'Submit']); ?>

</form>
<?= $this->endSection() ?>