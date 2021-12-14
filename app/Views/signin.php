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
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-5">
                    <div class="text-muted text-center mb-3"></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                               <img src="<?php echo base_url(); ?>/assets/login.png" width="50%">
                            </a>                 
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-1">
                        <div class="text-center text-muted mb-4">
                        <h2 class="text-black">ล็อคอิน</h2>
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
                        <form action="<?php echo base_url(); ?>/index.php/Login/loginAuth" method="post">
                            <div class="form-group mb-3">
                                
                                <div class="input-group input-group-alternative">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="ni ni-email-83"></i></span>
                                    </div>
                                   
                                    <input type="email" name="user_email" placeholder="Email" value="<?= set_value('user_email') ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group focused">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
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
                        <a href="#" class="text-light"><small>ลืมรหัสผ่าน?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="/register/signup" class="text-light"><small>ลงทะเบียน</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>