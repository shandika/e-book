<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/floating/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toatr.css">
<style>
    .disabled {
        pointer-events: none;
    }
    .fullScreen {width: 100%; height: 100%; background: white;}
    .scroll {
        height: 500px;
    }
    .scroll-full {
        height: 700px;
    }
    .root-satu {
        margin-left: 20px;
    }
    .root-dua {
        margin-left: 40px;
    }
</style>

<div class="page-header">
    <div class="row">
        <div class="col">
            <h3 class="page-title">Bagian 3 | SIKLUS AIR</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Sampul</a></li>
                <li class="breadcrumb-item active">E-Book</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="accordion custom-accordion" id="custom-accordion-one">
            <!-- LEARNING OUTCOME -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingEight">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-learning-outcome" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            LEARNING OUTCOME <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-Eight">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <h5 id="daftar-3" class="fw-bold text-primary">LEARNING OUTCOME</h5>
                            <div class="border-top border-bottom border-dark">
                                <p class="fw-bold text-primary">Conceptual Understanding</p>
                                <ol>
                                    <li>1.1 Memahami persebaran air tawar di bumi</li>
                                    <li>1.2 Memahami proses pembentukan gletser</li>
                                    <li>1.3 Memahami proses pembentukan air tanah</li>
                                    <li>1.4 Memahami proses pembentukan danau, oasis dan sungai</li>
                                    <li>1.5 Memahami proses siklus air meliputi : evaporasi, transpirasi, kondensasi,
                                        infiltrasi dan Koleksi</li>
                                    <li>1.6 Memahami proses siklus pendek, siklus sedang dan siklus panjang</li>
                                </ol>
                            </div>
                            <p class="fw-bold text-primary">Reflective Thinking Skill</p>
                            <ol>
                                <li>2.1 Mengingat kembali distribusi air tawar di bumi</li>
                                <li>2.2 Menggunakan pemahaman mengenai distribusi air di bumi untuk menganalisis manfaat
                                    dan kerugian dari bendungan sungai</li>
                                <li>2.3 Menggunakan pemahaman mengenai evaporasi untuk menganalisis Penguapan air di
                                    musim kemarau </li>
                                <li>2.4 Menggunakan pemahaman mengenai Transpirasi untuk menganalisis pengaruh
                                    penggundulan hutan pada transpirasi</li>
                                <li>2.5 Menggunakan pemahaman mengenai Kondensasi untuk menganalisis bagaimana awan
                                    dapat melayang di atmosfer</li>
                                <li>2.6 Menggunakan pemahaman mengenai Konveksi dan Adveksi untuk menganalisis
                                    Terjadinya angin darat dan angin laut</li>
                                <li>2.7 Menggunakan pemahaman mengenai Presipitasi untuk menganalisis terjadinya hujan
                                    asam </li>
                                <li>2.8 Menggunakan pemahaman mengenai Infiltrasi dan Surface Run Off untuk menganalisis
                                    penyebab terjadinya kekeringan </li>
                                <li>2.9 Menggunakan pemahaman mengenai Collection/Pengumpulan untuk menganalisis
                                    Pengaruh penyedotan air tanah secara berlebihan</li>
                            </ol>
                            <div class="border-top border-bottom border-dark">
                                <p class="fw-bold text-primary">Spiritual Attitude</p>
                                <ol>
                                    <li>3.1 Meyakini bahwa adanya mekanisme siklus hidrologi merupakan salah satu tanda
                                        keagungan Allah SWT sebagai tuhan yang Maha Memelihara dan menjaga makhluk-Nya
                                    </li>
                                    <li>3.2 Meyakini bahwa adanya hujan merupakan bentuk kasih sayang Allah SWT pada
                                        hamba-Nya untuk mengirimkan air tawar yang dibutuhkan hambanya di daratan</li>
                                    <li>3.3 Meyakini bahwa adanya awan dan angin merupakan bukti keagungan Allah SWT
                                        sebagai yang Maha menciptakan dengan penuh perhitungan agar dapat menjadi media
                                        untuk menyebarkan air tawar ke penjuru daratan sesuai yang dikehendaki-Nya</li>
                                </ol>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END LEARNING OUTCOME -->
            <!-- Video -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingNine">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-video" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            VIDEO <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <p>Sekitar 71% permukaan bumi tertutup air, dan lautan menampung sekitar 96,5 persen seluruh
                                    air di bumi namun dalam bentuk air asin. Air tawar tersebar di daratan dalam bentuk
                                    sungai, danau, salju, gletser, air tanah dan uap air. Pada bagian ini kita akan membahas
                                    bagaimana mekanisme persebaran air tawar melalui siklus hidrologi sehingga air dapat
                                    tersebar ke seluruh daratan bahkan hingga menjangkau pegunungan tertinggi sekalipun.
                                    Sebelum memulai belajar anda boleh menonton penjelasan mengenai siklus air pada link
                                    video berikut.</p>
                                <br>
                                <div class="container mt-5 video1">
                                    <video class="img-fluid" controls>
                                        <source src="<?=base_url()?>assets/video/bab 3.mp4">
                                    </video>
                                </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END Video -->
            <!-- Persebaran Air di Muka Bumi -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTen">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-persebaran-air" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            PERSEBARAN AIR DI MUKA BUMI <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                            <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                                <div id="bagian-3-1">
                                    <p id="daftar-3-1" class="fw-bold text-primary fs-5">Persebaran Air di Muka Bumi</p>
                                    <p>Air adalah senyawa yang penting bagi semua bentuk kehidupan yang diketahui sampai
                                        saat
                                        ini di Bumi. Air menutupi hampir 71% permukaan Bumi. Terdapat 1,4 triliun kilometer
                                        kubik (330 juta mil³) air tersedia di Bumi. Air sebagian besar dapat ditemukan di
                                        laut
                                        (air asin) dan pada lapisan-lapisan es (di kutub dan puncak-puncak gunung). Selain
                                        itu,
                                        air juga dapat ditemukan daratan dalam bentuk sungai, permukaan air tawar, danau dan
                                        kolam. Air juga dapat ditemukan di udara dalam bentuk uap air dan berkumpul dalam
                                        bentuk
                                        awan. </p>
                                    <div class="bg-primary">
                                        <div class="card-header border-0" id="headingTigabelas">
                                            <h5 class="accordion-faq m-0">
                                                <a class="text-dark" data-bs-toggle="collapse" href="#collapseTigabelas"
                                                    aria-expanded="true" onclick="buka_soal(13)">
                                                    <i id="daftar-1-13" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                    <p class="text-primary fw-bold fs-5">Check Your Prior Knowledge</p>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTigabelas" class="collapse" aria-labelledby="headingTigabelas"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <div id="isi-soal-13"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="border-top border-bottom border-dark">
                                        <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                        <p>Selama ini kita beranggapan Jumlah air di Bumi konstan, tidak bertambah dan tidak
                                            berkurang. Air di Bumi hanya mengalami perubahan (transformasi) fasa secara
                                            siklik
                                            melalui proses yang dinamakan siklus hidrologi. Namun, pada faktanya sejarah
                                            geologi
                                            mencatat bahwa jumlah total air di Bumi bervariasi dan masih terus terjadi
                                            hingga
                                            kini. Bumi mendapat pasokan air dari luar angkasa melalui meteor yang mengandung
                                            air
                                            dan pada saat yang bersamaan bumi juga kehilangan partikel yang lepas dari
                                            atmosfer
                                            Bumi; terutama hidrogen, dengan laju 3 kg per detik. Hilangnya partikel hidrogen
                                            mempengaruhi jumlah air di bumi, karena air terdiri dari satu atom oksigen dan
                                            dua
                                            atom hidrogen. Jadi, setiap kali atmosfer melepaskan hidrogen, kita kehilangan
                                            salah
                                            satu bahan penyusun air.</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.1.png" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="text-primary fw-bold">Gambar 3.1</span> Angin
                                            matahari akan menyebabkan beberapa partikel hidrogen terlepas dari atmosfer bumi
                                        </p>
                                        <p>Namun tentu saja pengurangan dan penambahan jumlah air dibumi tersebut jauh lebih
                                            kecil dibandingkan jumlah total air yang ada di bumi. Sehingga wajar proses
                                            tersebut
                                            terkadang diabaikan dan orang sering mengatakan bahwa jumlah air dibumi relatif
                                            konstan.</p>.
                                    </div>
                                    <br>
                                    <p id="daftar-3-3" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge:</span> Sebagian besar
                                        air
                                        di bumi berada di lautan dan samudera dalam bentuk air asin, bagaimana mekanisme
                                        alami
                                        penyebaran air hingga dapat sampai ke seluruh permukaan bumi dalam bentuk air tawar
                                        sehingga dapat bermanfaat bagi kehidupan manusia?</p>
                                    <p>Terdistribusinya air ke hampir seluruh permukaan bumi dalam bentuk air tawar dapat
                                        dijelaskan dengan mekanisme siklus hidrologi, dimana secara sederhana dapat jelaskan
                                        bahwa segala bentuk air yang ada permukaan bumi (laut, samudera, danau kolam, bahkan
                                        pada makhluk hidup) mengalami proses penguapan karena panas sinar matahari menuju ke
                                        atmosfer, yang kemudian berkumpul menjadi awan. Dengan bantuan angin awan dapat
                                        menyebar
                                        ke berbagai tempat dan menjatuhkan kembali partikel air baik dalam bentuk tetes air,
                                        salju maupun es. Air hujan yang telah sampai di permukaan bumi sebagian masuk ke
                                        dalam
                                        tanah dan sebagian lain tertampung dalam kolam, danau dan tempat penampungan
                                        lainnya.
                                        Sebagian besar lain lagi akan mengalir melewati sungai melewati berbagai tempat dan
                                        akhirnya sampai kembali di pantai, laut dan samudera. Begitu proses tersebut terus
                                        berulang membentuk siklus.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.2.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.2</span> Ilustrasi
                                        proses
                                        terjadinya siklus air</p>
                                    <p>Meskipun air secara terus menerus mengalami pergerakan, perpindahan tempat, perubahan
                                        wujud namun secara umum distribusi air di bumi dapat digambarkan pada grafik
                                        berikut.
                                    </p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.3.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.3</span> Persentase
                                        dan
                                        persebaran air tawar di bumi.</p>
                                    <p>Berdasarkan diagram diatas terlihat bahwa meskipun jumlah air dibumi sangat melimpah,
                                        namun hanya sekitar 1% saja yang dapat dimanfaatkan oleh kehidupan manusia dalam
                                        bentuk
                                        air tawar yang tersebar pada tanah, danau, sungai, uap air dan dalam
                                        penampungan-penampungan perumahan yang digunakan untuk minum, mandi, mencuci dan
                                        kebutuhan rumah tangga lainnya.</p>
                                    <div class="bg-primary">
                                        <div class="card-header border-0" id="headingEmpatbelas">
                                            <h5 class="accordion-faq m-0">
                                                <a class="text-dark" data-bs-toggle="collapse" href="#collapseEmpatbelas"
                                                    aria-expanded="true" onclick="buka_soal(14)">
                                                    <i id="daftar-1-14" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                    <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseEmpatbelas" class="collapse" aria-labelledby="headingEmpatbelas"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <div id="isi-soal-14"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <div class="border-top border-bottom border-dark">
                                        <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                        <p>Penampungan sumber air tawar terbaik bagi kehidupan manusia adalah dalam bentuk
                                            air
                                            tanah yang keluar ke permukaan melalui keberadaan mata air maupun proses
                                            pembuatan
                                            sumur air. Selain itu keberadaan danau dan sungai yang terjaga kebersihannya pun
                                            dapat juga menjadi satu alternatif penyediaan air tawar bagi manusia. Namun
                                            dengan
                                            perkembangan wilayah perkotaan yang semakin banyak beton yang menghalangi air
                                            masuk
                                            kedalam tanah. Maka sebagian besar air hujan malah mengalir di permukaan. Sungai
                                            yang tidak mampu menampung debit air yang melimpah akan menyebabkan terjadinya
                                            longsor dan banjir. Maka keberadaan bendungan dapat menjadi salah satu solusi
                                            pengendalian banjir dengan cara mengendalikan laju pergerakan air permukaan agar
                                            menjadi lebih lambat. Mengingat jumlah air yang tersedia di laut jauh lebih
                                            besar
                                            daripada di darat, kegiatan pembendungan air ini mungkin tidak akan mengganggu
                                            secara signifikan terhadap laju siklus hidrologi namun tentu saja akan membawa
                                            dampak negatif bagi keseimbangan ekosistem seperti pada migrasi ikan air sungai,
                                            Pelepasan air yang tidak teratur akan memicu terganggunya siklus pertumbuhan dan
                                            reproduksi alami pada banyak spesies, penggenangan air dalam waktu lama akan
                                            menyebabkan pertumbuhan pertumbuhan alga sehingga kualitas air menurun karena
                                            penurunan kadar oksigen.</p>
                                        <p>Untuk meminimalisir akibat negatif yang ditimbulkan bendungan adalah dengan
                                            membuat
                                            pengaturan kapan bendungan ditutup dan kapan bendungan dialirkan. Air sungai
                                            harus
                                            tetap dijaga alirannya agar tidak sampai kering. Selain itu pada bendungan juga
                                            harus disediakan jalur untuk ikan (fish ladder) agar bisa bermigrasi.</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.4.png" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="text-primary fw-bold">Gambar 3.4</span> <span
                                                class="fst-italic">Fish ladder</span> (jalur ikan) pada bendungan</p>
                                        <p>Keberadaan <span class="fst-italic">fish ladder</span> (jalur ikan) pada
                                            bendungan
                                            akan membantu tetap menjaga ekosistem hewan air yang hidup pada sungai yang
                                            dibendung</p>
                                        <p>Banyaknya uap air di atmosfer tidak menjamin akan berdampak pada banyaknya awan
                                            yang
                                            terbentuk. Untuk terjadinya awan diperlukan proses kondensasi/pengembunan dimana
                                            suhu uap air di atmosfer turun sehingga uap air berubah kembali menjadi titik
                                            air
                                            sebagai cikal bakal terbentuknya awan.</p>
                                    </div>
                                    <p id="daftar-3-5" class="fw-bold fs-5"><span class=text-primary>Awe Experience:</span> Apa manfaat gletser,
                                        air
                                        tanah, danau dan sungai</p>
                                    <p>Meskipun jumlah air tawar hanya sekitar 3% saja dari keseluruhan jumlah air yang ada
                                        di
                                        bumi, namun jumlah tersebut telah mampu mencukupi kebutuhan manusia. Beberapa
                                        mekanisme
                                        alami yang terjadi di alam memungkinkan air tawar dapat menetap di dataran tinggi
                                        dalam
                                        bentuk salju, danau dan mata air, di dataran rendah dalam bentuk air tanah dan
                                        kolam,
                                        dan bahkan di padang pasir tandus sekalipun dalam bentuk oasis. </p>
                                    <p>Selain itu, berbagai sumber penampungan air tawar juga dapat terhubung satu sama lain
                                        melalui saluran-saluran sungai, baik sungai di permukaan tanah maupun sungai bawah
                                        tanah. Dengan struktur molekul yang dimiliki oleh air sebagaimana dijelaskan pada
                                        bagian
                                        1, air memiliki kemampuan untuk mengalir dari tempat tinggi menuju tempat yang
                                        rendah
                                        karena pengaruh gravitasi. Namun kecepatan aliran air dari tempat yang tinggi di
                                        daerah
                                        pegunungan dapat dikendalikan dengan adanya tempat penampungan air seperti gunung
                                        salju,
                                        danau, kolam dan kolom air tanah. Jika saja air mengalir begitu saja tanpa adanya
                                        tempat-tempat penampungan alami, maka setelah air hujan turun ke permukaan tanah
                                        dalam
                                        bentuk air tawar, maka air tawar tersebut akan langsung mengalir ke tempat yang
                                        rendah
                                        dan berlalu begitu saja menuju laut kembali tanpa dapat dimanfaatkan lebih banyak
                                        oleh
                                        manusia untuk menunjang kehidupannya.</p>
                                    <p class="fw-bold text-primary">Gletser</p>
                                    <p>Gletser merupakan massa es yang terbentuk dari salju yang menumpuk selama
                                        berabad-abad.
                                        Gletser terbentuk di daerah yang sangat dingin, seperti pegunungan tinggi atau
                                        kutub.
                                        Proses terbentuknya gletser sangatlah lambat dan membutuhkan waktu bertahun-tahun.
                                        Meskipun gletser dapat mengalir ke perairan, gletser hanya terbentuk di daratan dan
                                        berbeda dengan es laut dan es danau yang jauh lebih tipis yang terbentuk di
                                        permukaan
                                        perairan.</p>
                                    <p>Di Bumi, 99% es glasial terkandung dalam lapisan es yang luas (juga dikenal sebagai
                                        "gletser kontinental") di wilayah kutub , namun gletser dapat ditemukan di
                                        pegunungan di
                                        setiap benua selain daratan Australia, termasuk dataran tinggi Oseania. negara
                                        kepulauan
                                        samudera seperti Selandia Baru . Gletser juga terdapat di Himalaya , Andes , dan
                                        beberapa gunung tinggi di Afrika Timur, Meksiko, Papua Nugini , dan di Zard-Kuh di
                                        Iran.
                                        Gletser yang berada di pegunungan menutupi sekitar 10% permukaan tanah bumi. </p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.5.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.5</span> Gletser
                                        pegunungan andes</p>
                                    <p>Gletser adalah reservoir air tawar terbesar di Bumi, yang menampung sekitar 70 persen
                                        air
                                        tawar dunia dengan lapisan es. Banyak gletser dari iklim sedang , pegunungan alpen ,
                                        dan
                                        kutub musiman menyimpan air sebagai es selama musim dingin dan kemudian
                                        melepaskannya
                                        dalam bentuk air lelehan karena suhu musim panas yang lebih hangat menyebabkan
                                        gletser
                                        mencair, sehingga menciptakan sumber air yang sangat penting. penting bagi tumbuhan,
                                        hewan dan manusia ketika sumber lain mungkin terbatas. </p>
                                    <p>Gletser merupakan media penampungan air tawar yang paling ideal di daerah dataran
                                        tinggi.
                                        Ketika air dalam bentuk cair akan langsung mengalir dari daerah pegunungan ke
                                        dataran
                                        rendah karena pengaruh gravitasi, maka air yang telah berubah wujud ke bentuk padat
                                        dalam bentuk salju dan gletser, akan dapat menetap di pegunungan tinggi dalam waktu
                                        yang
                                        lama (karena tidak akan mengalir seperti air dalam bentuk cair) dan hanya akan
                                        dialirkan
                                        dalam jumlah tertentu pada saat musim panas sehingga dapat menjadikannya sebagai
                                        sumber
                                        air tawar yang bermanfaat. Suhu yang diingin juga akan menjaga kualitas air tawar
                                        pada
                                        gleser sehingga terbebas dari perkembangan bakteri sehingga kita aka melihat air
                                        lelehan
                                        gletser tampak jernih dan bersih.</p>
                                    <p class="fw-bold text-primary">Air Tanah</p>
                                    <p>Air tanah merupakan air tawar yang terletak pada ruang pori bawah permukaan tanah dan
                                        batuan . Ini juga merupakan air yang mengalir di dalam akuifer di bawah permukaan
                                        air.
                                        Sekitar 29 persen dari seluruh air tawar yang tersedia di dunia adalah air tanah.
                                        Satuan
                                        batuan atau endapan yang tidak terkonsolidasi disebut akuifer jika dapat
                                        menghasilkan
                                        sejumlah air yang dapat digunakan. Kedalaman dimana ruang pori-pori tanah atau
                                        rekahan
                                        dan rongga pada batuan menjadi jenuh penuh dengan air disebut muka air tanah (water
                                        table).</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.6.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.6</span> Ilustrasi
                                        Air
                                        Tanah</p>
                                    <p>Air tanah diisi ulang dari permukaan; air tersebut dapat keluar dari permukaan secara
                                        alami melalui mata air dan rembesan , dan dapat membentuk oasis atau lahan basah.
                                        Selain
                                        itu, air tanah dapat muncul ke permukaan karena terdapat cekungan tanah dalam bentuk
                                        danau dan kolam. Karena air tanah berada pada tempat yang terlindungi di bawah tanah
                                        serta telah mengalami proses penyaringan alami oleh batuan dalam tanah, Air tanah
                                        seringkali tidak terlalu rentan terhadap polusi dibandingkan air permukaan. Oleh
                                        karena
                                        itu, umumnya digunakan untuk persediaan air untuk kebutuhan manusia. Orang-orang
                                        yang
                                        tinggal di pegunungan memanfaatkan mata air sebagai celah alami tempat keluarnya air
                                        tanah sebagai sumber air untuk kebutuhan sehari-hari. Sedangkan orang-orang yang
                                        tinggal
                                        di dataran yang lebih rendah biasanya membuat sumur dan memompa air tanah ke
                                        permukaan
                                        agar dapat digunakan.</p>
                                    <p>Air tanah dapat menjadi ' reservoir ' jangka panjang (dengan waktu tinggal dari
                                        beberapa
                                        hari hingga ribuan tahun), dibandingkan dengan reservoir air jangka pendek seperti
                                        atmosfer dan air tawar permukaan. Air tanah dapat ditemukan hampir di mana-mana.
                                        Permukaan air mungkin dalam atau dangkal; dan dapat naik atau turun tergantung pada
                                        banyak faktor. Hujan deras atau salju yang mencair dapat menyebabkan permukaan air
                                        naik,
                                        atau pemompaan pasokan air tanah secara besar-besaran dapat menyebabkan permukaan
                                        air
                                        turun.</p>
                                    <p>Persediaan air tanah diisi ulang, atau diisi ulang , melalui pencairan hujan dan
                                        salju
                                        yang meresap ke dalam celah dan celah di bawah permukaan tanah. Di beberapa wilayah
                                        di
                                        dunia, masyarakat menghadapi kekurangan air yang parah karena air tanah digunakan
                                        lebih
                                        cepat daripada yang dapat diisi ulang secara alami. Di daerah lain, air tanah
                                        tercemar
                                        oleh aktivitas manusia.</p>
                                    <p class="fw-bold text-primary">Danau, Oasis dan Sungai</p>
                                    <p>Danau adalah kumpulan air alami yang relatif besar dan tetap di permukaan bumi.
                                        Letaknya
                                        pada suatu cekungan atau cekungan yang saling berhubungan dan dikelilingi oleh lahan
                                        kering . Sebagian besar danau merupakan danau air tawar dan mencakup hampir seluruh
                                        permukaan air tawar di dunia, namun ada juga yang merupakan danau garam dengan
                                        salinitas
                                        bahkan lebih tinggi daripada air laut . Danau sangat bervariasi dalam luas permukaan
                                        dan
                                        volume.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.7.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.7</span> Danau</p>
                                    <p>Danau merupakan reservoir air tawar ketiga terbesar setelah gletser dan air tanah
                                        meskipun persentasenya kurang dari 1%. Beberapa manfaat air danau diantaranya
                                        adalah,
                                        Sumber pengairan untuk areal pertanian, tempat membudidayakan ikan air tawar,
                                        sebagai
                                        pencegahan dan pengendalian banjir dan sebagai sumber air minum bagi makhluk hidup.
                                    </p>
                                    <p>Sungai adalah aliran air di permukaan besar dan berbentuk memanjang yang mengalir
                                        secara
                                        terus-menerus dari hulu (sumber) menuju hilir (muara). Sungai merupakan tempat
                                        mengalirnya air secara gravitasi menuju ke tempat yang lebih rendah. Arah aliran
                                        sungai
                                        sesuai dengan sifat air mulai dari tempat yang tinggi ke tempat rendah. Sungai
                                        bermula
                                        dari gunung atau dataran tinggi (biasanya bermula dari mata air) menuju ke danau
                                        atau
                                        lautan. Sungai berperan penting untuk memindahkan air tawar dari tempat yang lebih
                                        tinggi ke tempat yang lebih rendah. Dalam proses perpindahan air tawar tersebut
                                        sungai
                                        banyak bermanfaat bagi makhluk hidup, selain sebagai tempat tinggal dan jalur
                                        migrasi
                                        berbagai hewan air tawar, oleh manusia juga sungai dapat dimanfaatkan sebagai satu
                                        sumber air bersih, sebagai sarana transportasi, sebagai sarana irigasi pertanian dan
                                        perkebunan dan sebagai sarana pembuangan air limpasan hujan.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.8.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.8</span> Sungai Bawah
                                        Tanah</p>
                                    <p>Selain sungai yang mengalir dipermukaan tanah, ada juga jenis sungai yang terletak di
                                        bawah tanah, disebut sebagai "underground river". Sungai bawah tanah adalah sungai
                                        yang
                                        mengalir sebagian atau seluruhnya di bawah tanah, dengan kata lain permukaan air dan
                                        tepi sungai tidak terekspos cahaya matahari. Sungai bawah tanah tidak sama dengan
                                        air
                                        tanah dan akuifer di mana air mengalir namun tidak seperti sungai melainkan melalui
                                        retakan kecil bebatuan dan pori-pori tanah.</p>
                                    <p>Sungai bawah tanah dapat terbentuk secara alami maupun buatan. Sungai bawah tanah
                                        buatan
                                        dapat merupakan hasil dari penutupan permukaan sungai atau pengalihan aliran sungai,
                                        yang biasanya merupakan bagian dari pembangunan kawasan urban.</p>
                                    <p>Oasis merupakan sumber mata air ditengah padang gurun. Karena memiliki sumber mata
                                        air,
                                        maka daerah di sekitar mata air tersebut biasanya menjadi subur sehingga ditumbuhi
                                        berbagai vegetasi tumbuhan.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.9.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.9</span> Oasis</p>
                                    <p>Oasis dibentuk dari sungai bawah tanah atau akuifer seperti akuifer artesis, dimana
                                        air
                                        dapat mencapai ke permukaan melalui tekanan secara alami maupun melalui sumur buatan
                                        manusia. Hujan dan badai sesaat yang kadang kala terjadi menyediakan air bawah tanah
                                        yang mempertahankan keberadaan oasis.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.10.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.10</span> Ilustrasi
                                        terbentuknya Oasis</p>
                                    <p>Lapisan bawah dari batuan tak berpori menjebak air dan menahannya di suatu kantong;
                                        atau
                                        penyimpanan bawah tanah yang lama di punggung bukit atau tanggul gunung dapat
                                        terkumpul
                                        dan menapis ke permukaan. Munculnya air kemudian digunakan oleh burung yang
                                        bermigrasi
                                        yang juga menjatuhkan bibit-bibit tanaman di pinggiran air membentuk sebuah oasis.
                                    </p>
                                    <p id="daftar-3-6" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
                                        dibalik
                                        adanya gletser, air tanah, danau dan sungai sebagai tempat penyimpanan air tawar.
                                    </p>
                                    <p>Relief permukaan bumi bermacam-macam mulai dari pantai, dataran, lembah, bukit,
                                        gurun,
                                        hingga gunung. Namun dengan kuasa-Nya Allah menjadikan air tawar yang merupakan
                                        sumber
                                        kehidupan manusia dapat menetap di berbagai relief muka bumi. Pada daerah pegunungan
                                        yang sangat tinggi air tawar dapat menetap dalam bentuk gletser dan salju yang
                                        sewaktu-waktu dapat mencair untuk kebutuhan hidup manusia. Pada daerah pegunungan
                                        rendah
                                        air tawar dapat menetap dalam air tanah yang merembes keluar lewat pancaran mata air
                                        di
                                        sela-sela bebatuan yang kemudian tergenang membentuk sungai maupun danau. Pada
                                        dataran
                                        rendah air tawar dapat menetap pada air dalam tanah yang dapat dikeluarkan melalui
                                        pembuatan sumur maupun penyedotan mesin pompa. Bahkan hingga daerah gurun sekalipun
                                        air
                                        dapat menetap dalam bentuk oasis.</p>
                                    <p>Dengan menyebernya sumber-sumber kumpulan air tawar diberbagai relief muka bumi, hal
                                        tersebut menegaskan sifat kasih sayang Allah dalam menjaga keberlangsungan hidup
                                        semua
                                        makhluk-makluk-Nya yang tinggal di bumi. Allah menghadirkan sumber mata air dan
                                        danau
                                        ditengah belantara hutan pegunungan sebagai sumber air minum bagi manusia dan
                                        berbagai
                                        hewan yang ada dihutan. Allah hadirkan oase di tengah padang gurun yang gersang
                                        sebagai
                                        sumber air minum bagi hewan-hewan gurun. Allah SWT berfirman dalam surat Ar-ra’d
                                        ayat 3
                                    </p>
                                    <p class="text-end fs-3">وَهُوَ ٱلَّذِى مَدَّ ٱلْأَرْضَ وَجَعَلَ فِيهَا رَوَٰسِىَ
                                        وَأَنْهَٰرًا ۖ
                                        وَمِن كُلِّ ٱلثَّمَرَٰتِ جَعَلَ فِيهَا زَوْجَيْنِ ٱثْنَيْنِ ۖ يُغْشِى ٱلَّيْلَ
                                        ٱلنَّهَارَ ۚ إِنَّ فِى ذَٰلِكَ لَءَايَٰتٍ لِّقَوْمٍ يَتَفَكَّرُونَ</p>
                                    <p class="fst-italic"><span class="fw-bold">Artinya:</span> Dan Dialah Tuhan yang
                                        membentangkan bumi dan menjadikan gunung-gunung dan sungai-sungai padanya. Dan
                                        menjadikan padanya semua buah-buahan berpasang-pasangan, Allah menutupkan malam
                                        kepada
                                        siang. Sesungguhnya pada yang demikian itu terdapat tanda-tanda (kebesaran Allah)
                                        bagi
                                        kaum yang memikirkan. <span class="fw-bold">(QS. Ar-Ra’d: 3)</span></p>
                                    <p>Pada Ayat diatas Allah SWT menyandingkan penciptaan gunung-gunung dan sungai sebagai
                                        satu
                                        isyarat bahwa sungai dan gunung selalu berdampingan, dimana ada gunung maka disitu
                                        akan
                                        ada sungai yang berfungsi mengalirkan air dari puncak gunung hingga ke dataran
                                        rendah,
                                        dimana pada setiap daerah-daerah yang dialiri air sungai tersebut Allah menjadikan
                                        tanahnya subur sehingga dapat ditanami berbagai tanaman.</p>
                                    <p>Sungai yang mengalirkan air deras seringkali pada awalnya hanya bersumber dari mata
                                        air
                                        kecil di pegunungan lalu bertemu dari berbagai cabang aliran air menjadi besar
                                        mengalir
                                        sampai jauh, menghanyutkan apa saja yang ada di dalamnya. Di sela-sela batu
                                        pegunungan,
                                        di antara rerimbunan dedaunan dan pepohonan hijau, seringkali dijumpai mata air yang
                                        sangat jernih dan tidak atau belum terkontaminasi oleh bahan-bahan kimia. Mata air
                                        yang
                                        muncul dari celah-celah bebatuan telah dinyatakan oleh Al-Qur’an, dalam Surah
                                        al-Baqarah
                                        ayat 74.</p>
                                    <p class="text-end fs-3">ثُمَّ قَسَتْ قُلُوبُكُم مِّنۢ بَعْدِ ذَٰلِكَ فَهِىَ كَٱلْحِجَارَةِ
                                        أَوْ
                                        أَشَدُّ قَسْوَةً ۚ وَإِنَّ مِنَ ٱلْحِجَارَةِ لَمَا يَتَفَجَّرُ مِنْهُ ٱلْأَنْهَٰرُ ۚ
                                        وَإِنَّ مِنْهَا لَمَا يَشَّقَّقُ فَيَخْرُجُ مِنْهُ ٱلْمَآءُ ۚ وَإِنَّ مِنْهَا لَمَا
                                        يَهْبِطُ مِنْ خَشْيَةِ ٱللَّهِ ۗ وَمَا ٱللَّهُ بِغَٰفِلٍ عَمَّا تَعْمَلُونَ</p>
                                    <p class="fst-italic"><span class="fw-bold">Artinya:</span> Kemudian setelah itu hatimu
                                        menjadi keras seperti batu, bahkan lebih keras lagi. Padahal diantara batu-batu itu
                                        sungguh ada yang mengalir sungai-sungai dari padanya dan diantaranya sungguh ada
                                        yang
                                        terbelah lalu keluarlah mata air dari padanya dan diantaranya sungguh ada yang
                                        meluncur
                                        jatuh, karena takut kepada Allah. Dan Allah sekali-sekali tidak lengah dari apa yang
                                        kamu kerjakan. <span class="fw-bold">(QS. Al-Baqarah:74)</span></p>
                                    <p>Ayat ini berbicara tentang adanya manusia yang berhati keras bagai batu, diberi
                                        nasihat
                                        atau tidak diberi nasihat sama saja tanpa bekas. Begitu kerasnya ia melebihi batu
                                        cadas,
                                        lalu Allah menceritakan bahwa sekeras-kerasnya batu ada di antaranya yang
                                        mengalirkan
                                        air dalam jumlah besar, bahkan dari celah-celahnya mengalir mata air yang jernih.
                                        Hal
                                        ini sesuai dengan fakta ilmiah yang menyatakan bahwa sebagian besar mata berasal
                                        dari
                                        air hujan yang meresap ke dalam tanah dan menjadi air tanah. Air tanah kemudian
                                        mengalir
                                        melalui retakan dan celah di dalam tanah dan bebatuan yang dapat berupa celah kecil
                                        sampai gua bawah tanah. Air tersebut pada akhirnya akan menyembur keluar dari bawah
                                        tanah menuju permukaan dalam bentuk mata air.</p>
                                    <p>Selain proses terjadinya mata air di pegunungan, Allah SWT juga menggambarkan dalam
                                        Al-Quran tentang keberadaan sumber mata air di tengah padang pasir sebagaian yang
                                        dikisahkan dalam kisah Nabi Musa a.s yang diabadikan dalam surat Al-Baqarah ayat 60
                                    </p>
                                    <p class="text-end fs-3">وَإِذِ اسْتَسْقَى مُوسَى لِقَوْمِهِ فَقُلْنَا اضْرِبْ بِعَصَاكَ
                                        الْحَجَرَ فَانْفَجَرَتْ مِنْهُ اثْنَتَا عَشْرَةَ عَيْنًا قَدْ عَلِمَ كُلُّ أُنَاسٍ
                                        مَشْرَبَهُمْ كُلُوا وَاشْرَبُوا مِنْ رِزْقِ اللَّهِ وَلا تَعْثَوْا فِي الأرْضِ
                                        مُفْسِدِينَ </p>
                                    <p class="fst-italic"><span class="fw-bold">Artinya:</span> "Dan (ingatlah) ketika Musa
                                        memohon air untuk kaumnya, lalu Kami berfirman: "Pukullah batu itu dengan
                                        tongkatmu".
                                        lalu memancarlah daripadanya dua belas mata air. sungguh tiap-tiap suku telah
                                        mengetahui
                                        tempat minumnya (masing-masing). Makan dan minumlah rezki (yang diberikan) Allah,
                                        dan
                                        janganlah kamu berkeliaran di muka bumi dengan berbuat kerusakan." <span
                                            class="fw-bold">(QS. Al Baqarah : 60)</span></p>
                                    <p>Begitu pentingnya kedudukan mata air sebagai sumber air bersih bagi kehidupan dan
                                        sungai
                                        sebagai media untuk mengalirkan air sebagai sumber kehidupan tersebut ke seluruh
                                        makhluk
                                        hidup yang ada di bumi, maka Allah SWT seringkali menggambaarkan keindahan surga
                                        dengan
                                        kehadiran mata air dan sungai-sungai yang mengalir didalamanya. Sebagaimana
                                        firman-Nya
                                        dalam Surat Ar Rahman ayat 66 yang berbunyi:</p>
                                    <p class="text-end fs-3">فِيْهِمَا عَيْنٰنِ نَضَّاخَتٰنِۚ - </p>
                                    <p class="fst-italic"><span class="fw-bold">Artinya:</span> "Di dalam keduanya ada dua
                                        mata
                                        air yang memancar tanpa henti." <span class="fw-bold">(QS Ar-Rahman : 66)</span></p>
                                    <p>Selain itu, Allah SWT berfirman dalam Surat Al Insan ayat 6:</p>
                                    <p class="text-end fs-3">عَيْنًا يَّشْرَبُ بِهَا عِبَادُ اللّٰهِ يُفَجِّرُوْنَهَا تَفْجِيْرًا
                                        –
                                    </p>
                                    <p class="fst-italic"><span class="fw-bold">Artinya:</span> "(yaitu) mata air (dalam
                                        surga)
                                        yang diminum oleh hamba-hamba Allah dan dapat mereka pancarkan dengan mudah." <span
                                            class="fw-bold">(QS Al Insan: 6)</span></p>
                                    <p>Allah SWT juga berfirman dalam surat Al-baqarah ayat 25</p>
                                    <p class="text-end fs-3">وَبَشِّرِ ٱلَّذِينَ ءَامَنُوا۟ وَعَمِلُوا۟ ٱلصَّٰلِحَٰتِ أَنَّ
                                        لَهُمْ
                                        جَنَّٰتٍ تَجْرِى مِن تَحْتِهَا ٱلْأَنْهَٰرُ ۖ كُلَّمَا رُزِقُوا۟ مِنْهَا مِن
                                        ثَمَرَةٍ
                                        رِّزْقًا ۙ قَالُوا۟ هَٰذَا ٱلَّذِى رُزِقْنَا مِن قَبْلُ ۖ وَأُتُوا۟ بِهِۦ
                                        مُتَشَٰبِهًا ۖ
                                    </p>
                                    <p class="fst-italic"><span class="fw-bold">Artinya:</span> Dan sampaikanlah berita
                                        gembira
                                        kepada mereka yang beriman dan berbuat baik, bahwa bagi mereka disediakan
                                        surga-surga
                                        yang mengalir sungai-sungai di dalamnya. Setiap mereka diberi rezeki buah-buahan
                                        dalam
                                        surga-surga itu, mereka mengatakan: "Inilah yang pernah diberikan kepada kami
                                        dahulu"…
                                        <span class="fw-bold">(QS. Al-baqarah : 25)</span></p>
                                    <p>Walaupun dalam ayat-ayat diatas Allah SWT menggambarkan surga dengan adanya mata air
                                        dan
                                        sungai, namun tentu saja secara wujud dan bentuk mungkin tidak sama dengan mata air
                                        dan
                                        sungai yang ada di bumi yang tentu saja mata ar dan sungai yang ada di surga jauh
                                        lebih
                                        indah dari yang ada di bumi. Namun, penggambaran ini merupakan sebagai salah satu
                                        cara
                                        Allah SWT untuk menggambarkan keindahan surga. Karena walau bagaimanapun fitrah
                                        manusia
                                        dimanapun ia berada menyukai dan menyenangi dengan mata air dan sungai yang jernih,
                                        karena dengannya kan tumbuh berbagai sumber kehidupan yang menyenangkan, dimana
                                        ikan-ikan akan dapat tumbuh dan berkembang biak dengan baik, tumbuh-tumbuhan juga
                                        akan
                                        tumbuh subur sepanjang sungai.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.11.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.11</span> Sungai
                                        jernih
                                        yang melewati pedesaan.</p>
                                    <p>Banyak orang yang mendambakan memiliki rumah atau tempat berlibur di pinggiran sungai
                                    yang indah. Bahkan di beberapa kota maju sungai dijaga sedemikain rupa sehingga
                                    menambah
                                    keindahan sebuah kota.</p>
                                </div>
                            </div> 
                    </div>
                </div>
            </div>
            <!-- END Persebaran Air di Muka Bumi -->
            <!-- Mekanisme Terjadinya Siklus Air -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingEleven">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-perubahan-wujud-air" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                            PERUBAHAN WUJUD AIR<i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div id="bagian-3-2">
                                <p class="fw-bold text-primary fs-5">Mekanisme Terjadinya Siklus Air</p>
                                <p>Siklus air merupakan istilah yang merujuk pada pergerakan air yang terus menerus di
                                    dalam
                                    bumi dan atmosfer. Panas matahari merupakan sumber energi utama yang mendorong
                                    terjadinya siklus hidrologi. Ketika air di permukaan laut dipanaskan oleh Matahari,
                                    air
                                    tersebut memperoleh energi. Dengan energi yang cukup, molekul air cair berubah
                                    menjadi
                                    uap air dan berpindah ke udara. Uap air yang hangat diatas permukaan laut akan naik
                                    ke
                                    atas karena massa jenis yang lebih rendah dari udara. Ketika uap hangat bergerak ke
                                    atas
                                    dan bertemu dengan udara dingin maka terjadi proses kondensasi sehingga terbentuklah
                                    awan.</p>
                                <p>Selain digunakan untuk menguapkan air, panas matahari juga digunakan untuk memanaskan
                                    permukaan bumi. Pada siang hari Permukaan darat lebih panas dari permukaan laut
                                    sehingga
                                    angin bergerak dari laut ke darat sambil menggerakan awan dari atas laut menuju
                                    daratan.
                                </p>
                                <p>Gaya gravitasi berperan dalam menarik tetes awan yang berat menjadi tetes hujan
                                    sehingga
                                    jatuh ke permukaan bumi. Gaya gravitasi juga berperan dalam penyerapan air kedalam
                                    tanah
                                    dan membuat air sungai mengalir dari dataran tinggi ke dataran rendah hingga air
                                    sampai
                                    kembali ke laut. Dari sekian banyak proses yang terlibat dalam siklus air, beberapa
                                    proses penting dalam siklus air diantaranya adalah evaporasi, transpirasi,
                                    kondensasi,
                                    presipitasi, dan runoff.</p>
                                <p id="daftar-3-8" class="text-primary fw-bold">EVAPORASI </p>
                                <p>Evaporasi adalah proses di mana air yang ada di laut, rawa, sungai dan lainnya
                                    menguap
                                    karena adanya pemanasan dari sinar matahari. Dalam hal ini, air diubah menjadi uap
                                    air
                                    atau gas, sehingga bisa naik ke atmosfer. Penguapan atau evaporasi adalah bagian
                                    esensial dari siklus air dimana uap air di udara yang terbentuk dalam proses
                                    evaporasi
                                    merupakan cikal bakal pembentukan awan yang akan bergerak menuju darat dan turun
                                    sebagai
                                    air hujan.</p>
                                <p>Dalam siklus air, evaporasi terjadi ketika sinar matahari menghangatkan permukaan
                                    air.
                                    Panas matahari membuat molekul air bergerak semakin cepat, hingga bergerak begitu
                                    cepat
                                    hingga lepas sebagai gas. Setelah menguap, sebuah molekul uap air menghabiskan
                                    sekitar
                                    sepuluh hari di udara.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.12.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.12</span> panas
                                    matahari
                                    akan menyebabkan permukaan air laut menguap</p>
                                <p>Semakin tinggi panas matahari, jumlah air yang menjadi uap air dan naik ke atmosfer
                                    juga
                                    akan semakin besar. Evaporasi atau penguapan merupakan sebagai sebuah proses
                                    pergerakan
                                    molekul air di permukaan air menjadi molekul uap air di atmosfer. Proses evaporasi
                                    dibagi atas dua kejadian yang berkesinambungan, yaitu interface evaporation dan
                                    vertical
                                    vapor transfer.</p>
                                <p><span class="fst-italic">Interface evaporation</span> merupakan transformasi air
                                    menjadi
                                    uap air di permukaan. Sedangkan Vertical vapor transfer merupakan proses pemindahan
                                    lapisan udara yang jenuh uap air yang dihasilkan dari proses interface evaporation
                                    dari
                                    permukaan air menuju ke atas.</p>
                                <p>Evaporasi terjadi dalam skala global. Selain kondensasi dan presipitasi, evaporasi
                                    adalah
                                    salah satu dari tiga langkah utama dalam siklus air bumi. Evaporasi menyumbang 90%
                                    kelembaban di atmosfer bumi, 10% lainnya disebabkan oleh transpirasi tanaman.
                                    Evaporasi
                                    dari lautan sangat penting untuk produksi air tawar. Karena lebih dari 70 persen
                                    permukaan bumi ditutupi oleh lautan, maka lautan merupakan sumber utama air di
                                    atmosfer.
                                </p>
                                <p>Meskipun air laut asin, ketika proses evaporasi terjadi, garamnya tertinggal sehingga
                                    uap
                                    air merupakan air tawar bukan air asin seperti air laut. Hal ini dapat terjadi
                                    karena
                                    garam terdiri dari atom (ion) bermuatan listrik seperti Na + dan Cl - . Mereka bisa
                                    saling menempel dalam kristal besar, sehingga Itu terlalu berat untuk diuapkan.
                                    Mereka
                                    juga bisa masuk ke dalam air sebagai ion terpisah. Dibutuhkan banyak energi untuk
                                    menarik salah satu ion bermuatan tersebut keluar dari air.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingLimabelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseLimabelas"
                                                aria-expanded="true" onclick="buka_soal(15)">
                                                <i id="daftar-1-15" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseLimabelas" class="collapse" aria-labelledby="headingLimabelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-15"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>Banyaknya uap air di atmosfer tidak menjamin akan berdampak pada banyaknya awan
                                        yang
                                        terbentuk. Untuk terjadinya awan diperlukan proses kondensasi/pengembunan dimana
                                        suhu uap air di atmosfer turun sehingga uap air berubah kembali menjadi titik
                                        air
                                        sebagai cikal bakal terbentuknya awan. Ketika udara tetap panas sepanjang hari
                                        maka
                                        uap air akan tetap berada di udara dalam bentuk uap air dan tidak terkondensasi
                                        membentuk awan.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.13.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.13</span> anas
                                        matahari yang terik akan menguapkan air pada tanah dan tumbuhan</p>
                                </div>
                                <p id="daftar-3-10" class="fw-bold text-primary">TRANSPIRASI</p>
                                <p>Transpirasi merupakan penguapan atau hilangnya uap air dari permukaan tumbuhan. Pada
                                    proses ini, tumbuhan mengeluarkan uap H<sub>2</sub>O dan CO<sub>2</sub> pada siang
                                    hari
                                    yang panas. Transpirasi berlangsung melalui pori-pori daun yang berhubungan dengan
                                    udara
                                    luar.Tahapan ini bertujuan untuk mengubah air berwujud cair dalam jaringan makhluk
                                    hidup
                                    menjadi uap air dan membawanya naik ke atmosfer. Tahapan ini memiliki jumlah air
                                    menjadi
                                    uap lebih sedikit dari tahapan evaporasi.</p>
                                <p>Ditinjau dari sisi tumbuhan itu sendiri, proses transpirasi merupakan mekanisme
                                    tumbuhan
                                    untuk membuang kelebihan air. Ketika tanaman menyerap air melalui akarnya, tanaman
                                    menyerap lebih banyak daripada yang dibutuhkan untuk bertahan hidup. Sebenarnya
                                    tumbuhan
                                    hanya menggunakan sekitar dua hingga tiga persen air yang diserap tanaman untuk
                                    pertumbuhan dan perkembangannya, sehingga sisanya dikeluarkan melalui proses
                                    transpirasi. Setelah akar menyerap air dari tanah, mereka kemudian melepaskannya
                                    dalam
                                    bentuk uap .</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.14.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.14</span> Sinar
                                    matahari
                                    membantu proses fotosintesis pada tumbuhan yang menghasilkan uap air yang lepas ke
                                    atmosfer</p>
                                <p>Transpirasi membantu tanaman untuk berfotosintesis dengan baik. Saat tumbuhan
                                    bertranspirasi, ia membuka lubang-lubang kecil di permukaan daunnya yang disebut
                                    stomata
                                    . Selain memungkinkan keluarnya uap air, lubang-lubang ini memungkinkan lebih banyak
                                    karbon dioksida masuk ke dalam tanaman, yang penting agar fotosintesis dapat
                                    berlangsung
                                    dengan baik.</p>
                                <p>Meskipun transpirasi pada dasarnya merupakan proses yang diadopsi oleh tanaman, namun
                                    transpirasi merupakan sumber air yang sangat penting di atmosfer. Transpirasi
                                    tumbuhan
                                    merupakan proses yang tidak terlihat, karena air menguap dari permukaan daun. Secara
                                    total, 10% kelembaban atmosfer berasal dari proses ini. Selama musim tanam, sehelai
                                    daun
                                    akan mengeluarkan air berkali-kali lipat lebih banyak daripada beratnya sendiri.
                                    Satu
                                    hektar jagung mengeluarkan sekitar 3.000-4.000 galon (11.400-15.100 liter) uap air
                                    setiap hari, dan sebatang pohon besar dapat mengeluarkan 40.000 galon (151.000
                                    liter)
                                    uap air per tahun.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingEnambelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseEnambelas"
                                                aria-expanded="true" onclick="buka_soal(16)">
                                                <i id="daftar-1-16" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEnambelas" class="collapse" aria-labelledby="headingEnambelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-16"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>Penggundulan hutan atau deforestasi dapat mempengaruhi siklus hidrologi karena
                                        saat
                                        pohon ditebang maka air yang diuapkan dalam proses transpirasi ke atmosfer
                                        berkurang.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.15.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.15</span>
                                        Penggundulan hutan akan menyebabkan berkurangnya uap air yang dihasilkan dari
                                        proses
                                        transpirasi</p>
                                    <p>Meskipun tumbuhan hanya menyumbang 10% dari pembentukan uap air di atmosfer,
                                        jumlah
                                        tersebut merupakan jumlah yang cukup banyak. Pengurangan vegetasi tumbuhan akan
                                        berakibat pada proses pembentukan awan yang terjadi dalam proses hidrologi akan
                                        berjalan sedikit lebih lambat, sehingga hujan akan lebih sedikit turun.</p>
                                </div>
                                <br>
                                <p id="daftar-3-12" class="fw-bold text-primary">KONDENSASI</p>
                                <p>Kondensasi adalah proses dimana uap air di udara diubah menjadi air cair; itu
                                    kebalikan
                                    dari penguapan. Kondensasi sangat penting dalam siklus air karena bertanggung jawab
                                    atas
                                    pembentukan awan. Awan merupakan objek yang bertanggung jawab untuk mendistribusikan
                                    air
                                    ke berbagai tempat di permukaan bumi. Dengan bantuan angin awan akan bergerak menuju
                                    tempat-tempat terjauh sekalipun dari laut. Awan dapat bergerak menuju pegunungan,
                                    perkotaan dan bahkan menuju daerah gurun sekalipun.</p>
                                <p>Proses kondensasi merupakan kelanjutan dari evaporasi dan transpirasi. Setelah uap
                                    air
                                    hasil evaporasi dan transpirasi bergerak vertikal ke atas, karena semakin keatas
                                    suhu
                                    semakin dingin maka pada titik tertentu uap air yang bergerak ke atas akan mengalami
                                    pendinginan sehingga kelembaban nisbinya (RH) akan bertambah (kelembaban nisbi
                                    adalah
                                    perbandingan jumlah uap air di dalam udara dengan jumlah uap air maksimum yang dapat
                                    dikandung dalam udara tersebut). Ketika kelembaban nisbi mencapai sekitar 78% proses
                                    kondensasi akan dimulai dengan ditandai mulai terbentuknya titik air. Tetes air
                                    kemudian
                                    mulai tumbuh menjadi tetes awan pada saat kelembaban nisbi mendekati 100 %. Tetes
                                    kondensasi yang terbentuk memiliki jari-jari sekitar 2 µm sedangkan tetes awan yang
                                    terbentuk umumnya mempunyai jari-jari 5 – 20 µm. </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.16.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.16</span> Pembentukan
                                    tets awan dan tetes hujan dari uap air</p>
                                <p>Selain melalui arus konveksi, proses pembentukan awan juga terjadi lewat ‘pemaksaan’
                                    pergerakan udara melewati lereng miring seperti gunung, sehingga saat uap air
                                    melintas,
                                    uap air tersebut akan dipaksa bergerak naik keatas mengikuti kontur gunung sehingga
                                    semakin keatas terjadi proses kondensasi yang merubah uap air menjadi awan. Itulah
                                    sebabnya mengapa kita dapat menjumpai awan di hampir semua puncak gunung.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.17.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.17</span> hembusan
                                    angin
                                    lembah ke arah gunung akan mendorong uap air naik dan berkondensasi menjadi awan</p>
                                <p>Angin yang bergerak dari lembah ke gunung berkaitan dengan proses terjadinya angin
                                    lembah
                                    dan angin gunung, dimana ketika udara di lembah lebih panas daripada udara di gunung
                                    maka akan terjadi angin lembah yang juga mendorong uap air untuk naik ke atas gunung
                                    sehingga terbentuk awan.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingTujuhbelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseTujuhbelas"
                                                aria-expanded="true" onclick="buka_soal(17)">
                                                <i id="daftar-1-17" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTujuhbelas" class="collapse" aria-labelledby="headingTujuhbelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-17"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <!-- GAMBAR BELUM -->
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>Setidaknya ada 3 penjelasan yang dapat memberikan alasan mengapa awan tetap
                                        melayang
                                        di atmosfer. Pertama, Seperti halnya semua benda yang ada di bumi, tetesan kecil
                                        air
                                        yang membentuk awan tertarik ke Bumi oleh gravitasi. Tapi tetesan ini sangat
                                        kecil
                                        sehingga sulit bagi mereka untuk melewati udara di bawahnya. Karena gesekan
                                        udara
                                        disekitarnya, tetesan tersebut tidak jatuh dengan cepat, yaitu dengan kecepatan
                                        hanya sekitar satu sentimeter (cm) per detik, dan angin yang bertiup ke atas
                                        dapat
                                        membawa tetesan ini kembali naik.</p>
                                    <p>Kedua, gravitasi mengakibatkan kerapatan udara berbeda, dimana semakin dekat
                                        dengan
                                        permukaan bumi kerapatan semakin tinggi. Uap air terbentuk dari ikatan Hidrogen
                                        dan
                                        oksigen, sedangkan udara pada lapisan permukaan didominasi oleh nitrogen dan
                                        oksigen
                                        Seperti yang yang kita ketahui pada tabel periodik, berat atom nitrogen tunggal
                                        adalah 14, sedangkan oksigen hampir 16. Tetapi atom nitrogen dan oksigen tidak
                                        pernah tunggal, mereka hampir selalu berpasangan, dua atom dalam satu molekul.
                                        Karena itu, molekul nitrogen biasanya berbobot 28 dan molekul oksigen berbobot
                                        32.
                                        Molekul air terdiri dari dua atom hidrogen dan satu atom oksigen, satu molekul
                                        air
                                        hanya memiliki berat 18. Jadi sebenarnya air lebih ringan dari molekul nitrogen
                                        atau
                                        oksigen, itu sebabnya udara lembab lebih ringan dari pada udara kering.</p>
                                    <p>Ketiga, faktor suhu. Ketika uap air di permukaan memiliki suhu yang lebih tinggi
                                        dari
                                        udara maka uap air akan naik, namun ketika naik uap air tersebut perlahan akan
                                        mendingin dan perlahan akan kembali ke membentuk tetes air. Pada saat bersamaan
                                        uap
                                        air akan melepaskan kalor ke lingkungan. Ini berarti bahwa tetes air dan tetes
                                        awan
                                        sekarang dikelilingi oleh selimut kecil udara hangat. Dan udara hangat selalu
                                        naik.
                                        Maka tetes air akan terbawa udara naik, namun tidak terlalu tinggi, karena suhu
                                        mendingin lagi setelah di atas. Begitu proses tersebut akan terus terjadi selama
                                        dipermukaan bumi terjadi pemanasan permukaan air, maka tetes awan tidak akan
                                        pernah
                                        turun ke permukaan bumi.</p>
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>

                                <p class="text-primary">Jenis-Jenis Awan</p>
                                <p>Berdasarkan bentuknya dan letak ketinggiannya, awan dapat digolongkan menjadi 3
                                    kelompok
                                    besar, yaitu awan tinggi, awan menengah, dan awan rendah. Yang termasuk kedalam awan
                                    tinggi adalah cirrus, cirrocumulus dan cirrostratus. Yang termasuk kedalam awan
                                    menengah
                                    adalah Altocumulus dan Altostratus. Terakhir, yang termasu kedalam kategori awan
                                    rendah
                                    adalah stratocumulus, cumulus, stratus, Nimbus dan Cumolonimbus.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.20.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.20</span> Jenis-jenis
                                    awan berdasarkan ketinggian</p>
                                <p>Berikut adalah uraian lebih mendetail tentang jenis-jenis awan beserta ciri khas,
                                    ketinggian, serta kondisi cuaca yang dapat ditandai oleh masing-masing jenis awan
                                </p>
                                <p class="text-primary">Awan Cirrus (Ci)</p>
                                <p>Awan cirrus adalah awan tinggi yang terlihat seperti serat-serat halus atau
                                    garis-garis
                                    tipis di langit. Biasanya tampak putih dan tipis, sering kali memberikan kesan
                                    seperti
                                    "sapu" di langit. Awan ini berada pada ketinggian sekitar 6.000-12.000 meter di atas
                                    permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.21.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.21</span> Awan Cirrus
                                </p>
                                <p>Awan cirrus terbuat dari kristal es dan sering menandakan cuaca baik. Meskipun awan
                                    ini
                                    biasanya tidak membawa hujan, kemunculannya sering menandakan bahwa cuaca akan
                                    berubah
                                    menjadi kurang stabil, dan dapat diikuti oleh hujan atau badai dalam waktu dekat.
                                </p>
                                <p class="text-primary">Awan Cirrocumulus (Cc)</p>
                                <p>Awan cirrocumulus terlihat seperti lapisan kecil atau gumpalan awan putih yang
                                    tersebar
                                    di langit, sering kali membentuk pola seperti "puzzle" atau "lapisan". Awan ini
                                    berada
                                    pada ketinggian sekitar 6.000-12.000 meter di atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.22.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.22</span> Awan
                                    Cirrocumulus</p>
                                <p>Awan cirrocumulus biasanya tidak menutupi seluruh langit dan tidak membawa hujan,
                                    tetapi
                                    bisa menandakan perubahan cuaca dalam waktu dekat.</p>
                                <p class="text-primary">Awan Cirrostratus (Cs)</p>
                                <p>Awan cirrostratus adalah lapisan awan tipis yang menutupi langit seperti selubung
                                    tipis,
                                    sering kali membuat langit tampak berkabut atau kabur. Awan ini berada pada
                                    ketinggian
                                    sekitar 6.000-12.000 meter di atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.23.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.23</span> Awan
                                    Cirrostratus</p>
                                <p>Awan cirrostratus sering menandakan bahwa hujan ringan atau salju mungkin akan segera
                                    datang. Mungkin juga menyebabkan pelangi atau halo.</p>
                                <p class="text-primary">Awan Altocumulus (Ac)</p>
                                <p>Awan altocumulus terlihat seperti gumpalan-gumpalan atau lapisan-lapisan awan putih
                                    atau
                                    abu-abu di langit, sering kali membentuk pola yang teratur. Awan ini berada pada
                                    ketinggian sekitar 2.000-6.000 meter di atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.24.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.24</span> Awan
                                    Altocumulus</p>
                                <p>Awan altocumulus biasanya tidak membawa hujan, tetapi dapat menandakan cuaca buruk
                                    atau
                                    perubahan cuaca dalam waktu dekat.</p>
                                <p class="text-primary">Awan Altostratus (As)</p>
                                <p>Awan altostratus adalah lapisan awan abu-abu atau biru kelabu yang menutupi langit,
                                    sering kali menghalangi cahaya matahari sehingga langit terlihat redup. Awan ini
                                    berada
                                    pada ketinggian sekitar 2.000-6.000 meter di atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.25.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.25</span> Awan
                                    Altostratus</p>
                                <p>Awan altostratus sering kali menandakan bahwa hujan atau salju akan segera turun.
                                    Awan
                                    ini biasanya menyertai cuaca basah.</p>
                                <p class="text-primary">Awan Stratocumulus (Sc)</p>
                                <p>Awan stratocumulus terlihat seperti gumpalan-gumpalan atau lapisan-lapisan awan
                                    berwarna
                                    abu-abu di langit, sering kali tampak bergelombang atau berbintik. Awan ini berada
                                    pada
                                    ketinggian sekitar 1.000-2.000 meter di atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.26.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.26</span> Awan
                                    Stratocumulus</p>
                                <p>Awan stratocumulus biasanya tidak membawa hujan, tetapi bisa mengakibatkan cuaca
                                    dingin
                                    atau berawan.</p>
                                <p class="text-primary">Awan Cumulus (Cu)</p>
                                <p>Awan cumulus adalah awan yang tampak seperti gumpalan putih yang berbentuk seperti
                                    kapas
                                    dengan tepi yang halus dan biasanya memiliki puncak berbentuk tonjolan. Awan ini
                                    berada
                                    pada ketinggian yang rendah, mulai dari dekat permukaan hingga sekitar 2.000 meter
                                    di
                                    atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.27.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.27</span> Awan
                                    Cumulus
                                </p>
                                <p>Awan cumulus biasanya menandakan cuaca cerah dan kering, meskipun beberapa bisa
                                    berkembang menjadi cumulonimbus yang membawa badai.</p>
                                <p class="text-primary">Awan Stratus (St)</p>
                                <p>Awan stratus adalah lapisan tipis awan yang menutupi langit secara merata, memberikan
                                    kesan langit berawan atau mendung. Awan ini biasanya berada pada ketinggian yang
                                    dekat
                                    permukaan bumi hingga sekitar 2.000 meter.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.28.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.28</span> Awan
                                    Stratus
                                </p>
                                <p>Awan stratus bisa menghasilkan gerimis atau kabut ringan, dan sering kali membuat
                                    cuaca
                                    terasa dingin dan lembap.</p>
                                <p class="text-primary">Awan Nimbus (Nimbostratus)</p>
                                <p>Awan nimbus (atau nimbostratus) adalah awan yang padat dan gelap yang menutupi langit
                                    secara menyeluruh. Biasanya tidak memiliki bentuk yang teratur dan tampak tebal.
                                    Awan
                                    ini biasanya berada pada ketinggian yang rendah hingga menengah, dari dekat
                                    permukaan
                                    bumi hingga sekitar 2.000 meter.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.29.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.29</span> Awan
                                    Nimbostratus</p>
                                <p>Awan nimbus dapat menyebabkan hujan lebat, salju, atau hujan ringan yang berlangsung
                                    lama. Awan ini sering menandakan cuaca buruk yang persisten.</p>
                                <p class="text-primary">Awan Cumulonimbus (Cb)</p>
                                <p>Awan cumulonimbus merupakan awan cumulus yang sangat besar dan tinggi, dengan bentuk
                                    seperti kubah atau menara yang menjulang tinggi hingga lapisan stratosfer. Puncaknya
                                    sering kali berbentuk anvil. Awan ini menjulang dari ketinggan rendah hingga
                                    mencapai
                                    lebih dari 12.000 meter di atas permukaan bumi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.30.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.30</span> Awan
                                    Cumulonimbus</p>
                                <p>Awan cumulonimbus dapat menyebabkan badai petir, hujan deras, angin kencang, dan
                                    kadang-kadang tornado. Ini adalah jenis awan yang paling ekstrem dan sering
                                    dikaitkan
                                    dengan cuaca sangat buruk.</p>
                                <br>
                                <p id="daftar-3-14" class="fw-bold text-primary">KONVEKSI DAN ADVEKSI</p>
                                <p>Konveksi adalah gerakan udara dengan arah vertikal. Udara panas akan memiliki
                                    kerapatan
                                    yang rendah sehingga akan bergerak ke atas. Adveksi adalah gerakan udara yang
                                    arahnya
                                    horizontal atau mendatar.</p>
                                <p>Seperti yang sudah dibahas sebelumnya bahwa ketika terjadi pemanasan pada permukaan
                                    air
                                    maka akan terjadi penguapan yang dilanjutkan dengan terjadinya arus konveksi berupa
                                    pergerakan uap panas dari permukaan air menuju ke atmosfer sebagai cikal bakal
                                    pembentukan awan. Maka peran konveksi yang pertama dalam siklus hidrologi adalah
                                    dalam
                                    menggerakan uap air menuju ke atmosfer.</p>
                                <p>Selain terjadi di permukaan laut, arus konveksi (udara panas) juga terjadi di
                                    daratan.
                                    Ketika arus konveksi menggerakan udara secara vertikal maka udara yang kosong akan
                                    diisi
                                    oleh udara di sekitarnya yang memiliki suhu rendah sehingga terjadi pergerakan udara
                                    secara horizontal yang disebut sebagai adveksi (kita merasakan pergerakan udara
                                    horizontal sebagai angin). Mekanisme adveksi tersebutlah yang berperan dalam
                                    menggerakan
                                    awan secara horizontal </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.31.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.31</span>Hubungan
                                    antara
                                    arah arus konveksi dan arah arus adveksi</p>
                                <p>Jika tidak ada mekanisme adveksi maka awan yang terbentuk tidak akan dapat bergerak
                                    dan
                                    menjangkau daerah-daerah di daratan. Gerak awan tidak dapat diduga dengan pasti
                                    karena
                                    mengikuti arah arus adveksi. Namun secara sederhana dapat kita memprediksikan bahwa
                                    awan
                                    akan bergerak dari suatu tempat yang memiliki suhu tinggi ke tempat yang memiliki
                                    suhu
                                    rendah sedangkan angin di permukaan bumi yang kita rasakan akan bergerak dari tempat
                                    bersuhu rendah ke tempat yang bersuhu tinggi. Jika permukaan darat lebih panas dari
                                    permukaan laut maka awan cenderung akan bergerak dari darat ke laut, sebaliknya
                                    ketika
                                    suhu permukaan laut lebih panas daripada suhu di permukaan darat maka awan cenderung
                                    akan bergerak dari laut ke darat.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.32.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.32</span>Pergerakan
                                    awan
                                    mengikuti arah arus adveksi</p>
                                <p>Berdasarkan uraian mekanisme terjadinya arus konveksi dan adveksi sebagaimana
                                    dipaparkan
                                    diatas, kita dapat mengetahui bahwa mekanisme ini penting dalam proses pergerakan
                                    awan
                                    dari satu tempat ke tempat lain. Melalui mekanisme ini maka awan memungkinkan dapat
                                    bergerak secara acak menuju ke berbagai tempat sesuai dengan arah arus adveksi
                                    sehingga
                                    setiap tempat akan memiliki kesempatan yang sama. Dalam hal ini matahari memegang
                                    peranan penting dalam menaikan suhu di satu tempat sehingga terjadi perbedaan suhu
                                    di
                                    berbagai tempat yang memicu terjadinya arus konveksi dan adveksi.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDelapanbelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDelapanbelas"
                                                aria-expanded="true" onclick="buka_soal(18)">
                                                <i id="daftar-1-18" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDelapanbelas" class="collapse" aria-labelledby="headingDelapanbelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-18"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.33.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.33</span>Angin
                                        laut
                                        pada siang hari searah dengan arah arus adveksi dingin</p>
                                    <p>Pada siang hari daratan lebih panas daripada lautan, sehingga pada daratan akan
                                        terjadi arus konveksi udara panas ke atas dan arus adveksi udara panas dari
                                        darat ke
                                        laut di atmosfer (lihat tanda panah merah no 2), sebagai akibatnya untuk mengisi
                                        kekosongan udara di darat maka akan terjadi arus adveksi udara dingin di
                                        permukaan
                                        bumi yang bergerak dari laut ke darat (lihat panah kuning no 1). Jadi pada siang
                                        hari kecenderungan awan akan bergerak dari darat ke laut mengikuti arus adveksi
                                        atmosfer sedangkan kita yang berdiri di tepi pantai akan merasakan hembusan
                                        udara
                                        dingin dari pantai menuju darat..</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.34.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.34</span>Angin
                                        darat
                                        pada malam hari searah dengan arah arus adveksi dingin</p>
                                    <p>Sebaliknya pada malam hari laut lebih panas daripada daratan sehingga dilautan
                                        akan
                                        terjadi arus konveksi udara panas ke atas dan arus adveksi udara panas di
                                        atmosfer
                                        dari laut ke darat (perhatikan arah panah merah no 2), sebagai akibatnya untuk
                                        mengisi kekosongan udara yang ditinggalkan di laut maka akan terjadi arus
                                        adveksi
                                        udara dingin di permukaan bumi yang bergerak dari darat ke laut. Jadi pada malam
                                        hari kecenderungan awan akan bergerak dari laut ke darat mengikuti arus adveksi
                                        atmosfer dan kita yang berdiri di tepi pantai akan merasakan angin dingin
                                        bergerak
                                        dari darat menuju laut.</p>
                                </div>
                                <br>
                                <p id="daftar-3-16" class="fw-bold text-primary">PRESIPITASI</p>
                                <p>Jika pada bagian sebelumnya kita sudah membahas mengenai bagaimana proses
                                    terbentuknya
                                    awan melalui evaporasi, transpirasi dan kondensasi, serta bagaimana awan dapat
                                    bergerak
                                    melalui konveksi dan adveksi. Maka pada bagian ini akan dijelaskan bagaimana awan
                                    yang
                                    sudah terbentuk di atmosfer dapat berubah menjadi tetes air hujan yang turun ke
                                    permuaan
                                    bumi. Jatuhnya tetes awan ke permukaan bumi dalam bentuk tetes air hujan, hujan es
                                    atau
                                    salju dinamakan presipitasi.</p>
                                <p>Mekanisme terjadinya presipitasi dapat dijelaskan sebagai berikut. Ketika uap air
                                    mengalami kondensasi, maka uap air akan berubah menjadi tetes air dengan diameter
                                    yang
                                    kecil (sekitar 2 µm). ketika udara terasa mendingin maka beberapa tetes air kemudian
                                    akan bergabung dan akan mulai tumbuh menjadi tetes awan yang umumnya mempunyai
                                    jari-jari
                                    5 – 20 µm. Tetes awan yang memiliki jari-jari yang besar otomatis akan memiliki
                                    massa
                                    yang besar. Gaya gravitasi akan menarik tetes awan tersebut untuk jatuh dengan
                                    kecepatan
                                    0,01 – 5 cm/s. namun karena kecepatan aliran udara ke atas jauh lebih besar dari
                                    kecepatan tetes awan tersebut maka tetes awan tersebut akan tertahan dan tidak akan
                                    jatuh ke bumi. Bahkan jika kelembaban udara kurang dari 90 % maka tetes tersebut
                                    akan
                                    kembali menguap. Untuk dapat jatuh ke bumi tanpa menguap maka diperlukan suatu tetes
                                    yang lebih besar yaitu sekitar 1000-2000 µm (1-2 mm), karena hanya dengan ukuran
                                    demikian tetes tersebut dapat mengalahkan gerakan udara ke atas.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.35.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.35</span>Perbandingan
                                    ukuran uap air, tetes awan dan tetes hujan</p>
                                <p>Jika awan lebih dingin, seperti di tempat yang lebih tinggi, tetesan air mungkin
                                    membeku
                                    dan membentuk es. Kristal es ini kemudian jatuh ke bumi sebagai salju, hujan es,
                                    atau
                                    hujan, bergantung pada suhu di dalam awan dan di permukaan bumi. </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.36.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.36</span>Ketebalan
                                    lapisan udara hangat akan mempengaruhi jenis hujan yang turun ke bumi</p>
                                <p>Partikel debu atau asap di atmosfer penting untuk terjadinya presipitasi.
                                    Partikel-partikel ini, yang disebut “inti kondensasi”, menyediakan permukaan tempat
                                    uap
                                    air mengembun. Hal ini membantu tetesan air berkumpul dan menjadi cukup besar untuk
                                    jatuh ke bumi.</p>
                                <p class="fw-bol text-italic">Hujan Air (Rain)</p>
                                <p>Pada dasarnya, sebagian besar hujan sebenarnya dimulai dari salju yang tinggi di
                                    awan.
                                    Saat kepingan salju jatuh melalui udara yang lebih hangat, mereka menjadi tetesan
                                    air
                                    hujan. Jika lapisan udara yang hangat terus menyelimuti sampai permukaan bumi maka
                                    tetes
                                    hujan dalam bentuk air akan terus bertahan sampai jatuh ke permukaan bumi. Itulah
                                    hujan
                                    yang biasa kita saksikan sehari-hari</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.37.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.37</span>bentuk tetes
                                    air
                                    hujan</p>
                                <p>Kesalahpahaman yang umum terjadi adalah ketika tetesan air hujan jatuh, bentuknya
                                    seperti
                                    tetesan air mata (berbentuk lonjong dimana bagian depan membesar dan bagian belakang
                                    mirip seperti ekor). Namun pada faktanya, tetesan air hujan yang lebih kecil (yang
                                    lebarnya kira-kira satu milimeter (1000 µm)) berbentuk hampir bulat sempurna.
                                    Tetesan
                                    air hujan yang lebih besar (lebar dua hingga tiga millimeter (2000 - 3000 µm)) juga
                                    berbentuk bulat, tetapi dengan lekukan kecil di sisi bawahnya. Mereka lebih mirip
                                    kacang
                                    merah ketika jatuh. Tetesan air hujan yang sangat besar (lebih besar dari 4,5
                                    millimeter
                                    (4500 µm)) memiliki lekukan yang sangat besar dan lebih mirip parasut. Tetesan
                                    ekstra
                                    besar ini biasanya pecah menjadi dua tetesan yang lebih kecil. Lekukan pada tetesan
                                    air
                                    hujan disebabkan oleh hambatan udara.</p>
                                <p class="fw-bold text-primary">Hujan Salju (Snow)</p>
                                <p>Fenomena salju terbentuk seperti tetesan hujan. Kepingan salju mulai dari uap air di
                                    awan. Ketika suhu awan di bawah titik beku, uap air yang ada di awan berubah menjadi
                                    kepingan salju. Salju dapat terbentuk ketika kristal es di awan bersatu menjadi
                                    kepingan
                                    salju saat suhu rendah dan ada kelembaban di atmosfer. Kepingan salju terdiri dari
                                    kristal es kecil dalam jumlah banyak yang saling menempel. Kemudian saat cukup
                                    berat,
                                    akan turun ke permukaan bumi. Kepingan salju yang turun melalui udara lembab,
                                    sedikit
                                    lebih hangat dari 0℃. Kepingan tersebut akan meleleh di sekitar tepinya dan tetap
                                    bersatu menghasilkan serpihan besar. Salju turun melalui udara dingin dan kering
                                    menghasilkan salju bubuk yang saling berpisah.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.38.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.38</span>Ilustrasi
                                    suhu
                                    udara yang diperlukan untuk terjadinya hujan salju</p>
                                <p>Salju terbentuk ketika suhu atmosfer berada pada atau di bawah titik beku (0°C atau
                                    32°F). Jika suhu tanah berada pada atau di bawah titik beku, salju akan mencapai
                                    permukaan tanah. Namun salju masih bisa mencapai permukaan tanah saat suhu tanah
                                    berada
                                    di atas titik beku jika kondisinya tepat. Dalam hal ini, kepingan salju akan mulai
                                    mencair saat mencapai lapisan bersuhu lebih tinggi ini; pencairan tersebut
                                    menciptakan
                                    pendinginan evaporatif, yang langsung mendinginkan udara di sekitar kepingan salju.
                                    Pendinginan ini memperlambat pencairan. Namun, sebagai aturan umum, salju tidak akan
                                    terbentuk jika suhu tanah minimal 5°C (41°F).</p>
                                <p>Selain faktor suhu, agar salju bisa turun, kelembaban harus ada di atmosfer. Salju
                                    dapat
                                    terjadi bahkan pada suhu yang sangat rendah, selama terdapat sumber kelembaban dan
                                    cara
                                    untuk mengangkat atau mendinginkan udara. Namun memang benar bahwa sebagian besar
                                    hujan
                                    salju lebat terjadi ketika udara di dekat tanah relatif hangat—biasanya -9°C (15°F)
                                    atau
                                    lebih hangat—karena udara yang lebih hangat dapat menampung lebih banyak uap air.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.39.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.39</span>Hujan salju
                                </p>
                                <p>Karena pembentukan salju memerlukan kelembaban, daerah yang sangat dingin namun
                                    sangat
                                    kering mungkin jarang menerima salju. Lembah Kering di Antartika, misalnya,
                                    merupakan
                                    bagian benua terbesar yang bebas es. Lembah Kering cukup dingin namun memiliki
                                    kelembaban yang sangat rendah, dan angin kencang membantu menyerap sisa kelembaban
                                    dari
                                    udara. Akibatnya, wilayah yang sangat dingin ini hanya menerima sedikit salju.</p>
                                <p>Di dunia, salju biasa terjadi pada negeri beriklim subtropis dan sedang. Namun, ada
                                    juga
                                    daerah tropis yang bersalju, yakni di Pegunungan Jayawijaya dan Barisan Sudirman di
                                    Papua, Indonesia. Selain itu, ada juga salju di Gunung Kilimanjaro, Tanzania, yang
                                    sekarang semakin menipis karena perubahan iklim dan pemanasan global.</p>
                                <p class="fw-bold text-primary">Hujan Es <span class="fst-italic">(Sleet)</span></p>
                                <p><span class="fw-bold">Hujan</span> es terjadi ketika kepingan salju hanya mencair
                                    sebagian saat jatuh melalui lapisan udara hangat yang tipis. Tetesan air es ini
                                    membeku
                                    kembali saat jatuh melalui lapisan dalam udara beku di atas permukaan, dan akhirnya
                                    mencapai tanah sebagai tetesan hujan beku yang memantul saat terkena benturan. </p>
                                <p>Ketika salju yang turun mencapai suhu lebih hangat dari 32 derajat dalam
                                    perjalanannya ke
                                    tanah, salju tersebut akan mencair. Terkadang salju yang mencair itu tetap berbentuk
                                    cair dan mencapai tanah sebagai hujan. Dalam kasus lain, sebagian salju dapat
                                    mencair
                                    dan kemudian membeku kembali sebelum menyentuh tanah sebagai hujan beku.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.40.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.40</span>Ilustrasi
                                    suhu
                                    udara yang diperlukan untuk terjadinya hujan es</p>
                                <p>Hujan es biasanya terbentuk ketika salju yang turun melewati lapisan udara antara 34
                                    dan
                                    38 derajat, dan kemudian memasuki kembali kondisi beku. Hujan es biasanya dapat
                                    dikenali
                                    dari kecenderungannya menghasilkan suara tumbukan diatas atap atau memantul ketika
                                    menyentuh jalan. Hujan es dapat terlihat seperti dan disalahartikan sebagai salju
                                    jika
                                    mulai menumpuk di tanah.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.41.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.41</span>Hujan es</p>
                                <p>Hujan es dapat terjadi dimana saja selama kondisinya memenuhi syarat. Negara yang
                                    sepanjang tahun hangat seperti wilayah tropis, memungkinkan juga untuk turun hujan
                                    es.
                                    di Indonesia sendiri yang beriklim tropis hujan es sering terjadi di berbagai
                                    wilayah
                                    bersamaan dengan terjadinya musim hujan.</p>
                                <p class="fw-bold text-primary">Hujan Beku <span class="fst-italic">(Freezing
                                        Rain)</span>
                                </p>
                                <p>Jenis hujan keempat yang dapat terjadi di permukaan bumi adalah hujan beku. Pada
                                    dasarnya
                                    hujan beku sama seperti hujan air dimana hujan yang turun dari atmosfer berbentuk
                                    cair.
                                    Namun yang membedakan hujan air (rain) dan hujan beku (Freezing rain) adalah pada
                                    saat
                                    air hujan tersebut menyentuh permukaan tanah. Jika pada hujan hujan air (rain),
                                    hujan
                                    akan tetap berbentuk cair ketika menyentuh tanah, maka pada hujan beku (Freezing
                                    rain),
                                    air akan berubah menjadi es pada saat menyentuh tanah.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.42.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.42</span>Ilustrasi
                                    suhu
                                    udara yang diperlukan untuk terjadinya hujan beku</p>
                                <p>Hujan beku terjadi ketika kepingan salju turun ke lapisan udara yang lebih hangat dan
                                    mencair seluruhnya. Ketika tetesan air cair ini jatuh melalui lapisan tipis udara
                                    beku
                                    tepat di atas permukaan, tetesan tersebut tidak memiliki cukup waktu untuk membeku
                                    kembali sebelum mencapai tanah. Karena suhunya “sangat dingin”, es akan langsung
                                    membeku
                                    kembali saat bersentuhan dengan apa pun yang suhunya berada pada atau di bawah 0
                                    derajat
                                    C, sehingga menciptakan lapisan es di tanah, pohon, kabel listrik, atau benda
                                    lainnya.
                                    Akumulasi hujan beku dalam jumlah besar yang berlangsung beberapa jam atau lebih
                                    disebut
                                    badai es.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.43.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.43</span>Hujan beku
                                </p>
                                <p>Mengingat proses hujan beku membutuhkan tempat yang dapat mendinginkan tanah hingga
                                    di
                                    bawah 0 derajat C maka jenis hujan ini tidak terjadi di sembarang tempat. Wilayah
                                    yang
                                    memiliki cuaca dingin seperti daerah sub tropis dan kutub lebih berpotensi
                                    terjadinya
                                    hujan beku dibanding daerah hangat seperti tropis.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingSembilanbelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSembilanbelas"
                                                aria-expanded="true" onclick="buka_soal(19)">
                                                <i id="daftar-1-19" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSembilanbelas" class="collapse" aria-labelledby="headingSembilanbelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-19"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>Hujan asam adalah istilah luas yang mencakup segala bentuk presipitasi dengan
                                        komponen asam, seperti asam sulfat atau asam nitrat yang jatuh ke tanah dari
                                        atmosfer. Hal ini dapat berupa hujan, salju, kabut, hujan es, atau bahkan debu
                                        yang
                                        bersifat asam.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.44.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar
                                            3.44</span>Ilustrasi
                                        terjadinya hujan asam</p>
                                    <p>Hujan asam terjadi ketika sulfur dioksida (SO2 ) dan nitrogen oksida (NOX )
                                        dilepaskan ke atmosfer dan diangkut oleh angin dan arus udara. SO2 dan NOX
                                        bereaksi
                                        dengan air, oksigen dan bahan kimia lainnya membentuk asam sulfat dan nitrat.
                                        Ini
                                        kemudian bercampur dengan air dan bahan lainnya sebelum jatuh ke tanah.</p>
                                    <p>Meskipun sebagian kecil SO2 dan NOX yang menyebabkan hujan asam berasal dari
                                        sumber
                                        alami seperti gunung berapi, sebagian besar berasal dari pembakaran bahan bakar
                                        fosil.</p>
                                </div>
                                <br>
                                <br>
                                <p id="daftar-3-18" class="fw-bold text-primary">INFILTRASI DAN <span class="fst-italic">SURFACE
                                        RUNOFF</span></p>
                                <p> Sebagaimana dijelaskan sebelumnya, ketika tetes awan telah memiliki ukuran dan massa
                                    yang cukup, maka tarikan gravitasi akan menjatuhkannya ke permukaan bumi sebagai
                                    tetes
                                    hujan. Pada awalnya sebagian besar tetes hujan sebenarnya berbentuk salju yang
                                    tinggi di
                                    awan. Saat kepingan salju jatuh melalui udara yang lebih hangat ( >
                                    0<span>&#8451;</span>), mereka akan berubah menjadi tetesan air hujan. Namun saat
                                    salju
                                    jatuh melalui udara yang dingin (&lt;0<span>&#8451;</span>), mereka akan tetap
                                    berbentuk
                                    salju hingga di permukaan tanah dan akan tetap berada pada wujud salju hingga panas
                                    matahari melelehkan nya.</p>
                                <p>Jka tetes hujan sampai dipermukaan bumi dalam bentuk air, maka terdapat dua
                                    kemungkinan
                                    yang akan terjadi pada tetes hujan tersebut, mereka mungkin meresap ke dalam
                                    celah-celah
                                    tanah <span class="fst-italic">(infiltrasi)</span> atau mengalir dipermukaan tanah
                                    atau
                                    melalui saluran air seperti sungai <span class="fst-italic">(Surface runoff)</span>.
                                    Air
                                    yang meresap kedalam tanah masih dipengaruhi gravitasi dan masih dapat mengalir
                                    menuruni
                                    lereng <span class="fst-italic">(interflow atau throughflow)</span> sehingga
                                    bergabung
                                    dengan air sungai atau air danau, atau terus meresap kedalam tanah hingga mencapai
                                    muka
                                    air tanah <span class="fst-italic">(water table)</span></p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.45.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.45</span>Air hujan
                                    yang
                                    turun ke bumi sebagian mengalir di permukaan dan sebagian lain meresap ke dalam
                                    tanah
                                </p>
                                <p>Adapun jika tetes hujan jatuh ke bumi dalam bentuk salju, maka salju tersebut akan
                                    tetap
                                    bertahan dalam bentuk salju menutupi permukaan tanah dan bahkan menjadikan permukaan
                                    sungai dan danau menjadi es. saat salju tersebut mendapatkan sinar matahari maka
                                    salju
                                    akan melebur menjadi air yang mungkin meresap kedalam tanah atau mengalir melalui
                                    permukaan tanah.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.46.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.46</span>Salju yang
                                    mencair dapat meresapkan air ke dalam tanah</p>
                                <p>Beberapa faktor yang mempengaruhi banyaknya air yang meresap ke dalam tanah
                                    diantaranya
                                    adalah: intensitas curah hujan, karakteristik tanah, kemiringan lahan, kejenuhan
                                    tanah
                                    dan jenis tutupan vegetasi..</p>
                                <ul>
                                    <li>1. <span class="fw-bold">Curah hujan:</span> Faktor terbesar yang mengendalikan
                                        infiltrasi adalah jumlah dan karakteristik (intensitas, durasi, dll.) curah
                                        hujan
                                        yang turun sebagai hujan atau salju. Curah hujan yang meresap ke dalam tanah
                                        sering
                                        kali merembes ke dasar sungai dalam jangka waktu yang lama, sehingga aliran
                                        sungai
                                        sering kali terus mengalir ketika sudah lama tidak hujan dan tidak ada limpasan
                                        langsung dari curah hujan baru-baru ini.</li>
                                    <li>2. <span class="fw-bold">Karakteristik tanah:</span> Beberapa tanah, seperti
                                        tanah
                                        liat, menyerap lebih sedikit air dengan kecepatan lebih lambat dibandingkan
                                        tanah
                                        berpasir. Tanah yang menyerap lebih sedikit air mengakibatkan lebih banyak
                                        limpasan
                                        air ke sungai.</li>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.47.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar
                                            3.47</span>Karakteristik tanah yang berbeda memiliki kemampuan meresapkan
                                        air
                                        yang berbeda pula</p>
                                    <li>3. <span class="fw-bold">Kemiringan lahan:</span> Air yang jatuh di lahan yang
                                        curam
                                        mengalir lebih cepat dan lebih sedikit infiltrasinya dibandingkan air yang jatuh
                                        di
                                        lahan datar.</li>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.48.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.48</span>Semakin
                                        miring permukaan tanah maka semakin sedikit yang meresap ke dalam tanah</p>
                                    <li>4. Kejenuhan tanah : Seperti spons basah, tanah yang sudah jenuh akibat curah
                                        hujan
                                        sebelumnya tidak dapat menyerap lebih banyak lagi, sehingga lebih banyak curah
                                        hujan
                                        akan menjadi limpasan permukaan.</li>
                                    <li>5. Tutupan lahan : Beberapa tutupan lahan mempunyai dampak yang besar terhadap
                                        infiltrasi dan limpasan curah hujan. Vegetasi dapat memperlambat pergerakan
                                        limpasan
                                        air sehingga memberikan lebih banyak waktu bagi limpasan air untuk meresap ke
                                        dalam
                                        tanah. Permukaan yang kedap air , seperti tempat parkir, jalan raya, dan
                                        pembangunan, bertindak sebagai "jalur cepat" untuk curah hujan - langsung ke
                                        saluran
                                        air hujan yang mengalir langsung ke sungai. Pertanian dan pengolahan tanah juga
                                        mengubah pola infiltrasi suatu lanskap. Air yang pada kondisi alaminya langsung
                                        meresap ke dalam tanah kini mengalir ke sungai.</li>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.49.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.49</span>Tanah
                                        yang
                                        ditutupi tumbuhan lebih banyak meresapkan air daripada tanah yang gundul</p>
                                    <li>6. Evapotranspirasi : Sebagian infiltrasi menetap di dekat permukaan tanah,
                                        tempat
                                        tumbuhnya akar tanaman. Tumbuhan membutuhkan air tanah dangkal ini untuk tumbuh,
                                        dan
                                        melalui proses evapotranspirasi, air dipindahkan kembali ke atmosfer.</li>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.50.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.50</span>Tanah
                                        yang
                                        ditumbuhi tumbuhan meresapkan air lebih dangkal daripada tanah gersang</p>
                                </ul>
                                <br>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDuapuluh">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuapuluh"
                                                aria-expanded="true" onclick="buka_soal(20)">
                                                <i id="daftar-1-20" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuapuluh" class="collapse" aria-labelledby="headingDuapuluh"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-20"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>secara normal, tetes hujan yang jatuh ke permukaan bumi seharusnya sebagian besar
                                        menyerap kedalam tanah dan sebagian kecil mengalir melalui permukaan air menuju
                                        saluran air (sungai) dan tertampung di kolam atau danau sebelum dilanjutkan
                                        mengalir
                                        kembali ke laut. Namun, ketika terjadi beberapa permasalahan maka akan terjadi
                                        ketidakseimbangan jumlah air yang menyerap kedalam tanah dan jumlah air yang
                                        mengalir di permukaan. Beberapa permasalahan tersebut diantaranya.</p>
                                    <ul>
                                        <li>1. Ketika hujan jatuh di kemiringan gunung yang gundul (tidak terdapat
                                            vegetasi
                                            tumbuhan) maka akan lebih banyak air yang bergerak di permukaan dibanding
                                            air
                                            yang menyerap sehingga terjadi longsor dimana pergerakan air permukaan akan
                                            ikut
                                            serta membawa tanah yang dilewatinya.</li>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.51.png"
                                                class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="text-primary fw-bold">Gambar
                                                3.51</span>Tanah
                                            miring yang tidak ditumbuhi tumbuhan akan memiliki potensi longsor ketika
                                            turun
                                            hujan</p>
                                        <div class="container mt-3">
                                            <div class="row align-items-center" style = "width : 250px;">
                                                <div class="col-2">
                                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.52.png"
                                                        class="img-fluid">
                                                </div>
                                                <div class="col">
                                                    <p>2. Longsoran air hujan yang membawa tanah akan membuat sungai
                                                        menjadi
                                                        dangkal sehingga penampungan aliran air menjadi tidak seimbang
                                                        dan
                                                        akhirnya terjadi overflow yang akan berdampak pada penggenangan
                                                        air
                                                        di wilayah yang tidak diharapkan (banjir).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container mt-3">
                                            <div class="row align-items-center" style = "width : 250px;">
                                                <div class="col-2">
                                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.53.png"
                                                        class="img-fluid">
                                                </div>
                                                <div class="col">
                                                    <p>3. Ketika hujan jatuh di perkotaan yang sebagian besar tertutupi
                                                        beton, jalan raya dan tembok maka air tidak dapat menyerap dan
                                                        langsung mengalir secara cepat menuju sungai sehingga
                                                        memungkinkan
                                                        juga terjadi kelebihan debit air sungai yang juga menyebabkan
                                                        banjir. Terlebih jika sungai dipenuhi sampah yang akan semakin
                                                        memeprlambat laju air.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container mt-3">
                                            <div class="row align-items-center" style = "width : 250px;">
                                                <div class="col-2">
                                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.54.png"
                                                        class="img-fluid">
                                                </div>
                                                <div class="col">
                                                    <p>4. Ketika di suatu suatu wilayah tidak mengalami hujan atau
                                                        kemarau
                                                        dalam kurun waktu yang cukup lama atau curah hujan di bawah
                                                        normal,
                                                        sehingga kandungan air di dalam tanah berkurang atau bahkan
                                                        tidak
                                                        ada maka terjadilah bencana kekeringan tanah.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <p id="daftar-3-20" class="text-primary fw-bold"><span class="fst-italic">COLLECTION/</span>PENGUMPULAN</p>
                                <p>Sebagaimana dijelaskan sebelumnya, ketika air hujan turun ke permukaan bumi maka
                                    terdapat
                                    dua kemungkinan yang akan terjadi pada tetes hujan tersebut, mereka mengalir di
                                    permukaan (Surface runoff) atau Air mungkin akan meresap ke dalam celah-celah tanah
                                    (infiltrasi). Air yang mengalir dipermukaan akan bergerak menuju tempat-tempat yang
                                    rendah melalui saluran-saluran air sehingga mengisi cekungan-cekungan di daratan
                                    seperti
                                    kolam, danau atau rawa. Kelebihan air yang berada di daratan akan terus mengalir
                                    menuju
                                    dataran rendah hingga akhirnya bermuara di laut sebagai tempat penampungan air
                                    terbesar
                                    dimuka bumi. Ketika air sampai di laut maka air tersebut akan memulai kembali untuk
                                    melakukan siklus hidrologi. </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.55.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.55</span>Air hujan
                                    yang
                                    mengalir di permukaan tanah pada akhirnya akan berkumpul di danau atau lautan</p>
                                <p>Adapun air yang meresap kedalam tanah sebagian kecil diserap oleh tumbuhan dan
                                    digunakan
                                    untuk proses transpirasi sedangkan sebagian besar air yang meresap kedalam tanah
                                    akan
                                    terus menembus hingga sampai pada muka air tanah (water table) dan akan menetap
                                    disana
                                    menjadi air tanah (Groundwater) yang menjadi sumber penampungan air bersih yang bisa
                                    digunakan manusia kapanpun dengan membuat sumur dan menyedotnya dengan pompa. Proses
                                    pengumpulan air ke berbagai badan air seperti laut , samudera, danau, sungai,
                                    gletser,
                                    kolam, dan bawah tanah dinamakan collections atau pengumpulan.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.56.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.56</span>Sebagian
                                    besar
                                    air tawar berkumpul di dalam tanah</p>
                                <p>Air tanah adalah sesuatu yang kita butuhkan di seluruh dunia. Manusia dan hewan
                                    membutuhkan air untuk bertahan hidup karena tubuh kita tidak dapat berfungsi
                                    tanpanya.
                                    Kita juga membutuhkan air untuk membantu kita bercocok tanam, menyalakan peralatan,
                                    dan
                                    membuat kita tetap nyaman. Kita mungkin melihat indahnya aliran air permukaan yang
                                    membentuk lautan, danau, dan sungai, namun air ini tidak selalu aman untuk
                                    dikonsumsi
                                    dan jauh lebih sulit untuk disaring dibandingkan air tanah. Masyarakat membutuhkan
                                    lebih
                                    banyak air bersih dibandingkan dengan air hujan dan air permukaan, itulah sebabnya
                                    air
                                    tanah sangat sering digunakan. Jumlah air yang ditampung oleh tanah sangat luar
                                    biasa
                                    dan dapat menyediakan miliaran galon air per hari bagi manusia. Air tanah merupakan
                                    penyumbang utama pasokan air tawar di bumi dan bertanggung jawab menyediakan hingga
                                    40%
                                    air tawar di dunia</p>
                                <p>Air tanah sendiri dibedakan menjadi dua yaitu air tanah dangkal (Freatik) dan Air
                                    Tanah
                                    Dalam (Artesis). Air Tanah Freatik sebagai air tanah pada permukaan yang dangkal
                                    dimana
                                    letaknya tidak jauh dari permukaan tanah dan berada diatas lapisan kedap air. Karena
                                    letaknya tidak jauh dari permukaan maka air ini gampang untuk diperoleh, air sumur
                                    galian merupakan contoh air freatik. Namun, karena air freatik ini letaknya cukup
                                    dekat
                                    dengan permukaan tanah, meungkinkan air ini tercemar dan masih mengandung mineral
                                    dan
                                    bakteri berbahaya karena tidak sepenuhnya dapat disaring secara sempurna oleh
                                    lapisan
                                    tanah. Oleh sebab itu, pemanfaatan air freatik untuk keperluan konsumsi biasanya
                                    harus
                                    melalui proses penyaringan mineral berbahaya atau proses perebusan untuk mematikan
                                    bakteri.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.57.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.57</span>Air tanah di
                                    bedakan menjadi air tanah dangkal dan air tanah dalam</p>
                                <p>Air Tanah Dalam atau disebut juga sebagai Artesis merupakan air tanah yang terletak
                                    di
                                    antara lapisan akuifer dan batuan kedap air, contohnya ada pada pada sumur artesis.
                                    Air
                                    Artesis juga disebut dengan air tanah dalam, karena dapat ditemukan pada kedalaman
                                    30
                                    -80 meter dari permukaan tanah. Air tanah ini juga dapat diminum atau dikonsumsi
                                    secara
                                    langsung karena sudah mengalami penyaringan secara sempurna dan terbebas dari kuman
                                    ataupun bakteri. Terkumpulnya air bersih di dalam tanah yang dapat dimanfaatkan
                                    manusia
                                    sepanjang waktu untuk menunjang kehidupan merupakan tujuan akhir dari siklus siklus
                                    hidrologi. Dengan tersedianya air tanah yang bersih dalam jumlah yang cukup membuat
                                    manusia tidak perlu merasa khawatir akan kebutuhan terhadap air bersih.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDuasatu">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuasatu"
                                                aria-expanded="true" onclick="buka_soal(21)">
                                                <i id="daftar-1-21" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuasatu" class="collapse" aria-labelledby="headingDuasatu"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-21"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>Dalam skala global, ketinggian muka air tanah akan sejajar dengan ketinggian air
                                        kolam, air danau dan air laut (berdasarkan hukum fisika, air yang terhubung akan
                                        memiliki ketinggian yang sama). Jadi selama air laut masih ada, maka air dalam
                                        tanah
                                        juga akan tetap tersedia.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.58.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar
                                            3.58</span>Ketinggian
                                        muka air tanah sejatinya sejajar dengan ketinggian air permukaan.</p>
                                    <p>Namun dalam skala lokal tentu saja air tanah dapat mengalami penurunan permukaan.
                                        Penurunan muka air tanah ditandai dengan semakin sulitnya kita menemukan air
                                        dalam
                                        tanah. Jika pada keadaan normal penggalian tanah beberapa meter saja kita sudah
                                        menemukan air didalam tanah, maka pada keadaan dimana muka air tanah mengalami
                                        penurunan kita harus menggali lebih dalam untuk mendapatkan air tanah. Beberapa
                                        faktor yang menyebabkan penurunan muka air tanah diantaranya adalah:</p>
                                    <ul>
                                        <li>1. <span class="fw-bold">Memompa air tanah dari akuifer secara terus
                                                menerus.</span> Manusia memompa air lebih cepat daripada kemampuan air
                                            tanah
                                            untuk memperbaharui diri, sehingga menyebabkan kekurangan pasokan air tanah.
                                            Sebagai dunia yang sedang berkembang dengan jumlah penduduk yang terus
                                            meningkat, semakin banyak kita memompa air dari dalam tanah dengan kecepatan
                                            tinggi, semakin sulit bagi air tanah untuk menyediakan jumlah air yang kita
                                            perlukan</li>
                                        <li>2. <span class="fw-bold">Ketidakseimbangan tekanan air laut dan tekanan air
                                                tanah.</span> Ketersediaan air tanah yang berkualitas dapat terjaga
                                            ketika
                                            tekanan air laut dan tekanan air tanah seimbang. Ketika air bawah tanah
                                            mendapatkan tambahan debit dari proses infiltrasi maka tekanan air tanah
                                            akan
                                            lebih tinggi dari tekanan air laut sehingga air tanah akan mengalir ke laut.
                                            sebaliknya ketika tekanan air tanah berkurang (karena penyedotan dalam
                                            jumlah
                                            yang sangat banyak) maka air laut akan meresap ke tanah dan berakibat pada
                                            penurunan kualitas air tanah karena air laut membawa garam mineral (ditandai
                                            dengan air tanah yang terasa payau)</li>
                                        <li>3. <span class="fw-bold">Tidak adanya praktik untuk mengembalikan air hujan
                                                ke
                                                akuifer.</span> Seiring kemajuan di bidang pembangunan, banyak permukaan
                                            tanah yang tertutup tembok sehingga mengurangi penyerapan air kedalam tanah.
                                            Sungai yang tertutup sedimen juga menyebabkan air susah menyerap kebawah
                                            tanah.
                                            Tidak adanya upaya untuk meresapkan air kedalam tanah dalam kurn waktu yang
                                            lama
                                            akan menurunkan ketersediaan air tanah dan membuat kualitas air tanah
                                            semakin
                                            mmeburuk.</li>
                                    </ul>
                                </div>
                                <p id="daftar-3-22" class="fw-bold fs-5"><span class="text-primary">Awe Experience:</span> Peran Troposfer
                                    dalam
                                    Siklus Air</p>
                                <p> agai lapisan, dimana pada setiap lapisannya memiliki
                                    karakteristik yang berbeda satu sama lain sehingga menghasilkan fungsi yang berbeda
                                    juga. Troposfer adalah lapisan atmosfer bumi yang paling rendah. Ini mengandung 75%
                                    dari
                                    total massa atmosfer planet dan 99% dari total massa uap air dan aerosol.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.59.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.59</span>Lapisan
                                    troposfer berperan penting dalam penentuan siklus air</p>
                                <p>Dari permukaan bumi, ketinggian rata-rata troposfer adalah 18 km di daerah tropis, 17
                                    km
                                    di garis lintang tengah, dan 6 km di garis lintang tinggi wilayah kutub pada musim
                                    dingin, jadi ketinggian rata-rata troposfer adalah 13 km.</p>
                                <p>Lapisan troposfer memegang peran penting dalam menunjang kehidupan makhluk hidup di
                                    bumi
                                    dimana pada lapisan ini terkandung 78% nitrogen (N<sub>2</sub>), 21% oksigen
                                    (O<sub>2</sub>), 1% argon (Ar), dan 0,03% karbon dioksida (CO<sub>2</sub>), dan
                                    beberapa
                                    gas lainnya termasuk uap air. Selain itu pada lapisan ini juga terjadi berbagai
                                    peristiwa yang berperan penting dalam perubahan cuaca seperti suhu udara, tekanan
                                    udara,
                                    angin, dan kelembaban udara.</p>
                                <p>Matahari merupakan sumber energi panas bagi bumi. Dengan pancaran panasnya, matahari
                                    mampu menyinari bumi dan seisinya sehingga memberikan banyak manfaat bagi makhluk
                                    hidup
                                    yang ada di bumi. Namun ada satu kondisi dimana suhu udara pada lapisan troposfer
                                    secara
                                    vertikal mengalami anomali, dimana suhu udara makin ke atas makin rendah. Secara
                                    umum
                                    hal tersebut tampak janggal karena seharusnya semakin dekat dengan sumber panas maka
                                    suhu semakin tinggi. Sama halnya ketika kita berada di sekitar api unggun, semakin
                                    dekat
                                    jarak kita terhadap api unggun maka semakin tinggi juga panas yang kita rasakan.</p>
                                <p>Beberapa bukti yang menunjukan bahwa semakin ke atas suhu udara pada lapisan
                                    troposfer
                                    semakin rendah adalah udara dingin yang semakin kita rasakan jika kita semakin
                                    berada di
                                    daerah tinggi misal daerah pegunungan dan sebaliknya jika kita berada di dataran
                                    rendah
                                    seperti daerah pantai maka kita merasakan suhu udara yang panas. Bahkan kita dapat
                                    menyaksikan fenomena hujan salju pada beberapa gunung yang tinggi seperti gunung
                                    fuji di
                                    jepang dan puncak jaya Wijaya di Indonesia. Padahal sekali lagi puncak gunung lebih
                                    dekat ke Matahari dibandingkan daerah pantai</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.60.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.60</span>Adanya salju
                                    di
                                    puncak gunung (fuji dan puncak jayawijaya) menjadi bukti bahwa semakin tinggi udara
                                    di
                                    troposfer semakin rendah suhunya</p>
                                <p>Sebagai contoh puncak gunung Fuji di Jepang ditutupi lapisan es. Di Indonesia
                                    satu-satunya puncak gunung yang di puncaknya terdapat lapisan es adalah gunung Jaya
                                    Wijaya di Papua.</p>
                                <p>Bukti lain yang menunjukan bahwa semakin ke atas maka suhu udara di troposfer semakin
                                    rendah dapat kita lihat pada display layar pesawat yang sedang terbang. Gambar
                                    berikut
                                    menunjukan display di Pesawat Komersial yang sedang terbang pada ketinggian 10972
                                    meter
                                    menunjukkan suhu di luar Pesawat sebesar -46<span>&#8451;</span>. suhu tersebut
                                    merupakan suhu yang sangat rendah jika kita bandingkan dengan rata-rata suhu di
                                    permukaan bumi yang berkisar</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.61.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.61</span>Display
                                    layar
                                    sebuah pesawat komersial menunjukan data suhu udara -42 derajat celcius pada
                                    ketinggian
                                    10972 m</p>
                                <p>Berdasarkan kedua bukti tersebut, jelaslah bahwa suhu udara di troposfer berbanding
                                    terbalik dengan ketinggian dari permukaan bumi. Semakin tinggi dari permukaan bumi
                                    maka
                                    semakin rendah suhu udara. </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.62.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.62</span>Grafik
                                    perubahan
                                    suhu pada masing-masing lapisan atmosfer</p>
                                <p>Grafik berikut menunjukkan temperatur udara sebagai fungsi ketinggian Pada lapisan
                                    Troposfer (lapisan Atmosfer paling bawah) dimana suhu udara makin ke atas makin
                                    rendah
                                    (turun terhadap ketinggian) Ini fakta yang dapat dibilang anomali menurut Kita</p>
                                <br>
                                <p id="daftar-3-23" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
                                    dibalik
                                    Anomali Suhu Troposfer</p>
                                <p>Anomali suhu pada lapisan troposfer berperan penting dalam siklus hidrologi. Jika
                                    saja
                                    pada lapisan troposfer suhu udara sebanding dengan ketinggian dimana semakin tinggi
                                    jarak dari permukaan tanah maka semakin tinggi suhu, maka siklus air tidak akan
                                    dapat
                                    terjadi. Hal ini dikarenakan jika semakin tinggi udara dari permukaan semakin tinggi
                                    pula suhunya maka tidak akan terjadi proses pembentukan awan. Ketika uap air
                                    dihasilkan
                                    dari proses evaporasi dan transpirasi, jika suhu udara di atas lebih tinggi dari
                                    suhu
                                    udara dipermukaan bumi maka tidak akan ada arus konveksi yang akan menyebabkan uap
                                    air
                                    naik ke atmosfer. Selain itu, jika suhu udara diatas lebih tinggi dari suhu udara di
                                    permukaan maka tidak akan terjadi kondensasi yang menghasilkan awan Jika tidak ada
                                    awan
                                    maka sudah pasti tidak akan terjadi hujan.</p>
                                <p>Bagi kita manusia yang memiliki keterbatasan ilmu, tidak akan terpikir bagaimana
                                    kondisi
                                    ini dapat diciptakan, bagaimana membuat suhu udara makin rendah saat mendekati
                                    sumbernya
                                    yaitu matahari? Tetapi bagi Allah SWT yang telah menciptakan alam semesta, maka
                                    tentunya
                                    tidak sulit untuk menciptakan kondisi ini</p>
                                <p>Agar makin ke atas suhu udara makin rendah, maka Allah SWT telah menetapkan agar
                                    molekul
                                    molekul gas yang ada di troposfer tidak peka terhadap cahaya matahari dan
                                    membiarkannya
                                    lewat ke muka bumi. Dengan cara demikian maka sinar matahari yang melewati udara di
                                    Troposfer tidak memanaskan udara tersebut</p>
                                <p>Cahaya tampak dari matahari tidak diserap oleh udara di troposfer dan langsung menuju
                                    muka Bumi dan memanaskannya Jadi matahari tidak memanaskan udara di Troposfer,
                                    dengan
                                    demikian pemanas udara di Troposfer tidak terletak di atas </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.63.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.63</span>udara di
                                    troposfer tidak menyerap panas sehingga panas dibiarkan lolos</p>
                                <p>Udara di troposfer menyerap radiasi infra merah yang dipancarkan muka Bumi ke angkasa
                                    dan
                                    memanaskannya, sehingga pemanas untuk udara di Troposfer adalah radiasi infra merah
                                    dari
                                    muka Bumi yang letaknya di Bawah. Karena pemanasnya ada di bawah maka semakin tinggi
                                    udara di permukaan bumi maka semakin rendah suhunya karena jaraknya yang semakin
                                    jauh
                                    dari permukaan bumi. Jadi dugaan yang selama ini Kita miliki bahwa pemanas udara di
                                    atmosfer dekat muka Bumi itu adalah Matahari, ternyata meleset, Allah SWT telah
                                    membukanya untuk suatu kepentingan tertentu yaitu untuk menyediakan kondisi agar
                                    siklus
                                    air dapat terjadi</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.64.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.64</span>panas yang
                                    berasal dari permukaan bumi dipantulkan lapisan troposfer</p>
                                <p>Lantas, Jika itu memang sesuatu yang didesain oleh Allah SWT, Apa yang dilakukan Nya
                                    agar
                                    radiasi dari Matahari itu tidak dapat memanaskan udara di Troposfer, padahal radiasi
                                    itu
                                    melewatinya? Bagi Allah SWT itu sangat mudah tentunya. Proses penyerapan radiasi
                                    Matahari oleh suatu molekul gas ( itu terjadi melalui proses difraksi atau hamburan.
                                    Difraksi cahaya oleh molekul akan terjadi ketika ukuran molekul tersebut seorde
                                    dengan
                                    panjang gelombang cahaya yang melewatinya ). Sehingga agar peristiwa difraksi cahaya
                                    matahari oleh molekul molekul gas di troposfer tidak terjadi, maka Tuhan telah
                                    menciptakan semua molekul gas penghuni Troposfer (Oksigen, karbon dioksida, metana,
                                    argon, dll) dengan ukuran yang tidak seorde dengan panjang gelombang cahaya tampak
                                    dari
                                    Matahari Ini bagi Allah SWT sangat mudah karena Dia sang Maha Pencipta Alam Semesta
                                </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.65.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.65</span>panas yang
                                    berasal dari radiasi matahari tidak diserap udara troposfer</p>
                                <p>Dan agar udara di Troposfer dapat menyerap radiasi inframerah yang dipancarkan dari
                                    muka
                                    Bumi, maka Tuhan telah menciptakan beberapa molekul gas ( metana, uap air, dll) yang
                                    ukurannya seorde dengan radiasi inframerah, sehingga ketika ada radiasi inframerah
                                    dari
                                    muka Bumi melewati Troposfer, maka gas gas tersebut dapat menyerapnya Dengan cara
                                    demikian kehendak Tuhan bahwa pemanas udara di troposfer berada di bawah Troposfer
                                    dapat
                                    diwujudkan</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.66.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.66</span>Panas yang
                                    berasal dari radiasi inframerah permukaan bumi diserap oleh gas CO<sub>2</sub></p>
                                <p>Manusia dengan segala ilmu pengetahuan dan kecanggihan teknologi yang dimilikinya
                                    tidak
                                    akan mampu merekayasa ukuran molekul molekul gas yang ada di Troposfer. Jangankan
                                    merekayasa ukuran molekul, untuk melihatnya pun tidak memiliki kemampuan Jadi hanya
                                    Tuhan yang memiliki kuasa tersebut.</p>
                                <p>Allah SWT berfirman dalam surat Al-Baqarah ayat 22</p>
                                <p class="text-end fs-3">ٱلَّذِى جَعَلَ لَكُمُ ٱلْأَرْضَ فِرَٰشًا وَٱلسَّمَآءَ بِنَآءً
                                    وَأَنزَلَ مِنَ ٱلسَّمَآءِ مَآءً فَأَخْرَجَ بِهِۦ مِنَ ٱلثَّمَرَٰتِ رِزْقًا لَّكُمْ
                                    ۖ
                                    فَلَا تَجْعَلُوا۟ لِلَّهِ أَندَادًا وَأَنتُمْ تَعْلَمُونَ</p>
                                <p class="fst-italic">Artinya: Dialah yang menjadikan bumi sebagai hamparan bagimu dan
                                    langit sebagai atap, dan Dia menurunkan air (hujan) dari langit, lalu Dia
                                    menghasilkan
                                    dengan hujan itu segala buah-buahan sebagai rezeki untukmu; karena itu janganlah
                                    kamu
                                    mengadakan sekutu-sekutu bagi Allah, padahal kamu mengetahui. <span
                                        class="fw-bold">(QS.
                                        Al-Baqarah : 22)</span></p>
                                <p>Ayat diatas memberikan pelajaran bagi kita bahwa Allah adalah Dzat yang menciptakan
                                    bumi
                                    dan langit dalam satu kesatuan sistem yang kokoh satu sama lain, dimana bumi
                                    membentang
                                    sebagai tempat berdiam makhluk hidup dan langit sebagai atap yang melindungi dan
                                    menurunkan air dari awan yang dapat menumbuhkan buah-buahan dan berbagai jenis
                                    tumbuhan
                                    yang dapat kita manfaatkan. Makan Selayaknyalah kita diminta oleh Allah SWT untuk
                                    menyembah dan tidak menyekutukannya karena tidak ada dzat yang dapat menandingi
                                    kesempurnaan ciptaan Allah SWT. </p>
                                <p>Allah SWT berfirman dalam surat Al-Jatsiyah ayat ayat 23</p>
                                <p class="text-end fs-3">وَسَخَّرَ لَكُمْ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ جَمِيعًا
                                    مِنْهُ ۚ إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِقَوْمٍ يَتَفَكَّرُونَ</p>
                                <p class="fst-italic">Artinya : “Dia telah menundukkan (pula) untukmu apa yang ada di
                                    langit
                                    dan apa yang ada di bumi semuanya (sebagai rahmat) dari-Nya. Sesungguhnya pada yang
                                    demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                                    berpikir.”  <span class="fw-bold">(QS. Al-Jatsiyah : 13)</span></p>
                                <p>Dalam ayat ini Allah SWT memberikan pengajaran kepada kita bahwasannya Allah SWT
                                    tidak
                                    hanya sekedar menciptakan langit dan bumi begitu saja melainkan menundukan pula
                                    keduanya
                                    sebagai bentuk kasih sayang pada kita selaku makhluk ciptaan-Nya. Jika saja seluruh
                                    langit dan bumi yang luas ini semuanya berada dalam pengaturan Allah SWt, maka mudah
                                    saja bagi Allah untuk menciptakan mekanisme lapisan troposfer untuk menunjang
                                    terjadinya
                                    siklus air yang membawa banyak manfaat bagi manusia.</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END Mekanisme Terjadinya Siklus Air -->
            <!-- Jenis-Jenis Siklus Air -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTwelve">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-jenis-siklus-air" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                            JENIS - JENIS SIKLUS AIR <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div id="bagian-3-3">
                                <p id="daftar-3-24" class="text-primary fw-bold fs-5">Jenis-Jenis Siklus Air</p>
                                <p>Salah satu manfaat lain dari siklus hidrologi selain menyediakan air bersih dalam
                                    tanah
                                    untuk kehidupan manusia adalah memberikan suatu mekanisme yang dapat menyebarkan air
                                    tawar bersih di setiap penjuru muka Bumi baik yang berada di dataran tinggi maupun
                                    dataran rendah. Dengan dibantu pergerakan angin, awan yang mengandung tetes hujan
                                    dapat
                                    bergerak menjangkau tempat-tempat yang jauh dari lautan bahkan ke daerah pegunungan
                                    yang
                                    tinggi. </p>
                                <p>Namun, terdapat sedikit perbedaan mekanisme siklus hidrologi antara air hujan yang
                                    turun
                                    di lautan, air hujan yang turun di dataran rendah dan air hujan yang turun di
                                    dataran
                                    tinggi. Air hujan yang turun di lautan dikenal sebagai siklus hidrologi pendek, air
                                    hujan yang turun di dataran rendah dikenal sebagai siklus hidrologi sedang dan air
                                    hujan
                                    yang turun di dataran tinggi dikenal sebagai siklus hidrologi panjang.</p>
                                <p>Pada siklus hidrologi pendek hujan yang dihasilkan biasanya hanya berupa hujan air,
                                    pada
                                    siklus hidrologi sedang hujan yang dihasilkan sebagian besar hujan air namun dapat
                                    juga
                                    berupa hujan es, sedangkan pada siklus hidrologi panjang dapat berupa hujan salju
                                    maupun
                                    hujan air</p>
                                <p id="daftar-3-25" class="text-primary">Siklus Pendek</p>
                                <p>Siklus pendek atau sering disebut dengan siklus kecil merupakan siklus hidrologi yang
                                    terjadi di lautan. Siklus air pendek diawali dari evaporasi air laut ke atmosfer.
                                    Uap
                                    air akan mengalami kondensasi dalam ketinggian tertentu hingga membentuk awan. Awan
                                    yang
                                    tidak kuat dengan beban air akan mengalami presipitasi lalu turunlah hujan air yang
                                    jatuh kembali ke laut.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.67.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.67</span>Siklus
                                    hidrologi
                                    pendek</p>
                                <p>Siklusnya pendek melalui tiga tahap. Pertama, air laut mengalami proses penguapan
                                    akibat
                                    pancaran sinar matahari langsung dan kemudian menjadi uap gas yang mengandung
                                    molekul
                                    air. Kedua, setelah uap gas keluar ke atmosfer, molekul air mengembun dan membentuk
                                    awan
                                    yang berisi tetesan air. Terakhir, setelah kondensasi pada lapisan awan menjadi
                                    jenuh
                                    akibat sinar matahari langsung, awan yang mengandung molekul air berubah menjadi
                                    hujan
                                    dan turun ke permukaan laut. Proses ini berlangsung sepanjang tahun dan hanya
                                    terjadi di
                                    wilayah lautan tersebut.</p>
                                <p id="daftar-3-26" class="text-primary">Siklus Sedang</p>
                                <p>Berbeda dengan siklus pendek yang hanya terjadi di lautan, siklus sedang melibatkan
                                    dua
                                    tempat yaitu lautan dan darat. Serupa dengan siklus pendek, siklus sedang diawali
                                    dari
                                    evaporasi air laut ke atmosfer. Namun uap air yang terbentuk terbawa angin ke
                                    daratan
                                    oleh arus adveksi dan di ketinggian tertentu uap akan mengalami proses kondensasi
                                    menjadi awan. Awan yang sudah mencukup untuk berubah menjadi tetes hujan akan
                                    menjatuhkan air hujan di daratan. Air hujan akan meresap ke dalam tanah, ada yang
                                    diserap akar tumbuhan ada juga yang mengalir menuju muka air tanah atau terbawa
                                    aliran
                                    air permukaan seperti sungai dan parit. Kemudian sebagian air akan melewati berbagai
                                    macam saluran yang membawanya kembali ke laut.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.68.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.68</span>Siklus
                                    hidrologi
                                    pendek</p>
                                <p>Karena melibatkan arus adveksi, maka siklus sedang ini kadang tidak dapat terjadi
                                    sepanjang tahun karena tergantung dari arah arus adveksi yang menggerakan awan ke
                                    daratan. Selain itu adanya arus adveksi membuat hujan yang turun tidak menetap di
                                    suatu
                                    tempat dan dapat terdistribusi ke berbagai tempat di daratan bergantung pada arah
                                    angin
                                    dan tingkat kemampuan awan untuk dapat berubah menjadi tetes hujan.</p>
                                <p id="daftar-3-27" class="text-primary">Siklus Panjang</p>
                                <p>Siklus terakhir dari 3 jenis siklus hidrologi adalah siklus panjang atau disebut juga
                                    siklus besar. Proses ini terjadi di daerah yang memiliki suhu di bawah nol derajat
                                    Celcius atau bersuhu dingin. Siklus panjang biasanya melibatkan tiga daerah utama
                                    yaitu
                                    lautan, dataran rendah dan dataran tinggi.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.69.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.69</span>Tanah miring
                                    yang tidak ditumbuhi tumbuhan akan memiliki potensi longsor ketika turun hujan
                                    Siklus
                                    hidrologi panjang</p>
                                <p>Siklus air panjang juga terjadi dengan diawali proses evaporasi dan kondensasi air
                                    laut
                                    yang membentuk awan. Kemudian awan terbawa arus adveksi ke tempat lebih tinggi di
                                    daratan. Bentukan awan tadi berkumpul dengan uap air hasil evaporasi danau, sungai,
                                    dan
                                    transpirasi tumbuhan. Ketika awan membentur lereng gunung, maka awan akan terus naik
                                    ke
                                    ketinggian tertentu hingga sampai pada lapisan udara dingin yang mengubah tetes awan
                                    menjadi salju dan terjadilah hujan salju di musim dingin. Hal ini juga membentuk
                                    bongkahan es pada pegunungan tinggi. Berkat adanya gaya gravitasi, bongkahan es di
                                    gunung akan turun ke tempat lebih rendah yang dikenal dengan fenomena gletser. Jika
                                    gletser terkena suhu tinggi, maka akan mencair. Sebagian lelehan es akan menyerap
                                    kedalam tanah dan sebagian lain mengalir melalui perairan darat lalu kembali ke arah
                                    laut.</p>
                                <p>Sama halnya dengan siklus sedang, karena siklus panjang melibatkan adanya arus
                                    adveksi
                                    dan bahkan untuk dapat menghasilkan hujan salju diperlukan daerah dengan suhu di
                                    bawah 0
                                    derajat celcius, aka siklus panjang juga tidak dapat terjadi sepanjang tahun. Siklus
                                    panjang memiliki cakupan wilayah yang lebih terbatas daripada siklus sedang, karena
                                    untuk dapat menghasilkan hujan salju diperlukan tempat dengan ketinggian tempat yang
                                    cukup untuk menghasilkan suhu di bawah 0 derajat celcius. Perbedaan mendasar
                                    mekanisme
                                    siklus hidrologi pendek, sedang dan panjang dapat diringkas pada tabel berikut.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Tabel 3.1.png" class="img-fluid">
                                </div>
                                <p>Berdasarkan tabel diatas terlihat bahwa siklus panjang memiliki proses yang kompleks
                                    dan
                                    lengkap dan melibatkan perubahan wujud air dalam bentuk padat, cair dan gas. Siklus
                                    panjang menggambarkan suatu proses siklus hidrologi yang lengkap dan menjangkau
                                    semua
                                    wilayah bumi mulai dari lautan, dataran rendah hingga ke dataran paling tinggi
                                    sekalipun.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDuadua">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuadua"
                                                aria-expanded="true" onclick="buka_soal(22)">
                                                <i id="daftar-1-22" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuadua" class="collapse" aria-labelledby="headingDuadua"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-22"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                    <p>Curah hujan dapat terjadi dalam berbagai bentuk dan masing-masing bentuk
                                        mempunyai
                                        mekanisme tersendiri. Sebagian besar curah hujan yang turun selalu dimulai dari
                                        butiran salju yang tinggi di awan. Kepingan salju terbentuk saat udara naik,
                                        mendingin, dan mengembun, biasanya di sekitar area bertekanan rendah.</p>
                                    <p>Apakah curah hujan tetap berupa salju atau berubah menjadi hujan air, hujan es
                                        atau
                                        hujan padat saat mencapai tanah bergantung pada fluktuasi suhu yang mungkin
                                        ditemui
                                        kepingan salju saat melintasi lapisan atmosfer. Ketika suhu antara tanah dan
                                        awan
                                        tetap pada atau di bawah titik beku (32 derajat Fahrenheit), curah hujan akan
                                        turun
                                        dalam bentuk salju. Salju bisa saja turun saat suhu di atas 32, asalkan lapisan
                                        udara di atas titik beku di dekat permukaan agak dangkal, sehingga kepingan
                                        salju
                                        tidak bisa mencair.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.70.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar
                                            3.70</span>perbedaan
                                        hujan es dan hujan beku</p>
                                    <p>Hujan es dan hujan beku terjadi melalui proses yang serupa, namun merupakan
                                        bentuk
                                        presipitasi yang berbeda. Hujan es terjadi ketika kepingan salju mencair menjadi
                                        tetesan hujan di lapisan udara hangat jauh di atas tanah dan kemudian membeku
                                        kembali di lapisan udara beku tepat di atas permukaan. Hal ini menghasilkan
                                        tetesan
                                        air hujan yang membeku, atau butiran es kecil.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.71.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 3.71</span>contoh
                                        akibat yang ditimbulkan dari hujan beku</p>
                                    <p>Sedangkan Hujan beku terjadi ketika lapisan udara hangat di atas menjadi lebih
                                        tebal,
                                        sehingga tetesan hujan dapat bertahan dalam bentuk cair hingga bersentuhan
                                        dengan
                                        tanah dingin. Lapisan es baru terbentuk setelah tetes air hujan bersentuhan
                                        dengan
                                        benda apapun di permukaan tanah yang dingin.</p>
                                    <p>Melihat dari prosesnya, hujan es dan hujan beku termasuk kedalam siklus sedang.
                                        Siklus panjang melibatkan proses deposisi dan sublimasi dimana uap air berubah
                                        langsung menjadi padatan (salju) dan padatan (salju) dapat langsung berubah
                                        wujud
                                        menjadi gas. Sedangkan Hujan es dan hujan beku melibatkan proses perubahan wujud
                                        gas
                                        menjadi air (mengembun), air menjadi es (membeku) dan es menjadi air kembali
                                        (meleleh) tanpa adanya peristiwa sublimasi dan disposisi.</p>
                                </div>
                                <p id="daftar-3-29" class="fw-bold fs-5"><span class="text-primary">Awe Experience:</span> Peran Angin dalam
                                    Siklus Air</p>
                                <p>Siklus hidrologi memiliki banyak manfaat bagi kehidupan makhluk hidup di bumi. Dua
                                    manfaat utama dari adanya siklus air adalah sebagai sarana untuk menyediakan air
                                    bersih
                                    dan sebagai sarana untuk mendistribusikan air tawar ke seluruh daratan. Proses yang
                                    berperan penting dalam pembersihan air adalah proses evaporasi dan transpirasi. Pada
                                    proses evaporasi dan transpirasi air yang berada di daratan dan tumbuhan mengalami
                                    penguapan karena mendapatkan panas matahari. proses penguapan tersebut menghasilkan
                                    air
                                    murni karena seluruh zat yang terlarut dalam air baik berupa garam dan
                                    mineral-mineral
                                    lainnya tidak ikut menguap. Pada saat uap air di atmosfer mengalami proses
                                    kondensasi,
                                    uap air tersebut akan berubah menjadi tetes air murni yang bebas polutan.
                                    Berdasarkan
                                    mekanisme tersebut maka sejatinya air hujan merupakan air bersih yang murni, kecuali
                                    pada saat hujan turun air tersebut bercampur kembali dengan polusi yang berada di
                                    udara
                                    atau kotoran yang ada di tanah, maka air hujan menjadi tercemar oleh berbagai
                                    polutan.
                                </p>
                                <p>Adapun proses yang berperan penting dalam pendistribusi air tawar ke seluruh daratan
                                    adalah adanya angin. Angin terbentuk karena adanya perbedaan suhu antara dua
                                    wilayah.
                                    Ketika suhu udara di suatu daerah naik, udara menjadi lebih hangat dan cenderung
                                    naik ke
                                    atas karena menjadi lebih ringan. Hal ini mengakibatkan penurunan tekanan udara di
                                    daerah tersebut, menciptakan daerah dengan tekanan rendah. Di sisi lain, udara
                                    dingin
                                    cenderung turun karena menjadi lebih berat, menciptakan daerah dengan tekanan
                                    tinggi.
                                    Perbedaan tekanan ini menyebabkan aliran udara dari daerah dengan tekanan tinggi ke
                                    daerah dengan tekanan rendah, membentuk angin.</p>
                                <p>Angin berperan dalam menggerakan awan dari satu tempat ke tempat lain. melalui
                                    hembusan
                                    angin, awan yang berkumpul di suatu tempat sebagai hasil dari kondensasi uap air
                                    akan
                                    ditiupkan sehingga berpindah dari satu tempat ke tempat lain. pergerakan awan yang
                                    random memungkinkan awan dapat dikirim ke berbagai tempat yang jauh dari pantai
                                    sekalipun bahkan sampai ke atas pegunungan yang tinggi. Dengan adanya angin setiap
                                    tempat dapat memiliki kesempatan untuk merasakan hujan.</p>
                                <p>Angin dapat terbentuk dalam global maupun dalam skala lokal. Dalam skala global arah
                                    gerak angin dipengaruhi oleh Angin global adalah Angin yang disebabkan oleh
                                    perputaran
                                    Bumi (efek Coriolis) dan perbedaan suhu antara daerah khatulistiwa dan daerah kutub.
                                    Karena khatulistiwa cenderung lebih panas dari kutub maka angin global akan bergerak
                                    dari khatulistiwa menuju daerah kutub namun karena Akibat rotasi Bumi, angin yang
                                    bergerak dari khatulistiwa ke kutub akan mengalami deviasi karena gaya Coriolis. Di
                                    belahan utara Bumi, angin yang bergerak ke utara akan berdeviasi ke timur, sedangkan
                                    di
                                    belahan selatan Bumi, angin yang bergerak ke selatan akan berdeviasi ke barat. Efek
                                    Coriolis ini menyebabkan pola arah angin yang khas, seperti arah timur laut di
                                    belahan
                                    utara dan arah tenggara di belahan selatan.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.72.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.72</span>Pola
                                    pergerakan
                                    angin global</p>
                                <p>Dalam skala lokal angin terbentuk karena perbedaan suhu dan tekanan antar berbagai
                                    tempat
                                    karena tidak meratanya penyerapan panas matahari. Peristiwa angin lokal misalkan
                                    pada
                                    peristiwa angin darat dan angin laut serta angin gunung dan angin lembah.</p>
                                <p>Angin Darat dan Angin Laut adalah angin yang bergerak dalam daerah darat dan laut.
                                    Pada
                                    malam hari daratan lebih dingin dibandingkan lautan, karena sifat daratan yang cepat
                                    menerima panas dan cepat menerima dingin. Akibatnya daratan menjadi daerah yang
                                    mempunyai tekanan tinggi (maksimum), sedangkan laut menjadi daerah yang mempunyai
                                    tekanan rendah (minimum). Sehingga pada malam hari terjadi angin darat dimana angin
                                    berhembus dari darat ke laut. Sebaliknya pada siang hari suhu di laut lebih dingin
                                    dibandingkan dengan suhu daratan. Hal ini disebabkan sifat laut (perairan) yang
                                    lambat
                                    menerima panas dan lambat melepaskannya. Akibatnya laut menjadi daerah yang
                                    mempunyai
                                    tekanan tinggi (maksimum) dan daratan menjadi daerah yang mempunyai tekanan rendah
                                    (minimum). Sehingga pada siang hari terjadi angin laut dimana angin berhembus dari
                                    laut
                                    ke darat.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.73.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.73</span>Angin darat
                                    dan
                                    angin laut</p>
                                <p>Dalam siklus hidrologi, peristiwa angin darat dan angin laut berperan penting dalam
                                    menggerakan awan yang terbentuk karena proses transpirasi dan kondensasi air laut
                                    menuju
                                    daratan sehingga dapat terjadi siklus air sedang.</p>
                                <p>Sama hal nya dengan angin darat dan angin laut, angin lembah dan angin gunung juga
                                    terjadi karena perbedaan suhu dan tekanan antara dua tempat, dalam hal ini lembah
                                    dan
                                    gunung. Pada pagi hari sampai siang, gunung lebih cepat menerima panas matahari jika
                                    dibandingkan dengan lembah. Oleh karena itu, pada siang hari suhu udara di gunung
                                    lebih
                                    tinggi jika dibandingkan dengan lembah.Hal ini menyebabkan tekanan udara di gunung
                                    atau
                                    pegunungan relatif lebih rendah (minimum), sedangkan tekanan udara di lembah tinggi
                                    sehingga berhembuslah angin dari lembah menuju gunung. Sebaliknya, pada sore hari
                                    dan
                                    malam hari, terjadi kondisi yang sebaliknya. Di area lembah, suhu udaranya masih
                                    relatif
                                    tinggi dibandingkan gunung. Hal ini menyebabkan tekanan udara di lembah lebih rendah
                                    (minimum). Akibatnya, berhembuslah angin dari arah gunung menuju lembah.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.74.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.74</span>Angin
                                    dlembah
                                    dan angin gunung</p>
                                <p>Dalam siklus hidrologi, peristiwa angin lembah dan angin gunung berperan penting
                                    dalam
                                    menggerakan awan menuju daerah pegunungan sehingga dapat terjadi siklus air panjang.
                                </p>
                                <p id="daftar-3-30" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
                                    dibalik
                                    Adanya Siklus Air</p>
                                <p>Siklus hidrologi memiliki banyak manfaat bagi kehidupan makhluk hidup di bumi. Dua
                                    manfaat utama dari adanya siklus air adalah sebagai sarana untuk menyediakan air
                                    bersih
                                    dan sebagai sarana untuk mendistribusikan air tawar ke seluruh daratan. Jika tidak
                                    ada
                                    siklus air maka sungai-sungai akan mengalami kekeringan, danau, kolam dan seluruh
                                    daerah
                                    penampungan air permukaan akan kotor, keruh dan hijau karena akan dipenuhi dengan
                                    bakteri dan mikroorganisme. </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.75.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.75</span>Air yang
                                    tidak
                                    bergerak akan memiliki kualitas yang buruk</p>
                                <p>Disamping itu keberadaan air tanah juga akan cepat mengering karena tidak seimbangnya
                                    penyedotan dan jumlah air yang meresap. Jika pun menggunakan air laut sebagai sumber
                                    kebutuhan hidup maka diperlukan biaya dan waktu yang tidak sedikit karena harus
                                    melalui
                                    proses penyulingan dari kandungan garam serta melalui proses pendistribusian dari
                                    daerah
                                    pantai sampai ke daerah-daerah pelosok pegunungan.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.76.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.76</span>Suatu daerah
                                    yang tidak dituruni hujan lama kelamaan akan menjadi daerah tandus</p>
                                <p>Beruntunglah Allah SWT menciptakan mekanisme siklus hidrologi yang berperan penting
                                    dalam
                                    menyediakan air tawar dan mendistribusikannya ke seluruh tempat di daratan. Dengan
                                    adanya siklus hidrologi, keberadaan air tawar yang menjadi sumber kehidupan makhluk
                                    hidup yang ada di bumi dapat terjaga setiap saat. Jika tidak ada siklus air maka
                                    tidak
                                    ada pasokan air bersih ke daerah dataran tinggi, sehingga semua makhluk hidup di
                                    sana
                                    akan segera punah juga karena kebutuhan airnya tidak dapat tercukupi.</p>
                                <p>Jika ini terjadi maka Tuhan tidak memelihara makhluk hidup yang diciptakan dan
                                    disebarkan
                                    di muka Bumi Tentu Tuhan menciptakan makhluk hidup dan menyebarkannya di Bumi dengan
                                    tujuan tertentu Agar makhluk hidup dapat tetap hidup dalam jangka panjang, maka
                                    Tuhan
                                    harus menyediakan segala kebutuhan dan sumber kehidupan bagi makhluk hidup terutama
                                    air
                                    Untuk menyediakan berbagai kebutuhan tersebut Tuhan tidak mengirim seperti Kita
                                    mengirim
                                    makanan, melainkan Tuhan menyediakan material dan mekanisme alam yang terkait</p>
                                <p>Siklus air bukan semata fenomena alam, melainkan suatu mekanisme yang sengaja
                                    diciptakan
                                    oleh Allah SWT dalam rangka memelihara makhluknya yang ditebarkan di muka Bumi Sebab
                                    jika tidak ada mekanisme itu maka semua makhluk hidup di Bumi tidak akan bisa
                                    bertahan
                                    lama hidup di muka Bumi dan akan segera punah</p>
                                <p>Al Quran mengungkap banyak fakta dalam kehidupan, termasuk fakta tentang turunnya air
                                    hujan Dalam Al Quran, Allah SWT menyebut hujan yang turun ke bumi sebagai rahmat
                                    yang
                                    diperlukan seluruh makhluk Allah berfirman dalam surah Asy Syura ayat 28 sebagai
                                    berikut
                                </p>
                                <p class="text-end fs-3">وَهُوَ ٱلَّذِى يُنَزِّلُ ٱلْغَيْثَ مِنۢ بَعْدِ مَا قَنَطُوا۟
                                    وَيَنشُرُ
                                    رَحْمَتَهُۥ ۚ وَهُوَ ٱلْوَلِىُّ ٱلْحَمِيدُ</p>
                                <p class="fst-italic">Artinya: "Dan Dialah Yang menurunkan hujan sesudah mereka berputus
                                    asa
                                    dan menyebarkan rahmat Nya Dan Dialah Yang Maha Pelindung lagi Maha Terpuji". <span
                                        class="fw-bold">(QS Asy Syuura 28)</span></p>
                                <p>Firman Allah SWT yang lain mengenai hujan dalam Al quran terdapat dalam surah Ar Rum
                                    ayat
                                    48 sebagai berikut</p>
                                <p class="text-end fs-3">ٱللَّهُ ٱلَّذِى يُرْسِلُ ٱلرِّيَٰحَ فَتُثِيرُ سَحَابًا فَيَبْسُطُهُۥ
                                    فِى
                                    ٱلسَّمَآءِ كَيْفَ يَشَآءُ وَيَجْعَلُهُۥ كِسَفًا فَتَرَى ٱلْوَدْقَ يَخْرُجُ مِنْ
                                    خِلَٰلِهِۦ ۖ فَإِذَآ أَصَابَ بِهِۦ مَن يَشَآءُ مِنْ عِبَادِهِۦٓ إِذَا هُمْ
                                    يَسْتَبْشِرُونَ</p>
                                <p class="fst-italic">Artinya: Allah, Dialah yang mengirim angin, lalu angin itu
                                    menggerakkan awan dan Allah membentangkannya di langit menurut yang dikehendaki-Nya,
                                    dan
                                    menjadikannya bergumpal-gumpal; lalu kamu lihat hujan keluar dari celah-celahnya,
                                    maka
                                    apabila hujan itu turun mengenai hamba-hamba-Nya yang dikehendaki-Nya, tiba-tiba
                                    mereka
                                    menjadi gembira. <span class="fw-bold"> (QS Ar-Rum: 28)</span></p>
                                <p>Dari dua ayat al Quran tersebut tampak bahwa hujan itu tidak turun sendiri, melainkan
                                    diturunkan oleh Allah SWT untuk mencukupi kebutuhan akan air bersih yang merupakan
                                    sumber kehidupan bagi semua makhluk hidup di Bumi Hujan itu merupakan rahmat dan
                                    rizki
                                    yang diturunkan kepada hamba hambaNya yang dikehendaki, dan tentu hamba yang
                                    mendapatkannya akan bergembira</p>
                                <p>Pada ayat ayat al Quran tersebut juga dapat dilihat bahwa Allah SWT bukan
                                    mengantarkan
                                    air kepada hambaNya seperti Kita mengantar makanan ke orang lain, melainkan Allah
                                    SWT
                                    menciptakan mekanisme mekanisme fisis di alam agar maksud dari penyediaan air bersih
                                    bagi makhluknya dapat berjalan sepanjang Bumi ini masih ada Tuhan menciptakan angin
                                    untuk menggerakkan awan ke arah yang dikehendaki Allah Tuhan juga menciptakan proses
                                    evaporasi, konveksi dan kondensasi, agar dapat menyediakan air bersih bagi makhluk
                                    ciptaanNya</p>
                                <p>Terkait fenomena hujan Allah juga berfirman dalam surah An Nur ayat 43 sebagai
                                    berikut
                                </p>
                                <p class="text-end fs-3">أَلَمْ تَرَ أَنَّ ٱللَّهَ يُزْجِى سَحَابًا ثُمَّ يُؤَلِّفُ بَيْنَهُۥ
                                    ثُمَّ يَجْعَلُهُۥ رُكَامًا فَتَرَى ٱلْوَدْقَ يَخْرُجُ مِنْ خِلَٰلِهِۦ وَيُنَزِّلُ
                                    مِنَ
                                    ٱلسَّمَآءِ مِن جِبَالٍ فِيهَا مِنۢ بَرَدٍ فَيُصِيبُ بِهِۦ مَن يَشَآءُ
                                    وَيَصْرِفُهُۥ
                                    عَن مَّن يَشَآءُ ۖ يَكَادُ سَنَا بَرْقِهِۦ يَذْهَبُ بِٱلْأَبْصَٰرِ</p>
                                <p class="fst-italic"><span class="fw-bold">Artinya:</span> Tidaklah kamu melihat bahwa
                                    Allah mengarak awan, kemudian mengumpulkan antara (bagian-bagian)nya, kemudian
                                    menjadikannya bertindih-tindih, maka kelihatanlah olehmu hujan keluar dari
                                    celah-celahnya dan Allah (juga) menurunkan (butiran-butiran) es dari langit, (yaitu)
                                    dari (gumpalan-gumpalan awan seperti) gunung-gunung, maka ditimpakan-Nya
                                    (butiran-butiran) es itu kepada siapa yang dikehendaki-Nya dan dipalingkan-Nya dari
                                    siapa yang dikehendaki-Nya. Kilauan kilat awan itu hampir-hampir menghilangkan
                                    penglihatan. <span class="fw-bold">(QS An Nur: 43)</span></p>
                                <p>Pada ayat al Quran ini juga Allah menegaskan bahwa angin dan awan adalah ciptaanNya
                                    dan
                                    digerakkan ke arah yang dikehendakiNya. Selain hujan Allah juga menciptakan batu es
                                    yang
                                    dapat ditimpakan kepada kaum yang dikehendakiNya Fenomena petir yang kilatan
                                    cahayanya
                                    sangat menyilaukan cahaya juga disinggung dalam ayat tersebut Ungkapan batu es dan
                                    petir
                                    diturunkan dari awan yang seperti gunung yang menjulang tinggi itu mengacu kepada
                                    jenis
                                    awan tertentu yang ketinggiannya bisa mencapai beberapa ribu meter seperti tingginya
                                    gunung, yaitu awan CB (cumulonimbus)</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END Jenis-Jenis Siklus Air -->
            <!-- Refleksi -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingFiveten">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-refleksi" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseFiveten" aria-expanded="true" aria-controls="collapseFiveten">
                            REFLEKSI <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseFiveten" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <!-- Refleksi Kognitif -->
                            <div id="bagian-3-4">
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDuatiga">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuatiga"
                                                aria-expanded="true" onclick="buka_soal(23)">
                                                <i id="daftar-1-23" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Refleksi Kognitif</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuatiga" class="collapse" aria-labelledby="headingDuatiga"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-23"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Refleksi Kognitif -->
                            <!-- Spiritual -->
                            <div id="bagian-3-5">
                                <div class="border-top border-bottom border-dark">
                                    <div class="card-header border-0" id="headingDuaempat">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuaempat"
                                                aria-expanded="true" onclick="buka_soal(24)">
                                                <i id="daftar-1-24" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class="text-primary fw-bold fs-5">Refleksi Spiritual</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuaempat" class="collapse" aria-labelledby="headingDuaempat"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-24"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- END Spiritual -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Refleksi -->
            <!-- LATIHAN SOAL BAB 3 -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTwo">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-ujian-soal" class="custom-accordion-title text-reset collapsed d-block"
                            data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            UJIAN SOAL <i class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div>
                                <p class="text-primary fw-bold fs-5">LATIHAN SOAL BAB 3</p>
                                    <div>
                                        <ul>
                                        1. Terdistribusinya air ke hampir seluruh permukaan bumi dalam bentuk air tawar dapat dijelaskan dengan mekanisme siklus hidrologi
                                            <li>a. Jelaskan bagaimana hubungan perubahan wujud air dengan proses siklus air ?</li>
                                            <li>b. Jelaskan perubahan wujud air apa saja yang terjadi pada siklus air dimulai dari evaporasi hingga presipitasi ?</li>
                                            <li>c. Berikan analisis faktor lingkungan apa saja yang dapat mengganggu siklus air dan jelaskan bagaimana masing-masing faktor tersebut mempengaruhinya ?</li>
                                            <li>d. Setelah mempelajari siklus air dan faktor-faktor yang dapat mempengaruhinya, refleksikan bagaimana pemahaman ini dapat membantu Anda dalam menjaga lingkungan di sekitar Anda.</li>
                                        </ul>
                                    </div>
                                    <div class="container mt-3">
                                            <form>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="jawaban-essay-3-1" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                </div>
                                                <p id="nilai-essay-3-1">Nilai:</p>
                                                <a onclick="simpan_essay(3,1)" type="submit" class="btn btn-primary">Simpan</a>
                                            </form>
                                    </div>
                                    <br>
                                    <div>
                                        <ul>
                                        2. Siklus air diawali dengan proses penguapan permukaan air di bumi yang disebut sebagai kondensasi
                                            <li>a. Jelaskan bagaimana proses perubahan wujud air dari air ke gas ?</li>
                                            <li>b. Jelaskan proses terjadinya kondensasi pada siklus air ?</li>
                                            <li>c. Analisis bagaimana peran kondensasi  pada pembentukan hujan dalam siklus air ?</li>
                                            <li>d. Refleksikan dampak dari perubahan iklim terhadap pola curah hujan global ?</li>
                                        </ul>
                                    </div>
                                    <div class="container mt-3">
                                            <form>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="jawaban-essay-3-2" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                </div>
                                                <p id="nilai-essay-3-2">Nilai:</p>
                                                <a onclick="simpan_essay(3,2)" type="submit" class="btn btn-primary">Simpan</a>
                                            </form>
                                    </div>
                                    <br>
                                    <div>
                                        <ul>
                                        3. Dalam siklus air, proses infiltrasi berperan penting dalam ketersediaan air tanah.
                                            <li>a. Jelaskan proses infiltrasi dalam siklus hidrologi dan perannya dalam pengisian akuifer ?</li>
                                            <li>b. Jelaskan faktor apa saja yang memengaruhi infiltrasi air pada permukaan tanah ?</li>
                                            <li>c. Berikan analisis bagaimana dampak dari urbanisasi terhadap proses infiltrasi di daerah perkotaan ?</li>
                                            <li>d. Refleksikan bagaimana perubahan penggunaan lahan di suatu daerah akan mempengaruhi siklus air? Berikan contoh konkret.</li>
                                        </ul>
                                    </div>
                                    <div class="container mt-3">
                                            <form>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="jawaban-essay-3-3" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                </div>
                                                <p id="nilai-essay-3-3">Nilai:</p>
                                                <a onclick="simpan_essay(3,3)" type="submit" class="btn btn-primary">Simpan</a>
                                            </form>
                                    </div>
                                    <br>
                                    <div>
                                        <ul>
                                        4. Dalam siklus air, aliran air permukaan berperan penting dalam distribusi air tawar dipermukaan bumi.
                                            <li>a. Jelaskan bagaimaa proses aliran permukaan dalam siklus hidrologi dan perannya dalam pengisian akuifer ?</li>
                                            <li>b. Jelaskan faktor apa saja yang mempengaruhi aliran air permukaan ?</li>
                                            <li>c. Berikan analisis bagaimana dampak dari penggundulan hutan terhadap aliran air permukaan ?</li>
                                            <li>d. Refleksikan bagaimana pembangunan di daerah perkotaan akan mempengaruhi siklus air? Berikan contoh konkret.</li>
                                        </ul>
                                    </div>
                                    <div class="container mt-3">
                                            <form>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="jawaban-essay-3-4" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                </div>
                                                <p id="nilai-essay-3-4">Nilai:</p>
                                                <a onclick="simpan_essay(3,4)" type="submit" class="btn btn-primary">Simpan</a>
                                            </form>
                                    </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- END LATIHAN SOAL BAB 3 -->
        </div>
    </div>
</div>
<div class="fab-container">
    <div class="fab shadow">
        <div class="fab-content">
            <span class="material-icons">support_agent</span>
        </div>
    </div>
    <div class="sub-button shadow">
        <a onclick="resume();">
            <span class="material-icons">not_started</span>
        </a>
    </div>
    <div class="sub-button shadow">
        <a onclick="pause();">
            <span class="material-icons">pause_circle</span>
        </a>
    </div>
    <!-- <div class="sub-button shadow">
        <a onclick="stop();">
            <span class="material-icons">stop_circle</span>
        </a>
    </div> -->
    <div class="sub-button shadow">
        <a onclick="play();">
            <span class="material-icons">play_circle</span>
        </a>
    </div>
    <div class="sub-button shadow">
        <a onclick="show_modal();">
            <span class="material-icons">menu_book</span>
        </a>
    </div>
</div>

<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center fw-bold text-primary custom-hover" id="scrollableModalTitle">DAFTAR ISI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <a href="#daftar-1">
                    <h6 id="bagian-1" class="fw-bold text-primary custom-hover">Bagian 1 : STURKTUR MOLEKUL AIR</h6>
                </a>
                <a href="#daftar-1-1">
                    <h6 id="bagian-1-1" class="fw-bold text-primary root-satu">Ikatan Antar Atom Penyusun Molekul Air</h6>
                </a>
                <a href="#daftar-1-2" class="text-dark">
                    <p id="bagian-1-1" class="root-dua"><span class="fw-bold">Prior Knowledge :</span> Pengertian ikatan Kovalen</p>
                </a>
                <a href="#daftar-1-3" class="text-dark">
                    <p id="bagian-1-1" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Ikatan Kovalen Pada molekul air</p>
                </a>
                <a href="#daftar-1-4" class="text-dark">
                    <p id="bagian-1-1" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> Kepolaran ikatan kovalen pada molekul
                    air</p>
                </a>
                <a href="#daftar-1-5" class="text-dark">
                    <p id="bagian-1-1" class="root-dua"><span class="fw-bold">Awe Expereince :</span> Reaksi kimia untuk dapat menghasilkan
                    air</p>
                </a>
                <a href="#daftar-1-6" class="text-dark">
                    <p id="bagian-1-1" class="root-dua"><span class="fw-bold">Spiritual Kognition :</span> Hikmah dibalik penciptaan air</p>
                </a>
                <a href="#daftar-1-7" class="text-dark">
                    <h6 id="bagian-1-2" class="fw-bold text-primary root-satu">Ikatan Antar Molekul Penyusun Air</h6>
                </a>
                <a href="#daftar-1-8" class="text-dark">
                    <p id="bagian-1-2" class="root-dua"><span class="fw-bold">Prior Knowledge :</span> Pengertian gaya ikat hidrogen</p>
                </a>
                <a href="#daftar-1-9" class="text-dark">
                    <p id="bagian-1-2" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Ikatan Hidrogen Antarmolekul air</p>
                </a>
                <a href="#daftar-1-10" class="text-dark">
                    <p id="bagian-1-2" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> Titik Didih air</p>
                </a>
                <a href="#daftar-1-11" class="text-dark">
                    <p id="bagian-1-2" class="root-dua"><span class="fw-bold">Awe Expereince :</span> Sifat polar molekul air</p>
                </a>
                <a href="#daftar-1-12" class="text-dark">
                    <p id="bagian-1-2" class="root-dua"><span class="fw-bold">Spiritual Kognition :</span> Hikmah Sifat Kapilaritas air</p>
                </a>
                <a href="#daftar-1-13" class="text-dark">
                    <h6 id="bagian-1-3" class="fw-bold text-primary root-satu">Air Sebagai Pelarut Universal</h6>
                </a>
                <a href="#daftar-1-14" class="text-dark">
                    <p id="bagian-1-3" class="root-dua"><span class="fw-bold">Prior Knowledge :</span> Pengertian larutan</p>
                </a>
                <a href="#daftar-1-15" class="text-dark">
                    <p id="bagian-1-3" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Cara air melarutkan zat lain</p>
                </a>
                <a href="#daftar-1-16" class="text-dark">
                    <p id="bagian-1-3" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> larutan homogen dan non homogen</p>
                </a>
                <a href="#daftar-1-17" class="text-dark">
                    <p id="bagian-1-3" class="root-dua"><span class="fw-bold">Awe Expereince :</span> Manfaat sifat pelarut air</p>
                </a>
                <a href="#daftar-1-18" class="text-dark">
                    <p id="bagian-1-3" class="root-dua"><span class="fw-bold">Spiritual Kognition :</span> Hikmah Sifat pelarut air dalam
                    bersuci</p>
                </a>
                <a href="#daftar-1-19" class="text-dark">
                    <h6 id="bagian-1-4" class="fw-bold text-primary root-satu">Refleksi Kognitif</h6>\
                </a>
                <a href="#daftar-1-20" class="text-dark">
                    <h6 id="bagian-1-5" class="fw-bold text-primary root-satu">Refleksi Spiritual</h6>
                </a>
                <br>
                <a href="#daftar-2" class="text-dark">
                    <h6 id="bagian-2" class="fw-bold text-primary">Bagian 2 : PERUBAHAN WUJUD AIR</h6>
                </a>
                <a href="#daftar-2-1" class="text-dark">
                    <h6 id="bagian-2-1" class="fw-bold text-primary root-satu">Wujud Air</h6>
                </a>
                <a href="#daftar-2-2" class="text-dark">
                    <p id="bagian-2-1" class="root-dua"><span class="fw-bold">Prior Knowledge :</span> Perbedaan zat padat, cair dan gas</p>
                </a>
                <a href="#daftar-2-3" class="text-dark">
                    <p id="bagian-2-1" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Karakter air dalam wujud padat cair & gas</p>
                </a>
                <a href="#daftar-2-4" class="text-dark">
                    <p id="bagian-2-1" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> Pemanfaatan zat cair pada sistem
                    hidrolik</p>
                </a>
                <a href="#daftar-2-5" class="text-dark">
                    <h6 id="bagian-2-2" class="fw-bold text-primary root-satu">Perubahan Wujud Air</h6>
                </a>
                <a href="#daftar-2-6" class="text-dark">
                    <p id="bagian-2-2" class="root-dua"><span class="fw-bold">Prior Knowledge :</span> Perilaku atom ketika ditambahkan
                    energi</p>
                </a>
                <a href="#daftar-2-7" class="text-dark">   
                    <p id="bagian-2-2" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Pengaruh kalor terhadap perubahan
                    wujud</p>
                </a>
                <a href="#daftar-2-8" class="text-dark">
                    <p id="bagian-2-2" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> Pengaruh tekanan terhadap perubahan
                    wujud</p>
                </a>
                <a href="#daftar-2-9" class="text-dark">
                    <h6 id="bagian-2-3" class="fw-bold text-primary root-satu">Melebur dan Membeku</h6>
                </a>
                <a href="#daftar-2-10" class="text-dark">
                    <p id="bagian-2-3" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Energi untuk melebur & membeku</p>
                </a>
                <a href="#daftar-2-11" class="text-dark">
                    <p id="bagian-2-3" class="root-dua"><span class="fw-bold">Awe Expereince :</span> Sifat anomali air</p>
                </a>
                <a href="#daftar-2-12" class="text-dark">
                    <p id="bagian-2-3" class="root-dua"><span class="fw-bold">Spiritual Kognition :</span> Hikmah massa jenis es > massa
                    jenis air</p>
                </a>
                <a href="#daftar-2-13" class="text-dark">
                    <h6 id="bagian-2-4" class="fw-bold text-primary root-satu">Menguap dan Mengembun</h6>
                </a>
                <a href="#daftar-2-14" class="text-dark">
                    <p id="bagian-2-4" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Energi untuk menguap & mengembun</p>
                </a>
                <a href="#daftar-2-15" class="text-dark">
                    <p id="bagian-2-4" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> pengembunan pada dinding botol dingin</p>
                </a>
                <a href="#daftar-2-16" class="text-dark">
                    <h6 id="bagian-2-5" class="fw-bold text-primary root-satu">Menyublim dan Deposisi</h6>
                </a>
                <a href="#daftar-2-17" class="text-dark">
                    <p id="bagian-2-5" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Perilaku atom ketika ditambahkan
                    energi</p>
                </a>
                <a href="#daftar-2-18" class="text-dark">
                    <p id="bagian-2-5" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> Pengaruh kalor terhadap perubahan
                    wujud</p>
                </a>
                <a href="#daftar-2-19" class="text-dark">
                    <p id="bagian-2-5" class="root-dua"><span class="fw-bold">Awe Expereince:</span> Pengaruh tekanan terhadap perubahan
                    wujud</p>
                </a>
                <a href="#daftar-2-20" class="text-dark">
                    <p id="bagian-2-5" class="root-dua"><span class="fw-bold">Spiritual Kognition :</span> Hikmah hujan, salju dan es</p>
                </a>
                <a href="#daftar-2-21" class="text-dark">
                    <p id="bagian-2-6" class="fw-bold text-primary root-satu">Refleksi Kognitif</p>
                </a>
                <a href="#daftar-2-22" class="text-dark">
                    <p id="bagian-2-7" class="fw-bold text-primary root-satu">Refleksi Spiritual</p>
                </a>
                <br>
                <a href="#daftar-3" class="text-dark">
                    <h6 id="bagian-3" class="fw-bold text-primary">Bagian 3 : SIKLUS AIR</h6>
                </a>
                <a href="#daftar-3-1" class="text-dark">
                    <h6 id="bagian-3-1" class="fw-bold text-primary root-satu">Persebaran Air di Muka Bumi</h6>
                </a>
                <a href="#daftar-3-2" class="text-dark">
                    <p id="bagian-3-1" class="root-dua"><span class="fw-bold">Prior Knowledge :</span> Jumlah air di bumi</p>
                </a>
                <a href="#daftar-3-3" class="text-dark">
                    <p id="bagian-3-1" class="root-dua"><span class="fw-bold">Combine Knowledge :</span> Mekanisme Penyebaran air tawar di
                    bumi</p>
                </a>
                <a href="#daftar-3-4" class="text-dark">
                    <p id="bagian-3-1" class="root-dua"><span class="fw-bold">Apply Knowledge :</span> Pengaruh pembendungan sungai</p>
                </a>
                <a href="#daftar-3-5" class="text-dark">
                    <p id="bagian-3-1" class="root-dua"><span class="fw-bold">Awe Expereince :</span> Manfaat gletser, air tanah, danau dan sungai</p>
                </a>
                <a href="#daftar-3-6" class="text-dark">
                    <p id="bagian-3-1" class="root-dua"><span class="fw-bold">Spiritual Kognition :</span> Hikmah gletser, air tanah, danau dan sungai</p>
                </a>
                <a href="#daftar-3-7" class="text-dark">
                    <h6 id="bagian-3-2" class="fw-bold text-primary root-satu">Mekanisme Siklus Air</h6>
                </a>
                <a href="#daftar-3-8" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua">Evaporasi</p>
                </a>
                <a href="#daftar-3-9" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Penguapan air di musim kemarau</p>
                </a>
                <a href="#daftar-3-10" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua">Transpirasi</p>
                </a>
                <a href="#daftar-3-11" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Pengaruh penggundulan hutan pada
                    trasnpirasi</p>
                </a>
                <a href="#daftar-3-12" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua">Kondensasi</p>
                </a>
                <a href="#daftar-3-13" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Bagaimana awan dapat melayang di
                    atmosfer</p>
                </a>
                <a href="#daftar-3-14" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua">Konveksi dan Adveksi</p>
                </a>
                <a href="#daftar-3-15" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Terjadinya angin darat dan angin laut</p>
                </a>
                <a href="#daftar-3-16" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua">Presipitasi</p>
                </a>
                <a href="#daftar-3-17" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Terjadinya hujan asam</p>
                </a>
                <a href="#daftar-3-18" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua">Infiltrasi dan <span class="fst-italic">Surface Run Off</span></p>
                </a>
                <a href="#daftar-3-19" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> penyebab terjadinya kekeringan</p>
                </a>
                <a href="#daftar-3-20" class="text-dark">
                    <p id="bagian-3-2 fw-bold" class="root-dua"><span class="fst-italic">Collection/</span>Pengumpulan</p>
                </a>
                <a href="#daftar-3-21" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Pengaruh penggundulan hutan pada
                    trasnpirasi</p>
                </a>
                <a href="#daftar-3-22" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Awe Expereince:</span> Pengaruh penggundulan hutan pada
                    trasnpirasi</p>
                </a>
                <a href="#daftar-3-23" class="text-dark">
                    <p id="bagian-3-2" class="root-dua"><span class="fw-bold">Spiritual Kognition:</span> Hikmah dibalik Anomali Suhu
                    Troposfer</p>
                </a>
                <a href="#daftar-3-24" class="text-dark">
                    <h6 id="bagian-3-3" class="fw-bold text-primary root-satu">Jenis-Jenis Siklus Air</h6>
                </a>
                <a href="#daftar-3-25" class="text-dark">
                    <p id="bagian-3-3 fw-bold" class="root-dua">Siklus Pendek</p>
                </a>
                <a href="#daftar-3-26" class="text-dark">
                    <p id="bagian-3-3 fw-bold" class="root-dua">Siklus Sedang</p>
                </a>
                <a href="#daftar-3-27" class="text-dark">
                    <p id="bagian-3-3 fw-bold" class="root-dua">Siklus Panjang</p>
                </a>
                <a href="#daftar-3-28" class="text-dark">
                    <p id="bagian-3-3" class="root-dua"><span class="fw-bold">Apply Knowledge:</span> Hujan Es dan Hujan Beku</p>
                </a>
                <a href="#daftar-3-29" class="text-dark">
                    <p id="bagian-3-3" class="root-dua"><span class="fw-bold">Awe Expereince:</span> Peran Angin dalam Siklus Air</p>
                </a>
                <a href="#daftar-3-30" class="text-dark">
                    <p id="bagian-3-3" class="root-dua"><span class="fw-bold">Spiritual Kognition:</span> Hikmah dibalik Adanya Siklus Air
                    </p>
                </a>
                <a href="#daftar-3-31" class="text-dark">
                    <p id="bagian-3-4" class="fw-bold text-primary root-satu">Refleksi Kognitif</p>
                </a>
                <a href="#daftar-3-31" class="text-dark">
                    <p id="bagian-3-5" class="fw-bold text-primary root-satu">Refleksi Spiritual</p>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="lihat-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="lihat-modalLabel">Lihat Jawaban</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Jawaban</h6>
                <p id="jawaban-soal"></p>
                <hr>
                <p id="status-jawaban-soal"></p>
                <h6 id="keterangan-jawaban-soal"></h6>
                <p id="jawaban-benar-soal"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=base_url()?>assets/plugins/scrollbar/scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/plugins/scrollbar/custom-scroll.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<script type="text/javascript">
    $(document).ready(function () {
        controller_bab();
        cek_latihan_soal();
        load_jawaban_ujian_soal()
    });

    var teks = $("#teks").text();

    function play() {
        responsiveVoice.speak(
            teks,
            "Indonesian Female", {
                pitch: 1,
                rate: 1,
                volume: 1
            }
        );
    }

    function stop() {
        responsiveVoice.cancel();
    }

    function pause() {
        responsiveVoice.pause();
    }

    function resume() {
        responsiveVoice.resume();
    }

    function cek_latihan_soal()
    {
        $.ajax({
            url : "<?php echo site_url('latihan_soal/cek_latihan_soal')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                for (let a = 0; a < data.length; a++) {
                    $("#jawaban-essay-"+data[a].bab+"-"+data[a].soal).val(data[a].jawaban_essay);
                    if (data[a].nilai == null || data[a].nilai == "") {
                        $("#nilai-essay-"+data[a].bab+"-"+data[a].soal).text("Nilai: Belum diberi nilai.");
                    } else {
                        $("#nilai-essay-"+data[a].bab+"-"+data[a].soal).text("Nilai: "+data[a].nilai);
                    }
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function controller_bab()
    {
        $.ajax({
            url : "<?php echo site_url('controller_materi/cek_materi')?>",
            type: "GET",
            data: {id: 3},
            dataType: "JSON",
            success: function(data)
            {
                if (data.subbab[0].status_subbab == 1) {
                    $('#subbab-learning-outcome').removeClass("disabled");
                } else {
                    $('#subbab-learning-outcome').addClass("disabled");
                }
                if (data.subbab[1].status_subbab == 1) {
                    $('#subbab-video').removeClass("disabled");
                } else {
                    $('#subbab-video').addClass("disabled");
                }
                if (data.subbab[2].status_subbab == 1) {
                    $('#subbab-persebaran-air').removeClass("disabled");
                } else {
                    $('#subbab-persebaran-air').addClass("disabled");
                }
                if (data.subbab[3].status_subbab == 1) {
                    $('#subbab-perubahan-wujud-air').removeClass("disabled");
                } else {
                    $('#subbab-perubahan-wujud-air').addClass("disabled");
                }
                if (data.subbab[4].status_subbab == 1) {
                    $('#subbab-jenis-siklus-air').removeClass("disabled");
                } else {
                    $('#subbab-jenis-siklus-air').addClass("disabled");
                }
                if (data.subbab[5].status_subbab == 1) {
                    $('#subbab-refleksi').removeClass("disabled");
                } else {
                    $('#subbab-refleksi').addClass("disabled");
                }
                if (data.subbab[6].status_subbab == 1) {
                    $('#subbab-ujian-soal').removeClass("disabled");
                } else {
                    $('#subbab-ujian-soal').addClass("disabled");
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function show_modal()
    {
        $("#standard-modal").modal('show');
    }

    let myDocument = document.getElementById("collapseNine");
    let btn = document.getElementById("btn-full");
    btn.addEventListener("click", ()=>{
        if(btn.textContent == "Go Fullscreen"){
            if (myDocument.requestFullscreen) {
                myDocument.requestFullscreen();
            } 
            else if (myDocument.msRequestFullscreen) {
                myDocument.msRequestFullscreen();
            } 
            else if (myDocument.mozRequestFullScreen) {
                myDocument.mozRequestFullScreen();
            }
            else if(myDocument.webkitRequestFullscreen) {
                myDocument.webkitRequestFullscreen();
            }
            $('#collapseNine').addClass("fullScreen");
            $('#teks').removeClass("scroll");
            $('#teks').addClass("scroll-full");
            btn.textContent = "Exit Fullscreen";
        }
        else{
            if(document.exitFullscreen) {
                document.exitFullscreen();
            }
            else if(document.msexitFullscreen) {
                document.msexitFullscreen();
            }
            else if(document.mozexitFullscreen) {
                document.mozexitFullscreen();
            }
            else if(document.webkitexitFullscreen) {
                document.webkitexitFullscreen();
            }
            btn.textContent = "Go Fullscreen";
            $('#collapseNine').removeClass("fullScreen");
            $('#teks').addClass("scroll");
            $('#teks').removeClass("scroll-full");
        }
    });

    function buka_soal(id){
        $.ajax({
            url : "<?php echo site_url('buku/buka_soal')?>",
            type: "GET",
            data: {id: id},
            dataType: "JSON",
            success: function(data)
            {
                var html = '';
                var jawaban = '';
                var alasan = '';
                for(i = 0; i < data.jawaban.length; i++) {
                jawaban += '<div class="form-check">'+
                    '<input class="form-check-input" name="b' + data.soal.bab + '-' + data.soal.id_soal + '" type="radio" value="' + data.jawaban[i].id_jawaban + '" id="b' + data.soal.bab + '-' + data.jawaban[i].id_jawaban + '">'+
                    '<label class="form-check-label" for="b' + data.soal.bab + '-' + data.jawaban[i].id_jawaban + '">' + data.jawaban[i].jawaban + '</label>'+
                '</div>';
                }

                if(data.soal.kategori == "1"){
                    alasan += '<textarea class="form-control" name="alasan-' + data.soal.bab + '-' + data.soal.id_soal + '">'+
                            '</textarea>';
                }
                
                html += '<p id="soal-"'+data.soal.id_soal+'>'+data.soal.soal+'</p>'+
                '<div class="col-12">'+
                    '<div class="container">'+
                        '<form>'+
                            ''+jawaban+''+
                            ''+alasan+''+
                            '<div class="container modal-footer">'+
                                '<div class="row">'+
                                    '<div class="col">'+
                                        '<a class="btn btn-primary" onclick="tampilkan_jawaban('+data.soal.id_soal+')">Tampilkan Jawaban</a>'+
                                    '</div>'+
                                    '<div class="col p-2">'+
                                    '<a class="btn btn-primary" onclick="kunci_jawaban(\'' + data.soal.id_soal  +'\',\'b' + data.soal.bab + '-' + data.soal.id_soal + '\',\'alasan-' + data.soal.bab + '-' + data.soal.id_soal + '\')">Mengunci Jawaban</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</form>'+
                    '</div>'+
                '</div>';
                $('#isi-soal-'+data.soal.id_soal).html(html);
                if (data.status == true) {
                    $("input[name='b" + data.soal.bab + "-" + data.soal.id_soal + "'][value='" + data.jawaban_soal.id_jawaban_fk + "']").prop('checked', true);
                    $("textarea[name='alasan-" + data.soal.bab + "-" + data.soal.id_soal + "']").val(data.jawaban_soal.alasan);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function kunci_jawaban(id_soal, input, alasan)
    {
        var Valinput = $("input[name='"+input+"']:checked").val();
        var Valalasan = $("textarea[name='"+alasan+"']").val();
        if ((!$("input[name='"+input+"']").is(":checked")) || Valalasan == "") {
            toastr.warning("Silahkan lengkapi jawaban terlebih dahulu.", "Perhatian!", {
                closeButton: !0,
                tapToDismiss: !1,
                progressBar: !0
            })
        } else {
            $.ajax({
                url : "<?php echo site_url('buku/kunci_jawaban')?>",
                type: "POST",
                data: {id_soal: id_soal, input: Valinput, alasan: Valalasan},
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status == true){
                        toastr.success("Berhasil mengunci jawaban.", "Sukses!", {
                            closeButton: !0,
                            tapToDismiss: !1,
                            progressBar: !0
                        })
                    } else {
                        toastr.info("Anda sudah mengisi jawaban.", "Info!", {
                            closeButton: !0,
                            tapToDismiss: !1,
                            progressBar: !0
                        })
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    }

    function tampilkan_jawaban(id)
    {
        $.ajax({
            url : "<?php echo site_url('buku/tampilkan_jawaban')?>",
            type: "GET",
            data: {id_soal: id},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status == true) {
                    $("#lihat-modal").modal('show');
                    $("#jawaban-soal").text(data.jawaban_mahasiswa.jawaban);
                    if (data.jawaban_mahasiswa.status_jawaban == "0") {
                        $("#status-jawaban-soal").text("Jawaban Anda Salah.");
                        $("#keterangan-jawaban-soal").text("Jawaban yang benar adalah ...");
                        $("#jawaban-benar-soal").text(data.jawaban.jawaban);
                    } else {
                        $("#status-jawaban-soal").text("Jawaban Anda Benar.");
                    }
                } else {
                    toastr.info("Silahkan isi jawaban terlebih dahulu.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function simpan_essay(bab, soal)
    {
        var jawaban = $("#jawaban-essay-"+bab+"-"+soal).val();
        if (jawaban == "" || jawaban == null) {
            toastr.warning("Silahkan isi jawaban terlebih dahulu.", "Perhatian!", {
                closeButton: !0,
                tapToDismiss: !1,
                progressBar: !0
            })
        } else {
            $.ajax({
                url : "<?php echo site_url('buku/simpan_essay')?>",
                type: "POST",
                data: {bab: bab, soal: soal, jawaban: jawaban},
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status ==  true){
                        toastr.success("Berhasil menyimpan jawaban.", "Sukses!", {
                            closeButton: !0,
                            tapToDismiss: !1,
                            progressBar: !0
                        })
                        cek_latihan_soal();
                    } else {
                        toastr.info("Anda sudah mengisi jawaban.", "Info!", {
                            closeButton: !0,
                            tapToDismiss: !1,
                            progressBar: !0
                        })
                        cek_latihan_soal()
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    }

</script>
<script>
    var interval;
    function startTimer(duration, display, id) {
        
        clearInterval(interval);
        var timer = duration, minutes, seconds;
        interval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
            if(id == 1){
                $('#btn-mulai-satu').attr('disabled',true);
                if (--timer < 0) {
                    toastr.info("Waktu habis.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    clearInterval(interval);
                    $('#btn-mulai-satu').attr('disabled',false);
                    setTimeout($("#simpan_ujian_soal_satu").click(), 5000);
                }
            } else if(id == 2){
                $('#btn-mulai-dua').attr('disabled',true);
                if (--timer < 0) {
                    toastr.info("Waktu habis.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    clearInterval(interval);
                    $('#btn-mulai-dua').attr('disabled',false);
                    setTimeout($("#simpan_ujian_soal_dua").click(), 5000);
                }
            } else {
                $('#btn-mulai-tiga').attr('disabled',true);
                if (--timer < 0) {
                    toastr.info("Waktu habis.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    clearInterval(interval);
                    $('#btn-mulai-tiga').attr('disabled',false);
                    setTimeout($("#simpan_ujian_soal_tiga").click(), 5000);
                }
            }
            
        }, 1000);
    }

    function intCount(id){
        if(id == 1){
            var fiveMinutes = 60 * 1,
            display = document.querySelector('#timerSatu');
            startTimer(fiveMinutes, display, id);
        } else if(id == 2){
            var fiveMinutes = 60 * 1,
            display = document.querySelector('#timerDua');
            startTimer(fiveMinutes, display, id);
        } else {
            var fiveMinutes = 60 * 1,
            display = document.querySelector('#timerTiga');
            startTimer(fiveMinutes, display, id);
        }
    }

    function load_jawaban_ujian_soal()
    {
        $.ajax({
            url : "<?php echo site_url('buku/get_jawaban_ujian_soal')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                for(let i=0; i < data.satu.length; i++){
                    $("textarea[name='soal_1_"+[i+1]+"']").val(data.satu[i].jawaban_ujian_soal);
                }
                for(let i=0; i < data.dua.length; i++){
                    $("textarea[name='soal_2_"+[i+1]+"']").val(data.dua[i].jawaban_ujian_soal);
                }
                for(let i=0; i < data.angket.length; i++){
                    $("input[name='soal_3_"+[i+1]+"'][value='" + data.angket[i].jawaban_ujian_soal + "']").prop('checked', true);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function simpan_ujian_soal(bagian)
    {
        var formData = "";
        if(bagian == 1){
            formData = $('#form-ujian-soal-satu').serialize();
        } else if(bagian == 2){
            formData = $('#form-ujian-soal-dua').serialize();
        } else {
            formData = $('#form-ujian-soal-tiga').serialize();
        }
        $.ajax({
            url : "<?php echo site_url('buku/simpan_ujian_soal')?>",
            type: "POST",
            data: formData + "&bagian="+bagian+"",
            dataType: "JSON",
            success: function(data)
            {
                if(data.status)
                {
                    toastr.success("Berhasil menyimpan data.", "Sukses!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                } else {
                    toastr.info("Anda sudah mengisi jawaban.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
</script>