<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">รายละเอียดการจองห้องประชุม</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/index.php/User/meeting_user_information/<?php echo $room['user_id']; ?>">ข้อมูลส่วนตัวการจองห้องประชุม</a>
                  </li>
                  <li class="breadcrumb-item active">รายละเอียดการจองห้องประชุม
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
                    <h4 class="card-title">รายละเอียดการจองห้องประชุม</h4>
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


<body>
  <div class="container mt-5">
    <form  method="post" action="<?= site_url('/index.php/Meeting/update_detail_meeting/'. $room['meeting_id']) ?>">
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

      <?php
                            if ($room['meeting_status'] == 0) { ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">ตกลง</button>
                                </div>
                            <?php } else if ($room['meeting_status'] == 1) { ?>
                                <div class="text-center">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="จบขั้นตอนเเล้ว สามารถติดต่อสอบถามได้">
                                        <button type="submit" class="btn btn-success" style="pointer-events: none;">ตกลง</button>
                                    </span>
                                </div>
                            <?php } else { ?>
                                <td>
                                    <div class="text-center">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="การจองนี้ถูกยกเลิกเเล้ว สามารถติดต่อสอบถามได้">
                                            <button type="submit" class="btn btn-danger" style="pointer-events: none;">ตกลง</button>
                                        </span>
                                    </div>
                                <?php } ?>


<!-- 
      <div class="form-group">
        <button type="submit" class="btn btn-success">ตกลง</button>
      </div>
 -->





    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>

</html>
 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
<!-- 
    Bar Chart
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bar Chart</h4>
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
                            <div class="height-400">
                        <canvas id="bar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
// Bar charts section end

line chart section start
<section id="chartjs-line-charts">
    Line Chart
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
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
                    <div class="card-body chartjs">
                            <div class="height-500">
                        <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
// line chart section end

Pie charts section start
<section id="chartjs-pie-charts">
    <div class="row">
        Simple Pie Chart
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Pie Chart</h4>
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
                            <div class="height-400">
                        <canvas id="simple-pie-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        Simple Doughnut Chart
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Doughnut Chart</h4>
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
                            <div class="height-400">
                        <canvas id="simple-doughnut-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     -->
</section>
<!-- // Pie charts section end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
