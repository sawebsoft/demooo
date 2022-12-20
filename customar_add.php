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
          <form action="customer_action.php" method="post" class="row g-3 needs-validation p-1 m-1" novalidate>
            <h4 style="color: #2F4F4F">Customer Form</h4>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Customer Name</label>
              <input type="text" class="form-control" id="customerName" placeholder="Customer Name" name="customerName" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Customer Email</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" id="customerEmail" placeholder="example@gmail.com" name="customerEmail" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Customer Phone</label>
              <input type="number" class="form-control" id="customerPhone" placeholder="01XXXXXXXXX" name="customerPhone" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Customer Address</label>
              <input type="text" class="form-control" id="customerAddress" placeholder="Address" name="customerAddress" required>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Note</label>
                <input type="text" class="form-control" id="note" placeholder="Note" name="note" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Customer Previous Balance</label>
              <input type="number" class="form-control" id="custoPrevBalance" placeholder="0.00" name="custoPrevBalance" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Customer Carrent Balance</label>
              <input type="number" class="form-control" id="customerCurrentBalance" placeholder="0.00" name="customerCurrentBalance" required>
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

