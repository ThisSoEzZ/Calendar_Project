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
        <h3 class="content-header-title">ข้อมูลส่วนตัวการจองห้องประชุม</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
              </li>
              <li class="breadcrumb-item active">ข้อมูลส่วนตัวการจองห้องประชุม</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Bar charts section start -->
      <section id="chartjs-bar-charts">
        <!-- Column Chart -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">ข้อมูลส่วนตัวการจองห้องประชุม</h4>
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

                  <div style="width: 100%; padding-left: -15px;">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="users-list">


                        <br><br>
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
                            <th></th>
                            <th></th>
                          </tr>
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
                        </thead>
                        <tbody>
                          <?php if ($user) : ?>
                            <?php foreach ($user as $user) : ?>
                              <tr>
                                <td>เลขที่บันทึก<?php echo $user['meeting_id']; ?></td>
                                <td>
                                <b>เริ่ม</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php $strDate = $user['start_date'];
                                  echo DateThai($strDate); ?> น.<br>
                                 <b> สิ้นสุด</b> : <?php $strDate = $user['end_date'];
                                  echo DateThai($strDate); ?> น.
                                </td>
                                <td>
                                  <b><?php echo $user['meeting_titlename']; ?> <?php echo $user['meeting_name']; ?> <?php echo $user['meeting_lastname']; ?></b><br>
                                  เบอร์โทรศัพท์ : <?php echo $user['meeting_phone']; ?>
                                </td>
                                <td><b><?php echo $user['meeting_title']; ?></b><br>
                                  รายละเอียด : <?php echo $user['meeting_detail']; ?>
                                </td>
                                <td><?php echo $user['room_name']; ?></td>
                                <td align="center">
                                  <?php
                                  if ($user['meeting_status'] == 0) {
                                    $style = 'color:orange';
                                  } elseif ($user['meeting_status'] == 1) {
                                    $style = 'color:green';
                                  } else {
                                    $style = 'color:red';
                                  }
                                  ?>
                                  <a style="<?= $style; ?>">
                                    <?php
                                    if ($user['meeting_status'] == 0) {
                                      echo 'กำลังรออนุมัติ';
                                    } elseif ($user['meeting_status'] == 1) {
                                      echo 'อุนมัติเรียบร้อย';
                                    } else {
                                      echo 'ยกเลิก';
                                    }
                                    ?>
                                </td>

                                <?php
                                if ($user['meeting_status'] == 0) { ?>
                                  <td>
                                    <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/user_meeting_detail_edit/<?= $user['meeting_id']; ?>" class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" data-container="body" data-animation="true"><i class="ft-pause"></i>ดูรายละเอียด/เเก้ไข</a> </center>
                                  </td>
                                  <td>
                                    <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/delete/<?= $user['meeting_id']; ?>" class="btn btn-danger btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" data-container="body" data-animation="true"><i class="ft-command"></i>ยกเลิก</a> </center>
                                  </td>
                                <?php } else if ($user['meeting_status'] == 1) { ?>
                                  <td>
                                    <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/user_meeting_detail_edit/<?= $user['meeting_id']; ?>" class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" data-container="body" data-animation="true"><i class="ft-pause"></i>ดูรายละเอียด/เเก้ไข</a> </center>
                                  </td>
                                  <td>
                                    <center>
                                      <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="จบขั้นตอนเเล้วไม่สามารถยกเลิกได้ สามารถติดต่อสอบถามได้">
                                        <a type="button" class="btn btn-danger btn-min-width mr-1 mb-1" style="pointer-events: none;" disabled><i class="ft-command"></i>ยกเลิก</a>
                                    </center>
                                    </span>
                                  </td>

                                <?php } else { ?>
                                  <td>
                                    <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/user_meeting_detail_edit/<?= $user['meeting_id']; ?>" class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" data-container="body" data-animation="true"><i class="ft-pause"></i>ดูรายละเอียด/เเก้ไข</a> </center>
                                  </td>
                                  <td>
                                    <center>
                                      <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="การจองนี้ถูกยกเลิกเเล้ว สามารถติดต่อสอบถามได้">
                                        <a type="button" class="btn btn-danger btn-min-width mr-1 mb-1" style="pointer-events: none;" disabled><i class="ft-command"></i>ยกเลิก</a>
                                    </center>
                                    </span>
                                  </td>
                                <?php } ?>




                                <!-- 
             <td align="center">
           
              <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/user_meeting_detail_edit/<?= $user['meeting_id']; ?>" class="btn btn-info btn-min-width mr-1 mb-1"><i class="ft-pause"></i> เเก้ไข/รายละเอียด</a>
             
            </td> 
            <td align="center">
           
           <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/delete/<?= $user['meeting_id']; ?>" class="btn btn-danger btn-min-width mr-1 mb-1">ยกเลิก<i class="ft-command"></i></a>
          
         </td>  -->



                              </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#users-list').DataTable({
      "language": {
      "emptyTable": "ไม่พบข้อมูลประชุม"
    },
      "order": [
        [0, "DESC"]
      ],
      "columnDefs": [
    { "width": "3%", "targets": 0 },
    { "width": "25%", "targets": 1 },
    { "width": "20%", "targets": 2 },
    { "width": "30%", "targets": 3 },

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