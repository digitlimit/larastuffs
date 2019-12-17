<template>
    <div class="landing-common-layouts-default dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="">Larastuffs</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img">
                                                        <!--<img src="/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle">-->
                                                    </div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse"
                                   aria-expanded="false">
                                    <i class="fa fa-fw fa-user-circle"></i>Dashboard
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">preccc text</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                E-Commerce Dashboard Template
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--<div class="footer">-->
                <!--<div class="container-fluid">-->
                    <!--<div class="row">-->
                        <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">-->
                            <!--Copyright © 2018 Larastuffs. All rights reserved.-->
                            <!--<a href="https://emekambah.com">EmekaMbah</a>.-->
                        <!--</div>-->
                        <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">-->
                            <!--<div class="text-md-right footer-links d-none d-sm-block">-->
                                <!--<a href="javascript: void(0);">About</a>-->
                                <!--<a href="javascript: void(0);">Support</a>-->
                                <!--<a href="javascript: void(0);">Contact Us</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </div>
</template>