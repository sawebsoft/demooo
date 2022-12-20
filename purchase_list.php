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
        <span class="breadcrumb-item active">Purchase manage</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    <h4 class="m-t-0 header-title"><b>Purchase manage</b></h4><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                    <a href="purchase_add.php"><button class="btn btn-primary" type="submit">+Add Purchase</button></a>
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
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>SN</th>
                        <th>Invoice Number</th>
                        <th>Suplier Name</th>
                        <th>Purchase Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = 'SELECT * FROM purchase_short_manages ORDER BY supplierName';
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                        $suppliers_id = $row['supplierName'];
                        $sql1 = "SELECT * FROM suppliers where id='$suppliers_id'";
                        $result1 = mysqli_query($conn, $sql1); 
                        $row1 = mysqli_fetch_assoc($result1);

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['invNumber'];?></td>
                        <td><?php echo $row1['supplierName'];?></td>
                        <td><?php echo $row['purchaseDate'];?></td>
                        <td  style="width:150px;">
                            <a href="purchase_invoice.php" target="_blank" class="btn btn-primary"><i class="fa-solid fa-file-invoice"></i></i></a>
                            <a href="purchase_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                          </td>
                        
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




