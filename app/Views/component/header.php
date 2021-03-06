<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>ระบบจองห้องประชุม</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/theme-assets/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS--> 
    <!-- bg-purple -->
  </head>
<style>
#inner {
   display: block;
    margin-left: auto;
    margin-right: auto 
}
  </style>

  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-arrow-up"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
         

       
        

      
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form action="<?php echo base_url(); ?>/index.php/FullCalendar/getRecords">
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">

                   

                          <input class="form-control" id="search" name="q" type="text" placeholder="กรอกคำที่จะค้นหา..."><br>
                         <center> <button class="btn mr-1 mb-1 btn-success btn-sm" type="submit" id="button-addon2">ค้นหา</button> </center>



                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                  
                </ul>
              </li>   
            

            </ul>
            <ul class="nav navbar-nav mr-auto float-center">

            <li id="inner" class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide"  href="<?php echo base_url(); ?>/index.php"><i class="ficon ft-home">
               ระบบจองห้องประชุม กฟก.3</i></a>
               </ul>


            <!-- <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul> -->



            <?php $session = session(); ?>

<?php if (isset($_SESSION['user_status']) && $_SESSION["user_status"] == 0) { ?>

            <ul class="nav navbar-nav float-right">
              <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li> -->

              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <strong> ผู้ใช้งาน : คุณ <u><?php echo $session->get('user_name'); ?> <?php echo $session->get('user_lastname'); ?></u></strong>
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url(); ?>/uploads/ImageUser/<?php echo $session->get('user_img'); ?>" alt="avatar">
                  <i></i></span>
                </a>
                
                <!-- <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?php echo base_url(); ?>/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><strong></span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/logout"><i class="ft-power"></i> Logout</a>
                  </div>
                </div> -->
              <!-- </li> -->
 
            </ul>
            <?php } else{ ?>
           
            <ul class="nav navbar-nav float-right">
          <li>
            <a href="<?php echo base_url(); ?>/index.php/login/signin"  class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-sign-in"></i>
              </span>
              <span class="nav-link-inner--text">เข้าสู่ระบบ</span>
            </a>
            </li>
            </ul>
              <?php } ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- <?php if(basename($_SERVER['PHP_SELF']) === "index.php"){echo 'active';}?> -->

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?php echo base_url(); ?>/theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url(); ?>/index.php"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo base_url(); ?>/theme-assets/logo.png"/>
              <h1 class="brand-text">ห้องประชุม</h1></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item"><a href="<?php echo base_url(); ?>/index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">หน้าเเรก</span></a>
          </li>
          <?php $session = session(); ?>


          <li class="nav-item"><a href="<?php echo base_url(); ?>/index.php/insert/<?php echo $session->get('user_id');?>"><i class="ft-clock"></i><span class="menu-title" data-i18n="">จองห้องประชุม</span></a>
          </li>
     
          <li class="nav-item"><a href="<?php echo base_url(); ?>/index.php/meeting/meeting_information"><i class="ft-info"></i><span class="menu-title" data-i18n="">ข้อมูลการจอง</span></a>
          </li>
          <!-- <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Cards</span></a>
          </li>
          <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title" data-i18n="">Buttons</span></a>
          </li>
          <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
          </li>
          <li class=" nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
          </li>
          <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a> -->
          </li>
          <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/report/meeting_report"><i class="ft-bar-chart"></i><span class="menu-title" data-i18n="">รายงานการจอง</span></a>

          <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/room/information_room"><i class="ft-book"></i><span class="menu-title" data-i18n="">ห้องประชุม</span></a>
          <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/Meeting/todaymeeting"><i class="ft-star"></i><span class="menu-title" data-i18n="">ประชุมวันนี้</span></a>

          <?php $session = session(); ?>

<?php if (isset($_SESSION['user_status']) && $_SESSION["user_status"] == 0) { ?>
          <hr>
          <li class=" nav-item"><a><strong> ผู้ใช้งาน : คุณ <u><?php echo $session->get('user_name'); ?> <?php echo $session->get('user_lastname'); ?></u></strong></a>
        </li>
        <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/User/edit_profile/<?php echo $session->get('user_id'); ?>"><i class="ft-user"></i><span class="menu-title" data-i18n="">ข้อมูลส่วนตัว</span></a> </li>
        <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/User/meeting_user_information/<?php echo $session->get('user_id'); ?>"><i class="ft-calendar"></i><span class="menu-title" data-i18n="">ข้อมูลส่วนตัวการจอง</span></a> </li>
        <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/logout"><i class="ft-power"></i><span class="menu-title" data-i18n="">ออกจากระบบ</span></a> </li>


        <?php } else{ ?>
          <hr>
          
          <li class=" nav-item"><a href="<?php echo base_url(); ?>/index.php/login/signin"><i class="ft-unlock"></i><span class="menu-title" data-i18n="">เข้าสู่ระบบ</span></a> </li>

          
              <?php } ?>

        </ul>

     
      </div>
      <div class="navigation-background"></div>
    </div>


    <!-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer> -->

      <!-- BEGIN VENDOR JS-->
      <script src="<?php echo base_url(); ?>/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>/theme-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url(); ?>/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url(); ?>/theme-assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/theme-assets/js/scripts/charts/chartjs/bar/bar.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/theme-assets/js/scripts/charts/chartjs/line/line.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- END PAGE LEVEL JS-->