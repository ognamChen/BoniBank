<?php
/*
Template Name: 隱私頁面
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<script>
fbq('track', '頁面瀏覽-隱私頁面');
</script>
<main>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="post_content_main about">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();