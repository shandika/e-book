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
                <h5 class="card-title">Controller Materi</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#basictab1" data-bs-toggle="tab">BAB</a></li>
                    <li class="nav-item"><a class="nav-link" href="#basictab2" data-bs-toggle="tab">Sub BAB</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="basictab1">
                        <div class="table-responsive">
                            <table class="table" id="table-bab" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>BAB</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="basictab2">
                        <div class="table-responsive">
                            <table class="table" id="table-subbab" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>BAB</th>
                                        <th>SUB BAB</th>
                                        <th>Status</th>
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
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.js"></script>
<script>
    var table_bab;
    var table_subbab;
    $(document).ready(function () {
        //bab
        table_bab = $('#table-bab').DataTable({
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
                "url": "<?php echo site_url('controller_materi/ajax_list_bab')?>",
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
        // Subbab
        table_subbab = $('#table-subbab').DataTable({
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
                "url": "<?php echo site_url('controller_materi/ajax_list_subbab')?>",
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
        table_bab.ajax.reload(); 
        table_subbab.ajax.reload();
    }

    function activate_bab(id)
    {
        $.ajax({
            url : "<?php echo site_url('controller_materi/activate_bab')?>",
            type: "POST",
            data: {id: id},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status) {
                    toastr.success(
                    "Berhasil aktifkan bab.",
                    "Sukses!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                } else {
                    toastr.warning(
                    "Gagal aktifkan bab.",
                    "Perhatian!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function inactivate_bab(id)
    {
        $.ajax({
            url : "<?php echo site_url('controller_materi/inactivate_bab')?>",
            type: "POST",
            data: {id: id},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status) {
                    toastr.success(
                    "Berhasil nonaktifkan bab.",
                    "Sukses!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                } else {
                    toastr.warning(
                    "Gagal nonaktifkan bab.",
                    "Perhatian!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function activate_subbab(id)
    {
        $.ajax({
            url : "<?php echo site_url('controller_materi/activate_subbab')?>",
            type: "POST",
            data: {id: id},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status) {
                    toastr.success(
                    "Berhasil aktifkan sub bab.",
                    "Sukses!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                } else {
                    toastr.warning(
                    "Gagal aktifkan sub bab.",
                    "Perhatian!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function inactivate_subbab(id)
    {
        $.ajax({
            url : "<?php echo site_url('controller_materi/inactivate_subbab')?>",
            type: "POST",
            data: {id: id},
            dataType: "JSON",
            success: function(data)
            {
                if (data.status) {
                    toastr.success(
                    "Berhasil nonaktifkan sub bab.",
                    "Sukses!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                } else {
                    toastr.warning(
                    "Gagal nonaktifkan sub bab.",
                    "Perhatian!",
                    {
                        closeButton:!0,
                        tapToDismiss:!1,
                    })
                    reload_table();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
</script>