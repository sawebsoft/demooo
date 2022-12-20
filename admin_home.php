<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");

?>

  <body>
  <?php
      require_once("inculde/menu.php"); 
      require_once("inculde/nav.php");
    ?>
    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin_home.php">HOME</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
        <?php 
          $gross_sale = 0;
          $today_sale = 0;
          $week_sale = 0;
          $month_sale = 0;
          $year_sale = 0;

          $today_sale_sql = "SELECT * FROM order_management WHERE DATE(insert_time) = CURDATE()";
          $toda_result = mysqli_query($conn, $today_sale_sql);
          while($today_order = mysqli_fetch_assoc($toda_result)){
            $today_sale+= (float) $today_order['price'];
          }

          $week_sale_sql = "SELECT * FROM order_management WHERE insert_time > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
          $week_result = mysqli_query($conn, $week_sale_sql);
          while($week_order = mysqli_fetch_assoc($week_result)){
            $week_sale+= (float) $week_order['price'];
          }

          $month_sale_sql = "SELECT * FROM order_management WHERE insert_time > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
          $month_result = mysqli_query($conn, $month_sale_sql);
          while($month_order = mysqli_fetch_assoc($month_result)){
            $month_sale+= (float) $month_order['price'];
          }

          $year_sale_sql = "SELECT * FROM order_management WHERE insert_time > DATE_SUB(NOW(), INTERVAL 1 YEAR)";
          $year_result = mysqli_query($conn, $year_sale_sql);
          while($year_order = mysqli_fetch_assoc($year_result)){
            $year_sale+= (float) $year_order['price'];
          }

          $total_sale_sql = "SELECT * FROM order_management";
          $total_result = mysqli_query($conn, $total_sale_sql);
          while($total_order = mysqli_fetch_assoc($total_result)){
            $gross_sale+= (float) $total_order['price'];
          }
        ?>
        <div class="row row-sm" style="min-height: 70vh">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$<?php echo number_format($today_sale, 2); ?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$<?php echo number_format($gross_sale, 2); ?></h6>
                </div>
                
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$<?php echo number_format($week_sale, 2); ?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$<?php echo number_format($gross_sale, 2); ?></h6>
                </div>
                
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$<?php echo number_format($month_sale, 2); ?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$<?php echo number_format($gross_sale, 2); ?></h6>
                </div>
                
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$<?php echo number_format($year_sale, 2); ?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$<?php echo number_format($gross_sale, 2); ?></h6>
                </div>
                
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- sl-pagebody -->
      <!-- footer -->
      <?php 
      require_once("inculde/footer.php");
    ?>
    
