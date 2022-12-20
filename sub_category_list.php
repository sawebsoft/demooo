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
        <span class="breadcrumb-item active">Sub Catagory Manage</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    <h4 class="m-t-0 header-title"><b>Sub Catagory Manage</b></h4><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                    <a href="sub_category_add.php"><button class="btn btn-primary" type="submit">+Add Sub Catagory</button></a>
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
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Sub Category Code</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = 'SELECT * FROM subCategoryView ORDER BY subCategoryName';
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['categoryName'];?></td>
                        <td><?php echo $row['subCategoryName'];?></td>
                        <td><?php echo $row['subCategoryCode'];?></td>
                        <td  style="width:150px;">
                            <a href="sub_category_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="sub_category_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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




