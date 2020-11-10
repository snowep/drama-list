<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container">
    <div class="row mb-3">
        <div class="col text-center">
            <h2 class="display-6 text-right">Actor</h2>
        </div>
        <div class="col-auto my-auto">
            <a href="/person/actor/add" class="btn btn-dark btn-sm" style="line-height:0; border: 0">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill my-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="font-size: 1.5rem; ">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </a>
        </div>
        <div class="col my-auto">
            <a href="/person/actor" class="btn btn-link">view more...</a>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-center">
        <?php foreach ($actorList as $aL) : ?>
            <div class="col mb-4">
                <div class="card text-white" style="width: 12rem;">
                    <img src="/img/actor/<?= $aL['cover']; ?>" class="card-img-top rounded" style="object-fit: cover;">
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
    <!-- ---- Divider ---- -->
    <div class="row mb-3">
        <div class="col text-center">
            <h2 class="display-6 text-right">Director</h2>
        </div>
        <div class="col-auto my-auto">
            <a href="/drama/" class="btn btn-outline-dark align-middle">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                </svg>
            </a>
        </div>
        <div class="col my-auto">
            <a href="">view more...</a>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-center">
        <?php foreach ($actorList as $aL) : ?>
            <div class="col mb-4">
                <div class="card text-white" style="width: 12rem;">
                    <img src="/img/actor/<?= $aL['cover']; ?>" class="card-img-top rounded" style="object-fit: cover;">
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
    <!-- ---- Divider ---- -->
    <div class="row mb-3">
        <div class="col text-center">
            <h2 class="display-6 text-right">Producer</h2>
        </div>
        <div class="col-auto my-auto">
            <a href="/drama/" class="btn btn-outline-dark align-middle">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                </svg>
            </a>
        </div>
        <div class="col my-auto">
            <a href="">view more...</a>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-center">
        <?php foreach ($actorList as $aL) : ?>
            <div class="col mb-4">
                <div class="card text-white" style="width: 12rem;">
                    <img src="/img/actor/<?= $aL['cover']; ?>" class="card-img-top rounded" style="object-fit: cover;">
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
    <!-- ---- Divider ---- -->
    <div class="row mb-3">
        <div class="col text-center">
            <h2 class="display-6 text-right">Writer</h2>
        </div>
        <div class="col-auto my-auto">
            <a href="/drama/" class="btn btn-outline-dark align-middle">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                </svg>
            </a>
        </div>
        <div class="col my-auto">
            <a href="">view more...</a>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-center">
        <?php foreach ($actorList as $aL) : ?>
            <div class="col mb-4">
                <div class="card text-white" style="width: 12rem;">
                    <img src="/img/actor/<?= $aL['cover']; ?>" class="card-img-top rounded" style="object-fit: cover;">
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
    <!-- ---- Divider ---- -->
    <div class="row mb-3">
        <div class="col text-center">
            <h2 class="display-6 text-right">Cinematographer</h2>
        </div>
        <div class="col-auto my-auto">
            <a href="/drama/" class="btn btn-outline-dark align-middle">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                </svg>
            </a>
        </div>
        <div class="col my-auto">
            <a href="">view more...</a>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-center">
        <?php foreach ($actorList as $aL) : ?>
            <div class="col mb-4">
                <div class="card text-white" style="width: 12rem;">
                    <img src="/img/actor/<?= $aL['cover']; ?>" class="card-img-top rounded" style="object-fit: cover;">
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
<?= $this->endSection(); ?>