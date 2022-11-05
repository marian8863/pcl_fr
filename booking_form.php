<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Booking Details";

include_once("Head.php");
include_once("Menu.php");

$gAmount=$pp=$dp=$gpa=$p_place=null;
if(isset($_GET['get_amount']) &&isset($_GET['get_p_place'])&&isset($_GET['get_d_place'])&&isset($_GET['get_pa'])){
    $gAmount=$_GET['get_amount'];
    $pp=$_GET['get_p_place'];
    $dp=$_GET['get_d_place'];
    $gpa=$_GET['get_pa'];


}
?>
<!--END DON'T CHANGE THE ORDER-->

    <div class="modal fade" id="preview-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen" role="document">
          <div class="modal-content">
            <div class="modal-header d-block d-sm-flex">
              <h3 class="h5 text-muted fw-normal modal-title d-none d-sm-block">Property preview</h3>
              <div class="d-flex align-items-center"><a class="btn btn-primary btn-sm me-4" href="real-estate-property-promotion.html">Save and continue</a><span class="fs-xs text-muted ms-auto me-2">[ESC]</span>
                <button class="btn-close ms-0" type="button" data-bs-dismiss="modal"></button>
              </div>
            </div>
            <div class="modal-body p-0">
              <div class="container mt-2 mt-sm-0 py-4 py-sm-5">
                <h1 class="h2 mb-2">Pine Apartments</h1>
                <p class="mb-2 pb-1 fs-lg">28 Jackson Ave Long Island City, NY 67234</p>
                <ul class="d-flex mb-4 list-unstyled">
                  <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                  <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                  <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                  <li><b>56 </b>sq.m</li>
                </ul>
                <div class="overflow-auto pb-3 px-2 mx-n2 mb-4" data-simplebar>
                  <div class="row g-2 g-md-3" style="min-width: 30rem;">
                    <div class="col-8"><img class="rounded rounded-md-3" src="img/real-estate/single/01.jpg" alt="Gallery thumbnail"></div>
                    <div class="col-4"><img class="rounded rounded-md-3 mb-2 mb-md-3" src="img/real-estate/single/02.jpg" alt="Gallery thumbnail"><img class="rounded rounded-md-3" src="img/real-estate/single/03.jpg" alt="Gallery thumbnail"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 mb-md-0 mb-4"><span class="badge bg-success me-2 mb-3">Verified</span><span class="badge bg-info me-2 mb-3">New</span>
                    <h2 class="h3 mb-4 pb-4 border-bottom">$2,000<span class="d-inline-block ms-1 fs-base fw-normal text-body">/month</span></h2>
                    <!-- Overview-->
                    <div class="mb-4 pb-md-3">
                      <h3 class="h4">Overview</h3>
                      <p class="mb-1">Lorem tincidunt lectus vitae id vulputate diam quam. Imperdiet non scelerisque turpis sed etiam ultrices. Blandit mollis dignissim egestas consectetur porttitor. Vulputate dolor pretium, dignissim eu augue sit ut convallis. Lectus est, magna urna feugiat sed ultricies sed in lacinia. Fusce potenti sit id pharetra vel ornare. Vestibulum sed tellus ullamcorper arcu.</p>
                      <div class="collapse" id="seeMoreOverview">
                        <p class="mb-1">Asperiores eos molestias, aspernatur assumenda vel corporis ex, magni excepturi totam exercitationem quia inventore quod amet labore impedit quae distinctio? Officiis blanditiis consequatur alias, atque, sed est incidunt accusamus repudiandae tempora repellendus obcaecati delectus ducimus inventore tempore harum numquam autem eligendi culpa.</p>
                      </div><a class="collapse-label collapsed" href="#seeMoreOverview" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreOverview"></a>
                    </div>
                    <!-- Property Details-->
                    <div class="mb-4 pb-md-3">
                      <h3 class="h4">Property Details</h3>
                      <ul class="list-unstyled mb-0">
                        <li><b>Type: </b>apartment</li>
                        <li><b>Apartment area: </b>56 sq.m</li>
                        <li><b>Built: </b>2015</li>
                        <li><b>Bedrooms: </b>4</li>
                        <li><b>Bathrooms: </b>2</li>
                        <li><b>Parking places: </b>2</li>
                        <li><b>Pets allowed: </b>No</li>
                      </ul>
                    </div>
                    <!-- Amenities-->
                    <div class="mb-sm-3">
                      <h3 class="h4">Amenities</h3>
                      <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                        <li class="col"><i class="fi-wifi mt-n1 me-2 fs-lg align-middle"></i>WiFi</li>
                        <li class="col"><i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i>Heating</li>
                        <li class="col"><i class="fi-dish mt-n1 me-2 fs-lg align-middle"></i>Dishwasher</li>
                        <li class="col"><i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>Parking place</li>
                        <li class="col"><i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>Air conditioning</li>
                        <li class="col"><i class="fi-iron mt-n1 me-2 fs-lg align-middle"></i>Iron</li>
                        <li class="col"><i class="fi-tv mt-n1 me-2 fs-lg align-middle"></i>TV</li>
                        <li class="col"><i class="fi-laundry mt-n1 me-2 fs-lg align-middle"></i>Laundry</li>
                        <li class="col"><i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>Security cameras</li>
                      </ul>
                      <div class="collapse" id="seeMoreAmenities">
                        <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                          <li class="col"><i class="fi-no-smoke mt-n1 me-2 fs-lg align-middle"></i>No smocking</li>
                          <li class="col"><i class="fi-pet mt-n1 me-2 fs-lg align-middle"></i>Cats</li>
                          <li class="col"><i class="fi-swimming-pool mt-n1 me-2 fs-lg align-middle"></i>Swimming pool</li>
                          <li class="col"><i class="fi-double-bed mt-n1 me-2 fs-lg align-middle"></i>Double bed</li>
                          <li class="col"><i class="fi-bed mt-n1 me-2 fs-lg align-middle"></i>Single bed</li>
                        </ul>
                      </div><a class="collapse-label collapsed" href="#seeMoreAmenities" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreAmenities"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- Page container-->
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row">
          <!-- Page content-->
            <div class="col-lg-8">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking Details</li>
                </ol>
                </nav>
                <!-- Title-->
                <div class="mb-4">
                <h1 class="h2 mb-0 text-white">Booking Form </h1>
                <div class="d-lg-none pt-3 mb-2">65% content filled</div>
                <div class="progress d-lg-none mb-4" style="height: .25rem;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <form class="needs-validation" novalidate action="javascript:void(0)" method="post" id="booking-form">

                <!-- Basic info-->
                <section class="card card-dark card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                  <h2 class="h4 mb-4 text-dark"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2 "></i>Select Details</h2>
                  <!-- <div class="mb-3">
                      <label class="form-label" for="ap-title">Title <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" id="ap-title" placeholder="Title for your property" value="Pine Apartments" required><span class="form-text">48 characters left</span>
                  </div> -->
                  <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label text-dark" for="ap-type "> Pick Place <span class="text-danger">*</span></label>
                        <select class="form-select" id="place_d" name="place_d"  disabled>
                          <option value="null" selected disabled >---- Select the Pick Place ---- </option>
                          <?php
                          $sql="SELECT * FROM `select_places`  group by p_place";
                          $result = mysqli_query($con,$sql);
                          if (mysqli_num_rows($result) > 0 ) {
                          while($row=mysqli_fetch_assoc($result)){
                              echo '<option  value="'.$row["p_place"].'" required';
                              if($row["p_place"]== $pp) echo ' selected';
                              echo '>'.$row["p_place"].'</option>';
                          }}   
                          ?>
                        </select>
                    </div> 
                    <div class="col-sm-6 mb-3">
                        <label class="form-label text-dark" for="ap-type "> Drop Place <span class="text-danger">*</span></label>
                        <select class="form-select" id="d_place" name="d_place"  disabled>
                          <option value="null" selected disabled >---- Select the Pick Place ---- </option>
                          <?php
                          $sql="SELECT * FROM `select_places`  group by d_place";
                          $result = mysqli_query($con,$sql);
                          if (mysqli_num_rows($result) > 0 ) {
                          while($row=mysqli_fetch_assoc($result)){
                              echo '<option  value="'.$row["d_place"].'" required';
                              if($row["d_place"]== $dp) echo ' selected';
                              echo '>'.$row["d_place"].'</option>';
                          }}   
                          ?>
                        </select>
                    </div> 

                    <div class=" col-sm-6 mb-3">
                          <label class="form-label text-dark" for="ap-address"> No Of Passenger <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="nopassenger" id="nopassenger" value="<?= $gpa; ?>" readonly>
                          <!-- <select class="form-select" id="nopassenger" name="nopassenger"  >
                          <option value="null" selected disabled >---- Select the Passenger ---- </option>
                          <
                          $sql="select * from `passenger`";
                          $result = mysqli_query($con,$sql);
                          if (mysqli_num_rows($result) > 0 ) {
                          while($row=mysqli_fetch_assoc($result)){
                              echo '<option  value="'.$row["p_num"].'" required';
                              if($row["p_num"]== $gpa) echo ' selected';
                              echo '>'.$row["p_num"].'</option>';
                          }}   
                          ?>
                          </select> -->
                    </div>

                    <div class=" col-sm-6 mb-3">
                          <label class="form-label text-dark" for="ap-address">Amount<span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="amount"  id="amount" value="<?= $gAmount; ?>" readonly>
                          <!-- <select class="form-select" id="nopassenger" name="nopassenger"  >
                            <option value="1_2P">1-2P</option>
                            <option value="3P">3P</option>
                            <option value="4P">4P</option>
                          </select> -->
                    </div>

                    <div class="col-sm-12 mb-3">
                      <label class="form-label text-dark" for="sc-description">Pick Address <span class="text-danger">*</span></label>
                      <textarea class="form-control" id="adr" name="adr" rows="5" placeholder="Type your address" required></textarea><span class="form-text text-light opacity-50">Write your address....</span>
                      <div class="invalid-feedback">Please, enter your Pick Address</div>
                    </div>
                  </div>
                </section>

 

                <!-- Location-->
                <section class="card card-body card-dark  border-0 shadow-sm p-4 mb-4" id="location">
                    <h2 class="h4 mb-4 text-dark"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Personal Details</h2>
                
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-dark" for="ap-address">Your Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="cus_name" id="cus_name" value="" placeholder="Eg:- Suman" required>
                            <div class="invalid-feedback">Please, enter your Name</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-dark" for="ap-address">Mobile Number <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="ph_num" id="ph_num" value="" placeholder="Eg:- 00331456785" required>
                            <div class="invalid-feedback">Please, enter your Mobile Number</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-dark" for="ap-address">Email Address <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="e_add" id="e_add" value="" placeholder="Eg:- Suman@hotmail.com" required>
                            <div class="invalid-feedback">Please, enter your Email Address</div>
                        </div>
                    </div>

                </section>

                  <!-- Location-->
                <section class="card card-body card-dark  border-0 shadow-sm p-4 mb-4" id="location">
                    <h2 class="h4 mb-4 text-dark"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Other Details</h2>
                
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-dark" for="ap-address"> Pickup Date <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" name="p_date" id="p_date"  required>
                            <div class="invalid-feedback">Please, enter your Pickup Date</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-dark" for="ap-address"> Pickup Time <span class="text-danger">*</span></label>
                            <input class="form-control" type="time" name="p_time" id="p_time"  required>
                            <div class="invalid-feedback">Please, enter your Pickup Time</div>
                        </div>
                        <div class="col-sm-12 mb-3">
                        <label class="form-label text-dark" for="sc-description">Description </label>
                        <textarea class="form-control" id="des" name="des" rows="5" placeholder="Describe your vehicle" required></textarea><span class="form-text text-light opacity-50">Write something</span>
                        <div class="invalid-feedback">Please, enter your Description</div>
                        </div>
                    </div>

                </section>


                <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary btn-lg d-block mb-2">Book Now</button>
                </form> 
                <p id="show_message" style="display: none" class="text-dark">Booking Success <i class="fi-mail"></i> </p>

            </div>
         
        </div>
    </div>



    <?php

// if(isset($_POST['add'])){

   
// }

?>


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->