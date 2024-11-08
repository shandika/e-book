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
            <h3 class="page-title">Bagian 1 | STRUKTUR MOLEKUL AIR</h3>
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
                <div class="card-header border-0" id="headingOne">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-learning-outcome" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            LEARNING OUTCOME <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 25px;">
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
                        </div>  
                        <!-- End Refleksi Spiritual -->
                    </div>
                </div>
            </div>
            <!-- END LEARNING OUTCOME -->
            <!-- Video -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTwo">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-video" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            VIDEO <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
                        </div>  
                        <!-- End Refleksi Spiritual -->
                    </div>
                </div>
            </div>
            <!-- END Video -->
            <!-- Ikatan Antar Atom Penyusun Molekul Air -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTree">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-ikatan-atom" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
                            IKATAN ANTAR ATOM PENYUSUN MOLEKUL AIR <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTree" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 25px">
                            <div id="bagian-1-1">
                                    <h3 id="daftar-1-1" class="text-primary fw-bold">Ikatan Antar Atom Penyusun Molekul Air
                                    </h3>
                                    <p>Mengingat Rumus kimia air adalah H<sub>2</sub>O, maka hal tersebut menunjukkan bahwa setiap
                                        molekul air mengandung satu atom oksigen dan dua atom hidrogen dimana ketiga atom tersebut
                                        dihubungkan melalui ikatan kovalen.</p>
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                        <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.1.png" class="img-fluid">
                                    </div>
                                    <p class="text-center"><span class="text-primary fw-bold">Gambar 1.1</span> Ilustrasi
                                        molekul air (H<sub>2</sub>O)</p>
                                    <div class="bg-primary">
                                        <div class="card-header border-0" id="headingSatu">
                                            <h5 class="accordion-faq m-0">
                                                <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatu"
                                                    aria-expanded="true" onclick="buka_soal(1)">
                                                    <i id="daftar-1-1" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                    <p class ="fs-5 fw-bold text-primary">Check Previous Knowledge</p>
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
                                        <div class="card-header border-0" id="headingSatuSatu">
                                            <h5 class="accordion-faq m-0">
                                                <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuSatu"
                                                    aria-expanded="true" onclick="check_answer(1)">
                                                    <i id="chehck-1" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                    <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-answer-1" class="collapse" aria-labelledby="headingSatuSatu"
                                            data-bs-parent="#accordion">
                                            
                                            <p>Ikatan kovalen adalah ikatan yang terbentuk dari pemakaian bersama pasangan
                                            elektron antara dua atom. Pasangan elektron yang berpartisipasi dalam jenis ikatan ini
                                            disebut pasangan bersama atau pasangan ikatan. Berbagi pasangan ikatan akan memastikan
                                            bahwa atom mencapai stabilitas di kulit terluarnya, yang mirip dengan atom gas mulia.
                                            Ikatan kovalen termasuk ikatan yang kuat antar atom</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 400px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 300px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 300px;">
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
                                    </div>
                                    <br>
                                    <p id="daftar-1-3" class="text-primary fw-bold fs-5"><span class="text-primary">Combine Knowledge</span>
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
                                    <div class="container mt-5 d-flex justify-content-center" style = "width : 300px;">
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
                                                        <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
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
                                        <div class="card-header border-0" id="headingSatuDua">
                                            <h5 class="accordion-faq m-0">
                                                <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuDua"
                                                    aria-expanded="true" onclick="check_answer(2)">
                                                    <i id="chehck-2" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                    <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-answer-2" class="collapse" aria-labelledby="headingSatuDua"
                                            data-bs-parent="#accordion">

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
                                            <div class="container mt-5 d-flex justify-content-center" style = "width : 300px;">
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
                                            <p>Contoh senyawa kovalen non-polar adalah karbon dioksida (CO<sub>2</sub>). Secara ikatan
                                                molekul,
                                                CO<sub>2</sub>
                                                dan H<sub>2</sub>O sebenarnya sama-sama mempunyai ikatan polar, tetapi hanya H<sub>2</sub>O yang
                                                merupakan
                                                molekul polar. Hal ini disebabkan karena dua atom Oksigen dan Karbon dioksida
                                                bersifat
                                                simetris sehingga tarikan dua oksigen pada elektron karbon saling menghilangkan,
                                                sehingga merupakan molekul nonpolar dengan ikatan polar. Sedangkan pada molekul
                                                air
                                                dua
                                                atom Hidrogen dan atom oksigen tidak simetris sehingga dihasilkan neto dipol.
                                            </p>
                                            <div class="container mt-5 d-flex justify-content-center" style = "width : 300px;">
                                                <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.7.png" class="img-fluid">
                                            </div>
                                            <p class="text-center"><span class="text-primary fw-bold">Gambar 1.7
                                                </span>Perbedaan
                                                polaritas pada molekul CO<sub>2</sub> dan H<sub>2</sub>O</p>
                                        </div>
                                        
                                    </div>
                                    <br>
                                    <p id="daftar-1-5" class="text-primary fw-bold fs-5"><span class="text-primary fw-bold">Awe
                                            Experience</span>: Tahukah anda bagaimana reaksi yang
                                            terjadi antara hidrogen
                                            dan oksigen untuk dapat menghasilkan air?</p>
                                    <p>Walaupun secara teoritik untuk dapat menghasilkan molekul air terlihat cukup mudah,
                                        yakni
                                        cukup dengan mencampurkan dua molekul gas hidrogen (H2) dan satu molekul oksigen
                                        (O2)
                                        sehingga terbentuk dua molekul air (H<sub>2</sub>O) Air adalah nama umum untuk dihidrogen
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
                                            <p id="daftar-1-6" class="text-primary fw-bold fs-5"><span class="text-primary fw-bold">Spiritual
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
                                            <p class="text-end fs-3">وَأَنزَلْنَا مِنَ ٱلسَّمَآءِ مَآءًۢ بِقَدَرٍ
                                                فَأَسْكَنَّٰهُ
                                                فِى ٱلْأَرْضِ ۖ
                                                وَإِنَّا عَلَىٰ ذَهَابٍۭ بِهِۦ لَقَٰدِرُونَ</p>
                                            <p class="fst-italic">”Dan Kami turunkan air dari langit menurut suatu ukuran;
                                                lalu
                                                Kami jadikan air
                                                itu menetap di bumi, dan sesungguhnya Kami benar-benar berkuasa
                                                menghilangkannya” <span class="fw-bold">(Q.S. Al- Mu’minuun : 18)</span></p>
                                            <p>Dalam Q.S. Az – Zukhruf ayat 11 Allah SWT juga berfirman sebagai berikut:</p>
                                            <p class="text-end fs-3">وَٱلَّذِى نَزَّلَ مِنَ ٱلسَّمَآءِ مَآءًۢ بِقَدَرٍ
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
                            </div>  
                    </div>
                </div>
            </div>
            <!-- END Ikatan Antar Atom Penyusun Molekul Air -->
            <!-- Ikatan Antar Molekul Penyusun Air -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingFour">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-ikatan-molekul" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            IKATAN ANTAR MOLEKUL PENYUSUN AIR <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Check Previous Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuTiga">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuTiga"
                                                aria-expanded="true" onclick="check_answer(3)">
                                                <i id="chehck-3" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-3" class="collapse" aria-labelledby="headingSatuTiga"
                                        data-bs-parent="#accordion">
                                        <p>Terdapat dua jenis gaya yang dapat menyebabkan terjadinya ikatan antar molekul
                                            sejenis pada suatu zat padat atau zat cair, yaitu <strong>gaya van der
                                                waals</strong> dan <strong>ikatan hidrogen</strong> Gaya Van der Waals
                                            terbagi lagi menjadi <strong>Gaya London</strong> dan <strong>Gaya
                                                Dipol-dipol.</strong></p>
                                        <p><strong>Gaya London</strong> adalah gaya tarik-menarik dipol yang terjadi pada
                                            molekul non-polar. Gaya London terjadi akibat terbentuknya dipol sesaat, dan
                                            memiliki daya tarik-menarik yang lemah, karena hanya terjadi sesaat.</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.12.png" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 1.12</span>
                                            Ilustrasi
                                            gaya ikatan hidrogen pada molekul HF</p>
                                        <p>Atom F memiliki radius 135 pm dan 1 buah elektron bebas yang tidak berpasangan
                                            sehingga membentuk ikatan hidrogen pada molekul HF</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.13.png" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 1.13</span>
                                            Ilustrasi
                                            gaya ikatan hidrogen pada molekul H2O</p>
                                        <p>Atom O memiliki radius 152 pm dan 2 buah elektron bebas yang tidak berpasangan
                                            sehingga membentuk ikatan hidrogen pada molekul H2O</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.13.png" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 1.14</span>
                                            Ilustrasi
                                            gaya ikatan hidrogen pada molekul NH3</p>
                                        <p>Atom N memiliki radius 135 pm dan 3 buah elektron bebas yang tidak berpasangan
                                            sehingga membentuk ikatan hidrogen pada molekul NH<sub>3</sub></p>
                                    </div>
                                </div>
                                <p id="daftar-1-9" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge</span> : Bagaimana
                                    Ikatan
                                    Hidrogen Antarmolekul air?</p>
                                <p>Sebagaimana telah dijelaskan sebelumnya bahwa Ikatan hidrogen terbentuk ketika
                                    atom hidrogen berikatan kovalen dengan nitrogen (N), oksigen (O), atau fluor (F)
                                    dalam bentuk senyawa kovalen seperti amonia (NH<sub>3</sub>), air (H<sub>2</sub>O) dan gas hidrogen
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 150px;">
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
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuEmpat">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuEmpat"
                                                aria-expanded="true" onclick="check_answer(4)">
                                                <i id="chehck-4" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-4" class="collapse" aria-labelledby="headingSatuEmpat"
                                        data-bs-parent="#accordion">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.17.png" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 1.17</span> Satu
                                            molekul NH3 hanya dapat membentuk satu ikatan hidrogen</p>
                                        <p>Sama halnya dengan molekul NH3, molekul HF juga hanya memiliki 1 ikatan
                                            hidrogen,. Hal tersebut dikarenakan meskipun atom F memiliki 3 pasangan elektron
                                            bebas yang membentuk tiga dipol negatif, namun hanya tersedia satu dipol positif
                                            saja pada tiap molekul HF. Sehingga tidak semua pasangan elektron bebas dapat
                                            memiliki pasangan dipol positif karena terbatasnya ketersediaan atom H.</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    
                                </div>
                                <p id="daftar-1-11" class="fw-bold fs-5"><span class="text-primary">Awe Experience</span><span>: Tahukah anda
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
                                    dua atom hidrogen sehingga ikatan H<sub>2</sub>O membengkok sebesar 104.5 derajat. Sedangkan
                                    keadaan alamiah atom oksigen yang bersifat negatif dan atom hidrogen yang bersifat
                                    positif menimbulkan pengkutuban atau perbedaan muatan. Kedua keadaan itulah yang
                                    menjadikan molekul air bersifat polar, artinya molekul air memiliki perbedaan muatan
                                    yakni negatif pada sisi pasangan elektron bebas dan positif pada sisi atom hidrogen.
                                </p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.22.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.22</span> bentuk
                                    tetes
                                    air jika ditempatkan di atas permukaan datar</p>
                                <p>Sifat kohesi dan adhesi dari air menyebabkan air cenderung membentuk formasi membulat
                                    (bukan menyebar) apabila ditempatkan di atas permukaan yang datar. Hal ini karena
                                    molekul air cenderung tertarik dengan sesamanya di bagian dalam massa air. Sedangkan
                                    pada bagian bawah molekul air cenderung tertarik pada molekul lain pada lantai.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.24.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.24 </span> Sifat
                                    kapilaritas air menyebabkan air dapat meresap pada pori pori tisu</p>
                                <p>Kondisi dimana gaya adhesi air lebih besar dari gaya kohesi akan menimbulkan sifat
                                    kapilaritas air dimana air akan meresap dan bergerak menjalar pada benda benda yang
                                    memiliki pori-pori. Bahkan ketika benda ditempatkan secara vertikal, gaya
                                    kapilaritas
                                    air dapat melawan gaya gravitasi.</p>
                                <p id="daftar-1-12" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition</span><span
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <p class="text-end fs-3">وَهُوَ ٱلَّذِىٓ أَنزَلَ مِنَ ٱلسَّمَآءِ مَآءً فَأَخْرَجْنَا بِهِۦ
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
                        </div>  
                        <!-- End Refleksi Spiritual -->
                    </div>
                </div>
            </div>
            <!-- END Ikatan Antar Molekul Penyusun Air -->
            <!-- Air Sebagai Pelarut Universal -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingFive">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-air-pelarut" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            AIR SEBAGAI PELARUT UNIVERSAL <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.27.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.27</span> Ilustrasi
                                    Polarisasi molekul CO<sub>2</sub>.</p>
                                <p>Contoh senyawa kovalen non-polar adalah karbon dioksida (CO<sub>2</sub>). Molekul karbon
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Check Your Prior Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuDuaLima">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuDuaLima"
                                                aria-expanded="true" onclick="check_answer(25)">
                                                <i id="chehck-25" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-2" class="collapse" aria-labelledby="headingSatuDuaLima"
                                        data-bs-parent="#accordion">
                                        <p class="text-primary fw-bold fs-5">Check Your Answer</p>
                                        <p>Didalam kimi terdapat 3 istilah yang merujuk pada percampuran antara dua zat atau
                                            lebih yaitu : laurtan, suspensi dan koloid. Larutan, koloid dan suspensi
                                            merupakan
                                            sistem kimia yang terdiri dari gas atau zat cair sebagai medium dan
                                            partikel-partikel yang terdispersi di dalam sistem yang disebut dispersi.</p>
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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

                                    </div>
                                </div>

                                <p id="daftar-1-15"class="fw-bold fs-5"><span class="text-primary">Combine Knowledge:</span> Bagaimana air
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuDuaEnam">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuDuaEnam"
                                                aria-expanded="true" onclick="check_answer(26)">
                                                <i id="chehck-26" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-26" class="collapse" aria-labelledby="headingSatuDuaEnam"
                                        data-bs-parent="#accordion">

                                        <p>Pasir adalah batu kecil yang merupakan campuran berbagai unsur-unsur mineral yang
                                            terikat secara kovalen dalam bentuk kisi. Bahan yang terikat secara kovalen
                                            tidak
                                            larut dalam air dengan mudah seperti halnya Benda-benda yang terikat secara
                                            ionik
                                            (Seperti garam).</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    
                                </div>
                                <p id="daftar-1-17" class="fw-bold fs-5"><span class="text-primary">Awe Experience:</span> Apa manfaat sifat
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 1.37.png" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 1.37</span> Air yang
                                    diminum berperan dalam melarutkan zat-zat penting yang diperlukan tubuh sehingga
                                    dapat
                                    diedarkan ke seluruh organ.</p>
                                <p id="daftar-1-18" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
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
                                <p class="text-end fs-3">وَيُنَزِّلُ عَلَيْكُم مِّن السَّمَاء مَاء لِّيُطَهِّرَكُم بِهِ</p>
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
                                <p class="text-end fs-3">يَٰٓأَيُّهَا ٱلَّذِينَ ءَامَنُوٓا۟ إِذَا قُمْتُمْ إِلَى ٱلصَّلَوٰةِ
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
                                <p class="text-end fs-3">إِذَا وَلَغَ الْكَلْبُ فِى الإِنَاءِ فَاغْسِلُوهُ سَبْعَ مَرَّاتٍ
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
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END Air Sebagai Pelarut Universal -->
            <!-- Refleksi -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingNine">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-refleksi" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            REFLEKSI <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
                            </div>
                            <!-- END Refleksi Kognitif -->
                            <!-- Spiritual -->
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
                            <!-- END Spiritual -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Refleksi -->
            <!-- SOAL BAB 1 -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingSeven">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-latihan-soal" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            LATIHAN SOAL BAB 1 <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SOAL BAB 1 -->
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
            data: {id: 1},
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
                    $('#subbab-ikatan-atom').removeClass("disabled");
                } else {
                    $('#subbab-ikatan-atom').addClass("disabled");
                }
                if (data.subbab[3].status_subbab == 1) {
                    $('#subbab-ikatan-molekul').removeClass("disabled");
                } else {
                    $('#subbab-ikatan-molekul').addClass("disabled");
                }
                if (data.subbab[4].status_subbab == 1) {
                    $('#subbab-air-pelarut').removeClass("disabled");
                } else {
                    $('#subbab-air-pelarut').addClass("disabled");
                }
                if (data.subbab[5].status_subbab == 1) {
                    $('#subbab-refleksi').removeClass("disabled");
                } else {
                    $('#subbab-refleksi').addClass("disabled");
                }
                if (data.subbab[6].status_subbab == 1) {
                    $('#subbab-latihan-soal').removeClass("disabled");
                } else {
                    $('#subbab-latihan-soal').addClass("disabled");
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

    function check_answer(id)
    {
        $.ajax({
            url : "<?php echo site_url('buku/tampilkan_jawaban')?>",
            type: "GET",
            data: {id_soal: id},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status == true) {
                    $('#collapse-answer-'+id+'').collapse('show');
                } else {
                    $('#collapse-answer-'+id+'').collapse('hide');
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
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
                    $('#collapse-answer-'+id+'').collapse('show');
                } else {
                    toastr.info("Silahkan isi jawaban terlebih dahulu.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    $('#collapse-answer-'+id+'').collapse('hide');
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