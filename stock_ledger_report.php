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
    <link rel="stylesheet" href="style11.css">
    
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin_home.php">HOME</a>
        <span class="breadcrumb-item active">Stock Ledger Report</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    
    <div class="row bg-white">
              <div class="col-12">
                <div class=""><br>
                <div class="row">
                  <div class="col-10"></div>
                  <div class="col-2">
                  <button class="bg-success border-0"><h5 class="p-1 m-1"><a class="text-white" href="stock_invoice.php" target="_blank"><i class="fa-solid fa-print text-white"></i> Print</a></h5></button>
                </div>
                </div><br>
                
                <div class="card-box table-responsive">
                <table id="datatable" class="table table-bordered" style="width: 90%;" align="center">
                
                    <thead>
                      <tr>
                        <th class="bg-white">SN</th>
                        <th class="bg-white">Product Name</th>
                        <th class="bg-white">Prosuct Code</th>
                        <th class="bg-white">Product Rate</th>
                        <th class="bg-white">Stoct Balasce</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = 'SELECT * FROM productView ORDER BY productName';
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['productName'];?></td>
                        <td><?php echo $row['prodCode'];?></td>
                        <td><?php echo $row['prodRate']. " ৳";?></td>
                        <td><?php echo $row['stockBalance'];?></td>
                      </tr> 
                      <?php
                       }
                      ?>
                    </tbody>
                    
                  </table><br>
                  </div>
                </div>
              </div>
            </div>
    </p>
</div>
</div><!-- sl-pagebody -->
    <!-- footer -->
    <?php 
    require_once("inculde/footer.php");
    ?>




