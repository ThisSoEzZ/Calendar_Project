<style>
.errors {
  color: #a94442;
  /* border: 2px solid red; */
  /* padding:1px 20px 1px 20px; */
}
</style>
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">เเก้ไขรหัสผ่าน</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/index.php/User/edit_profile/<?= $user['user_id'];?>">ข้อมูลส่วนตัว</a>
                  </li>
                  <li class="breadcrumb-item active">เเก้ไขรหัสผ่าน</a>
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
                    <h4 class="card-title">เเก้ไขรหัสผ่าน</h4>
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
                    <form method="post" id="add_case" action="<?= base_url('/index.php/User/updatePassword/' . $user['user_id']) ?>" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>">

                        
                                        <div class="form-group mb-3">
                                        รหัสผ่าน        
        <input type="password" id="user_password" name="user_password" value="<?php echo $user['user_password']; ?>" class="form-control" />
    </div>
                                        <!-- <div class="form-group mb-3">
        รหัสผ่านอีกครั้ง
        
        <input type="password" name="confirmpassword" placeholder="รหัสผ่านอีกครั้ง" class="form-control" >
    </div> -->
                                    </div><br>
                                 
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success">ตกลง</button>
                                        </div>
                        </form> &nbsp;

                </div>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_case").length > 0) {
          $("#add_case").validate({
            errorClass: 'errors',
            rules: {
                user_password: {
                required: true,
                minlength: 6,
              },
          
         
            },
            
            messages: {
                user_password: {
                required: "กรุณาใส่ข้อมูล",
                minlength: "รหัสผ่านต้องไม่ตํ่ากว่า 6 ตัว",
              }, 
           
            
            },
          })
        }
      </script>
    