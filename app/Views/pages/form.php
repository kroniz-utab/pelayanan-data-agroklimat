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
                                <select name="staid" class="form-select" disabled>
                                    <option value="<?= $stas; ?>"><?= $name; ?></option>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Periode</h5>
                                <select name="period" class="form-select" disabled>
                                    <option value="<?= $period; ?>"><?= $proman; ?></option>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Minggu</h5>
                                <select name="minggu" class="form-select" disabled>
                                    <option value="<?= $minggu; ?>"><?= $minggu; ?></option>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Tanggal</h5>
                                <select name="tanggal" class="form-select" disabled>
                                    <option value="<?= $tanggal; ?>"><?= $tanggal; ?></option>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Jam Peng.</h5>
                                <select name="jpeng" class="form-select" disabled>
                                    <option value="<?= $jpeng; ?>"><?= $jampeng; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-5 mb-3">
                            <h5 class="fs-6 text-center mb-3"><strong>Temperatur</strong></h5>
                            <div class="col">
                                <input type="text" class="form-control" name="bk" placeholder="Bola Kering">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="bb" placeholder="Bola Basah">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="tl" placeholder="<?= $tl; ?>">
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <h5 class="fs-6 text-center mb-3"><strong>Angin</strong></h5>
                            <div class="col">
                                <input type="text" class="form-control" name="wd" placeholder="Arah Angin">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="ws" placeholder="Kecepatan Angin">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="wsr" placeholder="Kecepatan Angin Rerata <?= ($jpeng == 1) ? '31' : (($jpeng == 2) ? '12' : '23'); ?>">
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <div class="col">
                                <h5 class="fs-6 text-center mb-3"><strong>Lembab Nisbi</strong></h5>
                                <input type="text" class="form-control" name="ln" placeholder="Lembab Nisbi">
                            </div>
                            <div class="col">
                                <h5 class="fs-6 text-center mb-3"><strong><?= $ext1; ?></strong></h5>
                                <input type="text" class="form-control" name="ext1" placeholder="<?= $ext1; ?>">
                            </div>
                            <div class="col">
                                <h5 class="fs-6 text-center mb-3"><strong><?= $ext2; ?></strong></h5>
                                <input type="text" class="form-control" name="ext1" placeholder="<?= $ext2; ?>">
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