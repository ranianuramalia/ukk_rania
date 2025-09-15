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
    <!-- section identitas -->
    <div class="container my-4">
        <div class="row">
            <h3>Konsentrasi </h3>
            <h4 class="text-primary">Keahliaan</h4>
        </div>
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
    <?php include 'footer.php'; ?>
    <!-- tutup section foother-->

</body>

</html>