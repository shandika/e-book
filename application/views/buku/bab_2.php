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
            <h3 class="page-title">Bagian 2 | PERUBAHAN WUJUD AIR</h3>
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
                                <div class="container mt-5 video1">
                                    <video class="img-fluid" controls>
                                        <source src="<?=base_url()?>assets/video/bab 2.mp4">
                                    </video>
                                </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END Video -->
            <!-- Wujud Air -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTen">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-wujud-air" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            WUJUD AIR <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
                                                    <p class="text-primary fw-bold fs-5">Check Previous Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuSatu">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuSatu"
                                                aria-expanded="true" onclick="check_answer(5)">
                                                <i id="chehck-5" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-5" class="collapse" aria-labelledby="headingSatuSatu"
                                        data-bs-parent="#accordion">
                                        <p>Secara umum, wujud materi dibedakan berdasarkan perbedaan kualitatif dalam sifat
                                            massalnya. Padat adalah keadaan di mana materi mempertahankan volume dan bentuk
                                            tetap, cair adalah keadaan di mana materi menyesuaikan diri dengan bentuk
                                            wadahnya
                                            tetapi volumenya hampir tidak dapat berubah, dan gas adalah keadaan di mana
                                            materi
                                            memuai untuk menempati ruang sehingga volume dan bentuknya terus berubah. </p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    
                                </div>
                                <p id="daftar-2-3" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge:</span> Apa saja
                                    perbedaan
                                    karakter air dalam wujud padat cair dan gas?</p>
                                <p>Air, es dan uap air tersusun dari molekul yang sama, yaitu molekul H<sub>2</sub>O,
                                    bedanya adalah pada struktur ikatannya Pada es ikatan ikatan molekul H<sub>2</sub>O
                                    membentuk struktur teratur (kristalin). Pada air cair ikatan ikatan molekul
                                    H<sub>2</sub>O membentuk struktur tidak teratur (amorf) dan pada uap air (gas)
                                    molekul
                                    molekul air tidak saling berikatan.</p>
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEnam" class="collapse" aria-labelledby="headingEnam"
                                        data-bs-parent="#accordion">
                                        <p>Salah satu pemanfaatan zat cair adalah pada sistem hidrolik</p>
                                        <div class="card-body">
                                            <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    <div class="card-header border-0" id="headingSatuDua">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuDua"
                                                aria-expanded="true" onclick="check_answer(6)">
                                                <i id="chehck-6" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-6" class="collapse" aria-labelledby="headingSatuDua"
                                        data-bs-parent="#accordion">
                                        <p>Zat cair digunakan pada sistem hidrolik berdasarkan fakta bahwa zat cair dapat
                                            mengikuti bentuk wadah dan tidak dapat dikompresi. Kemampuan zat cair dalam
                                            mengikuti bentuk wadah menjadikan zat cair dapat digunakan untuk mengisi tabung
                                            sistem hidrolik dengan berbagai ukuran dan berbagai bentuk. Sedangkan kemampuan
                                            zat
                                            cair untuk dapat mempertahankan volume tetap saat dikompresi membuat zat cair
                                            dapat
                                            digunakan untuk menyalurkan tekanan dengan besar yang sama ke segala arah</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END Wujud Air -->
            <!-- Perubahan Wujud Air -->
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Check Previous Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuTiga">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuTiga"
                                                aria-expanded="true" onclick="check_answer(7)">
                                                <i id="chehck-7" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-7" class="collapse" aria-labelledby="headingSatuTiga"
                                        data-bs-parent="#accordion">
                                        <p>Jika suatu zat atau benda dipanaskan (suhunya dinaikkan) maka akan terjadi
                                            kenaikan
                                            energi kinetik dari molekul-molekulnya sehingga molekul-molekul tersebut akan
                                            bergetar lebih cepat dan amplitudo getaran akan bertambah besar, akibatnya jarak
                                            antara molekul zat atau benda menjadi lebih besar.</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.8.jpg" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 2.8</span> semakin
                                            tinggi suhu, semakin cepat gerakan molekul</p>
                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                <p id="daftar-2-7" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge:</span> Bagaimana kalor
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
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
                                            <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    <div class="card-header border-0" id="headingSatuEmpat">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuEmpat"
                                                aria-expanded="true" onclick="check_answer(8)">
                                                <i id="chehck-8" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-8" class="collapse" aria-labelledby="headingSatuEmpat"
                                        data-bs-parent="#accordion">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END Perubahan Wujud Air -->
            <!-- Melebur dan Membeku -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTwelve">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-melebur-membeku" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                            MELEBUR DAN MEMBEKU <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div id="bagian-2-3">
                                <p id="daftar-2-9" class="fw-bold text-primary fs-5">MELEBUR DAN MEMBEKU</p>
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
                                <p id="daftar-2-10" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge :</span> Bagaimana
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <p id="daftar-2-11" class="fw-bold fs-5"><span class="text-primary">Awe Experience:</span> Apa manfaat sifat
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.23.jpg" class="img-fluid">
                                </div>
                                <p class="text-center"><span class="fw-bold text-primary">Gambar 2.23</span> Posisi es,
                                    air
                                    dingin dan air hangat jika berada di satu tempat yang sama</p>
                                <p id="daftar-2-12" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <p class="text-end fs-3">وجَعَلْنَا مِنَ الْمَآءِ كُلَّ شَىْءٍ حَىٍّ </p>
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
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END Melebur dan Membeku -->
            <!-- Menguap dan Mengembun -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingThirten">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-menguap-mengembun" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseThirten" aria-expanded="true" aria-controls="collapseThirten">
                            MENGUAP DAN MENGEMBUN <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseThirten" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div id="bagian-2-4">
                                <p id="daftar-2-13" class="fw-bold text-primary fs-5">MENGUAP DAN MENGEMBUN</p>
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
                                <p id="daftar-2-14" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge:</span> Bagaimana
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
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
                                    <div class="card-header border-0" id="headingSatuLima">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuLima"
                                                aria-expanded="true" onclick="check_answer(9)">
                                                <i id="chehck-9" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-9" class="collapse" aria-labelledby="headingSatuLima"
                                        data-bs-parent="#accordion">
                                        <p>Uap air merupakan salah satu gas penyusun udara atmosfer bumi dengan persentase
                                            sekitar 5%. Udara disekitar botol tentu saja mengandung uap air. Ketika kalor
                                            berpindah dari udara menuju botol air (karena suhu udara lebih tinggi dari suhu
                                            botol air), maka uap air disekitar botol akan kehilangan energi dan akan mulai
                                            berikatan membentuk embun yang menempel di dinding botol</p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 150px;">
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
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END Menguap dan Mengembun -->
            <!-- Menyublim Dan Deposisi -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingFourten">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-menyublim-mendeposisi" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseFourten" aria-expanded="true" aria-controls="collapseFourten">
                            MENYUBLIM DAN MENDEPOSISI <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseFourten" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div id="bagian-2-5">
                                <p id="daftar-2-16" class="fw-bold text-primary fs-5">MENYUBLIM DAN MENDEPOSISI</p>
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
                                <p id="daftar-2-17" class="fw-bold fs-5"><span class="text-primary">Combine Knowledge:</span> Bagaimana
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                                <p class="text-primary fw-bold fs-5">Apply Knowledge</p>
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
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
                                            <img src="<?=base_url()?>assets/bahan_gambar/Gambar 2.38.jpg" class="img-fluid">
                                        </div>
                                        <p class="text-center"><span class="fw-bold text-primary">Gambar 2.38</span>
                                            Struktur
                                            molekul kapur barus</p>
                                        <p>Senyawa Naphthalene merupakan senyawa non polar sehingga dalam bentuk kristal
                                            (padat)
                                            ikatan yang terjadi adalah ikatan van der waals jenis dispersi gaya london </p>
                                        <div class="container mt-5 d-flex justify-content-center" style = "width : 250px;">
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
                                    <div class="card-header border-0" id="headingSatuEnam">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseSatuEnam"
                                                aria-expanded="true" onclick="check_answer(10)">
                                                <i id="chehck-10" class="mdi mdi-help-circle me-1 text-primary fw-bold"></i>
                                                <p class ="fs-5 fw-bold text-primary">Check Your Answer</p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-answer-10" class="collapse" aria-labelledby="headingSatuEnam"
                                        data-bs-parent="#accordion">
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
                                </div>
                                <p id="daftar-2-19" class="fw-bold fs-5"><span class="text-primary">Awe Experience:</span> Apa manfaat air,
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
                                <p id="daftar-2-20" class="fw-bold fs-5"><span class="text-primary">Spiritual Kognition:</span> Apa hikmah dibalik turunnya hujan air, salju dan embun?</p>                                   
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
                                <p class="text-end fs-3">اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ، كَمَا بَاعَدْتَ
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
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END Menyublim Dan Deposisi -->
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
                            <!-- END Refleksi Kognitif -->
                            <!-- Spiritual -->
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
                            <!-- END Spiritual -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Refleksi -->
            <!-- LATIHAN SOAL BAB 2 -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingSixten">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-latihan-soal" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseSixten" aria-expanded="true" aria-controls="collapseSixten">
                            LATIHAN SOAL BAB 2 <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseSixten" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                            <div>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- END LATIHAN SOAL BAB 2 -->
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
            data: {id: 2},
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
                    $('#subbab-wujud-air').removeClass("disabled");
                } else {
                    $('#subbab-wujud-air').addClass("disabled");
                }
                if (data.subbab[3].status_subbab == 1) {
                    $('#subbab-perubahan-wujud-air').removeClass("disabled");
                } else {
                    $('#subbab-perubahan-wujud-air').addClass("disabled");
                }
                if (data.subbab[4].status_subbab == 1) {
                    $('#subbab-melebur-membeku').removeClass("disabled");
                } else {
                    $('#subbab-melebur-membeku').addClass("disabled");
                }
                if (data.subbab[5].status_subbab == 1) {
                    $('#subbab-menguap-mengembun').removeClass("disabled");
                } else {
                    $('#subbab-menguap-mengembun').addClass("disabled");
                }
                if (data.subbab[6].status_subbab == 1) {
                    $('#subbab-menyublim-mendeposisi').removeClass("disabled");
                } else {
                    $('#subbab-menyublim-mendeposisi').addClass("disabled");
                }
                if (data.subbab[7].status_subbab == 1) {
                    $('#subbab-refleksi').removeClass("disabled");
                } else {
                    $('#subbab-refleksi').addClass("disabled");
                }
                if (data.subbab[8].status_subbab == 1) {
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