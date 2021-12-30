    <style>
.form-control{
          border : solid ;
          padding-left:20px; /*left-right-top-bottom-depend on ur choice*/
          /* background : DarkMagenta; */
}
        </style>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">รายชื่อผู้ดูเเลระบบ</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                  
              <div class="container mt-5">
  <!-- <center><h2> รายชื่อ</h2></center> -->
  <div class="mt-3">
  <div style="width: 100%; padding-left: -15px;">
  <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                        </div>
                        <form method="post" action="<?= base_url('/index.php/Admin/updateProfileAdmin/' . $user['user_id']) ?>" enctype="multipart/form-data">
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
                            <br>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <!-- <input type="hidden" id="user_id" name="user_id" value="<?php echo $user['user_id']; ?>" class="form-control" /> -->
                                    <div class="col-sm-2">
                                        คำนำหน้า
                                        <select class="form-control" name="user_title" value="<?php echo $user['user_title']; ?>">
                                            <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        ชื่อ
                                        <input type="text" id="user_name" name="user_name" value="<?php echo $user['user_name']; ?>" class="form-control" />

                                    </div>
                                    <div class="col-sm-5">
                                        นามสกุล
                                        <input type="text" id="user_lastname" name="user_lastname" value="<?php echo $user['user_lastname']; ?>" class="form-control" />

                                    </div>
                                </div><br>

                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            อีเมล
                                            <input type="text" id="user_email" name="user_email" value="<?php echo $user['user_email']; ?>" class="form-control" />

                                        </div>
                                        <div class="col-sm-6">
                                            เบอร์โทรศัพท์
                                            <input type="text" id="user_phone" name="user_phone" value="<?php echo $user['user_phone']; ?>" class="form-control" />

                                        </div>
                                    </div><br>
                                    <!-- <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                รหัสผ่าน
                                                <input type="password" id="user_password" name="user_password" value="<?php echo $user['user_password']; ?>" class="form-control" />

                                            </div>

                                        </div><br> -->
                                        <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/editpasswordAdmin/<?= $user['user_id'];?>" class="btn btn-sm btn-info btn-tooltip">เเก้ไขรหัสผ่าน</a>
                                        <br><br><br><br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success">ตกลง</button>
                                        </div>
                        </form> &nbsp;
                    </div>
  </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('#users-list').DataTable( {
        "order": [[ 0, "DESC" ]]
    } );
} );

  $.extend(true, $.fn.dataTable.defaults, {
    "language": {
              "sProcessing": "กำลังดำเนินการ...",
              "sLengthMenu": "แสดง_MENU_ แถว",
              "sZeroRecords": "ไม่พบข้อมูล",
              "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
              "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
              "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
              "sInfoPostFix": "",
              "sSearch": "ค้นหา:",
              "sUrl": "",
              "oPaginate": {
                            "sFirst": "เิริ่มต้น",
                            "sPrevious": "ก่อนหน้า",
                            "sNext": "ถัดไป",
                            "sLast": "สุดท้าย"
              }
     }
});
</script>
<br>
        </div>
      </div>
    
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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