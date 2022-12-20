<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");
  require_once("myfunction.php");

    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM sub_categories WHERE id = '$id'";
    $result1 = mysqli_query($conn, $sql1);
    $rows1 = mysqli_fetch_assoc($result1); 
    $category_id = $rows1['category_id'];
    $subCategoryName = $rows1['subCategoryName'];
    $subCategoryCode = $rows1['subCategoryCode'];

    $sql11 = "SELECT * FROM categories WHERE id = '$category_id'";
    $result11 = mysqli_query($conn, $sql11);
    $rows11 = mysqli_fetch_assoc($result11); 
    $categoryName = $rows11['categoryName'];

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
      <div class="container mt-3 bg-light">
          <form action="sub_category_update.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Category Form</h4>
            <div>
            <input type="hidden" name="hid" id="hid" value="<?php echo $id; ?>">
            </div>
            <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Category Name</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option value="<?php echo $category_id; ?>"><?php echo $categoryName; ?></option>
                    <?php
                        option_data('categories','id', 'categoryName');
                    ?> 
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Sub Category Name</label>
              <input type="text" class="form-control" id="subCategoryName" placeholder="Category Name" name="subCategoryName" value="<?php echo $subCategoryName; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Sub Category Code</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="subCategoryCode" placeholder="000abc" name="subCategoryCode" aria-describedby="inputGroupPrepend" value="<?php echo $subCategoryCode; ?>" required>
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

