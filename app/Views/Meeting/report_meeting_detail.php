  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('visualization', "1", {
          packages: ['corechart']
      });
  </script>
  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-wrapper-before"></div>
          <div class="content-header row">
              <div class="content-header-left col-md-4 col-12 mb-2">
                  <h3 class="content-header-title">รายละเอียดรายงานการจองห้องประชุม</h3>
              </div>
              <div class="content-header-right col-md-8 col-12">
                  <div class="breadcrumbs-top float-md-right">
                      <div class="breadcrumb-wrapper mr-1">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าเเรก</a>
                              </li>
                              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/index.php/report/meeting_report">รายงานการจอง</a>
                              </li>
                              <li class="breadcrumb-item active">รายละเอียดรายงานการจองห้องประชุม</a>
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

                                  <h4 class="card-title">รายละเอียดรายงานการจองห้องประชุม</h4>


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
                                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <li class="nav-item">
                                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">จำนวนการจอง</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">จำนวนผู้เข้าประชุม</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                          </li>
                                      </ul>
                                      <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                              <select name="forma" onchange="location = this.value;">
                                              <option value="">กรุณาเลือกปี</option>

                                                  <?php foreach ($idYear as $idYear) : ?>

                                                      <option value="<?php echo base_url(); ?>/index.php/Meeting/report_meeting_detail/<?php echo $idYear->room_id ?>/<?php echo $idYear->year ?>"><?php echo $idYear->year ?></option>

                                                  <?php endforeach; ?>
                                              </select>
                                           

                                              <div id="line_date_wise" style="width: 900px; height: 500px; margin: 0 auto"></div>
                                              <?php
                                                if ($month_wise == NULL) {
                                                ?>



                                                  <div class="text-center">
                                                      <br> <br> <br> <br> <br> <br> <br>
                                                      <h2>ไม่พบข้อมูล</h2>
                                                      <br>
                                                      <!-- <center><a type="button" href="<?php echo base_url(); ?>/index.php" class="btn btn-sm btn-info btn-tooltip">กลับ</a></center> -->
                                                  </div>
                                              <?php } ?>
                                              <div id="bar_date_wise" style="width: 900px; height: 500px; margin: 0 auto"></div>
                                          </div>
                                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                                          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                                      </div>





                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </section>
              <!-- // Bar charts section end -->
              <script language="JavaScript">
                  // Draw the pie chart for registered users month wise
                  google.charts.setOnLoadCallback(lineChart);

                  // Draw the pie chart for registered users year wise
                  google.charts.setOnLoadCallback(barChart);

                  //for
                  function lineChart() {

                      /* Define the chart to be drawn.*/
                      var data = google.visualization.arrayToDataTable([

                          ['ปี', 'จำนวนการจอง'],
                          <?php
                            foreach ($year_wise as $row) {
                                echo "['" . $row->year . "'," . $row->total . "],";
                            }
                            ?>
                      ]);

                      var options = {
                          title: 'ปีจำนวนการจอง',
                          curveType: 'function',
                          legend: {
                              position: 'bottom'
                          },
                          is3D: true
                      };
                      /* Instantiate and draw the chart.*/
                      var chart = new google.visualization.LineChart(document.getElementById('line_date_wise'));
                      chart.draw(data, options);
                  }
                  // for
                  function barChart() {

                      /* Define the chart to be drawn.*/
                      var data = google.visualization.arrayToDataTable([
                          ['เดือน', 'จำนวนการจอง'],

                          <?php
                            foreach ($month_wise as $row) {
                                echo "['" . $row->month . "'," . $row->total . "],";
                            }
                            ?>
                      ]);
                      var options = {
                          title: 'เดือนจำนวนการจอง',
                          is3D: true,
                      };
                      /* Instantiate and draw the chart.*/
                      var chart = new google.visualization.BarChart(document.getElementById('bar_date_wise'));
                      chart.draw(data, options);
                  }
              </script>