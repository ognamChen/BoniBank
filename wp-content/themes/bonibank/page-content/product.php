<?php $content_type = "product"?>
<section class="product-section">
    <div class="container">
        <?php
            $args = array(
                'numberposts' => 1,
                'category_name' => $GLOBALS['page_type'] . "-" . $content_type,
            );
            $posts = get_posts($args);
            foreach ($posts as $post) {
            ?>
            <!-- PHP repeat start  -->
            <?php	
                $image = get_the_post_thumbnail_url($post);
                $permalink = get_permalink($post);
                // post meta
                $content = get_the_content($post);
                ?>
                <!-- PHP repeat start  -->  
                <div class="row">
                    <div class="col-lg-4">
                        <div class="product-img text-center">
                            <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="content-header" style="margin-top:30px; margin-bottom:0px;">
                            <p>
                                <?php echo $post->post_title ?>
                            </p>
                        </div>
                        <div class="product-content">
                            <p>
                                <?php echo $post->post_content ?>
                            </p>
                        </div>
                    </div>
                </div>
			<?php }?>
			<!-- PHP repeat end  --> 
        </div>
</section>
