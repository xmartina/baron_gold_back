<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title><?= 'Admin | ' .  $page_name ?>  | <?= $site_name ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $site_name ?>"/>
    <meta name="author" content="<?= $site_name ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= $favicon_url ?>">

    <!-- App css -->
    <link href="<?= $asset_link ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="<?= $asset_link ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <style>
        .card_action_btn{
            background:transparent ;
            border: none;
        }
    </style>
</head>

<!-- body start -->
<body data-menu-color="dark" data-sidebar="default">

<!-- Begin page -->
<div id="app-layout">


    <!-- Topbar Start -->
    <div class="topbar-custom">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                    <li>
                        <button class="button-toggle-menu nav-link">
                            <i data-feather="menu" class="noti-icon"></i>
                        </button>
                    </li>
                    <li class="d-none d-lg-block">
                        <div class="position-relative topbar-search">
                            <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                            <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell" class="noti-icon"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                    <div class="notify-icon">
                                        <img src="<?= $asset_link ?>assets/images/users/user-12.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details">Carl Steadham</p>
                                        <small class="text-muted">5 min ago</small>
                                    </div>
                                    <p class="mb-0 user-msg">
                                        <small class="fs-14">Completed <span class="text-reset">Improve workflow in Figma</span></small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="<?= $asset_link ?>assets/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <div class="notify-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Olivia McGuire</p>
                                            <small class="text-muted">1 min ago</small>
                                        </div>
                                        <p class="mb-1 user-msg">
                                            <small class="fs-14">Added file to <span class="text-reset text-truncate">Create dark mode for our iOS</span></small>
                                        </p>

                                        <div class="d-flex mt-2 align-items-center">
                                            <div class="notify-sub-icon">
                                                <i class="mdi mdi-download-box text-dark"></i>
                                            </div>

                                            <div>
                                                <p class="notify-details mb-0">dark-themes.zip</p>
                                                <small class="text-muted">2.4 MB</small>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="<?= $asset_link ?>assets/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <div class="notify-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Travis Williams</p>
                                            <small class="text-muted">7 min ago</small>
                                        </div>
                                        <p class="mb-1 user-msg">
                                            <small class="fs-14">Mentioned you in the <span class="text-reset text-truncate">Rewrite text-button</span></small>
                                        </p>
                                        <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-primary">@Patryk</span> Please make sure that you're....</p>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="<?= $asset_link ?>assets/images/users/user-8.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details">Violette Lasky</p>
                                        <small class="text-muted">5 min ago</small>
                                    </div>
                                    <p class="mb-0 user-msg">
                                        <small class="fs-14">Completed <span class="text-reset">Create new components</span></small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="<?= $asset_link ?>assets/images/users/user-5.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details">Ralph Edwards</p>
                                        <small class="text-muted">5 min ago</small>
                                    </div>
                                    <p class="mb-0 user-msg">
                                        <small class="fs-14">Completed <span class="text-reset">Improve workflow in React</span></small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="<?= $asset_link ?>assets/images/users/user-6.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <div class="notify-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Jocab jones</p>
                                            <small class="text-muted">7 min ago</small>
                                        </div>
                                        <p class="mb-1 user-msg">
                                            <small class="fs-14">Mentioned you in the <span class="text-reset text-truncate">Rewrite text-button</span></small>
                                        </p>
                                        <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-reset">@Patryk</span> Please make sure that you're....</p>
                                    </div>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= $asset_link ?>assets/images/users/user-11.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                        Admin <i class="mdi mdi-chevron-down"></i>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="pages-profile.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="auth-logout.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>
            </div>

        </div>

    </div>
    <!-- end Topbar -->

    <!-- Left Sidebar Start -->
    <div class="app-sidebar-menu">
        <div class="h-100" data-simplebar>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <div class="logo-box">
                    <a href="<?= $base_url ?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= $site_logo ?>" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?= $site_logo ?>" alt="" height="24">
                                </span>
                    </a>
                    <a href="<?= $base_url ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= $site_logo ?>" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?= $site_logo ?>" alt="" height="24">
                                </span>
                    </a>
                </div>

                <ul id="side-menu">

                    <li class="menu-title">Cards</li>

                    <li>
                        <a href="#sidebarAuth" data-bs-toggle="collapse">
                            <i data-feather="users"></i>
                            <span> Card </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAuth">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= $admin_url ?>">View All Card</a>
                                </li>
                                <li>
                                    <a href="<?= $admin_url ?>pending_approval">Pending Approval</a>
                                </li>
                                <li>
                                    <a href="<?= $admin_url ?>approved_cards">Approved Cards</a>
                                </li>
                                <li>
                                    <a href="<?= $admin_url ?>disabled_cards">Disabled Cards</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
    </div>
    <!-- Left Sidebar End -->