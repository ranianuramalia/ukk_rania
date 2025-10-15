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

    <!-- section identitas -->
    <div class="container my-4">
        <div class="row">
            <h3>Konsentrasi </h3>
            <h4 class="text-primary">Keahliaan</h4>
        </div>
        <?php
        function getjurusan()
        {
            return [
                ["img" => "image/pplg.png", "nama" => "Pengembangan Perangkat Lunak dan Gim (PPLG)", "penjelasan" => "Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan
                        gim. Siswa akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan
                        proyek teknologi"],
                ["img" => "image/tkj.png", "nama" => "Teknik Komputer dan Jaringan (TKJ)", "penjelasan" => "Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta
                        teknologi telekomunikasi. Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi
                        server, dan troubleshooting perangkat jaringan."],
                ["img" => "image/dkv.png", "nama" => "Desain Komunikasi Visual (DKV)", "penjelasan" => "Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi,
                        dan media komunikasi visual untuk berbagai kebutuhan industri kreatif."],
                ["img" => "image/toi.png", "nama" => "Teknik Otomasi Industri (TOI)", "penjelasan" => "Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan
                        sistem kontrol otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur."],
                ["img" => "image/tsm.png", "nama" => "Teknik Sepeda Motor (TSM)", "penjelasan" => "Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda
                        motor, serta pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua."],


            ];
        }
        // variabel dan menmanggil fungsi
        $jurusan = getjurusan();
        ?>
        <?php
        foreach ($jurusan as $item) {
        ?>
            <div class="container rounded-5 shadow p-3 my-3 ">
                <div class="row g-0 flex-nowrap ">

                    <div class="col-4 p-3">

                        <div class="card border-0 mb-3 align-items-center">
                            <img src=<?= $item['img'] ?> alt="" width="150" height="150">
                        </div>
                    </div>
                    <div class="col-8">
                        <h4><?= $item['nama'] ?></h4><br>
                        <p><?= $item['penjelasan'] ?></p>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
    <!-- tutup section -->
    <!--  section foother-->
    <?php include 'footer.php'; ?>
    <!-- tutup section foother-->

</body>

</html>