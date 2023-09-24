<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Kampus</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     @include('navbar')

    <!--Logo dan Nama Universitas -->
    <div class="container row d-flex justify-content-center align-items-center">
        <div class="col-md-2">
            <img src="logo.png" alt="Logo UNIMA" class="img-fluid" mx-auto d-block>
        </div>
        <div class="col-md-10">
            <h2>UNIVERSITAS NEGERI MANADO</h2>
        </div>
    </div>

    <!-- Gambar Gedung -->
    <div class="row mb-4">
        <div class="col-12">
            <img src="UNIMA.jpg" alt="Gedung UNIMA" class="img-fluid" style="width: 100%; height: auto;">
        </div>
    </div>

    <!-- Alamat dan Kontak -->
    <div class="row">
        <div class="col-md-6">
            <h3>Alamat Kampus</h3>
            <p>
                Jl. Kampus Unima No.1, Tondano Selatan,
                Kelurahan Tonsaru, Kabupaten Minahasa, 
                Sulawesi Utara 95618
            </p>
        </div>
        <div class="col-md-6">
            <h3>Kontak</h3>
            <p>Nomor HP : +62 123 456 7890</p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>