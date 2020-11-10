<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container-fluid bg-dark overflow-hidden p-0">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/drama/<?= $dramaDetail['cover']; ?>" width="100%" style="object-fit: cover;">
        </div>
        <div class="col-md-6 px-3 py-2">
            <div class="mr-md-3 pt-3 px-3 pt-md-2 px-md-3 text-white text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-2"><?= $dramaDetail['primary_title']; ?></h2>
                    <p><?= $dramaDetail['secondary_title']; ?></p>
                    <p class="lead m-0"><?= $dramaDetail['hangeul']; ?></p>
                    <p>(<?= $dramaDetail['rev_romanization']; ?>)</p>
                    <p class="lead">Director: Asdasd | Writer: asdsd, sdad</p>
                    <a href="/drama/edit-drama/<?= $dramaDetail['slug']; ?>" class="btn btn-sm btn-outline-light">Edit Drama Detail</a>
                    <form action="/drama/<?= $dramaDetail['id_drama']; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger">Delete Drama</button>
                    </form>
                </div>
            </div>
            <div class="px-5">
                <div class="row text-white">
                    <div class="col-auto">
                        <h5 class="display-5">
                            Cast
                        </h5>
                    </div>
                    <div class="col my-auto">
                        <a href="/drama/add-cast/<?= $dramaDetail['slug']; ?>" class="btn btn-sm btn-outline-light">Add Cast</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row row-cols-xxl-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 text-center">
                            <?php foreach ($cast as $c) : ?>
                                <div class="col">
                                    <div class="mb-4">
                                        <div class="card" style="width: 130px;">
                                            <img src="/img/cast/<?= $c['cover']; ?>" class="card-img-top">
                                            <div class="card-body p-1">
                                                <h6 class="card-title"><?= $c['actor_name']; ?></h6>
                                                <p class="card-text"><?= $c['cast_as']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>