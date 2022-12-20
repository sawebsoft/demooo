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
        <span class="breadcrumb-item active">Suplier Lists</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    <h4 class="m-t-0 header-title"><b>Suplier Lists</b></h4><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                    <a href="supplier_add.php"><button class="btn btn-primary" type="submit">+Add Suplier</button></a>
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
                        <th>Supplier Name</th>
                        <th>Supplier Email</th>
                        <th>Supplier Phone</th>
                        <th>Supplier Address</th>
                        <th>Note</th>
                        <th>Supplier Previous Balance</th>
                        <th>Supplier Carrent Balance</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = "CALL supplierShow()";
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['supplierName'];?></td>
                        <td><?php echo $row['supplierEmail'];?></td>
                        <td><?php echo $row['supplierPhone'];?></td>
                        <td><?php echo $row['supplierAddress'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td><?php echo $row['supplierPrevBalance'] . " ৳";?></td>
                        <td><?php echo $row['supplierCarrentBalance'] . " ৳";?></td>
                        <td  style="width:150px;">
                            <a href="supplier_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="supplier_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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




