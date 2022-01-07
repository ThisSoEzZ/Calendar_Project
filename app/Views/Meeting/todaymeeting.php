<style>
  .errors {
    color: #a94442;
    /* border: 2px solid red; */
    /* padding:1px 20px 1px 20px; */
  }
</style>
<?php
 
$dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
$monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
$monthTH_brev = [null,'ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
function thai_date_and_time($time){   // 19 ธันวาคม 2556 เวลา 10:10:43
    global $dayTH,$monthTH;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " เวลา ".date("H:i:s",$time);
    return $thai_date_return;   
} 
function thai_date_and_time_short($time){   // 19  ธ.ค. 2556 10:10:4
    global $dayTH,$monthTH_brev;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " ".date("H:i:s",$time);
    return $thai_date_return;   
} 
function thai_date_short($time){   // 19  ธ.ค. 2556a
    global $dayTH,$monthTH_brev;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
function thai_date_fullmonth($time){   // 19 ธันวาคม 2556
    global $dayTH,$monthTH;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
function thai_date_short_number($time){   // 19-12-56
    global $dayTH,$monthTH;   
    $thai_date_return = date("d",$time);   
    $thai_date_return.="-".date("m",$time);   
    $thai_date_return.= "-".substr((date("Y",$time)+543),-2);   
    return $thai_date_return;   
} 
?>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">ประชุมวันนี้</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
              </li>
              <li class="breadcrumb-item active">ประชุมวันนี้</a>
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
                <h4 class="card-title">ประชุมวันนี้</h4>
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
                <!-- <a href="<?php echo base_url(); ?>/index.php/FullCalendar/index" class="btn btn-info">ทั้งหมด </span></a>
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/0?" class="btn btn-warning">กำลังรออนุมัติ</span></a>
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/1?" class="btn btn-success">อนุมัติเรียบร้อย</span></a>
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/2?" class="btn btn-danger">รายการยกเลิก</span></a>
 <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                        ค้นหา
                                    </button>


                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">ค้นหา</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <center> <a href="<?php echo base_url(); ?>/index.php/FullCalendar/index" class="btn btn-info">ทั้งหมด </span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/0?" class="btn btn-warning">กำลังรออนุมัติ</span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/1?" class="btn btn-success">อนุมัติเรียบร้อย</span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/2?" class="btn btn-danger">รายการยกเลิก</span></a>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="container">

                                                    <form action="<?php echo base_url(); ?>/index.php/FullCalendar/getRecords">
                                                        <div class="input-group mb-3">

                                                            <input type="text" name="q" class="form-control" placeholder="Test ค้นหา" aria-label="Test ค้นหา" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Test ค้นหา</button>

                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="container">
                                                <form action="<?php echo base_url(); ?>/index.php/FullCalendar/byroom">
                                                        <div class="input-group mb-3">
                                                      
                                                        <select class="custom-select" id="customSelect" name="q" aria-describedby="button-addon3">
                                                            <option selected>เลือกห้องประชุม</option>
                                                            <option value="1">ห้องประชุม1</option>
                                                            <option value="2">ห้องประชุม2</option>
                                                            <option value="3">ห้องประชุม3</option>
                                                        </select>                           
                                                    

                                                          <button class="btn btn-outline-secondary" type="submit" id="button-addon3">Test ค้นหา</button>

                                                        </div>
                                                    </form>
                                                   
                                                </div>


                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
    <!-- <div>
                                                        <center> <a href="<?php echo base_url(); ?>/index.php/meeting/meeting_information" class="btn btn-info">ทั้งหมด </span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/Meeting/bystatusMeeting/0?" class="btn btn-warning">กำลังรออนุมัติ</span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/Meeting/bystatusMeeting/1?" class="btn btn-success">อนุมัติเรียบร้อย</span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/Meeting/bystatusMeeting/2?" class="btn btn-danger">รายการยกเลิก</span></a>
                                                        </center>
                                                    </div> -->

                  <div style="width: 100%; padding-left: -15px;">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="users-list">
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
                          </tr>
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

                             
                                  <td>
                                    <center> <a type="button" href="<?php echo base_url(); ?>/index.php/Meeting/DetailMeetingRoom/<?= $user['meeting_id']; ?>" class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="tooltip" data-placement="top" data-container="body" data-animation="true"><i class="ft-pause"></i>ดูรายละเอียด</a> </center>
                                  </td>
                                

                            




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
      "emptyTable": "ไม่พบการประชุมวันนี้"
    },
      "order": [
        [0, "DESC"]
      ],
      "columnDefs": [
    { "width": "5%", "targets": 0 },
    { "width": "25%", "targets": 1 },
    { "width": "20%", "targets": 2 },
    { "width": "30%", "targets": 3 },
    { "width": "10%", "targets": 4 },
    { "width": "5%", "targets": 5 },
    { "width": "5%", "targets": 6 },
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