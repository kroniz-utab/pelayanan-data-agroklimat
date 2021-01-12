<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- <div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <img src="\img\Logo_STMKG.PNG" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="row"> -->
<div class="col">
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <!-- <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="\img\banner_2.jpg" class="d-block w-100" alt="..." height="100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-uppercase "><strong>Selamat Datang</strong></h1>
                    <p>Sistem Pelayanan Data Agrometeorologi STMKG</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="\img\banner_3.jpg" class="d-block w-100" alt="..." height="100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-uppercase"><strong>Selamat Datang</strong></h1>
                    <p>Sistem Pelayanan Data Agrometeorologi STMKG</p>
                </div>
            </div>
            <!-- <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading align-middle text-capitalize">
                    Apa itu Agrometeorologi?
                    <span class="text-muted">Seberapa penting?</span>
                </h2>
                <p class="par-content">Agrometeorologi merupakan serapan dari kata <i>Agrometeorology</i>, singkatan dari <i>Agricultural Meteorology</i>. Sebuah cabang disiplin ilmu yang memelajari tentang kaitan meteorologi, hidrologi, pedologis dan faktor biologis dengan produksi pertanian. Dalam Agrometeorologi juga dipelajari interaksi antara pertanian itu sendiri dengan kondisi lingkungan. </p>
            </div>
            <div class="col-md-5">
                <img src="\img\konten-1.jpg" alt="Konten 1" height="500" width="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
        <hr class="divider">
        <div class="row">
            <div class="col-md-5">
                <img src="\img\konten-2.jpg" alt="Konten 1" height="500" width="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading align-middle text-capitalize">
                    Apa itu formulir Agm?
                    <span class="text-muted">Apa saja isinya?</span>
                </h2>
                <p class="par-content fw-light">Form Agrometeorologi 1a atau Agm-1a merupakan salah satu form pelaporan data pengamatan agrometeorologi dari jaringan stasiun BMKG selain Agrometeorologi 1b dan Fenologi. Form Agm-1a memuat data iklim yang sama dengan Fklim71, form penguapan, form suhu tanah, dan lainnya. Perbedaannya terletak pada periode data. Pada form iklim lainnya menggunakan penanggalan kalender bulanan yang dimulai dari tanggal 1 hingga akhir bulan. Adapun pada form Agm-1a data pengamatan iklim dan agrometeorologi harian disusun dalam periode mingguan menggunakan standar mingguan seragam.</p>
            </div>
        </div>
        <hr class="divider">
        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading align-middle text-capitalize">
                    Untuk apa sih data agrometeorologi?
                    <span class="text-muted">siapa yang membutuhkan?</span>
                </h2>
                <p class="par-content">Data agrometeorologi digunakan untuk menjelaskan efek-efek kaitan parameter meteorologi secara sains dan untuk membantu petani atau pelaku pertanian dalam menerapkan pengetahuan dan informasi untuk mendukung usahanya secara agrometeorologis.</p>
            </div>
            <div class="col-md-5">
                <img src="\img\konten-4.jpg" alt="Konten 1" height="500" width="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
    </div>

</div>
<!-- </div> -->


<?= $this->endSection(); ?>