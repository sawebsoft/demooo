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
        <span class="breadcrumb-item active">Manage Customer</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    <h4 class="m-t-0 header-title"><b>Manage Customer</b></h4><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                    <a href="customar_add.php"><button class="btn btn-primary" type="submit">+Add Customer</button></a>
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
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Customer Address</th>
                        <th>Note</th>
                        <th>Customer Previous Balance</th>
                        <th>Customer Carrent Balance</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = "CALL customerShow()";
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['customerName'];?></td>
                        <td><?php echo $row['customerEmail'];?></td>
                        <td><?php echo $row['customerPhone'];?></td>
                        <td><?php echo $row['customerAddress'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td><?php echo $row['custoPrevBalance']. " ৳";?></td>
                        <td><?php echo $row['customerCurrentBalance']. " ৳";?></td>
                        <td  style="width:150px;">
                            <a href="customer_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="customer_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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




