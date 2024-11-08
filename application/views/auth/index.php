<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toatr.css">
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title"><?php echo lang('index_heading');?></h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('auth')?>"><?php echo lang('index_heading');?></a></li>
                <li class="breadcrumb-item active">Daftar Pengguna</li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title"><?php echo lang('index_heading');?></h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            <a href="<?=base_url()?>auth/create_user" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table border-0 table-hover table-center mb-0 table-striped" id="table-user">
                        <thead class="student-thread">
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
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

<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script>
var table;

$(document).ready(function() {

    //datatables
    table = $('#table-user').DataTable({
        "createdRow": function( row, data, dataIndex){
                
            },
        "scrollX": false,

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('auth/ajax_list')?>",
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
</script>
<script>
    <?php if ($this->session->flashdata('message')) { ?>
        toastr.success("<?php echo $this->session->flashdata('message')?>", "Sukses!", {
            closeButton: !0,
            tapToDismiss: !1,
            progressBar: !0
        })      
    <?php } ?>
</script>