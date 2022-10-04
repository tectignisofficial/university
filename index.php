<?php   
include('configure.php');

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="Tectignis University" content="Tectignis University,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">
  
  <meta name="Tectignis University" content="Tectignis University">

  <title>Tectignis University</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.css">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
  <link rel="stylesheet" href="assets/vendors/bicon/css/bicon.min.css">
  <link rel="stylesheet" href="assets/vendors/themify/themify-icons.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css">
  <!-- WooCOmmerce CSS -->
  <link rel="stylesheet" href="assets/vendors/woocommerce/woocommerce-layouts.css">
  <link rel="stylesheet" href="assets/vendors/woocommerce/woocommerce-small-screen.css">
  <link rel="stylesheet" href="assets/vendors/woocommerce/woocommerce.css">
   <!-- Owl Carousel  CSS -->
  <link rel="stylesheet" href="assets/vendors/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl/assets/owl.theme.default.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
      .active1{
          color:#FF1949 !important;
      }
      </style>

</head>

<body id="top-header">

  

<?php include("header.php")?>


    


 <!--search overlay start-->
 <div class="search-wrap">
    <div class="overlay">
        <form action="" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <h3>Search Your keyword</h3>
                        <input type="text" class="form-control" placeholder="Search..."/>
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <img class="search-close" src="assets/images/close.png" srcset="assets/images/close@2x.png 2x" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->
<section class="banner banner-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
                <div class="banner-content center-heading">
                    <span class="subheading">Expert instruction</span>
                    <h1>Build Skills With Experts Any Time, Anywhere </h1>
                    <p>We invest in personnel, technological innovations and infrastructure and have established regional and international offices.</p>
                    <a href="courses.php" class="btn btn-main"><i class="fa fa-list-ul mr-2"></i>our Courses </a>  
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


<section class="category-section2">
    <div class="container">
    <?php

$sql="select * from courses";
$result=mysqli_query($conn,$sql);
?>
        <div class="row no-gutters" >
            <div class="course-categories">
            <?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
                <div class="category-item category-bg-1">
                  <a href="course.php?id=<?php echo $row['sr_no']?>">
                    <div class="category-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h4> <?php echo $row['course_name']?></h4>
                    
                  </a>
                </div>
               
           
           <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="section-padding popular-course pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <span class="subheading">Top Trending Courses</span>
                    <h3>Our Popular Online Courses</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="course-btn text-lg-right"><a href="courses.php" class="btn btn-main"><i class="fa fa-store mr-2"></i>All Courses</a></div>
            </div>
        </div>

        <div class="row">
        <?php
            $sql=mysqli_query($conn,"Select * from courses limit 3");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <img src="admin/dist/img/background/<?php echo $arr['upload_icon'];?>" alt="" class="img-fluid">
                        <span class="course-label"></span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price "><?php echo $arr['price'];?></div>  
                         
                        
                        <h4><a href="course.php?id=<?php echo $arr['sr_no']?>"><?php echo $arr['course_name'];?></a></h4>    
                        <div class="rating">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <span>(5.00)</span>
                        </div>
                        <p><?php echo $arr['description'];?></p>

                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">21 <i class="bi bi-group"></i></span>
                                <span class="course-duration"><?php echo $arr['duration'];?><i class="bi bi-badge3"></i></span>
                            </div> 
                           
                            <div class="buy-btn"><a href="course.php?id=<?php echo $arr['sr_no']?>" class="btn btn-main-2 btn-small">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
</section>
<section class="about-section section-padding about-2">
    <div class="container">
        <div class="row align-items-center">
             <div class="col-lg-6 col-md-12">
               <div class="about-img2">
                   <img src="assets/images/learningskills.png" alt="" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-heading">
                    <span class="subheading">Top Categories</span>
                    <h3>What are the top skills you should learn for the career?</h3>
                </div> When considering what skills you should learn for the future, it’s important to think about what will be relevant to your career and what is most desired by companies.
                Listed are some of the most in-demand skills that you should learn for the future, in order to keep your career secure.</p>

                <a href="courses.php" class="btn btn-main"><i class="fa fa-check mr-2"></i>Learn More</a>
                
            </div>
        </div>
    </div>
</section> 
<section class="feature-2">
    <div class="container"  >
        <div   class="row no-gutters" style="justify-content:center">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item feature-style-2">
                    <div class="feature-icon">
                        <i class="bi bi-badge2"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Expert Teacher</h4>
                        <p>Behind the word mountains, far from the countries</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item feature-style-2">
                    <div class="feature-icon">
                        <i class="bi bi-article"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Quality Education</h4>
                        <p>Behind the word mountains, far from the countries </p>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
