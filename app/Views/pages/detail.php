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
                            <div class="mb-1 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Stasiun</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['nama']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Altitude</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['alt']; ?> m">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-1 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Latitude</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['lat']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Longitude</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $stadata['lon']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-1 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Periode</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pro; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Minggu Ke-</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $minggu; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table text-center my-2">
                        <tbody>
                            <tr>
                                <th rowspan="2" class="position-relative top-50">Tanggal</th>
                                <th colspan="9">Temperatur</th>
                            </tr>
                            <tr>
                                <th>BK I</th>
                                <th>BB I</th>
                                <th>BK II</th>
                                <th>BB II</th>
                                <th>BK III</th>
                                <th>BK III</th>
                                <th>Min Rumput</th>
                                <th>T. Min</th>
                                <th>T. Max</th>
                            </tr>
                            <?php foreach ($hari as $hr) : ?>
                                <tr>
                                    <td><?= $hr['tanggal']; ?></td>
                                    <td>bk1</td>
                                    <td>bb1</td>
                                    <td>bk2</td>
                                    <td>bb2</td>
                                    <td>bk3</td>
                                    <td>bb3</td>
                                    <td>minr</td>
                                    <td>tmin</td>
                                    <td>tmax</td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <th>Jumlah</th>
                                <th>jbk1</th>
                                <th>jbb1</th>
                                <th>jbk2</th>
                                <th>jbb2</th>
                                <th>jbk3</th>
                                <th>jbb3</th>
                                <th>jmin</th>
                                <th>jmin</th>
                                <th>jmax</th>
                            </tr>
                            <tr>
                                <th>Rerata</th>
                                <th>rbk1</th>
                                <th>rbb1</th>
                                <th>rbk2</th>
                                <th>rbb2</th>
                                <th>rbk3</th>
                                <th>rbb3</th>
                                <th>rmin</th>
                                <th>rmin</th>
                                <th>rmax</th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table text-center my-5">
                        <tbody>
                            <tr>
                                <th rowspan="2" class="position-relative top-50">Tanggal</th>
                                <th colspan="9">Angin</th>
                            </tr>
                            <tr>
                                <th>WD I</th>
                                <th>WD II</th>
                                <th>WD III</th>
                                <th>WS I</th>
                                <th>WS II</th>
                                <th>WS III</th>
                                <th>WSR 31</th>
                                <th>WSR 12</th>
                                <th>WSR 23</th>
                            </tr>
                            <?php foreach ($hari as $hr) : ?>
                                <tr>
                                    <td><?= $hr['tanggal']; ?></td>
                                    <td>bk1</td>
                                    <td>bb1</td>
                                    <td>bk2</td>
                                    <td>bb2</td>
                                    <td>bk3</td>
                                    <td>bb3</td>
                                    <td>minr</td>
                                    <td>tmin</td>
                                    <td>tmax</td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <th>Jumlah</th>
                                <th>jbk1</th>
                                <th>jbb1</th>
                                <th>jbk2</th>
                                <th>jbb2</th>
                                <th>jbk3</th>
                                <th>jbb3</th>
                                <th>jmin</th>
                                <th>jmin</th>
                                <th>jmax</th>
                            </tr>
                            <tr>
                                <th>Rerata</th>
                                <th>rbk1</th>
                                <th>rbb1</th>
                                <th>rbk2</th>
                                <th>rbb2</th>
                                <th>rbk3</th>
                                <th>rbb3</th>
                                <th>rmin</th>
                                <th>rmin</th>
                                <th>rmax</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>