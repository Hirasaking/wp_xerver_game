<?php
/**
 * Template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>>
		<header class="entry-header" >
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
                    
                        <div class="link_box_af">
                            <a href="<?php the_permalink(); ?>"></a>
                            <div style="display: grid; grid-template-rows: 40px 30px; grid-template-columns: 70px 1fr;">
                                <div style="grid-row: 1 / 3; grid-column: 1 / 2;text-align:center;margin-top:0.4em"><p class="thumnail-70"><?php the_post_thumbnail(array(60,60)); ?><p></div>
                                <div style="grid-row: 1 / 2; grid-column: 2 / 3;margin-left:2px"><h1 class="entry-title"><?php the_title(); ?></h1></div>
                                <div style="grid-row: 2 / 3; grid-column: 2 / 3;margin-left:2px">
                                    <?php if ( 'post' == get_post_type() ) : ?>
                                        <div class="entry-meta">
                                    <?php twentyeleven_posted_on(); ?>
                                        </div><!-- .entry-meta -->
                                    <?php endif; ?>
                                </div>
                            </div>
        		</div>
			<?php endif; ?>

			<!--
                            <?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
			</div>
			<?php endif; ?>
                        -->
		</header><!-- .entry-header -->

                <?php //▽▽▽記事ごとの本文を非表示▽▽▽?>
                    <?php //if ( is_search() ) : // Only display Excerpts for Search ?>
                    <!--<div class="entry-summary">-->
                            <?php //the_excerpt(); ?>
                    <!--</div>--><!-- .entry-summary -->
                    <?php //else : ?>
                    <!--<div class="entry-content">-->
                            <?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
                            <?php /*
                            wp_link_pages(
                                    array(
                                            'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>',
                                            'after'  => '</div>',
                                    )
                            );
                            */ ?>
                    <!--</div>--><!-- .entry-content -->
                    <?php //endif; ?>
                <?php //△△△記事ごとの本文を非表示△△△?>

	</article><!-- #post-<?php the_ID(); ?> -->
        <hr style="padding:0px;margin: 0px">

