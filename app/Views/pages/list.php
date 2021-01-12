<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <h3 class="mb-3 text-center">Monitor Data Agroklimat</h3>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Stasiun</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['nama']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Altitude</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['alt']; ?> m">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Latitude</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['lat']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Longitude</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['lon']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">Periode</th>
                                <th scope="col">Minggu ke-</th>
                                <th scope="col">Jumlah data</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 53; $i++) : ?>
                                <tr>
                                    <td scope="row"><?= $period; ?></td>
                                    <td><?= $i; ?></td>
                                    <td><?= $dttot[$i - 1]; ?>/<?= ($i == 52) ? '8' : '7'; ?></td>
                                    <td>
                                        <a <?php
                                            if ($dttot[$i - 1] != 0) {
                                                echo 'href="/sta/' . $staid . '/per/' . $per . '/ming/' . $i . '" class="btn btn-primary btn-sm"';
                                            } else {
                                                echo 'href="#" class="btn btn-secondary btn-sm disabled" aria-disabled="true"';
                                            }
                                            ?>>
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>