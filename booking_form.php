<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";

include_once("Head.php");
include_once("Menu.php");

$pi=$pp=$dp=$cid=null;
if(isset($_GET['p_id'])&&isset($_GET['p_place'])&&isset($_GET['d_place'])){
    $pi=$_GET['p_id'];
    $pp=$_GET['p_place'];
    $dp=$_GET['d_place'];

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
                    <li class="breadcrumb-item active" aria-current="page">Add property</li>
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
                <form method="post">

                <!-- Basic info-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                  <h2 class="h4 mb-4 text-white"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2 "></i>Addresses</h2>
                  <!-- <div class="mb-3">
                      <label class="form-label" for="ap-title">Title <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" id="ap-title" placeholder="Title for your property" value="Pine Apartments" required><span class="form-text">48 characters left</span>
                  </div> -->
                  <div class="row">
                      <div class="col-sm-6 mb-3">
                      <label class="form-label text-white" for="ap-category">Pickup City <span class="text-danger">*</span></label>
                      <select class="form-select" id="ap-category" name="rates_id" onchange="showPlace(this.value)" required>
                      <option value="null" selected disabled >---- Select the Pickup City ---- </option>
                          <?php
                          $sql="select pa.rates_id as rates_id ,pa.p_num as p_num from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and  r.rates_id=pa.rates_id and sp.p_id=$pi";
                          $result = mysqli_query($con,$sql);
                          if (mysqli_num_rows($result) > 0 ) {
                          while($row=mysqli_fetch_assoc($result)){
                              echo '<option  value="'.$row["rates_id"].'" required';
                              if($row["rates_id"]== $cid) echo ' selected';
                              echo '>'.$row["p_num"].'</option>';
                          }}   
                          ?>
                      </select>
                      </div>
                      <div class="col-sm-6 mb-3">
                      <label class="form-label text-white" for="ap-type "> Pickup Place <span class="text-danger">*</span></label>
                      <select class="form-select" id="place" name="p_id"  required>

                      </select>
                      </div>

                      <div class="col-sm-6 mb-3">
                      <label class="form-label text-white" for="ap-category">Drop City <span class="text-danger">*</span></label>
                      <select class="form-select" id="ap-category" name="dc_id" onchange="showPlace_drop(this.value)" required>
                      <option value="null" selected disabled >---- Select the Drop City ---- </option>
                          <?php
                          $sql="select pa.rates_id as rates_id ,pa.p_num as p_num from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and  r.rates_id=pa.rates_id and sp.p_id=$pi";
                          $result = mysqli_query($con,$sql);
                          if (mysqli_num_rows($result) > 0 ) {
                          while($row=mysqli_fetch_assoc($result)){
                              echo '<option  value="'.$row["c_id"].'" required';
                              if($row["c_id"]== $cid) echo ' selected';
                              echo '>'.$row["c_name"].'</option>';
                          }}   
                          ?>
                      </select>
                      </div>
                      <div class="col-sm-6 mb-3">
                      <label class="form-label text-white" for="ap-type "> Drop Place <span class="text-danger">*</span></label>
                      <select class="form-select" id="place_d" name="dp_id"  required>

                      </select>
                      </div> 
                      <div class=" col-sm-6 mb-3">
                          <label class="form-label text-white" for="ap-address">Pickup Address <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="pickup_address"  id="ap-address" value="" required>
                      </div>
                      <div class=" col-sm-6 mb-3">
                          <label class="form-label text-white" for="ap-address"> Drop Address <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="drop_address" id="ap-address" value="" required>
                      </div>
                  </div>
                </section>

                
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" >
                  <div class="alert alert-warning bg-faded-warning border-warning mb-4" role="alert">
                    <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                      <p class="fs-sm mb-1">Select Your vehicle Package to Checked<br>Your Want to baby Seat Select to the box Or Put zero (0)<p>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="card shadow-sm card-hover border-0 h-100 ">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                

                                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="checkbox" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div>
                                <div class="tns-carousel-inner"><img src="img/car-finder/catalog/mv/mv1.png" alt="Image"><img src="img/car-finder/catalog/mv/mv2.png" alt="Image"></div>
                            </div>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">Fully Aircondition</h4>
                                <h3 class="h6 mb-2 fs-base">Multivan Volkswagen T6</h3>
                                <p class="mb-2 fs-sm text-muted">On Board Wi-Fi, Bottle Water, Music System</p>
                                <div class="fw-bold" style="color:black"><input class="form-check-input" type="radio" name="select_package" value="pack1"  id="p1" onclick="EnableDisableTB()" required> Select Package
                                <h4 class="mb-1 fs-xs fw-normal text-grey">No. of baby seat</h4>
                                <input class="form-control" type="number" id="carpack1" name="carpackage1" disabled="disabled" max="5" min="0" required></div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm" style="color:gray">7<i class="fi-users ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm" style="color:gray">3<i class="fi-briefcase ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
                            </div>                                 
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="card shadow-sm card-hover border-0 h-100 ">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                

                                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="checkbox" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div>
                                <div class="tns-carousel-inner"><img src="img/car-finder/catalog/mv/mv1.png" alt="Image"><img src="img/car-finder/catalog/mv/mv2.png" alt="Image"></div>
                            </div>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">Fully Aircondition</h4>
                                <h3 class="h6 mb-2 fs-base">Mercedes Benz E class</h3>
                                <p class="mb-2 fs-sm text-muted">On Board Wi-Fi, Bottle Water, Music System</p>
                                <div class="fw-bold" style="color:black"><input class="form-check-input" type="radio" name="select_package" value="pack1"  id="p1" onclick="EnableDisableTB()" required> Select Package
                                <h4 class="mb-1 fs-xs fw-normal text-grey">No. of baby seat</h4>
                                <input class="form-control" type="number" id="carpack1" name="carpackage1" disabled="disabled" max="5" min="0" required></div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm" style="color:gray">7<i class="fi-users ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm" style="color:gray">3<i class="fi-briefcase ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
                            </div>                                 
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="card shadow-sm card-hover border-0 h-100 ">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                

                                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="checkbox" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div>
                                <div class="tns-carousel-inner"><img src="img/car-finder/catalog/mv/mv1.png" alt="Image"><img src="img/car-finder/catalog/mv/mv2.png" alt="Image"></div>
                            </div>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">Fully Aircondition</h4>
                                <h3 class="h6 mb-2 fs-base">Mercedes Benz S class</h3>
                                <p class="mb-2 fs-sm text-muted">On Board Wi-Fi, Bottle Water, Music System</p>
                                <div class="fw-bold" style="color:black"><input class="form-check-input" type="radio" name="select_package" value="pack1"  id="p1" onclick="EnableDisableTB()" required> Select Package
                                <h4 class="mb-1 fs-xs fw-normal text-grey">No. of baby seat</h4>
                                <input class="form-control" type="number" id="carpack1" name="carpackage1" disabled="disabled" max="5" min="0" required></div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm" style="color:gray">7<i class="fi-users ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm" style="color:gray">3<i class="fi-briefcase ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
                            </div>                                 
                        </div>

                        
                    </div>
                </section>

                <!-- Location-->
                <section class="card card-body card-light  border-0 shadow-sm p-4 mb-4" id="location">
                    <h2 class="h4 mb-4 text-white"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Personal Details</h2>
                
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-white" for="ap-address">Your Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="cus_name" id="ap-address" value="" placeholder="Eg:- Suman" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-white" for="ap-address">Mobile Number <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="ph_num" id="ap-address" value="" placeholder="Eg:- 00331456785" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-white" for="ap-address">Email Address <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="e_add" id="ap-address" value="" placeholder="Eg:- Suman@hotmail.com" required>
                        </div>
                    </div>

                </section>

                  <!-- Location-->
                <section class="card card-body card-light  border-0 shadow-sm p-4 mb-4" id="location">
                    <h2 class="h4 mb-4 text-white"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Other Details</h2>
                
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-white" for="ap-address"> Pickup Date <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" name="p_date" id="txtDate"  required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-white" for="ap-address"> Pickup Time <span class="text-danger">*</span></label>
                            <input class="form-control" type="time" name="p_time" id="ap-address"  required>
                        </div>
                        <div class="col-sm-12 mb-3">
                        <label class="form-label text-white" for="sc-description">Description </label>
                        <textarea class="form-control" id="sc-description" name="des" rows="5" placeholder="Describe your vehicle"></textarea><span class="form-text text-light opacity-50">Write something</span>
                        </div>
                    </div>

                </section>


                <button type="submit" value="Add" name="add" class="btn btn-primary btn-lg d-block mb-2">Book Now</button>
                </form> 
            </div>
         
        </div>
    </div>

    <?php

if(isset($_POST['add'])){

  if( $_POST['p_id'] == $_POST['dp_id']){
      echo '<script>alert("Fail")</script>';

  }else{
    if( $_POST['select_package'] == "pack1" || $_POST['select_package'] == "pack2" || $_POST['select_package'] == "pack3"){
      echo "<script>alert(".$_POST['carpackage3'].")</script>";

    }else{

    }
  }
  
    // if( $_POST['select_package'] == "pack1"){
           
    //           echo "<script>alert(".$_POST['carpackage1'].")</script>";

              
    // }elseif( $_POST['select_package'] == "pack2"){
    //   echo '<script>alert("Welcome to Geeks for pack2")</script>';
    // }else{
    //   echo '<script>alert("Welcome to Geeks for pack3")</script>';
    // }
  // if(!empty($_POST['c_id'])&& 
  // !empty($_POST['p_id'])&&
  //  !empty($_POST['dc_id'])&& 
  //  !empty($_POST['dp_id'])){

  //   $c_id=$_POST['c_id'];
  //   $p_id=$_POST['p_id'];
  //   $dc_id=$_POST['dc_id'];
  //   $dp_id=$_POST['dp_id'];
  //   $pickup_address=$_POST['pickup_address'];
  //   $drop_address=$_POST['drop_address'];
  //   $select_package=$_POST['select_package'];
  //   $cus_name=$_POST['cus_name'];
  //   $ph_num=$_POST['ph_num'];
  //   $e_add=$_POST['e_add'];
  //   $p_date=$_POST['p_date'];
  //   $p_time=$_POST['p_time'];
  //   $des=$_POST['des'];




}
?>
<!--BLOCK#2 end YOUR CODE HERE -->
<script>  


// function showPlace(val) {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("place").innerHTML = this.responseText;
//         }
//     };
//     xmlhttp.open("POST", "controller/getPickPlace", true);
//     xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xmlhttp.send("city=" + val);
// }


// function showPickPlaceId(val) {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("place_d").innerHTML = this.responseText;
//         }
//     };
//     xmlhttp.open("POST", "controller/getDropPlaceId", true);
//     xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xmlhttp.send("p_P_id=" + val);
// }
// function showPlace_drop(val) {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("place_d").innerHTML = this.responseText;
//         }
//     };
//     xmlhttp.open("POST", "controller/getDropPlace", true);
//     xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xmlhttp.send("city_d=" + val);
// }



</script> 


<script>   


function showPlace(val) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("place").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "controller/getDropPlace", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("city=" + val);
}
function showPlace_drop(val) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("place_d").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "controller/getPickPlaceId", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("city_d=" + val);
}
function showPickPlaceId(val) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("place_d").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "controller/getDropPlaceId", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("p_P_id=" + val);
}


</script> 


<script>   



</script> 


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->