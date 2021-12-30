<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">จองห้องประชุม</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
                </li>
                <li class="breadcrumb-item active">จองห้องประชุม
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
                  <h4 class="card-title">จองห้องประชุม</h4>
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
              
                  <div class="container mt-5">
  <form  method="post" id="msform" action="<?= site_url('/index.php/submit-form') ?>">


    <div class="form-group">
      <label>meeting_title</label>
      <input type="text" name="meeting_title" class="form-control">
    </div>
    <div class="form-group">
      <label>start_date</label>
      <input type="datetime-local" name="start_date" class="form-control">
    </div>
    <div class="form-group">
      <label>end_date</label>
      <input type="datetime-local" name="end_date" class="form-control">
    </div>
    
      <input type="hidden" name="backgroundColor" value="#8B008B" class="form-control">
    
    <div class="form-group">
      <label>meeting_detail</label>
      <input type="text" name="meeting_detail" class="form-control">
    </div>

  
<div class="form-group">
      
                  <label> คำนำหน้า  </label> 
                                          <select class="form-control" name="room_id">
                                          <?php if ($room) : ?>
                            <?php foreach ($room as $room) : ?>
                                              <option value="<?php echo $room['room_id']; ?>"><?php echo $room['room_name']; ?></option>
                                             
  

                                              <?php endforeach; ?>
                          <?php endif; ?>
                                          </select>
                  </div>

    <div class="form-group">
      <label>meeting_round</label>
      <input type="text" name="meeting_round" class="form-control">
    </div>
    <div class="form-group">
      <label>meeting_record</label>
      <input type="text" name="meeting_record" class="form-control">
    </div>
    <div class="form-group">
      <label>meeting_location</label>
      <input type="text" name="meeting_location" class="form-control">
    </div>
    <br><br>

    <label>meeting_type1</label>
    <div class="row">
  <div class="col-sm-2">
  <label class="form-check-label">
              <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Classroom" class="form-check-input" >
              Classroom
            </label></div>
<div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Webx" class="form-check-input" >
              Webx
            </label> </div>
<div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Video Conferance" class="form-check-input" >
              Video Conferance
            </label>  </div>
</div>
  <br><br><br>
  <label>meeting_drink</label>

<div class="row">
  <div class="col-sm-2">
  <label class="form-check-label">
              <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="เครื่องดื่ม" class="form-check-input" >
              เครื่องดื่ม
            </label></div>
<div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="อาหารว่าง" class="form-check-input" >
              อาหารว่าง
            </label> </div>
            <div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="ไม่ต้องการ" class="form-check-input" >
              ไม่ต้องการ
            </label> </div>

</div>


<br><br>
<!-- <div class="row">
  <div class="col-sm-2">
<label>เครื่องดื่ม</label>
  <select class="form-select" name="meeting_drinksnack" aria-label="Default select example">
<option selected></option>
<option value="เช้า">เช้า</option>
<option value="บ่าย">บ่าย</option>
</select>    </div>
<div class="col-sm-2">  
<label>อาหารว่าง</label> 
 <select class="form-select" name="meeting_snack" aria-label="Default select example">
<option selected></option>
<option value="เช้า">เช้า</option>
<option value="บ่าย">บ่าย</option>
</select>    </div>
</div><br><br> -->
<label>meeting_other_requirements</label>

<div class="row">
<div class="col-sm-2">
<label class="form-check-label">
            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องคอมพิวเตอร์" class="form-check-input" >
            เครื่องคอมพิวเตอร์
          </label></div>
<div class="col-sm-2">  
<label class="form-check-label">
            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องฉายและจอโปรเจ็คเตอร์" class="form-check-input" >
            เครื่องฉายและจอโปรเจ็คเตอร์
          </label> </div>
          <div class="col-sm-2">  
<label class="form-check-label">
            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องเสียงพร้อมอุปกรณ์" class="form-check-input" >
            เครื่องเสียงพร้อมอุปกรณ์
          </label> </div>

