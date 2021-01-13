<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-2">
                <div class="card-body">
                    <form action="/input/get-form" method="GET">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <h3 class="mb-3">Input Data Agroklimat</h3>
                            <?php if (session()->getFlashData('fail')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashData('fail'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashData('success')) : ?>
                                <div class="alert alert-success" role="success">
                                    <?= session()->getFlashData('success'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="col">
                                <h5 class="fs-6">Stasiun</h5>
                                <select class="form-select <?= ($validation->hasError('stasiun')) ? 'is-invalid' : ''; ?>" name="stasiun">
                                    <option selected>--- Pilih Stasiun ---</option>
                                    <?php foreach ($stas as $s) : ?>
                                        <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Periode</h5>
                                <select class="form-select <?= ($validation->hasError('periode')) ? 'is-invalid' : ''; ?>" name="periode">
                                    <option selected>--- Periode ---</option>
                                    <option value="1">I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                    <option value="4">IV</option>
                                    <option value="5">V</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Minggu</h5>
                                <select class="form-select <?= ($validation->hasError('minggu')) ? 'is-invalid' : ''; ?>" name="minggu" id="minggu_input">
                                    <option selected>--- Minggu ---</option>
                                    <?php for ($i = 1; $i < 53; $i++) : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Tanggal</h5>
                                <select class="form-select <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" name="tanggal" id="tanggal_input">
                                    <option value="">--- Tanggal ---</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <h5 class="fs-6">Jam Peng.</h5>
                                <select class="form-select <?= ($validation->hasError('jpeng')) ? 'is-invalid' : ''; ?>" name="jpeng">
                                    <option selected>--- Jam Pengamatan ---</option>
                                    <option value="1">07.00 WS</option>
                                    <option value="2">14.00 WS</option>
                                    <option value="3">18.00 WS</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <h5 class="invisible fs-6">G</h5>
                                <button type="submit" class="btn btn-primary">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>