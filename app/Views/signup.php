<!-- End Navbar -->
<section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    </script>
    <div class="container pt-lg-1">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-5">
                    <div class="text-muted text-center mb-3"></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                               <img src="<?php echo base_url(); ?>/assets/register.jpg" width="35%">
                            </a>                 
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-1">
                    <div class="text-center text-muted mb-4">
                        <h2 class="text-center text-black mb-4">ลงทะเบียน</h2>
                        </div>
<?php if(isset($validation)):?>
<div class="alert alert-warning">
   <?= $validation->listErrors() ?>
</div>
<?php endif;?>
        <?php if (session()->getFlashdata('faillregister')) : ?>
            <div class="alert alert-warning">
            <?= session()->getFlashdata('faillregister') ?>
</div>
        <?php endif; ?>
<form action="<?php echo base_url(); ?>/index.php/Register/store" method="post">
    <div class="form-group mb-3" >
    <div class="row">
    <div class="col-sm-4">
        คำนำหน้า
               <select class="form-control" name="user_title" value="<?= set_value('user_title') ?> ">
              <option value="">เลือกคำนำหน้า</option>
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>

              </select>
</div>
            <div class="col-sm-4">
        ชื่อ
        <input type="text" name="user_name" placeholder="ชื่อ" value="<?= set_value('user_name') ?>" class="form-control" >
</div>
<div class="col-sm-4">
        นามสกุล
        <input type="text" name="user_lastname" placeholder="นามสกุล" value="<?= set_value('user_lastname') ?>" class="form-control" >
</div>
</div>
    </div>

    <div class="form-group mb-3">
        อีเมล
        <input type="text" name="user_email" placeholder="อีเมล" value="<?= set_value('user_email') ?>" class="form-control" >
    </div>

    <div class="form-group mb-3">
        เบอร์โทรศัพท์
        <input type="text" name="user_phone" placeholder="เบอร์โทรศัพท์" value="<?= set_value('user_phone') ?>" class="form-control" >
    </div>

    <div class="form-group mb-3">
        รหัสผ่าน
        <input type="password" name="user_password" placeholder="รหัสผ่าน" class="form-control" >
    </div>

    <div class="form-group mb-3">
        รหัสผ่านอีกครั้ง
        <input type="password" name="confirmpassword" placeholder="รหัสผ่านอีกครั้ง" class="form-control" >
    </div>

    <input type="hidden" name="user_img" class="form-control"  placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="<?= set_value('user_img','Image'); ?>">

    <div class="col-sm-4">
    <input type="hidden" name="user_status" class="form-control"  placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="<?= set_value('user_status','0'); ?>">
    </div>

    <div class="text-center">
                            <button type="submit" class="btn btn-success">ตกลง</button>
                            </div>
</form> &nbsp;
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</section>