</div><br><br>

<div class="form-group">
      <label>meeting_amount</label>
      <input type="text" name="meeting_amount" class="form-control">
    </div>
    <div class="form-group">
      <label>meeting_agency</label>
      <input type="text" name="meeting_agency" class="form-control">
    </div> <div class="form-group">
      <label>meeting_grouppepole</label>
      <input type="text" name="meeting_grouppepole" class="form-control">
    </div> <div class="form-group">
      <label>meeting_employee_id</label>
      <input type="text" name="user_id" class="form-control" value="<?php echo $user['user_id']; ?>">
    </div> 
    <div class="form-group">
      
                  <label> คำนำหน้า  </label> 
                                          <select class="form-control" name="meeting_titlename">
                                              <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                                              <option value="นาย">นาย</option>
                                              <option value="นาง">นาง</option>
                                              <option value="นางสาว">นางสาว</option>
  
                                          </select>
                  </div>
    <div class="form-group">
      <label>meeting_name</label>
      <input type="text" name="meeting_name" class="form-control" value="<?php echo $user['user_name']; ?>">
    </div> <div class="form-group">
      <label>meeting_lastname</label>
      <input type="text" name="meeting_lastname" class="form-control" value="<?php echo $user['user_lastname']; ?>">
    </div> <div class="form-group">
      <label>meeting_phone</label>
      <input type="text" name="meeting_phone" class="form-control" value="<?php echo $user['user_phone']; ?>" >
    </div>
    <input type="hidden" name="meeting_status" class="form-control"  placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="0">

    <br><br>
    <div class="form-group">
      <button type="submit" class="btn btn-success">ตกลง</button>
    </div>
  </form>
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
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#msform").length > 0) {
          $("#msform").validate({
            errorClass: 'errors',
            rules: {
              meeting_name: {
                required: true,
              },
              meeting_lastname: {
                required: true,
              },
         
            },
            
            messages: {
              meeting_name: {
                required: "กรุณาใส่ข้อมูล",
              }, 
              meeting_lastname: {
                required: "กรุณาใส่ข้อมูล",
              }, 
            
            },
          })
        }
      </script>







      <style>
  * {
    margin: 0;
    padding: 0
  }

  .errors {
    color: #a94442;
  }

  #Ptest1 {
    padding: 8px;

  }

  html {
    height: 100%
  }

  #grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
  }

  #msform {
    text-align: center;
    position: relative;
    margin-top: 20px
  }

  #msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
  }

  #msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
  }

  #msform fieldset:not(:first-of-type) {
    display: none
  }

  #msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
  }

  #msform input,
  #msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
  }

  #msform input:focus,
  #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
  }

  #msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
  }

  #msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
  }

  select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
  }

  select.list-dt:focus {
    border-bottom: 2px solid skyblue
  }

  .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
  }

  .fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
  }

  #progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
  }

  #progressbar .active {
    color: #000000
  }

  #progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
  }

  #progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
  }

  #progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
  }

  #progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
  }

  #progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
  }

  #progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
  }

  #progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
    background: skyblue
  }

  .radio-group {
    position: relative;
    margin-bottom: 25px
  }

  .radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
  }

  .radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
  }

  .radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
  }

  .fit-image {
    width: 100%;
    object-fit: cover
  }
