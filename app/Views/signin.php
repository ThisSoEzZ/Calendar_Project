
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">เข้าสู่ระบบ</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
                  </li>
                  <li class="breadcrumb-item active">เข้าสู่ระบบ
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Bar charts section start -->
<section id="chartjs-bar-charts">
    <!-- Column Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">เข้าสู่ระบบ</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                      
                    <div class="container">

                  <!-- End Navbar -->
<section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- <script>

        <?php if (session()->getFlashdata('Success')) : ?>
            swal("สำเร็จ", "<?= session()->getFlashdata('Success') ?>", "success");
        <?php endif; ?>
    </script>
       -->
    <div class="container pt-lg-9">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card bg-secondary shadow border-2">
                    <div class="card-header bg-white pb-5">
                        <div class="btn-wrapper text-center">
                                  
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-1">
                        <div class="text-center text-muted mb-4">
                        <h2 class="text-light">เข้าสู่ระบบ</h2>
                        </div>
                    
            <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
</div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('msg2')) : ?>
            <div class="alert alert-warning">
            <?= session()->getFlashdata('msg2') ?>
</div>
        <?php endif; ?>
        <script>
        <?php if (session()->getFlashdata('logoutsuccess')) : ?>
            swal("สำเร็จ", "<?= session()->getFlashdata('logoutsuccess') ?>", "success");
        <?php endif; ?>
    </script>
     <script>
        <?php if (session()->getFlashdata('registerSuccess')) : ?>
            swal("สำเร็จ", "<?= session()->getFlashdata('registerSuccess') ?>", "success");
        <?php endif; ?>
    </script>
     <script>
        <?php if (session()->getFlashdata('failogin')) : ?>
            swal("เเจ้งเตือน", "<?= session()->getFlashdata('failogin') ?>", "warning");
        <?php endif; ?>
    </script>
                        <form action="<?php echo base_url(); ?>/index.php/Login/loginAuth" method="post">
                            <div class="form-group mb-3">
                                
                                <div class="input-group input-group-alternative">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="ft-user"></i></span>
                                    </div>
                                    <input type="text" name="user_id" placeholder="Email" value="<?= set_value('user_id') ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group focused">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ft-lock"></i></span>
                                    </div>
                                    
                                    <input type="password" name="user_password" placeholder="Password" class="form-control" >
                                </div>
                            </div>
                         &nbsp;
                            <div class="text-center">
                            <button type="submit" class="btn btn-success">ตกลง</button>
                            </div>
                        </form> &nbsp;
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <!-- <a href="#" class="text-black"><small>ลืมรหัสผ่าน?</small></a> -->
                    </div>
                    <div class="col-6 text-right">
                        <!-- <a href="/register/signup" class="text-black"><small>ลงทะเบียน</small></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
<!-- 
    Bar Chart
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bar Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="bar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
// Bar charts section end

line chart section start
<section id="chartjs-line-charts">
    Line Chart
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs">
                            <div class="height-500">
                        <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
// line chart section end

Pie charts section start
<section id="chartjs-pie-charts">
    <div class="row">
        Simple Pie Chart
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Pie Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-pie-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        Simple Doughnut Chart
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Doughnut Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-doughnut-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     -->
</section>
<!-- // Pie charts section end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
