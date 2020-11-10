<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container pt-5">
    <form action="/drama/save-cast/<?= $getDrama['slug']; ?>" method="post" enctype="multipart/form-data" class="row g-3">
        <?= csrf_field(); ?>
        <div class="col-4">
            <img class="img-thumbnail mb-3 img-preview" src="/img/notfound.png" width="100%">
            <div class="form-file">
                <input type="file" class="form-file-input" id="dramaCover" name="cast-cover" onchange="previewImage()">
                <label class="form-file-label" for="castCover">
                    <span class="form-file-text">Choose cover image...</span>
                    <span class="form-file-button">Browse</span>
                </label>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h4 class="mb-4">Cast Info</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaTitle" class="form-label">Drama Title</label>
                        <input type="hidden" class="form-control" id="dramaID" name="drama-id" value="<?= $getDrama['id_drama']; ?>" readonly>
                        <input type="hidden" class="form-control" id="dramaSlug" name="drama-slug" value="<?= $getDrama['slug']; ?>" readonly>
                        <input type="text" class="form-control" id="dramaTitle" name="drama-title" value="<?= $getDrama['primary_title']; ?>" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="actorSuggest" class="form-label">Actor / Actress</label>
                        <input class="form-control" list="actorSuggest" placeholder="Type to search actor/actress..." id="actorInput">
                        <datalist id="actorSuggest">
                            <?php foreach ($actor as $act) : ?>
                                <option data-value="<?= $act['id_actor']; ?>"><?= $act['actor_name']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                        <input type="hidden" name="actor-select" id="actorInput-hidden">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="actorCast" class="form-label">Played As</label>
                        <input type="text" class="form-control" id="actorCast" name="actor-cast">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaActorRole" class="form-label">Role</label>
                        <select class="form-select" name="drama-ActorRole" id="dramaActorRole">
                            <option selected disabled>Select Role</option>
                            <option value="Main">Main Role</option>
                            <option value="Support">Support Role</option>
                            <option value="Guest">Guest Role</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-block btn-success">Add Cast</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>