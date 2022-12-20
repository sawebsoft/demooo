<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");
  require("myfunction.php");

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
          <form action="product_action.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Product Form</h4>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Code</label>
              <input type="text" class="form-control" id="prodCode" placeholder="Product Code" name="prodCode" required>
            </div>
            <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Choose Category Name</label>
            <select class="form-select text-black-50" id="catagoryID" name="catagoryID" required>
                <option value="">Choose Cateroy Name</option>
                    <?php
                        option_data('categories','id', 'categoryName');
                    ?> 
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Choose Sub Category Name</label>
            <select class="form-select text-black-50" id="subCatagoryID" name="subCatagoryID" required>
                <option value="">Choose Cateroy Name</option>
                    <?php
                        option_data('sub_categories','id', 'subCategoryName');
                    ?> 
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Rate</label>
              <input type="number" class="form-control" id="prodRate" placeholder="0.00" name="prodRate" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Stock Balance</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" id="stockBalance" placeholder="0.00" name="stockBalance" aria-describedby="inputGroupPrepend" required>
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

