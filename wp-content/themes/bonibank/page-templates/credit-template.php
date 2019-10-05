<?php
/*
Template Name: 首頁(信用貸款)
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<script>
fbq('track', '頁面瀏覽-信用貸款');
</script>
<?php 
    global $page_type;
    $page_type = "credit"
?>
<div class="container-fluid">
	<div class="tab-content">
        <div class="tab-pane active" id="credit">
            <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/banner-credit_h.jpg"; ?>" alt="">
            <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/banner-credit_v.jpg"; ?>" alt="">
		</div>
	</div>
</div>
<script>
    $(function() {
        $(".menu .nav-item").find("a").removeClass("active");
        $(".menu .credit.nav-item").find("a").addClass("active");
    });
</script>
<?php get_template_part('page-content/product');?>
<?php get_template_part('page-content/contact');?>
<?php get_template_part('page-content/success');?>
<?php get_template_part('page-content/qna');?>
<?php get_template_part('page-content/calculate');?>
<?php get_footer();