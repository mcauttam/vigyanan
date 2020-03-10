<!-- free study material section start -->
<div id="tab-content2" class="container tab-pane fade">
    <h3 class="mt-4 mb-4">Free Study Materials</h3>
    <!--div class="box-w-shadow d-item-center-between course-cols">
        <div class="d-inline-flex align-items-center">
            <div class="box-icon text-center">
                <img src="assets/images/common-icons/file-alt-solid.svg" alt="file-icon">
            </div>
            <div class="course-col-descrip">
                <h5>IIT JAM BT Quesion Paper 2019</h5>
                <p class="mb-0 light-grey xs-font">253 Questions</p>
            </div>
        </div>
        <div class="course-test-cols-btns">
            <button class="btn btn-link btn-link-primary p-0">View</button>
            <button class="btn btn-link btn-link-primary p-0">Download</button>
        </div>
    </div>

    <div class="box-w-shadow d-item-center-between course-cols">
        <div class="d-inline-flex align-items-center">
            <div class="box-icon text-center">
                <img src="assets/images/common-icons/file-alt-solid.svg" alt="file-icon">
            </div>
            <div class="course-col-descrip">
                <h5>IIT JAM BT Quesion Paper 2019</h5>
                <p class="mb-0 light-grey xs-font">253 Questions</p>
            </div>
        </div>
        <div class="course-test-cols-btns">
            <button class="btn btn-link btn-link-primary p-0">View</button>
            <button class="btn btn-link btn-link-primary p-0">Download</button>
        </div>
    </div-->




    <div id="accordion" class="box-without-shadow box-w-simple-accordian mb-5">

        <!-- course tab1 start -->
        <div class="card">
            <div class="card-header active-acc">
                <a class="card-link d-flex align-items-center justify-content-between" data-toggle="collapse" href="#courseTab1">
                    <h5 class="mb-0">General Biology Assignmenst</h5>
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/assets/images/common-icons/angle-down-grey.svg" alt="angle-down-grey">
                </a>
            </div>

            <div id="courseTab1" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <ul class="study-ass-sub-list mb-0">
                        <li class="d-item-center-between">
                            <p class="mb-0">Taxonomy Of Plants</p>
                            <button class="btn btn-sm rounded-btn primary-btn" id="chapter1btn">View PDF</button>
                        </li>
                        <div class="card mb-3 hidden hidden-xs hidden-sm" id="chapter1" style="display: block;">
                            <div class="card-header">Chapter 1: The Living World<span class="pull-right " id="chapter1_hide" style="cursor: pointer;">Hide <i class="fa fa-eye-slash view" aria-hidden="true"></i></span></div>
                            <div class="card-body">
                                <object data="http://<?php echo $_SERVER["HTTP_HOST"];?>/study-material/iit-jam/biotech/unit1_chapter1_diversity_of_life_living_world.pdf" type="application/pdf" width="100%" height="400">
                                </object>
                            </div>
                        </div>
                        <div>
                        </div>
                        <li class="d-item-center-between">
                            <p class="mb-0">Taxonomy Of Animals</p>
                            <button class="btn btn-sm rounded-btn primary-btn">View PDF</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- course tab1 end -->

        <!-- course tab2 start -->
        <div class="card">
            <div class="card-header">
                <a class="card-link d-flex align-items-center justify-content-between" data-toggle="collapse" href="#courseTab2">
                    <h5 class="mb-0">Physics</h5>
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/assets/images/common-icons/angle-down-grey.svg" alt="angle-down-grey">
                </a>
            </div>

            <div id="courseTab2" class="collapse" data-parent="#accordion">
                <div class="card-header" style="margin-top:20px; font-weight: 700;">
                    Chapter 1: Testing Purpose
                </div>
                <div class="card-body">
                    <ul class="study-ass-sub-list mb-0">
                        <li class="d-item-center-between">
                            <p class="mb-0">Taxonomy Of Plants</p>
                            <button class="btn btn-sm rounded-btn primary-btn">View PDF</button>
                        </li>

                        <li class="d-item-center-between">
                            <p class="mb-0">Taxonomy Of Animals</p>
                            <button class="btn btn-sm rounded-btn primary-btn">View PDF</button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- course tab2 end -->
        <!-- course tab2 start -->
        <div class="card">
            <div class="card-header">
                <a class="card-link d-flex align-items-center justify-content-between" data-toggle="collapse" href="#courseTab3">
                    <h5 class="mb-0">Physics1</h5>
                    <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/assets/images/common-icons/angle-down-grey.svg" alt="angle-down-grey">
                </a>
            </div>

            <div id="courseTab3" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <ul class="study-ass-sub-list mb-0">
                        <li class="d-item-center-between">
                            <p class="mb-0">Taxonomy Of Plants</p>
                            <button class="btn btn-sm rounded-btn primary-btn">View PDF</button>
                        </li>
                        <li class="d-item-center-between">
                            <p class="mb-0">Taxonomy Of Animals</p>
                            <button class="btn btn-sm rounded-btn primary-btn">View PDF</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- course tab2 end -->


    </div>
</div>
<!-- free study material section end -->

<script>
    $(document).ready(function(){
        $('#chapter1').hide();
    });
    $('#chapter1btn').on('click',function(){
        $('#chapter1').show(500);
    });
    $('#chapter1_hide').on('click',function(){
        $('#chapter1').hide(500);
    });
</script>