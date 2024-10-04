<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?=base_url()?>assets/plugins//toastr/toatr.css">
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="<?=base_url()?>assets/img/login.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Selamat Datang</h1>
                        <p class="account-subtitle"><?php echo lang('login_subheading');?></p>
                        <h2><?php echo lang('login_heading');?></h2>

                        <?php echo form_open("auth/login");?>
                            <div class="form-group">
                                <label>Email/Username <span class="login-danger">*</span></label>
                                <?php echo form_input($identity);?>
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('identity'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi <span class="login-danger">*</span></label>
                                <?php echo form_input($password);?>
                                <span class="profile-views feather-eye toggle-password"></span>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>
                            <div class="forgotpass">
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <?php echo form_submit(array(
                                    'name' => 'submit',
                                    'type' => 'submit', 
                                    'value' => 'Login', 
                                    'class' => 'btn btn-primary btn-block'
                                ));?>
                            </div>
                        <?php echo form_close();?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    <?php if ($this->session->flashdata('success')) { ?>
        toastr.success("<?php echo $this->session->flashdata('message')?>", "Sukses!", {
            closeButton: !0,
            tapToDismiss: !1,
            progressBar: !0
        })
    <?php } ?>
</script>