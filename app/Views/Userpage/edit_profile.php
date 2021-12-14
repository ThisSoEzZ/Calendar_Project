<!-- End Navbar -->
<section class="section section-shaped section-lg">

    <div class="container pt-lg-1">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card bg-secondary shadow border-5">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2 class="text-center text-black mb-4">ข้อมูลส่วนตัว</h2>
                        </div>
                        <form method="post" action="<?= base_url('/index.php/updateProfile2/' . $user['user_id']) ?>" enctype="multipart/form-data">
                            <div class="btn-wrapper text-center">
                                <figure class="figure">
                                    <img src="<?php echo base_url(); ?>/uploads/ImageUser/<?php echo $user['user_img']; ?>" id="imgUpload" alt="กรุณาอัพเดทรูป" width="150px" height="150" class="rounded" alt="">
                                    <input type="hidden" name="user_img" value="<?php echo $user['user_img']; ?>">
                                </figure>
                                <div class="custom-file">
                                    <input type="file" style="display: none;" class="custom-file-input form-control" id="user_img" name="user_img" onchange="readURL(this)">
                                    <div class="invalid-feedback">
                                        กรุณาเลือกไฟล์
                                    </div>
                                    <button class="btn btn-sm btn-primary" type="button" id="button" name="button" value="Upload" onclick="thisFileUpload();">กรุณาเลือกไฟล์</button>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $user['user_id']; ?>" class="form-control" />
                                    <div class="col-sm-2">
                                        คำนำหน้า
                                        <select class="form-control" name="user_title" value="<?php echo $user['user_title']; ?>">
                                            <option value="<?php echo $user['user_title']; ?>"><?php echo $user['user_title']; ?></option>
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        ชื่อ
                                        <input type="text" id="user_name" name="user_name" value="<?php echo $user['user_name']; ?>" class="form-control" />

                                    </div>
                                    <div class="col-sm-5">
                                        นามสกุล
                                        <input type="text" id="user_lastname" name="user_lastname" value="<?php echo $user['user_lastname']; ?>" class="form-control" />

                                    </div>
                                </div><br>

                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            อีเมล
                                            <input type="text" id="user_email" name="user_email" value="<?php echo $user['user_email']; ?>" class="form-control" />

                                        </div>
                                        <div class="col-sm-6">
                                            เบอร์โทรศัพท์
                                            <input type="text" id="user_phone" name="user_phone" value="<?php echo $user['user_phone']; ?>" class="form-control" />

                                        </div>
                                    </div><br><br>
                                 
                                        <a type="button" href="<?php echo base_url(); ?>/index.php/User/edit_password/<?= $user['user_id'];?>" class="btn btn-sm btn-info btn-tooltip">เเก้ไขรหัสผ่าน</a>
                                        <br><br><br><br>
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
        document.getElementById("user_img").click();
    };
</script>