<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Rates";

include_once("Head.php");
include_once("Menu.php");



?>
<!--END DON'T CHANGE THE ORDER-->

        <!-- Page content-->
        <section class="container pt-5 mt-5">
            <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://pariscablimousine.fr/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Booking Rates</li>
              </ol>
            </nav>
            <!-- Title-->
            <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
              <h1 class="h2 mb-sm-0">Booking Rates</h1>
            </div>

            <!-- Catalog grid-->
            <div class="row g-4 py-4">
                <!-- Item-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->
                            <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=1  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"><?= $row["p_place"];?> << ----- >> <?= $row["d_place"];?></a></h3>
                            <?php }} ?>
                            <?php                    
                            $sql="select  pa.p_num,r.amount from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=1";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> <?= $row["p_num"];?> Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i><?= $row["amount"];?>€</div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                        <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=1  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->
                            <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=2  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"><?= $row["p_place"];?> << ----- >> <?= $row["d_place"];?></a></h3>
                            <?php }} ?>
                            <?php                    
                            $sql="select  pa.p_num,r.amount from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=2";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> <?= $row["p_num"];?> Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i><?= $row["amount"];?>€</div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                        <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=2  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href="">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->
                            <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=3  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"><?= $row["p_place"];?> << ----- >> <?= $row["d_place"];?></a></h3>
                            <?php }} ?>
                            <?php                    
                            $sql="select  pa.p_num,r.amount from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=3";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> <?= $row["p_num"];?> Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i><?= $row["amount"];?>€</div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                        <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=3  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href="booking_form.php?p_id=3&p_place=<?= $row["p_place"];?>&d_place=<?= $row["d_place"];?>"><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->
                            <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=4  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"><?= $row["p_place"];?> << ----- >> <?= $row["d_place"];?></a></h3>
                            <?php }} ?>
                            <?php                    
                            $sql="select  pa.p_num,r.amount from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=4";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> <?= $row["p_num"];?> Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i><?= $row["amount"];?>€</div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                        <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=4  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->
                            <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=5  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"><?= $row["p_place"];?> << ----- >> <?= $row["d_place"];?></a></h3>
                            <?php }} ?>
                            <?php                    
                            $sql="select  pa.p_num,r.amount from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=5";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> <?= $row["p_num"];?> Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i><?= $row["amount"];?>€</div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                        <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=5  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->
                            <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=6  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"><?= $row["p_place"];?> << ----- >> <?= $row["d_place"];?></a></h3>
                            <?php }} ?>
                            <?php                    
                            $sql="select  pa.p_num,r.amount from select_places sp , rates r,passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=6";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                            ?>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> <?= $row["p_num"];?> Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i><?= $row["amount"];?>€</div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                        <?php                    
                            $sql=" select sp.p_place,sp.d_place from select_places sp , rates r, passenger pa where sp.p_id=r.p_id and r.rates_id=pa.rates_id and sp.p_id=6  group by p_place,d_place";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">Disposal 3 Hours pack within Paris</a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> 1 - 4 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>220€</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3" ><i class="fi-users"></i> 4 - 6 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>270€</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pb-1"  ><span class="fs-sm me-3" style="color:red"><i class="fi-alarm"></i> Extra Hours</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>65€</div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <!-- <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4> -->

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">Full day pack 8hours</a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> Maximum 6 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>640€</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pb-1"  ><span class="fs-sm me-3" style="color:red"><i class="fi-alarm"></i> Extra Hours</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>65€</div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">E class</h4>

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">PARIS AIRPORT << --- >>PARIS </a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> 3 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>120€</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">E class</h4>

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">PARIS AIRPORT << --- >> DISNEYLAND </a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> 3 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>130€</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">E class</h4>

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">PARIS AIRPORT << --- >> ORLY </a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> 3 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>135€</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">E class</h4>

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">BEAUVAIS AIRPORT << --- >> PARIS </a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3"><i class="fi-users"></i> 3 Passenger</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>200€</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <!-- <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                            </div>
                            <div class="tns-carousel-inner"><img src="img/real-estate/catalog/paris.png" alt="Image"></div>
                        </div> -->
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">E class</h4>

                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link">DISPOSAL LIMOUSINE </a></h3>
  
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3">4H WITHIN PARIS 120km</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>220€</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-muted me-3">8H WITHIN PARIS 120km</span>
                                <div class="form-check form-check-dark">
                                    <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>550€</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><a class="nav-link stretched-link" href=""><span class="d-inline-block mx-1 px-2 fs-sm">TAKE ME THERE <i class="fi-chevron-right ms-1 mt-n1 fs-lg text-muted"></i></span></a></div>
                    </div>
                </div>

   
            </div>
            <!-- Pagination-->
            <nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
              <ul class="pagination mb-1">
                <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-none d-sm-block">...</li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
              </ul>
            </nav>
        </section>



<!--BLOCK#2 end YOUR CODE HERE -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->