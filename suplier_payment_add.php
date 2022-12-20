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
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin_home.php">HOME</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3 bg-light">
          <form action="supplier_action.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Supplier Payment From</h4>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Supplier Name</label>
              <input type="text" class="form-control" id="supplierName" placeholder="Supplier Name" name="supplierName" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Payment Date</label>
                <input type="date" class="form-control" id="paymentDate" name="paymentDate" aria-describedby="inputGroupPrepend" required>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Note</label>
                <input type="text" class="form-control" id="note" placeholder="Note" name="note" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Transaction Method</label>
              <input type="text" class="form-control" id="transactionMethod" placeholder="0.00" name="transactionMethod" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Payment Ammount</label>
              <input type="number" class="form-control" id="paymentAmount" placeholder="0.00" name="paymentAmount" required>
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

