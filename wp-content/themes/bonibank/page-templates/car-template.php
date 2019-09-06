<?php
/*
Template Name: 汽車貸款
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<script>
fbq('track', '頁面瀏覽-汽車貸款');
</script>
<?php 
    global $page_type;
    $page_type = "car"
?>
<div class="container-fluid">
	
	<div class="tab-content">
        <div class="tab-pane active" id="credit">
            <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/banner-car_h.jpg"; ?>" alt="">
            <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/banner-car_h.jpg"; ?>" alt="">
		</div>
	</div>
</div>
<script>
    $(function() {
        $(".menu .nav-item").find("a").removeClass("active");
        $(".menu .car.nav-item").find("a").addClass("active");
    });
</script>
<?php get_template_part('page-content/product');?>
<?php get_template_part('page-content/contact');?>
<?php get_template_part('page-content/success');?>
<?php get_template_part('page-content/qna');?>
<?php get_template_part('page-content/calculate');?>
<?php get_footer();
