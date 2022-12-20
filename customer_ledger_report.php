<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");

    $sql1 = "SELECT SUM(customerCurrentBalance) AS sum FROM customers";
    $result1 = mysqli_query($conn, $sql1);
    while($rows1 = mysqli_fetch_assoc($result1)){
      $calculate = $rows1['sum'];
    }
    

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
        <span class="breadcrumb-item active">Suplier Lists</span>
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
                  <button class="bg-success border-0"><h5 class="p-1 m-1"><a class="text-white" href="customer_inoices.php" target="_blank"><i class="fa-solid fa-print text-white"></i> Print</a></h5></button>
                </div>
                </div><br>
                
                <div class="card-box table-responsive">
                <table id="datatable" class="table table-bordered" style="width: 90%;" align="center">
                
                    <thead>
                      <tr>
                        <th class="bg-white">SN</th>
                        <th class="bg-white">Customer Name</th>
                        <th class="bg-white">Customer Email</th>
                        <th class="bg-white">Customer Phone</th>
                        <th class="bg-white">Customer Address</th>
                        <th class="bg-white">Customer Carrent Balance</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                       require_once("connectdb.php");
                       $sql = "CALL customerShow()";
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['customerName'];?></td>
                        <td><?php echo $row['customerEmail'];?></td>
                        <td><?php echo $row['customerPhone'];?></td>
                        <td><?php echo $row['customerAddress'];?></td>
                        <td><?php echo $row['customerCurrentBalance'] . " ৳";?></td>
                      </tr> 
                      <?php
                       }
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total:</td>
                        <td><?php echo $calculate; ?></td>
                      </tr>
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




