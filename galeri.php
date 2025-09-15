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
    <?php include 'header.php'; ?>
    <!-- tutup nav -->

    <!-- section galery -->
    <div class="container">
        <?php
        $images = [
            './image/galeri1.png',
            './image/galeri2.png',
            './image/galeri3.png',
            './image/galeri1.png'
        ];
        $i = 0;
        ?>
        <div class="row m-3">
            <div class="col-lg-12">
                <h3 class="text-center text-primary">Galery</h3>
                <hr>
                <div class="row g-0 flex-nowrap">
                    <?php while ($i < count($images)) { ?>
                        <div class="col-3 ">
                            <div class="card text-primary text-center border-0">
                                <div class="card-body">
                                    <img src="<?= $images[$i]; ?>" alt="" class="w-100 h-50">
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    } ?>
                </div>
            </div>
        </div>
        <?php
        $images = [
            './image/galeri1.png',
            './image/galeri2.png',
            './image/galeri3.png',
            './image/galeri1.png'
        ];
        $i = 0;
        ?>
        <div class="row m-3">
            <div class="col-lg-12">
                <div class="row g-0 flex-nowrap">
                    <?php while ($i < count($images)) { ?>
                        <div class="col-3 ">
                            <div class="card text-primary text-center border-0">
                                <div class="card-body">
                                    <img src="<?= $images[$i]; ?>" alt="" class="w-100 h-50">
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup section galeri-->
    <!--  section foother-->
    <?php include 'footer.php'; ?>
    <!-- tutup section foother-->

</body>

</html>