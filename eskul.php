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
    <ul>
        <?php
        $galeri = [
            "./image/galeri1.png",
            "./image/galeri2.png"
        ];
        foreach ($galeri as $image) {
        ?>
            <li><img src=<?= $image ?> alt="Galeri Image" style="width:200px;"></li>
        <?php } ?>
    </ul>
    <!-- tutup section galeri-->
    <!--  section foother-->
    <?php include 'footer.php'; ?>
    <!-- tutup section foother-->

</body>

</html>