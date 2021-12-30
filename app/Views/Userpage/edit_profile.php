<!-- End Navbar -->
<style>
.errors {
  color: #a94442;
}
</style>
<script>
        <?php if (session()->getFlashdata('Success')) : ?>
            swal("สำเร็จ", "<?= session()->getFlashdata('Success') ?>", "success");
        <?php endif; ?>

        <?php if (session()->getFlashdata('profilesuccess')) : ?>
            swal("สำเร็จ", "<?= session()->getFlashdata('profilesuccess') ?>", "success");
        <?php endif; ?>

        <?php if (session()->getFlashdata('profileimgsuccess')) : ?>
            swal("สำเร็จ", "<?= session()->getFlashdata('profileimgsuccess') ?>", "success");
        <?php endif; ?>
    </script>
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">ข้อมูลส่วนตัว</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
                  </li>
                  <li class="breadcrumb-item active">ข้อมูลส่วนตัว
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
                    <h4 class="card-title">ข้อมูลส่วนตัว</h4>
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
        <!-- edit form column -->
        <div class="col-lg-12 text-lg-center">
            <h2></h2>
            <br>
            <br>
        </div>
        <div class="col-lg-12 personal-info">
        <form method="post" id="add_case" action="<?= base_url('/index.php/updateProfile/' . $user['user_id']) ?>" enctype="multipart/form-data">

        <div class="btn-wrapper text-center">
                                    <figure class="figure">
                                        <img src="<?php echo base_url(); ?>/uploads/ImageUser/<?php echo $user['user_img']; ?>" id="imgUpload" alt="กรุณาอัพเดทรูป" width="150px" height="150" class="rounded" alt="">
                                        <input type="hidden" name="user_img" value="<?php echo $user['user_img']; ?>">
                                    </figure>
                                    <div class="custom-file">
                                        <input type="file" style="display: none;" class="custom-file-input form-control" id="user_img" name="user_img" onchange="readURL(this)">
                                        <div class="invalid-feedback">
                                            กรุณาเลือกไฟล์
                                        </div>
                                        <button class="btn btn-sm btn-primary" type="button" id="button" name="button" value="Upload" onclick="thisFileUpload();">กรุณาเลือกไฟล์</button>
                                    </div>
                                </div>
                                <br>
                <input class="form-control" type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>" />

                <div class="form-group row">

                <div class="col-lg-2">
                    <label> คำนำหน้า  </label> 
                                            <select class="form-control" name="user_title" value="<?php echo $user['user_title']; ?>">
                                                <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
    
                                            </select>
                    </div>

                    <div class="col-lg-5">
                    <label> ชื่อ  </label> 
                        <input class="form-control" type="text" name="user_name" id="user_name" value="<?php echo $user['user_name']; ?>" />
                    </div>

                    <div class="col-lg-5">
                    <label>  นามสกุล  </label> 

                    <input class="form-control" type="text" name="user_lastname" id="user_lastname" value="<?php echo $user['user_lastname']; ?>" />
                    </div>


                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                    <label>  อีเมล  </label> 

                    <input class="form-control" type="text" name="user_email" id="user_email" value="<?php echo $user['user_email']; ?>" />
                    </div>

                    <div class="col-lg-6">
                    <label>  เบอร์โทรศัพท์  </label> 

                    <input class="form-control" type="text" name="user_phone" id="user_phone" value="<?php echo $user['user_phone']; ?>" />
                    </div>
                </div>
                
                <div class="form-group row">
                <div class="col-lg-6">

                <a href="<?php echo base_url(); ?>/index.php/User/edit_password/<?= $user['user_id'];?>"  class="btn btn-info btn-min-width mr-1 mb-1"><i class="ft-pause"></i>เเก้ไขรหัสผ่าน</a>
                </div>  </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label form-control-label"></label>
                    <div class="col-lg-7">
                        <input type="reset" class="btn btn-secondary" value="ยกเลิก" />
                        <input type="submit" class="btn btn-success" value="ตกลง" />
                    </div>
                </div>
            </form>
        </div>
</div>
<hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   

</section>
<!-- // Pie charts section end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- JQuery -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_case").length > 0) {
          $("#add_case").validate({
            errorClass: 'errors',
            rules: {
                user_name: {
                required: true,
              },
              user_lastname: {
                required: true,
              },
         
            },
            
            messages: {
                user_name: {
                required: "กรุณาใส่ข้อมูล",
              }, 
              user_lastname: {
                required: "กรุณาใส่ข้อมูล",
              }, 
            
            },
          })
        }
      </script>
    <script>
      function readURL(input) { // ตอนอัพโหลด แสดงให้ขึ้นรูป
        var reader = new FileReader();
    
        reader.onload = function(e) {
          console.log(e.target.result)
          $('#imgUpload').attr('src', e.target.result).width(140)
        }
    
        reader.readAsDataURL(input.files[0]);
      }
    </script>
    
    <script language="javascript">
      function show_content(id) {
        if (id == 1) {
          document.getElementById("table_1").style.display = "";
          document.getElementById("table_2").style.display = "none";
          document.getElementById("table_3").style.display = "none";
        } else if (id == 2 || id == 3) {
          document.getElementById("table_1").style.display = "none";
          document.getElementById("table_2").style.display = "none";
          document.getElementById("table_3").style.display = "none";
        }
      }
    </script>
    
    <script>
      function thisFileUpload() {
        document.getElementById("user_img").click();
      };
    </script>