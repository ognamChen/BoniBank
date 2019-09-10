<?php $content_type = "product"?>
<section class="product-section" style="background:linear-gradient(180deg, #e9ecef, #fff);">
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
                    <?php if (!empty($image)) { ?>
                        <div class="col-lg-5">
                            <div class="product-img text-center">
                                <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content-header text-center" style="margin-bottom:0px;">
                                <p>
                                    <?php echo $post->post_title ?>
                                </p>
                            </div>
                            <div class="product-content">
                                <?php echo $post->post_content ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-12">
                            <div class="content-header text-center" style="margin-bottom:0px;">
                                <p>
                                    <?php echo $post->post_title ?>
                                </p>
                            </div>
                            <div class="text-center">
                                <?php echo $post->post_content ?>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
			<?php }?>
			<!-- PHP repeat end  --> 
        </div>
</section>
