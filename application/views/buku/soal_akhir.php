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
            <h3 class="page-title">SOAL AKHIR</h3>
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
            <!-- TES PEMAHAMAN KONSEP -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingEight">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-tes-pemahaman-konsep" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            TES PEMAHAMAN KONSEP <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-Eight">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
                                <div>
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
                    </div>
                </div>
            </div>
            <!-- END TES PEMAHAMAN KONSEP -->
            <!-- TES KETERAMPILAN BERPIKIR REFLEKTIF -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingTen">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-tes-berfikir-reflektif" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            TES KETERAMPILAN BERPIKIR REFLEKTIF <i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                            <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.1.png" class="img-fluid mx-auto d-block" style="width : 250px;"></li>
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
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.2.png" class="img-fluid mx-auto d-block" style="width : 250px;"></li>
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
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.3.png" class="img-fluid mx-auto d-block" style="width : 250px;"></li>
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
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.4.png" class="img-fluid mx-auto d-block" style="width : 250px;"></li>
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
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.5.png" class="img-fluid mx-auto d-block" style="width : 250px;"></li>
                                        <li>Asap atau kabut yang biasa kita saksikan dalam sebuah pertunjukan merupakan gas yang dihasilkan dari  es kering (dry ice) yang berasal dari molekul-molekul karbon dioksida (CO2) yang merupakan molekul non polar didinginkan hingga suhu -78oC sehingga berubah wujud menjadi karbondioksida padat dengan ikatan antar molekul berupa ikatan van der waals lemah.<img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.5.1.png" class="img-fluid mx-auto d-block" style="width : 250px;">Diagram berikut menunjukan perubahan fase padat, cair dan gas pada CO2 yang dipengaruhi oleh tekanan dan temperatur.</li>
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
                                        <li><img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.6.png" class="img-fluid mx-auto d-block" style="width : 250px;"></li>
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
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.7.png" class="img-fluid mx-auto d-block" style="width : 250px;">
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
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.8.png" class="img-fluid mx-auto d-block" style="width : 250px;">
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
                                    <img src="<?=base_url()?>assets/bahan_gambar/Gambar 4.9.png" class="img-fluid mx-auto d-block" style="width : 250px;">
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
                            </div> 
                    </div>
                </div>
            </div>
            <!-- END TES KETERAMPILAN BERPIKIR REFLEKTIF -->
            <!-- ANGKET SIKAP SPIRITUAL -->
            <div class="card mb-1">
                <div class="card-header border-0" id="headingEleven">
                    <h5 class="accordion-faq m-0 position-relative">
                        <a id="subbab-angket-sikap-spiritual" class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse"
                            href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                            ANGKET SIKAP SPIRITUAL<i class="mdi mdi-chevron-down accordion-arrow" onclick="controller_bab()"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        <div class="overflow-auto" id="teks" style="height: 500px; padding: 20px">
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
            <!-- END ANGKET SIKAP SPIRITUAL -->
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
            data: {id: 4},
            dataType: "JSON",
            success: function(data)
            {
                if (data.subbab[0].status_subbab == 1) {
                    $('#subbab-tes-pemahaman-konsep').removeClass("disabled");
                } else {
                    $('#subbab-tes-pemahaman-konsep').addClass("disabled");
                }
                if (data.subbab[1].status_subbab == 1) {
                    $('#subbab-tes-berfikir-reflektif').removeClass("disabled");
                } else {
                    $('#subbab-tes-berfikir-reflektif').addClass("disabled");
                }
                if (data.subbab[2].status_subbab == 1) {
                    $('#subbab-angket-sikap-spiritual').removeClass("disabled");
                } else {
                    $('#subbab-angket-sikap-spiritual').addClass("disabled");
                }
                load_jawaban_ujian_soal()
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
                $('#simpan_ujian_soal_satu').attr('disabled',false);
                if (--timer < 0) {
                    toastr.info("Waktu habis.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    clearInterval(interval);
                    $('#btn-mulai-satu').attr('disabled',false);
                    $('#simpan_ujian_soal_satu').attr('disabled',true);
                    setTimeout($("#simpan_ujian_soal_satu").click(), 5000);
                }
            } else if(id == 2){
                $('#btn-mulai-dua').attr('disabled',true);
                $('#simpan_ujian_soal_dua').attr('disabled',false);
                if (--timer < 0) {
                    toastr.info("Waktu habis.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    clearInterval(interval);
                    $('#btn-mulai-dua').attr('disabled',false);
                    $('#simpan_ujian_soal_dua').attr('disabled',true);
                    setTimeout($("#simpan_ujian_soal_dua").click(), 5000);
                }
            } else {
                $('#btn-mulai-tiga').attr('disabled',true);
                $('#simpan_ujian_soal_tiga').attr('disabled',false);
                if (--timer < 0) {
                    toastr.info("Waktu habis.", "Info!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    clearInterval(interval);
                    $('#btn-mulai-tiga').attr('disabled',false);
                    $('#simpan_ujian_soal_tiga').attr('disabled',true);
                    setTimeout($("#simpan_ujian_soal_tiga").click(), 5000);
                }
            }
            
        }, 1000);
    }

    function intCount(id){
        if(id == 1){
            var fiveMinutes = 60 * 1,
            display = document.querySelector('#timerSatu');
            display1 = document.querySelector('#timer');
            startTimer(fiveMinutes, display, id);
            startTimer(fiveMinutes, display1, id);
        } else if(id == 2){
            var fiveMinutes = 60 * 1,
            display = document.querySelector('#timerDua');
            display1 = document.querySelector('#timer');
            startTimer(fiveMinutes, display, id);
            startTimer(fiveMinutes, display1, id);
        } else {
            var fiveMinutes = 60 * 1,
            display = document.querySelector('#timerTiga');
            display1 = document.querySelector('#timer');
            startTimer(fiveMinutes, display, id);
            startTimer(fiveMinutes, display1, id);
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
                if(data.satu.length > 0){
                    $('#btn-mulai-satu').attr('disabled',true);
                }
                if(data.dua.length > 0){
                    $('#btn-mulai-dua').attr('disabled',true);
                }
                if(data.angket.length > 0){
                    $('#btn-mulai-tiga').attr('disabled',true);
                }
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
                    clearInterval(interval);
                    var display = "";
                    display = document.querySelector('#timer');
                    display.textContent = "";
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