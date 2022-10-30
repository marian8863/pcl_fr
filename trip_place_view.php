<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
include_once("config1.php");
$p_id=$pn=$pd1=$pd2=$pdt=$pt=$us=null;
  
if(isset($_GET['get_id'])){
  $p_id=$_GET['get_id'];
  $sql="SELECT place_name,place_desc1,place_desc2,p_img2,p_date,p_time,user from top_places where id=$p_id";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)==1) {       
      $row=mysqli_fetch_assoc($result);
      $pn=$row['place_name'];
      $pd1=$row['place_desc1'];
      $pd2=$row['place_desc2'];
      $pi2=$row['p_img2'];
      $pdt=$row['p_date'];
      $pt=$row['p_time'];
      $us=$row['user'];

 
  }else{
    echo '<script>';
    echo '
      window.location.href = "pcl-404";

    ';
    echo '</script>';  
  }
}else{
echo '<script>';
echo '
  window.location.href = "pcl-404";

';
echo '</script>';
}
$title = "Home | Trip Place View";
$url= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$webtype = $row['place_name'];
$desc= $row['place_desc1'];
$og_img= 'http://dev.pariscablimouine.com/img/car-finder/blog/tops/'.$row['p_img2'].'';

include_once("Head.php");
include_once("Menu.php");





?>


      <!-- Page content-->
      <div class="container pt-5 pb-lg-4 my-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pb-md-1 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light m-0">
            <li class="breadcrumb-item"><a href="">Home</a></li> 
            <li class="breadcrumb-item"><a href="best_places.php">Best Places to Visit in France</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $pn;?></li>
          </ol>
        </nav>
        <div class="fb-share-button" 
data-href="<?php echo $url;?>" 
data-layout="button_count">
</div>
        <!-- Page title-->
        <h1 class="h2 text-light pb-3"><?php echo $pn;?></h1><img class="rounded-3" src="img/car-finder/blog/tops/<?php echo $pi2;?>" alt="Image">
        <div class="row mt-4 pt-3">
          <!-- Post content-->
          <div class="col-lg-8">
            <!-- Post meta-->
            <div class="d-flex flex-wrap border-bottom border-light pb-3 mb-4">
                <!-- <a class="text-uppercase text-decoration-none border-end border-light pe-3 me-3 mb-2" href="#">Reviews</a> -->
              <div class="d-flex align-items-center text-light border-end border-light pe-3 me-3 mb-2"><i class="fi-calendar-alt opacity-70 me-2"></i><span><?php echo $pdt;?></span></div>
              <div class="d-flex align-items-center text-light border-end border-light pe-3 me-3 mb-2"><i class="fi-clock opacity-70 me-2"></i><span><?php echo $pt;?></span></div><a class="d-flex align-items-center text-light text-decoration-none mb-2" href="#comments" data-scroll><i class="fi-user opacity-70 me-2"></i><span>Admin</span></a>
            </div>
            <!-- <p class="fs-lg fw-bold text-light mb-4"></p>
            <p class="text-light opacity-70"></p> -->
            <!-- <p class="text-light opacity-70">Convallis massa nunc, tempus eget egestas sollicitudin mauris. Purus donec sed neque arcu, dictumst tortor nisi, odio. A sit lectus sem velit orci, rhoncus pharetra facilisis. Cras sodales a, dui pellentesque enim odio rutrum leo. Auctor viverra sit sit ut. Massa, elit venenatis, ultrices viverra at sagittis, velit. Cursus tempus phasellus consectetur suspendisse a blandit pellentesque diam neque. Massa est nibh congue elit amet, diam faucibus. Morbi non est semper ullamcorper quam iaculis at.</p> -->
            <!-- Video-->
            <!-- <div class="position-relative py-4 mb-2"><a class="btn btn-icon btn-light-primary text-primary rounded-circle position-absolute start-50 top-50 translate-middle zindex-5" href="https://www.youtube.com/watch?v=MHw6PI_6ygs" data-bs-toggle="lightbox" data-video="true" style="width: 4.5rem; height: 4.5rem;"><i class="fi-play-filled fs-sm"></i></a><img class="opacity-60 rounded-3" src="img/car-finder/blog/11.jpg" alt="Video cover"></div> -->
            <!-- <p class="text-light opacity-70">Velit dignissim pharetra ut augue. Nunc felis neque non sagittis. Sodales eros suspendisse scelerisque varius neque elit elementum quis. Ut euismod id auctor donec consectetur massa. Sed vitae accumsan lorem pharetra dictum eget vestibulum. Non blandit viverra laoreet amet, maecenas auctor leo justo, sit. Vitae vulputate gravida est feugiat. Adipiscing tristique mauris, eu sit tortor. Velit in scelerisque sit tincidunt habitant urna nec. Justo, non massa metus convallis cursus lorem volutpat eu duis. Ipsum dolor feugiat est tristique.</p> -->
            <blockquote class="blockquote text-light mb-4">
              <p><?php echo $pd1;?></p>
              <!-- <footer class="blockquote-footer text-light"> Annette Black</footer> -->
            </blockquote>
            <p class="text-light opacity-70"><?php echo $pd2;?></p>
            <!-- <p class="text-light opacity-70">Velit parturient tellus tellus, congue pulvinar tellus viverra. In cum massa mattis ac. Amet vitae massa ut mi etiam. Auctor aliquam tristique felis donec eu sit nisi. Accumsan mauris eget convallis mattis sed etiam scelerisque.</p> -->
            <!-- Tags + Sharing-->
            <div class="pt-4 pb-5 mb-md-3">
              <div class="d-md-flex align-items-center justify-content-between border-top border-light pt-4">
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="d-none d-sm-block text-light fw-bold text-nowrap mb-2 me-2 pe-1">Tags:</div>
                  <div class="d-flex flex-wrap"><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal me-2 mb-2" href="#">Paris</a><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal me-2 mb-2" href="#">France</a><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal mb-2" href="#">Eiffel Tower</a></div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="text-light fw-bold text-nowrap pe-1 mb-2">Share:</div>
                  <div class="d-flex">
                    <a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" data-href="http://dev.pariscablimouine.com/trip_place_view?get_id=2"  data-bs-toggle="tooltip" title="Share with Facebook">
                      <i class="fi-facebook"></i>
                    </a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="#" data-bs-toggle="tooltip" title="Share with Twitter"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="#" data-bs-toggle="tooltip" title="Share with LinkedIn"><i class="fi-linkedin"></i></a></div>
                  <!-- <div class="fi-facebook" 
