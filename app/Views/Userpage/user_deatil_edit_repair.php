<!-- End Navbar -->
<section class="section section-shaped section-lg">

    <div class="container pt-lg-1">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card bg-secondary shadow border-5">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2 class="text-center text-black mb-4">รายละเอียดสั่งซ่อม/เเก้ไข</h2>
                        </div>
                        <br>
                        <form id="add_case" method="post" id="addname" name="addname" action="<?= base_url('/index.php/update_user_detail_case2/' . $repair['case_id']) ?>" enctype="multipart/form-data">
                            <div class="btn-wrapper text-center">
                                <figure class="figure">
                                    <img src="<?php echo base_url(); ?>/uploads/Imagecase/<?php echo $repair['case_img']; ?>" id="imgUpload" alt="กรุณาอัพเดทรูป" width="250px" height="150" class="rounded" alt="">
                                    <input type="hidden" name="case_img">
                                </figure>
                                <div class="custom-file">
                                    <input type="file" class="btn btn-sm btn-primary" id="case_img" name="case_img" onchange="readURL(this)">

                                </div>
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $repair['case_id']; ?>" class="form-control" disabled />

                                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $repair['user_id']; ?>" class="form-control" disabled />

                                    <div class="col-sm-12">
                                        อุปกรณ์สั่งซ่อม :
                                        <input type="text" id="case_type" name="case_type" value="<?php echo $repair['case_type']; ?>" class="form-control" />


                                    </div>
                                    <div class="col-sm-6">
                                        <input type="hidden" id="user_phone" name="user_phone" value="<?php echo $repair['user_phone']; ?>" class="form-control" />


                                    </div>

                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-sm-12">
                                    ปัญหาที่พบ :
                                    <textarea class="form-control" id="case_detail" name="case_detail" rows="5"><?php echo $repair['case_detail']; ?></textarea>


                                </div>
                                <div class="col-sm-6">
                                    <input type="hidden" id="user_email" name="user_email" value="<?php echo $repair['user_email']; ?>" class="form-control" />

                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-sm-12">
                                    สถานที่เเจ้ง :
                                    <textarea class="form-control" id="case_loc" name="case_loc" rows="5"><?php echo $repair['case_loc']; ?></textarea>

                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    if ($repair['case_status'] == 1) {
                                        $style = 'color:orange';
                                    } elseif ($repair['case_status'] == 2) {
                                        $style = 'color:Coral';
                                    } elseif ($repair['case_status'] == 3) {
                                        $style = 'color:green';
                                    } else {
                                        $style = 'color:red';
                                    }
                                    ?>
                                    <input type="hidden" id="case_status" style="<?= $style; ?>" name="case_status" value="<?php echo $repair['case_status']; ?><?php
                                                                                                                                                                if ($repair['case_status'] == 1) {
                                                                                                                                                                    echo 'รอดำเนินการ';
                                                                                                                                                                } elseif ($repair['case_status'] == 2) {
                                                                                                                                                                    echo 'กำลังดำเนินการ';
                                                                                                                                                                } elseif ($repair['case_status'] == 3) {
                                                                                                                                                                    echo 'เสร็จสิ้น';
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'ยกเลิก';
                                                                                                                                                                }
                                                                                                                                                                ?>" class="form-control" />


                                    </a>
                                </div>
                            </div><br>
                            <div class="row">
                                <input type="hidden" id="user_name" name="user_name" value="<?php echo $repair['user_name']; ?>" class="form-control" />

                                <div class="col-sm-6">
                                    <input type="hidden" id="admin_name" name="admin_name" value="<?php echo $repair['admin_name']; ?>" class="form-control" disabled />


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">
                                    <input type="hidden" id="admin_email" name="admin_email" value="<?php echo $repair['admin_email']; ?>" class="form-control" disabled />

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">

                                    <input type="hidden" id="case_update_log" name="case_update_log" value="<?php echo $repair['case_update_log']; ?>" class="form-control" />

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">
                                    <input type="hidden" id="case_update" name="case_update" value="<?php echo $repair['case_update']; ?>" class="form-control" />

                                </div>
                            </div>

                            <?php
                            if ($repair['case_status'] == 1) { ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">ตกลง</button>
                                </div>
                            <?php } else if ($repair['case_status'] == 3) { ?>
                                <div class="text-center">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="จบขั้นตอนเเล้ว สามารถติดต่อสอบถามได้">
                                        <button type="submit" class="btn btn-success" style="pointer-events: none;">ตกลง</button>
                                    </span>
                                </div>
                            <?php } else { ?>
                                <td>
                                    <div class="text-center">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กำลังดำเนินขั้นตอนอยู่จึงไม่สามารถยกเลิกได้ สามารถติดต่อสอบถามได้">
                                            <button type="submit" class="btn btn-success" style="pointer-events: none;">ตกลง</button>
                                        </span>
                                    </div>
                                <?php } ?>

                        </form> &nbsp;
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
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