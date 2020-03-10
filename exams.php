<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/header/header.php");?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/menus/navbar.php");?>

	<!-- <div class="dropdown-backdrop"></div> -->

<div class="main-content-mt">
    <div class="container">

            <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/exams/sidenav.php");?>
				<div class="col-md-8 col-lg-8 col-xl-9">
                    <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/exams/syllabus.php");?>
                </div>

        <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/exams/free-study-material.php");?>

					      <!-- online course section start 
					      <div class="mb-5">
					      	<h3 class="mt-4 mb-4">Online Courses</h3>
					      	<div class="box-w-light-primary-bg d-item-center-between course-cols">
					      		<div>
					      			<h5 class="primary-color">Full Course IIT Jam Biotechnology</h5>
						          <ul class="course-header-list">
						          	<li>36 Lectures</li>
						          	<li>75 Assignments</li>
						          </ul>
					      		</div>
					      		<button class="btn rounded-btn btn-md primary-btn">View Course</button>
					      	</div>
					      </div>
					       online course section end -->

					      <!-- online test series section start 
					      <div class="mb-5">
					      	<h3 class="mb-4">Online Test Series</h3>
					      	<div class="box-w-shadow d-item-center-between course-cols">
					      		<div class="">
									<div class="course-test-col-heading d-inline-flex align-items-center">
										<h5 class="mb-1">Test Name</h5>
										<span class="pl-2">(Jun 12 starts - 7Dec Closes)</span>
									</div>
									<br class="d-none d-sm-block" />
									<ul class="course-test-cols-list d-inline-flex align-items-center mt-2 mb-1">
										<li>
											<img src="assets/images/common-icons/clipboard-list.svg" class='list-icon'>
											<span>35 Questions</span>
										</li>
									</ul>
								</div>
								<button class="btn rounded-btn btn-md primary-btn">Go to Tests</button>
					      	</div>
					      </div>
					      online test series secton end -->

        <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/exams/previous-question-papers.php");?>

        <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/exams/previous-year-answer.php");?>
        <?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/content/exams/assignments.php");?>




					</div><!-- -- -- -->
					<!-- Tab panes end -->
				</div>

				
			</div>
		</div>
	</div>

	<!-- footer start -->
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/template/footer/footer.php");?>
