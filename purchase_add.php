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
          <form class="row g-3 needs-validation p-1 m-1" action="purchase_action.php" method="post">
            <h4 style="color: #2F4F4F">Product Stock Invoice Form</h4>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Invoice Number</label>
              <input type="text" class="form-control" id="invNumber" placeholder="000AX" name="invNumber" required>
            </div>
            <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Select Supplier</label>
            <select class="form-select text-black-50" id="supplierID" name="supplierID" required>
                <option value="">Choose Cateroy Name</option>
                    <?php
                        option_data('suppliers','id', 'supplierName');
                    ?> 
            </select>
          </div>
          <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Purchase Date</label>
              <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" required>
            </div>

            <div class="col-md-12" id="appendDivCol">

              <div class="row" id="appendDivRow">
                <div class="col-md-1 pt-4 text-center ">
                    <button id="add"><i class="fa-solid fa-plus fa-1x"></i></button>             
                </div>
                <div class="col-md-2">
                    <label>Product Code</label>
                    <input type="text" class="form-control" id="prodCode[]" placeholder="000abc" name="prodCode[]" required>
                </div>
                <?php 
                $productsql = "SELECT * FROM productstock_manages";
                $productquery = mysqli_query($conn, $productsql);
                  ?>
                <div class="col-md-3">
                    <label>Product Name</label>
                    <select name="product_id[]" id="product_id" class="form-control product_id">
                    <option value="">Select Item</option>
                    <?php foreach($productquery as $product): ?>
                        <option data-price="<?php echo $product['prodRate'];?>" value="<?php echo $product['id'];?>"> <?php echo $product['productName'];?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Product QTY</label>
                    <input type="number" class="form-control qty" id="prodQty[]" placeholder="Product QTY" name="prodQty[]" required>
                </div>
                <div class="col-md-2">
                    <label>Product Rate</label>
                    <input type="number" class="form-control rate" id="prodRate[]" placeholder="0.00" name="prodRate[]" required>
                </div>
                <div class="col-md-2">
                    <label>Total Price</label>
                    <input type="number" class="form-control total" id="totalPrice[]" placeholder="0.00" name="totalPrice[]" required>
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
                    <label for="validationCustom01" class="form-label ">Grand Total</label>
                    <input type="number" class="form-control total_amount" id="grandTotal" placeholder="Grand Total" name="grandTotal" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Paid Amount</label>
                    <input type="number" class="form-control total" id="paidAmount" placeholder="0.00" name="paidAmount" required>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Dues Amount</label>
                    <input type="number" class="form-control" id="duesAmount" placeholder="Dues Amount" name="duesAmount" required>
                </div>
              </div>
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

        var str ='<div class="row" id="appendDivRow"><div class="col-md-1 pt-4 text-center removeDiv"><button class="remove"><i class="fa-solid fa-minus fa-1x"></i></button></div><div class="col-md-2"><label>Product Code</label><input type="number" class="form-control" id="prodCode[]" placeholder="000abc" name="prodCode[]" required></div><div class="col-md-3"><label>Product Name</label><select class="form-select text-black-50 productID" id="productID[]" name="productID[]" required>'+$products+'</select></div><div class="col-md-2"><label>Product QTY</label><input type="number" class="form-control qty" id="prodQty[]" placeholder="Product QTY" name="prodQty[]" required></div><div class="col-md-2"><label>Product Rate</label><input type="number" class="form-control rate" id="prodRate[]" placeholder="0.00" name="prodRate[]" required></div><div class="col-md-2"><label>Total Price</label><input type="number" class="form-control total" id="totalPrice[]" placeholder="Total Price" name="totalPrice[]" required></div></div>';
        $('#appendDivCol').append(str);

        $('.remove').on('click', function () {                
            $(this).parent().parent().remove();
        });



  //Logic For ORDER PRODUCTS Calculate
    // function TotalAmount(){
    //   var total = 0;
    //   $('.total_amount').each(function(i,e){
    //     var amount = $(this).val() - 0;
    //     total += amount;
    //   });
    //   $('.total').html(total);
    // }
    $('.add').delegate('.productID', 'change', function(){
        var tr = $(this).parent().parent();
        var price = tr.find('.productID option:selected').attr('data-price');
        console.log(price);
        tr.find('.price').val(price);
        var qty = tr.find('.quantity').val() - 0;
        var disc = tr.find('.discount').val() - 0;
        var price = tr.find('.rate').val() - 0;
        var total_amount = (qty * price) - ((qty * price * disc) / 100);
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    });

    // $('add').delegate('.quantity, .discount, .price', 'keyup', function(){
    //     var tr = $(this).parent().parent();
    //     var qty = tr.find('.quantity').val() - 0;
    //     var disc = tr.find('.discount').val() - 0;
    //     var price = tr.find('.price').val() - 0;
    //     var total_amount = (qty * price) - ((qty * price * disc) / 100);
    //     tr.find('.total_amount').val(total_amount);
    //     TotalAmount();
    // });
    // Total Payment Calculate
    // $('#paid_amount').keyup(function(){
    //     var total = $('.total').html();
    //     var paid_amount = $(this).val();
    //     var tot = paid_amount - total;
    //     $('#balance').val(tot);
    // })
      }); 

      
    });


</script>
