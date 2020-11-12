<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container py-5">
    <form action="/drama/writer/save" method="post" class="row g-3">
        <?= csrf_field(); ?>
        <div class="col-4">
            <img class="img-thumbnail mb-3 img-preview" src="/img/drama/<?= $dramaDetail['cover']; ?>" width="100%">
            <div class="form-file">
                <input type="file" class="form-file-input" id="dramaCover" name="drama-cover" onchange="previewImage()" disabled>
                <label class="form-file-label" for="dramaCover">
                    <span class="form-file-text"><?= $dramaDetail['cover']; ?></span>
                    <span class="form-file-button">Browse</span>
                </label>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h4 class="mb-4 display-6">Add writer to drama <?= $dramaDetail['primary_title']; ?></h4>
                    <input type="hidden" name="drama-id" value="<?= $dramaDetail['id_drama']; ?>">
                    <input type="hidden" name="slug" value="<?= $dramaDetail['slug']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writerSuggest" class="form-label">Writer</label>
                        <input class="form-control" list="writerSuggest" placeholder="Type to search writer..." id="writerInput">
                        <datalist id="writerSuggest">
                            <?php foreach ($writerList as $wL) : ?>
                                <option data-value="<?= $wL['id_writer']; ?>"><?= $wL['writer_name']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                        <input type="hidden" name="writer-select" id="writerInput-hidden">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writerType" class="form-label">Writer Type</label>
                        <select class="form-select" id="writerType" name="writer-type">
                            <option disabled selected>Choose writer type...</option>
                            <option value="Screen Writer">Screen Writer</option>
                            <option value="Webtoon Author">Webtoon Author</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Add Drama</button>
                    </div>
                </div>
            </div>
    </form>
</div>
<?= $this->endSection(); ?>