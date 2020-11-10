<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid bg-dark text-white">
    <div class="container pt-5 ">
        <div class="text-center">
            <h1 class="display-5">Hello There</h1>
            <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>

            <a href="/person/actor/add-actor" class="btn btn-outline-light">New Actor</a>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row row-cols-6">
            <?php foreach ($actorList as $aL) : ?>
                <div class="col mb-4">
                    <div class="card text-white" style="width: 100%;height: 100%; min-height: 350px">
                        <img src="/img/actor/<?= $aL['cover']; ?>" class="card-img-top rounded" style=" height: 100%;width: 100%; object-fit: cover;">
                        <div class="overlay-top-card"></div>
                        <div class="card-img-overlay">
                            <div class="card-body position-absolute bottom-0 left-0">
                                <h5 class="card-title"><?= $aL['actor_name']; ?></h5>
                                <p><?= $aL['actor_nameHangeul']; ?></p>
                                <a href="/drama/" class="btn btn-sm btn-outline-light">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>