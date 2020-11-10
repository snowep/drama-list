<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5 ">
    <div class="text-center">
        <h1 class="display-5">Hello There</h1>
        <p class="lead">You are on the <span class="font-monospace"><?= $breadcrumb; ?></span> page</p>
    </div>
</div>
<div class="container pt-5">
    <form action="/person/actor/save-actor" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row">
            <div class="col-3">
                <img class="img-thumbnail mb-3 img-preview" src="/img/notfound.png" width="100%">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="dramaCover" name="actor-cover" onchange="previewImage()">
                    <label class="form-file-label" for="actorCover">
                        <span class="form-file-text">Actor Picture...</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
            <div class="col">
                <h4 class="mb-3">Actor Info</h4>
                <div class="mb-3">
                    <label for="actorName" class="form-label">Name</label>
                    <input type="text" class="form-control<?= ($validator->hasError('actor-name')) ? ' is-invalid' : ''; ?>" id="actorName" name="actor-name">
                </div>
                <div class="mb-3">
                    <label for="actorBirthName" class="form-label">Birth Name</label>
                    <input type="text" class="form-control" id="actorBirthName" name="actor-BirthName">
                    <div id="actorBirthName" class="form-text">
                        The birth name can be left blank.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="actorBorn" class="form-label">Born</label>
                    <input type="date" name="actor-Birthday" id="actorBorn" class="form-control<?= ($validator->hasError('actor-Birthday')) ? ' is-invalid' : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="actorHeight" class="form-label">Height</label>
                    <input type="number" name="actor-Height" id="actorHeight" class="form-control">
                    <div id="actorHeight" class="form-text">
                        The height can be left blank.
                    </div>
                </div>
                <!-- <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="idolCheck" value="false" onclick="check()">
                        <label class="form-check-label" for="idolCheck">Is he/she an idol?</label>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class="mb-3 invisible">-</h4>
                <div class="mb-3">
                    <label for="actorNameHangeul" class="form-label">Hangeul</label>
                    <input type="text" class="form-control<?= ($validator->hasError('actor-NameHangeul')) ? ' is-invalid' : ''; ?>" id="actorNameHangeul" name="actor-NameHangeul">
                </div>
                <div class="mb-3">
                    <label for="actorBirthNameHangeul" class="form-label">Birth Name Hangeul</label>
                    <input type="text" class="form-control" id="actorBirthNameHangeul" name="actor-BirthNameHangeul">
                    <div id="actorBirthNameHangeul" class="form-text">
                        The birth name hangeul can be left blank.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="actorGender" class="form-label">Gender</label>
                    <select class="form-select<?= ($validator->hasError('actor-Birthday')) ? ' is-invalid' : ''; ?>" name="actor-Gender" id="actorGender">
                        <option selected disabled>Select Gender...</option>
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="actorBloodType" class="form-label">Blood Type</label>
                    <select class="form-select" name="actor-BloodType" id="actorBloodType">
                        <option selected disabled>Select Blood Type...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                <!-- <div class="mb-3 d-none" id="idolGroup">
                    <label for="actorIdolGroup" class="form-label">Idol Group</label>
                    <select class="form-select" name="actor-IdolGroup" id="actorIdolGropu">
                        <option value="0" selected disabled>Select Idol Group...</option>
                        <option value="1">SNSD / Girl's Generation</option>
                        <option value="2">Miss A</option>
                        <option value="3">f(x)</option>
                        <option value="4">BlackPink</option>
                    </select>
                </div> -->
            </div>
        </div>
    </form>
</div>

<!-- <script>
    function check() {
        if (document.getElementById('idolCheck').checked == true) {
            document.getElementById('idolCheck').setAttribute('value', 'true');
            document.getElementById('idolGroup').classList.remove('d-none');
            console.log(document.getElementById('idolCheck').checked);
        } else {
            document.getElementById('idolCheck').setAttribute('value', 'false');
            document.getElementById('idolGroup').classList.add('d-none');
            console.log(document.getElementById('idolCheck').checked);
        }
    }
</script> -->
<?= $this->endSection(); ?>