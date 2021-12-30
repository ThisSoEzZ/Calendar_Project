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
                  <div class="container">

                    <form class="needs-validation" method="post" action="<?= site_url('/index.php/submit-form') ?>" novalidate>
                      <div class="form-card">
                        <h2 class="fs-title"><b>ข้อมูลผู้จองห้องประชุม</b></h2>
                        <hr style="height:5px;border-width:0;color:purple;background-color:purple">
                        <br>
                        <div class="form-group row">
                          <div class="col-lg-6 ">
                            <label for="validationCustom01" class="form-label">รหัสประจำตัว</label>
                            <input type="text" class="form-control" name="user_id" value="<?php echo $user['user_id']; ?>" required>
                          </div>
                          <div class="col-lg-6 ">
                            <label for="validationCustom01" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="meeting_phone" value="<?php echo $user['user_phone']; ?>" required>
                          </div>
                        </div>


                        <div class="form-group row">
                          <input type="hidden" name="user_id" class="form-control" value="<?php echo $user['user_id']; ?>">
                          <div class="col-lg-2 " id="Ptest1">
                            <label> <b>คำนำหน้า </b></label>
                            <select class="form-control" name="meeting_titlename" value="<?php echo $user['user_title']; ?>">
                              <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                              <option value="นาย">นาย</option>
                              <option value="นาง">นาง</option>
                              <option value="นางสาว">นางสาว</option>
                            </select>
                          </div>
                          <div class="col-lg-5">
                            <label for="validationCustom01" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="validationCustom01" name="meeting_name" value="<?php echo $user['user_name']; ?>" require />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูลชื่อ
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <label for="validationCustom01" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="validationCustom01" name="meeting_lastname" value="<?php echo $user['user_lastname']; ?>" required>
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูลนามสกุล
                            </div>
                          </div>
                        </div>
                      </div>

                      <br><br><br>

                      <div class="form-card">
                        <h2 class="fs-title"><b>ข้อมูลการจองห้องประชุม</b></h2>
                        <hr style="height:5px;border-width:0;color:purple;background-color:purple">
                        <br>
                        <div class="form-group row">
                          <div class="col-lg-6 ">
                            <label><b> ครั้งที่ :</b></label>
                            <input class="form-control" type="text" name="meeting_round" id="meeting_round" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>

                          <div class="col-lg-6 ">
                            <label><b> เลขที่บันทึก :</b></label>
                            <input class="form-control" type="text" name="meeting_record" id="meeting_record" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>
                        </div>


                        <div class="form-group row">
                          <div class="col-lg-12">
                            <label><b> ห้องประชุม </b></label>
                            <select class="form-control" name="room_id" required>
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
                            <input class="form-control" type="text" name="meeting_agency" id="meeting_agency" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>

                          <div class="col-lg-6 ">
                            <label> <b>กลุ่มเป้าหมายของผู้เข้าร่วมประชุม :</b></label>
                            <input class="form-control" type="text" name="meeting_grouppepole" id="meeting_grouppepole" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>
                        </div>


                        <div class="form-group row">
                          <div class="col-lg-6 ">
                            <label><b> ชื่อหัวข้อการประชุม :</b></label>
                            <input class="form-control" type="text" name="meeting_title" id="meeting_title" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
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
                            <input type="datetime-local" name="start_date" class="form-control" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>

                          <div class="col-lg-6 ">
                            <label> <b>สิ้นสุด :</b></label>
                            <input type="datetime-local" name="end_date" class="form-control" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-lg-6 ">
                            <label><b> จำนวน :</b></label>
                            <input type="number" name="meeting_amount" class="form-control" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>

                          <div class="col-lg-6 ">
                            <label> <b>สถานที่ :</b></label>
                            <input type="text" name="meeting_location" class="form-control" required />
                            <div class="invalid-feedback">
                              กรุณาใส่ข้อมูล
                            </div>
                          </div>
                        </div>
                      </div>

                      <br><br><br>

                      <div class="form-card">
                        <h2 class="fs-title"><b>ความต้องการ</b></h2>
                        <hr style="height:5px;border-width:0;color:purple;background-color:purple">
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

                        <input type="hidden" name="meeting_status" class="form-control" value="0">
                        <input type="hidden" name="backgroundColor" value="#8B008B" class="form-control">

                        <br><br><br><br><br>

                        <div class="form-group">
                          <div class="col text-center">
                            <button type="submit" class="btn btn-success">ตกลง</button>
                          </div><br>
                        </div>

                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
              .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                  if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                  }

                  form.classList.add('was-validated')
                }, false)
              })
          })()
        </script>