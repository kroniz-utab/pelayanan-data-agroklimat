<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-3">
                <div class="card-body">
                    <form action="/input/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <h3 class="mb-3">Input Data Agroklimat</h3>
                            <div class="col">
                                <h5 class="fs-6">Stasiun</h5>
                                <input type="text" class="form-control" value="<?= $name; ?>" disabled>
                                <input type="hidden" class="form-control" value="<?= $stas; ?>" name="staid">
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Periode</h5>
                                <input type="text" class="form-control" value="<?= $proman; ?>" disabled>
                                <input type="hidden" class="form-control" value="<?= $period; ?>" name="period">
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Minggu</h5>
                                <input type="text" class="form-control" value="<?= $minggu; ?>" disabled>
                                <input type="hidden" class="form-control" value="<?= $minggu; ?>" name="minggu">
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Tanggal</h5>
                                <input type="text" class="form-control" value="<?= $tanggal; ?>" disabled>
                                <input type="hidden" class="form-control" value="<?= $tanggal; ?>" name="tanggal">
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Jam Peng.</h5>
                                <input type="text" class="form-control" value="<?= $jampeng; ?>" disabled>
                                <input type="hidden" class="form-control" value="<?= $jampeng; ?>" name="jampeng">
                            </div>
                        </div>
                        <div class="form-group row mt-5 mb-3">
                            <h5 class="fs-6 text-center mb-3"><strong>Temperatur</strong></h5>
                            <div class="col">
                                <input type="text" class="form-control <?= ($validation->hasError('bk')) ? 'is-invalid' : ''; ?>" name="bk" placeholder="Bola Kering">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control <?= ($validation->hasError('bb')) ? 'is-invalid' : ''; ?>" name="bb" placeholder="Bola Basah">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control <?= ($validation->hasError('tl')) ? 'is-invalid' : ''; ?>" name="tl" placeholder="<?= $tl; ?>">
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <h5 class="fs-6 text-center mb-3"><strong>Angin</strong></h5>
                            <div class="col">
                                <input type="text" class="form-control <?= ($validation->hasError('wd')) ? 'is-invalid' : ''; ?>" name="wd" placeholder="Arah Angin">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control <?= ($validation->hasError('ws')) ? 'is-invalid' : ''; ?>" name="ws" placeholder="Kecepatan Angin">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="wsr" placeholder="Kecepatan Angin Rerata <?= ($jpeng == 1) ? '31' : (($jpeng == 2) ? '12' : '23'); ?>"">
                            </div>
                        </div>
                        <div class=" form-group row my-3">
                                <div class="col">
                                    <h5 class="fs-6 text-center mb-3"><strong>Lembab Nisbi</strong></h5>
                                    <input type="text" class="form-control <?= ($validation->hasError('ln')) ? 'is-invalid' : ''; ?>" name="ln" placeholder="Lembab Nisbi">
                                </div>
                                <div class="col">
                                    <h5 class="fs-6 text-center mb-3"><strong><?= $ext1; ?></strong></h5>
                                    <input type="text" class="form-control <?= ($validation->hasError('ext1')) ? 'is-invalid' : ''; ?>" name="ext1" placeholder="<?= $ext1; ?>">
                                </div>
                                <div class="col">
                                    <h5 class="fs-6 text-center mb-3"><strong><?= $ext2; ?></strong></h5>
                                    <input type="text" class="form-control <?= ($validation->hasError('ext2')) ? 'is-invalid' : ''; ?>" name="ext2" placeholder="<?= $ext2; ?>">
                                </div>
                            </div>
                            <div class="row mt-5 mb-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary position-relative start-50">Save</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>