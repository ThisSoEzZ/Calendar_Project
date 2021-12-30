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
          
          <?php if ($room) : ?>
            <?php foreach ($room as $room) : ?>
              <div class="col-lg-4 col-md-12">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $room['room_name']; ?></h4>
                    <!-- <h6 class="card-subtitle text-muted">Basic Card With Header & Footer</h6> -->

                  </div>
                  <hr>
                  <img class="" src="<?php echo base_url(); ?>/theme-assets/Test1.png" alt="Card image cap">
                  <hr>
                  <div class="card-body">
                   
                  </div>
                  <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                    <span class="float-right">
                      <a href="<?php echo base_url(); ?>/index.php/room/room_detail/<?php echo $room['room_id']; ?>" class="card-link">ดูรายละเอียด
                        <i class="la la-angle-right"></i>
                      </a>
                    </span>
                  </div>


                </div>
              </div> <?php endforeach; ?>
          <?php endif; ?>


        </div>
    </div>
    </section>
    <!-- Header footer section End -->