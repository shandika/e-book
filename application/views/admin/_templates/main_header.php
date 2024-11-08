<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="<?=base_url()?>" class="logo">
                    <img src="<?=base_url()?>assets/img/logo.png" alt="Logo">
                </a>
                <a href="<?=base_url()?>" class="logo logo-small">
                    <img src="<?=base_url()?>assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">
                <div class="timer fs-4" id="timer">     
                    <p></p> 
                </div>
                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="<?=base_url()?>assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="<?=base_url()?>assets/img/profiles/avatar-01.jpg" width="31"
                                alt="Soeng Souy">
                            <div class="user-text">
                                <h6><?=$this->ion_auth->user()->row()->first_name?> <?=$this->ion_auth->user()->row()->last_name?></h6>
                                <p class="text-muted mb-0"><?=$this->ion_auth->user()->row()->username?></p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="<?=base_url()?>assets/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6><?=$this->ion_auth->user()->row()->first_name?> <?=$this->ion_auth->user()->row()->last_name?></h6>
                                <p class="text-muted mb-0"><?=$this->ion_auth->user()->row()->username?></p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="<?=base_url('auth/logout')?>">Logout</a>
                    </div>
                </li>

            </ul>

        </div>