<div class="container mt-5">
  <center><h2> ประวัติซ่อมอุปกรณ์ </h2></center>
  <div class="mt-3">
  <div style="width: 100%; padding-left: -15px;">
    <div class="table-responsive">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>รายการ</th>
             <th>ชื่อผู้ฝากซ่อม</th>
             <th>สถานะ</th>
             <th></th>
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
              ?>

              <?php
              if($repair['case_status']==1){?>
                <td>
              <a type="button" href="<?php echo base_url(); ?>/index.php/User/User_detail_id_repair/<?= $repair['case_id'];?>" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">ดูรายละเอียด/เเก้ไข</a>
            </td> 
            <td>
            <a type="button" href="<?php echo base_url(); ?>/index.php/repair/delete/<?= $repair['case_id'];?>" class="btn btn-sm btn-danger btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">ยกเลิก</a>            </td> 
            <?php } else if($repair['case_status']==3){ ?>
                <td>
              <a type="button" href="<?php echo base_url(); ?>/index.php/User/User_detail_id_repair/<?= $repair['case_id'];?>" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">ดูรายละเอียด/เเก้ไข</a>
            </td> 
            <td>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="จบขั้นตอนเเล้วไม่สามารถยกเลิกได้ สามารถติดต่อสอบถามได้">
                <button class="btn btn-sm btn-danger btn-tooltip" style="pointer-events: none;" type="button" disabled>ยกเลิก</button>
                </span>
            </td> 

            <?php } else{ ?>
                <td>
              <a type="button" href="<?php echo base_url(); ?>/index.php/User/User_detail_id_repair/<?= $repair['case_id'];?>" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">ดูรายละเอียด/เเก้ไข</a>
            </td> 
            <td>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กำลังดำเนินขั้นตอนอยู่จึงไม่สามารถยกเลิกได้ สามารถติดต่อสอบถามได้">
                <button class="btn btn-sm btn-danger btn-tooltip" style="pointer-events: none;" type="button" disabled>ยกเลิก</button>
                </span>
            </td> 
                <?php } ?>
            
            
                <!-- <?php if (isset($repair['case_status']) && $repair['case_status'] == 1) { ?>
                    <td>
              <a type="button" href="<?php echo base_url(); ?>/User/repair_detail/<?= $repair['case_id'];?>" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">เเก้ไข</a>
            </td> 
            <td>
              <a type="button" href="<?php echo base_url(); ?>/User/repair_detail/<?= $repair['case_id'];?>" class="btn btn-sm btn-danger btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">ยกเลิก</a>
            </td> 
              <?php } else{ ?>
             <td>
             <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติม">
                <button class="btn btn-sm btn-info btn-tooltip" style="pointer-events: none;" type="button" disabled>ดูรายละเอียด</button>
                </span>
            </td> 
            <td>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติม">
                <button class="btn btn-sm btn-info btn-tooltip" style="pointer-events: none;" type="button" disabled>ดูรายละเอียด</button>
                </span>
            </td> 
                <?php } ?> -->


            

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
// $(document).ready(function () {
//     $('.confirm_del_btn').click(function (e) {
//     e.preventDefault();
//     var case_id = $(this).val();

//     swal({
//   title: "Are you sure?",
//   text: "Once deleted, you will not be able to recover this imaginary file!",
//   icon: "warning",
//   buttons: true,
//   dangerMode: true,
// })
// .then((willDelete) => {
//   if (willDelete) 
//   {
//   $.ajax({
//     url : "/repair/confirm-delete/"+case_id,
//     success : function(response) {
//       swal({
//   title: response.status,
//   text: response.status_text,
//   icon: response.status_icon,
//   button: "Ok",
// }).then((confirmed) => {
//        window.location.reload();
// });
//     }
//   });
  
//   } else {
//     swal("Your imaginary file is safe!");
//   }
// });


//   });
// });
</script>

