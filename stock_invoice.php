<!-- header -->
<?php
  //require_once("inculde/header.php");
  require_once("connectdb.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stoct Product Inoices</title>
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
        <div class="col-8  bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="container-sm p-4">
                <div class="row">
                    <div class="col-6 p-3">
                    <h3>Logo</h3>
                    </div>
                    <div class="col-6 p-4 text-end">
                        Date:
                    </div>
                    
                </div><br>
                <div class="row  border-top border-dark border-3">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="pt-3">SN</th>
                        <th>Supplier Name</th>
                        <th>Prosuct Code</th>
                        <th>Product Rate</th>
                        <th>Stoct Balasce</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = 'SELECT * FROM productView ORDER BY productName';
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['productName'];?></td>
                        <td><?php echo $row['prodCode'];?></td>
                        <td><?php echo $row['prodRate']. " ???";?></td>
                        <td><?php echo $row['stockBalance'];?></td>
                      </tr> 
                      <?php
                       }
                      ?>
                    </tbody>
                </table>
                </div>
                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col-3 text-end">
                        <!-- Total: -->
                    </div>
                    <div class="col-3">
                        <?php //echo $calculate; ?>
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
                    <div class="col-12 text-center pb-5">
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
