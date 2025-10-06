<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <title>SMKN 4 TASIKMALAYA</title>
</head>

<body>
    <?php include 'header.php';
    ?>
    <!-- tutup nav -->
    <?php

    ?>
    <!-- section extrakurikuler -->
    <div class="container my-4">
        <div class="row">
            <h3>Ektrakurikuler</h3>
            <h3 class="text-primary"> Siswa</h3>
        </div>

        <div class="row">
            <?php
            $eskul = [
                ["img" => "image/bulutangki.png", "nama" => "bulu tangkis"],
                ["img" => "image/cinema.png", "nama" => "cinema"],
                ["img" => "image/ec.png", "nama" => "englis club"],
                ["img" => "image/futsal.png", "nama" => "futsal"],
                ["img" => "image/pmr.png", "nama" => "pmr"],
                ["img" => "image/plh.png", "nama" => "plh"],
                ["img" => "image/laskar.png", "nama" => "laskar"],
                ["img" => "image/pramuka.png", "nama" => "pramuka"],
                ["img" => "image/pub.png", "nama" => "pub"],
                ["img" => "image/voly.png", "nama" => "voly"],
                ["img" => "image/pks.png", "nama" => "pks"],
                ["img" => "image/pd.png", "nama" => "pd"],
                ["img" => "image/basket.png", "nama" => "basket"]

            ];
            foreach ($eskul as $item) {
            ?>
                <div class="col-3 p-3">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= $item['img'] ?>" alt="" class="w-100 h-50">
                        </div>
                        <div class="card text-center">
                            <h6><?= $item['nama'] ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <!-- tutup section extrakulikuler-->
    <!--  section foother-->
    <?php include 'footer.php'; ?>
    <!-- tutup section foother-->

</body>

</html>