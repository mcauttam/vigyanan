<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/header/header.php");?>

<!-- navbar start -->
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/menus/navbar.php");?>
	
	<!-- <div class="dropdown-backdrop"></div> -->
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/courses/topfold.php");?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/courses/submenu.php");?>


	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-8 col-xl-9">
                <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/courses/about-course.php");?>
                <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/courses/course-learn.php");?>



			</div>

			<div class="col-md-5 col-lg-4 col-xl-3">
				<div class="c-right-contact-box">
					<h5>Contact us</h5>
					<address class="contact-box-address">
						House No.40-D, Ground Floor, <br class="d-none d-sm-block" />
						Jia Sarai Near IIT,<br class="d-none d-sm-block" />
						Hauz Khas,<br class="d-none d-sm-block" />
						New Delhi-16
					</address>
					<ul class="contact-box-list mb-0">
						<li>
							<a href="mailto:vighyanan@gmail.com">
								<img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/common-icons/envelope-open.svg" alt="envelope-img">
								<span>Vigyanan@email.com</span>
							</a>
						</li>
						<li>
							<a href="tel:+91 98480 22338">
								<img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/common-icons/phone.svg" alt="phone-img">
								<span>+91 98480 22338</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/courses/faculty.php");?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/courses/testimonials.php");?>

<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/footer/footer.php");?>
