<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $invNumber = $_REQUEST['invNumber'];
    $supplierID = $_REQUEST['supplierID'];
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
    
    $sql11 = "INSERT INTO purchase_short_manages VALUES (NULL, '$invNumber', '$supplierID', '$purchaseDate', '$tansMethod', '$note', '$grandTotal', '$paidAmount', '$duesAmount', '','')"; 
   $result11 = mysqli_query($conn, $sql11);

    $productslist = count($productID);
    for($i = 0; $i < $productslist; $i++){
        $prodCode_d = $prodCode[$i];
        $productID_d = $productID[$i];
        $prodQty_d = $prodQty[$i];
        $prodRate_d = $prodRate[$i];
        $totalPrice_d = $totalPrice[$i];

        $sql12 = "INSERT INTO purchase_manage VALUES (NULL, '$invNumber', '$productID_d','$prodCode_d', '$prodQty_d', '$prodRate_d', '$totalPrice_d', '', '')";
        $result12 = mysqli_multi_query($conn, $sql12);

        // PRODUCT STOCK UPDATE
        $sql15 = "SELECT stockBalance FROM productstock_manages WHERE id = '$productID_d'";
        $result15 = mysqli_query($conn, $sql15);
        $rows15 = mysqli_fetch_assoc($result15);
        $update_product = $rows15['stockBalance'] + $prodQty_d;

        $sql16 = "UPDATE productstock_manages SET stockBalance = '$update_product' WHERE id = '$productID_d'";
        $result16 = mysqli_multi_query($conn, $sql16);
        
    }
    
    // SUPPLIER UPDATE
    $sql13 = mysqli_query($conn,"SELECT supplierCarrentBalance FROM suppliers WHERE id = '$supplierID'");
    $rows13 = mysqli_fetch_assoc($sql13);
    $present_balance = $rows13['supplierCarrentBalance'];
    $update_balance = $present_balance + $duesAmount;
    $balance_after_invoice = $present_balance + $grandTotal;

    $sql14 = mysqli_multi_query($conn, "UPDATE suppliers SET supplierCarrentBalance = '$update_balance' WHERE 
    id = '$supplierID'");

    // SUPPLIER PAYMENT LIST    
    $sql17 = mysqli_multi_query($conn, "INSERT INTO supplier_payment_lists VALUES (NULL, '$supplierID','$purchaseDate','$tansMethod', '$paidAmount', '$note', '', '')");

    // SUPLIER LEDGER ENTRY
    $sql18 = mysqli_multi_query($conn, "INSERT INTO supplierledgers VALUES (NULL, '$supplierID','$purchaseDate','$invNumber', '$present_balance', '$grandTotal', '', '')");
        
    $particular_payment = $tansMethod . " " . $note;
    $sql19 = mysqli_multi_query($conn, "INSERT INTO supplierledgers VALUES (NULL, '$supplierID','$purchaseDate','$particular_payment', '$balance_after_invoice', '$paidAmount', '', '')");


    if($result11){
       header('location: purchase_list.php');
    }else{
        echo "no connected";
    }
?>