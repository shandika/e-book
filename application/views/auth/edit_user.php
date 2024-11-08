<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title"><?php echo lang('edit_user_heading');?></h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('auth')?>"><?php echo lang('index_heading');?></a></li>
                <li class="breadcrumb-item active"><?php echo lang('edit_user_heading');?></li>
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
                            <h3 class="page-title"><?php echo lang('edit_user_heading');?></h3>
                        </div>
                    </div>
                </div>

                <?php echo form_open(uri_string());?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo lang('create_user_fname_label', 'first_name');?></label>
                                <?php echo form_input($first_name);?>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('first_name'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo lang('create_user_lname_label', 'last_name');?></label>
                                <?php echo form_input($last_name);?>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('last_name'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo lang('create_user_company_label', 'company');?></label>
                                <?php echo form_input($company);?>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('company'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo lang('create_user_phone_label', 'phone');?></label>
                                <?php echo form_input($phone);?>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('phone'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo lang('create_user_password_label', 'password');?></label>
                                <?php echo form_input($password);?>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                                <?php echo form_input($password_confirm);?>
                                <div class="invalid-feedback d-block" role="alert">
                                    <?php echo form_error('password_confirm'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($this->ion_auth->is_admin()): ?>

                    <h3><?php echo lang('edit_user_groups_heading');?></h3>
                    <?php foreach ($groups as $group):?>
                        <label class="checkbox">
                        <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>
                        <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                        </label>
                    <?php endforeach?>

                    <?php endif ?>
                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>
                    <div class="text-end">
                        <?php echo form_submit(array(
							'type' => 'submit',
							'name' => 'submit',
							'value' => 'Ubah Pengguna',
							'class' => 'btn btn-primary',
						));
						?>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>