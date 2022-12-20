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
    <link rel="stylesheet" href="style11.css">
    
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin_home.php">HOME</a>
        <span class="breadcrumb-item active">Catagory Manage</span>
      </nav>
      <div class="sl-pagebody">
      <div class="container mt-3">
    <p>
    <h4 class="m-t-0 header-title"><b>Catagory Manage</b></h4><br>
            <div class="container-fluid">
                
            </div><br>
    <div class="row">
              <div class="col-12">
                <div class="card-box table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                      <tr>
                        <tr>
                            <th class="table-dark text-center" colspan="2">COMPANY INFORMATIONS</th>
                        </tr>
                      </tr>
                    </thead>

                    <tbody>
                    <tr>
                       <th>COMPANY NAME</th>
                        <td class="text-center">MK CORPORATION</td>
                    </tr>
                    <tr>
                        <th>COMPANY E-mail</th>
                        <td class="text-center">info@mkcorporationd.com</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td class="text-center">01611000112</td>
                    </tr>
                    <tr>
                        <th>COMPANY ADDRESS</th>
                        <td class="text-center">House # 20, Road# 11, Dit Project Merul Badda, Dhaka-1212</td>
                    </tr>
                    <tr>
                        <th class="pt-5">COMPANY LOGO</th>
                        <td class="text-center"><img src="http://uptokenuk.com/stock-inventory/public/upload/1748927692668459.jpg" alt="" width="150" height="150"></td>
                    </tr>

                    <!-- <?php
                       require_once("connectdb.php");
                       $sn = 1;
                       $sql = "CALL categoryShow()";
                       $result = mysqli_query($conn, $sql); 
                       while($row = mysqli_fetch_assoc($result)){

                      ?>
                      <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $row['categoryName'];?></td>
                        <td  style="width:150px;">
                            <a href="category_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            
                          </td>
                        
                      </tr> 
                      <?php
                       }
                      ?>                      -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    </p>
</div>
</div><!-- sl-pagebody -->
    <!-- footer -->
    <?php 
    require_once("inculde/footer.php");
    ?>




