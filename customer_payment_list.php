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
        <span class="breadcrumb-item active">Customer Payment Lists</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    <h4 class="m-t-0 header-title"><b>Customer Payment Lists</b></h4><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                    <a href="customer_payment_add.php"><button class="btn btn-primary" type="submit">+Add Customer Payment</button></a>
                    </div>
                    <div class="col-4">
                        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                            <input type="text" placeholder="Search.." name="search2">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div><br>
    <div class="row">
              <div class="col-12">
                <div class="card-box table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>SN</th>
                        <th>Customer Name</th>
                        <th>Payment Date</th>
                        <th>Transaction Method</th>
                        <th>Payment Amount</th>
                        <th>Note</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = 'SELECT * FROM customerpayment_lists ORDER BY customerID';
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){
                        
                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <<td><?php echo $row['customerID'];?></td>
                        <td><?php echo $row['paymentDate'];?></td>
                        <td><?php echo $row['transactionMethod'];?></td>
                        <td><?php echo $row['paymentAmount'];?></td>
                        <td><?php echo $row['note'];?></td>
                      </tr> 
                      <?php
                       }
                      ?>
                    </tbody>
                  </table>
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




