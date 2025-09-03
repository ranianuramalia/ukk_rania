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
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container"> <img src="./image/logo.png" alt="" width="70px" height="70px">&nbsp; <a class="navbar-brand text-primary " href="#">SMKN 4 Tasikmalaya</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="index.php">Beranda</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="indentitas.php">Indentitas sekolah</a></li>
                            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="visi.php">Visi & Misi</a></li>
                            <li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="jurusan.php">Keahlian</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="ektrakurikuler.php">Ektrakurikuler</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="galeri.php">Galeri</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- tutup nav -->
    <!-- section identitas -->
    <div class="container my-4">
        <div class="row">
            <h3>Konsentrasi </h3>
            <h4 class="text-primary">Keahliaan</h4>
        </div>
        <!-- pencarian -->
        <div class="container mt-4">
            <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari jurusan (contoh: tkj, pplg, toi, dkv,tsm )">
                <button class="btn btn-primary" onclick="cariJurusan()">Cari</button>

            </div>
        </div>
        <div class="container rounded-5 shadow p-3 my-3 " id="pplg">
            <div class="row g-0 flex-nowrap ">
                <div class="col-4 p-3">
                    <div class="card border-0 mb-3 align-items-center">
                        <img src="./image/pplg.png" alt="" width="150" height="150">
                    </div>
                </div>
                <div class="col-8">
                    <h4>Pengembangan Perangkat Lunak dan Gim (PPLG)</h4><br>
                    <p>Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan
                        gim. Siswa akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan
                        proyek teknologi.</p>
                </div>
            </div>
        </div>
        <div class="container rounded-5 shadow p-3 my-3 " id="tkj">
            <div class="row g-0 flex-nowrap">
                <div class="col-4 ">
                    <div class="card border-0 mb-3 align-items-center">
                        <img src="./image/tkj.png" alt="" width="150" height="150">
                    </div>
                </div>
                <div class="col-8">
                    <h4>Teknik Komputer dan Jaringan (TKJ)</h4><br>
                    <p>Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta
                        teknologi telekomunikasi. Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi
                        server, dan troubleshooting perangkat jaringan.</p>
                </div>
            </div>
        </div>
        <div class="container rounded-5 shadow p-3 my-3 " id="toi">
            <div class="row g-0 flex-nowrap ">
                <div class="col-4 p-3">
                    <div class="card border-0 mb-3 align-items-center">
                        <img src="./image/toi.png" alt="" width="150" height="150">
                    </div>
                </div>
                <div class="col-8">
                    <h4>Teknik Otomasi Industri (TOI)</h4><br>
                    <p>Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan
                        sistem kontrol otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur.</p>
                </div>
            </div>
        </div>
        <div class="container rounded-5 shadow p-3 my-3 " id="tsm">
            <div class="row g-0 flex-nowrap ">
                <div class="col-4 p-3">
                    <div class="card border-0 mb-3 align-items-center">
                        <img src="./image/tsm.png" alt="" width="150" height="150">
                    </div>
                </div>
                <div class="col-8">
                    <h4>Teknik Sepeda Motor (TSM)</h4><br>
                    <p>Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda
                        motor, serta pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua.</p>
                </div>
            </div>
        </div>
        <div class="container rounded-5 shadow p-3 my-3 " id="dkv">
            <div class="row g-0 flex-nowrap">
                <div class="col-4 p-3">
                    <div class="card border-0 mb-3 align-items-center">
                        <img src="./image/dkv.png" alt="" width="150" height="150">
                    </div>
                </div>
                <div class="col-8">
                    <h4>Desain Komunikasi Visual (DKV)</h4><br>
                    <p>Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi,
                        dan media komunikasi visual untuk berbagai kebutuhan industri kreatif.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup section -->
    <!-- <script>
        function cariJurusan() {
            const input = document.getElementById('searchInput').value.toLowerCase().trim();

            // Daftar jurusan yang valid
            const jurusanValid = ['pplg', 'tkj', 'toi', 'tsm', 'dkv'];

            if (jurusanValid.includes(input)) {
                const target = document.getElementById(input);
                if (target) {
                    alert("Jurusan " + input.toUpperCase() + " ditemukan, scroll ke bawah.");
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                alert("Jurusan tidak ditemukan: " + input);
            }
        }
    </script> -->

    <script>
        function cariJurusan() {
            const input = document.getElementById('searchInput').value.toLowerCase().trim();
            const jurusanValid = ['pplg', 'tkj', 'toi', 'tsm', 'dkv'];

            if (jurusanValid.includes(input)) {
                const target = document.getElementById(input);
                if (target) {
                    alert("Jurusan " + input.toUpperCase() + " ditemukan, scroll ke bawah.");

                    // Hitung offset agar tidak tertutup navbar sticky
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = elementPosition - navbarHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            } else {
                alert("Jurusan tidak ditemukan: " + input);
            }
        }
    </script>

    <!--  section foother-->
    <div class="container-fluid row" style="background-color: rgb(84, 144, 255);">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="container mt-5 text-light">
                        <h4>SMKN 4 Tasikmalaya</h4>
                        <p> Jl. Depok, Sukamenak, Kec. Purbaratu, Kab. Tasikmalaya, Jawa Barat 46196</p>
                        <p>+08237865</p>
                        <p>info@smkn4-tsm.sch.id</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="container mt-5 text-light text-center">
                        <h5>Alamat</h5>
                        <hr>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.213116362029!2d108.25189907500041!3d-7.329945292678408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1755672850218!5m2!1sid!2sid"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="container mt-5 text-light">
                        <h4>Media Sosial</h4>
                        <hr>
                        <p>Instagram</p>
                        <p>Youtube</p>
                        <p>Fecebook</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="container mt-5 text-light">
                        <h4>Link External</h4>
                        <hr>
                        <p>Kemendikbud</p>
                        <p>Dapodikdasmen</p>
                        <p>Psmk</p>
                        <p>Disdik jabar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup section foother-->

</body>

</html>