<?php
include('configure.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
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
                            <input type="text" class="form-control" placeholder="Search..." />
                        </div>
                        <div class="col-md-2 col-3 text-right">
                            <div class="search_toggle toggle-wrap d-inline-block">
                                <img class="search-close" src="assets/images/close.png"
                                    srcset="assets/images/close@2x.png 2x" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    <!--search overlay end-->


    <section class="page-header courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-header-content">
                        <h1>courses</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                <a href="courses.php">Courses</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding course">
        <div class="course-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>Showing 1-6 of 8 results</p>
                    </div>

                    <!-- <div class="col-lg-4">
                        <div class="topbar-search">
                            <form method="get" action="#">
                                <input type="text" placeholder="Search our courses" class="form-control">
                                <label><i class="fa fa-search"></i></label>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <section class="course-grid-2">

            <div class="container">
           
                <div class="row">
                <ul class="course-filter">
                <li class="active"><a href="courses.php" data-filter="*"> all</a></li>
                <?php
            $sql=mysqli_query($conn,"Select * from courses");
               while($arr=mysqli_fetch_array($sql)){
             ?>
                    <li><a href="course.php?course_name=<?php echo $arr['course_name']?>"
                            data-filter=".cat1"><?php echo $arr['course_name']?></a></li>
                            <?php } ?>
                </ul>
               
               </div>
                <div class="row course-gallery ">
                    <?php     
    $sql=mysqli_query($conn,"select * from courses");

    while($arr=mysqli_fetch_array($sql)){
    ?>
                    <div class="course-item cat2 col-lg-4 col-md-6">
                        <div class="course-block style-5">
                            <div class="course-img">
                                <img src="admin/dist/img/background/<?php echo $arr['upload_icon'];?>"
                                    style="height: 250px; width: 500px; ">
                            </div>

                            <div class="course-content">
                                <div class="course-price "><?php echo $arr['price'];?></div>

                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <span>(5.00)</span>
                                </div>
                                <h4><a href="course/<?php echo $arr['course_name'] ?>"> <?php echo $arr['course_name'];?></a></h4>

                                <div class="course-meta">
                                    <span class="course-student"><i class="bi bi-group"></i>57 Students</span>
                                    <span class="course-duration"><i class="bi bi-badge3"></i>6
                                        <?php echo $arr['lessons'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </section>
    </section>


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