<!-- header -->
<?php
  //require_once("inculde/header.php");
  require("connectdb.php");

    $sql1 = "SELECT SUM(supplierCarrentBalance) AS sum FROM suppliers";
    $result1 = mysqli_query($conn, $sql1);
    while($rows1 = mysqli_fetch_assoc($result1)){
        $calculate = $rows1['sum'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Salse Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style=" background-color: #C0C0C0;">

<div class="container"><br><br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-8  bg-white" style="box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.2), 0 12px 26px 0 rgba(0, 0, 0, 0.19);">
            <div class="container-sm p-4">
                <div class="row">
                    <div class="col-6 p-3">
                    <h3>Logo</h3>
                    </div>
                    <div class="col-6 p-4 text-end">
                        <?php
                            require("connectdb.php");

                            $sql13 = 'SELECT * FROM sals_short_mangs';
                            $result13 = mysqli_query($conn, $sql13);
                            while($rows13 = mysqli_fetch_assoc($result13)){
                            $invNumber = $rows13['invNumber'];
                            $purchaseDate = $rows13['purchaseDate'];
                           }
                        ?>
                        
                       <b>Invoice No:</b> <?php echo ' '. $invNumber; ?> <br>
                       <b>Date:</b> <?php echo ' '. $purchaseDate; ?>
                    </div>
                    
                </div><br><br>
                <div class="row border-top border-dark border-3"">
                    <div class="col-6">
                        <h1>Company Name</h1>
                        <b>Mobile:</b><br>
                        <b>Email:</b><br>
                        <b>Address:</b>
                    </div>
                    <div class="col-6">
                        <?php
                            require("connectdb.php");

                            $sql14 = 'SELECT * FROM customers';
                            $result14 = mysqli_query($conn, $sql14);
                            while($rows14 = mysqli_fetch_assoc($result14)){
                                $customerName = $rows14['customerName'];
                                $customerPhone = $rows14['customerPhone'];
                                $customerEmail = $rows14['customerEmail'];
                                $customerAddress = $rows14['customerAddress'];
                           }
                        ?>
                        <h1><?php echo ' '. $customerName; ?></h1>
                        <b>Mobile:</b><?php echo ' '. $customerPhone; ?><br>
                        <b>Email:</b><?php echo ' '. $customerEmail; ?><br>
                        <b>Address:</b><?php echo ' '. $customerAddress; ?>
                    </div>
                    </div>
                </div><br>
                <div class="row border-top border-dark border-3">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="pt-5">Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                       require("connectdb.php");
                       $sql = 'SELECT * FROM productstock_manages ORDER BY productName';
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                        $sql = 'SELECT * FROM purchase_manage';
                        $results = mysqli_query($conn, $sql); 
                        $rows = mysqli_fetch_assoc($results)
                            
                        
                      ?>
                      <tr>
                        <td><?php echo $row['productName'];?></td>
                        <td><?php echo $row['prodRate'];?></td>
                        <td><?php echo $rows['prodQty'];?></td>
                        <td><?php echo $rows['totalPrice'];?></td>
                      </tr> 
                      <?php
                       }
                      ?>
                    </tbody>
                </table>
                </div><br>
                <div class="row">
                    <div class="col-7">

                    </div>
                    <div class="col-3 border-top border-dark border-3">
                       <b>Grand Total:</b> <br>
                       <b>Paid Amount:</b> <br>
                       <b>Dues Amount:</b> <br>
                    </div>
                    <div class="col-2 border-top border-dark border-3 text-end">
                        <?php echo $calculate; ?>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-3">
                    </div>
                    <div class="col-3 text-end">
                        Director Signature
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-12 text-center pb-2">
                        THANK YOU.
                    </div>
                
                </div>
                
            </div>
        </div>


        <div class="col-2">
            
        </div>
    </div>          
  
</div>

</body>
</html>
