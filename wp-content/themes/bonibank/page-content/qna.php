<?php $content_type = "qna"?>
<section class="qna-section">
    <div class="container">
        <div class="content-header text-center">
            <p>常見問題</p>
        </div>
        <div id="accordion" class="myaccordion credit">
        <?php
            $args = array(
                'numberposts' => 5,
                'category_name' => $GLOBALS['page_type'] . "-" . $content_type,
            );
            $posts = get_posts($args);
            foreach ($posts as $post) {
            ?>
            <!-- PHP repeat start  -->
            <?php	
                $image = get_the_post_thumbnail_url($post);
                $permalink = get_permalink($post);
                ?>
                <!-- PHP repeat start  -->
                <div class="card">
                    <div class="card-header" id="heading_<?php echo $post->ID ?>">
                        <h2 class="mb-0">
                            <button
                                class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                data-toggle="collapse"
                                data-target="#collapse_<?php echo $post->ID ?>"
                                aria-expanded="false"
                                aria-controls="collapse_<?php echo $post->ID ?>"
                            >
                                <span>Q <span> <?php echo $post->post_title ?> </span></span>
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-chevron-down fa-stack-1x fa-inverse"></i>
                                </span>
                            </button>
                        </h2>
                    </div>
                    <div
                        id="collapse_<?php echo $post->ID ?>"
                        class="collapse"
                        aria-labelledby="heading_<?php echo $post->ID ?>"
                        data-parent="#accordion"
                    >
                        <div class="card-body">
                            <span class="card-answer">A</span>
                            <?php echo $post->post_content ?>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
			<!-- PHP repeat end  --> 
        </div>
</section>
