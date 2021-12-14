<div class="container mt-5">
  <center><h2> รายชื่อคิวซ่อมของ </h2></center>
  <div class="mt-3">
  <div style="width: 100%; padding-left: -15px;">
    <div class="table-responsive">
     <table class="table table-bordered" id="users-list">
     <a href="<?php echo base_url(); ?>/index.php/User/repair_list" class="btn btn-info">งานทั้งหมด <?= $count0 ?></span></a>
     <a href="<?php echo base_url(); ?>/index.php/User/bystatus/1?status=รอดำเนินการ" class="btn btn-primary">งานใหม่ <?= $count1 ?></span></a>
     <a href="<?php echo base_url(); ?>/index.php/User/bystatus/2?status=กำลังดำเนินการ" class="btn btn-warning">กำลังดำเนินการ<?= $count2 ?></span></a>
     <a href="<?php echo base_url(); ?>/index.php/User/bystatus/3?status=เสร็จสิ้น" class="btn btn-success">เสร็จสิ้น <?= $count3 ?></span></a>
     <a href="<?php echo base_url(); ?>/index.php/User/bystatus/4?status=ยกเลิก" class="btn btn-danger">ยกเลิก <?= $count4 ?></span></a>

<br><br>
       <thead>
          <tr>
             <th>รายการ</th>
             <th>ชื่อผู้ฝากซ่อม</th>
             <th>สถานะ</th>
             <th></th>
          </tr>
       </thead>
       <tbody>
          <?php if($repair): ?>
          <?php foreach($repair as $repair): ?>
          <tr>
             <td>รายการที่<?php echo $repair['case_id']; ?></td>
             <td>
              <b>คุณ <?php echo $repair['user_name']; ?></b><br>
              Email : <?php echo $repair['user_email']; ?>
            </td>
           

             <td>
             <?php  
              if($repair['case_status']==1){
              $style ='color:orange';
              }elseif($repair['case_status']==2){
              $style = 'color:Coral';
              }elseif($repair['case_status']==3){
              $style='color:green';
              }else{
              $style='color:red';
              }
              ?>
               <a style="<?= $style;?>" >
              <?php
              if($repair['case_status']==1){
              echo 'รอดำเนินการ';
              }elseif($repair['case_status']==2){
              echo 'กำลังดำเนินการ';
              }elseif($repair['case_status']==3){
              echo 'เสร็จสิ้น';
              }else{
              echo 'ยกเลิก';
              }
              ?></td>
            
             <td>
             <?php if (isset($_SESSION['user_status']) && $_SESSION["user_status"] == 0) { ?>
              <a type="button" href="<?php echo base_url(); ?>/index.php/User/repair_detail/<?= $repair['case_id'];?>" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">รายละเอียด</a>
              <?php } else{ ?>
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติม">
                <button class="btn btn-sm btn-info btn-tooltip" style="pointer-events: none;" type="button" disabled>ดูรายละเอียด</button>
                </span>
                <?php } ?>
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
<?php 