</section>

    <!--course section start-->
    <section class="section-padding course-grid" >
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">Top Trending Courses</span>
                        <h3>Over 200+ New Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <ul class="course-filter">
                    <li class="active"><a href="courses.php" data-filter="*"> All Courses</a></li>
                    
                </ul>
            </div>

            <div class="row course-gallery ">

            <?php
            $sql=mysqli_query($conn,"Select * from courses");
               while($arr=mysqli_fetch_array($sql)){
             ?>
                <div class="course-item cat5 col-lg-4 col-md-6">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="admin/dist/img/background/<?php echo $arr['upload_icon'];?>" style="height: 250px; width: 500px;"alt="" class="img-fluid">
                            <span class="course-label">Beginner</span>
                        </div>
                        
                        <div class="course-content">
                            <div class="course-price "><?php echo $arr['price'];?></span></div>   
                            
                            <h4><a href="course.php?id=<?php echo $arr['sr_no']?>"><?php echo $arr['course_name'];?></a></h4>    
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <span>(5.00)</span>
                            </div>
                            <p><?php echo $arr['description'];?></p>

                            <div class="course-footer d-lg-flex align-items-center justify-content-between">
                                <div class="course-meta">
                                    <span class="course-student">21 <i class="bi bi-group"></i></span>
                                    <span class="course-duration"><i class="bi bi-badge3"></i> <?php echo $arr['lessons'];?></span>
                                </div> 
                            
                                <div class="buy-btn"><a href="course.php?id=<?php echo $arr['sr_no']?>" class="btn btn-main-2 btn-small">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>
      



            </div>
        </div>


        


        <!--course-->
    </section>
    <!--course section end-->
<section class="counter-wrap section-padding counter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <i class="ti-desktop"></i>
                    <div class="count">
                        <span class="counter h2">90</span>
                    </div>
                    <p>Expert Instructors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <i class="ti-agenda"></i>
                    <div class="count">
                        <span class="counter h2">1450</span>
                    </div>
                    <p>Total Courses</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">         
                <div class="counter-item">
                    <i class="ti-heart"></i>
                    <div class="count">
                        <span class="counter h2">5697</span>
                    </div>
                    <p>Happy Students</p>
                </div>
            </div>
        
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <i class="ti-microphone-alt"></i>
                    <div class="count">
                        <span class="counter h2">24</span>
                    </div>
                    <p>Creative Events</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--course section start-->
    <section class="section-padding video-section2 clearfix" >
        <div class="video-block-container"></div>       
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <span class="subheading">Working Process</span>
                        <h3>Watch video to know more about us</h3>
                    </div>
                </div>
                <div class="col-lg-6">
        
                    <video id="video" width="350" height="400" controls controlsList="nodownload">
                        <source type="video/mp4" preload="auto" src="video.mp4">
                       
                    </video>
                </div>
               
            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end--> 
<section class="testimonial section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading center-heading text-center">
                    <span class="subheading">Testimonials</span>
                    <h3>Learn New Skills to Go Ahead for Your Career</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
       
            <div class="col-lg-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                <?php
            $sql=mysqli_query($conn,"Select * from testimonial");
               while($arr=mysqli_fetch_array($sql)){
             ?>
                    <div class="review-item">
                        <div class="client-info">
                            <i class="bi bi-quote"></i>
                            <p><?php echo $arr['description'];?></p>
                             <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                        <div class="client-desc">
                            <div class="client-img">
                                <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-fluid">
                            </div>
                            <div class="client-text">
                                <h4><?php echo $arr['name'];?></h4>
                                <span class="designation"><?php echo $arr['about'];?></span>
                            </div>
                        </div>
                      
                    </div>
                    <?php } ?>
                    
                  </div>
           
            </div>
           
        </div>
    </div>
</section>
<section class="team section-padding bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <span class="subheading">Best Expert Trainer</span>
                    <h3>Our Professional trainer</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="course-btn text-lg-right"><a href="contact.php" class="btn btn-main"><i class="fa fa-user mr-2"></i>Join With us</a></div>
            </div>
        </div>
        

        <div class="row">
        <?php
            $sql=mysqli_query($conn,"Select * from instructor");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <img src="admin/dist/img/credit/<?php echo $arr['image'];?>"style="height: 250px; width: 500px; " alt="" class="img-fluid">
                    <div class="team-info">
                        <h4><?php echo $arr['instructor'];?></h4>
                        <p><?php echo $arr['about'];?></p>

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/tectignisofficial/"><i class="fab fa-facebook-f"></i></a></li>
                           
                            <li class="list-inline-item"><a href="https://www.instagram.com/tectignisofficial/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
       
    </div>
</section>
<!-- <section class="blog section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading center-heading">
                    <span class="subheading">Blog News</span>
                    <h3>Latest Blog News</h3>
                    <p>Our Blog News From Tectignis University And Around The World Of Web Design And Online Marketing.</p>
                </div>
            </div>
        </div>

       
        <div class="row">               
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <img src="assets/images/blog/1.png" alt="" class="img-fluid">
                    <div class="blog-content">
                        <div class="entry-meta">
                            <span><i class="fa fa-calendar-alt"></i>March 19, 2022</span>
                            <span><i class="fa fa-comments"></i>19 comment</span>
                        </div>
    
                        <h2><a href="#">Best Places To Work Remotely</a></h2>
                        <p>The work-from-home trend isn’t going away anytime soon. Although we can say the worst of COVID-19 is behind us (thankfully), projections suggest that employees will continue to work remotely or semi-remotely into 2022 and beyond.</p>
                        <a href="#" class="btn btn-main btn-small"><i class="fa fa-plus-circle mr-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <img src="assets/images/blog/2.png" alt="" class="img-fluid">
                    <div class="blog-content">
                        <div class="entry-meta">
                            <span><i class="fa fa-calendar-alt"></i>March 6, 2022</span>
                            <span><i class="fa fa-comments"></i>43 comment</span>
                        </div>
    
                        <h2><a href="#">Should Your Brand Focus on Social Media Communities in 2022?</a></h2>
                        <p>More and more companies across multiple industries are investing in building their social media community and growing it into an engaged audience.
                             When you have people engaging with your brand on social media.
                            </p>
                        <a href="#" class="btn btn-main btn-small"><i class="fa fa-plus-circle mr-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <img src="assets/images/blog/3.png" alt="" class="img-fluid">
                    <div class="blog-content">
                        <div class="entry-meta">
                            <span><i class="fa fa-calendar-alt"></i>April 1, 2022</span>
                            <span><i class="fa fa-comments"></i>29 comment</span>
                        </div>
    
                        <h2><a href="#">Website Design Statistics You Should Know in 2022 ?</a></h2>
                        <p>Your website is the backbone of all your digital marketing efforts. Your search engine optimization (SEO), social media,
                             pay-per-click (PPC) advertising and email marketing campaigns point back to your site.</p>
                        <a href="#" class="btn btn-main btn-small"><i class="fa fa-plus-circle mr-2"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php include("newsletter.php")?>

<?php include("footer.php")?>


<div class="fixed-btm-top">
	<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
</div>



    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 4.5 -->
    <script src="assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script type="text/javascript">
            $(function () {
                $('[id*=video]').mouseenter(function () {
                    $(this).get(0).play();
                });
                $('[id*=video]').mouseout(function () {
                    $(this).get(0).pause();
                });
            });
        </script>
    <script src="assets/vendors/counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendors/jquery.isotope.js"></script>
    <script src="assets/vendors/imagesloaded.js"></script>
    <!--  Owlk Carousel-->
    <script src="assets/vendors/owl/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
var videos = document.querySelectorAll('video');
// an array to store the top and bottom of each of our elements
var videoPos = [];
// a counter to check our elements position when videos are loaded
var loaded = 0;

// Here we get the position of every element and store it in an array
function checkPos() {
  // loop through all our videos
  for (var i = 0; i < videos.length; i++) {

    var element = videos[i];
    // get its bounding rect
    var rect = element.getBoundingClientRect();
    // we may already have scrolled in the page 
    // so add the current pageYOffset position too
    var top = rect.top + window.pageYOffset;
    var bottom = rect.bottom + window.pageYOffset;
    // it's not the first call, don't create useless objects
    if (videoPos[i]) {
      videoPos[i].el = element;
      videoPos[i].top = top;
      videoPos[i].bottom = bottom;
    } else {
      // first time, add an event listener to our element
      element.addEventListener('loadeddata', function() {
          if (++loaded === videos.length - 1) {
            // all our video have ben loaded, recheck the positions
            // using rAF here just to make sure elements are rendered on the page
            requestAnimationFrame(checkPos)
          }
        })
        // push the object in our array
      videoPos.push({
        el: element,
        top: top,
        bottom: bottom
      });
    }
  }
};
// an initial check
checkPos();


var scrollHandler = function() {
  // our current scroll position

  // the top of our page
  var min = window.pageYOffset;
  // the bottom of our page
  var max = min + window.innerHeight;

  videoPos.forEach(function(vidObj) {
    // the top of our video is visible
    if (vidObj.top >= min && vidObj.top < max) {
      // play the video
      vidObj.el.play();
    }

    // the bottom of the video is above the top of our page
    // or the top of the video is below the bottom of our page
    // ( === not visible anyhow )  
    if (vidObj.bottom <= min || vidObj.top >= max) {
      // stop the video
      vidObj.el.pause();
    }

  });
};
// add the scrollHandler
window.addEventListener('scroll', scrollHandler, true);
window.addEventListener('resize', checkPos);
// don't forget to update the positions again if we do resize the page

    </script>

  </body>
  </html>
   