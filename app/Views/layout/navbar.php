<nav class="navbar navbar-expand-lg navbar-dark ps-2" style="background-color: #0457be;">
    <!-- <a class="navbar-brand text-uppercase font-weight-bold text-sm" href="/">Agroklimat</a> -->
    <!-- <div class="container"> -->
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="\img\logo_1.png" alt="" height="40">
        </a>
        <!-- </div> -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my-1" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link <?= ($cat == 1) ? 'active' : ''; ?>" href="/">Home</a>
                <a class="nav-item nav-link <?= ($cat == 2) ? 'active' : ''; ?>" href="/input">Input Data</a>
                <a class="nav-item nav-link <?= ($cat == 3) ? 'active' : ''; ?>" href="/monitor">Monitoring</a>
                <a class="nav-item nav-link <?= ($cat == 4) ? 'active' : ''; ?>" href="/about">About Us</a>
            </div>
        </div>
    </div>
</nav>