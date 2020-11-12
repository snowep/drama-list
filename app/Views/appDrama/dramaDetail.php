<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-md-3 text-center bg-ligth">
    <div class="row">
        <div class="col-md-7 p-3 mx-auto my-3">
            <h1 class="display-4 font-weight-normal"><?= $dramaDetail['primary_title']; ?></h1>
            <h6 class="lead"><small><?= $dramaDetail['secondary_title']; ?></small></h6>
            <h6 class="lead"><?= $dramaDetail['hangeul']; ?> | <?= $dramaDetail['rev_romanization']; ?></h6>
        </div>
    </div>
</div>
<div class="container-fluid overflow-hidden p-0 bg-dark text-white">
    <div class="container">
        <div class="row pt-5 g-3">
            <div class="col-3 text-center">
                <img src="/img/drama/<?= $dramaDetail['cover']; ?>" width="100%" class="pr-3 py-3 rounded">
            </div>
            <div class="col-5">
                <div class="row py-3 align-middle">
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Director</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto"><?= $dramaDetail['director_name']; ?></h5>
                    </div>
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Writer</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto">
                            <?php
                            $i = 1;
                            foreach ($writerList as $wL) {
                                echo $wL['writer_name'];
                                if ($i < (int)$writerCount['rowCount']) {
                                    echo ', ';
                                };
                                $i++;
                            } ?>
                        </h5>
                    </div>
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Network</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto"><?= $dramaDetail['company_name']; ?></h5>
                    </div>
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Release Date</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto"><?= date('j M, Y', strtotime($dramaDetail['release_date'])) . " - " . date('j M, Y', strtotime($dramaDetail['end_date'])); ?></h5>
                    </div>
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Runtime</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto"><?= $dramaDetail['odd_ep'] . ". & " . $dramaDetail['even_ep'] . ". " . date('H:i', strtotime($dramaDetail['broadcast_time'])); ?></h5>
                    </div>
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Language</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto"><?= $dramaDetail['language']; ?></h5>
                    </div>
                    <div class="col-4 my-auto">
                        <h5 class="my-2">Country</h5>
                    </div>
                    <div class="col-8 my-auto">
                        <h5 class="font-weight-light m-auto"><?= $dramaDetail['country']; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <!-- <?php //foreach ($cast as $c) : 
                        ?> -->
                <div class="col">
                    <div class="mb-4">
                        <div class="card" style="width: 130px;">
                            <img src="/img/cast/<?//= //$c['cover']; ?>" class="card-img-top">
                            <div class="card-body p-1">
                                <h6 class="card-title">
                                    <?//= //$c['actor_name']; ?>
                                </h6>
                                <p class="card-text">
                                    <?//= //$c['cast_as']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php //endforeach; 
                ?>
            </div>
            <div class="col-12">
                <div class="row">
                    <h4 class="display-4">Synopsis</h4>
                </div>
                <div class="col-8">
                    <p class="lead"><?= $dramaDetail['synopsis']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>