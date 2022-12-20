<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $invNumber = $_REQUEST['invNumber'];
    $customerID = $_REQUEST['customerID'];
    $purchaseDate = $_REQUEST['purchaseDate'];

    $prodCode = $_REQUEST['prodCode'];
    $productID = $_REQUEST['productID'];
    $prodQty = $_REQUEST['prodQty'];    
    $prodRate = $_REQUEST['prodRate'];    
    $totalPrice = $_REQUEST['totalPrice'];

    $tansMethod = $_REQUEST['tansMethod'];
    $note = $_REQUEST['note'];
    $grandTotal = $_REQUEST['grandTotal'];
    $paidAmount = $_REQUEST['paidAmount'];
    $duesAmount = $_REQUEST['duesAmount'];
    
    $sql11 = "INSERT INTO sals_short_mangs VALUES (NULL, '$invNumber', '$customerID', '$purchaseDate', '$tansMethod', '$note', '$grandTotal', '$paidAmount', '$duesAmount', '','')"; 
   $result11 = mysqli_query($conn, $sql11);

    $productslist = count($productID);
    for($i = 0; $i < $productslist; $i++){
        $prodCode_d = $prodCode[$i];
        $productID_d = $productID[$i];
        $prodQty_d = $prodQty[$i];
        $prodRate_d = $prodRate[$i];
        $totalPrice_d = $totalPrice[$i];

        $sql12 = "INSERT INTO sales_products VALUES (NULL, '$invNumber', '$productID_d','$prodCode_d', '$prodQty_d', '$prodRate_d', '$totalPrice_d', '', '')";
        $result12 = mysqli_multi_query($conn, $sql12);

        // PRODUCT STOCK UPDATE
        $sql15 = "SELECT stockBalance FROM productstock_manages WHERE id = '$productID_d'";
        $result15 = mysqli_query($conn, $sql15);
        $rows15 = mysqli_fetch_assoc($result15);
        $update_product = $rows15['stockBalance'] - $prodQty_d;

        $sql16 = "UPDATE productstock_manages SET stockBalance = '$update_product' WHERE id = '$productID_d'";
        $result16 = mysqli_multi_query($conn, $sql16);
    }

    // CUSTOMER UPDATE
    $sql13 = mysqli_query($conn,"SELECT customerCurrentBalance FROM customers WHERE id = '$customerID'");
    $rows13 = mysqli_fetch_assoc($sql13);
    $present_balance = $rows13['customerCurrentBalance'];
    $update_balance = $present_balance + $duesAmount;
    $balance_after_invoice = $present_balance + $grandTotal;

    $sql14 = mysqli_multi_query($conn, "UPDATE customers SET customerCurrentBalance = '$update_balance' WHERE 
    id = '$customerID'");

    // CUSTOMER PAYMENT LIST    
    $sql17 = mysqli_multi_query($conn, "INSERT INTO customerpayment_lists VALUES (NULL, '$customerID','$purchaseDate','$tansMethod', '$paidAmount', '$note', '', '')");

    // CUSTOMER LEDGER ENTRY
    $sql18 = mysqli_multi_query($conn, "INSERT INTO customerledgers VALUES (NULL, '$customerID','$purchaseDate','$invNumber', '$present_balance', '$grandTotal', '', '')");
        
    $particular_payment = $tansMethod . " " . $note;
    $sql19 = mysqli_multi_query($conn, "INSERT INTO supplierledgers VALUES (NULL, '$customerID','$purchaseDate','$particular_payment', '$balance_after_invoice', '$paidAmount', '', '')");

    

    if($result11){
       header('location: salse_list.php');
    }else{
        echo "no connected";
    }
?>