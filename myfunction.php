<?php
function option_data($table, $idcolumn, $namecolumn){
 require("connectdb.php");

    $sql01 = "SELECT * FROM $table ORDER BY $namecolumn";
    $result01 = mysqli_query($conn, $sql01);
    while($rows01= mysqli_fetch_assoc($result01))
    {
        
    ?>
        <option value="<?php echo $rows01[$idcolumn];?>"><?php echo $rows01[$namecolumn];?></option>
    <?php
    }
 }
?>