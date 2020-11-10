<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid bg-dark text-white m-auto">
    <div class="container pt-5 ">
        <div class="text-center">
            <h1 class="display-5">Hello There</h1>
            <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>

            <a href="/drama/add" class="btn btn-outline-light">New Drama</a>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row row-cols-4">
            <?php foreach ($dramaList as $dL) : ?>
                <div class="col mb-4">
                    <div class="card text-white" style="width: 100%;height: 100%;">
                        <img src="/img/drama/<?= $dL['cover']; ?>" class="card-img-top rounded" style=" height: 100%;width: 100%;">
                        <div class="overlay-top-card"></div>
                        <div class="card-img-overlay">
                            <div class="card-body position-absolute bottom-0 left-0">
                                <h5 class="card-title"><?= $dL['primary_title']; ?></h5>
                                <p><?= $dL['hangeul']; ?></p>
                                <a href="/drama/<?= $dL['slug']; ?>" class="btn btn-sm btn-outline-light">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>