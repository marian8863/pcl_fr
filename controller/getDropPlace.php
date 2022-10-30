<?php
include_once("../config1.php");
if(isset($_POST['city'])){
    $id = $_POST['city'];

    $sql = "SELECT * FROM rates  where rates_id  = $id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo '<option  value="'.$row["rates_id"].'" required>'.$row["amonut"].'</option>';
        }
    }else{
        echo '<option value="null"  disabled>-- No Place --</option>';
    }
}

?>