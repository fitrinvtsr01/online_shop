<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Hello</h1>
<h4>
    <?= session()->get('username') ?>
</h4>
<?= $this->endSection() ?>