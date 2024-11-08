<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins//toastr/toatr.css">
<div class="page-header">
    <div class="row">
        <div class="col">
            <h3 class="page-title">Tabs</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Components</li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <h5 class="card-title">Latihan Soal</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table-latihan" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Bab</th>
                                <th>Soal</th>
                                <th>Jawaban</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="skor-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="lihat-modalLabel">Skor Jawaban</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <label for="field-7" class="form-label">Soal</label>
                            <p id="soal" style="white-space: pre-wrap;">Soal</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <label for="field-7" class="form-label">Jawaban</label>
                            <textarea class="form-control" id="jawaban" placeholder="jawaban"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" id="kode_essay">
                        <div class="mb-3">
                            <label for="field-3" class="form-label">Nilai</label>
                            <input type="text" class="form-control" id="skor" placeholder="nilai">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button onclick="save_skor()" id="btn_save" type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.js"></script>
<script>
    var table_latihan;
    $(document).ready(function () {
        //bab
        table_latihan = $('#table-latihan').DataTable({
            "createdRow": function( row, data, dataIndex){
                    
                },
            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                
            },
            "scrollX": false,

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('latihan_soal/ajax_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            ],

        });
    });

    function reload_table()
    {
        table_latihan.ajax.reload(); 
    }

    function tes_soal(bab,soal)
    {
        var a = "";
        if (bab == 1 && soal == 1) {
            a = "1. Molekul air (H2O) terbentuk dari Hidrogen (H2) dan Oksigen (O2) yang berikatan dengan ikatan kovalen \n a. Jelaskan apa itu ikatan kovalen? \n b. Jelaskan bagaimana ikatan kovalen terbentuk pada struktur molekul air? \n c. Berikan analisis bagaimana ikatan kovalen polar mempengaruhi sifat fisik air? \n d. Refleksikan bagaimana sifat polar molekul air mempengaruhi peran air dalam tubuh manusia?";
        } else if(bab == 1 && soal == 2) {
            a = "2. Karena ikatan molekul air (H2O) merupakan ikatan kovalen polar, maka salah satu karakteristik yang dimiliki air adalah kapilaritas \n a. Jelaskan apa itu ikatan kovalen polar ? \n b. Jelaskan konsep kohesi dan adhesi dalam konteks molekul air. \n c. Berikan analisis bagaimana kohesi dan adhesi berperan dalam fenomena kapilaritas ? \n d. Refleksikan bagaimana kapilaritas berperan dalam kehidupan tumbuhan ?";
        } else if(bab == 1 && soal == 3) {
            a = "3. Karena ikatan molekul air (H2O) merupakan ikatan kovalen polar, maka salah satu karakteristik yang dimiliki air adalah sifat air sebagai pelarut universal \n a. Jelaskan apa itu ikatan kovalen polar ? \n b. Jelaskan bagaimana ikatan kovalen polar dapat menghasilkan sifat pelarut pada air ? \n c. Berikan analisis bagaimana air dapat melarutkan zat hidrofibik dan saling tolak dengan zat hidrofilik ? \n d. Refleksikan bagaimana sifat pelarut air berperan dalam kehidupan ?";
        } else if(bab == 1 && soal == 3) {
            a = "4. Air merupakan zat yang tersusun dari molekul air (H2O) yang saling berikatan dengan ikatan hidrogen. \n a. Jelaskan apa itu ikatan hidrogen ? \n b. Bagaimana ikatan Hidrogen terbentuk antar molekul air ? \n c. Berikan analisis bagaimana ikatan hidrogen mempengaruhi sifat termal air ? \n d. Refleksikan bagaimana sifat termal air dapat mempengaruhi lingkungan akuatik tempat tinggal organisme ?";
        } else if(bab == 2 && soal == 1) {
            a = "1. Air (H2O) dapat berbentuk 3 wujud, yaitu padat, cair dan gas. \n a. Jelaskan perbedaan mendasar struktur molekul air dalam keadaan padat, cair dan gas ? \n b. Jelaskan bagaimana perbedaan mendasar struktur molekul air dalam keadaan padat, cair dan gas memberikan nilai masa jenis air yang berbeda pada masing-masing wujud ? \n c. Berikan analisis, bagaimana es batu yang dimasukan kedalam segelas air akan mengambang di permukaan air ? \n d. Refleksikan bagaimana perbedaan masa jenis air dalam wujud padat dan cair mempngaruhi keberlangsungan kehidupan air ketika musim dingin ?";
        } else if(bab == 2 && soal == 2) {
            a = "2. Suhu berperan penting dalam proses perubahan wujud air dari cair menjadi es. \n a. Jelaskan bagaimana arah transfer kalor dalam perubahan wujud dari air menjadi es ? \n b. Jelaskan bagaimana proses pembekuan air dan faktor-faktor yang mempengaruhinya. \n c. Berikan analsisi, bagaimana struktur molekul air berubah selama proses pembekuan ? \n d. Refleksikan bagaimana pengetahuan tentang pembekuan air dapat membantu Anda dalam kegiatan pengelolaan makanan ?";
        } else if(bab == 2 && soal == 3) {
            a = "3. Suhu berperan penting dalam proses perubahan wujud air dari cair menjadi gas. \n a. Jelaskan bagaimana arah transfer kalor dalam perubahan wujud dari cair menjadi gas ? \n b. Jelaskan proses yang terjadi ketika air berubah dari cair menjadi gas ? \n c. Berikan analisis, apa yang terjadi pada molekul-molekul air selama proses perubahan wujud dari cair menjadi gas ? \n d. Refleksikan bagaimana proses penguapan air dapat mempengaruhi cuaca di suatu tempat.";
        } else if(bab == 2 && soal == 4) {
            a = "4. Suhu berperan penting dalam proses perubahan wujud air dari gas menjadi cair. \n a. Jelaskan bagaimana arah transfer kalor dalam perubahan wujud dari air dari gas menjadi cair ? \n b. Jelaskan proses yang terjadi ketika air berubah dari gas menjadi cair ? \n c. Berikan analisis, apa yang terjadi pada molekul-molekul air selama proses perubahan wujud dari gas menjadi cair ? \n d. Refleksikan bagaimana suhu udara pada malam hari dapat mempegaruhi terbentuknya embun pada pagi hari ?";
        } else if(bab == 3 && soal == 1) {
            a = "1. Terdistribusinya air ke hampir seluruh permukaan bumi dalam bentuk air tawar dapat dijelaskan dengan mekanisme siklus hidrologi \n a. Jelaskan bagaimana hubungan perubahan wujud air dengan proses siklus air ? \n b. Jelaskan perubahan wujud air apa saja yang terjadi pada siklus air dimulai dari evaporasi hingga presipitasi ? \n c. Berikan analisis faktor lingkungan apa saja yang dapat mengganggu siklus air dan jelaskan bagaimana masing-masing faktor tersebut mempengaruhinya ? \n d. Setelah mempelajari siklus air dan faktor-faktor yang dapat mempengaruhinya, refleksikan bagaimana pemahaman ini dapat membantu Anda dalam menjaga lingkungan di sekitar Anda.";
        } else if(bab == 3 && soal == 2) {
            a = "2. Siklus air diawali dengan proses penguapan permukaan air di bumi yang disebut sebagai kondensasi \n a. Jelaskan bagaimana proses perubahan wujud air dari air ke gas ? \n b. Jelaskan proses terjadinya kondensasi pada siklus air ? \n c. Analisis bagaimana peran kondensasi pada pembentukan hujan dalam siklus air ? \n d. Refleksikan dampak dari perubahan iklim terhadap pola curah hujan global ?";
        } else if(bab == 3 && soal == 3) {
            a = "3. Dalam siklus air, proses infiltrasi berperan penting dalam ketersediaan air tanah. \n a. Jelaskan proses infiltrasi dalam siklus hidrologi dan perannya dalam pengisian akuifer ? \n b. Jelaskan faktor apa saja yang memengaruhi infiltrasi air pada permukaan tanah ? \n c. Berikan analisis bagaimana dampak dari urbanisasi terhadap proses infiltrasi di daerah perkotaan ? \n d. Refleksikan bagaimana perubahan penggunaan lahan di suatu daerah akan mempengaruhi siklus air? Berikan contoh konkret.";
        } else if(bab == 3 && soal == 4) {
            a = "4. Dalam siklus air, aliran air permukaan berperan penting dalam distribusi air tawar dipermukaan bumi. \n a. Jelaskan bagaimaa proses aliran permukaan dalam siklus hidrologi dan perannya dalam pengisian akuifer ? \n b. Jelaskan faktor apa saja yang mempengaruhi aliran air permukaan ? \n c. Berikan analisis bagaimana dampak dari penggundulan hutan terhadap aliran air permukaan ? \n d. Refleksikan bagaimana pembangunan di daerah perkotaan akan mempengaruhi siklus air? Berikan contoh konkret.";
        }
        return a;
    }

    function skor_jawaban(id)
    {
        $.ajax({
            url : "<?php echo site_url('latihan_soal/ajax_edit/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $("#skor-modal").modal("show");
                $("#kode_essay").val(data.kode_jawaban_essay);
                $("#nama").val(data.first_name + " " + data.last_name);
                $("#email").val(data.email);
                $("#soal").text(tes_soal(data.bab,data.soal));
                $("#skor").val("");
                $("#jawaban").val(data.jawaban_essay);
                $("#lihat-modalLabel").text("Beri Nilai");
                $('#btn_save').attr('disabled',false);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_jawaban(id)
    {
        $.ajax({
            url : "<?php echo site_url('latihan_soal/ajax_edit/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $("#skor-modal").modal("show");
                $("#kode_essay").val(data.kode_jawaban_essay);
                $("#nama").val(data.first_name + " " + data.last_name);
                $("#email").val(data.email);
                $("#soal").text(tes_soal(data.bab,data.soal));
                $("#jawaban").val(data.jawaban_essay);
                $("#skor").val(data.nilai);
                $("#lihat-modalLabel").text("Edit Nilai");
                $('#btn_save').attr('disabled',false);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function view_jawaban(id)
    {
        $.ajax({
            url : "<?php echo site_url('latihan_soal/ajax_edit/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $("#skor-modal").modal("show");
                $("#kode_essay").val(data.kode_jawaban_essay);
                $("#nama").val(data.first_name + " " + data.last_name);
                $("#email").val(data.email);
                $("#soal").text(tes_soal(data.bab,data.soal));
                $("#jawaban").val(data.jawaban_essay);
                $("#skor").val(data.nilai);
                $("#lihat-modalLabel").text("View Nilai");
                $('#btn_save').attr('disabled',true);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save_skor()
    {
        var skor = $("#skor").val();
        var kode = $("#kode_essay").val();
        $.ajax({
            url : "<?php echo site_url('latihan_soal/ajax_add')?>",
            type: "POST",
            data: {kode: kode, skor: skor},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status) {
                    $("#skor-modal").modal("hide");
                    toastr.success("Berhasil menyimpan skor.", "Sukses!", {
                        closeButton: !0,
                        tapToDismiss: !1,
                        progressBar: !0
                    })
                    reload_table();
                } else {
                    $("#skor-modal").modal("show");
                    toastr.warning(data.error, "Sukses!", {
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