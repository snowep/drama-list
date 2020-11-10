<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container py-5">
    <form action="/drama/save" method="post" enctype="multipart/form-data" class="row g-3">
        <?= csrf_field(); ?>
        <div class="col-4">
            <img class="img-thumbnail mb-3 img-preview" src="/img/notfound.png" width="100%">
            <div class="form-file">
                <input type="file" class="form-file-input" id="dramaCover" name="drama-cover" onchange="previewImage()">
                <label class="form-file-label" for="dramaCover">
                    <span class="form-file-text">Choose cover image...</span>
                    <span class="form-file-button">Browse</span>
                </label>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h4 class="mb-4">Drama Info</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaTitleEn" class="form-label">Title</label>
                        <input type="text" class="form-control" id="dramaTitleEn" name="drama-title">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaTitleLit" class="form-label">Literal Title</label>
                        <input type="text" class="form-control" id="dramaTitleLit" name="drama-title-lit">
                        <div id="dramaTitleLit" class="form-text">
                            The literal title can be left blank.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaHangeul" class="form-label">Hangeul</label>
                        <input type="text" class="form-control" id="dramaHangeul" name="drama-hangeul">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaRoman" class="form-label">Romanization Revised</label>
                        <input type="text" class="form-control" id="dramaRoman" name="drama-romanization">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="directorSuggest" class="form-label">Director</label>
                        <input class="form-control" list="directorSuggest" placeholder="Type to search director..." id="directorInput">
                        <datalist id="directorSuggest">
                            <?php foreach ($directorList as $dL) : ?>
                                <option data-value="<?= $dL['id_director']; ?>"><?= $dL['director_name']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                        <div class="form-text">
                            Director not found? <a href="">Add Director.</a>
                        </div>
                        <input type="hidden" name="director-select" id="directorInput-hidden">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writerSuggest" class="form-label">Writer</label>
                        <input class="form-control" list="writerSuggest" placeholder="Writer" id="writerInput" disabled>
                        <div class="form-text">
                            You can add writer later.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="networkSuggest" class="form-label">Network</label>
                        <input class="form-control" list="networkSuggest" placeholder="Type to search network..." id="networkInput">
                        <datalist id="networkSuggest">
                            <?php foreach ($networkList as $nL) : ?>
                                <option data-value="<?= $nL['id_network']; ?>"><?= $nL['company_name']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                        <div class="form-text">
                            Network not found? <a href="">Add Network.</a>
                        </div>
                        <input type="hidden" name="network-select" id="networkInput-hidden">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaEpisode" class="form-label">Episode</label>
                        <input type="number" class="form-control" id="dramaEpisode" name="drama-episode">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="countrySuggest" class="form-label">Country</label>
                        <input class="form-control" list="countrySuggest" placeholder="Type to search country..." id="countryInput">
                        <datalist id="countrySuggest">
                            <?php foreach ($countryList as $cL) : ?>
                                <option data-value="<?= $cL['id_country']; ?>"><?= $cL['country']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                        <input type="hidden" name="country-select" id="countryInput-hidden">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="languageSuggest" class="form-label">Language</label>
                        <input class="form-control" list="languageSuggest" placeholder="Type to search language..." id="languageInput">
                        <datalist id="languageSuggest">
                            <<?php foreach ($languageList as $lL) : ?> <option data-value="<?= $lL['id_language']; ?>"><?= $lL['language']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                        <input type="hidden" name="language-select" id="languageInput-hidden">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="dramaSynopsis" class="form-label">Synopsis</label>
                        <textarea class="form-control" id="dramaSynopsis" rows="5" name="drama-synopsis"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="my-4">Release Info</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaBegin" class="form-label">First Episode</label>
                        <input type="date" name="drama-Begin" id="dramaBegin" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dramaEnd" class="form-label">Last Episode</label>
                        <input type="date" name="drama-End" id="dramaEnd" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="my-4">Broadcast Info</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="oddEpisodeSuggest" class="form-label">Odd Episode</label>
                        <input class="form-control" list="oddEpisodeSuggest" placeholder="Type to search oddEpisode..." id="oddEpisodeInput">
                        <datalist id="oddEpisodeSuggest">
                            <option value="Mon">Monday</option>
                            <option value="Tue">Tuesday</option>
                            <option value="Wed">Wednesday</option>
                            <option value="Thu">Thursday</option>
                            <option value="Fri">Friday</option>
                            <option value="Sat">Saturday</option>
                            <option value="Sun">Sunday</option>
                        </datalist>
                        <input type="hidden" name="oddEpisode-select" id="oddEpisodeInput-hidden">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="evenEpisodeSuggest" class="form-label">Even Episode</label>
                        <input class="form-control" list="evenEpisodeSuggest" placeholder="Type to search even episode..." id="evenEpisodeInput">
                        <datalist id="evenEpisodeSuggest">
                            <option value="Mon">Monday</option>
                            <option value="Tue">Tuesday</option>
                            <option value="Wed">Wednesday</option>
                            <option value="Thu">Thursday</option>
                            <option value="Fri">Friday</option>
                            <option value="Sat">Saturday</option>
                            <option value="Sun">Sunday</option>
                        </datalist>
                        <input type="hidden" name="evenEpisode-select" id="evenEpisodeInput-hidden">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="bcTime" class="form-label">Broadcast Time</label>
                        <input type="time" name="broadcast-time" id="bcTime" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-block">Add Drama</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>