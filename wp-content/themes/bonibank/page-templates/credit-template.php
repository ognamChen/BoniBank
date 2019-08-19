<?php
/*
Template Name: 首頁(信用貸款)
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<div class="header_padding" style="display:none;"></div>
<script>
fbq('track', '頁面瀏覽-信用貸款(首頁)');
</script>
<?php 
    global $page_type;
    $page_type = "credit"
?>
<div class="container-fluid">
	<div class="tab-content">
        <div class="tab-pane active" id="credit">
            <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/sample-banner.jpg"; ?>" alt="">
            <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/sample-banner.jpg"; ?>" alt="">
		</div>
	</div>
</div>
<?php get_template_part('page-content/product');?>
<?php get_template_part('page-content/contact');?>
<?php get_template_part('page-content/success');?>
<?php get_template_part('page-content/qna');?>
<?php get_template_part('page-content/calculate');?>
<?php get_footer();