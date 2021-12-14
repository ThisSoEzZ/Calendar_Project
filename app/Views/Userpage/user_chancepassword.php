<!-- End Navbar -->
<section class="section section-shaped section-lg">

    <div class="container pt-lg-1">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card bg-secondary shadow border-5">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2 class="text-center text-black mb-4">เเก้ไขรหัสผ่าน</h2>
                        </div>
                        <form method="post" action="<?= base_url('/index.php/User/updatePassword/' . $user['user_id']) ?>" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>">

                            <div class="btn-wrapper text-center">
                            รหัสผ่าน
                                                <input type="password" id="user_password" name="user_password" value="<?php echo $user['user_password']; ?>" class="form-control" />


                                        </div>
                                    </div><br>
                                 
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