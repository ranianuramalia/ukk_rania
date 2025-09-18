<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <title>SMKN 4 TASIKMALAYA</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- tutup nav -->

<?php
$images = [
    './image/galeri1.png',
    './image/galeri2.png',
    './image/galeri3.png',
    './image/galeri1.png',
    './image/galeri1.png'
];
?>

<!-- Section Galeri -->
<div class="container">
        <div class="row">
            <h3>Galeri</h3>
            <h3 class="text-primary"> Sekolah</h3>
        </div>
    <div class="row m-3">
        <div class="col-lg-12">
            <h3 class="text-center text-primary">Upacara</h3>
            <hr>
            <div class="row g-0 flex-wrap">
                <?php foreach ($images as $img): ?>
                    <div class="col-3">
                        <div class="card text-primary text-center border-0">
                            <div class="card-body">
                                <img src="<?= $img ?>" alt="galeri" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Tutup Section Galeri -->

<?php
$images = [
    './image/mbg.png',
    './image/mbg1.png',
    './image/mbg2.png',
    './image/mbg3.png',
    './image/mbg4.png'
];
?>

<!-- Section Galeri -->
<div class="container">
    <div class="row m-3">
        <div class="col-lg-12">
            <h3 class="text-center text-primary">MBG</h3>
            <hr>
            <div class="row g-0 flex-wrap">
                <?php foreach ($images as $img): ?>
                    <div class="col-3">
                        <div class="card text-primary text-center border-0">
                            <div class="card-body">
                                <img src="<?= $img ?>" alt="galeri" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Tutup Section Galeri -->


    <!-- section footer -->
    <?php include 'footer.php'; ?>
    <!-- tutup section footer -->

</body>

</html>