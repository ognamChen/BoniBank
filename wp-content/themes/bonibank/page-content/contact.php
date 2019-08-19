<?php $content_type = "contact"?>
<section class="contact-section">
    <div class="container">
        <div class="content-header text-center">
            <p>立即免費諮詢</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text">
                    <p>
                        我們是專業理財顧問，您的需求是我們首要達成的目標，歡迎有
                        理財、整合貸款需求的朋友，與我們聯繫，讓我們成為您的專業貸
                        款諮詢好幫手，提供您專業的貸款解答，我們提供多種聯絡的方
                        式，歡迎使用線上填單諮詢。
                    </p>
                </div>
                <div class="contact-img text-center">
                    <img style="width:120px;" class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/icon-contact.png"; ?>" alt="">
                    <p class="text-center">
                        <span style="color:#fb9000">專員諮詢專線：0903-168987</span>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $category_slug = 'form';
                $args = array(
                    'numberposts' => 1,
                    'category_name' => $category_slug,
                    'orderby' => 'date',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    ?>
                    <?php echo do_shortcode($post->post_content); ?>
                <?php }?>
            </div>
        </div>
</section>
