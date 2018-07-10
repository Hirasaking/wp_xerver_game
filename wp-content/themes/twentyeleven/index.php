<?php

get_header(); ?>


		<div id="primary">
			<div id="content" role="main">

                            			<!-- オススメゲームのリンクを挿入予定 -->
                            <p class="recommend">おすすめゲーム</p>
                            
                            <?php 
                            $main_image  = get_post_meta(1,'main_image',false);
                            $catch_copy  = get_post_meta(1,'catch_copy',false);
                            
                            $permalink = get_permalink(1);
                            foreach($catch_copy as $catch_copy ){
                            }

                            foreach($main_image as $main_image ){
                                $main_image = wp_get_attachment_url($main_image);
                            }
                            
                            ?>
                            <p style="padding:0 2% 0;margin:0px;text-align: center;"><a href="<?php echo $permalink; ?>"><img src="<?php echo $main_image; ?>" alt="" style="width:80%; height:; min-width:0; max-width:500px;" /></a></p>
                            <p style="padding:0%;text-align: center;"><?php echo $catch_copy; ?></p>

                            
                            <p class="recommend">イベント＆特典情報</p>
                            <div style="text-align: center">
                                <p class="thumnail-70">
                                <a href="/"><?php echo get_the_post_thumbnail(52,array(80,80)); ?></a>
                                <a href="/"><?php echo get_the_post_thumbnail(52,array(80,80)); ?></a>
                                <a href="/"><?php echo get_the_post_thumbnail(52,array(80,80)); ?></a>
                                <a href="/"><?php echo get_the_post_thumbnail(52,array(80,80)); ?></a>
                                </p>
                            </div>

                            <p class="recommend">最新シリアル付きゲーム</p>

                            <?php if ( have_posts() ) : ?>

                                    <?php twentyeleven_content_nav( 'nav-above' ); ?>

                                    <?php /* Start the Loop */ ?>
                                    <?php
                                    while ( have_posts() ) :
                                            the_post();
                                    ?>

                                    <?php get_template_part( 'content', get_post_format() ); ?>

                                    <?php endwhile; ?>

                                    <?php twentyeleven_content_nav( 'nav-below' ); ?>

                            <?php else : ?>

                                    <article id="post-0" class="post no-results not-found">
                                            <header class="entry-header">
                                                    <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                                            </header><!-- .entry-header -->

                                            <div class="entry-content">
                                                    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                                                    <?php get_search_form(); ?>
                                            </div><!-- .entry-content -->
                                    </article><!-- #post-0 -->

                            <?php endif; ?>

			</div><!-- #content -->

		</div><!-- #primary -->
                
            <?php get_sidebar(); ?>

                <div id="primary">
                    <div id="content" role="main">
                        <?php af_wall(); ?>
                    </div><!-- #content -->
                </div><!-- #primary -->

            <?php get_footer(); ?>