</style>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">จองห้องประชุม</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
              </li>
              <li class="breadcrumb-item active">จองห้องประชุม
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
                <h4 class="card-title">จองห้องประชุม</h4>
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
                  <!-- MultiStep Form -->
                  <div class="row justify-content-center mt-0">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-12 mb-2">
                      <div class="card px-0 pt-12 pb-0 mt-3 mb-3">

                        <div class="row">
                          <div class="col-md-12 mx-0">
                            <form id="msform" method="post" action="<?= site_url('/index.php/submit-form') ?>">
                              <!-- progressbar -->
                              <ul id="progressbar">
                                <li class="active" id="account"><strong>ข้อมูลผู้จองห้องประชุม</strong></li>
                                <li id="personal"><strong>ข้อมูลการจองห้องประชุม</strong></li>
                                <li id="payment"><strong>ความต้องการ</strong></li>
                                <li id="confirm"><strong>เสร็จสิ้น</strong></li>
                              </ul> <!-- fieldsets -->
                              <fieldset>
                                <div class="form-card">
                                  <h2 class="fs-title">ข้อมูลผู้จองห้องประชุม</h2>

                                
    <div class="form-group">
      <label>meeting_title</label>
      <input type="text" name="meeting_title" class="form-control">
    </div>
    <div class="form-group">
      <label>start_date</label>
      <input type="datetime-local" name="start_date" class="form-control">
    </div>
    <div class="form-group">
      <label>end_date</label>
      <input type="datetime-local" name="end_date" class="form-control">
    </div>
    
      <input type="hidden" name="backgroundColor" value="#8B008B" class="form-control">
    
    <div class="form-group">
      <label>meeting_detail</label>
      <input type="text" name="meeting_detail" class="form-control">
    </div>

  
<div class="form-group">
      
                  <label> คำนำหน้า  </label> 
                                          <select class="form-control" name="room_id">
                                          <?php if ($room) : ?>
                            <?php foreach ($room as $room) : ?>
                                              <option value="<?php echo $room['room_id']; ?>"><?php echo $room['room_name']; ?></option>
                                             
  

                                              <?php endforeach; ?>
                          <?php endif; ?>
                                          </select>
                  </div>

    <div class="form-group">
      <label>meeting_round</label>
      <input type="text" name="meeting_round" class="form-control">
    </div>
    <div class="form-group">
      <label>meeting_record</label>
      <input type="text" name="meeting_record" class="form-control">
    </div>
    <div class="form-group">
      <label>meeting_location</label>
      <input type="text" name="meeting_location" class="form-control">
    </div>
    <br><br>

    <label>meeting_type1</label>
    <div class="row">
  <div class="col-sm-2">
  <label class="form-check-label">
              <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Classroom" class="form-check-input" >
              Classroom
            </label></div>
<div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Webx" class="form-check-input" >
              Webx
            </label> </div>
<div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Video Conferance" class="form-check-input" >
              Video Conferance
            </label>  </div>
</div>
  <br><br><br>
  <label>meeting_drink</label>

<div class="row">
  <div class="col-sm-2">
  <label class="form-check-label">
              <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="เครื่องดื่ม" class="form-check-input" >
              เครื่องดื่ม
            </label></div>
<div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="อาหารว่าง" class="form-check-input" >
              อาหารว่าง
            </label> </div>
            <div class="col-sm-2">  
<label class="form-check-label">
              <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="ไม่ต้องการ" class="form-check-input" >
              ไม่ต้องการ
            </label> </div>

</div>


<br><br>
<!-- <div class="row">
  <div class="col-sm-2">
<label>เครื่องดื่ม</label>
  <select class="form-select" name="meeting_drinksnack" aria-label="Default select example">
<option selected></option>
<option value="เช้า">เช้า</option>
<option value="บ่าย">บ่าย</option>
</select>    </div>
<div class="col-sm-2">  
<label>อาหารว่าง</label> 
 <select class="form-select" name="meeting_snack" aria-label="Default select example">
<option selected></option>
<option value="เช้า">เช้า</option>
<option value="บ่าย">บ่าย</option>
</select>    </div>
</div><br><br> -->
<label>meeting_other_requirements</label>

<div class="row">
<div class="col-sm-2">
<label class="form-check-label">
            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องคอมพิวเตอร์" class="form-check-input" >
            เครื่องคอมพิวเตอร์
          </label></div>
<div class="col-sm-2">  
<label class="form-check-label">
            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องฉายและจอโปรเจ็คเตอร์" class="form-check-input" >
            เครื่องฉายและจอโปรเจ็คเตอร์
          </label> </div>
          <div class="col-sm-2">  
