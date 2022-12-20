<!-- header -->
<?php
  require_once("inculde/header.php");
  require_once("connectdb.php");

    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM suppliers WHERE id = '$id'";
    $result1 = mysqli_query($conn, $sql1);
    $rows1 = mysqli_fetch_assoc($result1); 
    $supplierName = $rows1['supplierName'];
    $supplierEmail = $rows1['supplierEmail'];
    $supplierPhone = $rows1['supplierPhone'];
    $supplierAddress = $rows1['supplierAddress'];
    $note = $rows1['note'];
    $supplierPrevBalance = $rows1['supplierPrevBalance'];
    $supplierCarrentBalance = $rows1['supplierCarrentBalance'];

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
          <form action="supplier_update.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Supplier From</h4>
            <div>
            <input type="hidden" name="hid" id="hid" value="<?php echo $id; ?>">
            </div>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Supplier Name</label>
              <input type="text" class="form-control" id="supplierName" placeholder="Supplier Name" name="supplierName" value="<?php echo $supplierName; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Supplier Email</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" id="supplierEmail" placeholder="example@gmail.com" name="supplierEmail" aria-describedby="inputGroupPrepend" value="<?php echo $supplierEmail; ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Supplier Phone</label>
              <input type="number" class="form-control" id="supplierPhone" placeholder="01XXXXXXXXX" name="supplierPhone" value="<?php echo $supplierPhone; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Supplier Address</label>
              <input type="text" class="form-control" id="supplierAddress" placeholder="Address" name="supplierAddress" value="<?php echo $supplierAddress; ?>" required>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Note</label>
                <input type="text" class="form-control" id="note" placeholder="Note" name="note" value="<?php echo $note; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Supplier Previous Balance</label>
              <input type="number" class="form-control" id="supplierPrevBalance" placeholder="0.00" name="supplierPrevBalance" value="<?php echo $supplierPrevBalance; ?>" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Supplier Carrent Balance</label>
              <input type="number" class="form-control" id="supplierCarrentBalance" placeholder="0.00" name="supplierCarrentBalance" value="<?php echo $supplierCarrentBalance; ?>" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
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

