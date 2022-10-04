<section class="footer pt-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6 col-md-6">
				<div class="widget footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">About Us</h5>
					<p class="mt-3"><b>" &nbsp </b> Tectignis University is leading educational platform for learners from all age groups.<b> &nbsp "</b></p>
					<p> <b>Tectignis IT Solutions Pvt. Ltd </b>the University has established itself as high skills &
						 education provider with focus on holistic learning and imbibing abilities in students.</p>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/tectignisofficial/"><i class="fab fa-facebook-f"></i></a></li>
						
						<li class="list-inline-item"><a href="https://www.instagram.com/tectignisofficial/"><i class="fab fa-instagram"></i></a></li>
						
					</ul>
				</div>
			</div>
			
			<div class="col-lg-2 col-sm-6 col-md-6">
				<div class="footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">Company</h5>
					<ul class="list-unstyled footer-links">
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<li><a href="courses.php">Courses</a></li>
						
					</ul>
				</div>
			</div>
			<?php

$sql="select * from courses";
$result=mysqli_query($conn,$sql);
?>
			<div class="col-lg-2 col-sm-6 col-md-6">
				<div class="footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">Courses</h5>
					<ul class="list-unstyled footer-links">
					<?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
						<li><a href="course.php?id=<?php echo $row['sr_no']?>"> <?php echo $row['course_name']?></a></li>
						<?php } ?>
						
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="footer-widget footer-contact mb-5 mb-lg-0">
					<h5 class="widget-title">Contact </h5>
					
					<ul class="list-unstyled">
						<li><i class="bi bi-headphone"></i>
							<div>
								<strong>Phone number</strong>
							<a href="tel: &nbsp +91 99877 05688"> +91 99877 05688</a></href>
							</div>
							
						</li>
						<li> <i class="bi bi-envelop"></i>
							<div>
								<strong>Email Address</strong>
								<a href="mailto: &nbsp support@tectignis.university"> support@tectignis.university</a></href>
							</div>
						</li>
						<li><i class="bi bi-location-pointer"></i>
							<div>
								<strong>Office Address</strong>
								Shop No. 02 
                                Bajali Darshan Apartment 
                                Plot No. 28 Sec-11
                                 Kamothe - 410209
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-btm">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="assets/images/logo-white.png" alt="Edutim" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="copyright text-lg-center">
						<p>© 2022 <a href="">Tectignis University</a> All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
