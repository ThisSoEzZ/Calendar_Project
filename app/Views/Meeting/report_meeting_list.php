<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">รายงานการจอง</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
              </li>
              <li class="breadcrumb-item active">รายงานการจอง
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- ../../../theme-assets/images/carousel/22.jpg -->

      <!-- Header footer section start -->
      <section id="header-footer">

        <div class="row match-height">
        <?php
          foreach ($Alltotal as $row) { ?>

              <div class="col-lg-4 col-md-12">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row->room_name ?></h4>
                    <!-- <h6 class="card-subtitle text-muted">Basic Card With Header & Footer</h6> -->

                  </div>
                  <hr>
                  <img class="" src="<?php echo base_url(); ?>/theme-assets/Test1.png" alt="Card image cap">
                  <hr>
                  <div class="card-body">

                  <p class="card-text">การจองห้องประชุมทั้งหมด : <?php echo $row->TotalCount ?> ครั้ง</p>
                  <p class="card-text">จำนวนคนที่เข้าร่วมประชุมทั้งหมด : <?php echo $row->total ?> คน</p>
                  <p class="card-text">ปีล่าสุด : <?php echo $row->year ?></p>



                  </div>
                  <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                    <span class="float-right">
                      <a href="<?php echo base_url(); ?>/index.php/Meeting/report_meeting_detail/<?php echo $row->room_id ?>/<?php echo $row->year ?>" class="card-link">ดูรายละเอียด
                        <i class="la la-angle-right"></i>
                      </a>
                    </span>
                  </div>


                </div>
              </div> 

       
          <?php
          }
          ?>



        </div>
    </div>
    </section>
    <!-- Header footer section End -->