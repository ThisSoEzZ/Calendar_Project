<!-- End Navbar -->
<section class="section section-shaped section-lg">

    <div class="container pt-lg-1">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card bg-secondary shadow border-5">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2 class="text-center text-black mb-4">รายละเอียดสั่งซ่อม</h2>
                        </div>
                        <div class="btn-wrapper text-center">
                            <a class="btn btn-neutral btn-icon">
                                <img src="<?php echo base_url(); ?>/uploads/Imagecase/<?php echo $repair['case_img']; ?>" width="75%">
                            </a>
                        </div>
                        <br>
                        <form method="post">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        ชื่อ : คุณ <?php echo $repair['user_name']; ?>
                                    </div>
                                    <div class="col-sm-6">
                                        อุปกรณ์สั่งซ่อม : <?php echo $repair['case_type']; ?>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        อีเมล : <?php echo $repair['user_email']; ?>

                                    </div>
                                    <div class="col-sm-6">
                                        ปัญหาที่พบ : <?php echo $repair['case_detail']; ?>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        เบอร์โทรศัพท์ : <?php echo $repair['user_phone']; ?>

                                    </div>
                                    <div class="col-sm-6">
                                        สถานะการซ่อม : <?php
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
                                        <a style="<?= $style; ?>">
                                            <?php
                                            if ($repair['case_status'] == 1) {
                                                echo 'รอดำเนินการ';
                                            } elseif ($repair['case_status'] == 2) {
                                                echo 'กำลังดำเนินการ';
                                            } elseif ($repair['case_status'] == 3) {
                                                echo 'เสร็จสิ้น';
                                            } else {
                                                echo 'ยกเลิก';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        สถานที่เเจ้ง : <?php echo $repair['case_loc']; ?>

                                    </div>
                                    <div class="col-sm-6">
                                        ผู้ดูเเลการซ่อม : <?php echo $repair['admin_name']; ?>

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6">
                                        ติดต่อผู้ดูเเลการซ่อม : <?php echo $repair['admin_email']; ?>

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6">
                                        คอมเมนต์ผู้ดูเเล : <?php echo $repair['case_update_log']; ?>

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6">
                                        อัพเดตล่าสุด : <?php echo $repair['case_update']; ?>

                                    </div>
                                </div><br>
                                
                                <?php
              if($repair['case_status']==1){?>
               <div class="text-center">
                <a type="button" href="<?php echo base_url(); ?>/index.php/User/user_deatil_edit_repair/<?= $repair['case_id'];?>" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" 
               data-container="body" data-animation="true">เเก้ไข</a>
                                </div>
            <?php } else if($repair['case_status']==3){ ?>
                <div class="text-center">
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="จบขั้นตอนเเล้วไม่สามารถเเก้ไขได้ สามารถติดต่อสอบถามได้">
                <button class="btn btn-sm btn-danger btn-tooltip" style="pointer-events: none;" type="button" disabled>จบขั้นตอนเเล้วไม่สามารถเเก้ไขได้</button>
                </span>
                </div>
            <?php } else{ ?>
                <td>
                <div class="text-center">
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กำลังดำเนินขั้นตอนอยู่จึงไม่สามารถยกเลิกได้ สามารถติดต่อสอบถามได้">
                <button class="btn btn-sm btn-danger btn-tooltip" style="pointer-events: none;" type="button" disabled>กำลังดำเนินขั้นตอนอยู่จึงไม่สามารถเเก้ไขได้</button>
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