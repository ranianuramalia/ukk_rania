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
    <!-- section -->
    <div class="container-fluid border-0">
        <div class="card text-white">
            <img src="./image/smk.png" class="card-img " alt="..." >
            <div class="card-img-overlay m-5 ">
                <h1 class="card-title text-primary">SMK Negeri 4 Tasikmalya</h1>
                <h3 class="card-text">Sekolah Pusat Keunggulan</h3>
                <a class="btn btn-primary m-4" href="indentitas.php">Infomasi Sekolah</a>
            </div>
        </div>
    </div>

    <!-- tutup section -->
    <!-- section -->
    <div class="container">
        <div class="row m-5">
            <h3>SAMBUTAN</h3>
            <h3 class="text-primary">KEPALA SEKOLAH</h3>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card border-0 ">
                            <img src="./image/poto2.png" alt="" class=" rounded mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card border-0">
                            <h3>Kurniawan S.Pd, M.Pd</h3>
                            <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
                            <p>Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam
                                lindungan-Nya. Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4
                                Tasikmalaya ini. Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini
                                para pengunjung dapat mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat
                                tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. Tiada
                                gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak
                                kekurangan yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami
                                harapkan untuk pengembangan ke depan.</p>
                            <p>Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang
                                tidak dapat disebutkan satu segala bantuan dan persatu atas fasilitasnya yang telah
                                diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.</p>
                            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tutup section -->
    <div class="container">
        <!-- section berita -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Berita</h2>
                <div class="row g-0 flex-nowrap">
                    <div class="col-6 p-3">
                        <div class="card">
                            <div class="card-header">
                                <img src="./image/sefety.jpeg" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h5>Honda Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya, Ciptakan Bibit Keselamatan
                                    di Jawa Barat.
                                </h5>
                                <a class="btn btn-primary"
                                    href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-di-jawa-barat?page=all">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-3">
                        <div class="card">
                            <div class="card-header">
                                <img src="./image/berita.jpeg" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h5>Aplikasi SIMORING, Solusi Kekinian dari Universitas BSI untuk PKL di SMKN 4
                                    Tasikmalaya</h5>
                                <a class="btn btn-primary"
                                    href="https://news.bsi.ac.id/berita/aplikasi-simoring-solusi-kekinian-dari-universitas-bsi-untuk-pkl-di-smkn-4-tasikmalaya/">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- tutup section berita -->
        <!--  section Galeri -->
        <?php
        $images = [
            "image/galeri1.png",
            "image/galeri2.png",
            "image/galeri3.png",
            "image/galeri1.png"
        ];

        $i = 0;
        ?>
        <div class="row">
            <div class="col-lg-12">
                <h3>Galery</h3>
                <div class="row g-0 flex-nowrap">
                    <?php while ($i < count($images)) { ?>
                        <div class="col-3">
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
                <div class="card-body text-center my-4">
                    <a class="btn btn-primary" href="galeri.php">Intip lainya</a>
                </div>
            </div>
        </div>
        <!-- tutup section galeri -->

        <!-- section statistik-->
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-0 flex-nowrap">
                    <div class="col-3">
                        <div class="card text-primary text-center border-0">
                            <div class="card-body">
                                <h2>1500</h2>
                                Peserta didik
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card text-primary text-center border-0">
                            <div class="card-body">
                                <h2>100</h2>
                                Pendidik
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card text-primary text-center border-0">
                            <div class="card-body">
                                <h2>60</h2>
                                romble
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card text-primary text-center border-0">
                            <div class="card-body">
                                <h2>5</h2>
                                keahlian
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup section atatistik-->
    <!--  section foother-->
    <?php include 'footer.php';?>
    <!-- tutup section foother-->
</body>

</html>