<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container pt-5">
    <form action="/drama/save-drama" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row">
            <div class="col-3">
                <img class="img-thumbnail mb-3 img-preview" src="/img/notfound.png" width="100%">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="dramaCover" name="drama-cover" onchange="previewImage()">
                    <label class="form-file-label" for="dramaCover">
                        <span class="form-file-text">Choose cover image...</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-3">Drama Info</h4>
                        <div class="mb-3">
                            <label for="dramaTitleEn" class="form-label">Title</label>
                            <input type="text" class="form-control<?= ($validator->hasError('drama-title')) ? ' is-invalid' : ''; ?>" id="dramaTitleEn" name="drama-title">
                            <div id="dramaTitleEn" class="<?= ($validator->hasError('drama-title')) ? 'invalid-feedback' : 'form-text'; ?>">
                                <?= ($validator->hasError('drama-title')) ? $validator->getError('drama-title') : 'Official Drama Title'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="dramaHangeul" class="form-label">Hangeul</label>
                    <input type="text" class="form-control<?= ($validator->hasError('drama-hangeul')) ? ' is-invalid' : ''; ?>" id="dramaHangeul" name="drama-hangeul">
                    <div id="dramaHangeul" class="<?= ($validator->hasError('drama-hangeul')) ? 'invalid-feedback' : 'form-text'; ?>">
                        <?= ($validator->hasError('drama-hangeul')) ? $validator->getError('drama-hangeul') : ''; ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class="mb-3" style="visibility: hidden;">-</h4>
                <div class="mb-3">
                    <label for="dramaTitleLit" class="form-label">Literal Title</label>
                    <input type="text" class="form-control" id="dramaTitleLit" name="drama-title-lit">
                    <div id="dramaTitleLit" class="form-text">
                        The literal title can be left blank.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="dramaRoman" class="form-label">Romanization Revised</label>
                    <input type="text" class="form-control<?= ($validator->hasError('drama-romanization')) ? ' is-invalid' : ''; ?>" id="dramaRoman" name="drama-romanization">
                    <div class="invalid-feedback">
                        <?= $validator->getError('drama-romanization'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-3"></div>
            <div class="col">
                <div class="mb-3">
                    <label for="dramaRoman" class="form-label">Romanization Revised</label>
                    <input type="text" class="form-control<?= ($validator->hasError('drama-romanization')) ? ' is-invalid' : ''; ?>" id="dramaRoman" name="drama-romanization">
                    <div class="invalid-feedback">
                        <?= $validator->getError('drama-romanization'); ?>
                    </div>
                </div>
            </div>
        </div> -->
    </form>
</div>
<?= $this->endSection(); ?>