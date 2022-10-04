<?php
include('configure.php');
$id=$_GET['course_name'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="https://tectignis.university/" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description"
        content="edutim,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">

    <meta name="author" content="themeturn.com">

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
        .active3 {
            color: #FF1949 !important;
        }

        .activa2 {
            color: #FF1949 !important;
        }
    </style>
</head>

<body id="top-header">




    <?php include("header.php")?>


    <!--search overlay start-->
    <div class="search-wrap">
        <div class="overlay">
            <!-- <form action="" class="search-form">
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
        </form> -->
        </div>
    </div>
    <!--search overlay end-->
    <!-- select courses.*, instructor.* from courses inner join instructor on courses.sr_no=instructor.sr_no -->
    <?php     
    $sql=mysqli_query($conn,"select * from courses where course_name='$id'");
    while($arr=mysqli_fetch_array($sql)){
    ?>
    <?php     
    $sql=mysqli_query($conn,"select courses.*, instructor.* from courses inner join instructor on courses.instructor=instructor.id where courses.course_name='$id'");
    while($arr=mysqli_fetch_array($sql)){
    ?>
    <section class="page-wrapper edutim-course-single course-single-style-3">
        <div class="course-single-wrapper ad"
            style="background: url(admin/dist/img/background/<?php echo $arr['background_image'];?>); background-attachment:fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 shadow" style="margin-top: 10%; margin-bottom: 5%">
                        <div class="course-single-header white-text ">
                            <span class="subheading">Frontend & Backend Development</span>
                            <h3 class="single-course-title"><?php echo $arr['course_name'];?></h3>
                            <p><?php echo $arr['overview'];?></p>
                            <div class="d-flex align-items-center ">
                                <div class="single-top-meta">
                                    <i class="fa fa-user"></i><span> Students Enrolled</span>
                                </div>
                                <div class="single-top-meta">
                                    <div class="rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <span>5.00 (500 ratings)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav class="course-single-tabs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                            <a class="nav-item nav-link" id="nav-instructor-tab" data-toggle="tab"
                                href="#nav-instructor" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Instructor</a>
                            <a class="nav-item nav-link" id="nav-feedback-tab" data-toggle="tab" href="#nav-feedback"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Feedback</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="single-course-details ">
                                <h4 class="course-title">Description</h4>
                                <p><?php echo $arr['description'];?></p>


                                <div class="course-widget course-info">
                                    <h4 class="course-title">What You will Learn?</h4>
                                    <?php echo $arr['features'];?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                            <!--  Course Topics -->
                            <div class="edutim-single-course-segment  edutim-course-topics-wrap">
                                <div class="edutim-course-topics-header d-lg-flex justify-content-between">
                                    <div class="edutim-course-topics-header-left">
                                        <h4 class="course-title">Topics for this course</h4>
                                    </div>
                                    <div class="edutim-course-topics-header-right">
                                        <span> Total learning: <strong> Lessons</strong></span>
                                        <span> Time: <strong>13h 20m 20s</strong> </span>
                                    </div>
                                </div>

                                <div class="edutim-course-topics-contents">
                                    <div class="edutim-course-topic ">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn-block text-left curriculmn-title-btn"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            <h4 class="curriculmn-title">Introduction & Get Started</h4>
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="course-lessons">
                                                        <div class="single-course-lesson">
                                                            <div class="course-topic-lesson">
                                                                <i class="fab fa-youtube"></i>
                                                                <span> Work with Smart Objects</span>
                                                            </div>
                                                            <div class="course-lesson-duration">
                                                                00:05:20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn-block text-left collapsed curriculmn-title-btn"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            <h4 class="curriculmn-title"> Artboards & Raster Layers</h4>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="course-lessons">
                                                        <div class="single-course-lesson">
                                                            <div class="course-topic-lesson">
                                                                <i class="fab fa-youtube"></i>
                                                                <span>Use Photoshop’s Interface Efficiently</span>
                                                            </div>
                                                            <div class="course-lesson-duration">
                                                                00:05:20
                                                            </div>
                                                        </div>
                                                        <div class="single-course-lesson">
                                                            <div class="course-topic-lesson">
                                                                <i class="fab fa-youtube"></i>
                                                                <span>Use the Eye Dropper & Swatches</span>
                                                            </div>
                                                            <div class="course-lesson-duration">
                                                                00:05:20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn-block text-left collapsed curriculmn-title-btn"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <h4 class="curriculmn-title">Work with Smart Objects</h4>
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="course-lessons">
                                                        <div class="single-course-lesson">
                                                            <div class="course-topic-lesson">
                                                                <i class="fab fa-youtube"></i>
                                                                <span>Smart Objects Explained</span>
                                                            </div>
                                                            <div class="course-lesson-duration">
                                                                00:05:20
                                                            </div>
                                                        </div>
                                                        <div class="single-course-lesson">
                                                            <div class="course-topic-lesson">
                                                                <i class="fab fa-youtube"></i>
                                                                <span>Filters with Smart Objects</span>
                                                            </div>
                                                            <div class="course-lesson-duration">
                                                                00:05:20
                                                            </div>
                                                        </div>

                                                        <div class="single-course-lesson">
                                                            <div class="course-topic-lesson">
                                                                <i class="fab fa-youtube"></i>
                                                                <span>Clean Up Face Imperfections</span>
                                                            </div>
                                                            <div class="course-lesson-duration">
                                                                00:05:20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  COurse Topics End -->

                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel"
                            aria-labelledby="nav-instructor-tab">
                            <div class="course-widget course-info">
                                <h4 class="course-title">About the instructors</h4>

                                <div class="instructor-profile">
                                    <div class="profile-img">
                                        <img src="admin/dist/img/credit/<?php echo $arr['image'];?>"
                                            style="height:150px; width:150px;">
                                    </div>
                                    <div class="profile-info">
                                        <h5><?php echo $arr['instructor'];?></h5>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-half"></i></a>
                                            <span>3.79 ratings (29 )</span>
                                        </div>
                                        <p><?php echo $arr['about'];?></p>
                                        <div class="instructor-courses">
                                            <span><i class="bi bi-folder"></i><?php echo $arr['courses'];?></span>
                                            <span><i class="bi bi-group"></i><?php echo $arr['students'];?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                            <div class="course-widget course-info">
                                <h4 class="course-title">Students Feedback</h4>

                                <div class="course-review-wrapper">
                                    <div class="course-review">
                                        <div class="profile-img">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="review-text">
                                            <h5>Mhendi raju <span>26th june 2022</span></h5>

                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                            </div>
                                            <p>Great course. Well structured, paced and I feel far more confident using
                                                this software now then I did back when I was learning.</p>
                                        </div>
                                    </div>


                                    <div class="course-review">
                                        <div class="profile-img">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="review-text">
                                            <h5>kumar vijay<span>20th april 2022</span></h5>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                            </div>
                                            <p>Very deep course for a beginner, enjoyed everything from the very start
                                                and every detail is vastly investigated and discussed. A nice choice for
                                                those, who are enrolling Python. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="course-sidebar">
                        <div class="course-single-thumb">
                            <img src="admin/dist/img/background/<?php echo $arr['upload_icon'];?>" alt=""
                                class="img-fluid w-100">

                            <div class="course-price-wrapper">
                                <div class="course-price">
                                    <h4><?php echo $arr['price'];?></h4>
                                </div>
                                <p class="text-info"><i class="fa fa-clock mr-2"></i>Only few days left at this price
                                </p>
                                <form>
                                    <script src="https://checkout.razorpay.com/v1/payment-button.js"
                                        data-payment_button_id="pl_Je9CG2BNuPlA41" async> </script>
                                </form>
                            </div>
                        </div>

                        <div class="course-widget course-details-info">
                            <h4 class="course-title">This Course Includes</h4>
                            <ul>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-graph-bar"></i>Skill level : </span>
                                        <?php echo $arr['skill_level'];?>
                                    </div>
                                </li>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-user-ID"></i>Instructor :</span>
                                        <?php echo $arr['instructor'];?>
                                    </div>
                                </li>

                                <li>
                                    <div class="">
                                        <span><i class="bi bi-flag"></i>Duration :</span>
                                        <?php echo $arr['duration'];?>
                                    </div>
                                </li>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-paper"></i>Lessons :</span>
                                        <?php echo $arr['lessons'];?>
                                    </div>
                                </li>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-forward"></i>Language :</span>
                                        <?php echo $arr['language'];?>
                                    </div>
                                </li>

                                <li>
                                    <div class="">
                                        <span><i class="bi bi-madel"></i>Certificate :</span>
                                        <?php echo $arr['certificate'];?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="course-widget course-share d-flex justify-content-between align-items-center">
                            <span>Share</span>
                            <ul class="social-share list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/tectigniunniversity/"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/tectignisuniversity/"><i
                                            class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div>

                        <div class="course-widget">
                            <h4 class="course-title">Tags</h4>

                            <div class="single-course-tags">
                                <?php  $tag=array();
                                $part=explode(",",$arr['tags']);
                                foreach($part as $link){
                                    $tag[]="<span style='background:pink'><a href='#'>".$link."</span></a>";
                                }
                                echo implode(" ",$tag);
                                                 ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding related-course">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h4>Related Courses You may Like</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="admin/dist/img/background/<?php echo $arr['upload_icon'];?>"
                                style="height: 250px; width: 347px; ">
                            <span class="course-label">Begineer</span>
                        </div>

                        <div class="course-content">
                            <div class="course-price "><?php echo $arr['price'];?></div>

                            <h4><a href="digitalmarketing.php"> <?php echo $arr['course_name'];?></a></h4>
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <span>(5.00)</span>
                            </div>
                            <p> <?php echo $arr['description'];?></p>

                            <div class="course-footer d-lg-flex align-items-center justify-content-between">
                                <div class="course-meta">
                                    <span class="course-student"><i class="bi bi-group"></i></span>
                                    <span class="course-duration"><i class="bi bi-badge3"></i>Lessons</span>
                                </div>

                                <div class="buy-btn"><a href="digitalmarketing.php"
                                        class="btn btn-main-2 btn-small">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php } ?>
    </section>
    <?php } ?>


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
    <script src="assets/vendors/counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendors/jquery.isotope.js"></script>
    <script src="assets/vendors/imagesloaded.js"></script>
    <!--  Owlk Carousel-->
    <script src="assets/vendors/owl/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>