
<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.0
* Author: Alexis Luna
* Copyright 2020 Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">
<?php  $firstname =  $this->session->userdata('firstname'); 


?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Donofund</title>
    <link href="<?php echo base_url() ?>assets/admin/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/master.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
     <link href="<?php echo base_url() ?>assets/admin/vendor/datatables/datatables.min.css" rel="stylesheet">
     <link href="<?php echo base_url() ?>assets/admin/vendor/airdatepicker/dist/css/datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/vendor/mdtimepicker/mdtimepicker.min.css" rel="stylesheet">
       <style>
        /* inline style for mdtimepicker demo */
        .mdtp__wrapper.inline {display: block !important;position: relative;box-shadow: none;border: 1px solid #E0E0E0;max-width: 300px;margin: 0 !important;padding: 0 !important;transform: inherit;left: 0;top: 0;}
        .mdtp__wrapper.inline .mdtp__time_holder {width: auto;}
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <img style="width: 44%" src="<?php echo base_url() ?>assets/admin/img/logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
            <?php if(!$this->ion_auth->is_admin()){?>
                <li>
                    <a href="<?php echo base_url() ?>dashboard"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>campaign"><i class="fas fa-file-alt"></i> Campigns</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>donation"><i class="fas fa-table"></i> Donation</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>withdrawal"><i class="fas fa-chart-bar"></i> Withdrawals</a>
                </li>
               <!--  <li>
                    <a href="<?php echo base_url() ?>#"><i class="fas fa-cog"></i>Account Settings</a>
                </li>
 -->
                <?php }else{?>
               <li>
                    <a href="<?php echo base_url() ?>admin/dashboard"><i class="fas fa-home"></i> Dashboard</a> 
                </li>

                 <li>
                    <a href="<?php echo base_url() ?>admin/all-categories"><i class="fas fa-file-alt"></i> Categories</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/all-campaign"><i class="fas fa-file-alt"></i> All Campigns</a>
                </li>
                 <li>
                    <a href="<?php echo base_url() ?>admin/reported-campaign"><i class="fas fa-file-alt"></i> Campigns Reported</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/all-donation"><i class="fas fa-table"></i> All Donation</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/withdrawal-requests"><i class="fas fa-chart-bar"></i> Withdrawals Request</a>
                </li>

                <li>
                    <a href="<?php echo base_url() ?>admin/members"><i class="fas fa-chart-bar"></i> Members</a>
                </li>

                  <li>
                    <a href="#pagesmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Settings</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="<?php echo base_url() ?>admin/settings"><i class="fas fa-cog"></i>Site Settings</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/static_languages"><i class="fas fa-info-circle"></i> Static Languages</a>
                        </li>
                        <!-- <li>
                            <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                        </li> -->
                    </ul>
                </li>
                

                <?php } ?>
            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li  ><a href="<?php echo base_url()?>" class="btn btn-outline-secondary mb-2 set-btn"><i class="fas fa-home"></i> Back To Site</a></li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php echo $firstname ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                       
                                        <li><a href="<?php echo base_url() ?>#" class="dropdown-item"><i class="fas fa-envelope"></i> Notification</a></li>
                                        <li><a href="<?php echo base_url() ?>#" class="dropdown-item"><i class="fas fa-cog"></i> Account Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="<?php echo base_url() ?>auth/logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>