<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/floating/style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/toastr/toatr.css">
<style>
    .smashinglogo {
        width: min(105vw, 1050px);
        height: min(40vw, 400px);
        display: block;
        position: relative;
        background: url(../assets/img/bg-landing.png) center;
        background-repeat: no-repeat;
        background-size: min(105vw, 1050px), min(40vw, 400px);
    }
</style>

<div class="row">
    <div class="smashinglogo">
    </div>
</div>
<div class="row">
    <div class="col-sm-4 text-center">
        <a href="<?=base_url()?>buku/bab1"><img src="<?=base_url()?>assets/img/struktur-molekul-air.png" alt="image" class="img-fluid rounded-circle" width="120" /></a>
        <p class="mb-0">
            <code>Struktur Molekul Air</code>
        </p>
    </div>
    <div class="col-sm-4 text-center">
        <a href="<?=base_url()?>buku/bab2"><img src="<?=base_url()?>assets/img/perubahan-wujud-air.png" alt="image" class="img-fluid rounded-circle" width="120" /></a>
        <p class="mb-0">
            <code>Perubahan Wujud Air</code>
        </p>
    </div>
    <div class="col-sm-4 text-center">
        <a href="<?=base_url()?>buku/bab3"><img src="<?=base_url()?>assets/img/siklus-hidrologi.png" alt="image" class="img-fluid rounded-circle" width="120" /></a>
        <p class="mb-0">
            <code>Silus Hidrologi</code>
        </p>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=base_url()?>assets/plugins/scrollbar/scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/plugins/scrollbar/custom-scroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=base_url()?>assets/plugins/toastr/toastr.min.js"></script>
<script>
    <?php if ($this->session->flashdata('message')) { ?>
        toastr.warning("<?php echo $this->session->flashdata('message')?>", "Warning!", {
            closeButton: !0,
            tapToDismiss: !1,
            progressBar: !0
        })      
    <?php } ?>
</script>