<label class="form-check-label">
            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องเสียงพร้อมอุปกรณ์" class="form-check-input" >
            เครื่องเสียงพร้อมอุปกรณ์
          </label> </div>

</div><br><br>

<div class="form-group">
      <label>meeting_amount</label>
      <input type="text" name="meeting_amount" class="form-control">
    </div>
    <div class="form-group">
      <label>meeting_agency</label>
      <input type="text" name="meeting_agency" class="form-control">
    </div> <div class="form-group">
      <label>meeting_grouppepole</label>
      <input type="text" name="meeting_grouppepole" class="form-control">
    </div> <div class="form-group">
      <label>meeting_employee_id</label>
      <input type="text" name="user_id" class="form-control" value="<?php echo $user['user_id']; ?>">
    </div> 
    <div class="form-group">
      
                  <label> คำนำหน้า  </label> 
                                          <select class="form-control" name="meeting_titlename">
                                              <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                                              <option value="นาย">นาย</option>
                                              <option value="นาง">นาง</option>
                                              <option value="นางสาว">นางสาว</option>
  
                                          </select>
                  </div>
    <div class="form-group">
      <label>meeting_name</label>
      <input type="text" name="meeting_name" class="form-control" value="<?php echo $user['user_name']; ?>">
    </div> <div class="form-group">
      <label>meeting_lastname</label>
      <input type="text" name="meeting_lastname" class="form-control" value="<?php echo $user['user_lastname']; ?>">
    </div> <div class="form-group">
      <label>meeting_phone</label>
      <input type="text" name="meeting_phone" class="form-control" value="<?php echo $user['user_phone']; ?>" >
    </div>
    <input type="hidden" name="meeting_status" class="form-control"  placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="0">

                                <input type="button" name="previous" class="previous action-button-previous" value="ย้อนกลับ" /> <input type="submit" name="make_payment" class="next action-button" value="ตกลง" />
                              </fieldset>
                              <fieldset>
                                <div class="form-card">
                                  <h2 class="fs-title text-center">Success !</h2> <br><br>
                                  <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                  </div> <br><br>
                                  <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                      <h5>You Have Successfully Signed Up</h5>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
        <script>
          if ($("#msform").length > 0) {
            $("#msform").validate({
              errorClass: 'errors',
              rules: {
                meeting_name: {
                  required: true,
                },
                meeting_lastname: {
                  required: true,
                },

              },

              messages: {
                meeting_name: {
                  required: "กรุณาใส่ข้อมูล",
                },
                meeting_lastname: {
                  required: "กรุณาใส่ข้อมูล",
                },

              },
            })
          }
        </script>
        <script>
          $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

              current_fs = $(this).parent();
              next_fs = $(this).parent().next();

              //Add Class Active
              $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

              //show the next fieldset
              next_fs.show();
              //hide the current fieldset with style
              current_fs.animate({
                opacity: 0
              }, {
                step: function(now) {
                  // for making fielset appear animation
                  opacity = 1 - now;

                  current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                  });
                  next_fs.css({
                    'opacity': opacity
                  });
                },
                duration: 600
              });
            });

            $(".previous").click(function() {

              current_fs = $(this).parent();
              previous_fs = $(this).parent().prev();

              //Remove class active
              $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

              //show the previous fieldset
              previous_fs.show();

              //hide the current fieldset with style
              current_fs.animate({
                opacity: 0
              }, {
                step: function(now) {
                  // for making fielset appear animation
                  opacity = 1 - now;

                  current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                  });
                  previous_fs.css({
                    'opacity': opacity
                  });
                },
                duration: 600
              });
            });

            $('.radio-group .radio').click(function() {
              $(this).parent().find('.radio').removeClass('selected');
              $(this).addClass('selected');
            });

            $(".submit").click(function() {
              return false;
            })

          });
        </script>









