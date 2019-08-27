<style>

</style>
<header>
    <div class="container-fluid">
        <div class="screen-mode">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <a class="logo" href="<?php echo get_home_url(); ?>">                        
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/logo.png"; ?>" alt="">
                    </a>
                </div>
                <div class="col-lg-5 col-1">
                    <div class="d-none d-lg-block">
                        <ul class="menu nav nav-tabs justify-content-center">
                            <li class="nav-item credit">
                                <a class="nav-link active" onclick="location.href='<?php echo get_home_url(); ?>'">信用貸款</a>
                            </li>
                            <li class="nav-item house">
                                <a class="nav-link" onclick="location.href='<?php echo get_permalink(get_page_by_path('house')); ?>'">房屋貸款</a>
                            </li>
                            <li class="nav-item car">
                                <a class="nav-link" onclick="location.href='<?php echo get_permalink(get_page_by_path('car')); ?>'">汽車貸款</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-5">
                   
                    <div class="icon-box">
                        <a class="d-none d-lg-inline">
                            <img style="width:30px;" class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/sample-icon-line.png"; ?>" alt="">
                        </a>
                        <a class="d-none d-lg-inline">
                            <img style="width:30px;" class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/sample-icon-line.png"; ?>" alt="">
                        </a>
                        <a class="d-inline d-lg-none JQ_menu" href="javascript:openNav();">
                            <i class="fas fa-bars"></i>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- row end -->
        </div>
    </div> <!-- container end -->
</header>
<div id="myNav" class="overlay">
    <div class="overlay-content">
        <ul class="nav nav-tabs justify-content-center nav-fill JQ_nav">
            <li class="nav-item tabExtend dropdown d-none d-lg-block">
                <a class="nav-link dropbtn" data-toggle="tab" href="">邦尼借貸</a>
                <div class="dropdown-content JQ_drop">
                    <a href="<?php echo get_home_url(); ?>">信用貸款</a>
                    <a href="<?php echo get_permalink(get_page_by_path('house')); ?>">房屋貸款</a>
                    <a href="<?php echo get_permalink(get_page_by_path('car')); ?>">汽車貸款</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="header_padding" style="display:none;"></div>