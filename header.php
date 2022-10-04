<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-contact">
                        <li >
                            <span style="color:#f7f5f5;">Call :</span>
                            <a href="tel: &nbsp +91 99877 05688"> +91 99877 05688</a></href>
                    
                        </li>
                        <li>
                            <span style="color:#f7f5f5;">Email :</span>
                           <a href="mailto: &nbsp info@tectignis.university"> &nbsp info@tectignis.university</a></href>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header-right float-right">
                        <div class="header-socials">
                            <ul>
                                <li><a href="https://www.facebook.com/tectignisofficial/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/tectignisofficial/"><i class="fab fa-instagram"></i></a></li>
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>

<header>




    <!-- Main Menu Start -->
    <div class="site-navigation main_menu menu-2" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo-dark.png" alt="Tectignis University" class="img-fluid">
                </a>

                <!-- Toggler -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarMenu">


                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active1" href="index.php" id="navbar3" role="button"  aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>


                        </li>
                        <li class="nav-item ">
                            <a href="about.php" class="nav-link  active2" id="navbar3">
                                About
                            </a>
                        </li>

<?php

$sql="select * from courses";
$result=mysqli_query($conn,$sql);
?>
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle active3" href="courses.php" id="navbar3" role="button" aria-haspopup="true" aria-expanded="false">
                                Courses<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar3" >
                            <?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item  activa1" href="course/<?php echo $row['course_name']?>">
                                <?php echo $row['course_name']?>
                               </a>
                               <?php } ?>
                               
                            </div>
                        </li>
               
                
                        <li class="nav-item " style="margin-right:30px;">
                            <a href="contact.php" class="nav-link   active4" id="navbar3">
                                Contact
                            </a>
                        </li>
                    </ul>
                    
                   
                </div> 
				<!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>