<style>
  * {
    margin: 0;
    padding: 0
  }

  .errors {
    color: #a94442;
  }

  #Ptest1 {
    padding: 8px;

  }

  html {
    height: 100%
  }

  #grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
  }

  #msform {
    text-align: center;
    position: relative;
    margin-top: 20px
  }

  #msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
  }

  #msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
  }

  #msform fieldset:not(:first-of-type) {
    display: none
  }

  #msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
  }

  #msform input,
  #msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
  }

  #msform input:focus,
  #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
  }

  #msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
  }

  #msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
  }

  select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
  }

  select.list-dt:focus {
    border-bottom: 2px solid skyblue
  }

  .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
  }

  .fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
  }

  #progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
  }

  #progressbar .active {
    color: #000000
  }

  #progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
  }

  #progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
  }

  #progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
  }

  #progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
  }

  #progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
  }

  #progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
  }

  #progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
    background: skyblue
  }

  .radio-group {
    position: relative;
    margin-bottom: 25px
  }

  .radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
  }

  .radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
  }

  .radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
  }

  .fit-image {
    width: 100%;
    object-fit: cover
  }
</style>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">จองห้องประชุม</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
              </li>
              <li class="breadcrumb-item active">จองห้องประชุม
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
                <h4 class="card-title">จองห้องประชุม</h4>
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
                  <!-- MultiStep Form -->
                  <div class="row justify-content-center mt-0">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-12 mb-2">
                      <div class="card px-0 pt-12 pb-0 mt-3 mb-3">

                        <div class="row">
                          <div class="col-md-12 mx-0">
                            <form id="msform" method="post" action="<?= site_url('/index.php/submit-form') ?>">
                              <!-- progressbar -->
                              <ul id="progressbar">
                                <li class="active" id="account"><strong>ข้อมูลผู้จองห้องประชุม</strong></li>
                                <li id="personal"><strong>ข้อมูลการจองห้องประชุม</strong></li>
                                <li id="payment"><strong>ความต้องการ</strong></li>
                                <li id="confirm"><strong>เสร็จสิ้น</strong></li>
                              </ul> <!-- fieldsets -->
                              <fieldset>
                                <div class="form-card">
                                  <h2 class="fs-title">ข้อมูลผู้จองห้องประชุม</h2>

                                  <div class="form-group row">
                                    <input type="hidden" name="user_id" class="form-control" value="<?php echo $user['user_id']; ?>">
                                    <div class="col-lg-2 " id="Ptest1">
                                      <label> <b>คำนำหน้า </b></label>
                                      <select class="form-control" name="meeting_titlename" value="<?php echo $user['user_title']; ?>">
                                        <option value="<?php echo $user['meeting_titlename']; ?>"><?php echo $user['user_title']; ?></option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                      </select>
                                    </div>
                                    <div class="col-lg-5"><br>
                                      <label><b> ชื่อ :</b></label>
                                      <input class="form-control" type="text" name="meeting_name" id="meeting_name" value="<?php echo $user['user_name']; ?>" />
                                    </div>
                                    <div class="col-lg-5"><br>
                                      <label><b> นามสกุล :</b></label>
                                      <input class="form-control" type="text" name="meeting_lastname" id="meeting_lastname" value="<?php echo $user['user_lastname']; ?>" />
                                    </div>
                                  </div>
                                  <label><b> เบอร์โทรศัพท์ : </b></label>
                                  <input type="text" name="meeting_phone" class="form-control" value="<?php echo $user['user_phone']; ?>">
                                </div>
                                <input type="button" name="next" class="next action-button" value="ไปต่อ" />
                              </fieldset>
                              <fieldset>


                                <div class="form-card">
                                  <h2 class="fs-title">ข้อมูลการจองห้องประชุม</h2>
                                  <br>

                                  <div class="form-group row">
                                    <div class="col-lg-6 ">
                                      <label><b> ครั้งที่ :</b></label>
                                      <input class="form-control" type="text" name="meeting_round" id="meeting_round" />
                                    </div>

                                    <div class="col-lg-6 ">
                                      <label><b> เลขที่บันทึก :</b></label>
                                      <input class="form-control" type="text" name="meeting_record" id="meeting_record" />
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <div class="col-lg-12 " id="Ptest1">
                                      <label><b> ห้องประชุม </b></label>
                                      <select class="form-control" name="room_id">
                                        <option value="">กรุณาเลือกห้องประชุม</option>
                                        <?php if ($room) : ?>
                                          <?php foreach ($room as $room) : ?>
                                            <option value="<?php echo $room['room_id']; ?>"><?php echo $room['room_name']; ?></option>
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                                      </select>
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <div class="col-lg-6 ">
                                      <label><b> หน่วยงานที่ขอใช้ :</b></label>
                                      <input class="form-control" type="text" name="meeting_agency" id="meeting_agency" />
                                    </div>

                                    <div class="col-lg-6 ">
                                      <label> <b>กลุ่มเป้าหมายของผู้เข้าร่วมประชุม :</b></label>
                                      <input class="form-control" type="text" name="meeting_grouppepole" id="meeting_grouppepole" />
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <div class="col-lg-6 ">
                                      <label><b> ชื่อหัวข้อการประชุม :</b></label>
                                      <input class="form-control" type="text" name="meeting_title" id="meeting_title" />
                                    </div>
                                    <div class="col-lg-6 ">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <div class="col-lg-12 ">
                                      <label><b> รายละเอียดการประชุม :</b></label>
                                      <textarea class="form-control" name="meeting_detail" rows="3"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <div class="col-lg-6 ">
                                      <label><b> เริ่ม :</b></label>
                                      <input type="datetime-local" name="start_date" class="form-control">
                                    </div>

                                    <div class="col-lg-6 ">
                                      <label> <b>สิ้นสุด :</b></label>
                                      <input type="datetime-local" name="end_date" class="form-control">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <div class="col-lg-6 ">
                                      <label><b> จำนวน :</b></label>
                                      <input type="number" name="start_date" class="form-control">
                                    </div>

                                    <div class="col-lg-6 ">
                                      <label> <b>สถานที่ :</b></label>
                                      <input type="text" name="meeting_location" class="form-control">
                                    </div>
                                  </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="ย้อนกลับ" /> <input type="button" name="next" class="next action-button" value="ไปต่อ" />
                              </fieldset>


                              <fieldset>
                                <div class="form-card">
                                  <h2 class="fs-title">ความต้องการ</h2>
                                  <br>

                                  <div class="row">
                                    <div class="col-sm-2">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Classroom" class="form-check-input">
                                        Classroom
                                      </label>
                                    </div>
                                    <div class="col-sm-2">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Webx" class="form-check-input">
                                        Webx
                                      </label>
                                    </div>
                                    <div class="col-sm-2">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Video Conferance" class="form-check-input">
                                        Video Conferance
                                      </label>
                                    </div>
                                  </div>
                                  <br><br><br>

                                  <div class="row">
                                    <div class="col-sm-4">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="เครื่องดื่ม" class="form-check-input">
                                        เครื่องดื่ม
                                      </label>
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="อาหารว่าง" class="form-check-input">
                                        อาหารว่าง
                                      </label>
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="ไม่ต้องการ" class="form-check-input">
                                        ไม่ต้องการ
                                      </label>
                                    </div>
                                  </div>

                                  <br><br>

                                  <div class="row">
                                    <div class="col-sm-4">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องคอมพิวเตอร์" class="form-check-input">
                                        เครื่องคอมพิวเตอร์
                                      </label>
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องฉายและจอโปรเจ็คเตอร์" class="form-check-input">
                                        เครื่องฉายและจอโปรเจ็คเตอร์
                                      </label>
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-check-label">
                                        <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องเสียงพร้อมอุปกรณ์" class="form-check-input">
                                        เครื่องเสียงพร้อมอุปกรณ์
                                      </label>
                                    </div>

                                  </div>

                                  <!-- <div class="radio-group">
                                    <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                    <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                  </div> 
                                  
                                  <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" /> -->

                                  <!-- <div class="row">
                                    <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                    <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                  </div> -->
                                  <!-- <div class="row">
                                    <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                    <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                        <option selected>Month</option>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                      </select> <select class="list-dt" id="year" name="expyear">
                                        <option selected>Year</option>
                                      </select> </div>
                                  </div> -->
                                  <input type="hidden" name="meeting_status" class="form-control" value="0">
                                  <input type="hidden" name="backgroundColor" value="#8B008B" class="form-control">

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="ย้อนกลับ" /> <input type="submit" name="make_payment" class="next action-button" value="ตกลง" />
                              </fieldset>
                              <fieldset>
                                <div class="form-card">
                                  <h2 class="fs-title text-center">Success !</h2> <br><br>
                                  <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                  </div> <br><br>
                                  <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                      <h5>You Have Successfully Signed Up</h5>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
        <script>
          if ($("#msform").length > 0) {
            $("#msform").validate({
              errorClass: 'errors',
              rules: {
                meeting_name: {
                  required: true,
                },
                meeting_lastname: {
                  required: true,
                },

              },

              messages: {
                meeting_name: {
                  required: "กรุณาใส่ข้อมูล",
                },
                meeting_lastname: {
                  required: "กรุณาใส่ข้อมูล",
                },

              },
            })
          }
        </script>
        <script>
          $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

              current_fs = $(this).parent();
              next_fs = $(this).parent().next();

              //Add Class Active
              $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

              //show the next fieldset
              next_fs.show();
              //hide the current fieldset with style
              current_fs.animate({
                opacity: 0
              }, {
                step: function(now) {
                  // for making fielset appear animation
                  opacity = 1 - now;

                  current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                  });
                  next_fs.css({
                    'opacity': opacity
                  });
                },
                duration: 600
              });
            });

            $(".previous").click(function() {

              current_fs = $(this).parent();
              previous_fs = $(this).parent().prev();

              //Remove class active
              $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

              //show the previous fieldset
              previous_fs.show();

              //hide the current fieldset with style
              current_fs.animate({
                opacity: 0
              }, {
                step: function(now) {
                  // for making fielset appear animation
                  opacity = 1 - now;

                  current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                  });
                  previous_fs.css({
                    'opacity': opacity
                  });
                },
                duration: 600
              });
            });

            $('.radio-group .radio').click(function() {
              $(this).parent().find('.radio').removeClass('selected');
              $(this).addClass('selected');
            });

            $(".submit").click(function() {
              return false;
            })

          });
        </script>


