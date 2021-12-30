<!-- Fullcalendar Starts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/locale/th.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />


<style>
    .fc-event {
        cursor: pointer;
    }

    .center {
        text-align: center;
    }

    hr {
        text-align: center;
        border-width:0;
        color:purple;
        background-color:purple;
        height:2px;
    }
    #calendar {
        box-shadow: 0px 0px 10px #000;
        padding: 15px;
        background: #fff;
    }

    #calendar-container {
        position: fixed;
        top: 0%;
        text-align: center;
        left: 10%;
        right: 10%;
        bottom: 20%;

    }
</style>

<script>
    jQuery(document).ready(function($) {
        var events = <?php echo json_encode($data) ?>;

        $('#calendar').fullCalendar({
            height: 850,

            monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            monthNamesShort: ['ม.ค', 'ก.พ', 'มี.ค', 'เม.ย', 'พ.ค', 'มิ.ย', 'ก.ค', 'ส.ค', 'ก.ย', 'ต.ค', 'พ.ย', 'ธ.ค'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,,listWeek'
            },
            buttonText: {
                today: 'วันนี้',
                month: 'เดือน',
                week: 'สัปดาห์',
                day: 'วัน',
                list: 'กำหนดการ'

            },

        

            eventRender: function(eventObj, $el) {
                $el.popover({
                    html: true,
                    title: '<div class="center"><b><i class="ficon ft-airplay"></i> '+eventObj.room_name+'<b><hr></div>',
                    content:'<i class="ficon ft-message-circle"></i> ประชุมเรื่อง :'+eventObj.titlePopover+'<br> <br><i class="ficon ft-clock"></i> เริ่มประชุม : '+ eventObj.startcontent+' น.'+
                    '<br> <i class="ficon ft-clock"></i> สิ้นสุดประชุม :'+eventObj.endcontent+' น.'+'<br><i class="ficon ft-user"></i> จองโดย :'+eventObj.name+'<br>'+'<i class="ficon ft-phone"></i> เบอร์โทรศัพท์ :'+eventObj.phone, 
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body'
                });
            },

    
            events: events,
            // eventColor: '#8B008B',
            locale: 'th',
            themeSystem: 'bootstrap4',
            timeFormat: 'H:mm น.',

            eventClick: function(eventObj) {
                window.location = '<?php echo base_url(); ?>/index.php/Meeting/DetailMeetingRoom/' + eventObj.id;

                //   window.open('<?php echo base_url(); ?>/index.php/Meeting/DetailMeetingRoom/'+eventObj.id);
            },


        });



    });
</script>
<script>
    <?php if (session()->getFlashdata('Success')) : ?>
        swal("สำเร็จ", "<?= session()->getFlashdata('Success') ?>", "success");
    <?php endif; ?>

    <?php if (session()->getFlashdata('profilesuccess')) : ?>
        swal("สำเร็จ", "<?= session()->getFlashdata('profilesuccess') ?>", "success");
    <?php endif; ?>

    <?php if (session()->getFlashdata('profileimgsuccess')) : ?>
        swal("สำเร็จ", "<?= session()->getFlashdata('profileimgsuccess') ?>", "success");
    <?php endif; ?>

    <?php if (session()->getFlashdata('failinsert')) : ?>
        swal("ผิดพลาด", "<?= session()->getFlashdata('failinsert') ?>", "error");
    <?php endif; ?>
</script>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">หน้าเเรก</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">หน้าเเรก</a>
                            </li>
                            <!-- <li class="breadcrumb-item active">Charts
                  </li> -->
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
                                <h4 class="card-title">ปฎิทินการจองห้องประชุม</h4>
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
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/index" class="btn btn-info">ทั้งหมด </span></a>
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/0?" class="btn btn-warning">กำลังรออนุมัติ</span></a>
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/1?" class="btn btn-success">อนุมัติเรียบร้อย</span></a>
                                    <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/2?" class="btn btn-danger">รายการยกเลิก</span></a>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                        ค้นหา
                                    </button>

                                    <!-- Modal -->

                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">ค้นหา</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <center> <a href="<?php echo base_url(); ?>/index.php/FullCalendar/index" class="btn btn-info">ทั้งหมด </span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/0?" class="btn btn-warning">กำลังรออนุมัติ</span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/1?" class="btn btn-success">อนุมัติเรียบร้อย</span></a>
                                                            <a href="<?php echo base_url(); ?>/index.php/FullCalendar/bystatus/2?" class="btn btn-danger">รายการยกเลิก</span></a>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="container">

                                                    <form action="<?php echo base_url(); ?>/index.php/FullCalendar/getRecords">
                                                        <div class="input-group mb-3">

                                                            <input type="text" name="q" class="form-control" placeholder="Test ค้นหา" aria-label="Test ค้นหา" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Test ค้นหา</button>

                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="container">
                                                    <form action="<?php echo base_url(); ?>/index.php/FullCalendar/byroom">
                                                        <div class="input-group mb-3">

                                                            <select class="custom-select" id="customSelect" name="q" aria-describedby="button-addon3">
                                                                <?php if ($room) : ?>
                                                                    <?php foreach ($room as $room) : ?>
                                                                        <option value="<?php echo $room['room_id']; ?>"><?php echo $room['room_name']; ?></option>


                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>


                                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon3">Test ค้นหา</button>

                                                        </div>
                                                    </form>

                                                </div>


                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <form action="<?php echo base_url(); ?>/index.php/FullCalendar/getRecords">
                                        <div class="input-group mb-3">

                                            <input type="text" name="q" class="form-control" placeholder="Test ค้นหา" aria-label="Test ค้นหา" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Test ค้นหา</button>

                                        </div>
                                    </form> -->

                                    <br><br><br>
                                    <div class="container">
                                        <?php
                                        if ($data == NULL) {
                                        ?>



                                            <div class="text-center">
                                                <h2>ไม่พบข้อมูลที่ค้นหา</h2>
                                                <br>
                                                <center><a type="button" href="<?php echo base_url(); ?>/index.php" class="btn btn-sm btn-info btn-tooltip">กลับ</a></center>

                                            </div>
                                        <?php
                                        } else { ?>

                                            <?php $session = session(); ?>

                                            <!-- <center><a type="button" href="<?php echo base_url(); ?>/index.php/insert/<?php echo $session->get('user_id'); ?>" class="btn btn-sm btn-info btn-tooltip">จองห้องประชุม</a></center> -->

                                            <br>
                                            <div id='calendar'></div>
                                        <?php } ?>

                                        <!-- Modal -->
                                        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
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