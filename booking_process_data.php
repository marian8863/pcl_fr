<?php
    include_once("config1.php");
    if(!empty($_POST['place_d'])&& 
    !empty($_POST['d_place'])&&
     !empty($_POST['nopassenger'])&& 
     !empty($_POST['amount'])&& 
     !empty($_POST['adr'])&& 
     !empty($_POST['cus_name'])&& 
     !empty($_POST['ph_num'])&&
     !empty($_POST['e_add'])&& 
     !empty($_POST['p_date'])&& 
     !empty($_POST['p_time'])&& 
     !empty($_POST['des'])){
        $place_d=$_POST['place_d'];
        $d_place=$_POST['d_place'];
        $nopassenger=$_POST['nopassenger'];
        $amount=$_POST['amount'];
        $adr=$_POST['adr'];
        $cus_name=$_POST['cus_name'];
        $ph_num=$_POST['ph_num'];
        $e_add=$_POST['e_add'];
        $p_date=$_POST['p_date'];
        $p_time=$_POST['p_time'];
        $des=$_POST['des'];
      
        $sql="INSERT INTO `booking_details` (`place_d`,`d_place`,`nopassenger`,`amount`,`adr`,`cus_name`,`ph_num`,`e_add`,`p_date`,`p_time`,`des`) 
        values('$place_d','$d_place','$nopassenger','$amount','$adr','$cus_name','$ph_num','$e_add','$p_date','$p_time','$des')";
        if(mysqli_query($con,$sql)){
            // $message ="<h4 class='text-success' >New record created successfully</h4>";
            // echo "$message";
            // echo '<script>';
            // echo '
            // Swal.fire({
            //    position: "top-end",       
            //    icon: "success",
            //    title: "Booking Success ",
            //    showConfirmButton: false,          
            //    timer: 1500
            //  }).then(function() {
            //    // Redirect the user
            //    window.location.href = "rates";          
            //    });
            // ';
            // echo '</script>';  
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
    
?>