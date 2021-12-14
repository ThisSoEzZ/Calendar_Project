<style>
.errors {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}
</style>
<section class="section section-shaped section-lg">

  <div class="container pt-lg-1">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card bg-secondary shadow border-5">

          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <h2 class="text-center text-black mb-4">สั่งซ่อมอุปกรณ์</h2>
            </div>
            <form id="add_case" method="post" id="addname" name="addname" action="<?= base_url('/index.php/repair_case_insert') ?>" enctype="multipart/form-data">
              <div class="btn-wrapper text-center">
                <figure class="figure">
                  <img src="data:image/jpeg;base64,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" id="imgUpload" alt="กรุณาอัพเดทรูป" width="250px" height="150" class="rounded" alt="">
                  <input type="hidden" name="case_img">
                </figure>
                <div class="custom-file">
                  <input type="file" class="btn btn-sm btn-primary" id="case_img" name="case_img" onchange="readURL(this)">
               
                </div>
              </div>
              <br>

              <div class="form-group">
                <div class="form-group mb-3">
                  <div class="row">
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $user['user_id']; ?>" class="form-control" />
                    <div class="col-sm-4">
                      <input type="hidden" id="user_name" name="user_name" value="<?php echo $user['user_name']; ?> <?php echo $user['user_lastname']; ?>" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <input type="hidden" id="user_email" name="user_email" value="<?php echo $user['user_email']; ?>" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <input type="hidden" id="user_phone" name="user_phone" value="<?php echo $user['user_phone']; ?>" class="form-control" />
                    </div>
                  </div><br>

                  <div class="form-group mb-3">
                    <div class="row">
                      <div class="col-sm-6">
                      ชื่ออุปกรณ์
                        <input type="text" id="case_type" name="case_type" class="form-control" placeholder="ชื่ออุปกรณ์" />
                      </div>
                    </div><br>

                    <div class="form-group mb-3">
                      <div class="row">
                        <div class="col-sm-12">
                        รายละเอียดอาการของอุปกรณ์
                          <textarea class="form-control" name="case_detail" placeholder="รายละเอียดอุปกรณ์" rows="3"></textarea>
                        </div>
                      </div><br>

                      
                      <div class="form-group mb-3">
                      <div class="row">
                        <div class="col-sm-12">
                        สถานที่ฝาก
                          <textarea class="form-control" name="case_loc" placeholder="สถานที่ฝาก" rows="3"></textarea>
                        </div>
                      </div><br>
                      <input type="hidden" name="case_status" class="form-control"  placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="1">


                    <div class="text-center">
                      <button type="submit" class="btn btn-success">ตกลง</button>
                    </div>
            </form> &nbsp;
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#add_case").length > 0) {
      $("#add_case").validate({
        errorClass: 'errors',
        rules: {
          case_type: {
            required: true,
          },
          case_img: {
            required: true,
          },
          case_detail: {
            required: true,
            maxlength: 60,
            // email: true,
          },
          case_loc: {
            required: true,
          },
        
        },
        
        messages: {
          case_type: {
            required: "กรุณาใส่ข้อมูล",
          }, 
          case_loc: {
            required: "กรุณาใส่ข้อมูล",
          },
          case_detail: {
            required: "กรุณาใส่ข้อมูล",
          },
          case_img: {
            required: "กรุณาใส่ข้อมูล",
            // email: "It does not seem to be a valid email.",
            // maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
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