<style>
  .errors {
    color: #a94442;
  }
</style>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">จองห้องประชุม</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
              </li>
              <li class="breadcrumb-item active">จองห้องประชุม
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
                <h4 class="card-title">จองห้องประชุม</h4>
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

                  <div class="container mt-5">
                    <form method="post" id="msform" action="<?= site_url('/index.php/submit-form') ?>">


                      <div class="form-group">
                        <label>meeting_title</label>
                        <input type="text" name="meeting_title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>start_date</label>
                        <input type="datetime-local" name="start_date" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>end_date</label>
                        <input type="datetime-local" name="end_date" class="form-control">
                      </div>

                      <input type="hidden" name="backgroundColor" value="#8B008B" class="form-control">

                      <div class="form-group">
                        <label>meeting_detail</label>
                        <input type="text" name="meeting_detail" class="form-control">
                      </div>


                      <div class="form-group">

                        <label> คำนำหน้า </label>
                        <select class="form-control" name="room_id">
                          <?php if ($room) : ?>
                            <?php foreach ($room as $room) : ?>
                              <option value="<?php echo $room['room_id']; ?>"><?php echo $room['room_name']; ?></option>



                            <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>meeting_round</label>
                        <input type="text" name="meeting_round" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>meeting_record</label>
                        <input type="text" name="meeting_record" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>meeting_location</label>
                        <input type="text" name="meeting_location" class="form-control">
                      </div>
                      <br><br>

                      <label>meeting_type1</label>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Classroom" class="form-check-input">
                            Classroom
                          </label>
                        </div>
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Webx" class="form-check-input">
                            Webx
                          </label>
                        </div>
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_type1[]" alt="Checkbox" value="Video Conferance" class="form-check-input">
                            Video Conferance
                          </label>
                        </div>
                      </div>
                      <br><br><br>
                      <label>meeting_drink</label>

                      <div class="row">
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="เครื่องดื่ม" class="form-check-input">
                            เครื่องดื่ม
                          </label>
                        </div>
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="อาหารว่าง" class="form-check-input">
                            อาหารว่าง
                          </label>
                        </div>
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_drink[]" alt="Checkbox" value="ไม่ต้องการ" class="form-check-input">
                            ไม่ต้องการ
                          </label>
                        </div>

                      </div>


                      <br><br>
        
                      <label>meeting_other_requirements</label>

                      <div class="row">
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องคอมพิวเตอร์" class="form-check-input">
                            เครื่องคอมพิวเตอร์
                          </label>
                        </div>
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องฉายและจอโปรเจ็คเตอร์" class="form-check-input">
                            เครื่องฉายและจอโปรเจ็คเตอร์
                          </label>
                        </div>
                        <div class="col-sm-2">
                          <label class="form-check-label">
                            <input type="checkbox" name="meeting_other_requirements[]" alt="Checkbox" value="เครื่องเสียงพร้อมอุปกรณ์" class="form-check-input">
                            เครื่องเสียงพร้อมอุปกรณ์
                          </label>
                        </div>

                      </div><br><br>

                      <div class="form-group">
                        <label>meeting_amount</label>
                        <input type="text" name="meeting_amount" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>meeting_agency</label>
                        <input type="text" name="meeting_agency" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>meeting_grouppepole</label>
                        <input type="text" name="meeting_grouppepole" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>meeting_employee_id</label>
                        <input type="text" name="user_id" class="form-control" value="<?php echo $user['user_id']; ?>">
                      </div>
                      <div class="form-group">

                        <label> คำนำหน้า </label>
                        <select class="form-control" name="meeting_titlename">
                          <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                          <option value="นาย">นาย</option>
                          <option value="นาง">นาง</option>
                          <option value="นางสาว">นางสาว</option>

                        </select>
                      </div>
                      <div class="form-group">
                        <label>meeting_name</label>
                        <input type="text" name="meeting_name" class="form-control" value="<?php echo $user['user_name']; ?>">
                      </div>
                      <div class="form-group">
                        <label>meeting_lastname</label>
                        <input type="text" name="meeting_lastname" class="form-control" value="<?php echo $user['user_lastname']; ?>">
                      </div>
                      <div class="form-group">
                        <label>meeting_phone</label>
                        <input type="text" name="meeting_phone" class="form-control" value="<?php echo $user['user_phone']; ?>">
                      </div>
                      <input type="hidden" name="meeting_status" class="form-control" placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="0">

                      <br><br>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">ตกลง</button>
                      </div>
                    </form>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
  if ($("#msform").length > 0) {
    $("#msform").validate({
      errorClass: 'errors',
      rules: {
        meeting_title: {
          required: true,
        },
        meeting_name: {
          required: true,
        },
        meeting_lastname: {
          required: true,
        },

      },

      messages: {
        meeting_title: {
          required: "กรุณาใส่ข้อมูล",
        },
        meeting_name: {
          required: "กรุณาใส่ข้อมูล",
        },
        meeting_lastname: {
          required: "กรุณาใส่ข้อมูล",
        },

      },
    })
  }
</script>