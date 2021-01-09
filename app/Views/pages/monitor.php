<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <form action="/monitor/list" method="get">
                        <div class="form-group row">
                            <h3 class="mb-3">Monitor Data Agroklimat</h3>
                            <div class="col-5">
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
                            <div class="col-1">
                                <h5 class="invisible fs-6">G</h5>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>