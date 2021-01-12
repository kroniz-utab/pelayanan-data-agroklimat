<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="\css\style.css">
    <!-- My Favicon -->
    <link rel="icon" href="/img/icon_bmkg.ico" type="image/gif">

    <!-- <title><?= $title; ?></title> -->
    <title>Pelayanan Data Agroklimat</title>

</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <footer class="container mt-auto">
        <hr>
        <div class="col">
            <img src="\img\Logo-BMKG-new.png" class="logo_footer ms-3">
            <img src="\img\Logo_Prodi_Instrumentasi.png" class="logo_footer me-3 float-end">
            <img src="\img\Logo_STMKG-new.png" class="logo_footer mx-1 float-end">
        </div>
        <div class="col mt-2">
            <p class="float-end"><a href="#">Kembali Ke Atas</a></p>
            <p>© 2021 STMKG Jakarta. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- My JS -->
    <!-- <script src="public\js\jquery.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#minggu_input').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?= base_url('fetch_tgl'); ?>",
                    type: "POST",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#tanggal_input').html(response);
                        // console.log(response);
                    }
                })
            });
        })
    </script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>