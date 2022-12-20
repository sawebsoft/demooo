<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");
  $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM categories WHERE id = '$id'";
    $result1 = mysqli_query($conn, $sql1);
    $rows1 = mysqli_fetch_assoc($result1); 
    $categoryName = $rows1['categoryName'];
    $categoryCode = $rows1['categoryCode'];

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
          <form action="category_update.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Category Form</h4>
            <div>
            <input type="hidden" name="hid" id="hid" value="<?php echo $id; ?>">
            </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="categoryName" placeholder="Category Name" name="categoryName" value="<?php echo $categoryName; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Category Code</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="categoryCode" placeholder="000abc" name="categoryCode" aria-describedby="inputGroupPrepend" value="<?php echo $categoryCode; ?>" required>
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