data-href="http://dev.pariscablimouine.com/trip_place_view?get_id=2" 
data-layout="button_count">
</div> -->
                </div>
              </div>
            </div>
            <!-- Comments-->
            <!-- <div class="mb-4 mb-md-5" id="comments">
              <h3 class="text-light mb-4 pb-2">3 comments</h3>
              <div class="border-bottom border-light pb-4 mb-4">
                <p class="text-light opacity-70">Elementum ut quam tincidunt egestas vitae elit, hendrerit. Ullamcorper nulla amet lobortis elit, nibh condimentum enim. Aliquam felis nisl tellus sodales lectus dictum tristique proin vitae. Odio fermentum viverra tortor quis reprehenderit in voluptate velit.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/05.jpg" width="48" alt="Daniel Adams">
                    <div class="ps-2">
                      <h6 class="text-light fs-base mb-0">Daniel Adams</h6><span class="text-light opacity-50 fs-sm">3 days ago</span>
                    </div>
                  </div>
                  <button class="btn btn-link btn-light btn-sm" type="button"><i class="fi-reply fs-lg me-2"></i><span class="fw-normal">Reply</span></button>
                </div>
                <div class="border-start border-4 border-light ps-4 ms-4 mt-4">
                  <p class="text-light opacity-70">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/06.jpg" width="48" alt="Kristin Watsons">
                    <div class="ps-2">
                      <h6 class="text-light fs-base mb-0">Kristin Watsons<span class="badge bg-info rounded-pill fs-xs ms-2">Author</span></h6><span class="text-light opacity-50 fs-sm">2 days ago</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pb-4">
                <p class="text-light opacity-70">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/04.jpg" width="48" alt="Darrel Steward">
                    <div class="ps-2">
                      <h6 class="text-light fs-base mb-0">Darrel Steward</h6><span class="text-light opacity-50 fs-sm">1 week ago</span>
                    </div>
                  </div>
                  <button class="btn btn-link btn-light btn-sm" type="button"><i class="fi-reply fs-lg me-2"></i><span class="fw-normal">Reply</span></button>
                </div>
              </div>
            </div> -->
            <!-- Comment form-->
            <!-- <h3 class="text-light mb-4 pb-sm-2">Leave your comment</h3>
            <form class="needs-validation row gy-md-4 gy-3 pb-sm-2" novalidate>
              <div class="col-sm-6">
                <label class="form-label text-light" for="comment-name">Name</label>
                <input class="form-control form-control-light form-control-lg" type="text" id="comment-name" placeholder="Enter your name" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label text-light" for="comment-email">Email</label>
                <input class="form-control form-control-light form-control-lg" type="email" id="comment-email" placeholder="Enter your email" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="col-12">
                <label class="form-label text-light" for="comment-text">Comment</label>
                <textarea class="form-control form-control-light form-control-lg" id="comment-text" rows="4" placeholder="Type comment here" required></textarea>
                <div class="invalid-feedback">Please type your comment.</div>
              </div>
              <div class="col-12 py-2">
                <button class="btn btn-lg btn-primary" type="submit">Post comment</button>
              </div>
            </form> -->
          </div>
          <!-- Sidebar-->
          <aside class="col-lg-4">
            <div class="bg-dark" id="blog-sidebar">
              <!-- <div class="offcanvas-header bg-transparent border-bottom border-light">
                <h2 class="h5 text-light mb-0">Sidebar</h2>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas"></button>
              </div> -->
              <div class="offcanvas-body">
                <!-- Search-->
                <div class="position-relative mb-4">
                  <input class="form-control form-control-light" type="text" placeholder="Search..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y text-light opacity-70 me-3"></i>
                </div>
                <!-- Author widget-->
                <div class="card card-flush bg-transparent border-light mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-start pt-3 pt-lg-0"><img class="rounded-circle" src="img/avatars/N08.jpg" width="80" alt="Kristin Watson">
                      <div class="ps-3">
                        <h3 class="h5 text-light mb-2">Mr.Norton Alex</h3>
                        <p class="fs-sm text-light opacity-70">Contact Person</p>
                        <div class="d-flex"><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle me-2" href="https://www.facebook.com/norton.arumainayagam" target="_blank"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle me-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle me-2" href="#"><i class="fi-linkedin"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Post carousel widget-->
                <div class="card card-flush bg-transparent border-light mb-4">
                  <div class="card-body">
                    <h3 class="h5 text-light pt-3 pt-lg-0">Editor's Choice</h3>
                    <div class="tns-carousel-wrapper">
                      <div class="tns-carousel-inner d-block" data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20, &quot;autoHeight&quot;: true, &quot;controlsContainer&quot;: &quot;#externalControls&quot;}">
                        <?php                    
                        $sql="select * from top_places where id !=$p_id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                    
                        while($row = mysqli_fetch_assoc($result)) { 
                        
                        ?>
                        <?php
                         if(isset($_GET['get_id'])){
                        ?>
                        <article><a class="d-block position-relative mb-3" href="trip_place_view?get_id=<?= $row["id"]?>"><img class="d-block rounded-3" src="img/car-finder/blog/tops/<?= $row["p_img1"];?>" alt="Post image"></a><a class="fs-xs text-uppercase text-decoration-none" href="#">Paris, France</a>
                          <h3 class="fs-base text-light pt-1"><a class="nav-link" href="trip_place_view?get_id=<?= $row["id"]?>"><?= $row["place_name"];?></a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/N08.jpg" width="44" alt="Darrell Steward">
                            <div class="ps-2">
                              <h6 class="fs-sm text-light lh-base mb-1"><?= $row["user"];?></h6>
                              <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i><?= $row["p_date"];?></span>
                              <!-- <span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>No comments</span> -->
                                </div>
                            </div></a>
                        </article>
                        <?php
                         }else{
                          echo "hello";
                         }
                        ?>
                        <?php }} ?>
                      </div>
                    </div>
                    <div class="tns-carousel-controls tns-carousel-light pt-4 mt-lg-2" id="externalControls">
                      <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
                      <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Subscription form-->
                <div class="card card-flush bg-transparent border-light mb-4">
                  <div class="card-body">
                    <h3 class="h5 text-light pt-3 pt-lg-0 pb-1 mb-2">Subscribe to our newsletter</h3>
                    <p class="fs-sm text-light opacity-70">We will send you hottest news as soon as they are posted in the picked category.</p>
                    <form class="form-group form-group-light w-100">
                      <div class="input-group input-group-sm"><span class="input-group-text"> <i class="fi-mail"></i></span>
                        <input class="form-control" type="text" placeholder="Your email">
                      </div>
                      <button class="btn btn-primary btn-sm" type="button">Subscribe</button>
                    </form>
                    <p class="fs-sm pt-3 mb-0"><span class="text-light opacity-70">* By signing up you agree to our </span><a href="#">Privacy Policy</a></p>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>



<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->