<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-2">
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
                    <table class="table text-center my-2 table-striped align-middle">
                        <tbody>
                            <tr>
                                <th rowspan="2">Tanggal</th>
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
                            <?php for ($i = 0; $i < sizeof($hari); $i++) : ?>
                                <tr>
                                    <td><?= $hari[$i]; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['bk'] : '-'; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['bb'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['bk'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['bb'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['bk'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['bk'] : '-'; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['tl'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['tl'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['tl'] : '-'; ?></td>
                                </tr>
                            <?php endfor; ?>
                            <tr>
                                <th>Jumlah</th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['bk'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['bb'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['bk'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['bb'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['bk'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['bb'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['tl'];
                                    }
                                    echo ($tot);
                                    ?></th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['tl'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['tl'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Rerata</th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['bk'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 1));
                                    ?>
                                </th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['bb'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['bk'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['bb'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['bk'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['bb'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 1));
                                    ?>
                                </th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['tl'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 1));
                                    ?></th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['tl'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['tl'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 1));
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table text-center my-5 table-striped align-middle">
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
                            <?php for ($i = 0; $i < sizeof($hari); $i++) : ?>
                                <tr>
                                    <td><?= $hari[$i]; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['wd'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['wd'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['wd'] : '-'; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['ws'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['ws'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['ws'] : '-'; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['ws_rate'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['ws_rate'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['ws_rate'] : '-'; ?></td>
                                </tr>
                            <?php endfor; ?>
                            <tr>
                                <th>Jumlah</th>
                                <th>-</th>
                                <th>-</th>
                                <th>-</th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ws'];
                                    }
                                    echo ($tot);
                                    ?></th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ws'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ws'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ws_rate'];
                                    }
                                    echo ($tot);
                                    ?></th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ws_rate'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ws_rate'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Rerata</th>
                                <th>-</th>
                                <th>-</th>
                                <th>-</th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ws'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 2));
                                    ?></th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ws'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 2));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ws'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 2));
                                    ?>
                                </th>
                                <th><?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ws_rate'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 2));
                                    ?></th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ws_rate'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 2));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ws_rate'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 1));
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table text-center mt-5 mb-2 table-striped align-middle">
                        <tbody>
                            <tr>
                                <th rowspan="2">Tanggal</th>
                                <th colspan="3">Lembab Nisbi</th>
                                <th rowspan="2">Sinar Matahari</th>
                                <th rowspan="2">Hujan</th>
                                <th colspan="4">Uji Peramatan</th>
                            </tr>
                            <tr>
                                <th>LN I</th>
                                <th>LN II</th>
                                <th>LN III</th>
                                <th>BK II</th>
                                <th>MIN</th>
                                <th>BK III</th>
                                <th>MAX</th>
                            </tr>
                            <?php for ($i = 0; $i < sizeof($hari); $i++) : ?>
                                <tr>
                                    <td><?= $hari[$i]; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['ln'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['ln'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['ln'] : '-'; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['ext1'] : '-'; ?></td>
                                    <td><?= ($dataEntry1[$i] != null) ? $dataEntry1[$i]['ext2'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['ext1'] : '-'; ?></td>
                                    <td><?= ($dataEntry2[$i] != null) ? $dataEntry2[$i]['ext2'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['ext1'] : '-'; ?></td>
                                    <td><?= ($dataEntry3[$i] != null) ? $dataEntry3[$i]['ext2'] : '-'; ?></td>
                                </tr>
                            <?php endfor; ?>
                            <tr>
                                <th>Jumlah</th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ln'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ln'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ln'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ext1'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ext2'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ext1'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ext2'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ext1'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ext2'];
                                    }
                                    echo ($tot);
                                    ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Rerata</th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ln'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 0));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ln'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 0));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ln'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 0));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ext1'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon1); $i++) {
                                        $tot += $dataon1[$i]['ext2'];
                                    }
                                    echo (round(($tot / sizeof($dataon1)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ext1'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon2); $i++) {
                                        $tot += $dataon2[$i]['ext2'];
                                    }
                                    echo (round(($tot / sizeof($dataon2)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ext1'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 1));
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    $tot = 0;
                                    for ($i = 0; $i < sizeof($dataon3); $i++) {
                                        $tot += $dataon3[$i]['ext2'];
                                    }
                                    echo (round(($tot / sizeof($dataon3)), 1));
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>