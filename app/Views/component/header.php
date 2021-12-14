<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/brand/Pealogo.png">
  <title>
    การไฟฟ้าส่วนภูมิภาคอำเภอนครชัยศรี
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->

  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-purple navbar-light position-sticky top-0 shadow py-3">
    <div class="container">
      <a   href="<?php echo base_url(); ?>/index.php/home/index">
        <img src="<?php echo base_url(); ?>/assets/img/brand/Pealogo.png" style="width: 80px;"  class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="<?php echo base_url(); ?>/assets/img/brand/Pealogo.png" style="width: 50px;">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
            <a  class="nav-link"  role="button">
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="<?php echo base_url(); ?>/index.php/home/index" class="nav-link"  href="<?php echo base_url(); ?>/home/index" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="text-black nav-link-inner--text"><strong>หน้าเเรก</strong></span>
            </a>
        </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="text-black nav-link-inner--text"><strong>จองห้องประชุม</strong></span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-spaceship"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">ห้องประชุมใหญ่</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn how to use compiling Scss, change brand colors and more.</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-palette"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">ห้องประชุมเล็ก</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for .</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-ui-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">อื่นๆ</h5>
                    <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="text-black nav-link-inner--text"><strong>ซ่อมอุปกรณ์</strong></span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a href="<?php echo base_url(); ?>/index.php/User/repair_list" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-box-2"></i>
                  </div>

                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">รายชื่อซ่อมของ</h6>
                    <p class="description d-none d-md-inline-block mb-0">รายชื่อเเละคิวการซ่อมอุปกรณ์</p>
                  </div>
                </a>
                <?php $session = session(); ?>
                <?php if (isset($_SESSION['user_status']) && $_SESSION["user_status"] == 0) { ?>
                <a href="<?php echo base_url(); ?>/index.php/User/repair_insert_case/<?php echo $session->get('user_id'); ?>" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-single-copy-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">สั่งซ่อมอุปกรณ์</h6>
                    <p class="description d-none d-md-inline-block mb-0">กรอกข้อมูลเพื่อสั่งซ่อมอุปกรณ์</p>
                  </div>
                </a>     
                 <?php } else{ ?>
                  <a href="<?php echo base_url(); ?>/index.php/login/signin" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-single-copy-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">สั่งซ่อมอุปกรณ์</h6>
                    <p class="description d-none d-md-inline-block mb-0">กรอกข้อมูลเพื่อสั่งซ่อมอุปกรณ์</p>
                  </div>
                </a>   
                <?php } ?>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-ui-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">อื่นๆ</h5>
                    <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
       
          <?php $session = session(); ?>

          <?php if (isset($_SESSION['user_status']) && $_SESSION["user_status"] == 0) { ?>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none">  <strong> ผู้ใช้งาน : คุณ <u><?php echo $session->has('user_name'); ?> <?php echo $session->get('user_lastname'); ?></u></strong> </i>
              <span class="text-white nav-link-inner--text"><strong>ผู้ใช้งาน : คุณ <u><?php echo $session->get('user_name'); ?> <?php echo $session->get('user_lastname'); ?></u></strong> </span>            
            </a>

            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a href="<?php echo base_url(); ?>/index.php/User/edit_profile/<?php echo $session->get('user_id'); ?>" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">ข้อมูลส่วนตัว</h6>
                  </div>
                </a>
                <a href="<?php echo base_url(); ?>/index.php/User/user_detail_repair/<?php echo $session->get('user_id'); ?>" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-single-copy-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">ประวัติซ่อมอุปกรณ์</h6>
                  </div>
                </a>
                <a href="<?php echo base_url(); ?>/index.php/logout" id="logout" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="fa fa-sign-out"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">ออกจากระบบ</h5>
                  </div>
                </a>
              </div>
            </div>
          </li>
 
          <!-- <li>
          <i href="javascript:;" class="avatar avatar-lg rounded-circle" >
              <img alt="Image placeholder" src="<?php echo base_url(); ?>/uploads/ImageUser/<?php echo $session->get('user_img'); ?>">
          </i></li> -->
      
        <br>
      <?php } else{ ?>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>/index.php/register/signup"  class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-registered"></i>
              </span>
              <span class="nav-link-inner--text">ลงทะเบียน</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/index.php/login/signin"  class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-sign-in"></i>
              </span>
              <span class="nav-link-inner--text">เข้าสู่ระบบ</span>
            </a>
          </li>
         
      </form>
                <?php } ?>
   
        </ul>
      </div>
    </div>
  </nav>
</body>  </div>

<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo base_url(); ?>/assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min">
    
    <title>Repair</title>
</head>
<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<? echo base_url();?>">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <?php if (isset($_SESSION['status']) && $_SESSION["status"] == 0) { ?>
      <form class="d-flex">
        <button class="btn btn-success" type="submit"><?php echo $session->get('name'); ?></button>&nbsp;
        <a href="/logout" class="btn btn-danger">Logout</a>
      </form>
      <?php }else if (isset($_SESSION['status']) && $_SESSION["status"] == 1) { ?>
        <form class="d-flex">
        <button class="btn btn-success" type="submit"><?php echo $session->get('name'); ?></button>&nbsp;
        <a href="/logout" class="btn btn-danger">Logout</a>
      </form>
      <?php } else{ ?>
        <form class="d-flex">
        <a href="/signup" class="btn btn-warning" type="submit">ลงทะเบียน</a>&nbsp;
        <a href="/signin" class="btn btn-success" type="submit">เข้าสู่ระบบ</a>
      </form>
                <?php } ?>
    </div>
  </div>
</nav>
<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<? echo base_url();?>">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <?php if (isset($_SESSION['status']) && $_SESSION["status"] == 0) { ?>
      <form class="d-flex">
        <button class="btn btn-success" type="submit"><?php echo $session->get('name'); ?></button>&nbsp;
        <a href="/logout" class="btn btn-danger">Logout</a>
      </form>
      <?php }else if (isset($_SESSION['status']) && $_SESSION["status"] == 1) { ?>
        <form class="d-flex">
        <button class="btn btn-success" type="submit"><?php echo $session->get('name'); ?></button>&nbsp;
        <a href="/logout" class="btn btn-danger">Logout</a>
      </form>
      <?php } else{ ?>
        <form class="d-flex">
        <a href="/signup" class="btn btn-warning" type="submit">ลงทะเบียน</a>&nbsp;
        <a href="/signin" class="btn btn-success" type="submit">เข้าสู่ระบบ</a>
      </form>
                <?php } ?>
    </div>
  </div>
</nav> -->