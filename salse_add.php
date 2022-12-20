

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
          <form action="salse_action.php" method="post" class="row g-3 p-1 m-1" >
            <h4 style="color: #2F4F4F">Sales Product Form</h4>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Invoice Number</label>
              <input type="text" class="form-control" id="invNumber" placeholder="000AX" name="invNumber" required>
            </div>
            <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Select Customer</label>
            <select class="form-select text-black-50" id="customerID" name="customerID" required>
                <option value="">Choose Cateroy Name</option>
                    <?php
                        option_data('customers','id', 'customerName');
                    ?> 
            </select>
          </div>
          <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Purchase Date</label>
              <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" required>
            </div>


            <div class="col-md-12">             
              <div class="row" id="appendDivCol">
                <div class="col-md-1 pt-4 text-center">
                    <button id="add"><i class="fa-solid fa-plus fa-1x"></i></button>             
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Product Code</label>
                    <input type="text" class="form-control" id="prodCode[]" placeholder="000abc" name="prodCode[]" required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Product Name</label>
                   
                    <select class="form-select text-black-50 product" id="productID[]" name="productID[]" required>
                        <option value="">Choose Product Name</option>
                            <?php
                                option_data('productstock_manages','id', 'productName');
                            ?> 
                        </select>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Product QTY</label>
                    <input type="number" class="form-control qty" id="prodQty[]" placeholder="Product QTY" name="prodQty[]" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Product Rate</label>
                    <input type="number" class="form-control rate" id="prodRate[]" placeholder="0.00" name="prodRate[]" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Total Price</label>
                    <input type="number" class="form-control total" id="totalPrice[]" placeholder="Total Price" name="totalPrice[]" required>
                </div>

              </div>
            </div>


            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Transection Method</label>
                    <input type="text" class="form-control" id="tansMethod" placeholder="Transection Method" name="tansMethod" required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Note</label>
                    <input type="text" class="form-control" id="note" placeholder="Note" name="note" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Grand Total</label>
                    <input type="number" class="form-control" id="grandTotal" placeholder="Grand Total" name="grandTotal" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Paid Amount</label>
                    <input type="number" class="form-control" id="paidAmount" placeholder="0.00" name="paidAmount" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Dues Amunt</label>
                    <input type="number" class="form-control" id="duesAmount" placeholder="Dues Amunt" name="duesAmount" required>
                </div>
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

<script src="cdn/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {     
      $('#add').click(function () {

        $products = $(".product").html();

        var str ='<div class="row" id="appendDivRow"><div class="col-md-1 pt-4 text-center removeDiv"><button class="remove"><i class="fa-solid fa-minus fa-1x"></i></button></div><div class="col-md-2"><label>Product Code</label><input type="number" class="form-control" id="prodCode[]" placeholder="000abc" name="prodCode[]" required></div><div class="col-md-3"><label>Product Name</label><select class="form-select text-black-50" id="productID[]" name="productID[]" required>'+$products+'</select></div><div class="col-md-2"><label>Product QTY</label><input type="number" class="form-control" id="prodQty[]" placeholder="Product QTY" name="prodQty[]" required></div><div class="col-md-2"><label>Product Rate</label><input type="number" class="form-control" id="prodRate[]" placeholder="0.00" name="prodRate[]" required></div><div class="col-md-2"><label>Total Price</label><input type="number" class="form-control" id="totalPrice[]" placeholder="Total Price" name="totalPrice[]" required></div></div>';
        $('#appendDivCol').append(str);

        $('.remove').on('click', function () {                
            $(this).parent().parent().remove();
        });

      }); 

      $('.qty, .rate').on('keyup', function(){
        var total = 0;
        var x = $('.qty').val();
        var y = $('.rate').val();
        var total1 = x * y;
        alert(total1);
        
        $('.total').val(total1);
        
      });
    });
</script>
