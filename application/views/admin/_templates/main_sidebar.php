<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li>
                    <a href="<?=base_url()?>"><i class="feather-grid"></i> <span> Sampul</span></a>
                </li>
                <?php if($this->ion_auth->is_admin()) {?>
                <li>
                    <a href="<?=base_url()?>controller_materi"><i class="fa fa-wrench"></i> <span> Controller Materi</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-chalkboard-teacher"></i> <span> Soal</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?=base_url()?>previous_knowledge">Previous Knowledge</a></li>
                        <li><a href="<?=base_url()?>latihan_soal">Latihan Soal</a></li>
                        <li><a href="<?=base_url()?>">Grup</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-chalkboard-teacher"></i> <span> Akun</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?=base_url()?>auth">List Akun</a></li>
                        <li><a href="<?=base_url()?>auth/create_user">Tambah Akun</a></li>
                        <li><a href="<?=base_url()?>auth/list_group">Grup</a></li>
                        <li><a href="<?=base_url()?>auth/create_group">Tambah Grup</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Daftar Isi</span> <span
                            class="menu-arrow"></span></a> 
                    <ul>
                        <li><a href="daftar-isi.html">DAFTAR ISI</a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>BAB 1 STRUKTUR MOLEKUL AIR</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Ikatan Antar Atom Penyusun Molekul Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-1-2">Prior Knowledge : Pengertian ikatan Kovalen</a></li>
                                        <li><a href="#daftar-1-3">Combine Knowledge : Ikatan Kovalen Pada molekul air</a></li>
                                        <li><a href="#daftar-1-4">Apply Knowledge : Kepolaran ikatan kovalen pada molekul air</a></li>
                                        <li><a href="#daftar-1-5">Awe Expereince : Reaksi kimia untuk dapat menghasilkan air</a></li>
                                        <li><a href="#daftar-1-6">Spiritual Kognition : Hikmah dibalik penciptaan air</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-1-7"> <span>Ikatan Antar Molekul Penyusun Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-1-8">Prior Knowledge : Pengertian gaya ikat hidrogen</a></li>
                                        <li><a href="#daftar-1-9">Combine Knowledge : Ikatan Hidrogen Antarmolekul air</a></li>
                                        <li><a href="#daftar-1-10">Apply Knowledge : Titik Didih air</a></li>
                                        <li><a href="#daftar-1-11">Awe Expereince : Sifat polar molekul air</a></li>
                                        <li><a href="#daftar-1-12">Spiritual Kognition : Hikmah Sifat Kapilaritas air</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-1-13"> <span>Air Sebagai Pelarut Universal</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-1-14">Prior Knowledge : Pengertian larutan</a></li>
                                        <li><a href="#daftar-1-15">Combine Knowledge : Cara air melarutkan zat lain</a></li>
                                        <li><a href="#daftar-1-16">Apply Knowledge: larutan homogen dan non homogen</a></li>
                                        <li><a href="#daftar-1-17">Awe Expereince: Manfaat sifat pelarut air</a></li>
                                        <li><a href="#daftar-1-18">Spiritual Kognition : Hikmah Sifat pelarut air dalam bersuci</a></li>
                                    </ul>
                                </li>
                                <li><a href="#daftar-1-19"><span>Refleksi Kognitif</span></a></li>
                                <li><a href="#daftar-1-20"><span>Refleksi Spiritual</span></a></li>
                            </ul>
                        </li>
                        <!-- BAB 2 -->
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>BAB 2 PERUBAHAN WUJUD AIR</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li class="submenu">
                                    <a href="#daftar-2-1"> <span>Wujud Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-2-2">Prior Knowledge : Perbedaan zat padat, cair dan gas</a></li>
                                        <li><a href="#daftar-2-3">Combine Knowledge : Karakter air dalam wujud padat cair & gas</a></li>
                                        <li><a href="#daftar-2-4">Apply Knowledge : Pemanfaatan zat cair pada sistem hidrolik</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-2-5"> <span>Perubahan Wujud Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-2-6">Prior Knowledge : Perilaku atom ketika ditambahkan energi</a></li>
                                        <li><a href="#daftar-2-7">Combine Knowledge : Pengaruh kalor terhadap perubahan wujud</a></li>
                                        <li><a href="#daftar-2-8">Apply Knowledge: Pengaruh tekanan terhadap perubahan wujud</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-2-9"> <span>Melebur dan Membeku</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-2-10">Combine Knowledge : Energi untuk melebur & membeku</a></li>
                                        <li><a href="#daftar-2-11">Awe Expereince: Sifat anomali air</a></li>
                                        <li><a href="#daftar-2-12">Spiritual Kognition : Hikmah massa jenis es > massa jenis air </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-2-13"> <span>Menguap dan Mengembun</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-2-14">Combine Knowledge : Energi untuk menguap & mengembun</a></li>
                                        <li><a href="#daftar-2-15">Apply Knowledge: pengembunan pada dinding botol dingin</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-2-16"> <span>Menyublim dan Deposisi</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-2-17">Combine Knowledge : Energi untuk menyublim & deposisi</a></li>
                                        <li><a href="#daftar-2-18">Apply Knowledge: peyubliman pada kapur barus</a></li>
                                        <li><a href="#daftar-2-19">Awe Expereince: Manfaat air salju dan embun </a></li>
                                        <li><a href="#daftar-2-20">Spiritual Kognition : Hikmah hujan, salju dan es</a></li>
                                    </ul>
                                </li>
                                <li><a href="#daftar-2-21"><span>Refleksi Kognitif</span></a></li>
                                <li><a href="#daftar-2-22"><span>Refleksi Spiritual</span></a></li>
                            </ul>
                        </li>
                        <!-- BAB 3 -->
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>BAB 3 SIKLUS AIR</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li class="submenu">
                                    <a href="#daftar-3-1"> <span>Persebaran Air di Muka Bumi</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-3-2">Prior Knowledge : Jumlah air di bumi</a></li>
                                        <li><a href="#daftar-3-3">Combine Knowledge : Mekanisme Penyebaran air tawar di bumi</a></li>
                                        <li><a href="#daftar-3-4">Apply Knowledge: Pengaruh pembendungan sungai</a></li>
                                        <li><a href="#daftar-3-5">Awe Expereince: Manfaat gletser, air tanah, danau dan sungai</a></li>
                                        <li><a href="#daftar-3-6">Spiritual Kognition : Hikmah gletser, air tanah, danau dan sungai</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-3-7"> <span>Mekanisme Siklus Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-3-8">Evaporasi</a></li>
                                        <li><a href="#daftar-3-9">Apply Knowledge: Penguapan air di musim kemarau</a></li>
                                        <li><a href="#daftar-3-10">Transpirasi</a></li>
                                        <li><a href="#daftar-3-11">Apply Knowledge: Penguapan air di musim kemarau</a></li>
                                        <li><a href="#daftar-3-12">Kondensasi</a></li>
                                        <li><a href="#daftar-3-13">Apply Knowledge: Bagaimana awan dapat melayang di atmosfer</a></li>
                                        <li><a href="#daftar-3-14">Konveksi dan Adveksi</a></li>
                                        <li><a href="#daftar-3-15">Apply Knowledge: Terjadinya angin darat dan angin laut</a></li>
                                        <li><a href="#daftar-3-16">Presipitasi</a></li>
                                        <li><a href="#daftar-3-17">Apply Knowledge: Terjadinya hujan asam </a></li>
                                        <li><a href="#daftar-3-18">Infiltrasi dan Surface Run Off</a></li>
                                        <li><a href="#daftar-3-19">Apply Knowledge: penyebab terjadinya kekeringan</a></li>
                                        <li><a href="#daftar-3-20">Collection/Pengumpulan</a></li>
                                        <li><a href="#daftar-3-21">Apply Knowledge: Pengaruh penyedotan air tanah berlebihan</a></li>
                                        <li><a href="#daftar-3-22">Awe Expereince: Peran Troposfer dalam Siklus Air</a></li>
                                        <li><a href="#daftar-3-23">Spiritual Kognition: Hikmah dibalik Anomali Suhu Troposfer</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#daftar-3-24"> <span>Jenis-Jenis Siklus Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="#daftar-3-25">Siklus Pendek</a></li>
                                        <li><a href="#daftar-3-26">Siklus Sedang</a></li>
                                        <li><a href="#daftar-3-27">Siklus Panjang</a></li>
                                        <li><a href="#daftar-3-28">Apply Knowledge: Hujan Es dan Hujan Beku</a></li>
                                        <li><a href="#daftar-3-29">Awe Expereince: Peran Angin dalam Siklus Air</a></li>
                                        <li><a href="#daftar-3-30">Spiritual Kognition: Hikmah dibalik Adanya Siklus Air</a></li>
                                    </ul>
                                </li>
                                <li><a href="#daftar-3-31"><span>Refleksi Kognitif</span></a></li>
                                <li><a href="#daftar-3-32"><span>Refleksi Spiritual</span></a></li>
                            </ul>
                        </li>

                        





                        </li>
                    </ul>
                </li>
                <!-- <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="subjects.html">Subject List</a></li>
                        <li><a href="add-subject.html">Subject Add</a></li>
                        <li><a href="edit-subject.html">Subject Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="invoices.html">Invoices List</a></li>
                        <li><a href="invoice-grid.html">Invoices Grid</a></li>
                        <li><a href="add-invoice.html">Add Invoices</a></li>
                        <li><a href="edit-invoice.html">Edit Invoices</a></li>
                        <li><a href="view-invoice.html">Invoices Details</a></li>
                        <li><a href="invoices-settings.html">Invoices Settings</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="fees-collections.html">Fees Collection</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="salary.html">Salary</a></li>
                        <li><a href="add-fees-collection.html">Add Fees</a></li>
                        <li><a href="add-expenses.html">Add Expenses</a></li>
                        <li><a href="add-salary.html">Add Salary</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="blog.html">All Blogs</a></li>
                        <li><a href="add-blog.html">Add Blog</a></li>
                        <li><a href="edit-blog.html">Edit Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="error-404.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                </li>
                <li class="menu-title">
                    <span>Others</span>
                </li>
                <li>
                    <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                </li>
                <li>
                    <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                </li>
                <li>
                    <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
                </li> -->
                <!-- <li class="menu-title">
                    <span>UI Interface</span>
                </li> -->
                <!-- <li class="submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="accordions.html">Accordions</a></li>
                        <li><a href="avatar.html">Avatar</a></li>
                        <li><a href="badges.html">Badges</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="buttongroup.html">Button Group</a></li>
                        <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                        <li><a href="cards.html">Cards</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="dropdowns.html">Dropdowns</a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="lightbox.html">Lightbox</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="modal.html">Modals</a></li>
                        <li><a href="offcanvas.html">Offcanvas</a></li>
                        <li><a href="pagination.html">Pagination</a></li>
                        <li><a href="popover.html">Popover</a></li>
                        <li><a href="progress.html">Progress Bars</a></li>
                        <li><a href="placeholders.html">Placeholders</a></li>
                        <li><a href="rangeslider.html">Range Slider</a></li>
                        <li><a href="spinners.html">Spinner</a></li>
                        <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="tab.html">Tabs</a></li>
                        <li><a href="toastr.html">Toasts</a></li>
                        <li><a href="tooltip.html">Tooltip</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="video.html">Video</a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu">
                    <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="ribbon.html">Ribbon</a></li>
                        <li><a href="clipboard.html">Clipboard</a></li>
                        <li><a href="drag-drop.html">Drag & Drop</a></li>
                        <li><a href="rating.html">Rating</a></li>
                        <li><a href="text-editor.html">Text Editor</a></li>
                        <li><a href="counter.html">Counter</a></li>
                        <li><a href="scrollbar.html">Scrollbar</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="stickynote.html">Sticky Note</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chart-apex.html">Apex Charts</a></li>
                        <li><a href="chart-js.html">Chart Js</a></li>
                        <li><a href="chart-morris.html">Morris Charts</a></li>
                        <li><a href="chart-flot.html">Flot Charts</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                        <li><a href="chart-c3.html">C3 Charts</a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu">
                    <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                        <li><a href="icon-feather.html">Feather Icons</a></li>
                        <li><a href="icon-ionic.html">Ionic Icons</a></li>
                        <li><a href="icon-material.html">Material Icons</a></li>
                        <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                        <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-weather.html">Weather Icons</a></li>
                        <li><a href="icon-typicon.html">Typicon Icons</a></li>
                        <li><a href="icon-flag.html">Flag Icons</a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu">
                    <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html"> Vertical Form </a></li>
                        <li><a href="form-mask.html"> Form Mask </a></li>
                        <li><a href="form-validation.html"> Form Validation </a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu">
                    <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="tables-basic.html">Basic Tables </a></li>
                        <li><a href="data-tables.html">Data Table </a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Daftar Isi</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>BAB 1 STRUKTUR MOLEKUL AIR</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Ikatan Antar Atom Penyusun Molekul Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Pengertian ikatan Kovalen</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Ikatan Kovalen Pada molekul air</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge : Kepolaran ikatan kovalen pada molekul air</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince : Reaksi kimia untuk dapat menghasilkan air</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition : Hikmah dibalik penciptaan air</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Ikatan Antar Molekul Penyusun Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Pengertian gaya ikat hidrogen</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Ikatan Hidrogen Antarmolekul air</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge : Titik Didih air</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince : Sifat polar molekul air</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition : Hikmah Sifat Kapilaritas air</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Air Sebagai Pelarut Universal</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Pengertian larutan</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Cara air melarutkan zat lain</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: larutan homogen dan non homogen</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince: Manfaat sifat pelarut air</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition : Hikmah Sifat pelarut air dalam bersuci</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><span>Refleksi Kognitif</span></a></li>
                                <li><a href="javascript:void(0);"><span>Refleksi Spiritual</span></a></li>
                            </ul>
                        </li> -->
                        <!-- BAB 2 -->
                        <!-- <li class="submenu">
                            <a href="javascript:void(0);"> <span>BAB 2 PERUBAHAN WUJUD AIR</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Wujud Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Perbedaan zat padat, cair dan gas</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Karakter air dalam wujud padat cair & gas</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge : Pemanfaatan zat cair pada sistem hidrolik</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Perubahan Wujud Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Perilaku atom ketika ditambahkan energi</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Pengaruh kalor terhadap perubahan wujud</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Pengaruh tekanan terhadap perubahan wujud</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Air Sebagai Pelarut Universal</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Pengertian larutan</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Cara air melarutkan zat lain</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: larutan homogen dan non homogen</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Melebur dan Membeku</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Energi untuk melebur & membeku</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince: Sifat anomali air</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition : Hikmah massa jenis es > massa jenis air </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Menguap dan Mengembun</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Energi untuk menguap & mengembun</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: pengembunan pada dinding botol dingin</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Menyublim dan Deposisi</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Energi untuk menyublim & deposisi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: peyubliman pada kapur barus</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince: Manfaat air salju dan embun </a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition : Hikmah hujan, salju dan es</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><span>Refleksi Kognitif</span></a></li>
                                <li><a href="javascript:void(0);"><span>Refleksi Spiritual</span></a></li>
                            </ul>
                        </li> -->
                        <!-- BAB 3 -->
                        <!-- <li class="submenu">
                            <a href="javascript:void(0);"> <span>BAB 3 SIKLUS AIR</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Persebaran Air di Muka Bumi</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Prior Knowledge : Jumlah air di bumi</a></li>
                                        <li><a href="javascript:void(0);">Combine Knowledge : Mekanisme Penyebaran air tawar di bumi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Pengaruh pembendungan sungai</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince: Manfaat gletser, air tanah, danau dan sungai</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition : Hikmah gletser, air tanah, danau dan sungai</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Mekanisme Siklus Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Evaporasi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Penguapan air di musim kemarau</a></li>
                                        <li><a href="javascript:void(0);">Transpirasi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Penguapan air di musim kemarau</a></li>
                                        <li><a href="javascript:void(0);">Kondensasi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Bagaimana awan dapat melayang di atmosfer</a></li>
                                        <li><a href="javascript:void(0);">Konveksi dan Adveksi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Terjadinya angin darat dan angin laut</a></li>
                                        <li><a href="javascript:void(0);">Presipitasi</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Terjadinya hujan asam </a></li>
                                        <li><a href="javascript:void(0);">Infiltrasi dan Surface Run Off</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: penyebab terjadinya kekeringan</a></li>
                                        <li><a href="javascript:void(0);">Collection/Pengumpulan</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Pengaruh penyedotan air tanah berlebihan</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince: Peran Troposfer dalam Siklus Air</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition: Hikmah dibalik Anomali Suhu Troposfer</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Jenis-Jenis Siklus Air</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Siklus Pendek</a></li>
                                        <li><a href="javascript:void(0);">Siklus Sedang</a></li>
                                        <li><a href="javascript:void(0);">Siklus Panjang</a></li>
                                        <li><a href="javascript:void(0);">Apply Knowledge: Hujan Es dan Hujan Beku</a></li>
                                        <li><a href="javascript:void(0);">Awe Expereince: Peran Angin dalam Siklus Air</a></li>
                                        <li><a href="javascript:void(0);">Spiritual Kognition: Hikmah dibalik Adanya Siklus Air</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><span>Refleksi Kognitif</span></a></li>
                                <li><a href="javascript:void(0);"><span>Refleksi Spiritual</span></a></li>
                            </ul>
                        </li>

                        





                        </li>
                    </ul> -->
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <div class="content container-fluid">