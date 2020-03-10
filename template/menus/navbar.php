<nav class="navbar navbar-expand-sm navbar-primary justify-content-between fixed-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/brand/main-logo.svg" alt="main-logo">
        </a>

        <!-- Links -->
        <ul class="navbar-nav navbar-list">
            <!-- Dropdown -->
            <li class="nav-item">
                <a class="nav-link" href="about.php">
                    About us
                </a>
            </li>


            <li class="nav-item dropdown dropdown-lined-caret">
                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
                    Free Downloads
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" tabindex="-1" href="#">IIT JAM Biotechnology<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="exams.php">Syllabus</a></li>
                            <li><a tabindex="-1" href="exams.php">Study Material</a></li>
                            <li><a tabindex="-1" href="exams.php">Previous Year Questions</a></li>
                            <li><a tabindex="-1" href="exams.php">Previous Year Solutions</a></li>
                            <li><a tabindex="-1" href="exams.php">Assignments</a></li>
                        </ul>
                    </li>
                    <li><a tabindex="-1" href="courses.php">IIT JAM Chemistry</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown dropdown-lined-caret">
                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
                    Online Tests
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" tabindex="-1" href="#">IIT JAM Biotechnology<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="courses-test.php">Free Tests</a></li>
                            <li><a tabindex="-1" href="courses-test.php">Paid Tests</a></li>
                        </ul>
                    </li>
                    <li><a tabindex="-1" href="courses.php">IIT JAM Chemistry</a></li>
                </ul>
            </li>




            <li class="nav-item dropdown dropdown-lined-caret">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    Courses
                </a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="courses.php">IIT JAM Biotechnology</a></li>
                    <li><a tabindex="-1" href="courses.php">IIT JAM Chemistry</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">
                    Contact us
                </a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-list navbar-social-links ">
            <li class="nav-item">
                <a href="#">
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/twitter.svg" alt="twitter-icon">
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/facebook.svg" alt="facebook-icon">
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/whatsapp.svg" alt="whatsapp-icon">
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/youtube.svg" alt="youtube-icon">
                </a>
            </li>
        </ul>

        <nav class="mobile-menu d-block d-lg-none">
            <input id="nav" type="checkbox" />

            <label for="nav">
                <div class="menu-trigger"><i></i><i></i><i></i></div>
            </label>
            <div class="mobile-nav-slider">
                <div class="mobile-nav-slider-list">
                    <menu class="mobile-menu-list main-header-list">
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">
                                About us
                            </a>
                        </li>


                        <li class="nav-item dropdown dropdown-lined-caret">
                            <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
                                Free Downloads
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" tabindex="-1" href="#">IIT JAM Biotechnology<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="exams.php">Syllabus</a></li>
                                        <li><a tabindex="-1" href="exams.php">Study Material</a></li>
                                        <li><a tabindex="-1" href="exams.php">Previous Year Questions</a></li>
                                        <li><a tabindex="-1" href="exams.php">Previous Year Solutions</a></li>
                                        <li><a tabindex="-1" href="exams.php">Assignments</a></li>
                                    </ul>
                                </li>
                                <li><a tabindex="-1" href="courses.php">IIT JAM Chemistry</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown dropdown-lined-caret">
                            <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
                                Online Tests
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" tabindex="-1" href="#">IIT JAM Biotechnology<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="courses-test.php">Free Tests</a></li>
                                        <li><a tabindex="-1" href="courses-test.php">Paid Tests</a></li>
                                    </ul>
                                </li>
                                <li><a tabindex="-1" href="courses.php">IIT JAM Chemistry</a></li>
                            </ul>
                        </li>




                        <li class="nav-item dropdown dropdown-lined-caret">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="courses.php">IIT JAM Biotechnology</a></li>
                                <li><a tabindex="-1" href="courses.php">IIT JAM Chemistry</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">
                                Contact us
                            </a>
                        </li>
                    </menu>

                    <ul class="navbar-nav navbar-social-links">
                        <li class="nav-item">
                            <a href="#">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/twitter.svg" alt="twitter-icon">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/facebook.svg" alt="facebook-icon">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/whatsapp.svg" alt="whatsapp-icon">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/social-media-icons/youtube.svg" alt="youtube-icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</nav>
<!-- navbar end -->