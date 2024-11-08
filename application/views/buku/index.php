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
            <h3 class="page-title">E-Book</h3>
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
            <!-- BAB 1 -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingNine">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="bagian-1" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            Bagian 1 | STRUKTUR MOLEKUL AIR <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseNine" class="collapse show" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px;">
                            <h5 id="daftar-1" class="text-primary">LEARNING OUTCOME</h5>
                            <div class="border-top border-bottom border-dark">
                                <p class="text-primary fw-bold">Conceptual Understanding</p>
                                <ol>
                                    <li>1.1 Memahami ikatan antar atom penyusun molekul air</li>
                                    <li>1.2 memahami reaksi kimia yang terjadi dalam pembentukan molekul air</li>
                                    <li>1.3 Memahami munculnya sifat polaritas pada air.</li>
                                    <li>1.4 Memahami ikatan antar molekul air</li>
                                    <li>1.5 Memahami terjadinya sifat kohesi dan adhesi air</li>
                                    <li>1.6 Memahami terjadinya sifat kapilaritas dan tegangan permukaan pada air</li>
                                    <li>1.7 Memahami terjadinya sifat air sebagai pelarut universal</li>
                                </ol>
                            </div>

                            <p class="text-primary fw-bold">Reflective Thinking Skill</p>
                            <ol>
                                <li>1.1 Mengingat kembali karakteristik ikatan kovalen</li>
                                <li>1.2 Menggunakan pemahaman mengenai ikatan kovalen untuk menganalisis ikatan antar
                                    atom penyusun air</li>
                                <li>1.3 Memprediksikan dampak dari ikatan kovalen antar atom penyusun air terhadap
                                    karakteristik molekul air</li>
                                <li>1.4 Mengingat kembali perbedaan molekul polar dan non-polar</li>
                                <li>1.5 Menggunakan pemahaman mengenai molekul polar dan non-polar untuk menganalisis
                                    polaritas molekul air</li>
                                <li>1.6 Memprediksikan dampak polaritas molekul air terhadap karakteristik molekul air
                                </li>
                                <li>1.7 Mengingat kembali karakteristik jenis-jenis ikatan antar molekul</li>
                                <li>1.8 Menggunakan pemahaman mengenai jenis-jenis ikatan antar molekul untuk
                                    menganalisis ikatan antar molekul air.</li>
                                <li>1.9 Memprediksikan dampak dari ikatan hidrogen pada molekul air terhadap
                                    karakteristik air</li>
                            </ol>

                            <div class="border-top border-bottom border-dark">
                                <p class="text-primary fw-bold">Spiritual Attitude</p>
                                <ol>
                                    <li>1.1 Meyakini keberadaan air di bumi secara melimpah merupakan bukti keagungan
                                        Allah
                                        SWT sebagai Maha Pencipta dan menetapkan segala sesuatu sesuai kehendak-Nya.
                                    </li>
                                    <li>1.2 Meyakini sifat polaritas pada air merupakan bukti keagungan Allah SWT
                                        sebagai
                                        Maha Perencana yang telah mendesain secara detail agar air memiliki sifat
                                        sebagai
                                        zat pelarut yang baik sehingga dapat dimanfaatkan sebagai media pembersihan dan
                                        penyucian.</li>
                                    <li>1.3 Meyakini sifat kohesi dan adhesi pada air merupakan bukti keagungan Allah
                                        SWT
                                        sebagai Maha Perencana yang telah mendesain agar air memiliki sifat sebagai zat
                                        pelarut yang baik sehingga menghasilkan sifat kapilaritas yang bermanfaat bagi
                                        tumbuhan, hewan dan manusia.</li>
                                    <li>1.4 Meyakini ikatan hidrogen yang terjadi antar molekul air bukti keagungan
                                        Allah
                                        SWT sebagai merupakan desain yang telah Allah SWT tetapkan agar air memiliki
                                        titik
                                        lebur yang tinggi</li>
                                </ol>
                            </div>
                            <p>Air merupakan senyawa anorganik dengan rumus kimia H2O . Air adalah zat kimia yang
                                transparan, tidak berasa, tidak berbau dan hampir tidak berwarna. Air menutupi hampir
                                71% permukaan Bumi. Air bersih penting bagi kehidupan manusia dan merupakan konstituen
                                utama hidrosfer bumi. Pada bagian ini akan dibahas mengenai struktur molekul air.
                                Sebelum memulai belajar anda boleh menonton penjelasan mengenai struktur molekul air
                                pada link video berikut.</p>
                            <div class="container mt-5">
                                <video class="img-fluid" controls>
                                    <source src="<?=base_url()?>assets/video/bab 1.mp4">
                                </video>
                            </div>
                            <!-- Ikatan Atom Penyusun Molekul Air -->
                            <div id="bagian-1-1">
                                <h3 id="daftar-1-1" class="text-primary fw-bold">Ikatan Antar Atom Penyusun Molekul Air
                                </h3>
                                <p>Mengingat Rumus kimia air adalah H2O, maka hal tersebut menunjukkan bahwa setiap
                                    molekul
                                    air mengandung satu atom oksigen dan dua atom hidrogen dimana ketiga atom tersebut
                                    dihubungkan melalui ikatan kovalen.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.1.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 1.1</span> Ilustrasi
                                    molekul air (H2O)</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingSatu">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatu"
                                                aria-expanded="true" onclick="buka_soal(1)">
                                                <i id="daftar-1-1" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Check Previous Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSatu" class="collapse" aria-labelledby="headingSatu"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-1"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary fw-bold" id="test1">Check Your Answer</p>
                                    <p>Ikatan kovalen adalah ikatan yang terbentuk dari pemakaian bersama pasangan
                                        elektron
                                        antara dua atom. Pasangan elektron yang berpartisipasi dalam jenis ikatan ini
                                        disebut
                                        pasangan bersama atau pasangan ikatan. Berbagi pasangan ikatan akan memastikan
                                        bahwa
                                        atom mencapai stabilitas di kulit terluarnya, yang mirip dengan atom gas mulia.
                                        Ikatan
                                        kovalen termasuk ikatan yang kuat antar atom</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.2.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 1.2</span>
                                        Ilustrasi
                                        pemakaian elektron bersama pada ikatan kovalen</p>

                                    <p>Terdapat beberapa tipe ikatan kovalen diantaranya adalah :</p>
                                    <ul>
                                        <li>1. <strong>Single Bond</strong> Yaitu ikatan kovalen yang hanya melibatkan
                                            satu
                                            pasang elektron contohnya pada molekul Cl2</li>
                                        <li>2. <strong>Double Bond</strong> Yaitu ikatan kovalen yang melibatkan dua
                                            pasang
                                            elektron contohnya pada molekul O2</li>
                                        <li>3. <strong>Triple Bond</strong> Yaitu ikatan kovalen yang melibatkan tiga
                                            pasang
                                            elektron contohnya pada molekul N2</li>
                                    </ul>
                                    <p>Ikatan kovalen pada dua atom atau lebih juga memungkinkan untuk membentuk momen
                                        dipol.
                                        Jika dua atom yang membentuk ikatan kovalen memiliki elektronegativitas
                                        (kekuatan
                                        inti
                                        atom menarik elektron) yang berbeda maka akan menghasilkan ikatan kovalen polar,
                                        sebaliknya jika dua atom yang membentuk ikatan kovalen memiliki
                                        elektronegativitas
                                        (kekuatan inti atom menarik elektron) yang sama maka akan menghasilkan ikatan
                                        kovalen
                                        nonpolar.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.3.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 1.3</span>
                                        Ilustrasi
                                        ikatan
                                        kovalen polar pada molekul HF</p>
                                    <p>Pada ikatan kovalen HF, karena atom F memiliki nomor atom yang lebih besar dari H
                                        maka
                                        elektronegativitas F lebih besar dari elektronegativitas H sehingga pasangan
                                        elektron
                                        akan lebih tertarik pada atom F sehingga menimbulkan perbedaan dipol dimana atom
                                        F
                                        akan
                                        memiliki muatan negatif parsial sedangkan atom H akan memiliki dipol positif
                                        parsial.
                                        Dengan kata lain ikatan kovalen HF termasuk ikatan kovalen polar</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.4.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 1.4</span>
                                        Ilustrasi
                                        ikatan
                                        kovalen non polar pada molekul O2</p>
                                    <p>Adapun pada ikatan kovalen O2, karena kedua atom O memiliki elektronegativitas
                                        yang
                                        sama
                                        maka distribusi elektron akan sama sehingga tidak ada dipol yang terbentuk
                                        sehingga
                                        dengan kata lain ikatan kovalen O2 termasuk kedalam ikatan non-polar.</p>
                                </div>
                                <br>
                                <p id="daftar-1-3" class="fw-bold"><span class="text-primary">Combine Knowledge</span>
                                    <span class="fw-bold">: Bagaimana Ikatan Kovalen Pada molekul air?</span></p>
                                <p>ikatan antara dua atom hidrogen dengan satu atom oksigen pada molekul air dapat
                                    terjadi
                                    antara elektron-elektron yang berada pada bagian luar atom tersebut. Ikatan tersebut
                                    dapat terjadi karena atom hidrogen hanya mempunyai kulit tunggal di sekeliling inti.
                                    Meskipun kulit tersebut hanya berisi sebuah elektron tunggal, tetapi masih tersedia
                                    tempat untuk dua elektron. Sedangkan pada atom oksigen mempunyai cukup ruang untuk
                                    ditempati oleh delapan elektron, tetapi dalam atom oksigen tersebut kulit terluar
                                    hanya
                                    berisi enam elektron. Sehingga kulit terluar dari atom oksigen belum terisi penuh
                                    oleh
                                    elektron</p>
                                <p>Ketika satu atom Oksigen terikat pada dua atom hidrogen, kulit elektron terluar atom
                                    oksigen akan terisi penuh dimana akan terjadi pemakaian bersama pasangan elektron
                                    terluar dari atom hidrogen dan oksigen. Disisi lain atom hidrogen yang sebelumnya
                                    hanya
                                    memiliki satu elektron pada kulitnya, kini terisi penuh dengan dua elektron. Artinya
                                    ketiga atom tersebut berbagi seluruhnya pada elektron, dan terjadilah pemakaian
                                    bersama
                                    elektron. Hal tersebutlah kemudian yang mendasari bahwa ikatan yang terjadi pada
                                    molekul
                                    air adalah ikatan kovalen.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.5.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 1.5</span> Ilustrasi
                                    ikatan
                                    Kovalen pada molekul air (H2O)</p>
                                <p>Ikatan kovalen pada molekul air ini akan menciptakan kestabilan pada masing-masing
                                    atom
                                    karena setiap kulit dari masing-masing atom akan terisi penuh seperti pada atom gas
                                    mulia (kulit pertama berisi 2 elektron, kulit kedua berisi 8 elektron) yang pada
                                    akhirnya mengakibatkan molekul air memiliki kemantapan yang mengagumkan.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDua">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDua"
                                                aria-expanded="true" onclick="buka_soal(2)">
                                                <i id="daftar-1-2" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDua" class="collapse" aria-labelledby="headingDua"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="fw-bold text-primary">Check Your Answer</p>
                                    <p>Karena nomor atom Oksigen lebih besar dari nomor atom hidrogen, maka Atom oksigen
                                        mempunyai Keelektronegatifan yang lebih besar daripada atom hidrogen. Tarikan
                                        atom
                                        oksigen pada elektron-elektron ikatan jauh lebih kuat daripada yang dilakukan
                                        oleh
                                        atom
                                        hidrogen, meninggalkan jumlah muatan positif pada kedua atom hidrogen, dan
                                        jumlah
                                        muatan
                                        negatif pada atom oksigen. Adanya muatan pada tiap-tiap atom tersebut membuat
                                        molekul
                                        air memiliki sejumlah momen dipol.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.6.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 1.6 </span>
                                        Ilustrasi
                                        momen dipol pada molekul air (H2O)</p>
                                    <p>Dengan adanya momen dipol tersebut maka ikatan O―H dalam molekul air merupakan
                                        ikatan
                                        kovalen yang bersifat polar, dengan oksigen mempunyai muatan parsial negatif
                                        (δ−)
                                        dan
                                        hidrogen mempunyai muatan parsial positif (δ+). Namun perlu diingat bahwa tidak
                                        semua
                                        molekul yang memiliki momen dipol dapat dikategorikan sebagai senyawa kovalen
                                        polar.
                                        Terdapat pula senyawa kovalen non-polar. Senyawa kovalen non polar merupakan
                                        senyawa
                                        kimia yang memiliki ikatan kovalen antara atom-atom yang memiliki perbedaan
                                        keelektronegatifan yang kecil atau sama sehingga elektron-elektron dalam ikatan
                                        tersebut
                                        terdistribusi secara merata dan tidak terpolarisasi. Hal ini menyebabkan senyawa
                                        jenis
                                        non polar tidak memiliki momen dipol dan bersifat tidak larut dalam pelarut
                                        polar
                                        seperti air.</p>
                                    <p>Contoh senyawa kovalen non-polar adalah karbon dioksida (CO2). Secara ikatan
                                        molekul,
                                        CO2
                                        dan H2O sebenarnya sama-sama mempunyai ikatan polar, tetapi hanya H2O yang
                                        merupakan
                                        molekul polar. Hal ini disebabkan karena dua atom Oksigen dan Karbon dioksida
                                        bersifat
                                        simetris sehingga tarikan dua oksigen pada elektron karbon saling menghilangkan,
                                        sehingga merupakan molekul nonpolar dengan ikatan polar. Sedangkan pada molekul
                                        air
                                        dua
                                        atom Hidrogen dan atom oksigen tidak simetris sehingga dihasilkan neto dipol.
                                    </p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.7.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 1.7
                                        </span>Perbedaan
                                        polaritas pada molekul CO2 dan H2O</p>
                                </div>
                                <br>
                                <p id="daftar-1-5" class="fw-bold"><span class="text-primary fw-bold">Awe
                                        Experience</span>: Tahukah anda bagaimana reaksi yang
                                        terjadi antara hidrogen
                                        dan oksigen untuk dapat menghasilkan air?</p>
                                <p>Walaupun secara teoritik untuk dapat menghasilkan molekul air terlihat cukup mudah,
                                    yakni
                                    cukup dengan mencampurkan dua molekul gas hidrogen (H2) dan satu molekul oksigen
                                    (O2)
                                    sehingga terbentuk dua molekul air (H2O) Air adalah nama umum untuk dihidrogen
                                    monoksida
                                    atau H2O. seperti dirumuskan sebagai berikut:</p>
                                <p class="text-center fw-bold">2 H<sub>2</sub> + O<sub>2</sub> → 2 H<sub>2</sub>O</p>
                                <p>Namun, pada faktanya hanya mencampurkan kedua gas tersebut pada suhu kamar tidak akan
                                    menghasilkan apa-apa, seperti halnya molekul hidrogen dan oksigen yang tercampur di
                                    udara tidak secara spontan membentuk air. Energi harus disuplai untuk memutus ikatan
                                    kovalen yang menyatukan molekul H2 dan O2 Kation hidrogen dan anion oksigen kemudian
                                    bebas bereaksi satu sama lain, hal ini terjadi karena perbedaan
                                    elektronegativitasnya.
                                    Ketika ikatan kimia terbentuk kembali untuk menghasilkan air, energi tambahan
                                    dilepaskan, yang memicu reaksi. Reaksi bersihnya sangat eksotermik , artinya reaksi
                                    yang
                                    disertai pelepasan panas.</p>
                                <p>Sesungguhnya jika gas oksigen dan gas hidrogen bertemu untuk membentuk molekul air,
                                    reaksi yang terjadi sangatlah berbahaya karena bisa timbul panas yang tinggi bahkan
                                    ledakan karena oksigen adalah gas yang dibutuhkan untuk pembakaran dan hidrogen
                                    adalah
                                    gas yang mudah terbakar. Kurang lebih dibebaskan energi berupa panas sebesar 242
                                    kilo
                                    Joule untuk membuat air sebanyak 18 gram dari 22,4 liter atau 2 gram gas hidrogen
                                    dan
                                    11,2 liter atau 16 gram gas oksigen pada suhu 0 derajat Celcius dan tekanan satu
                                    atmosfer<p>
                                        <p>Jadi, kita dapat membuat air dari hidrogen dan oksigen, dan hal ini sering
                                            dilakukan oleh ahli kimia dan pendidik—dalam jumlah kecil. Namun, tidak
                                            praktis
                                            menggunakan metode ini dalam skala besar karena risikonya dan karena
                                            memurnikan
                                            hidrogen dan oksigen untuk menghasilkan reaksi jauh lebih mahal dibandingkan
                                            membuat air menggunakan metode lain seperti memurnikan air yang
                                            terkontaminasi
                                            atau mengembunkan uap air dari udara.</p>
                                        <p id="daftar-1-6" class="fw-bold"><span class="text-primary fw-bold">Spiritual
                                                Kognition</span><span class="fw-bold"> : Hikmah dibalik penciptaan Air
                                                di
                                                bumi</span></p>
                                        <p>Mengingat rumitnya proses reaksi hidrogen dan oksigen yang harus terjadi
                                            untuk
                                            dapat menghasilkan air, maka keberadaan air di bumi dengan jumlah yang
                                            melimpah
                                            mustahil merupakan sebuah proses yang terjadi begitu saja. Kita tahu bahwa
                                            hidrogen merupakan materi dasar pembentuk alam semesta dan oksigen juga
                                            (meski
                                            dalam jumlah yang kecil) dapat ditemukan di planet lain selain bumi. Namun
                                            keberadaan oksigen dan hidrogen secara bersamaan belum tentu dapat
                                            menghasilkan
                                            air karena diperlukan kondisi yang tepat agar reaksi pembentukan air dapat
                                            terjadi.</p>
                                        <p>Tapi untunglah Allah telah menyediakan air semenjak penciptaan sehingga kita
                                            tidak perlu membuat air dengan ledakan. Jauh sebelum manusia diciptakan
                                            untuk
                                            menempati bumi, terlebih dahulu bumi mengalami 'pengkondisian' agar menjadi
                                            tempat yang layak huni. Salah satunya adalah dengan menyediakan air sebagai
                                            sumber utama kehidupan.</p>
                                        <p>dalam Al-Qur’an surah Al- Mu'minun ayat 18 sebagai berikut: </p>
                                        <p class="text-end">وَأَنزَلْنَا مِنَ ٱلسَّمَآءِ مَآءًۢ بِقَدَرٍ
                                            فَأَسْكَنَّٰهُ
                                            فِى ٱلْأَرْضِ ۖ
                                            وَإِنَّا عَلَىٰ ذَهَابٍۭ بِهِۦ لَقَٰدِرُونَ</p>
                                        <p class="fst-italic">”Dan Kami turunkan air dari langit menurut suatu ukuran;
                                            lalu
                                            Kami jadikan air
                                            itu menetap di bumi, dan sesungguhnya Kami benar-benar berkuasa
                                            menghilangkannya” <span class="fw-bold">(Q.S. Al- Mu’minuun : 18)</span></p>
                                        <p>Dalam Q.S. Az – Zukhruf ayat 11 Allah SWT juga berfirman sebagai berikut:</p>
                                        <p class="text-end">وَٱلَّذِى نَزَّلَ مِنَ ٱلسَّمَآءِ مَآءًۢ بِقَدَرٍ
                                            فَأَنشَرْنَا
                                            بِهِۦ بَلْدَةً
                                            مَّيْتًا ۚ كَذَٰلِكَ تُخْرَجُونَ</p>
                                        <p class="fst-italic"> “Dan yang menurunkan air dari langit menurut ukuran (yang
                                            diperlukan) lalu
                                            dengan air itu kami hidupkan negeri yang mati (tandus). Seperti itulah kamu
                                            akan
                                            dikeluarkan (dari kubur)” <span class="fw-bold">(Q.S. Az-Zukhruf :
                                                11)</span>
                                        </p>
                                        <p>Dari kedua ayat diatas kita dapat mengambil satu kesimpulan bahwa dalam
                                            proses
                                            penciptaan bumi, ketika bumi masih berada dalam kondisi panas, kering dan
                                            tandus
                                            maka Allah SWT menurunkan air dari langit yang kemudian mendinginkan bumi
                                            dan
                                            membuat tanahnya menjadi subur yang memungkinkan tumbuhnya berbagai
                                            kehidupan di
                                            muka bumi.</p>
                                        <p>Namun begitu, meskipun mudah bagi Allah SWT untuk menurunkan air ke bumi
                                            dalam
                                            sekejap, tentu saja segala sesuatu yang terjadi di alam semesta terjadi
                                            dengan
                                            sunatullah yang telah Allah tetapkan. sehingga dengan akal pikiran yang
                                            telah
                                            Allah karuniakan pada manusia, maka manusia akan mampu menggali hukum-hukum
                                            alam
                                            yang telah Allah tetapkan sesuai dengan level pemikiran manusia.</p>
                                        <p>Berangkat dari ayat-ayat al-quran yang menerangkan bahwa asal muasal air yang
                                            berada di bumi merupakan kiriman dari langit maka muncul berbagai teori yang
                                            mencoba untuk menjelaskan Mengenai keberadaan air di bumi. Salah satu teori
                                            yang
                                            paling terkenal dan dianggap memiliki kesesuaian dengan bukti ilmiah adalah
                                            bahwa air di bumi berasal dari asteroid, debu, gas, hingga awan yang tersisa
                                            dari pembentukan matahari. Hal ini didasarkan dari fakta ilmiah bahwa
                                            Atmosfer
                                            bumi mengandung banyak oksigen, namun gas hidrogen langka. Hidrogen di
                                            atmosfer
                                            kita yang tidak terikat dalam molekul cenderung lepas ke luar angkasa,
                                            terlalu
                                            ringan dan energik untuk dapat ditahan oleh gravitasi bumi.</p>
                                        <p>Agar hidrogen dalam sejarah awal bumi dapat tiba dan tersimpan dalam jumlah
                                            yang
                                            cukup besar untuk berikatan dengan oksigen di atmosfer bumi, maka hidrogen
                                            tersebut pasti terikat pada suatu pembawa—atom lain yang mengikatnya menjadi
                                            sebuah molekul. Itulah sebabnya beberapa astronom memandang komet yang kaya
                                            akan
                                            air es mungkin merupakan sumber lautan di Bumi. Komet es yang membawa air ke
                                            bumi akan menguap ke atmosfer (karena panas bumi), dalam kurun waktu yang
                                            lama
                                            bumi akan mendingin dan di atmosfer bumi terkandung uap air dalam jumlah
                                            yang
                                            banyak sehingga dimulailah siklus hidrologi.</p>
                                        <p>Meskipun begitu, dari berbagai penjelasan teori tersebut kita dapat menarik
                                            suatu
                                            logika sederhana bahwa dengan segala kerumitannya, maka mustahil air yang
                                            terdapat di bumi dalam jumlah melimpah merupakan peristiwa kebetulan. Dengan
                                            banyaknya faktor dan pengkondisian lingkungan yang diperlukan agar reaksi
                                            oksigen dan hidrogen dapat menghasilkan air, maka kita akan sampai pada satu
                                            keyakinan bahwa keberadaan air di bumi merupakan sesuatu yang telah
                                            dirancang
                                            oleh Allah SWT sebagai bagian dari suatu ‘skenario’ yang telah Allah
                                            tetapkan
                                            bahwa bumi akan ditempati oleh sejumlah makhluk hidup termasuk manusia yang
                                            dalam proses kehidupannya memiliki ketergantungan yang besar terhadap air.
                                        </p>
                                        <!-- end bagian 1 -->
                            </div>
                            <!-- End Ikatan Atom Penyusun Molekul Air -->
                            <!-- Ikatan Antar Molekul Penyusun Air -->
                            <div id="bagian-1-2">
                                <h3 id="daftar-1-7" class="fw-bold text-primary">Ikatan Antar Molekul Penyusun Air</h3>
                                <p>Gaya antar molekul adalah gaya tarik-menarik antar molekul, yang menentukan
                                    banyak sifat fisik suatu zat. Berbeda dengan gaya antarmolekul, seperti ikatan
                                    kovalen yang menyatukan atom-atom dalam molekul, gaya antarmolekul menyatukan
                                    molekul-molekul dalam cairan atau padatan. Gaya antarmolekul umumnya jauh lebih
                                    lemah dibandingkan ikatan kovalen. Gambar 1.8 mengilustrasikan perbedaan kedua
                                    ikatan tersebut pada molekul HCl. Kekuatan gaya tarik-menarik ini sangat
                                    bervariasi, meskipun biasanya gaya antar molekul kecil lebih lemah dibandingkan
                                    dengan gaya antar molekul yang mengikat atom-atom dalam suatu molekul. Misalnya,
                                    untuk mengatasi gaya antar molekul dalam satu mol HCl cair dan mengubahnya
                                    menjadi gas HCl hanya memerlukan sekitar 17 kilojoule. Namun, untuk memutus
                                    ikatan kovalen antara atom hidrogen dan klor dalam satu mol HCl memerlukan
                                    energi sekitar 25 kali lebih banyak—430 kilojoule. Mengingat perbedaan besar
                                    dalam kekuatan gaya intramolekul dan antarmolekul, perubahan antara wujud padat,
                                    cair, dan gas hampir selalu terjadi pada setiap zat molekuler tanpa memutus
                                    ikatan kovalen .</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.8.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 1.8 </span>Gaya antar
                                    molekul menyatukan molekul dan menentukan sifat suatu zat.
                                </p>
                                <p>Gaya antarmolekul menentukan sifat zat, seperti titik leleh zat padat dan titik
                                    didih zat cair. Cairan mendidih ketika molekul memiliki energi panas yang cukup
                                    untuk mengatasi gaya tarik menarik antarmolekul yang menyatukannya, sehingga
                                    membentuk gelembung uap di dalam cairan. Demikian pula, padatan meleleh ketika
                                    molekul memperoleh energi panas yang cukup untuk mengatasi gaya antarmolekul
                                    yang menguncinya pada tempatnya di dalam padatan.</p>
                                <p>Gaya antarmolekul bersifat elektrostatis; artinya, mereka muncul dari interaksi
                                    antara benda bermuatan positif dan negatif. Seperti ikatan kovalen dan ionik,
                                    interaksi antarmolekul merupakan gabungan dari komponen tarik menarik dan tolak
                                    menolak. Karena interaksi elektrostatis berkurang seiring dengan bertambahnya
                                    jarak antar molekul, interaksi antarmolekul paling penting untuk padatan dan
                                    cairan, karena molekul-molekulnya berdekatan. Sedangkan pada gas, dalam keadaan
                                    normal hampir tidak memiliki interaksi gaya antar molekul mengingat jarak antar
                                    molekul yang sangat renggang, kecuali pada tekanan yang sangat tinggi, interaksi
                                    gaya antar molekul pada gas menjadi penting karena interaksi ini bertanggung
                                    jawab atas penyimpangan yang diamati dari hukum gas ideal pada tekanan tinggi.
                                </p>
                                <p>Berdasarkan pembahasan sebelumnya kita telah mengetahui bahwa molekul air H2O
                                    terbentuk dari ikatan kovalen antara 2 atom hidrogen dengan 1 atom oksigen
                                    sehingga terbentuk molekul H2O yang stabil dan bersifat polar. Namun, bagaimana
                                    antar molekul tersebut dapat berikatan sehingga dalam suhu ruangan air dapat
                                    berwujud cair. Karena jika seandainya antar molekul tersebut tidak berikatan
                                    maka air akan berwujud gas dimana masing-masing molekulnya saling bebas. </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.9.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 1.9</span> Ilustrasi
                                    ikatan
                                    antar molekul air (H2O)</p>
                                <p>Terdapat dua jenis gaya yang dapat menyebabkan terjadinya ikatan antar molekul
                                    sejenis pada suatu zat padat atau zat cair, yaitu gaya van der waals dan ikatan
                                    hidrogen. Berdasarkan karakteristiknya maka ikatan yang terbentuk pada molekul
                                    air adalah ikatan hidrogen. Ikatan hidrogen umumnya lebih kuat dibandingkan
                                    ikatan van der waals, namun lebih lemah dibandingkan ikatan kovalen.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingTiga">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseTiga"
                                                aria-expanded="true" onclick="buka_soal(3)">
                                                <i id="daftar-1-3" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Check Previous Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTiga" class="collapse" aria-labelledby="headingTiga"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="fw-bold text-primary">Check Your Answer</p>
                                    <p>Terdapat dua jenis gaya yang dapat menyebabkan terjadinya ikatan antar molekul
                                        sejenis pada suatu zat padat atau zat cair, yaitu <strong>gaya van der
                                            waals</strong> dan <strong>ikatan hidrogen</strong> Gaya Van der Waals
                                        terbagi lagi menjadi <strong>Gaya London</strong> dan <strong>Gaya
                                            Dipol-dipol.</strong></p>
                                    <p><strong>Gaya London</strong> adalah gaya tarik-menarik dipol yang terjadi pada
                                        molekul non-polar. Gaya London terjadi akibat terbentuknya dipol sesaat, dan
                                        memiliki daya tarik-menarik yang lemah, karena hanya terjadi sesaat.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.10.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.10
                                        </span>Ilustrasi
                                        gaya london pada molekul O2</p>
                                    <p>Contoh gaya london misalnya pada ikatan antar molekul oksigen (O2). Pada dasarnya
                                        molekul O2 merupakan molekul non-polar (netral) sehingga antar molekul O2 tidak
                                        akan terjadi gaya apapun. Namun, karena pergerakan elektron yang konstan, sebuah
                                        molekul O2 dapat mengembangkan dipol sementara (sesaat) ketika
                                        elektron-elektronnya terdistribusi secara tidak simetris di sekitar inti. Akibat
                                        dipol sesaat tersebut, molekul lain yang berada pada jarak yang sangat dekat
                                        (hampir bersentuhan) dapat terimbas oleh munculnya dipol pada atom atau molekul
                                        pertama (karena elektron saling tolak menolak) sehingga menyebabkan gaya tarik
                                        elektrostatik antara kedua molekul tersebut. Gaya tarik tersebut dapat hilang
                                        kembali ketika molekul O2 kembali menjadi netral. Karena dipol yang terbentuk
                                        hanya sesaat, maka gaya dispersi London merupakan gaya antarmolekul yang paling
                                        lemah. </p>
                                    <p><strong>Gaya tarik dipol-dipol</strong> adalah gaya tarik menarik dipol yang
                                        terjadi antar molekul polar dan/atau wujud padat, cair dan larutan. Gaya tarik
                                        dipol-dipol terjadi karena adanya dipol pada molekul, dan memiliki daya tarik
                                        menarik yang lebih kuat dari gaya London.</p>
                                    <p>Contoh gaya tarik dipol-dipol adalah gaya antar molekul Hidrogen klorida (HCl).
                                        HCl adalah senyawa polar yang memiliki dipol-dipol permanen. Dipol HCl terbentuk
                                        dari atom hidrogen (H) yang bermuatan parsial positif dan atom klor (Cl) yang
                                        bermuatan parsial negatif. Sehingga, ketika hidrogen dan klor membentuk HCl,
                                        maka terbentuk gaya tarik menarik antara partikel bermuatan atau dipol-dipolnya.
                                        Di mana suatu molekul HCl memiliki ujung positif dan ujung negatif. </p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.11.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.11</span>
                                        Ilustrasi
                                        gaya tarik dipol-dipol pada molekul HCl</p>
                                    <p>Gaya tarik-menarik antar molekul HCl dihasilkan dari gaya tarik-menarik antara
                                        ujung positif suatu molekul HCl dengan ujung negatif molekul HCl yang lain. Gaya
                                        tarik-menarik tersebut disebut sebagai gaya Van der Waals tipe gaya dipol-dipol.
                                        Gaya tersebut menyebabkan molekul-molekul saling menempel satu sama lain dalam
                                        jarak tertentu sehingga hidrogen klorida berada dalam wujud gas kabut berwarna
                                        putih ketika berada pada suhu kamar.</p>
                                    <p><strong>Ikatan hidrogen</strong> adalah gaya antarmolekul yang membentuk jenis
                                        tarik-menarik dipol-dipol khusus ketika atom hidrogen yang terikat pada atom
                                        yang sangat elektronegatif. Ikatan hidrogen terjadi antara atom hidrogen dengan
                                        atom lain yang memiliki keelektronegatifan tinggi (seperti F, O, dan N).</p>
                                    <p>Elektronegativitas adalah sebuah sifat kimia yang menjelaskan kemampuan sebuah
                                        atom untuk menarik elektron (atau rapatan elektron) menuju dirinya sendiri pada
                                        ikatan kovalen. Nilai elektronegativitas suatu atom dipengaruhi jari-jari atom
                                        dan jumlah elektron yang tidak berpasangan. Semakin kecil jari-jari atom maka
                                        akan semakin besar elektronegativitas. Dalam tabel periodik, 3 atom yang
                                        memiliki elektronegativitas terbesar berturut turut adalah F (3.98), O (3.44)
                                        dan N (3.04).</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.12.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.12</span>
                                        Ilustrasi
                                        gaya ikatan hidrogen pada molekul HF</p>
                                    <p>Atom F memiliki radius 135 pm dan 1 buah elektron bebas yang tidak berpasangan
                                        sehingga membentuk ikatan hidrogen pada molekul HF</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.13.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.13</span>
                                        Ilustrasi
                                        gaya ikatan hidrogen pada molekul H2O</p>
                                    <p>Atom O memiliki radius 152 pm dan 2 buah elektron bebas yang tidak berpasangan
                                        sehingga membentuk ikatan hidrogen pada molekul H2O</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.13.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.14</span>
                                        Ilustrasi
                                        gaya ikatan hidrogen pada molekul NH3</p>
                                    <p>Atom N memiliki radius 135 pm dan 3 buah elektron bebas yang tidak berpasangan
                                        sehingga membentuk ikatan hidrogen pada molekul NH<sub>3</sub></p>
                                </div>
                                <p id="daftar-1-9" class="fw-bold"><span class="text-primary">Combine Knowledge</span> : Bagaimana
                                    Ikatan
                                    Hidrogen Antarmolekul air?</p>
                                <p>Sebagaimana telah dijelaskan sebelumnya bahwa Ikatan hidrogen terbentuk ketika
                                    atom hidrogen berikatan kovalen dengan nitrogen (N), oksigen (O), atau fluor (F)
                                    dalam bentuk senyawa kovalen seperti amonia (NH3 ), air (H2O) dan gas hidrogen
                                    fluorida (HF). Dalam molekul-molekul ini, atom hidrogen tidak menarik elektron
                                    bersama sekuat atom N, O, atau F. Oleh karena itu, molekulnya bersifat polar;
                                    atom hidrogen menjadi bermuatan positif dan mampu membentuk ikatan hidrogen
                                    dengan ion negatif atau bagian molekul lain yang bermuatan negatif (seperti atom
                                    N, O, dan F yang menjadi bermuatan negatif dalam senyawa tersebut).</p>
                                <p>Ikatan hidrogen merupakan ikatan antar molekul sehingga bukanlah ikatan sejati
                                    seperti ikatan kovalen atau ikatan ionik (yang notabene merupakan ikatan atom).
                                    Ikatan hidrogen adalah gaya tarik-menarik gaya elektrostatis yang disebabkan
                                    oleh perbedaan muatan antara ion hidrogen yang sedikit positif dan ion lain yang
                                    sedikit negatif. Daya tarik ini jauh lebih lemah dibandingkan ikatan ionik atau
                                    kovalen, namun cukup kuat untuk menghasilkan beberapa sifat yang menarik
                                    diantaranya titik didih air.</p>
                                <p>Banyak unsur yang dapat membentuk senyawa dengan hidrogen. Jika kita memplot
                                    titik didih senyawa hidrogen dengan unsur golongan 14 (c, Si, Ge, Sn) , golongan
                                    15 (N, P, Br, I) , golongan 17 (O, S, Se, Te) dan golongan 18 (F, Cr, Bl, I).
                                    Terlihat bahwa titik didih pada tiap golongan meningkat seiring dengan kenaikan
                                    periode. Kenaikan titik didih ini terjadi karena massa molekul relatif (Mr)
                                    semakin besar dengan semakin banyak elektron, sehingga gaya dispersi van der
                                    Waals semakin besar.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.15.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.15</span> Titik didih
                                    unsur halida golongan 14, 15, 16 dan 17.</p>
                                <p>Namun jika kita perhatikan lebih detail kita melihat bahwa sesuatu yang aneh akan
                                    terjadi. Meskipun alasan yang sama berlaku untuk golongan 4 tabel periodik,
                                    titik didih senyawa hidrogen dengan unsur pertama dalam setiap golongan
                                    sangatlah tinggi yakni pada senyawa NH3, HF dan H2O. Berdasarkan tabel periodik
                                    ketiga senyawa tersebut memiliki ukuran molekul yang lebih kecil pada tiap
                                    golongan masing-masing sehingga seharusnya memiliki titik didih yang rendah pada
                                    masing-masing golongan. Namun, fakta menunjukan bahwa ketiga senyawa tersebut
                                    memiliki titik didih yang tinggi. Hal ini menunjukan bahwa mesti ada gaya tarik
                                    menarik antarmolekul tambahan, yang memerlukan lebih banyak energi panas untuk
                                    mematahkan ikatan antar molekul. Gaya antarmolekul yang relatif kuat inilah yang
                                    kemudian digambarkan sebagai ikatan hidrogen yang hanya terjadi pada ikatan
                                    hidrogen dengan atom N, O dan F.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.16.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.16</span> Ikatan
                                    hidrogen
                                    pada air ditunjukkan sebagai garis putus-putus</p>
                                <p>Khusus untuk ikatan hidrogen pada air (H2O), ikatan hidrogen terbentuk antara
                                    atom hidrogen dan oksigen yang berdekatan dari molekul air yang berdekatan. Gaya
                                    tarik-menarik antar molekul air menciptakan ikatan yang disebut ikatan hidrogen.
                                    Lihat Gambar 1.4. Sebuah molekul air memiliki dua atom hidrogen. Kedua atom ini
                                    dapat membentuk ikatan hidrogen dengan atom oksigen dari molekul air yang
                                    berbeda. Setiap molekul air maksimal dapat berikatan hidrogen dengan tiga
                                    molekul air lainnya (Lihat Gambar 3-7). Namun, karena ikatan hidrogen lebih
                                    lemah dibandingkan ikatan kovalen, maka dalam air cair ikatan tersebut mudah
                                    terbentuk, putus, dan terbentuk kembali. Jadi, jumlah pasti ikatan hidrogen yang
                                    terbentuk per molekul bervariasi.</p>
                                <div class=bg-primary>
                                    <div class="card-header border-0" id="headingEmpat">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseEmpat"
                                                aria-expanded="true" onclick="buka_soal(4)">
                                                <i id="daftar-1-4" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEmpat" class="collapse" aria-labelledby="headingEmpat"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="fw-bold text-primary">Check Your Answer</p>
                                    <p>Jika kita lihat pada tabel periodik, diantara ketiga senyawa tersebut (NH3, H2O
                                        dan HF), maka kita ketahui bahwa senyawa HF yang memiliki Mr yang lebih besar
                                        dibanding dua senyawa lainnya, ini menunjukan bahwa titik didih H2O yang lebih
                                        besar dibandingkan dengan dua senyawa lainnya tidak ditentukan oleh nilai Mr
                                        nya.</p>
                                    <p>Faktor yang menyebabkan H2O memiliki titik didih yang lebih besar dibandingkan
                                        dengan dua senyawa lainnya adalah jumlah ikatan hidrogen yang terjadi pada
                                        masing-masing senyawa. Dengan formasi polaritas molekulnya H2O akan memiliki
                                        maksimal 4 ikatan hidrogen pada tiap molekulnya (molekul H2O memiliki dua dipol
                                        negatif pada atom oksigen dan dua dipol positif pada atom Hidrogen). </p>
                                    <p>Molekul NH3 hanya memiliki 1 ikatan hidrogen saja dikarenakan meskipun terdapat 3
                                        dipol Positif pada atom Hidrogen namun hanya terdapat 1 dipol negatif pada atom
                                        N. Sehingga meskipun molekul NH3 memiliki potensi untuk dapat memiliki 4 ikatan
                                        hidrogen namun dikarenakan tidak cukup dipol negatif yang dimiliki untuk dapat
                                        membentuk ikatan hidrogen dengan dipol positif, akhirnya setiap molekul NH3
                                        hanya memiliki 1 ikatan hidrogen saja.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.17.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.17</span> Satu
                                        molekul NH3 hanya dapat membentuk satu ikatan hidrogen</p>
                                    <p>Sama halnya dengan molekul NH3, molekul HF juga hanya memiliki 1 ikatan
                                        hidrogen,. Hal tersebut dikarenakan meskipun atom F memiliki 3 pasangan elektron
                                        bebas yang membentuk tiga dipol negatif, namun hanya tersedia satu dipol positif
                                        saja pada tiap molekul HF. Sehingga tidak semua pasangan elektron bebas dapat
                                        memiliki pasangan dipol positif karena terbatasnya ketersediaan atom H.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.18.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.18</span> Satu
                                        molekul HF hanya dapat membentuk satu ikatan hidrogen</p>
                                    <p>Adapun dikarenakan jumlah pasangan elektron bebas pada atom F lebih banyak dari
                                        atom
                                        N maka HF memiliki keelektronegatifan lebih besar dibandingkan dengan
                                        NH<sub>3</sub>
                                        sehingga meskipun sama-sama memiliki satu ikatan hidrogen namun ikatan hidrogen
                                        pada
                                        HF lebih kuat dibandingkan dengan ikatan hidrogen pada NH<sub>3</sub> yang pada
                                        akhirnya menyebabkan titik didih HF lebih besar dari titik didih NH<sub>3</sub>
                                    </p>
                                </div>
                                <p id="daftar-1-11" class="fw-bold"><span class="text-primary">Awe Experience</span><span>: Tahukah anda
                                        apa
                                        manfaat sifat polar yang terbentuk pada ikatan air?</span></p>
                                <p>Ikatan yang terjadi antara dua atom hidrogen dan satu atom oksigen menjadi satu
                                    molekul
                                    air disebut ikatan kovalen. Yaitu ikatan antar atom yang terjadi karena setiap atom
                                    menyumbangkan elektron yang dimiliki untuk saling berpasangan dan digunakan bersama
                                    membentuk satu ikatan. Namun, karena oksigen memiliki kelebihan pasangan elektron,
                                    maka
                                    elektron yang tidak membentuk ikatan tersebut dikatakan sebagai “pasangan elektron
                                    bebas“. Adanya elektron bebas yang bersifat sangat negatif menjauhkan kedudukannya
                                    dari
                                    dua atom hidrogen sehingga ikatan H2O membengkok sebesar 104.5 derajat. Sedangkan
                                    keadaan alamiah atom oksigen yang bersifat negatif dan atom hidrogen yang bersifat
                                    positif menimbulkan pengkutuban atau perbedaan muatan. Kedua keadaan itulah yang
                                    menjadikan molekul air bersifat polar, artinya molekul air memiliki perbedaan muatan
                                    yakni negatif pada sisi pasangan elektron bebas dan positif pada sisi atom hidrogen.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.19.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.19</span><span
                                        class="fw-bold"> Perbandingan jarak ikatan hidrogen dan ikatan kovalen pada
                                        molekul
                                        air</span></p>
                                <p>Selain itu, sifat polar dari air menyebabkan terbentuk ikatan yang dikenal dengan
                                    ikatan
                                    hidrogen antar molekul air. Ikatan hidrogen terjadi antara atom O dari molekul air
                                    yang
                                    bermuatan agak negatif dengan atom H dari air yang bermuatan agak positif. Ikatan
                                    ini
                                    memiliki jarak lebih kurang 1,77 angstrom atau 0.177 nano meter (nm), hampir dua
                                    kali
                                    lebih panjang daripada ikatan kovalen yang memiliki jarak hanya 0,0965 nm. Walaupun
                                    ikatan hidrogen ini tidak sekuat ikatan kovalen atau ikatan ion, tetapi cukup
                                    menjadikan
                                    molekul air memiliki kekuatan untuk saling berikatan antar sesamanya atau yang
                                    dikenal
                                    dengan istilah kohesi. Selain sifat kohesi, air juga memiliki sifat adhesi, yaitu
                                    kemampuan berikatan dengan molekul lain yang bukan sejenis. </p>
                                <p>Kohesi memungkinkan terjadinya tegangan permukaan, yaitu kemampuan suatu zat untuk
                                    menahan pecahnya ketika ditempatkan di bawah tekanan atau tekanan. Ketika secarik
                                    kertas
                                    kecil diletakkan di atas tetesan air, kertas tersebut mengapung di atas tetesan air
                                    meskipun kertas lebih padat (massa per satuan volume) daripada air. Kohesi dan
                                    tegangan
                                    permukaan menjaga ikatan hidrogen molekul air tetap utuh dan mendukung benda yang
                                    mengapung di atas. Bahkan jarum dapat “mengapung” di atas segelas air jika
                                    ditempatkan
                                    secara hati-hati tanpa merusak tegangan permukaan.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.20.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.20</span> Akibat
                                    adanya
                                    tegangan permukaan sebuah jarum dapat melayanag di atas permukaan air jika diletakan
                                    dengan perlahan dan hati-hati</p>
                                <p>Selain dapat menghasilkan tegangan permukaan, sifat kohesi menyebabkan air juga
                                    memiliki
                                    kemampuan melawan regangan apabila ditempatkan dalam ruangan yang meregangkannya.
                                    Sebagai contoh ketika air ditempatkan dalam tabung jarum suntik dalam keadaan
                                    tertutup
                                    rapat, maka sulit bagi kita untuk dapat memampatkan air maupun untuk meregangkan
                                    air.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.21.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.21</span> Ketika air
                                    ditempatkan pada jarum suntik tertutup, sulit untuk memampatkan ataupun meregangkan
                                    air
                                </p>
                                <p>Adapun sifat adhesi air merupakan kemampuan molekul air untuk dapat berikatan dengan
                                    molekul lain yang bukan sejenis. Meskipun air memiliki kecenderungan untuk berikatan
                                    dengan sesama molekul air (kohesi), namun dalam keadaan tertentu, sebenarnya ia juga
                                    lebih suka menempel pada molekul jenis lain, terutama dengan molekul lain yang
                                    bermuatan
                                    positif atau negatif. Karena sifat adhesi yang dimiliki air, maka dimanapun air
                                    ditempatkan akan dapat membuat benda yang bersentuhan dengannya menjadi ‘basah
                                    karena
                                    ada sebagian molekul air yang ikut menempel pada permukaan benda.</p>
                                <p>Gaya kohesi dan adhesi saling berkaitan, ketika gaya kohesi lebih besar dari gaya
                                    adhesi
                                    maka air memiliki kecenderungan untuk tetap berikatan dengan molekul sejenisnya.
                                    Sebaliknya ketika gaya adhesi lebih besar dari gaya kohesi maka air akan memiliki
                                    kecenderungan berikatan dengan molekul yang tidak sejenis. </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.22.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.22</span> bentuk
                                    tetes
                                    air jika ditempatkan di atas permukaan datar</p>
                                <p>Sifat kohesi dan adhesi dari air menyebabkan air cenderung membentuk formasi membulat
                                    (bukan menyebar) apabila ditempatkan di atas permukaan yang datar. Hal ini karena
                                    molekul air cenderung tertarik dengan sesamanya di bagian dalam massa air. Sedangkan
                                    pada bagian bawah molekul air cenderung tertarik pada molekul lain pada lantai.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.23.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.23 </span> gaya
                                    kohesi
                                    dan adhesi memunculkan sifat kapilaritas</p>
                                <p>Contoh lain dari peristiwa kohesi dan adhesi adalah pada peristiwa dimasukkannya
                                    sedotan
                                    kecil pada air. Gambar diatas menunjukan sebuah sedotan kaca kecil ketika dimasukan
                                    kedalam air dan raksa. Pada gelas berisi air, tampak bahwa air akan naik keatas
                                    sedotan,
                                    hal ini dikarenakan pada peristiwa tersebut gaya adhesi lebih besar dari gaya kohesi
                                    sehingga alih-alih air pada permukaan saling menempel dengan sesama molekulnya air
                                    lebih
                                    tertarik pada molekul kaca. Sebaliknya pada raksa, gaya kohesi lebih besar dari gaya
                                    adhesi sehingga pada saat pipa kaca dimasukkan, raksa memiliki kecenderungan lebih
                                    rendah permukaannya ketika didalam pipa kaca, hal ini dikarenakan setiap molekul
                                    raksa
                                    lebih terikat pada molekul sejenisnya dibanding pada molekul kaca. Semakin kecil
                                    diameter pipa maka akan semakin tinggi air naik.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.24.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.24 </span> Sifat
                                    kapilaritas air menyebabkan air dapat meresap pada pori pori tisu</p>
                                <p>Kondisi dimana gaya adhesi air lebih besar dari gaya kohesi akan menimbulkan sifat
                                    kapilaritas air dimana air akan meresap dan bergerak menjalar pada benda benda yang
                                    memiliki pori-pori. Bahkan ketika benda ditempatkan secara vertikal, gaya
                                    kapilaritas
                                    air dapat melawan gaya gravitasi.</p>
                                <p id="daftar-1-12" class="fw-bold"><span class="text-primary">Spiritual Kognition</span><span
                                        class="fw-bold"> : Bagaimana air tanah dapat mengalir pada tumbuhan bahkan
                                        hingga
                                        sampai pada ujung daun tinggi sekalipun?</span></p>
                                <p>Pada awalnya, ahli fisiologi tumbuhan mengusulkan bahwa air ditarik ke atas tumbuhan
                                    melalui tegangan (tekanan negatif) dari atas. Ketika air terus menerus hilang dari
                                    daun
                                    melalui transpirasi, maka akan tercipta kevakuman yang menyebabkan tarikan air di
                                    saluran xilem dan menarik lebih banyak air ke dalam daun. Namun teori ini memiliki
                                    kelemahan, karena bahkan pompa vakum terbaik pun hanya dapat menarik air hingga
                                    ketinggian sekitar 10,4 m saja. Hal ini dikarenakan kolom air yang tinggi memberikan
                                    tekanan sebesar 1,03 MPa hanya diimbangi oleh tekanan atmosfer. Sedangkan banyak
                                    tumbuhan yang memiliki tinggi jauh diatas 10 m, dan bahkan pohon redwood (Sequoia
                                    sempervirens), yang merupakan pohon tertinggi dapat mencapai 116 m yang mungkin
                                    diperlukan tarikan setidaknya ~1,9 Mpa agar air sampai diujung daun.</p>
                                <p>Mengalirnya air dari tanah menuju akar, batang dan daun pada tumbuhan melibatkan
                                    proses
                                    kohesi dan adhesi air. Adhesi dan kohesi memungkinkan molekul air berpindah dari
                                    akar ke
                                    daun melalui transpirasi. Tumbuhan mengandung pembuluh xilem yang terdiri dari
                                    sel-sel
                                    panjang dan sempit yang disebut elemen trakea, yang mengangkut air. Ketika molekul
                                    air
                                    menunjukkan daya tarik terhadap selulosa, mereka menempel pada dinding sel xilem dan
                                    menahan tarikan gravitasi ke bawah. Gaya kohesif antar molekul air memungkinkan
                                    terjadinya tarik menarik antar molekul air di dalam sel trakea. Bersama-sama,
                                    kekuatan
                                    adhesi dan kohesi dinamis ini menciptakan kolom molekul air. Daya rekat air pada
                                    selulosa lebih besar dibandingkan gaya kohesifnya, sehingga memungkinkan air
                                    bergerak ke
                                    atas dari akar hingga ke daun.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.25.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.25 </span>
                                    Pendistribusian air dari akar menuju ujung daun tertinggi pada tanaman menggunakan
                                    mekanisme gaya adhesi dan kohesi pada air.</p>
                                <p>Melalui penjelasan ini terlihat bahwa ada satu koherensi yang kuat antara sifat
                                    kohesi
                                    dan adhesi yang dimiliki air dan struktur tumbuhan yang memiliki pipa-pipa kecil
                                    baik
                                    pada akar batang dan daun. Koherensi ini jelas menunjukan suatu desain dan
                                    perencanaan
                                    yang luar biasa dari Allah Tuhan yang menciptakan alam semesta. Ketika tumbuhan
                                    ditakdirkan tidak mampu mencari makanan dan minumannya sendiri (tidak dapat
                                    bergerak)
                                    maka Allah mendesain tumbuhan dengan akar yang mampu menyerap unsur-unsur penting
                                    dalam
                                    tanah yang terlarut dalam air yang, ditambah lagi dengan desain batang tumbuhan yang
                                    memiliki jaringan xilem yang terdiri dari sel panjang dan sempit yang memungkinkan
                                    air
                                    dapat naik hingga ujung tertinggi sekalipun dengan memanfaatkan gaya kohesi dan
                                    adhesi.
                                </p>
                                <p>Allah SWT berfirman dalam surat Al-An’am ayat 99.</p>
                                <p class="text-end">وَهُوَ ٱلَّذِىٓ أَنزَلَ مِنَ ٱلسَّمَآءِ مَآءً فَأَخْرَجْنَا بِهِۦ
                                    نَبَاتَ كُلِّ شَىْءٍ فَأَخْرَجْنَا مِنْهُ خَضِرًا نُّخْرِجُ مِنْهُ حَبًّا
                                    مُّتَرَاكِبًا
                                    وَمِنَ ٱلنَّخْلِ مِن طَلْعِهَا قِنْوَانٌ دَانِيَةٌ وَجَنَّٰتٍ مِّنْ أَعْنَابٍ
                                    وَٱلزَّيْتُونَ وَٱلرُّمَّانَ مُشْتَبِهًا وَغَيْرَ مُتَشَٰبِهٍ ۗ ٱنظُرُوٓا۟ إِلَىٰ
                                    ثَمَرِهِۦٓ إِذَآ أَثْمَرَ وَيَنْعِهِۦٓ ۚ إِنَّ فِى ذَٰلِكُمْ لَءَايَٰتٍ لِّقَوْمٍ
                                    يُؤْمِنُونَ</p>
                                <p class="fst-italic"><span class="fw-bold">Artinya:</span> Dan Dialah yang menurunkan
                                    air
                                    hujan dari langit, lalu Kami tumbuhkan dengan air itu segala macam tumbuh-tumbuhan
                                    maka
                                    Kami keluarkan dari tumbuh-tumbuhan itu tanaman yang menghijau. Kami keluarkan dari
                                    tanaman yang menghijau itu butir yang banyak; dan dari mayang korma mengurai
                                    tangkai-tangkai yang menjulai, dan kebun-kebun anggur, dan (Kami keluarkan pula)
                                    zaitun
                                    dan delima yang serupa dan yang tidak serupa. Perhatikanlah buahnya di waktu
                                    pohonnya
                                    berbuah dan (perhatikan pulalah) kematangannya. Sesungguhnya pada yang demikian itu
                                    ada
                                    tanda-tanda (kekuasaan Allah) bagi orang-orang yang beriman. <span
                                        class="fw-bold">(QS.
                                        al-an'am : 99)</span></p>
                                <p>Di dalam ayat ini Allah nyatakan, bahwa tumbuhan itu memerlukan sesuatu utk dapat
                                    hidup
                                    dengan baik, iaitu air, tanpa air tumbuhan manapun tidak boleh hidup. Dalam tafsir
                                    Al-Azhar, Buya Hamka menerangkan bahwa, “air memegang peranan penting menumbuhkan
                                    berbagai tumbuh-tumbuhan, mulai dari rumput hingga beringin. Tanaman yang menghijau,
                                    adalah pohon-pohon yang banyak menghasilkan buah dan biji-bijian. Selain itu,
                                    kehijauan
                                    adalah Simbol kesuburan. Di antara buah dan biji-bijian itu, Allah SWT menyuruh
                                    memperhatikan kurma yang merupakan makanan penting bagi orang arab. Kemudian
                                    terdapat
                                    pula kebun-kebun, yang di dalamnya melimpah akan anggur, zaitun dan delima.”</p>
                                <p>Disebutkannya empat jenis tumbuhan meliputi kurma, anggur, zaitun dan delima
                                    merupakan
                                    representasi dari berbagai tumbuhan di bumi yang beraneka ragam dan berbeda
                                    karakteristik satu sama lain, namun semuanya memiliki kesamaan bahwa tidak akan
                                    dapat
                                    tumbuh dengan air. Setidaknya terdapat 2 sinyal yang terdapat pada ayat diatas yang
                                    terkait dengan fungsi air bagi tumbuhan</p>
                                <ul>
                                    <li>1. Air berfungsi sebagai media pengangkut yang akan memindahkan hasil proses
                                        fotosintesis yang ditunjukan dengan kalimat “ Kami keluarkan dari tanaman itu
                                        tanaman yang menghijau (zat hijau daun terkait dengan proses fotosintesis).</li>
                                    <li>2. Air digunakan sebagai media dalam proses berlangsungnya biokimia yang
                                        berfungsi
                                        untuk proses pertumbuhan <span class="fst-italic">(“… mengurai tangkai-tangkai
                                            yang
                                            menjulai ...”)</span> dan proses perkembangbiakan <span
                                            class="fst-italic">(“…
                                            kami keluarkan dari tanaman yang menghijau itu butir yang banyak..”)</span>.
                                        semua proses ini dapat berlangsung karena air juga merupakan zat pelarut yang
                                        sangat
                                        baik sehingga dapat melarutkan berbagai zat yang dibutuhkan tumbuhan di dalam
                                        tanah.
                                    </li>
                                    <li>3. Air berfungsi dalam mengatur suhu pada tumbuhan agar tetap stabil, karena
                                        memiliki panas yang tinggi dan dapat mengatur panas pada tumbuhan.</li>
                                </ul>
                                <p>Pada ayat ini juga Allah SWT menggunakan kata “Unzur” yang dapat diartikan secara
                                    sempit
                                    agar kita “memperhatikan” setiap proses yang terjadi dalam perkembangan tumbuhan,
                                    namun
                                    dalam arti yang lebih luas ayat ini juga dapat dimaknai sebagai perintah untuk
                                    melakukan
                                    riset bagaimana peran air dalam proses perkembangan tumbuhan mulai dari awal
                                    pertumbuhan
                                    batang daun hingga proses berbuah.</p>
                                <p>Dapat terangkutnya zat-zat yang berguna bagi tumbuhan melalui air hujan yang meresap
                                    kedalam tanah merupakan hal yang mustahil terjadi manakala air tidak memiliki sifat
                                    polaritas, dapat melarutkan zat lain, hingga sifat adhesi dan kohesi yang berperan
                                    dalam
                                    proses naiknya air dari dalam tanah hingga cabang dain tertinggi dari tumbuhan. Pada
                                    ujung ayat, menekankan bahwa segala hal yang telah Allah tetapkan tersebut merupakan
                                    tanda-tanda kekuasaan Allah SWT yang akan mendorong siapapun yang menelaahnya dengan
                                    detail memiliki keimanan yang kuat di dalam hati.</p>
                            </div>
                            <!-- End Ikatan Antar Molekul Penyusun Air -->
                            <!-- Air Sebagai Pelarut Universal -->
                            <div id="bagian-1-3">
                                <h3 id="daftar-1-13" class="fw-bold text-primary">Air Sebagai Pelarut Universal</h3>
                                <p>Pada pembahasan sebelumnya telah dijelaskan bahwa air memiliki molekul yang bersifat
                                    polar. Molekul polar merupakan molekul yang memiliki dipol bersih sebagai akibat
                                    dari
                                    muatan yang berlawanan (yaitu memiliki muatan positif parsial dan parsial negatif)
                                    dari
                                    ikatan polar yang disusun secara asimetris. Molekul polar harus mengandung ikatan
                                    kimia
                                    polar karena perbedaan elektronegativitas antara atom yang berikatan. Molekul polar
                                    dengan dua atau lebih ikatan kutub harus memiliki geometri asimetris sehingga momen
                                    ikatan tidak saling meniadakan.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.26.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.26</span> Ilustrasi
                                    Polarisasi molekul air.</p>
                                <p>Air (H2O) adalah contoh molekul polar karena memiliki muatan positif sedikit di satu
                                    sisi
                                    dan sedikit muatan negatif di sisi lain. Molekul air terdiri dari oksigen dan
                                    hidrogen,
                                    dengan elektronegativitas masing-masing 3.44 dan 2.20. Dipol masing-masing ikatan
                                    (panah
                                    merah) ditambahkan bersama untuk membuat keseluruhan molekul polar. Dipol tersebut
                                    tidak
                                    saling meniadakan karena membentuk sudut 104.5 sehingga menghasilkan dipol bersih.
                                </p>
                                <p>Kebalikan dari senyawa polar adalah senyawa non polar. Senyawa non polar merupakan
                                    senyawa kimia yang memiliki ikatan kovalen antara atom-atom yang memiliki perbedaan
                                    keelektronegatifan yang kecil atau sama sehingga elektron-elektron dalam ikatan
                                    tersebut
                                    terdistribusi secara merata dan tidak terpolarisasi. Hal ini menyebabkan senyawa
                                    jenis
                                    non polar tidak memiliki momen dipol dan bersifat tidak larut dalam pelarut polar
                                    seperti air.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.27.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.27</span> Ilustrasi
                                    Polarisasi molekul CO<sub>2</sub>.</p>
                                <p>Contoh senyawa kovalen non-polar adalah karbon dioksida (CO2). Molekul karbon
                                    dioksida
                                    terdiri dari karbon dan oksigen, dengan elektronegativitas masing-masing 2.5 dan
                                    3.5.
                                    Secara ikatan molekul, karbon dioksida dan air sebenarnya sama-sama mempunyai ikatan
                                    polar, tetapi hanya air yang merupakan molekul polar. Hal ini disebabkan karena dua
                                    atom
                                    Oksigen dan Karbon dioksida bersifat simetris sehingga tarikan dua oksigen pada
                                    elektron
                                    karbon saling menghilangkan, sehingga merupakan molekul nonpolar dengan ikatan
                                    polar.
                                    Sedangkan pada molekul air dua atom Hidrogen dan atom oksigen tidak simetris
                                    sehingga
                                    dihasilkan neto dipol.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.28.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.28</span> Ilustrasi
                                    Polarisasi molekul garam (kiri) dan gula (kanan)<sub>2</sub>.</p>
                                <p>Karena sifat polaritas molekul air, molekul polar lainnya yang dimasukan ke dalam air
                                    pada umumnya dapat larut dalam air. Contoh molekul yang termasuk kedalam molekul
                                    polar
                                    yang dapat larut dengan mudah pada air adalah gula (seperti sukrosa), yang memiliki
                                    banyak gugus oksigen-hidrogen (−OH) polar dan garam (HCl) yang terdiri dari H yang
                                    menjadi kutub positif dan Cl yang merupakan kutub negatif. Ketika molekul garam atau
                                    gula yang merupakan molekul polar tersebut dimasukan kedalam air yang juga merupakan
                                    molekul polar, maka akan terbentuk larutan garam atau larutan gula yang merupakan
                                    hasil
                                    interaksi dari sesama molekul polar.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDualima">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDualima"
                                                aria-expanded="true" onclick="buka_soal(25)">
                                                <i id="daftar-1-25" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Check Your Prior Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDualima" class="collapse" aria-labelledby="headingDualima"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-25"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="fw-bold text-primary">Check Your Answer</p>
                                    <p>Didalam kimi terdapat 3 istilah yang merujuk pada percampuran antara dua zat atau
                                        lebih yaitu : laurtan, suspensi dan koloid. Larutan, koloid dan suspensi
                                        merupakan
                                        sistem kimia yang terdiri dari gas atau zat cair sebagai medium dan
                                        partikel-partikel yang terdispersi di dalam sistem yang disebut dispersi.</p>
                                </div>
                                <p><span class="fw-bold">Larutan</span> adalah sistem dispersi yang partikel-partikel
                                    zat
                                    terdispersi dan partikel medium pendispersinya tidak dapat dibedakan, bahkan jika
                                    menggunakan mikroskop ultra. Dalam pengertian lain Larutan adalah campuran homogen
                                    yang
                                    terdiri dari zat pelarut dan zat terlarut dimana hasil campuran akhirnya berada
                                    dalam
                                    fase cair. Contoh larutan garam salah satunya adalah larutan garam yang merupakan
                                    campuran antara air (pendispersi) dan garam (zat terdispersi) yang menghasilkan
                                    campuran
                                    akhir berupa air garam dalam fase cair.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.29.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.29</span> Ketika
                                    garam
                                    dicampurkan denga air maka akan terbentuk larutan air garam</p>
                                <p><span class="fw-bold">Suspensi</span> adalah sistem dispersi yang terdiri dari
                                    partikel-partikel terdispersi yang relatif besar dan tersebar merata di dalam medium
                                    pendispersinya. Suspensi adalah suatu campuran fluida yang mengandung partikel
                                    padat.
                                    Atau dengan kata lain campuran heterogen dari zat cair dan zat padat yang
                                    dilarutkan.
                                    Hasil campuran akhir tidak hanya terdiri dari satu fase saja. Contohnya adalah air
                                    kapur
                                    yang merupakan campuran antara air (pendispersi) dan garam (zat terdispersi) yang
                                    menghasilkan campuran akhir berupa air kapur keruh dengan beberapa endapan kapur
                                    dalam
                                    bentuk padat.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.30.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.30</span> Kapur yang
                                    dicampurkan kedalam air merupakan contoh suspensi (ditandai dengan adanya endapan
                                    padat)
                                </p>
                                <p><span class="fw-bold">Koloid</span> adalah suatu bentuk campuran yang keadaannya akan
                                    terletak di antara larutan serta suspensi (campuran kasar). Koloid adalah campuran
                                    zat
                                    heterogen, antara dua zat atau lebih, dengan partikel-partikel zat yang berukuran
                                    koloid
                                    tersebar merata dalam zat lain. Koloid tampak keruh karena kedua komponennya yang
                                    tidak
                                    saling bercampur sempurna namun tidak menghasilkan endapan. Contoh dari keloid
                                    adalah
                                    lem, kanji dan santan.</p>
                                <p>Untuk membedakan larutan, suspensi dan koloid dapat dilakukan percobaan Efek Tyndall.
                                    Efek Tyndall adalah penghamburan cahaya ketika berkas cahaya melewati koloid .
                                    Partikel-partikel suspensi akan menyebarkan dan memantulkan cahaya sehingga membuat
                                    sinarnya terlihat</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.31.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.31</span> Perbedaan
                                    larutan, suspensi dan koloid ketika disinari cahaya
                                    Secara sederhana perbedaan larutan, suspensi dan koloid dirangkum pada tabel
                                    berikut.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Tabel 1.1.png" class="img-fluid">
                                </div>

                                <p id="daftar-1-15"class="fw-bold"><span class="text-primary">Combine Knowledge:</span> Bagaimana air
                                    dapat
                                    melarutkan zat lain secara homogen?</p>
                                <p>Secara umum, air memiliki sifat yang baik dalam melarutkan ion dan molekul polar,
                                    namun
                                    buruk dalam melarutkan molekul nonpolar. Karena polaritasnya, air dapat membentuk
                                    interaksi elektrostatik (tarikan berbasis muatan) dengan molekul dan ion polar
                                    lainnya.
                                    Molekul dan ion polar berinteraksi dengan ujung air yang sebagian positif dan
                                    sebagian
                                    negatif, dengan muatan positif menarik muatan negatif. Ketika terdapat banyak
                                    molekul
                                    air relatif terhadap molekul zat terlarut, seperti dalam larutan air, interaksi ini
                                    mengarah pada pembentukan bola tiga dimensi molekul air, atau cangkang hidrasi , di
                                    sekitar zat terlarut. Cangkang hidrasi memungkinkan partikel terdispersi (menyebar)
                                    secara merata di dalam air.</p>
                                <p>Sebagai contoh, perhatikan apa yang terjadi pada senyawa ionik, seperti garam (NaCl),
                                    jika ditambahkan ke dalam air. Jika Anda mengaduk garam meja ke dalam air, kisi
                                    kristal
                                    NaCl akan mulai terdisosiasi menjadi Na+ dan Cl- (Disosiasi adalah istilah untuk
                                    proses
                                    di mana suatu senyawa atau molekul terurai membentuk ion.) Molekul air membentuk
                                    cangkang hidrasi di sekeliling ion Na yang bermuatan positif akan dikelilingi oleh
                                    muatan negatif parsial dari ujung oksigen molekul air, sedangkan Cl yang bermuatan
                                    negatif akan dikelilingi oleh muatan positif parsial dari ujung hidrogen. Ketika
                                    proses
                                    berlanjut, semua ion dalam kristal garam dikelilingi oleh cangkang hidrasi dan
                                    terdispersi dalam larutan.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.32.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.32</span> Ilustrasi
                                    struktur molekul larutan air garam</p>
                                <p>Meski air adalah pelarut yang baik, ada suhu tertentu di mana gula dan garam yang
                                    padat
                                    lebih mudah larut yaitu pada suhu yang tinggi. Hal ini dipengaruhi oleh pergerakan
                                    molekul yang ada pada air bersuhu tinggi dan membuat zat padat seperti gula dan
                                    garam
                                    lebih mudah larut. Pada air panas, terdapat lebih banyak molekul yang bergerak
                                    dibandingkan pada air dingin. Akibatnya, akan terjadi lebih banyak tabrakan atau
                                    benturan antara molekul air dan benda padat, dalam hal ini adalah gula dan garam.
                                    Saat
                                    molekul air bergerak dengan lebih cepat, maka ikatan antar molekul lebih mudah
                                    ditarik
                                    dan dipecah.</p>
                                <p>Bertolak belakang dengan NaCl yang dengan mudah mudah dalam terlarut dalam air,
                                    minyak
                                    hampir tidak dapat bercampur dengan air. Minyak adalah senyawa nonpolar, sebab
                                    tersusun
                                    atas rantai hidrokarbon panjang. Sesuai prinsip kelarutan senyawa ini pada saat-saat
                                    tertentu bisa membentuk dipol sesaat sehingga akan terjadi hubungan dipol
                                    sesaat-dipol
                                    terimbas yang menghasilkan kedua senyawa dapat larut.</p>
                                <p>Jadi bisa disimpulkan mengapa air dan  minyak tidak mampu bercampur? Hal ini
                                    disebabkan
                                    oleh sifat molekulnya. Molekul air adalah molekul polar yang berarti salah satu
                                    ujung
                                    molekul memiliki muatan positif dan  ujung lainnya memiliki muatan negatif. Hal ini
                                    memungkinkan molekul air buat berikatan bersama. Minyak memiliki jenis molekul
                                    non-polar. Molekul minyak tidak mempunyai dipol listrik yang dapat digunakan untuk
                                    menarik molekul air, molekul air tetap tertarik satu sama lain lebih kuat
                                    dibandingkan
                                    dengan minyak. Hal ini mencegah keduanya bercampur. Tampaknya molekul air dan minyak
                                    “saling tolak menolak”. Jadi, setetes air akan “menarik dirinya sendiri” menjadi
                                    butiran
                                    di permukaan berminyak.</p>
                                <p>Perilaku bahan polar dan non-polar ini memunculkan istilah “hidrofilik” (suka air)
                                    dan
                                    “hidrofobik” (takut air). Zat hidrofobik, seperti minyak, cenderung non-polar dan
                                    tidak
                                    dapat bercampur dengan baik dengan air. Zat hidrofilik, seperti gula, cenderung
                                    bersifat
                                    polar dan mudah bercampur dengan air.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.33.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.33</span> Ilustrasi
                                    peran
                                    sabun dalam mengikat lemak dan air</p>
                                <p>Untuk dapat mencampurkan minyak dan air diperlukan zat lain yang berperan sebagai
                                    “jembatan”. Salah satu zat yang dapat menjalankan peran tersebut misalnya sabun atau
                                    deterjen. Deterjen/sabun merupakan zat yang juga tersusun atas molekul-molekul
                                    berukuran
                                    agak besar yang berasal dari lemak/petrokimia. Karena lemak bersifat hidrofobik,
                                    maka
                                    untuk membuat sabun atau deterjen, ahli kimia akan mereaksikan lemak dengan zat yang
                                    akan menambahkan ujung yang sangat polar (hidrofilik) pada molekul lemak. Jadi,
                                    molekul
                                    sabun/deterjen memiliki ujung “lemak” hidrofobik yang dapat tertarik pada zat
                                    hidrofobik
                                    lainnya (seperti minyak) dan ujung yang sangat hidrofilik dapat tertarik pada air.
                                </p>
                                <p>Ketika sabun/deterjen ditambahkan pada air dan minyak, ujung hidrofilik molekul
                                    deterjen
                                    tertarik pada molekul air dan akan mampu berada di antara molekul air dan mengganggu
                                    gaya tarik-menarik air ke air. Hal ini mematahkan tegangan permukaan yang kuat yang
                                    membantu air membentuk “manik-manik”. Pada saat yang sama, ujung hidrofobik dari
                                    molekul
                                    detergen memiliki interaksi serupa dengan minyak. Jadi, molekul deterjen bertindak
                                    sebagai jembatan yang membantu menghubungkan molekul air dengan molekul minyak,
                                    memecah
                                    tegangan permukaan air dan memungkinkannya menyebar pada permukaan berminyak.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDuaenam">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuaenam"
                                                aria-expanded="true" onclick="buka_soal(26)">
                                                <i id="daftar-1-26" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuaenam" class="collapse" aria-labelledby="headingDuaenam"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-26"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Pasir adalah batu kecil yang merupakan campuran berbagai unsur-unsur mineral yang
                                        terikat secara kovalen dalam bentuk kisi. Bahan yang terikat secara kovalen
                                        tidak
                                        larut dalam air dengan mudah seperti halnya Benda-benda yang terikat secara
                                        ionik
                                        (Seperti garam).</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.34.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 1.34</span>
                                        Pencampuran
                                        pasir dan air tidak akan menghasilkan larutan</p>
                                    <p>Jika air dan pasir yang sudah dicampurkan diaduk atau dipanaskan. Diantara
                                        sejumlah
                                        ikatan kovalen yang ada dalam pasir, mungkin terdapat diantaranya yang bersifat
                                        polar smsentara sehingga dapat berikatan dengan air, maka kita terkadang kita
                                        dapat
                                        melihat air yang dicampur pasir ketika diaduk menjadi keruh. Namun jika air
                                        bercampur pasir tersebut didiamkan beberapa saat, maka lama kelamaan butiran
                                        pasir
                                        akan terpisah dan mengendap di dasar air dan airnya kembali menjadi jernih. Hal
                                        tersebut menandakan partikel pasir tidak lagi bersifat polar sehingga tidak lagi
                                        berikatan dengan air.</p>
                                </div>
                                <p id="daftar-1-17" class="fw-bold"><span class="text-primary">Awe Experience:</span> Apa manfaat sifat
                                    pelarut universal air untuk kehidupan?</p>
                                <p>Salah satu manfaat sifat Kepolaran air adalah kemampuan air dalam melarutkan berbagai
                                    macam zat lain. Komposisi kimia dan sifat fisik air lah yang menjadikannya pelarut
                                    yang
                                    sangat baik. Molekul air memiliki susunan polar atom oksigen dan hidrogen—satu sisi
                                    (hidrogen) bermuatan listrik positif dan sisi lainnya (oksigen) bermuatan negatif.
                                    Hal
                                    ini memungkinkan molekul air menjadi tertarik pada berbagai jenis molekul lainnya .
                                    Air
                                    dapat menjadi sangat tertarik pada senyawa lain.</p>
                                <p>Air disebut “pelarut universal” karena mampu melarutkan lebih banyak zat dibandingkan
                                    cairan lainnya. Ini penting bagi setiap makhluk hidup di bumi. Artinya, ke mana pun
                                    air
                                    mengalir, baik melalui udara, tanah, atau melalui tubuh kita, ia membawa serta bahan
                                    kimia, mineral, dan nutrisi yang mungkin dapat berharga bagi keberlangsungan makhluk
                                    hidup.</p>
                                <p>Air tanah yang melarutkan berbagai unsur hara (nutrien) sangat dibutuhkan tanaman
                                    dalam
                                    memenuhi keperluan fisiologisnya. Beberapa jenis unsur hara yang mutlak diperlukan
                                    tanaman untuk tumbuh dan berkembang secara optimal antara lain karbon (C), hidrogen
                                    (H),
                                    oksigen (O), nitrogen (N), kalium (K), kalsium (Ca), zat besi (Fe), tembaga (Cu),
                                    dan
                                    boron (B) dapat larut didalam air sehingga memudahkan tumbuhan untuk menyerap
                                    unsur-unsur tersebut melalui akar.</p>
                                <p>Bagi manusia, sifat air yang dapat melarutkan banyak zat sangat bermanfaat dalam
                                    proses
                                    pembersihan seperti mandi, mencuci pakaian, mencuci piring dan membilas berbagai
                                    perkakas rumah tangga lain yang kotor. Dengan sifatnya yang dapat melarutkan zat
                                    lain,
                                    air akan mengikat berbagai kotoran sehingga terlepas dari permukaan benda dan
                                    mengalirkannya menuju pembuangan. Zat yang mudah larut dalam air disebut senyawa
                                    hidrofilik. Mereka terdiri dari ion atau molekul polar yang menggunakan efek muatan
                                    listrik untuk menarik molekul air. Molekul air mengelilingi molekul polar ini dan
                                    membawanya ke dalam larutan, sehingga melarutkannya. Misalnya, zat ionik seperti
                                    natrium
                                    klorida larut dalam air, karena ion natrium positif dan ion klor negatif dari
                                    natrium
                                    klorida tertarik ke molekul air polar.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.35.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.35</span> garam dan
                                    mineral yang tertinggal di kulit saat berkeringat akan mudah dibilas oleh air.</p>
                                <p>Keringat manusia terdiri dari sekitar 99% air, 0,2-0,5% garam, terutama natrium
                                    klorida
                                    dan sedikit urea (0,08%). Selain itu, keringat juga mengandung gula dan garam,
                                    seperti
                                    natrium, klorida, dan kalium. Ini yang membuat kenapa keringat yang tak sengaja
                                    masuk ke
                                    mulut, rasanya asin. Ketika keringat mengering zat-zat garam, urea dan zat lainnya
                                    tetap
                                    tertinggal di kulit menyebabkan kulit kita terasa tidak nyaman setelah berkeringat.
                                    Sebagian besar zat zat tersebut termasuk kedalam zat hidrofilik sehingga
                                    membilaskana
                                    air pada kulit setelah keringat kering akan melarutkan zat zat tersebut dari kulit
                                    dan
                                    membawanya bersama aliran air, sehingga kulit akan terasa segar kembali.</p>
                                <p>Adapun zat yang tidak dapat larut dengan mudah dalam air disebut senyawa hidrofobik.
                                    Hidrokarbon yang mengandung ikatan CH merupakan contoh senyawa hidrofobik. Hal ini
                                    karena intensitas tarikan molekul air terhadap ikatan CH jauh lebih kecil
                                    dibandingkan
                                    intensitas terhadap molekul air lainnya. Oleh karena itu, molekul air tidak membawa
                                    hidrokarbon ini ke dalam larutan. lemak dan minyak terbentuk dari ikatan
                                    karbon-karbon
                                    (CC) atau karbon hidrogen (CH) non polar. Ikatan non polar tersebut memberikan sifat
                                    hidrofobik, sehingga membuat lemak dan minyak tidak dapat larut dalam air juga
                                    pelarut
                                    polar lainnya. Untuk dapat membersihkan benda yang bercampur lemak dan minyak
                                    diperlukan
                                    sabun untuk membantu proses pembilasan air. Molekul sabun mempunyai dua ujung yang
                                    berbeda, yang satu bersifat hidrofobik (anti air) yang berikatan dengan lemak dan
                                    minyak
                                    , sedangkan ujung yang hidrofilik (menarik air) berikatan dengan molekul air,
                                    sehingga
                                    dapat dibilas.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.36.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.36</span> Untuk
                                    membersihkan lemak/minyak pada kulit harus disertai sabun</p>
                                <p>Selain digunakan untuk aktivitas manusia, sifat pelarut air juga banyak bermanfaat di
                                    dalam sistem tubuh manusia. Sifat kelarutan air hampir berperan dalam semua sistem
                                    tubuh
                                    seperti sistem pencernaan, sistem pernapasan, sistem metabolisme, sistem peredaran
                                    darah
                                    dan sistem endokrin. Mineral dan vitamin yang dibutuhkan tubuh akan terlarut dalam
                                    air
                                    yang kemudian akan diedarkan keseluruh tubuh melalui peredaran darah. Sebaliknya
                                    zat-zat
                                    dan kotoran yang tidak dibutuhkan oleh tubuh juga akan dilarutkan oleh air dan akan
                                    dikeluarkan dari tubuh manusia melalui keringat, urine dan keluar dalam bentuk uap
                                    air
                                    pada saat mengeluarkan napas.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.37.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.37</span> Air yang
                                    diminum berperan dalam melarutkan zat-zat penting yang diperlukan tubuh sehingga
                                    dapat
                                    diedarkan ke seluruh organ.</p>
                                <p id="daftar-1-18" class="fw-bold"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
                                    bersuci
                                    dalam beribadah dengan menggunakan air?</p>
                                <p>Selain berperan penting dalam kehidupan, air juga memiliki peran yang sangat penting
                                    dalam spiritual keagamaan. Dalam praktek keagamaan air sering dihubungkan dengan
                                    proses
                                    penyucian diri. Dalam perspektif Islam Air dimanfaatkan untuk thaharah (bersuci)
                                    sebelum
                                    menjalani ibadah kepada Allah SWT. Untuk menghadap Allah, melakukan shalat,
                                    misalnya,
                                    setiap Muslim harus suci, dan di sini air punya peran penting, baik dalam berwudhu
                                    (agar
                                    suci dari hadaṡ kecil) maupun mandi (agar suci dari hadaṡ besar) </p>
                                <p>Allah SWT berfirman dalam surat Al-Anfal ayat 11.</p>
                                <p class="text-end">وَيُنَزِّلُ عَلَيْكُم مِّن السَّمَاء مَاء لِّيُطَهِّرَكُم بِهِ</p>
                                <p class="fst-italic"><span class="fw-bold">Artinya :</span> “ dan Allah menurunkan air
                                    dari
                                    langit agar Allah mensucikan kalian dengan air itu” <span class="fw-bold">(Al-Anfal:
                                        11)</span></p>
                                <p>Suci yaitu bersih dalam arti keagamaan, seperti tidak terkena najis, bebas dari dosa,
                                    atau bebas dari suatu barang dari mutanajis, najis dan hadas. Untuk mensucikan diri
                                    dari
                                    berbagai najis dan hadas diperlukan suatu media untuk dapat membasuhnya, maka Allah
                                    menetapkan air sebagai salah satu media untuk mensucikan diri.</p>
                                <p>Syariat wudhu tercantum dalam surat Al Maidah ayat 6 yang berbunyi,</p>
                                <p class="text-end">يَٰٓأَيُّهَا ٱلَّذِينَ ءَامَنُوٓا۟ إِذَا قُمْتُمْ إِلَى ٱلصَّلَوٰةِ
                                    فَٱغْسِلُوا۟ وُجُوهَكُمْ وَأَيْدِيَكُمْ إِلَى ٱلْمَرَافِقِ وَٱمْسَحُوا۟
                                    بِرُءُوسِكُمْ
                                    وَأَرْجُلَكُمْ إِلَى ٱلْكَعْبَيْنِ ۚ وَإِن كُنتُمْ جُنُبًا فَٱطَّهَّرُوا۟ ۚ </p>
                                <p class="fst-italic"><span class="fw-bold">Artinya:</span> “Hai orang-orang yang
                                    beriman,
                                    apabila kamu hendak mengerjakan shalat, maka basuhlah mukamu dan tanganmu sampai
                                    dengan
                                    siku, dan sapulah kepalamu dan (basuh) kakimu sampai dengan kedua mata kaki, dan
                                    jika
                                    kamu junub maka mandilah,” <span class="fw-bold">(QS. Al-Maidah: 6)</span></p>
                                <p>Allah menciptakan air dengan segala kelebihannya dimana air dapat melarutkan berbagai
                                    zat
                                    termasuk najis dan hadas sehingga dengan membasuhkan air pada anggota tubuh yang
                                    terkena
                                    najis, maka najis tersebut akan terlarut dalam air dan mengalir menuju tempat
                                    pembuangan.</p>
                                <p>Didalam agama Islam sendiri najis dibedakan menjadi 3 jenis, yakni najis ringan,
                                    najis
                                    sedang dan najis berat. Jika najis ringan dan najis sedang cukup disucikan dengan
                                    air
                                    maka khusus untuk najis berat terdapat tata cara sendiri membersihkannya. Salah satu
                                    contoh najis berat didalam Islam adalah air liur anjing. Dalam sebuah hadits,
                                    Rasulullah
                                    shallallahu ‘alaihi wa sallam bersabda.</p>
                                <p class="text-end">إِذَا وَلَغَ الْكَلْبُ فِى الإِنَاءِ فَاغْسِلُوهُ سَبْعَ مَرَّاتٍ
                                    وَعَفِّرُوهُ الثَّامِنَةَ فِى التُّرَابِ</p>
                                <p class="fst-italic"><span class="fw-bold">Artinya :</span>“Jika anjing menjilat
                                    (walagho)
                                    di salah satu bejana kalian, cucilah sebanyak tujuh kali dan gosoklah yang kedelapan
                                    dengan tanah (debu)” <span class="fw-bold">(HR. Muslim no. 280).</span></p>
                                <p>Makna hadits ini menegaskan bahwa jika anjing meminum air dari bejana, ia akan
                                    memasukan
                                    lidahnya ke dalam bejana tempat ia minum, karena demikianlah caranya. Maka, bejana
                                    harus
                                    dibersihkan dengan air sebanyak 7 kali ditambah dengan tanah 1 kali. Perlu diketahui
                                    bahwa air liur anjing dapat menularkan berbagai macam penyakit, diantaranya:
                                    Penyakit
                                    cacing pita, Penyakit Leptospirosis, cacing pita berpori ganda, penyakit cacing
                                    busur,
                                    penyakit larva busur. Kesemuanya ini berasal dari lidah dan mulut anjing karena
                                    kebiasaan mereka menjilati bagian anusnya sehingga sisa-sisa bakteri dari kotorannya
                                    terbawa ke mulut dan lidahnya, jika manusia terkena liurnya dan juga jilatannya maka
                                    kemungkinan besar penularan penyakit lebih potensial.</p>
                                <p>Maka karena bahayanya ini sewaktu anjing menjilat bejana diharuskan membersihkannya
                                    dengan tanah. Dalam sebuah forum tentang kesehatan umum para dokter mengemukakan
                                    rahasia
                                    kenapa harus tanah tidak bahan lainnya, forum tersebut menjelaskan:</p>
                                <ul>
                                    <li>a. Virus anjing itu sangat lembut dan kecil. Semakin kecil mikroba ia akan
                                        semakin
                                        efektif untuk menempel dan melekat pada dinding sebuah wadah. Air liur anjing
                                        yang
                                        mengandung virus berbentuk pita cair. Dan tanah dalam hal ini berperan sebagai
                                        penyerap mikroba berikut virus-virusnya yang menempel dengan lembut pada wabah.
                                    </li>
                                    <li>b. Secara ilmiah tanah mengandung dua materi yang dapat membunuh kuman-kuman.
                                        Menurut para dokter, ilmu kedokteran modern telah menetapkan bahwa tanah
                                        mengandung
                                        dua materi: tetracycline dan tetarolite. Dua unsur ini digunakan untuk
                                        pembasmian
                                        sterilisasi beberapa kuman.</li>
                                    <li>c. Tanah mengandung unsur yang cukup kuat menghilangkan bibit-bibit penyakit dan
                                        kuman-kuman. Hal ini disebabkan jika molekul-molekul yang terkandung di dalam
                                        tanah
                                        menyatu dengan kuman-kuman tersebut sehingga mempermudah dalam proses
                                        sterilisasi
                                        kuman secara keseluruhan.</li>
                                    <li>d. Semakin kecil virus tersebut maka ia akan semakin berbahaya, dan tanah lebih
                                        kuat
                                        dan proses sterilisasi. Karena kekuatan tanah dalam menghentikan reaksi air liur
                                        anjing dan virus-virus yang terkandung di dalamnya lebih besar dibandingkan
                                        dengan
                                        mengguyurkan air atau menggunakan tangan saat membersihkannya.</li>
                                </ul>
                                <p>Tanah berfungsi sebagai jembatan seperti halnya sabun yang digunakan untuk
                                    membersihkan
                                    lemak. Ketika air saja tidak cukup untuk membersihkan suatu benda dari partikel yang
                                    berbahaya, maka diperlukan media lain yang dapat membantu mengikat zat tersebut
                                    sehingga
                                    air dapat membilasnya dengan mudah. Hadits yang menerangkan mengenai ini sudah
                                    disampaikan 1400 tahun yang lalu jauh sebelum ditemukan penelitian-penelitian ilmiah
                                    yang meneliti bahaya air liur anjing dan kandungan yang dimiliki tanah sehingga
                                    dapat
                                    berperan sebagai pengikat zat berbahaya yang terdapat pada liur anjing.</p>
                                <p>Kita dapat membayangkan jika bejana, piring, gelas atau apapun yang dijadikan untuk
                                    menyimpan makanan dan air dijilati anjing dan kemudian dibiarkan begitu saja tanpa
                                    proses pembersihan di atas tentu akan berdampak buruk pada kesehatan mengingat
                                    bakteri
                                    dan kuman yang berkumpul di bejana kemungkinan besar juga akan menempel pada makanan
                                    dan
                                    minuman yang kita konsumsi, sehingga jika ia masuk ke dalam perut tentu amat
                                    beresiko
                                    bagi kesehatan. Maha Suci Allah SWT yang telah memberikan pengajaran yang sempurna
                                    melalui Rasul-Nya mengenai tata cara membersihkan najis air liur anjing yang
                                    berbahaya
                                    bagi kesehatan manusia.</p>
                            </div>
                            <!-- End Air Sebagai Pelarut Universal -->
                            <!-- Refleksi Kognitif -->
                            <div id="bagian-1-4">
                                <div class="bg-light bg-gradient border-top border-bottom border-dark">
                                    <div class="card-header border-0" id="headingDuatujuh">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuatujuh"
                                                aria-expanded="true" onclick="buka_soal(27)">
                                                <i id="daftar-1-27" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Refleksi Kognitif
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuatujuh" class="collapse" aria-labelledby="headingDuatujuh"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-27"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                            <br>
                            <br>
                            <!-- End Refleksi Kognitif -->
                            <!-- Hal 36 b1-8 -->
                            <!-- Refleksi Spiritual -->
                            <div id="bagian-1-5">
                                <div class="bg-light bg-gradient border-top border-bottom border-dark">
                                    <div class="card-header border-0" id="headingDuadelapan">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuadelapan"
                                                aria-expanded="true" onclick="buka_soal(28)">
                                                <i id="daftar-1-28" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Refleksi Spiritual
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuadelapan" class="collapse" aria-labelledby="headingDuadelapan"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-28"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="text-primary fw-bold">LATIHAN SOAL BAB 1</h4>
                            <div>
                                <ul>
                                1. Molekul air (H<sub>2</sub>O) terbentuk dari Hidrogen (H<sub>2</sub>) dan Oksigen (O<sub>2</sub>) yang berikatan dengan ikatan kovalen
                                    <li>a. Jelaskan apa itu ikatan kovalen?</li>
                                    <li>b. Jelaskan bagaimana ikatan kovalen terbentuk pada struktur molekul air?</li>
                                    <li>c. Berikan analisis bagaimana ikatan kovalen polar mempengaruhi sifat fisik air?</li>
                                    <li>d. Refleksikan bagaimana sifat polar molekul air mempengaruhi peran air dalam tubuh manusia?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-1-1" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-1-1">Nilai:</p>
                                        <a onclick="simpan_essay(1,1)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>
                            <br>
                            <div>
                                <ul>
                                2. Karena ikatan molekul air (H<sub>2</sub>O) merupakan ikatan kovalen polar, maka salah satu karakteristik yang dimiliki air adalah kapilaritas
                                    <li>a. Jelaskan apa itu ikatan kovalen polar ?</li>
                                    <li>b. Jelaskan konsep kohesi dan adhesi dalam konteks molekul air.</li>
                                    <li>c. Berikan analisis bagaimana kohesi dan adhesi berperan dalam fenomena kapilaritas ?</li>
                                    <li>d. Refleksikan bagaimana kapilaritas berperan dalam kehidupan tumbuhan ?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-1-2" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-1-2">Nilai:</p>
                                        <a onclick="simpan_essay(1,2)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>
                            <br>
                            <div>
                                <ul>
                                3. Karena ikatan molekul air (H<sub>2</sub>O) merupakan ikatan kovalen polar, maka salah satu karakteristik yang dimiliki air adalah sifat air sebagai pelarut universal
                                    <li>a. Jelaskan apa itu ikatan kovalen polar ?</li>
                                    <li>b. Jelaskan bagaimana ikatan kovalen polar dapat menghasilkan sifat pelarut pada air ?</li>
                                    <li>c. Berikan analisis bagaimana air dapat melarutkan zat hidrofibik dan saling tolak dengan zat hidrofilik ?</li>
                                    <li>d. Refleksikan bagaimana sifat pelarut air berperan dalam kehidupan ?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-1-3" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-1-3">Nilai:</p>
                                        <a onclick="simpan_essay(1,3)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>
                            <br>
                            <div>
                                <ul>
                                4. Air merupakan zat yang tersusun dari molekul air (H2O) yang saling berikatan dengan ikatan hidrogen.
                                    <li>a. Jelaskan apa itu ikatan hidrogen ?</li>
                                    <li>b. Bagaimana ikatan Hidrogen terbentuk antar molekul air ?</li>
                                    <li>c. Berikan analisis bagaimana ikatan hidrogen mempengaruhi sifat termal air ?</li>
                                    <li>d. Refleksikan bagaimana sifat termal air dapat mempengaruhi lingkungan akuatik tempat tinggal organisme ?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-1-4" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-1-4">Nilai:</p>
                                        <a onclick="simpan_essay(1,4)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>

                        </div>
                        <!-- End Refleksi Spiritual -->
                    </div>
                </div>
            </div>

            <!-- BAB 2 -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingFive">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="bagian-2" class="custom-accordion-title text-reset collapsed d-block"
                            data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive" onclick="controller_bab()">
                            Bagian 2 | PERUBAHAN WUJUD AIR <i class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px;">
                            <h5 id="daftar-2" class="fw-bold text-primary">LEARNING OUTCOME</h5>
                            <div class="border-top border-bottom border-dark">
                                <p class="fw-bold text-primary">Conceptual Understanding</p>
                                <ol>
                                    <li>1.1 Memahami perbedaan karakteristik air dalam wujud padat, cair dan gas</li>
                                    <li>1.2 Memahami pengaruh kalor dan tekanan dalam perubahan wujud air</li>
                                    <li>1.3 Memahami perubahan wujud melebur.</li>
                                    <li>1.4 Memahami perubahan wujud membeku.</li>
                                    <li>1.5 Memahami perubahan wujud menguap </li>
                                    <li>1.6 Memahami perubahan wujud mengembun</li>
                                    <li>1.7 Memahami perubahan wujud menyublim </li>
                                    <li>1.8 Memahami perubahan wujud mendeposisi</li>
                                </ol>
                            </div>

                            <p class="fw-bold text-primary">Reflective Thinking Skill</p>
                            <ol>
                                <li>2.1 Mengingat kembali perbedaan zat padat, cair dan gas</li>
                                <li>2.2 Menggunakan pemahaman zat padat, cair dan gas untuk menganalisis karaktersitik
                                    air dalam wujud padat cair dan gas</li>
                                <li>2.3 Menganalisis pemanfaatan karakteristik zat cair dalam sistem hidrolik</li>
                                <li>2.4 Mengingat kembali perilaku atom ketika ditambahkan energi</li>
                                <li>2.5 Menggunakan pemahaman mengenai peran energi terhadap atom untuk menganalisis
                                    pengaruh kalor terhadap perubahan wujud melebur dan membeku</li>
                                <li>2.6 Menggunakan pemahaman mengenai perubahan wujud membeku dan melebur untuk
                                    menjelaskan Sifat anomali air </li>
                                <li>2.7 Menggunakan pemahaman mengenai peran energi terhadap atom untuk menganalisis
                                    pengaruh kalor terhadap perubahan wujud Menguap dan Mengembun </li>
                                <li>2.8 Menggunakan pemahaman mengenai perubahan wujud Menguap dan Mengembun untuk
                                    menjelaskan pengembunan pada dinding botol dingin </li>
                                <li>2.9 Menggunakan pemahaman mengenai peran energi terhadap atom untuk menganalisis
                                    pengaruh kalor terhadap perubahan wujud Menyublim dan Deposisi </li>
                                <li>2.10 Menggunakan pemahaman mengenai perubahan wujud Menguap dan Mengembun untuk
                                    menjelaskan penyubliman pada kapur barus</li>
                            </ol>

                            <div class="border-top border-bottom border-dark">
                                <p class="fw-bold text-primary">Spiritual Attitude</p>
                                <ol>
                                    <li>3.1 Meyakini keberadaan air di bumi dalam 3 wujud merupakan bukti keagungan
                                        Allah SWT sebagai Maha Pencipta yang sempurna</li>
                                    <li>3.2 Meyakini keberadaan air di bumi dalam 3 wujud merupakan bukti keagungan
                                        Allah SWT sebagai Maha menyeimbangkan kadar air tawar di darat dan diudara</li>
                                    <li>3.3 Meyakini sifat anomali air merupakan bukti keagungan Allah SWT sebagai Maha
                                        Pemelihara yang menjaga makhluk_Nya yang berada dalam air saat musim dingin</li>
                                    <li>3.4 Meyakini adanya hujan air, salju dan embun merupakan mekanisme yang telah
                                        Allah SWT tetapkan sehingga dapat dapat dimanfaatkan sebagai media pembersihan
                                        udara dari segala kotoran untuk tetap menjaga makhluk-Nya</li>
                                </ol>
                            </div>
                            <p>Pada bagian sebelumnya telah dijelaskan bahwa molekul air terbentuk dari satu atom
                                oksigen (O2) yang terikat secara kovalen dengan dua atom hidrogen (H2) sehingga sering
                                disebut juga sebagai molekul H<sub>2</sub>O. Antar molekul H<sub>2</sub>O tersebut
                                kemudian saling berikatan dengan gaya ikat hidrogen sehingga dalam suhu kamar kita
                                menemukan air berada dalam wujud cair. Namun, selain berada dalam wujud cair, air
                                dipermukaan bumi juga dapat kita temukan dalam wujud padat (es) dan gas (uap air)
                                meskipun dalam jumlah yang tidak sebanyak air dalam wujud cair. Pada bagian ini kita
                                akan membahas mengenai karakteristik yang dimiliki oleh es dalam wujud padat, cair dan
                                gas serta bagaimana terjadinya proses perubahan wujud dari ketiga fase air tersebut.
                                Pada bagian ini akan dibahas mengenai karakteristik 3 wujud cair dan mekanisme perubahan
                                wujud air. Sebelum memulai belajar anda boleh menonton penjelasan mengenai struktur
                                molekul air pada link video berikut.</p>
                            <div class="container mt-5">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="<?=base_url()?>assets/video/bab 2.mp4">
                                </video>
                            </div>
                            <!-- Wujud Air -->
                            <div id="bagian-2-1">
                                <h3 id="daftar-2-1" class="fw-bold text-primary">Wujud Air</h3>
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
                                    awan.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingLima">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseLima"
                                                aria-expanded="true" onclick="buka_soal(5)">
                                                <i id="daftar-1-5" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Check Previous Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseLima" class="collapse" aria-labelledby="headingLima"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-5"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="fw-bold text-primary">Check Your Answer</p>
                                    <p>Secara umum, wujud materi dibedakan berdasarkan perbedaan kualitatif dalam sifat
                                        massalnya. Padat adalah keadaan di mana materi mempertahankan volume dan bentuk
                                        tetap, cair adalah keadaan di mana materi menyesuaikan diri dengan bentuk
                                        wadahnya
                                        tetapi volumenya hampir tidak dapat berubah, dan gas adalah keadaan di mana
                                        materi
                                        memuai untuk menempati ruang sehingga volume dan bentuknya terus berubah. </p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.1.jpg" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.1</span>
                                        Perbedaan
                                        zat padat, cair dan gas ketika ditempatkan pada ruang tertutup</p>
                                    <p class="fw-bold">Padat</p>
                                    <p>Partikel-partikel benda padat tersusun rapat. Gaya antar molekul cukup kuat
                                        sehingga
                                        setiap molekul tidak dapat bergerak bebas; mereka hanya bisa bergetar.
                                        Akibatnya,
                                        benda padat mempunyai bentuk yang stabil dan pasti serta volume yang tetap.
                                        Benda
                                        padat hanya dapat berubah bentuk karena adanya gaya, seperti ketika dipecah atau
                                        dipotong.</p>
                                    <p class="fw-bold">Cair</p>
                                    <p>Zat cair adalah zat cair yang bentuk wadahnya selalu berubah-ubah, tetapi
                                        volumenya
                                        tetap hampir konstan, tidak bergantung pada tekanan. Volumenya pasti (tidak
                                        berubah)
                                        jika suhu dan tekanannya konstan. Gaya antarmolekul tetap berperan penting,
                                        namun
                                        molekul memiliki cukup energi untuk bergerak, sehingga membuat strukturnya
                                        bergerak.
                                        Artinya suatu zat cair tidak mempunyai bentuk yang tetap, melainkan mengikuti
                                        bentuk
                                        wadahnya.</p>
                                    <div class="container mt-5">
                                        <table class="table table-bordered" style="border:solid 5px;">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Padat</th>
                                                    <th>Cair</th>
                                                    <th>Gas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Gaya antarmolekul yang sangat kuat antar molekul, menyebabkan
                                                        volume
                                                        tertentu pada Padatan.</td>
                                                    <td>Gaya antarmolekul lebih kuat dibandingkan gas, namun lebih lemah
                                                        dibandingkan padatan.</td>
                                                    <td>Gaya antarmolekul praktis tidak ada. Jadi, tidak ada volume yang
                                                        pasti.</td>
                                                </tr>
                                                <tr>
                                                    <td>Benda padat mempunyai bentuk tertentu.</td>
                                                    <td>Zat cair tidak mempunyai bentuk yang pasti.</td>
                                                    <td>Gas tidak memiliki bentuk yang pasti.</td>
                                                </tr>
                                                <tr>
                                                    <td>Ruang antar molekul antara padatan tidak ada.</td>
                                                    <td>Ruang antar molekulnya moderat tetapi ada.</td>
                                                    <td>Ruang antar molekul mengalir bebas dan banyak.</td>
                                                </tr>
                                            </tbody>
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Padat</th>
                                                    <th>Cair</th>
                                                    <th>Gas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Kekuatan tarik-menarik antar molekul sangatlah tinggi.</td>
                                                    <td>Kekuatan tarik-menarik antar molekul cukup moderat.</td>
                                                    <td>Tidak ada gaya tarik menarik antar molekul antar molekul.</td>
                                                </tr>
                                                <tr>
                                                    <td>Mereka tidak dapat dimampatkan.</td>
                                                    <td>Cairan tidak dapat dikompresi.</td>
                                                    <td>Gas dapat dikompresi dengan mudah.</td>
                                                </tr>
                                                <tr>
                                                    <td>Benda padat mempunyai bentuk dan volume yang tetap.</td>
                                                    <td>Zat cair mempunyai volume tertentu.</td>
                                                    <td>Gas tidak mempunyai volume yang pasti.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p id="daftar-2-3" class="fw-bold"><span class="text-primary">Combine Knowledge:</span> Apa saja
                                    perbedaan
                                    karakter air dalam wujud padat cair dan gas?</p>
                                <p>Air, es dan uap air tersusun dari molekul yang sama, yaitu molekul H<sub>2</sub>O,
                                    bedanya adalah pada struktur ikatannya Pada es ikatan ikatan molekul H<sub>2</sub>O
                                    membentuk struktur teratur (kristalin). Pada air cair ikatan ikatan molekul
                                    H<sub>2</sub>O membentuk struktur tidak teratur (amorf) dan pada uap air (gas)
                                    molekul
                                    molekul air tidak saling berikatan.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.2.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.2</span> Perbedaan
                                    struktur molekul air dalam wujud padat, cair dan gas</p>
                                <p><span class="fw-bold">Dalam keadaan padat (es),</span> interaksi antarmolekul
                                    menghasilkan struktur yang sangat teratur namun longgar di mana setiap atom oksigen
                                    dikelilingi oleh empat atom hidrogen; dua dari atom hidrogen ini terikat secara
                                    kovalen
                                    dengan atom oksigen, dan dua lainnya (pada jarak yang lebih jauh) adalah hidrogen
                                    yang
                                    terikat pada pasangan elektron atom oksigen yang tidak digunakan bersama. Struktur
                                    es
                                    yang terbuka ini menyebabkan massa jenisnya lebih kecil daripada massa jenis es
                                    dalam
                                    keadaan cair, yang mana struktur teraturnya terpecah sebagian dan molekul-molekul
                                    air
                                    (rata-rata) saling berdekatan. </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.3.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.3</span> Perbedaan
                                    massa
                                    jenis air dalam wujud padat, cair dan gas</p>
                                <p>Berdasarkan tabel diatas terlihat bahwa massa jenis es sedikit lebih kecil daripada
                                    massa
                                    jenis air, sehingga jika sebuah es dimasukan kedalam air kita akan melihat bahwa
                                    sebagian permukaan es akan mengapung diatas permukaan air dan sebagian lagi
                                    tenggelam di
                                    bawah permukaan air.</p>
                                <p>Pernahkan anda melihat ada es yang terlihat bening namun pada kesempatan lain kita
                                    melihat es tampak sangat buram. Yang membedakan antara es bening dan es buram adalah
                                    pada struktur ikatan molekul yang terbentuk. Es yang bening berarti memiliki
                                    struktur
                                    molekul yang rapi. Sementara itu, es yang tidak bening (biasanya warna putih seperti
                                    retak) itu memiliki struktur molekul yang tidak rapi. Akibatnya, es bening dengan
                                    struktur yang rapi akan menjadikan es tersebut menjadi kristal yang kuat sementara
                                    struktur yang tidak rapi membuat es menjadi rapuh dan mudah dihancurkan.</p>
                                <p>Perbedaan es yang kuat dan yang lemah ialah pada strukturnya. Es yang kuat merupakan
                                    es
                                    dengan struktur heksagonal sempurna. Sementara es yang rapuh biasanya merupakan
                                    struktur
                                    es yang tidak heksagonal sempurna (amorphous). Berikut ini ilustrasinya:</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.4.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.4</span> Struktur
                                    kristal
                                    sempurna(kiri) vs struktur kristal amorphous(kanan)</p>
                                <p>Terbentuknya struktur yang tidak rapi ini disebabkan karena dua hal, pertama ialah
                                    kondisi pendinginan dan yang kedua adalah pengotor di dalam air. Misalkan saja air
                                    masih
                                    baru saja dibekukan, maka biasanya susunan kristalnya masih belum heksagonal
                                    sempurna,
                                    sehingga Anda akan bisa melihat warnanya putih, bukan bening. Sebab lainnya ialah
                                    terdapat banyak kandungan mineral ataupun pengotor pada air, maka es yang terbentuk
                                    akan
                                    rapuh. Sebab adanya mineral menghalangi molekul air untuk membentuk kristal es
                                    heksagonal sempurna.</p>
                                <p><span class="fw-bold">Air dalam keadaan cair</span> memiliki struktur yang sangat
                                    kompleks, yang tidak diragukan lagi melibatkan banyak asosiasi molekul. Ikatan
                                    hidrogen
                                    yang luas di antara molekul-molekul dalam air cair menghasilkan nilai sifat seperti
                                    viskositas, tegangan permukaan, dan titik didih yang jauh lebih besar daripada yang
                                    diharapkan untuk cairan biasa yang mengandung molekul kecil. Misalnya, berdasarkan
                                    ukuran molekulnya, air diharapkan memiliki titik didih yang lebih rendah, namun pada
                                    faktanya air memiliki titik didih yang tinggi (1000C) bahkan jika dibandingkan
                                    dengan
                                    molekul sejenis seperti H<sub>2</sub>S, H<sub>2</sub>Se dan H<sub>2</sub>Te. </p>
                                <p class="text-center"><span class="fw-bold text-primary">Tabel 2.1</span> Perbedaan
                                    titik
                                    didih berbagai senyawa ikatan hidrogen</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Tabel 2.1.jpg" class="img-fluid">
                                </div>
                                <p>Ketika molekul lain memiliki titik didih yang meningkat seiring kenaikan Mr, air yang
                                    memiliki Mr terendah justru malah memiliki nilai titik didih yang jauh lebih tinggi.
                                    Hal
                                    ini mengakibatkan air akan ditemukan berbentuk cair dalam suhu kamar sedangkan
                                    molekul
                                    sejenis lain justru berada dalam wujud gas. Menyimpangnya perilaku air dilihat dari
                                    titik didihnya dikarenakan ikatan molekul yang terbentuk pada air adalah ikatan
                                    hidrogen
                                    sementara pada dalam wujud cair sementara pada molekul lain yang berada pada satu
                                    golongan yang sama ikatan molekul yang terbentuk adalah ikatan van der waals. Titik
                                    didih molekul yang berikatan hidrogen ditentukan berdasarkan jumlah ikatan hidrogen
                                    yang
                                    terbentuk semakin banyak ikatan hidrogen maka semakin tinggi titik didih. sedangkan
                                    pada
                                    ikatan van der waals nilai titik didih dipengaruhi oleh nilai Mr, semakin besar
                                    nilai Mr
                                    maka semakin besar juga nilai titik didih.</p>
                                <p>Dalam keadaan gas, partikel-partikel penyusun molekul air berada pada jarak terjauh,
                                    jarang berbenturan karena memiliki gaya tarik antarmolekul yang paling kecil. Karena
                                    jarak antar molekulnya yang sangat renggang, pada 100<span>&#8451;</span> dan 1 atm,
                                    massa jenis H<sub>2</sub>O(l) hanya sebesar 0,00059 g/mL. </p>
                                <p>Meskipun kita mengenal titik didih air sebesar 100<span>&#8451;</span> dan pada suhu
                                    tersebut air berpotensi berubah menjadi uap seluruhnya. Namun, pada dasarnya air
                                    sudah
                                    dapat menguap pada suhu 20<span>&#8451;</span>. Mekanisme penguapan seperti ini,
                                    hanya
                                    terjadi pada lapisan air di permukaan (fenomena permukaan), bukan pada keseluruhan
                                    air.
                                    Hal ini terjadi karena air yang berada di bawah permukaan, terjebak dalam lautan
                                    gaya
                                    tarik-menarik antar sesama molekul air. Mereka tidak memiliki cukup energi untuk
                                    naik ke
                                    permukaan dan kemudian melepaskan diri ke udara. Contoh peristiwa penguapan air yang
                                    terjadi sebelum air mendidih dapat kita amati pada peristiwa lantai basah yang baru
                                    saja
                                    di pel lama kelamaan akan mengering dengan sendirinya, hal tersebut dikarenakan
                                    lapisan
                                    permukaan air yang tipis lama-kelamaan akan menguap sehingga lantai menjadi kering.
                                </p>
                                <p>Karena suhu rata-rata bumi sebesar 14<span>&#8451;</span>, air dalam wujud uap jarang
                                    bertahan lama berada di permukaan bumi karena akan dengan segera berubah kembali ke
                                    bentuk cair dalam bentuk awan, embun dan hujan yang kembali turun ke permukaan bumi,
                                    sehingga presentasi uap air di atmosfer tidak lebih dari 0.04% saja dari total air
                                    yang
                                    ada di bumi.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingEnam">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseEnam"
                                                aria-expanded="true" onclick="buka_soal(6)">
                                                <i id="daftar-1-6" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEnam" class="collapse" aria-labelledby="headingEnam"
                                        data-bs-parent="#accordion">
                                        <p>Salah satu pemanfaatan zat cair adalah pada sistem hidrolik</p>
                                        <div class="card-body">
                                            <div class="container mt-5 d-flex justify-content-center">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.5.jpg" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 2.5</span> Sistem
                                            Hidrolik pada kendaraan berat</p>
                                            <div id="isi-soal-6"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Zat cair digunakan pada sistem hidrolik berdasarkan fakta bahwa zat cair dapat
                                        mengikuti bentuk wadah dan tidak dapat dikompresi. Kemampuan zat cair dalam
                                        mengikuti bentuk wadah menjadikan zat cair dapat digunakan untuk mengisi tabung
                                        sistem hidrolik dengan berbagai ukuran dan berbagai bentuk. Sedangkan kemampuan
                                        zat
                                        cair untuk dapat mempertahankan volume tetap saat dikompresi membuat zat cair
                                        dapat
                                        digunakan untuk menyalurkan tekanan dengan besar yang sama ke segala arah</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.6.jpg" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.6</span> Prinsip
                                        pascal digunakan dalam sistem hidrolik</p>
                                    <p>Pada mulanya air (H2O) digunakan dalam sistem kompresi. Namun seiring kemajuan
                                        teknologi maka digunakan cairan khusus untuk mengisi sistem hidrolik dengan
                                        beberapa
                                        pertimbangan sebagai berikut:</p>
                                    <ul>
                                        <li>• Jika sistem memanas selama pengoperasian, Air dapat mendidih, yang
                                            mengakibatkan kompresibilitas tinggi sehingga menurunkan efektivitas sistem
                                            hidrolik. Untuk itu dibutuhkan cairan hidrolik yang memiliki titik didih
                                            yang
                                            lebih tinggi daripada air untuk membantu mengatasi hal ini. </li>
                                        <li>• Jika sistem digunakan pada daerah dingin dibawah 0oC maka air akan
                                            membeku,
                                            dan hal tersebut bukanlah hal yang baik jika saluran rem mobil Anda membeku
                                            setiap kali cuaca dingin di luar. Sebagian besar cairan hidrolik memiliki
                                            titik
                                            beku yang jauh lebih rendah untuk mencegah hal ini terjadi dalam kondisi
                                            normal.
                                        </li>
                                        <li>• Air, sebagai elektrolit, akan menyebabkan karat di dalam saluran segera
                                            setelah udara bocor ke dalam sistem atau sistem tidak mengeluarkan udara
                                            dengan
                                            benar. Air juga akan memperburuk korosi galvanik ketika logam yang berbeda
                                            digunakan dalam sistem.</li>
                                        <li>• Komponen hidrolik menggunakan segel dan seringkali melibatkan antarmuka
                                            geser
                                            (silinder dan spul, misalnya). Menggunakan oli sebagai fluida berarti fluida
                                            kerja juga dapat berfungsi sebagai pelumas.</li>
                                        <li>• Jika air sulingan sempurna dan sistem tertutup dapat dijamin, hal ini
                                            tidak
                                            akan menjadi masalah. Namun dalam praktiknya, hal ini tidak pernah terjadi.
                                            Jika
                                            Air digunakan sebagai cairan hidrolik maka akan memungkinkan pertumbuhan
                                            organik
                                            sehingga mengurangi efektifitas sistem.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Wujud Air -->
                            <br>
                            <br>
                            <!-- Perubahan Wujud Air -->
                            <div id="bagian-2-2">
                                <h3 id="daftar-2-5" class="fw-bold text-primary">Perubahan Wujud Air</h3>
                                <p>Air adalah senyawa yang penting bagi semua bentuk kehidupan yang diketahui sampai
                                    saat
                                    ini di Bumi. Air menutupi hampir 71% permukaan Bumi. Terdapat 1,4 triliun kilometer
                                    kubik (330 juta mil³) air tersedia di Bumi. Air sebagian besar (sekitar 97%) dapat
                                    ditemukan di laut (air asin) dan sisanya (sekitar 3%) berupa air tawar yang berada
                                    pada
                                    lapisan-lapisan es (di kutub dan puncak-puncak gunung). Selain itu, air juga dapat
                                    ditemukan di daratan dalam bentuk sungai, danau, kolam dan air tanah. Air juga dapat
                                    ditemukan dalam jumlah yang sedikit di udara dalam bentuk uap air dan berkumpul
                                    dalam
                                    bentuk awan.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.7.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.7</span> Di Permukaan
                                    bumi air dapat berada dalam 3 wujud (padat, cair dan gas)</p>
                                <p>Suhu rata-rata permukaan bumi berperan penting dalam keberadaan zat cair di bumi
                                    dalam 3
                                    wujud (padat, cair dan gas). Bumi sebagai planet ketiga dalam sistem tata surya
                                    berada
                                    pada jarak yang tepat dari matahari sehingga menghasilkan suhu rata-rata bumi yang
                                    ideal
                                    untuk menunjang keberadaan air dalam 3 wujud. Jika jarak bumi ke matahari lebih
                                    dekat
                                    maka air yang ada di bumi seluruhnya akan berubah menjadi uap, dan sebaliknya jika
                                    jarak
                                    bumi dari matahari lebih jauh maka seluruh air di bumi akan berubah menjadi es.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingTujuh">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseTujuh"
                                                aria-expanded="true" onclick="buka_soal(7)">
                                                <i id="daftar-1-7" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Check Previous Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTujuh" class="collapse" aria-labelledby="headingTujuh"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-7"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Jika suatu zat atau benda dipanaskan (suhunya dinaikkan) maka akan terjadi
                                        kenaikan
                                        energi kinetik dari molekul-molekulnya sehingga molekul-molekul tersebut akan
                                        bergetar lebih cepat dan amplitudo getaran akan bertambah besar, akibatnya jarak
                                        antara molekul zat atau benda menjadi lebih besar.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.8.jpg" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.8</span> semakin
                                        tinggi suhu, semakin cepat gerakan molekul</p>
                                </div>
                                <br>
                                <br>
                                <p id="daftar-2-7" class="fw-bold"><span class="text-primary">Combine Knowledge:<span> Bagaimana kalor
                                            dapat
                                            mempengaruhi perubahan wujud air?</p>
                                <p>Sebagaimana dijelaskan sebelumnya, antar molekul H2O penyusun air terjadi interaksi
                                    saling tarik menarik satu sama lain dengan gaya ikatan hidrogen. Gaya tarik-menarik
                                    tersebut cenderung menarik partikel-partikel menjadi lebih dekat, meskipun tidak
                                    sampai
                                    membentuk struktur kristal. Agar partikel-partikel air tersebut dapat bergerak
                                    bebas,
                                    maka partikel-partikel tersebut membutuhkan banyak energi kinetik untuk mengatasi
                                    gaya
                                    tarik menarik. Sebaliknya agar partikel-partikel air tersebut dapat membentuk ikatan
                                    kristal, maka partikel-partikel tersebut harus menurunkan energi kinetik agar
                                    partikel-partikel tersebut tidak bergerak sehingga gaya tarik menarik antar molekul
                                    cukup untuk membentuk ikatan partikel dengan struktur yang rapat.</p>
                                <p>Dalam suhu kamar, air akan berwujud cair, dimana pada molekul-molekul yang saling
                                    berdekatan terjadi ikatan hidrogen yang lemah sehingga molekul-molekul tersebut
                                    dapat
                                    meluncur melewati satu sama lain namun tidak sepenuhnya dapat melepaskan diri.
                                    Ketika
                                    kalor diberikan secara terus menerus pada air, molekul-molekul air akan mendapat
                                    tambahan energi kinetik yang menyebabkan gerakan partikel akan semakin cepat dan
                                    pada
                                    akhirnya akan mampu mengatasi hidrogen sehingga molekul air akan mulai bergerak
                                    bebas
                                    tanpa terikat dengan molekul lainnya. pada saat itulah air yang sebelumnya berwujud
                                    cair
                                    akan mulai berubah menjadi wujud gas (uap air).</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.9.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.9</span> Hubungan
                                    suhu,
                                    energi kinetik, gerak partikel dan gaya antar molekul pada perubahan wujud air</p>
                                <p>Sebaliknya ketika kalor mulai diambil secara terus menerus dari air, suhu air akan
                                    mulai
                                    menurun sebagai akibat penurunan energi kinetik. Keadaan ini akan menyebabkan
                                    gerakan
                                    partikel akan semakin lambat sehingga molekul air akan mulai terikat secara kuat
                                    karena
                                    ikatan hidrogen yang terjadi tidak hanya berupa ikatan berantai seperti pada molekul
                                    air
                                    dalam wujud cair, melainkan berbentuk teratur ke segala arah. Keadaan ini menjadikan
                                    molekul-molekul air tersusun rapi pada jarak yang relatif tetap. Pada saat itulah
                                    air
                                    yang sebelumnya berwujud cair akan mulai berubah menjadi wujud padat (es).</p>
                                <p>Gambar diatas memberikan suatu gamabran sederhana bahgaiman peningkatan suhu air akan
                                    berbanding lurus dengan energi kinetik dan kecepatan gerak partikel dan berbanding
                                    terbalik dengan gaya ikat antar molekul. Smeakin tinggi suhu maka semakin cepat
                                    partikel
                                    air bergerak dan semakin kecil gaya ikat antar molekul. Sebaliknya </p>
                                <p>Terdapat 6 jenis perubahan wujud air yang melibatkan proses pelepasan dan penerimaan
                                    kalor yaitu : membeku, melebur menguap, mengembun, menyublim dan mendeposisi
                                    (seperti
                                    ditunjukan pada gambar2.9). Tanda panah berwarna biru menunjukan proses eksotermik
                                    dimana dalam perubahan wujud tersebut harus melibatkan penambahan kalor. Perubahan
                                    wujud
                                    yang termasuk dalam proses eksotermik diantaranya adalah melebur, menguap dan
                                    meynubulim. Adapun tanda panah berwanra biru menunjukan proses endotermik dimana
                                    dalam
                                    perubahan wujud tersebut harus melibatkan pelepasan kalor. Perubahan wujud yang
                                    termasuk
                                    dalam proses endotermik diantaranya adalah membeku, mengembun dan deposisi.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.10.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.10</span> Enam jenis
                                    perubahan wujud air kaitanyya dengan kalor yang di terima dan dilepaskan</p>
                                <p>Selain dipengaruhi oleh suhu, proses perubahan wujud air juga dipengaruhi oleh
                                    tekanan.
                                    Jika selama ini kita mengenal bahwa air membeku pada suhu O<span>&#8451;</span> dan
                                    mendidih pada suhu 100<span>&#8451;</span>, maka nilai nilai tersbeut terjadi pada
                                    tekanan udara 1 atm. Seandainya tekanan udara dinaikan atau diturunkan maka akan
                                    berpengaruh juga terhadap nilai titik beku dan titik didih air.</p>
                                <p>Diagram berikut merupakan visual grafis untuk merepresentasikan hubungan
                                    tekanan-volume
                                    suatu zat dan mengidentifikasi berbagai fasenya. Hubungan ini penting karena dapat
                                    memprediksi ke arah mana transformasi fasa terjadi ketika kita bergerak sepanjang
                                    garis
                                    tekanan atau suhu konstan. Diagram fase air menunjukkan apa yang terjadi pada air
                                    saat
                                    mengalami berbagai proses perubahan fase. Garis-garis pada diagram fasa merupakan
                                    garis-garis kesetimbangan. Sejalan dengan itu, dua fase mana pun dapat berdampingan
                                    dalam kesetimbangan termal. Garis AB merupakan garis es-uap, garis BC adalah garis
                                    es-air, dan garis BD adalah garis uap- air. Kita dapat menggunakan diagram fase
                                    untuk
                                    mengidentifikasi keadaan keberadaan air pada kondisi suhu dan tekanan tertentu.</p>
                                <p>Garis horizontal putus-putus berwarna orange menunjukan garis perubahan wujud air
                                    pada
                                    tekanan normal (1 atm). Berdasarkan grafik terlihat bahwa pada tekanan udara normal
                                    tidak mungkin air berada dalam 3 wujud secara sekaligus, namun ketika tekanannya
                                    diturunkan sampai 0.06 atm pada suhu 0.01<span>&#8451;</span> maka es, air dan uap
                                    air
                                    dapat terjadi secara bersamaan yang disebut dengan <span
                                        class="fw-bold fst-italic">triple point.</span> Selain itu ada juga titik yang
                                    disebut <span class="fw-bold fst-italic">critical point</span> yaitu pada titik
                                    dimana
                                    air yang sudah berubah menjadi uap tidak mungkin lagi dapat berubah menjadi zat
                                    cair.
                                    Kejadian tersebut terjadi pada suhu 374 <span>&#8451;</span> dan tekanan 218 atm.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambarnew 2.11.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.11</span> Diagram
                                    perubahan wujud air</p>
                                <p>Diagram diatas memberikan suatu gambaran pada kita bagaimana perubahan fase pada zat
                                    cair
                                    melibatkan dua variabel utama yaitu suhu dan tekanan. Dalam konteks sederhana dalam
                                    kehidupan sehari-hari, kita mengenali bahwa sebuah es batu (padat) hanya dapat
                                    berubah
                                    menjadi cair ketika ditambahkan kalor dan tidak mungkin dapat langsung berubah
                                    menjadi
                                    gas. Jadi kita tidak akan dapat menemukan kejadian dimana es menguap. Begitupun uap
                                    air,
                                    ketika suhunya diturunkan ia akan berubah menjadi air baru kemudian berubah menjadi
                                    es.
                                    kita juga tidak akan dapat menemukan kejadian dimana uap air langsung berubah
                                    menjadi
                                    es. Namun jika kita melibatkan variabel tekanan, maka pada tekanan tertentu es dapat
                                    langsung berubah menjadi uap, begitu pula uap air dapat juga langsung berubah
                                    menjadi
                                    es. pada bagian selanjutnya kita akan membahas lebih detail bagaimana mekanisme
                                    perubahan wujud zat cair yang melibatkan suhu dan tekanan.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDelapan">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDelapan"
                                                aria-expanded="true" onclick="buka_soal(8)">
                                                <i id="daftar-1-8" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDelapan" class="collapse" aria-labelledby="headingDelapan"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Asap atau kabut yang biasa kita saksikan dalam sebuah pertunjukan merupakan gas
                                            yang
                                            dihasilkan dari es kering (dry ice) yang berasal dari karbon dioksida
                                            (CO<sub>2</sub>) didinginkan hingga suhu -78<span>&#8451;</span> sehingga
                                            berubah
                                            wujud menjadi karbon dioksida padat. Diagram berikut menunjukan perubahan fase
                                            padat, cair dan gas pada CO<sub>2</sub> yang dipengaruhi oleh tekanan dan
                                            temperatur.</p>
                                        <div class="container mt-5 d-flex justify-content-center">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.12.jpg" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 2.12</span> Diagram
                                            perubahan wujud CO2</p>
                                            <div id="isi-soal-8"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Berdasarkan diagram kita dapat mengetahui bahwa pada tekanan udara normal (1 atm)
                                        karbon dioksida padat (dry ice) hanya berdampingan dengan karbon dioksida gas.
                                        Artinya. Ketika es padat dikeluarkan dari mesin pendingin maka pada suhu kamar
                                        es
                                        padat akan langsung berubah menjadi gas tanpa melewati fase cair terlebih
                                        dahulu.
                                        Karena fase cair dari karbon dioksida hanya terjadi pada tekanan diatas 5.2 atm.
                                    </p>
                                    <p>Mekanisme perubahan wujud es kering menjadi uap dapat dijelaskan sebagai berikut.
                                        Es
                                        kering <span class="fst-italic">(dry ice)</span> adalah bentuk padat karbon
                                        dioksida
                                        yang terdiri dari dua atom oksigen yang terikat secara kovalen pada satu atom
                                        karbon. </p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.13.jpg" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.13</span>
                                        Struktur
                                        molekul CO2</p>
                                    <p>Meskipun pada molekul CO<sub>2</sub> atom oksigen memiliki dipol negatif dan atom
                                        karbon memiliki dipol positif, karena elektron tersusun dalam pola simetris
                                        dalam
                                        suatu molekul, maka muatan pada kedua atom menghilangkan momen dipol, dan
                                        karenanya
                                        menjadi non polar dengan momen dipol total nol sehingga gaya tarik menarik
                                        antarmolekul berlaku gaya <span class="fst-italic">Van der Waals</span> lemah .
                                    </p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.14.jpg" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.14</span>
                                        Perubahan
                                        struktur molekul CO2 dari padat ke gas</p>
                                    <p>Ketika es kering ditempatkan pada suhu kamar, energi kalor yang diserap akan
                                        langsung
                                        digunakan untuk memutus ikatan van der waals sehingga molekul karbon dioksida
                                        akan
                                        bebas kembali dalam bentuk gas tanpa melewati wujud cair terlebih dahulu.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambarnew 2.15.jpg"
                                            class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.15</span> Ketika
                                        CO2
                                        menyublim akan tampak gas berwarna putih seperti asap</p>
                                </div>
                                <p>Berdasarkan mekanisme tersebut maka es kering ini terkadang dijadikan satu alat bantu
                                    dalam suatu pertunjukan panggung untuk menciptakan efek kabut/asap secara instan.
                                </p>
                            </div>
                            <!-- End Perubahan Wujud Air -->
                            <!-- Melebur Dan Membeku -->
                            <div id="bagian-2-3">
                                <p id="daftar-2-9" class="fw-bold">MELEBUR DAN MEMBEKU</p>
                                <p>Melebur adalah perubahan wujud dari padat ke cair, yaitu perubahan struktur dari
                                    teratur
                                    (Kristalin) ke tidak tidak teratur (Amorf) sedangkan Membeku adalah kebalikan dari
                                    melebur yaitu perubahan wujud dari cair ke padat Pada proses membeku terjadi
                                    perubahan
                                    struktur ikatan molekul dari struktur tidak teratur (Amorf) menjadi struktur teratur
                                    (Kristalin)</p>
                                <p>Perubahan wujud melebur terjadi jika zat menyerap kalor sehingga kalor tersebut dapat
                                    memberikan tambahan energi pada molekul air untuk melawan ikatan hidrogen. Sedangkan
                                    proses perubahan wujud membeku terjadi sebaliknya yakni ketika zat melepaskan kalor
                                    sehingga kehilangan kalor tersebut menyebabkan molekul air kehilangan energi dan
                                    pada
                                    akhirnya molekul-molekul air akan membentuk struktur ikatan teratur.</p>
                                <p id="daftar-2-10" class="fw-bold"><span class="text-primary">Combine Knowledge :</span> Bagaimana
                                    hubungan
                                    antara kalor, energi kinetik molekul dan ikatan Hidrogen air pada proses melebur dan
                                    membeku?</p>
                                <p>Seperti yang sudah dibahas sebelumnya bahwa dalam suhu kamar, air akan berwujud cair
                                    dimana energi yang dimiliki air akan menyebabkan molekul-molekul air mempunyai
                                    energi
                                    kinetik yang cukup untuk mengatasi sebagian gaya hidrogen. Ketidakteraturan struktur
                                    molekul air dalam bentuk cair disebabkan karena dengan potensi energi yang
                                    dimilikinya,
                                    setiap molekul dapat meluncur melewati satu sama lain namun energi tersebut tidak
                                    cukup
                                    besar untuk dapat melepaskan diri sepenuhnya dari ikatan Hidrogen. Hal ini
                                    menjelaskan
                                    mengapa zat cair dapat berubah bentuk tetapi volumenya tetap.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.16.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.16</span> Salah satu
                                    karakteristik zat cair adalah dapat berubah bentuk mengikuti wadah, namun volumenya
                                    tetap.</p>
                                <p>Ketika suhu air diturunkan, maka setiap molekul air akan mengalami penurunan energi
                                    kinetik dan akhirnya gerakan molekulnya menjadi lebih lambat dan semakin tidak
                                    memiliki
                                    energi untuk melepaskan diri dari ikatan Hidrogen. Setiap dipol positif pada molekul
                                    air
                                    akan mulai berikatan pada dipol negatif terdekat dengan teratur.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.17.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.17</span> Perubahan
                                    struktur molekul air dari wujud cair ke padat</p>
                                <p>sebaliknya ketika air dalam wujud pada (es) suhunya dinaikkan, maka setiap molekul es
                                    perlahan akan mengalami kenaikan energi kinetik dan akhirnya gerakan molekulnya
                                    menjadi
                                    lebih cepat dan semakin memiliki energi yang cukup untuk melepaskan diri dari ikatan
                                    van
                                    der waals.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambarnew 2.18.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.18</span> Perbedaan
                                    struktur molekul air pada wujud cair dan padat</p>
                                <p>Gambar diatas mengilustrasikan bagaimana perbedaan molekul air dalam bentuk cair dan
                                    molekul air dalam bentuk padat (es). Dalam bentuk padat terlihat bahwa keteraturan
                                    ikatan molekul akan membentuk heksagonal yang memiliki struktur yang kokoh namun
                                    memiliki rongga antar molekul yang berakibat pada pembesaran volume es. hal inilah
                                    yang
                                    kemudian menyebabkan massa jenis air dalam wujud es lebih kecil dari massa jenis air
                                    dalam bentuk cair. Sehingga es akan mengambang diatas air.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.19.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.19</span> Pada saat
                                    es
                                    membeku, volumenya akan bertambah</p>
                                <p>Peristiwa penambahan volume air ketika air dibekukan dapat kita amati pada proses
                                    pembuatan es batu. Air yang kita tempatkan pada suatu wadah tertutup, ketika
                                    dibekukan
                                    maka akan terlihat bahwa wadah tersebut akan tampak menggembung karena penambahan
                                    volume
                                    pada air.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.20.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.20</span> Penambahan
                                    volume pada saat air membeku menyebabkan retakan pada aspal jalan</p>
                                <p>Peristiwa penambahan volume zat cair ketika dibekukan dapat diamati juga dalam
                                    peristiwa
                                    bertambah lebarnya retakan aspal atau batuan ketika musim dingin tiba. Retakan aspal
                                    atau batuan yang terisi air, akan bertambah besar pada musim dingin karena ketika
                                    air
                                    membeku akan mendorong retakan tersebut menjadi lebih besar seiring dengan
                                    bertambahnya
                                    volume air ketika berubah menjadi es</p>
                                <p id="daftar-2-11" class="fw-bold"><span class="text-primary">Awe Experience:</span> Apa manfaat sifat
                                    anomali air</p>
                                <!-- KUBIK BELUM PAKAI PANGKAT YANG KECIL -->
                                <p>Sebagian besar zat (baik padat, cair, maupun gas) akan memuai jika dipanaskan dan
                                    jika
                                    didinginkan akan menyusut. Akan tetapi, kondisi tersebut tidak berlaku untuk air.
                                    Air
                                    tidak selalu menyusut ketika mengalami penurunan suhu. Dalam suhu normal
                                    25<span>&#8451;</span> air akan memiliki massa jenis sekitar 0,9971 Kg/m3. Pada saat
                                    suhu air diturunkan dari suhu normal (25°C) sampai 4°C air akan mengalami pengerutan
                                    (penyusutan volume) seperti zat lain pada umumnya, sehingga massa jenisnya meningkat
                                    hingga 1 Kg/m3. Namun ketika suhu air diturunkan dari 4°C ke 0°C, air akan
                                    mengembang
                                    yang menyebabkan volumenya membesar dan massa jenisnya mengalami penurunan.
                                    Pengembangan
                                    volume ini akan terus berlangsung sampai seluruh air menjadi es hingga mencapai
                                    massa
                                    jenis sebesar 0,9170 Kg/m3. Jika penurunan suhu terus dilakukan maka dari suhu 0°C
                                    hingga suhu -150 °C es akan kembali mengalami penyusutan volume hingga massa
                                    jenisnya
                                    naik menjadi 0,9350 Kg/m3. </p>
                                <p>Sifat pengecualian pola pemuaian dan penyusutan air yang berbeda dari zat lainnya
                                    dinamakan anomali air. Anomali air terjadi karena molekul H2O dalam bentuk padat
                                    (es)
                                    penuh dengan rongga, sedangkan dalam bentuk cair (air) lebih rapat. Dengan demikian,
                                    pada saat dipanaskan, molekul H2O (es) akan merapat lebih dahulu, akibatnya
                                    volumenya
                                    menjadi menyusut dan massa jenisnya meningkat. </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.21.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.21</span> Grafik
                                    perubahan massa jenis air seiring perubahan suhu</p>
                                <p>Meskipun dalam rentang suhu 0<span>&#8451;</span> – 100<span>&#8451;</span> air
                                    berada
                                    dalam bentuk cair, namun perbedaan suhu akan menyebabkan terjadi beberapa perbedaan
                                    karakter air pada suhu yang berbeda. Semakin tinggi suhu air maka energi kinetik
                                    molekul
                                    akan semakin besar sehingga menyebabkan struktur molekul air akan lebih renggang
                                    yang
                                    akan tampak secara makroskopis sebagai pembesaran volume air sehingga massa jenis
                                    nya
                                    pun akan mengecil. Grafik berikut menunjukan pemuaian air yang terjadi secara
                                    eksponensial seiring dengan kenaikan suhu.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.22.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.22</span> Perbedaan
                                    struktur molekul air pada wujud cari dan padat</p>
                                <p>Berdasarkan grafik diatas terlihat bahwa volume terendah air terjadi pada suhu
                                    4<span>&#8451;</span>, kemudian seiring kenaikan suhu volume air akan bertambah
                                    (sehingga massa jenisnya pun menurun). Begitupun ketika suhu air diturunkan dari
                                    suhu 4
                                    <span>&#8451;</span> menuju suhu minus volume air dalam bentuk padat (es) juga
                                    mengalami
                                    kenaikan volume. Dengan begitu jika terdapat es, air dingin dan air hangat berkumpul
                                    dalam suatu tempat yang sama maka air dingin akan berada paling dasar, kemudian
                                    semakin
                                    keatas semakin hangat, sedangkan es akan berada pada permukaan air (mengapung)
                                    seperti
                                    ditunjukan pada gambar.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.23.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.23</span> Posisi es,
                                    air
                                    dingin dan air hangat jika berada di satu tempat yang sama</p>
                                <p id="daftar-2-12" class="fw-bold"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
                                    massa
                                    jenis es yang lebih besar dari massa jenis air?</p>
                                <p>Anomali air menyebabkan massa jenis es lebih kecil daripada air yang bersuhu 1°C
                                    sampai
                                    4°C. Itulah sebabnya mengapa es dapat mengapung di atas permukaan air. Es yang
                                    bersuhu
                                    0°C ke bawah memiliki massa jenis yang lebih kecil daripada air di sekitarnya.
                                    Sehingga
                                    air yang lebih hangat dan massa jenis lebih besar akan tenggelam ke bawah. Kondisi
                                    ini
                                    bermanfaat untuk membantu ikan dan hewan-hewan air atau biota air saat musim dingin.
                                    Suhu yang sangat dingin akan membekukan air danau. Namun karena sifat anomali air,
                                    karena massa jenisnya yang rendah, air yang membeku akan berada di lapisan teratas
                                    sedangkan lapisan bawahnya akan tetap berada dalam wujud cair sehingga kondisi ini
                                    akan
                                    menjaga ikan, hewan-hewan air air lain dan tumbuhan air akan dapat bertahan hidup
                                    pada
                                    cuaca dingin.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.24.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.24</span> Pada musim
                                    dingin hanya lapisan permukaan atas saja yang membeku</p>
                                <p>Adanya anomali air ini juga bermanfaat dalam kehidupan. Air yang membeku dalam
                                    bebatuan,
                                    karena volumenya membesar maka mampu memecahkan bebatuan. Pecahnya bebatuan
                                    menyebabkan
                                    mineral dalam batuan akan keluar dan memberikan manfaat bagi kehidupan. Jadi,
                                    kemampuan
                                    air untuk masuk pada celah-celah bebatuan sangat dibutuhkan dalam kehidupan di
                                    daerah
                                    kutub.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.25.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.25</span> Pembekuan
                                    air
                                    yang berada di celah bebatuan akan memecah batuan</p>
                                <p>Hadirnya sifat anomali air ini adalah cara Allah untuk menebarkan kasih sayang Allah
                                    SWT
                                    kepada makhluk-Nya. Sebab ketika Allah SWT menetapkan sunatullah pada zat lain yang
                                    akan
                                    memuai hanya jika dipanaskan, sedangkan pada air Allah meenetapkan sebaliknya dimana
                                    ketika air didinginkan akan mengembang. Sifat air yang unik ini juga rahmat dari
                                    Allah
                                    SWT. Seandainya air yang membeku itu tenggelam, maka seluruh sungai akan menjadi es,
                                    dan
                                    semua kehidupan di dalam air akan punah. Plankton, tumbuhan, dan ikan akan mati.</p>
                                <p>Allah SWT berfirman dalam Al-Quran surat Surat Al-Anbiya Ayat 30</p>
                                <p class="text-end">وجَعَلْنَا مِنَ الْمَآءِ كُلَّ شَىْءٍ حَىٍّ </p>
                                <p class="fst-italic">Artinya : “Dan dari air Kami jadikan segala sesuatu yang hidup…”
                                    <span class="fw-bold">(QS. Al-Anbiya : 30)</span></p>
                                <p>Ayat ini bermakna bahwa Allah menghidupkan seluruh makhluk hidup dengan air yang
                                    diturunkan turunkan dari langit atau dengan air yang di lautan yang meliputi
                                    hewan-hewan
                                    dan tumbuh-tumbuhan. Ayat ini juga bermakna bahwa air merupakan sebab kehidupan
                                    segala
                                    makhluk hidup yang ada di bumi.</p>
                                <p>Kita ketahui bersama bahwa di antara makh-makhluk yang Allah ciptakan sebagai
                                    penghuni
                                    bumi salah satunya adalah hewan-hewan dan tumbuhan yang habitat alaminya hidup
                                    didalam
                                    air. Jika saja air memiliki sifat seperti zat yang lain ketika didinginkan, maka
                                    niscaya
                                    pada saat musim dingin tiba seluruh lapisan air yang ada di sungai, danau dan lautan
                                    akan membeku seluruhnya sehingga akan menyebabkan punahnya seluruh kehidupan di
                                    dalam
                                    air. Namun tidaklah demikian, karena Allah SWT yang telah menciptakan seluruh
                                    makhluk
                                    yang ada di bumi, maka Allah SWT mengetahui betul apa yang dibutuhkan oleh
                                    makhluk-makhluknya di bumi agar dapat bertahan hidup. Maka Allah SWT menetapkan
                                    sifat
                                    anomali air sebagai bagian dari Rahmat dan Kasih sayang-Nya pada makhluk-makhluk air
                                    yang hidup di kutub dan daerah dingin sehingga pada cuaca yang dingin ekstrim
                                    sekalipun
                                    makhluk-makhluk tersebut dapat tetap bertahan hidup karena habitatnya tetap terjaga
                                    untuk dapat menunjang kehidupan.</p>
                            </div>
                            <!-- End Melebur Dan Membeku -->
                            <!-- MENGUAP DAN MENGEMBUN -->
                            <div id="bagian-2-4">
                                <p id="daftar-2-13" class="fw-bold text-primary">MENGUAP DAN MENGEMBUN</p>
                                <p>Menguap adalah perubahan wujud dari cair ke gas, yaitu perubahan struktur dari
                                    keadaan
                                    saling berikatan secara beraturan (amorf) menjadi saling terpisah satu sama lain
                                    sedangkan mengembun adalah kebalikan dari menguap yaitu perubahan wujud dari gas ke
                                    cair
                                    Pada proses mengembun terjadi perubahan struktur dari keadaan tidak saling berikatan
                                    menjadi saling berikatan secara tidak beraturan (Amorf).</p>
                                <p>Perubahan wujud <span class="fw-bold">menguap</span> terjadi jika zat menerima
                                    tambahan
                                    kalor sehingga kalor tersebut dapat menaikan energi pada molekul air untuk melawan
                                    ikatan van der waals hingga pada akhirnya tiap molekul air bebas tanpa berikatan
                                    satu
                                    sama lain. Sedangkan proses perubahan wujud <span class="fw-bold">mengembun</span>
                                    terjadi sebaliknya yakni ketika zat melepaskan kalor sehingga kehilangan kalor
                                    tersebut
                                    menyebabkan molekul uap air kehilangan energi dan pada akhirnya molekul-molekul
                                    tersebut
                                    akan berikatan kembali dan berubah menjadi air.</p>
                                <p id="daftar-2-14" class="fw-bold"><span class="text-primary">Combine Knowledge:</span> Bagaimana
                                    hubungan
                                    antara kalor, energi kinetik molekul dan ikatan Hidrogen air pada proses menguap dan
                                    mengembun?</p>
                                <p>Proses menguap merupakan proses perubahan wujud dari cair menjadi gas. Air akan
                                    menguap
                                    menjadi gas (uap air) ketika air tersebut menerima tambahan energi kalor yang cukup
                                    agar
                                    molekul-molekulnya mampu melepaskan diri dari ikatan Hidrogen.</p>
                                <p>Selama ini sering orang beranggapan bahwa proses penguapan pada air dapat terjadi
                                    pada
                                    suhu 100<span>&#8451;</span> ketika air sudah dipanaskan sampai mendidih. Padahal,
                                    air
                                    dapat menguap pada suhu berapapun.Lantai basah yang mengering dan baju basah yang
                                    kering
                                    setelah dijemur menunjukan bahwa air dapat menguap tanpa harus menunggu suhunya
                                    mencapai
                                    100<span>&#8451;</span></p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.26.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.26</span> Perbedaan
                                    struktur molekul air pada wujud cair dan gas</p>
                                <p>Agar molekul cair dapat melepaskan diri ke wujud gas, molekul tersebut harus
                                    mempunyai
                                    energi kinetik yang cukup untuk mengatasi gaya tarik menarik antarmolekul dalam
                                    cairan.
                                    Molekul cair yang mempunyai energi kinetik ambang batas tertentu keluar dari
                                    permukaan
                                    dan menjadi uap. Akibatnya, molekul cairan yang tersisa, akan memiliki energi
                                    kinetik
                                    yang lebih rendah. Saat terjadi penguapan, suhu cairan yang tersisa menurun. Sebagai
                                    contoh Pada hari yang panas, molekul air dalam keringat menyerap panas tubuh dan
                                    menguap
                                    dari permukaan kulit. Proses penguapan membuat sisa keringat menjadi lebih dingin,
                                    yang
                                    pada gilirannya menyerap lebih banyak panas dari tubuh Anda.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.27.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.27</span> Evaporasi
                                    (A)
                                    dan kondensasi (B). (Kredit: Christopher Auyeung; Sumber: CK-12 Foundation; Lisensi:
                                    CC
                                    BY-NC 3.0)</p>
                                <p>Ketika wadah berisi cairan yang terisi sebagian ditutup dengan sumbat, beberapa
                                    molekul
                                    cairan di permukaan menguap ke dalam fase uap. Namun, molekul uap tidak dapat keluar
                                    dari wadahnya. Jadi, setelah jangka waktu tertentu, ruang di atas cairan mencapai
                                    titik
                                    di mana ia tidak dapat lagi menampung molekul uap. Sehingga, beberapa molekul uap
                                    mengembun kembali menjadi cairan. Sistem mencapai titik di mana laju penguapan sama
                                    dengan laju kondensasi (lihat gambar di bawah). Ini dianggap sebagai keseimbangan
                                    dinamis antara fase cair dan uap.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.28.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.28</span>
                                    Kesetimbangan
                                    antara fasa cair dan fasa uap. (Kredit: Christopher Auyeung; Sumber: CK-12
                                    Foundation;
                                    Lisensi: CC BY-NC 3.0 opens in new window)</p>
                                <p>Dalam konteks perubahan wujud benda, “Menguap” dan “Mendidih” merupakan dua konteks
                                    yang
                                    berbeda. Menguap adalah kejadian dimana molekul air pada permukaan terlepas. Menguap
                                    hanya terjadi di permukaan air yang bersentuhan dengan udara sekitar. Proses ini
                                    terjadi
                                    di setiap temperatur dan akan semakin banyak seiring temperatur udara meningkat.
                                    Kecenderungan air selalu menguap karena tekanan uap air udara cenderung lebih kecil
                                    dari
                                    tekanan jenuh udara disekitarnya (kondisi dimana udara tidak dapat menerima uap air
                                    lagi).</p>
                                <p>Berbeda dengan menguap, mendidih merupakan peristiwa dimana semua molekul air
                                    bergerak
                                    secara acak karena energi tinggi yang diberikan oleh kalor sehingga seluruh molekul
                                    air
                                    tersebut (bukan hanya yang berada di permukaan) memiliki potensi untuk terlepas dan
                                    membentuk fase gas (uap air).</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.29.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.29</span>
                                    Perbandingan
                                    banyaknya molekul yang menguap pada dua suhu berbeda (Kredit: Christopher Auyeung;
                                    Sumber: CK-12 Foundation; Lisensi: CC BY-NC 3.0 (opens in new window) )</p>
                                <p>Satu cairan akan lebih cepat menguap bila dipanaskan. Hal ini karena proses pemanasan
                                    menghasilkan sebagian besar molekul cairan yang memiliki energi kinetik yang
                                    diperlukan
                                    untuk keluar dari permukaan cairan. Gambar di atas menunjukkan distribusi energi
                                    kinetik
                                    molekul cairan pada dua suhu. Jumlah molekul yang mempunyai energi kinetik yang
                                    diperlukan untuk menguap ditunjukkan pada area yang diarsir di bawah kurva di
                                    sebelah
                                    kanan. Cairan bersuhu lebih tinggi (T2) memiliki lebih banyak molekul yang mampu
                                    keluar
                                    ke fase uap daripada cairan bersuhu lebih rendah (T1)</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.30.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.30</span> Penguapan
                                    pada
                                    air bersuhu biasa dan pada air mendidih</p>
                                <p>Uap air yang berada di udara dapat berubah kembali menjadi air ketika suhunya
                                    diturunkan.
                                    Ketika uap air melepaskan kalor, maka gerakan molekul-molekulnya akan melambat
                                    sehingga
                                    antar molekul yang berdekatan akan kembali bergabung membentuk ikatan van der waals.
                                    Sejumlah molekul uap air yang mendingin dan berikatan kembali akan membentuk
                                    tetes-tetes
                                    embun yang berbentuk air.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.31.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.31</span> Air yang
                                    dididihkan pada wadah tertutup</p>
                                <p>Air yang didihkan pada wadah tertutup akan menghasilkan uap air yang terperangkap
                                    dalam
                                    wadah. Ketika wadahnya kembali didinginkan maka uap air tersebut akan berubah wujud
                                    kembali menjadi air dan menetes kembali ke dalam wadah. Proses ini mirip dengan
                                    proses
                                    penguapan air yang terjadi di permukaan bumi karena panas matahari di siang hari,
                                    akan
                                    diembunkan kembali pada malam hari karena suhu permukaan bumi yang menurun. Embun
                                    terbentuk ketika suhu menjadi sama dengan titik embun. Hal ini sering terjadi karena
                                    dua
                                    alasan. Pertama, emisi gelombang panjang yang dipancarkan bumi menyebabkan permukaan
                                    bumi menjadi dingin pada malam hari. Kedua, tanah yang hangat dan lembab akan
                                    membantu
                                    pembentukan embun saat tanah mendingin semalaman.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.32.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.32</span> Embun pagi
                                    yang
                                    menempel pada daun</p>
                                <p>Proses pengembunan akan lebih sering terjadi pada saat malam yang cerah. Langit cerah
                                    memungkinkan pelepasan radiasi gelombang panjang secara maksimal ke luar angkasa
                                    sedangkan langit berawan akan memantulkan dan menyerap sambil memancarkan kembali
                                    radiasi gelombang panjang kembali ke permukaan dan mencegah terjadinya pendinginan
                                    permukaan bumi. Kelembaban tanah juga sangat penting untuk menghasilkan embun
                                    (terutama
                                    embun yang banyak). Daerah kering yang tidak menerima hujan selama satu atau dua
                                    minggu
                                    lebih kecil kemungkinannya untuk mendapatkan embun pagi. Adapun jika malam hari
                                    cerah
                                    setelah hujan lebat, embun diperkirakan akan turun setiap pagi selama beberapa hari
                                    ke
                                    depan Embun memiliki peran penting untuk pertanian. Embun mengisi kembali kelembaban
                                    tanah dan membatasi penguapan dari tanah selama pembentukan embun.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingSembilan">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSembilan"
                                                aria-expanded="true" onclick="buka_soal(9)">
                                                <i id="daftar-1-9" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSembilan" class="collapse" aria-labelledby="headingSembilan"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-2">
                                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.33.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div class="col" id="isi-soal-9"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Uap air merupakan salah satu gas penyusun udara atmosfer bumi dengan persentase
                                        sekitar 5%. Udara disekitar botol tentu saja mengandung uap air. Ketika kalor
                                        berpindah dari udara menuju botol air (karena suhu udara lebih tinggi dari suhu
                                        botol air), maka uap air disekitar botol akan kehilangan energi dan akan mulai
                                        berikatan membentuk embun yang menempel di dinding botol</p>
                                    <div class="container mt-5 d-flex justify-content-center">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.34.jpg" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="fw-bold text-primary">Gambar 2.34</span>
                                        Pembentukan
                                        embun pada permukaan botol yang dingin.</p>
                                    <p>Jadi, embun yang berada di permukaan botol berasal dari udara disekitar botol
                                        yang
                                        mengembun, mustahil berasal dari dalam botol karena air dalam wujud apapun tidak
                                        bisa menembus benda padat seperti botol</p>
                                </div>
                            </div>
                            <!-- End MENGUAP DAN MENGEMBUN -->
                            <br>
                            <br>
                            <div id="bagian-2-5">
                                <p id="daftar-2-16" class="fw-bold text-primary">MENYUBLIM DAN MENDEPOSISI</p>
                                <p>Menyublim adalah perubahan wujud dari padat ke gas, yaitu perubahan struktur dari
                                    teratur
                                    (kristalin) ke keadaan tidak berikatan. Sedangkan Mendeposisi adalah kebalikan dari
                                    menyublim yaitu perubahan wujud dari gas ke padat. Pada proses mendeposisi terjadi
                                    perubahan struktur ikatan molekul dari keadaan tidak berikatan menjadi struktur
                                    teratur
                                    (Kristalin).</p>
                                <p>Perubahan wujud <span class="fw-bold">menyublim</span> terjadi jika benda berwujud
                                    padat
                                    menerima tambahan kalor sehingga kalor tersebut dapat menaikan energi pada molekul
                                    benda
                                    tersebut untuk melawan ikatan antar molekul hingga pada akhirnya tiap molekul bebas
                                    tanpa berikatan satu sama lain. Pada proses menyublim benda yang berwujud padat
                                    secara
                                    langsung berubah menjadi gas tanpa melewati fase cair terlebih dahulu. Adapun proses
                                    perubahan wujud <span class="fw-bold">mendeposisi</span> terjadi sebaliknya yakni
                                    ketika
                                    gas melepaskan kalor dalam jumlah yang banyak sehingga kehilangan kalor tersebut
                                    menyebabkan molekul-molekulnya kehilangan energi dan pada akhirnya molekul-molekul
                                    tersebut akan berikatan dalam struktur kristalin. Dalam proses mendeposisi ini gas
                                    berubah langsung ke wujud padat tanpa melewati wujud cair.</p>
                                <p id="daftar-2-17" class="fw-bold"><span class="text-primary">Combine Knowledge:</span> Bagaimana
                                    hubungan
                                    antara kalor, energi kinetik molekul dan ikatan Hidrogen air pada proses menyublim
                                    dan
                                    mendeposisi?</p>
                                <p>Proses <span class="fw-bold">menyublim</span> pada air merupakan proses perubahan
                                    wujud
                                    dari es menjadi uap air. Es akan menyublim menjadi gas (uap air) ketika es tersebut
                                    menerima tambahan energi kalor yang cukup banyak agar molekul-molekulnya mampu
                                    melepaskan diri dari ikatan van der waals sehingga berubah langsung ke dalam wujud
                                    gas
                                    tanpa melewati fase cair. Adapun perubahan wujud <span
                                        class="fw-bold">mendeposisi</span> merupakan kebalikan dari menyublim, dimana
                                    dalam
                                    proses mendeposisi molekul-molekul uap air melepaskan energi kalor dalam jumlah
                                    besar
                                    sehingga molekul-molekul air terikat kembali dalam ikatan van der waals membentuk
                                    struktur kristalin yang berwujud padat tanpa terlebih dahulu melewati wujud cair.
                                </p>
                                <p>Menyublim adalah proses yang analog dengan pendidihan, karena terjadi ketika tekanan
                                    uap
                                    suatu senyawa sama dengan tekanan yang diberikan (seringkali tekanan atmosfer).
                                    Perbedaannya adalah sublimasi melibatkan tekanan uap zat padat dan bukan tekanan
                                    cairan.
                                    Kebanyakan zat padat tidak mempunyai tekanan uap yang cukup besar pada suhu yang
                                    mudah
                                    dicapai, dan oleh karena itu kemampuan untuk menyublim jarang terjadi. Senyawa yang
                                    mampu melakukan sublimasi cenderung adalah senyawa yang gaya antar molekulnya lemah
                                    dalam keadaan padat. </p>
                                <p>Kebalikan dari proses menyublim adalah Deposisi. deposisi merupakan peralihan fasa
                                    dimana
                                    gas berubah menjadi padat tanpa melalui fasa cair. Pada proses deposisi, suatu gas
                                    harus
                                    melepaskan energi dalam jumlah yang cukup besar sehingga molekul-molekul gas yang
                                    sebelumnya bergerak bebas mengalami penurunan energi kinetik yang pada akhirnya akan
                                    membuat jarak antar partikel saling berdekatan dan akhirnya terbentuk struktur
                                    padat.
                                </p>
                                <p>Berbeda dengan perubahan wujud lainnya, perubahan wujud menyublim dan mendeposisi
                                    pada
                                    molekul air sulit terjadi pada tekanan udara normal (1 atm). Agar dapat terjadi
                                    proses
                                    menyublim dan mendeposisi pada air, dibutuhkan tekanan udara yang sangat rendah dan
                                    suhu
                                    di bawah 0oC. tekanan udara yang rendah menunjukan bahwa kerapatan udara yang
                                    rendah.
                                    Dengan kerapatan udara yang rendah disekitar es, maka energi yang diserap oleh es
                                    dari
                                    lingkungan meskipun dalam jumlah yang sedikit akan mampu membuat molekul air yang
                                    berada
                                    di permukaan es dapat melepaskan diri menjadi uap tanpa melewati fase cair terlebih
                                    dahulu.</p>
                                <p>Tidak mudah untuk melihat terjadinya <span class="fw-bold">sublimasi</span> pada es
                                    dalam
                                    kehidupan sehari-hari, karena sulit menemukan tempat dipermukaan bumi yang memiliki
                                    tekanan udara yang sangat rendah dan juga suhu yang rendah. Namun, Salah satu cara
                                    yang
                                    mungkin dapat kita lakukan untuk melihat hasil sublimasi adalah dengan menggantung
                                    baju
                                    basah di luar pada hari yang suhunya di bawah titik beku (sehingga baju basah
                                    tersebut
                                    akan menjadi baju beku). Dengan sedikit bantuan angin dan sinar matahari, pada
                                    akhirnya
                                    es di baju itu akan hilang menjadi uap air. </p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.35.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.35</span> Baju beku
                                    yang
                                    dijemur pada tempat di musim dingin lama kelamaan akan kering karena es menyublim.
                                </p>
                                <p>Sama halnya dengan peristiwa sublimasi, peristiwa disposisi pada air juga sangat
                                    sulit
                                    dijumpai secara umum dalam kehidupan sehari hari. Salah satu cara yang bisa
                                    dilakukan
                                    untuk melihat hasil disposisi uap air menjadi es adalah pada peristiwa terlapisinya
                                    permukaan buah di musim dingin oleh lapisan permukaan es tipis. Hal ini terjadi
                                    karena
                                    udara yang bercampur uap air yang berada di sekitar buah tersebut mengalami
                                    penurunan
                                    energi dan berikatan satu sama lain membentuk struktur kristalin sehingga
                                    menciptakan
                                    lapisan es yang menyelimuti permukaan buah.</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.36.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.36</span> ketika suhu
                                    udara mendingin udara di sekitar buah akan membeku</p>
                                <p>Contoh lain dari deposisi adalah ketika embun beku terbentuk pada daun. Agar deposisi
                                    terjadi, energi panas harus dikeluarkan dari gas. Ketika udara menjadi cukup dingin,
                                    uap
                                    air di udara yang mengelilingi daun kehilangan energi panas yang cukup untuk berubah
                                    menjadi padat. Meskipun suhu udara mungkin di bawah titik embun, uap air mungkin
                                    tidak
                                    dapat mengembun secara spontan jika tidak ada cara untuk menghilangkan panas laten.
                                    Ketika daun yang sangat dingin menyerap panas dari uap air, uap air yang sangat
                                    dingin
                                    segera mulai mengembun, tetapi pada titik ini sudah melewati titik beku. Hal ini
                                    menyebabkan uap air langsung berubah menjadi padat.</p>
                                <p>Adapun cara yang lebih mudah untuk memvisualisasikan sublimasi adalah dengan
                                    menggunakan
                                    karbon dioksida beku (dry es).</p>
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.37.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.37</span> perbedaan
                                    struktur molekul CO2 padat dan CO2 gas</p>
                                <p>Es kering adalah bentuk padat dari karbon dioksida yang terdiri dari dua atom oksigen
                                    yang terikat secara kovalen pada satu atom karbon. Ia bersifat nonpolar dengan momen
                                    dipol nol sehingga gaya tarik menarik antarmolekul berlaku gaya Van der Waals.
                                    Ketika es
                                    kering ditempatkan pada suhu kamar, energi kalor yang diserap akan langsung
                                    digunakan
                                    untuk memutus ikatan van der waals sehingga molekul karbon dioksida akan bebas
                                    kembali
                                    dalam bentuk gas tanpa melewati wujud cair terlebih dahulu.</p>
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingSepuluh">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSepuluh"
                                                aria-expanded="true" onclick="buka_soal(10)">
                                                <i id="daftar-1-10" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Apply Knowledge
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSepuluh" class="collapse" aria-labelledby="headingSepuluh"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Salah satu peristiwa menyublim yang paling sering dicontohkan dalam kehidupan
                                            sehari-hari adalah pada kamper/kapur barus. Secara struktur kimia kamper/kapur
                                            barus
                                            biasanya dibuat secara sintetis dari molekul naftalena atau yang dalam rumus
                                            kimia
                                            C10H8 yang memiliki titik lebur 78.2 °C dan titik didih 217.97 °C.</p>
                                        <div class="container mt-5 d-flex justify-content-center">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.38.jpg" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 2.38</span>
                                            Struktur
                                            molekul kapur barus</p>
                                        <p>Senyawa Naphthalene merupakan senyawa non polar sehingga dalam bentuk kristal
                                            (padat)
                                            ikatan yang terjadi adalah ikatan van der waals jenis dispersi gaya london </p>
                                        <div class="container mt-5 d-flex justify-content-center">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.39.jpg" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 2.39</span> Ikatan
                                            antar molekul kapur barus merupakan dispersi gaya london</p>
                                            <div id="isi-soal-10"></div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <div class="border-top border-bottom border-dark">
                                    <p class="text-italic text-primary">Check Your Answer</p>
                                    <p>Titik lebur 78.2 °C adalah suhu yang dibutuhkan untuk mencairkan kamper dan titik
                                        didih 217.97 °C adalah suhu yang dibutuhkan untuk mendidihkan kamper. Agar
                                        terjadi
                                        proses sublimasi (perubahan padat ke gas) pada kamper, tidak diperlukan suhu
                                        tinggi
                                        yang melewati titik lebur atau titik didihnya. Pada suhu rendah sekalipun kamper
                                        akan tetap menyublim karena ikatan antar molekulnya merupakan ikatan van der
                                        waals
                                        tipe gaya london yang sangat lemah sekali, sehingga sedikit energi kalor sudah
                                        cukup
                                        untuk molekulnya melepaskan diri dari struktur padat menjadi gas (tidak
                                        berikatan).
                                        Namun karena proses sublimasi yang berlangsung sangat lambat kita tidak dapat
                                        mengamati proses sublimasi secara visual seperti kita mengamati sublimasi pada
                                        dry
                                        ice. Kita hanya bisa memastikan terjadinya proses sublimasi pada kamper dengan
                                        cara
                                        mencium bau nya. Jika sebuah benda padat mengeluarkan bau yang tercium maka hal
                                        tersebut menandakan terjadinya proses sublimasi pada zat padat tersebut dimana
                                        sebagian molekulnya berubah menjadi gas yang bercampur dengan udara sehingga
                                        dapat
                                        tercium oleh indera manusia.</p>
                                    <p>Cara lainnya adalah dengan mengamati ukuran kamper dalam waktu yang agak lama.
                                        Jika
                                        kita perhatikan dengan seksama ukuran kamper akan terus mengecil. Mengecilnya
                                        ukuran
                                        kamper bukan karena proses erosi atau pemecahan struktur kristal (karenanya kita
                                        tidak akan melihat sisa residu bubuk kamper). Mengecilnya ukuran kamper terjadi
                                        karena molekul-molekul kamper secara konstan terus menyublim dan mengalir
                                        bersama
                                        udara disekitarnya.</p>
                                </div>
                                <p id="daftar-2-19" class="fw-bold"><span class="text-italic">Awe Experience:</span> Apa manfaat air,
                                    salju
                                    dan embun?</p>
                                <p>Pada pembahasan sebelumnya kita sudah mengetahui bahwa air di bumi dapat berada dalam
                                    3
                                    wujud yaitu padat, cair, dan gas. Dalam kehidupan sehari-hari kita sangat sering
                                    berinteraksi dengan air dan memanfaatkannya untuk memenuhi segala keperluan kita
                                    seperti
                                    minum, mencuci, mandi dsb. Namun, pernahkah kita memikirkan secara mendalam apakah
                                    air
                                    dalam bentuk padat (es) dan gas (uap air) juga memiliki manfaat dalam kehidupan
                                    kita?
                                    Jawabannya tentu saja ya.</p>
                                <p>Salju musiman merupakan bagian penting dari sistem iklim bumi. Tutupan salju membantu
                                    mengatur suhu permukaan bumi. Dalam skala besar, tutupan salju membantu mengatur
                                    pertukaran panas antara permukaan bumi dan atmosfer, atau keseimbangan energi bumi.
                                    Dalam skala yang lebih kecil, variasi tutupan salju dapat mempengaruhi pola cuaca
                                    regional. Misalnya, di Eropa dan Asia, hawa dingin yang disebabkan oleh tumpukan
                                    salju
                                    tebal dan tanah musim semi yang lembab dapat menggeser datangnya musim hujan musim
                                    panas
                                    dan mempengaruhi lamanya musim hujan berlangsung.</p>
                                <p>Beberapa fungsi salju bagi kehidupan di muka bumi diantaranya adalah.</p>
                                <p class="fw-bold">● Reflektansi</p>
                                <p>Tutupan salju merupakan variabel perubahan iklim yang penting karena pengaruhnya
                                    terhadap
                                    anggaran energi dan kelembaban. Tutupan salju memiliki pengaruh terbesar selama
                                    musim
                                    semi (April hingga Mei) di Belahan Bumi Utara, ketika siang hari menjadi lebih
                                    panjang
                                    dan jumlah sinar matahari meningkat di wilayah yang tertutup salju. </p>
                                <p>Reflektivitas salju yang tinggi membantu keseimbangan energi bumi karena memantulkan
                                    energi matahari kembali ke luar angkasa, sehingga membantu mendinginkan bumi. Salju
                                    dapat memantulkan 80 hingga 90 persen sinar matahari yang masuk dimana pepohonan,
                                    tumbuhan, dan tanah hanya memantulkan 10 hingga 30 persen sinar matahari. </p>
                                <p class="fw-bold">● Isolasi dan sifat termal</p>
                                <p>Sifat termal salju juga memiliki peran penting terhadap iklim. Salju bertindak
                                    seperti
                                    selimut penyekat. Di bawah salju setebal 30 sentimeter (1 kaki), tanah, dan
                                    organisme di
                                    dalamnya, terlindungi dari perubahan suhu udara di atas permukaan salju. Permukaan
                                    salju
                                    yang dingin dan lembab mempengaruhi banyaknya panas dan kelembaban yang bersirkulasi
                                    antara tanah dan atmosfer. Salju membantu melindungi tanah di bawahnya, menahan
                                    panas
                                    dan mencegah uap air menguap ke atmosfer. Bahkan di atas material beku lainnya,
                                    seperti
                                    lapisan es dan es sungai atau es laut, lapisan salju mencegah pembentukan es dengan
                                    cepat.</p>
                                <p class="fw-bold">● Pembersih Udara</p>
                                <p>Tanpa hujan dan salju, gas dan partikel dari aktivitas manusia (dan fenomena alam)
                                    mustahil untuk dapat dibersihkan. Salju membersihkan udara kita, membuat debu dan
                                    polusi
                                    menjadi hilang dari udara. Banyak partikel polusi udara yang berasal dari knalpot
                                    kendaraan seperti benzena, toluena, etilbenzena, dan xilena akan menempel pada salju
                                    yang turun. Bahkan salah satu bentuk polusi yang kurang terlihat, dapat dihilangkan
                                    dengan lebih baik oleh salju dibandingkan hujan adalah materi partikulat, yang
                                    dikenal
                                    sebagai PM yang merupakan partikel asap, debu, atau zat kimia yang sangat halus,
                                    yang
                                    berbentuk gas atau padatan. Partikel-partikel kecil ini jika terbawa di udara,
                                    menimbulkan masalah bagi orang yang menghirupnya, karena mereka dapat menumpuk di
                                    paru-paru dan memasuki aliran darah. Dengan kemampuan salju dalam membersihkan
                                    partikel-partikel tersebut maka akn menjadikan udara di daerah yang bersalju jauh
                                    lebih
                                    sehat dan menyegarkan.</p>
                                <p class="fw-bold">● Pelindung hewan dari musim dingin</p>
                                <p>Salju tebal dapat menghalangi beberapa hewan untuk mencari makanan, namun salju juga
                                    berfungsi seperti selimut, mengisolasi suhu udara di bawahnya. Beberapa hewan
                                    memanfaatkan isolasi salju. Salju baru terdiri dari sebagian besar udara yang
                                    terperangkap di antara akumulasi kristal salju. Karena udara hampir tidak bisa
                                    bergerak,
                                    perpindahan panas menjadi minimal. Beberapa hewan mengatasi musim dingin dengan
                                    membangun sarang atau liang pelindung dan tidur nyenyak dan lama, suatu proses yang
                                    disebut hibernasi. Untuk hewan yang tinggal didalam air seperti ikan, salju yang
                                    turun
                                    akan membentuk lapisan es di atas permukaan air yang berfungsi melindungi air di
                                    bawahnya agar tidak ikut membeku sehingga hewan air tetap dapat bertahan hidup.</p>
                                <p class="fw-bold">● Sumber Air tawar untuk keperluan rumah tangga dan pertanian</p>
                                <p>Setelah salju mencair, air membantu mengisi sungai dan waduk di banyak wilayah di
                                    dunia.
                                    Karena kemampuannya menyimpan air, salju disebut sebagai “reservoir”. Air salju yang
                                    mencair tersebut akan dapat dimanfaatkan oleh manusia sebagai sumber air tawar yang
                                    dapat digunakan untuk memenuhi kebutuhan sehari-hari di rumah tangga maupun untuk
                                    keperluan pertanian dan perkebunan.</p>
                                <p>Setelah kita mempelajari mengenai manfaat air dalam bentuk padat (es dan salju) dalam
                                    menunjang kehidupan bumi. Berikutnya kita akan mempelajari manfaat air dalam bentuk
                                    gas
                                    (uap air ) dalam menunjang kehidupan di bumi. Sama halnya dengan air dalam bentuk
                                    cair
                                    dan padat, air dalam bentuk gas juga memiliki peran penting dalam menjaga kehidupan
                                    di
                                    muka bumi. Beberapa manfaat uap air di atmosfer bumi diantaranya adalah.</p>
                                <p class="fw-bold">● Menjaga Suhu Bumi tetap hangat</p>
                                <p>Uap air merupakan gas rumah kaca yang paling melimpah di bumi. Hal ini bertanggung
                                    jawab
                                    atas sekitar setengah efek rumah kaca di bumi – proses yang terjadi ketika gas di
                                    atmosfer bumi memerangkap panas matahari. Gas rumah kaca membuat planet kita tetap
                                    layak
                                    huni. Tanpanya, suhu permukaan bumi akan menjadi lebih dingin sekitar 59 derajat
                                    Fahrenheit (33 derajat Celcius). Dengan penurunan suhu sebesar itu maka mustahil
                                    makhluk
                                    hidup di bumi dapat bertahan dengan perubahan suhu yang ekstrim antara siang hari
                                    dan
                                    malam hari.</p>
                                <p class="fw-bold">● Distributor air tawar ke seluruh permukaan bumi</p>
                                <p>Uap air merupakan bagian penting dari siklus air bumi. Melalui perlintasan udara dan
                                    angin, uap air akan berperan sebagai ‘distributor’ yang akan mengirimkan air tawar
                                    yang
                                    bersih menuju ke penjuru daratan. Uap air merupakan cikal bakal terbentuknya awan
                                    yang
                                    akan menjatuhkan air ke permukaan bumi melalui hujan maupun salju.</p>
                                <p class="fw-bold">● Sumber utama air murni/air suling alami</p>
                                <p>Air yang berada dalam bentuk gas/uap air merupakan sumber air murni yang akan turun  ke bumi dalam bentuk embun. Proses ini mirip seperti cara yang dilakukan manusia untuk mendapatkan air murni/air suling dengan cara mendidihkan air hingga diperoleh uap air dan kemudian mengembunkan kembali uap air tersebut sehingga diperoleh air murni. Dengan mekanisme alami yang terjadi di alam, uap air yang berada di udara sebagai hasil pemanasan sinar matahari, akan diembunkan ke permukaan bumi pada saat dini hari ketika suhu bumi berada di titik terendahnya. Pada saat itu uap air yang berada di udara akan berubah menjadi tetes embun yang menempel pada dinding, tumbuhan, tanah dan benda apapun yang berada di permukaan bumi yang langsung bersentuhan dengan udara. Embun yang membasahi permukaan bumi memiliki peran yang besar dalam menjaga kelembaban permukaan tanah dan tumbuhan.
                                <p id="daftar-2-20" class="fw-bold"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah dibalik turunnya hujan air, salju dan embun?</p>                                   
                                <p>Seperti yang sudah dijelaskan sebelumnya, dalam bentuk apapun (padat, cair dan gas)
                                    air
                                    selalu memiliki manfaat yang besar dalam menunjang kehidupan di muka bumi terutama
                                    bagi
                                    manusia. Dengan segala kelebihan dan kekurangannya air dalam ketiga wujudnya
                                    memainkan
                                    peran yang sangat signifikan dalam kehidupan manusia. Dengan sifat-sifat yang
                                    dimiliki
                                    oleh masing-masing wujud, air secara nyata memiliki kontribusi yang besar sebagai
                                    sumber
                                    kehidupan manusia dan makhluk lainya di muka bumi. Hal ini menegaskan kembali firman
                                    Allah SWT dalam Al-Quran surat Surat Al-Anbiya Ayat 30 yang menyatakan bahwa air
                                    merupakan sebab kehidupan segala makhluk hidup yang ada di bumi. </p>
                                <p>Hal ini membuktikan ke-Mahakuasaan Allah SWT dalam menetapkan setiap sunnatullah-Nya
                                    bagi
                                    segala ciptaan-Nya. Dengan ilmu dan Ketetapan-Nya, air dihadirkan ke muka bumi dalam
                                    wujud padat, cair dan gas yang masing-masing menjalankan perannya dalam menjaga
                                    keberlangsungan hidup manusia. Dengan segala keistimewaan-keistimewaan sifat yang
                                    telah
                                    Allah SWT tetapkan pada air, Allah SWT menunjukan Sifat Kasih Sayang nya kepada
                                    setiap
                                    makhluk yang ada di bumi dengan menyediakan suatu zat yang dapat memberikan
                                    penjagaan
                                    terhadap keberlangsungan hidup manusia beserta makhluk lainnya.</p>
                                <p>Diantara perbedaan manfaat yang dihadirkan oleh air dalam wujud padat, cair dan gas,
                                    ada
                                    pula kesamaan yang dimiliki oleh ketiga wujud zat tersebut yakni sebagai media
                                    pembersihan atau penyucian. Air dalam wujud cair dapat digunakan untuk membersihkan
                                    berbagai partikel-partikel kasar pengotor, adapun air dalam bentuk salju dapat
                                    membersihkan partikel-partikel yang lebih halus di atmosfer yang tidak dapat
                                    dibersihkan
                                    dengan air hujan. Sedangkan embun merupakan gambaran tertinggi dari kemurnian air
                                    yang
                                    dapat bermanfaat untuk detoksifikasi racun-racun yang ada pada tubuh manusia. Nabi
                                    Muhammad SAW telah mengajarkan pada kita lewat ajaran do’a iftitah yang senantiasa
                                    kita
                                    baca dalam sholat </p>
                                <p class="text-end">اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ، كَمَا بَاعَدْتَ
                                    بَيْنَ
                                    المَشْرِقِ وَالمَغْرِبِ، اللَّهُمَّ نَقِّنِي مِنَ الخَطَايَا كَمَا يُنَقَّى
                                    الثَّوْبُ
                                    الأَبْيَضُ مِنَ الدَّنَسِ، اللَّهُمَّ اغْسِلْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ
                                    وَالبَرَدِ</p>
                                <p class="fst-italic"><span class="fw-bold">Artinya:</span>“Ya Allah, jauhkanlah aku
                                    dari
                                    kesalahan dan dosa-dosaku sebagaimana engkau jauhkan antara timur dan barat. Ya
                                    Allah,
                                    bersihkanlah aku dari kesalahan dan dosa-dosaku sebagaimana bersihnya pakaian putih
                                    dari
                                    kotoran. Ya Allah cucilah aku dari dosa-dosaku dengan air, salju dan embun.”</p>
                                <p>
                                    Melalui bacaan do’a ini Rasulullah SAW memberikan sinyal pada kita di kalimat
                                    terakhir
                                    dengan menggambarkan air, salju dan embun sebagai media penyucian diri.
                                </p>
                            </div>
                            <!-- End Menyublim Dan Deposisi -->
                            <br>
                            <!-- Refleksi Kognitif -->
                            <div id="bagian-2-6">
                                <div class="bg-light bg-gradient border-top border-bottom border-dark">
                                    <div class="card-header border-0" id="headingSebelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSebelas"
                                                aria-expanded="true" onclick="buka_soal(11)">
                                                <i id="daftar-1-11" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Refleksi Kognitif
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSebelas" class="collapse" aria-labelledby="headingSebelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-11"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Refleksi Kognitif -->
                            <br>
                            <!-- Refleksi Spiritual -->
                            <div id="bagian-2-7">
                                <div class="bg-light bg-gradient border-top border-bottom border-dark">
                                    <div class="card-header border-0" id="headingDuabelas">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuabelas"
                                                aria-expanded="true" onclick="buka_soal(12)">
                                                <i id="daftar-1-12" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Refleksi Spiritual
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseDuabelas" class="collapse" aria-labelledby="headingDuabelas"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div id="isi-soal-12"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <br>
                            <h4 class="text-primary fw-bold">LATIHAN SOAL BAB 2</h4>
                            <div>
                                <ul>
                                1. Air (H<sub>2</sub>O) dapat berbentuk 3 wujud, yaitu padat, cair dan gas.
                                    <li>a. Jelaskan perbedaan mendasar struktur molekul air dalam keadaan padat, cair dan gas ?</li>
                                    <li>b. Jelaskan bagaimana perbedaan mendasar struktur molekul air dalam keadaan padat, cair dan gas memberikan nilai masa jenis air yang berbeda pada masing-masing wujud ?</li>
                                    <li>c. Berikan analisis, bagaimana es batu yang dimasukan kedalam segelas air akan mengambang di permukaan air ?</li>
                                    <li>d. Refleksikan bagaimana perbedaan masa jenis air dalam wujud padat dan cair mempngaruhi keberlangsungan kehidupan air ketika musim dingin ?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-2-1" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-2-1">Nilai:</p>
                                        <a onclick="simpan_essay(2,1)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>
                            <br>
                            <div>
                                <ul>
                                2. Suhu berperan penting dalam proses perubahan wujud air dari cair menjadi es.
                                    <li>a. Jelaskan bagaimana arah transfer kalor dalam perubahan wujud dari air menjadi es ?</li>
                                    <li>b. Jelaskan bagaimana proses pembekuan air dan faktor-faktor yang mempengaruhinya.</li>
                                    <li>c. Berikan analsisi, bagaimana struktur molekul air berubah selama proses pembekuan ?</li>
                                    <li>d. Refleksikan bagaimana pengetahuan tentang pembekuan air dapat membantu Anda dalam kegiatan pengelolaan makanan ?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-2-2" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-2-2">Nilai:</p>
                                        <a onclick="simpan_essay(2,2)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>
                            <br>
                            <div>
                                <ul>
                                3. Suhu berperan penting dalam proses perubahan wujud air dari cair menjadi gas.
                                    <li>a. Jelaskan bagaimana arah transfer kalor dalam perubahan wujud dari cair menjadi gas ?</li>
                                    <li>b. Jelaskan proses yang terjadi ketika air berubah dari cair menjadi gas ?</li>
                                    <li>c. Berikan analisis, apa yang terjadi pada molekul-molekul air selama proses perubahan wujud dari cair menjadi gas ?</li>
                                    <li>d. Refleksikan bagaimana proses penguapan air dapat mempengaruhi cuaca di suatu tempat.</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-2-3" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-2-3">Nilai:</p>
                                        <a onclick="simpan_essay(2,3)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>
                            <br>
                            <div>
                                <ul>
                                4. Suhu berperan penting dalam proses perubahan wujud air dari gas menjadi cair.
                                    <li>a. Jelaskan bagaimana arah transfer kalor dalam perubahan wujud dari air dari gas menjadi cair ?</li>
                                    <li>b. Jelaskan proses yang terjadi ketika air berubah dari gas menjadi cair ?</li>
                                    <li>c. Berikan analisis, apa yang terjadi pada molekul-molekul air selama proses perubahan wujud dari gas menjadi cair ?</li>
                                    <li>d. Refleksikan bagaimana suhu udara pada malam hari dapat mempegaruhi terbentuknya embun pada pagi hari ?</li>
                                </ul>
                            </div>
                            <div class="container mt-3">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="jawaban-essay-2-4" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                        </div>
                                        <p id="nilai-essay-2-4">Nilai:</p>
                                        <a onclick="simpan_essay(2,4)" type="submit" class="btn btn-primary">Simpan</a>
                                    </form>
                            </div>

                        </div>
                        <!-- End Refleksi Spiritual -->





                    </div>
                </div>
            </div>

            <!-- BAB 3 -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingSix">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="bagian-3" class="custom-accordion-title text-reset collapsed d-block"
                            data-bs-toggle="collapse" href="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix" onclick="controller_bab()">
                            Bagian 3 | SIKLUS AIR <i class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px;">
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
                            <p>Sekitar 71% permukaan bumi tertutup air, dan lautan menampung sekitar 96,5 persen seluruh
                                air di bumi namun dalam bentuk air asin. Air tawar tersebar di daratan dalam bentuk
                                sungai, danau, salju, gletser, air tanah dan uap air. Pada bagian ini kita akan membahas
                                bagaimana mekanisme persebaran air tawar melalui siklus hidrologi sehingga air dapat
                                tersebar ke seluruh daratan bahkan hingga menjangkau pegunungan tertinggi sekalipun.
                                Sebelum memulai belajar anda boleh menonton penjelasan mengenai siklus air pada link
                                video berikut.</p>
                            <br>
                            <div class="container mt-5">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="<?=base_url()?>assets/video/bab 3.mp4">
                                </video>
                            </div>
                            <!-- Persebaran Air di Muka Bumi -->
                            <div id="bagian-3-1">
                                <h3 id="daftar-3-1" class="fw-bold text-primary">Persebaran Air di Muka Bumi</h3>
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
                                                Check Your Prior Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <p id="daftar-3-3" class="fw-bold"><span class="text-primary">Combine Knowledge:</span> Sebagian besar
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
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.2.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.2</span> Ilustrasi
                                    proses
                                    terjadinya siklus air</p>
                                <p>Meskipun air secara terus menerus mengalami pergerakan, perpindahan tempat, perubahan
                                    wujud namun secara umum distribusi air di bumi dapat digambarkan pada grafik
                                    berikut.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <p id="daftar-3-5" class="fw-bold"><span class=text-primary>Awe Experience:</span> Apa manfaat gletser,
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.9.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.9</span> Oasis</p>
                                <p>Oasis dibentuk dari sungai bawah tanah atau akuifer seperti akuifer artesis, dimana
                                    air
                                    dapat mencapai ke permukaan melalui tekanan secara alami maupun melalui sumur buatan
                                    manusia. Hujan dan badai sesaat yang kadang kala terjadi menyediakan air bawah tanah
                                    yang mempertahankan keberadaan oasis.</p>
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <p id="daftar-3-6" class="fw-bold"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
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
                                <p class="text-end">وَهُوَ ٱلَّذِى مَدَّ ٱلْأَرْضَ وَجَعَلَ فِيهَا رَوَٰسِىَ
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
                                <p class="text-end">ثُمَّ قَسَتْ قُلُوبُكُم مِّنۢ بَعْدِ ذَٰلِكَ فَهِىَ كَٱلْحِجَارَةِ
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
                                <p class="text-end">وَإِذِ اسْتَسْقَى مُوسَى لِقَوْمِهِ فَقُلْنَا اضْرِبْ بِعَصَاكَ
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
                                <p class="text-end">فِيْهِمَا عَيْنٰنِ نَضَّاخَتٰنِۚ - </p>
                                <p class="fst-italic"><span class="fw-bold">Artinya:</span> "Di dalam keduanya ada dua
                                    mata
                                    air yang memancar tanpa henti." <span class="fw-bold">(QS Ar-Rahman : 66)</span></p>
                                <p>Selain itu, Allah SWT berfirman dalam Surat Al Insan ayat 6:</p>
                                <p class="text-end">عَيْنًا يَّشْرَبُ بِهَا عِبَادُ اللّٰهِ يُفَجِّرُوْنَهَا تَفْجِيْرًا
                                    –
                                </p>
                                <p class="fst-italic"><span class="fw-bold">Artinya:</span> "(yaitu) mata air (dalam
                                    surga)
                                    yang diminum oleh hamba-hamba Allah dan dapat mereka pancarkan dengan mudah." <span
                                        class="fw-bold">(QS Al Insan: 6)</span></p>
                                <p>Allah SWT juga berfirman dalam surat Al-baqarah ayat 25</p>
                                <p class="text-end">وَبَشِّرِ ٱلَّذِينَ ءَامَنُوا۟ وَعَمِلُوا۟ ٱلصَّٰلِحَٰتِ أَنَّ
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                            <!-- End Persebaran Air di Muka Bumi -->
                            <!-- Mekanisme Terjadinya Siklus Air -->
                            <div id="bagian-3-2">
                                <h3 class="fw-bold text-primary">Mekanisme Terjadinya Siklus Air</h3>
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Banyaknya uap air di atmosfer tidak menjamin akan berdampak pada banyaknya awan
                                        yang
                                        terbentuk. Untuk terjadinya awan diperlukan proses kondensasi/pengembunan dimana
                                        suhu uap air di atmosfer turun sehingga uap air berubah kembali menjadi titik
                                        air
                                        sebagai cikal bakal terbentuknya awan. Ketika udara tetap panas sepanjang hari
                                        maka
                                        uap air akan tetap berada di udara dalam bentuk uap air dan tidak terkondensasi
                                        membentuk awan.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Penggundulan hutan atau deforestasi dapat mempengaruhi siklus hidrologi karena
                                        saat
                                        pohon ditebang maka air yang diuapkan dalam proses transpirasi ke atmosfer
                                        berkurang.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-italic">Check Your Answer</p>
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.35.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.35</span>Perbandingan
                                    ukuran uap air, tetes awan dan tetes hujan</p>
                                <p>Jika awan lebih dingin, seperti di tempat yang lebih tinggi, tetesan air mungkin
                                    membeku
                                    dan membentuk es. Kristal es ini kemudian jatuh ke bumi sebagai salju, hujan es,
                                    atau
                                    hujan, bergantung pada suhu di dalam awan dan di permukaan bumi. </p>
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <p class="fw-bold text-italic">Hujan Salju (Snow)</p>
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Hujan asam adalah istilah luas yang mencakup segala bentuk presipitasi dengan
                                        komponen asam, seperti asam sulfat atau asam nitrat yang jatuh ke tanah dari
                                        atmosfer. Hal ini dapat berupa hujan, salju, kabut, hujan es, atau bahkan debu
                                        yang
                                        bersifat asam.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
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
                                        <div class="container mt-5 d-flex justify-content-center">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.51.png"
                                                class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="text-primary fw-bold">Gambar
                                                3.51</span>Tanah
                                            miring yang tidak ditumbuhi tumbuhan akan memiliki potensi longsor ketika
                                            turun
                                            hujan</p>
                                        <div class="container mt-3">
                                            <div class="row align-items-center">
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
                                            <div class="row align-items-center">
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
                                            <div class="row align-items-center">
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
                                <p id="daftar-3-20" class="text-primary"><span class="fst-italic">COLLECTION/</span>PENGUMPULAN</p>
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
                                    <p>Dalam skala global, ketinggian muka air tanah akan sejajar dengan ketinggian air
                                        kolam, air danau dan air laut (berdasarkan hukum fisika, air yang terhubung akan
                                        memiliki ketinggian yang sama). Jadi selama air laut masih ada, maka air dalam
                                        tanah
                                        juga akan tetap tersedia.</p>
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <p id="daftar-3-22" class="fw-bold"><span class="text-primary">Awe Experience:</span> Peran Troposfer
                                    dalam
                                    Siklus Air</p>
                                <p>Atmosfer bumi tersusun dari berbagai lapisan, dimana pada setiap lapisannya memiliki
                                    karakteristik yang berbeda satu sama lain sehingga menghasilkan fungsi yang berbeda
                                    juga. Troposfer adalah lapisan atmosfer bumi yang paling rendah. Ini mengandung 75%
                                    dari
                                    total massa atmosfer planet dan 99% dari total massa uap air dan aerosol.</p>
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <p id="daftar-3-23" class="fw-bold"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <p class="text-end">ٱلَّذِى جَعَلَ لَكُمُ ٱلْأَرْضَ فِرَٰشًا وَٱلسَّمَآءَ بِنَآءً
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
                                <p class="text-end">وَسَخَّرَ لَكُمْ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ جَمِيعًا
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
                            <!-- End Mekanisme Siklus Air -->
                            <!-- Jenis-Jenis Siklus Air -->
                            <div id="bagian-3-3">
                                <h3 id="daftar-3-24" class="text-primary">Jenis-Jenis Siklus Air</h3>
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                                Apply Knowledge
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
                                    <p class="text-primary">Check Your Answer</p>
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                    <div class="container mt-5 d-flex justify-content-center">
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
                                <p id="daftar-3-29" class="fw-bold"><span class="text-primary">Awe Experience:</span> Peran Angin dalam
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 3.74.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="text-primary fw-bold">Gambar 3.74</span>Angin
                                    dlembah
                                    dan angin gunung</p>
                                <p>Dalam siklus hidrologi, peristiwa angin lembah dan angin gunung berperan penting
                                    dalam
                                    menggerakan awan menuju daerah pegunungan sehingga dapat terjadi siklus air panjang.
                                </p>
                                <p id="daftar-3-30" class="fw-bold"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <div class="container mt-5 d-flex justify-content-center">
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
                                <p class="text-end">وَهُوَ ٱلَّذِى يُنَزِّلُ ٱلْغَيْثَ مِنۢ بَعْدِ مَا قَنَطُوا۟
                                    وَيَنشُرُ
                                    رَحْمَتَهُۥ ۚ وَهُوَ ٱلْوَلِىُّ ٱلْحَمِيدُ</p>
                                <p class="fst-italic">Artinya: "Dan Dialah Yang menurunkan hujan sesudah mereka berputus
                                    asa
                                    dan menyebarkan rahmat Nya Dan Dialah Yang Maha Pelindung lagi Maha Terpuji". <span
                                        class="fw-bold">(QS Asy Syuura 28)</span></p>
                                <p>Firman Allah SWT yang lain mengenai hujan dalam Al quran terdapat dalam surah Ar Rum
                                    ayat
                                    48 sebagai berikut</p>
                                <p class="text-end">ٱللَّهُ ٱلَّذِى يُرْسِلُ ٱلرِّيَٰحَ فَتُثِيرُ سَحَابًا فَيَبْسُطُهُۥ
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
                                <p class="text-end">أَلَمْ تَرَ أَنَّ ٱللَّهَ يُزْجِى سَحَابًا ثُمَّ يُؤَلِّفُ بَيْنَهُۥ
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
                            <!-- End Jenis-Jenis Sikluas Air -->
                            <!-- Refleksi Kognitif -->
                            <div id="bagian-3-4">
                                <div class="bg-primary">
                                    <div class="card-header border-0" id="headingDuatiga">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuatiga"
                                                aria-expanded="true" onclick="buka_soal(23)">
                                                <i id="daftar-1-23" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Refleksi Kognitif
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
                            <!-- End Refleksi Kognitif -->
                            <br>
                            <br>
                            <!-- Refleksi Spiritual -->
                            <div id="bagian-3-5">
                                <div class="border-top border-bottom border-dark">
                                    <div class="card-header border-0" id="headingDuaempat">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseDuaempat"
                                                aria-expanded="true" onclick="buka_soal(24)">
                                                <i id="daftar-1-24" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                Refleksi Spiritual
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
                                <br>
                                    <h4 class="text-primary fw-bold">LATIHAN SOAL BAB 3</h4>
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
                            <!-- End -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- UJIAN SOAL -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTwo">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="bagian-3" class="custom-accordion-title text-reset collapsed d-block"
                            data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            UJIAN SOAL <i class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px;">
                            <div class="card-header border-0" id="headingSoalSatu">
                                <h5 class="accordion-faq m-0">
                                    <a class="text-dark" data-bs-toggle="collapse" href="#collapseSoalSatu"
                                        aria-expanded="true">
                                        <i id="daftar-1-3" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                        Tes Pemahaman Konsep
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSoalSatu" class="collapse" aria-labelledby="headingSoalSatu"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-grow-1 bd-highlight">
                                            <div class="timer fs-4" id="timerSatu">     
                                            <p> Session Time</p> 
                                            </div>
                                            </div>
                                            <div class="p-2 bd-highlight"></div>
                                            <div class="p-2 bd-highlight">
                                                <button id="btn-mulai-satu" class="btn btn-info btn-rounded" onclick="intCount(1)"><i class="fa fa-play"></i> Mulai</button>
                                            </div>
                                        </div>
                                        <div>
                                            <ul>
                                            1. Jelaskan mengapa ikatan antar molekul air menghasilkan struktur amorf (tidak teratur) sehingga air wujudnya cair?
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                <form id="form-ujian-soal-satu">
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_1" name="soal_1_1" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            2. Jelaskan bagaimana hubungan antara polaritas air dengan sifat  kohesi, adhesi dan kapilaritas?
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_2" name="soal_1_2" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            3. Jelaskan mengapa kita dapat melihat air, dapat melihat es, tetapi tidak dapat melihat uap air di sebuah ruangan?
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_3" name="soal_1_3" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            4. Jelaskan mengapa untuk membekukan air harus melalui proses pendinginan pada freezer!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                               
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_4" name="soal_1_4" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            5. Jelaskan mengapa tidak setiap awan dapat menurunkan hujan!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_5" name="soal_1_5" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            6. Jelaskan mengapa tetes  air yang jatuh bentuknya bulat-bulat?
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_6" name="soal_1_6" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            7. Jelaskan mengapa di wilayah iklim tropis dapat dijumpai hujan batu es tetapi tidak dijumpai hujan salju!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_7" name="soal_1_7" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            8. Jelaskan mengapa daur hidrologi dapat menghasilkan air hujan yang bersih!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_8" name="soal_1_8" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            9. Jelaskan fungsi hutan tropis dalam konteks siklus air!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_9" name="soal_1_9" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            10. Jelaskan bagaimana pohon-pohon yang rindang dapat mencegah terjadinya banjir bandang saat hujan lebat terjadi!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_10" name="soal_1_10" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            11. Jelaskan mengapa awan cumulonimbus disebut sebagai jalur maut bagi penerbangan!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                               
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_11" name="soal_1_11" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            12. Jumlah air di Bumi relatif tetap, yang berubah ubah itu jumlah air dalam fase tertentu misalnya fase padat es atau fase air cair. Kaitannnya dengan isu pemanasan global, bagaimana kecenderungan jumlah air dalam bentuk padat, cair dan gas dari tahun ke tahun? bertambah atau berkurang? Jelaskan!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_12" name="soal_1_12" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            13. Beberapa tahun belakangan ini, banyak mata air yang hilang padahal sangat dibutuhkan masyarakat, Mengapa terjadi demikian? Jelaskan!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="soal_1_13" name="soal_1_13" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                    </div>
                                                
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            14. Beberapa tahun terakhir ini dapat diamati bahwa jika datang musim hujan akan terjadi banjir di mana mana, dan ketika datang musim kemarau terjadi kekeringan di mana-mana, Mengapa demikian? Jelaskan!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">    
                                            <div class="mb-3">
                                                <textarea class="form-control" id="soal_1_14" name="soal_1_14" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <ul>
                                            15. Apa saja aktivitas manusia yang dapat memberikan pengaruh negatif terhadap laju siklus hidrologi? jelaskan dampaknya bagi kehidupan makhluk hidup di bumi!
                                            </ul>
                                        </div>
                                        <div class="container mt-3">
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="soal_1_15" name="soal_1_15" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                                </div>
                                            </form>
                                            <button onclick="simpan_ujian_soal(1)" id="simpan_ujian_soal_satu" class="btn btn-primary">Simpan</button>
                                        </div>
                                </div>
                            </div>
                            <!-- END Test Pemahaman Konsep -->
                            <br>
                            <br>
                            <h5 class="text-primary fw-bold text-center">Tes Keterampilan Berpikir Reflektif</h5>
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                    <div class="timer fs-4" id="timerDua">     
                                    <p> Session Time</p> 
                                    </div>
                                    </div>
                                    <div class="p-2 bd-highlight"></div>
                                    <div class="p-2 bd-highlight">
                                        <button id="btn-mulai-dua" class="btn btn-info btn-rounded" onclick="intCount(2)"><i class="fa fa-play"></i> Mulai</button>
                                    </div>
                                </div>
                                <div>
                                    <ul>
                                    1. Perhatikan gambar berikut
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.1.png" class="img-fluid mx-auto d-block" style="max-width: 50%;"></li>
                                        <li>Molekul air terbentuk dari atom oksigen yang memiliki nomor atom 8 dan atom hidrogen yang memiliki nomor atom 1.</li>
                                        <li>a. Jelaskan bagaimana karakteristik ikatan kovalen?</li>
                                        <li>b. Berikan analisis bagaimana ikatan kovalen yang terbentuk pada molekul air?</li>
                                        <li>Berikan analisis dampak apa saja yang dapat ditimbulkan dari ikatan kovalen antar atom penyusun air terhadap karakteristik molekul air ditinjau dari polaritasnya?</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                        <form id="form-ujian-soal-dua">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="soal_2_1" name="soal_2_1" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                            </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    2. Perhatikan gambar berikut
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.2.png" class="img-fluid mx-auto d-block" style="max-width: 50%;"></li>
                                        <li>Grafik diatas menunjukan nilai titik didih unsur-unsur pada periode 2, 3, 4 dan 5 ketika bersenyawa dengan unsur hidrogen (H). Berdasaran tabel periodik, semakin besar periode suatu unsur maka semakin besar pula nomor atom dan massa atomnya</li>
                                        <li>a. Jelaskan apa itu Mr dan bagaimana nilai Mr dapat berpengaruh terhadap gaya ikat antar molekul dan titik didih suatu molekul</li>
                                        <li>b. Berdasarkan grafik diatas apakah anda melihat penyimpangan perilaku titik didih pada unsur yang berada pada periode 2 dilihat dari nilai Mr nya? Berikan analisis terhadap jawaban anda.</li>
                                        <li>c. Berikan analisis apa yang menyebabkan terjadi penyimpangan perilaku titik didih pada unsur O, F dan N ketika bersenyawa dengan atom hidrogen?</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_2" name="soal_2_2" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    3. Perhatikan gambar berikut
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.3.png" class="img-fluid mx-auto d-block" style="max-width: 50%;"></li>
                                        <li>Salah satu kelebihan air (H<sub>2</sub>O) adalah kemampuannya dalam melarutkan zat lain lebih banyak dibanding dengan zat cair lainnya sehingga air disebut sebagai pelarut universal.</li>
                                        <li>a. Jelaskan bagaimana mekanisme terjadinya pelarutan suatu zat dalam air ditinjau dari ikatan antar molekul?</li>
                                        <li>b. Ketika beberapa sendok gula pasir dilarutan kedalam segelas air maka terdapat beberapa partikel dari pasir yang larut dalam air (ditandai dengan air yang keruh) dan beberapa partikel lainnya mengendap di dalam air. Berikan analisis mengapa terjadi demikian?</li>
                                        <li>c. Prediksikan apa yang akan terjadi pada ikatan molekul air dan gula jika campuran antara gula pasir dan air di aduk secara konstan atau dipanaskan sampai mendidih?</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_3" name="soal_2_3" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    4. Perhatikan gambar berikut
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.4.png" class="img-fluid mx-auto d-block" style="max-width: 50%;"></li>
                                        <li>Salah satu pemanfaatan karakteristik zat cair adalah pada sistem hidrolik yang dapat dimanfaatkan pada kendaraan berat.</li>
                                        <li>a. Jelaskan karakteristik apa saja yang membedakan zat cair dibanding zat padat dan gas</li>
                                        <li>b. Berikan analisis, menurut anda karakteristik zat cair yang manakah yang dimanfaatkan dalam membuat sistem hidrolik?</li>
                                        <li>c. Prediksikan kelemahan apa saja yang akan terjadi jika sistem semacam sistem hidrolik menggunakan zat padat atau gas?</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_4" name="soal_2_4" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    5. Perhatikan gambar berikut
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.5.png" class="img-fluid mx-auto d-block" style="max-width: 50%;"></li>
                                        <li>Asap atau kabut yang biasa kita saksikan dalam sebuah pertunjukan merupakan gas yang dihasilkan dari  es kering (dry ice) yang berasal dari molekul-molekul karbon dioksida (CO2) yang merupakan molekul non polar didinginkan hingga suhu -78oC sehingga berubah wujud menjadi karbondioksida padat dengan ikatan antar molekul berupa ikatan van der waals lemah.<img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.5.1.png" class="img-fluid mx-auto d-block" style="max-width: 50%;">Diagram berikut menunjukan perubahan fase padat, cair dan gas pada CO2 yang dipengaruhi oleh tekanan dan temperatur.</li>
                                        <li>a. Jelaskan bagaimana peran suhu dan tekanan dalam perubahan wujud benda dan kaitannya dengan energi ikat antar molekul.</li>
                                        <li>b. Ketika dry ice dikeluarkan dari mesin pendingin ke suhu ruangan, berikan analisis bagaimana mekanisme perubahan wujud pada dry ice dari wujud padat ke wujud gas ditinjau dari transfer kalor dan energi ikat antar molekulnya? Mengapa pada perubahan wujud tersebut tidak melalui wujud cair terlebih dahulu.</li>
                                        <li>c. Berdasarkan grafik, titik triple poin terjadi pada suhu -57oC dan tekanan 5.2 atm, prediksikan apa yang terjadi pada ikatan molekul dry ice sehingga pada kondisi tersebut dry ice dapat berada pada tiga wujud (padat, cair dan gas) secara bersamaan.</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_5" name="soal_2_5" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    6. Perhatikan gambar berikut
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.6.png" class="img-fluid mx-auto d-block" style="max-width: 50%;"></li>
                                        <li>Saat hari sedang hujan, pengendara mobil akan menemukan kaca mobilnya berembun.</li>
                                        <li>a. Jelaskan bagaimana proses pengembunan dapat terjadi serta kaitannya dengan transfer kalor?</li>
                                        <li>b. Berikan analisis bagaimana tetes embun dapat muncul pada permukaan kaca bagian dalam mobil pada saat udara diluar hujan?</li>
                                        <li>c. Prediksikan apa yang akan terjadi pada embun yang terdapat pada kaca mobil tersebut jika pengendara mobil menyalakan ac didalam mobil dengan suhu yang lebih rendah dari suhu diluar mobil atau lebih tinggi dari suhu di luar ruangan?</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_6" name="soal_2_6" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    7. Salah satu peristiwa menyublim yang paling sering dicontohkan dalam kehidupan sehari-hari adalah pada kamper (kapur barus). Secara struktur kimia kamper biasanya dibuat secara sintetis dari molekul naftalena atau yang dalam rumus kimia C10H8 yang memiliki titik lebur 78.2 °C dan titik didih 217.97 °C.
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.7.png" class="img-fluid mx-auto d-block" style="max-width: 50%;">
                                    Senyawa Naphtalene merupakan senyawa non polar sehingga dalam bentuk kristal (padat) ikatan yang terjadi adalah ikatan van der waals jenis dispersi gaya london
                                        <li>a. Jelaskan apa perbedaan antara melebur, mendidih, menguap dan menyublim?</li>
                                        <li>b. Berikan analisis bagaimana kamper dapat menyublim (berubah dari padat ke gas tanpa melalui fase cair) pada suhu kamar?</li>
                                        <li>c. Jika kamper memiliki titik lebur 78.2°C dan titik didih 217.97°C. Berikan prediksi apa yang akan terjadi pada struktur molekul kamper Jika kamper dipanaskan hingga suhu 150°C.?</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_7" name="soal_2_7" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    8. Musim kemarau dintandai dengan cuaca panas disiang hari disertai penurunan curah hujan dengan pola yang tidak menentu dalam kurun waktu tertentu.
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.8.png" class="img-fluid mx-auto d-block" style="max-width: 50%;">
                                    Pada musim kemarau, hujan jarang terjadi menyebabkan di sebagian tempat mengalami kekeringan tanah.
                                        <li>a. Jelaskan bagaimana proses terbentuknya tetes hujan dari awan, dimulai dari proses panguapan air yang berada di permukaan bumi?</li>
                                        <li>b. Terik matahari di musim kemarau menyebabkan peguapan air di permukaan bumi lebih tinggi daripada musim dingin yang berarti bahwa semakin besar potensi terbentuknya awan. Berikan analisis mengapa awan yang terbentuk di musim kemarau sangat jarang yang dapat berubah menjadi tetes air hujan?</li>
                                        <li>c. Berikan prediksi apa yang membedakan laju siklus hidrologi pada musim hujan dan musim kemarau</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_8" name="soal_2_8" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    9. Karena sifat polaritasnya, saat air bergerak dipermukaan atau dalam tanah, ia akan melarutkan berbagai garam mineral sehingga terkonsentrasi dilaut menjadi air yang memiliki rasa asin.
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.9.png" class="img-fluid mx-auto d-block" style="max-width: 50%;">
                                    Namun saat air laut menguap dan berubah menjadi awan, curah curah hujan yang turun dari awan selalu berupa air tawar, meskipun air tersebut berasal dari air laut yang asin.
                                        <li>a. Jelaskan bagaimana sifat polaritas dapat menjadikan air memiliki kemampuan untuk melarutkan garam mineral yang terdapat pada tanah</li>
                                        <li>b. Berikan analisis bagaimana panas matahari menyebabkan proses penguapan air laut yang asin, dapat memisahkan  antara molekul air dan molekul garam yang terlarut didalamnya sehingga menghasilkan uap air yang tawar.</li>
                                        <li>c. Meskipun air hujan merupakan air tawar, terkadang pada saat mencapai permukaan tanah air hujan sudah berubah menjadi air yang terasa asam (hujan asam). Prediksikan apa yang terjadi pada saat perjalanan tetes air hujan jatuh melewati lapisan udara sehingga menjadikan air hujan tersebut menjadi asam.</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_9" name="soal_2_9" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                    10. Berdasarkan siklus hidrologi, pada saat air hujan jatuh di permukaan tanah didataran tinggi, maka air hujan tersebut akan terbagi dua, sebagian akan melakukan proses infiltrasi dan sebagaian lagi melakukan proses runoff
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.10.png" class="img-fluid mx-auto d-block" style="max-width: 50%;">
                                    Proses infiltrasi berkontribusi dalam penyediaan air dalam tanah sedangkan proses runoff berkontribusi dalam penyediaan air permukaan tanah.
                                        <li>a. Jelaskan faktor apa saja yang berpengaruh terhadap banyaknya air hujan yang mengalami infiltrasi dan surface runoff. Bagaimana kedua proses itu saling berpengaruh satu sama lain</li>
                                        <li>b. Berikan analisis apa yang menyebabkan terjadinya tanah longsor, banjir bandang dan kekosongan air tanah ditinjau dari proses infiltrasi dan surface runoff?</li>
                                        <li>c. Berikan prediksi aktivitas apa saja yang dilakukan manusia yang akan berpengaruh secara positif dan negatif terhadap proses infiltrasi dan surface runoff?Berikan penjelasan.</li>
                                    </ul>
                                </div>
                                <div class="container mt-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="soal_2_10" name="soal_2_10" rows="5" placeholder="Tulis jawaban di sini..."></textarea>
                                    </div>
                                    </form>
                                    <button onclick="simpan_ujian_soal(2)" id="simpan_ujian_soal_dua" class="btn btn-primary">Simpan</button>
                                </div>
                                <br>
                                <h5 class="text-primary fw-bold text-center">Angket Sikap Spiritual</h5>
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                    <div class="timer fs-4" id="timerTiga">     
                                    <p> Session Time</p> 
                                    </div>
                                    </div>
                                    <div class="p-2 bd-highlight"></div>
                                    <div class="p-2 bd-highlight">
                                        <button id="btn-mulai-tiga" class="btn btn-info btn-rounded" onclick="intCount(3)"><i class="fa fa-play"></i> Mulai</button>
                                    </div>
                                </div>
                                <div>
                                    <form id="form-ujian-soal-tiga">
                                    <?php
                                    $number = 1; 
                                    foreach($soal_angket as $s){
                                    ?>
                                    <p><?=$number++?>. <?=$s->soal_angket?></p>
                                    <div class="col-12">
                                        <div class="container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="soal_3_<?=$s->id_soal?>"
                                                        value="Meningkat" id="u-1">
                                                    <label class="form-check-label" for="u-1">
                                                    Meningkat
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="soal_3_<?=$s->id_soal?>"
                                                        value="Tetap" id="u-2">
                                                    <label class="form-check-label" for="u-2">
                                                    Tetap
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="soal_3_<?=$s->id_soal?>"
                                                        value="Menurun" id="u-3">
                                                    <label class="form-check-label" for="u-3">
                                                    Menurun
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </form>
                                    <button onclick="simpan_ujian_soal(3)" id="simpan_ujian_soal_tiga" class="btn btn-primary">Simpan</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
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
            dataType: "JSON",
            success: function(data)
            {
                if (data.bab[0].status_bab == 1) {
                    $('#bagian-1').removeClass("disabled");
                    if (data.subbab[0].status_subbab == 1) {
                        $('#bagian-1-1').show();
                    } else{
                        $('#bagian-1-1').hide();
                    }
                    if (data.subbab[1].status_subbab == 1) {
                        $('#bagian-1-2').show();
                    } else{
                        $('#bagian-1-2').hide();
                    }
                    if (data.subbab[2].status_subbab == 1) {
                        $('#bagian-1-3').show();
                    } else{
                        $('#bagian-1-3').hide();
                    }
                    if (data.subbab[3].status_subbab == 1) {
                        $('#bagian-1-4').show();
                    } else{
                        $('#bagian-1-4').hide();
                    }
                    if (data.subbab[4].status_subbab == 1) {
                        $('#bagian-1-5').show();
                    } else{
                        $('#bagian-1-5').hide();
                    }
                } else {
                    $('#bagian-1').addClass("disabled");
                }
                if (data.bab[1].status_bab == 1) {
                    $('#bagian-2').removeClass("disabled");
                } else {
                    $('#bagian-2').addClass("disabled");
                }
                if (data.bab[2].status_bab == 1) {
                    $('#bagian-3').removeClass("disabled");
                } else {
                    $('#bagian-3').addClass("disabled");
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