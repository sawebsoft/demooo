<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");
  require_once("myfunction.php");

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
          <form action="sub_category_action.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Category Form</h4>
            <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Category Name</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option value="">Choose Cateroy Name</option>
                    <?php
                        option_data('categories','id', 'categoryName');
                    ?> 
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Sub Category Name</label>
              <input type="text" class="form-control" id="subCategoryName" placeholder="Category Name" name="subCategoryName" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Sub Category Code</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="subCategoryCode" placeholder="000abc" name="subCategoryCode" aria-describedby="inputGroupPrepend" required>
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

