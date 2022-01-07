<style>
.form-control{
          border : solid ;
          padding-left:20px; /*left-right-top-bottom-depend on ur choice*/
          /* background : DarkMagenta; */
}

#yourContainer img {
    height:370px;
    width:500px;/*maintain aspect ratio*/
    max-width:500px;
}
        </style>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">รายละเอียดการจองห้องประชุม รายการที่ <?php echo $room['meeting_id']; ?></h6>
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
            <form  method="post" action="<?= site_url('/index.php/Admin/Admin_update_detail_meeting/'. $room['meeting_id']) ?>">
            <h1>Test ID : <?php echo $room['meeting_id']; ?></h1>
              <div class="form-group">
                <label>calendar_title</label>
                <input type="text" id="meeting_title" name="meeting_title" value="<?php echo $room['meeting_title']; ?>" class="form-control" />
              </div>
              <div class="form-group">
                <label>start_date</label>
                <input type="text" name="start_date" class="form-control" value="<?php echo $room['start_date']; ?>" />
              </div>
              <div class="form-group">
                <label>end_date</label>
                <input type="text" name="end_date" class="form-control" value="<?php echo $room['end_date']; ?>"/>
              </div>
              
                <input type="hidden" name="backgroundColor" class="form-control" value="<?php echo $room['backgroundColor']; ?>"/>
              
              <div class="form-group">
                <label>information</label>
                <input type="text" name="meeting_detail" class="form-control" value="<?php echo $room['meeting_detail']; ?>"/>
              </div>
              <div class="form-group">
                <label>meeting_room</label>
                <input type="text" name="room_id" class="form-control" value="<?php echo $room['room_name']; ?>"/>
              </div>
              <div class="form-group">
                <label>meeting_round</label>
                <input type="text" name="meeting_round" class="form-control" value="<?php echo $room['meeting_round']; ?>"/>
              </div>
              <div class="form-group">
                <label>meeting_record</label>
                <input type="text" name="meeting_record" class="form-control" value="<?php echo $room['meeting_record']; ?>"/>
              </div>
              <div class="form-group">
                <label>meeting_location</label>
                <input type="text" name="meeting_location" class="form-control" value="<?php echo $room['meeting_location']; ?>"/>
              </div>
              
        
              <?php
        $checkboxes = array(
            '1' => 'Classroom', 
            '2' => 'Webx', 
            '3' => 'Video Conferance', 
        
        );
        ?>
                      <small class="text-uppercase font-weight-bold">meeting_type</small>
        
        <?php
        $course = explode(",",$room['meeting_type1']);
        foreach ($checkboxes as $key => $value) {
        ?>
          <div class="form-group">
                    <div class="mb-3">
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox<?php echo $key ?>" name="meeting_type1[]" value="<?php echo $value ?>" <?php echo in_array($value, $course)?'checked="checked"':'' ?> >
                    <label class="form-check-label" for="inlineCheckbox<?php echo $key ?>"><?php echo $value ?></label>
                    </div>
                    </div>
           
        <?php
        }
        ?>
              <?php
        $checkboxes = array(
            '1' => 'เครื่องดื่ม', 
            '2' => 'อาหารว่าง', 
            '3' => 'ไม่ต้องการ', 
        
        );
        ?>
                      <small class="text-uppercase font-weight-bold">meeting_drink</small>
        
        <?php
        $course = explode(",",$room['meeting_drink']);
        foreach ($checkboxes as $key => $value) {
        ?>
          <div class="form-group">
                    <div class="mb-3">
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox<?php echo $key ?>" name="meeting_drink[]" value="<?php echo $value ?>" <?php echo in_array($value, $course)?'checked="checked"':'' ?> >
                    <label class="form-check-label" for="inlineCheckbox<?php echo $key ?>"><?php echo $value ?></label>
                    </div>
                    </div>
           
        <?php
        }
        ?>
              <?php
        $checkboxes = array(
            '1' => 'เครื่องคอมพิวเตอร์', 
            '2' => 'เครื่องฉายและจอโปรเจ็คเตอร์', 
            '3' => 'เครื่องเสียงพร้อมอุปกรณ์', 
        
        );
        ?>
                      <small class="text-uppercase font-weight-bold">meeting_other_requirements</small>
        
        <?php
        $course = explode(",",$room['meeting_other_requirements']);
        foreach ($checkboxes as $key => $value) {
        ?>
          <div class="form-group">
                    <div class="mb-3">
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox<?php echo $key ?>" name="meeting_other_requirements[]" value="<?php echo $value ?>" <?php echo in_array($value, $course)?'checked="checked"':'' ?> >
                    <label class="form-check-label" for="inlineCheckbox<?php echo $key ?>"><?php echo $value ?></label>
                    </div>
                    </div>
           
        <?php
        }
        ?>
                 
          <!-- <div class="row">
                                <div class="col-sm-12">
                                meeting_other_requirements
                                  <textarea class="form-control" name="meeting_other_requirements" value="<?php echo $room['meeting_other_requirements']; ?>" rows="3"><?php echo $room['meeting_other_requirements']; ?></textarea>
                                </div>
                              </div>
              -->
                  <div class="form-group">
                <label>meeting_amount</label>
                <input type="text" name="meeting_amount" class="form-control" value="<?php echo $room['meeting_amount']; ?>"/>
              </div>
              <div class="form-group">
                <label>meeting_agency</label>
                <input type="text" name="meeting_agency" class="form-control" value="<?php echo $room['meeting_agency']; ?>"/>
              </div>  <div class="form-group">
                <label>meeting_grouppepole</label>
                <input type="text" name="meeting_grouppepole" class="form-control" value="<?php echo $room['meeting_grouppepole']; ?>"/>
              </div>  <div class="form-group">
                <label>meeting_employee_id</label>
                <input type="text" name="user_id" class="form-control" value="<?php echo $room['user_id']; ?>"/>
                
              </div> <div class="form-group">
                                    <label> <b>คำนำหน้า </b></label>
                                    <select class="form-control" name="meeting_titlename" value="<?php echo $room['meeting_titlename']; ?>">
                                      <option value="<?php echo $room['meeting_titlename']; ?>"><?php echo $room['meeting_titlename']; ?></option>
                                      <option value="นาย">นาย</option>
                                      <option value="นาง">นาง</option>
                                      <option value="นางสาว">นางสาว</option>
                                    </select> <div class="form-group"> </div> 
                <label>meeting_name</label>
                <input type="text" name="meeting_name" class="form-control" value="<?php echo $room['meeting_name']; ?>"/>
              </div>  <div class="form-group">
                <label>meeting_lastname</label>
                <input type="text" name="meeting_lastname" class="form-control" value="<?php echo $room['meeting_lastname']; ?>"/>
              </div>  <div class="form-group">
                <label>meeting_phone</label>
                <input type="text" name="meeting_phone" class="form-control" value="<?php echo $room['meeting_phone']; ?>"/>
              </div>
        
             
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success">เเก้ไข</button>
                                            <?php if ($room['meeting_status'] == 2) { ?>
                                  <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/AcceptStatus/<?= $room['meeting_id']; ?>" class="btn btn-success btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ยืนยันการจองห้องประชุม" data-container="body" data-animation="true"><i class="large material-icons">check</i>ยืนยันการจอง</a> </center>


                                <?php } else if ($room['meeting_status'] == 1) { ?> 

                                  <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/CancelStatus/<?= $room['meeting_id']; ?>" class="btn btn-danger btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ยกเลิกการจองห้องประชุม" data-container="body" data-animation="true"><i class="large material-icons">cancel</i>ยกเลิกการจอง</a> </center>

                                <?php } else {?>

                                  <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/AcceptStatus/<?= $room['meeting_id']; ?>" class="btn btn-success btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ยืนยันการจองห้องประชุม" data-container="body" data-animation="true"><i class="large material-icons">check</i>ยืนยันการจอง</a> </center>

                                  <?php } ?>
                                        </div>
                                   
        
        <!-- 
              <div class="form-group">
                <button type="submit" class="btn btn-success">ตกลง</button>
              </div>
         -->
        
        
        
        
        
            </form>
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
        document.getElementById("case_img").click();
    };
</script>
