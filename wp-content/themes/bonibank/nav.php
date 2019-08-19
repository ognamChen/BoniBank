<header>
    <div class="container-fluid">
        <div class="screen-mode">
            <div class="row">
                <div class="col-sm-4">
                    <a class="logo" href="<?php echo get_home_url(); ?>">                        
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/logo2.png"; ?>" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" onclick="location.href='<?php echo get_home_url(); ?>'">信用貸款</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="location.href='<?php echo get_permalink(get_page_by_path('house')); ?>'">房屋貸款</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="location.href='<?php echo get_permalink(get_page_by_path('car')); ?>'">汽車貸款</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <div class="icon-box">
                        <a href="">
                            <img style="width:45px;" class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/sample-icon-line.png"; ?>" alt="">
                        </a>
                        <a href="">
                            <img style="width:45px;" class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/sample-icon-line.png"; ?>" alt="">
                        </a>
                    </div>
                </div>
            </div> <!-- row end -->
        </div>
        <div class="mobile-mode">

        </div>
    </div> <!-- container end -->
</header>

