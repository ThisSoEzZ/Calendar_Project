<script>
  <?php if (session()->getFlashdata('success')) : ?>
    swal("สำเร็จ", "<?= session()->getFlashdata('success') ?>", "success");
  <?php endif; ?>

  <?php if (session()->getFlashdata('profilesuccess')) : ?>
    swal("สำเร็จ", "<?= session()->getFlashdata('profilesuccess') ?>", "success");
  <?php endif; ?>

  <?php if (session()->getFlashdata('profileimgsuccess')) : ?>
    swal("สำเร็จ", "<?= session()->getFlashdata('profileimgsuccess') ?>", "success");
  <?php endif; ?>
</script>
<style>

  </style>
<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">ข้อมูลการจองห้องประชุม</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">

            <div class="container mt-5">
              <!-- <center><h2> รายชื่อ</h2></center> -->
              <div class="mt-3">
                <div style="width: 100%; padding-left: -55px;">
                  <div class="table-responsive">

                    <table class="display" id="users-list" style="width:100%">
                      <a href="<?php echo base_url(); ?>/index.php/Admin/admin_all_Booking" class="btn btn-info">การจองห้องประชุมทั้งหมด <?= $count0 ?></span></a>&nbsp;
                      <a href="<?php echo base_url(); ?>/index.php/Admin/bystatusAdmin/0?status=รอดำเนินการ" class="btn btn-warning">รอการยืนยัน <?= $count1 ?></span></a>&nbsp;
                      <a href="<?php echo base_url(); ?>/index.php/Admin/bystatusAdmin/1?status=กำลังดำเนินการ" class="btn btn-success">ยืนยันเรียบร้อย<?= $count2 ?></span></a>&nbsp;
                      <a href="<?php echo base_url(); ?>/index.php/Admin/bystatusAdmin/2?status=เสร็จสิ้น" class="btn btn-danger">ยกเลิกการจอง <?= $count3 ?></span></a>&nbsp;
                      <thead>
                        <tr>
                          <th>เลขที่บันทึก</th>
                          <th>วันที่</th>
                          <th>ชื่อผู้จองประชุม</th>
                          <th>หัวข้อประชุม</th>
                          <th>ชื่อห้องประชุม</th>
                          <th>
                            <center>สถานะ</center>
                          </th>
                          <th></th><th></th><th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","มกราคม.","กุมภาพันธ์.","มีนาคม.","เมษายน.","พฤษภาคม.","มิถุนายน.","กรกฎาคม.","สิงหาคม.","กันยายน.","ตุลาคม.","พฤศจิกายน.","ธันวาคม.");
		$strMonthThai=$strMonthCut[$strMonth];
		return " $strDay $strMonthThai $strYear   <b>เวลา</b> : $strHour:$strMinute";
	}
?>
                        <?php if ($booking) : ?>
                          <?php foreach ($booking as $booking) : ?>
                            <tr>
                              <td >รายการที่<?php echo $booking['meeting_id']; ?></td>
                              <td>
                              <b>เริ่ม</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php $strDate = $booking['start_date'];
                                  echo DateThai($strDate); ?> น.<br>
                                 <b> สิ้นสุด</b> : <?php $strDate = $booking['end_date'];
                                  echo DateThai($strDate); ?> น.
                              </td>
                              <td>
                                <b><?php echo $booking['meeting_titlename']; ?> <?php echo $booking['meeting_name']; ?> <?php echo $booking['meeting_lastname']; ?></b><br>
                                เบอร์โทรศัพท์ : <?php echo $booking['meeting_phone']; ?>
                              </td>
                              <td><b><?php echo $booking['meeting_title']; ?></b><br>
                                  รายละเอียด : <?php echo $booking['meeting_detail']; ?>
                                </td>
                                <td ><?php echo $booking['room_name']; ?></td>
                                <td align="center">
                                  <?php
                                  if ($booking['meeting_status'] == 0) {
                                    $style = 'color:orange';
                                  } elseif ($booking['meeting_status'] == 1) {
                                    $style = 'color:green';
                                  } else {
                                    $style = 'color:red';
                                  }
                                  ?>
                                  <a style="<?= $style; ?>">
                                    <?php
                                    if ($booking['meeting_status'] == 0) {
                                      echo 'กำลังรออนุมัติ';
                                    } elseif ($booking['meeting_status'] == 1) {
                                      echo 'อุนมัติเรียบร้อย';
                                    } else {
                                      echo 'ยกเลิก';
                                    }
                                    ?>
                                </td>

                                <td>
                                <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/AcceptStatus/<?= $booking['meeting_id']; ?>" class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="รายละเอียดข้อมูลการจอง" data-container="body" data-animation="true"> <i class="large material-icons">info</i></a> </center>
                                </td>
                                <td>
                                <?php if ($booking['meeting_status'] == 2) { ?>
                                  <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/AcceptStatus/<?= $booking['meeting_id']; ?>" class="btn btn-success btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ยืนยันการจองห้องประชุม" data-container="body" data-animation="true"><i class="large material-icons">check</i></a> </center>


                                <?php } else if ($booking['meeting_status'] == 1) { ?> 

                                  <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/CancelStatus/<?= $booking['meeting_id']; ?>" class="btn btn-danger btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ยกเลิกการจองห้องประชุม" data-container="body" data-animation="true"><i class="large material-icons">cancel</i></a> </center>

                                <?php } else {?>

                                  <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/AcceptStatus/<?= $booking['meeting_id']; ?>" class="btn btn-success btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ยืนยันการจองห้องประชุม" data-container="body" data-animation="true"><i class="large material-icons">check</i></a> </center>

                                  <?php } ?>
                              </td><td>
                              <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Admin/Admindeleteinformation/<?= $booking['meeting_id']; ?>" class="btn btn-danger btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="ลบการจองห้องประชุม" data-container="body" data-animation="true"> <i class="large material-icons">delete</i></a> </center>
                              </td>

                                  

                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script>
              $(document).ready(function() {
                $('#users-list').DataTable({
                  "order": [
                    [0, "DESC"]
                  ],
                  "columnDefs": [
    { "width": "5%", "targets": 0 },
    { "width": "30%", "targets": 1 },
    { "width": "20%", "targets": 2 },
    { "width": "20%", "targets": 3 },
    { "width": "10%", "targets": 4 },
    { "width": "5%", "targets": 5 },
    { "width": "5%", "targets": 6 },
    { "width": "5%", "targets": 7 },
    { "width": "5%", "targets": 8 },

  ]
                });
              });

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
      <script src="https://unpkg.com/feather-icons"></script>
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