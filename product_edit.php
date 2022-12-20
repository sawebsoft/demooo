<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");
  require("myfunction.php");

  $id = $_REQUEST['id'];
  $sql1 = "SELECT * FROM productstock_manages WHERE id = '$id'";
  $result1 = mysqli_query($conn, $sql1);
  $rows1 = mysqli_fetch_assoc($result1); 
  $productName = $rows1['productName'];
  $prodCode = $rows1['prodCode'];
  $catagoryID = $rows1['catagoryID'];
  $subCatagoryID = $rows1['subCatagoryID'];
  $prodRate = $rows1['prodRate'];
  $stockBalance = $rows1['stockBalance'];

  $sql11 = "SELECT * FROM categories WHERE id = '$category_id'";
  $result11 = mysqli_query($conn, $sql11);
  $rows11 = mysqli_fetch_assoc($result11); 
  $categoryName = $rows11['categoryName'];

  $sql12 = "SELECT * FROM sub_categories WHERE id = '$subCatagoryID'";
  $result12 = mysqli_query($conn, $sql12);
  $rows12 = mysqli_fetch_assoc($result12); 
  $subCategoryName = $rows12['subCategoryName'];


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
      <div class="container mt-3 bg-light text-black">
          <form action="product_update.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Product Form</h4>
            <div>
            <input type="hidden" name="hid" id="hid" value="<?php echo $id; ?>">
            </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" value="<?php echo $productName; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Code</label>
              <input type="text" class="form-control" id="prodCode" placeholder="Product Code" name="prodCode" value="<?php echo $prodCode; ?>" required>
            </div>
            <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Choose Category Name</label>
            <select class="form-select text-black-50" id="catagoryID" name="catagoryID" required>
                <option value="<?php echo $catagoryID; ?>"> <?php echo $categoryName; ?> </option>
                    <?php
                        option_data('categories','id', 'categoryName');
                    ?> 
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Choose Sub Category Name</label>
            <select class="form-select text-black-50" id="subCatagoryID" name="subCatagoryID" required>
                <option value="<?php echo $subCatagoryID; ?>"> <?php echo $subCategoryName; ?> </option>
                    <?php
                        option_data('sub_categories','id', 'subCategoryName');
                    ?> 
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Rate</label>
              <input type="number" class="form-control" id="prodRate" placeholder="0.00" name="prodRate" value="<?php echo $prodRate; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Stock Balance</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" id="stockBalance" placeholder="0.00" name="stockBalance" aria-describedby="inputGroupPrepend" value="<?php echo $stockBalance; ?>" required>
              </div>
            </div>
            <div class="">
              
            </div>
            <div class="col-12 text-center">
              <button class="btn btn-primary" type="submit">Submit form</button><br><br>
            </div>
          </form>
</div>
</div><!-- sl-pagebody -->
    <!-- footer -->
    <?php 
    require_once("inculde/footer.php");
    ?>

