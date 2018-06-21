<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">



		<!--アイキャッチ-->
		<?php //the_post_thumbnail('thumbnail'); ?>
		<div style="float:left;border:1px solid;">BOX1</div>
		<div style="border:1px solid;">BOX2</div>
		<div style="border:1px solid;">BOX3</div>



		<div style="border:1px solid;display:inline-block;"><img style="width:120px; height:120px;" src="<?php the_post_thumbnail_url(''); ?>"></div>
		<div style="width:50%;vertical-align:middle; display:table-cell;border:1px solid;display:inline-block;"><h1><?php the_title(); ?></h1></div>
		<div style="width:50%;vertical-align:middle; display:table-cell;border:1px solid;"><h1><?php the_title(); ?></h1></div>
		<!--<h1 class="entry-title"><?php the_title(); ?></h1></div>-->

		<!--どこかでＭＶＣに整える-->
		<!--ダウンロードリンク-->
		<?php $download_url = SCF::get('download_url'); ?>
	   <div style="padding:1em 0 1em 0;border:1px;border-style:solid;width:100%;text-align:center;"><a href="<?php echo $download_url; ?>">ダウンロード</a></div>

		<!--どこかでＭＶＣに整える-->
		<!--会社名-->
		<?php $developer_name = SCF::get('developer_name'); ?>
	   <div id="developer_name"><?php echo $developer_name; ?></div>

		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
		if ( '' != $tag_list ) {
			$utility_text = __( '%2$s</a>.', 'twentyeleven' );
		} elseif ( '' != $categories_list ) {
			$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
		} else {
			$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
		}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>

		<div class="ac-container">
			<input id="ac-1" name="accordion-1" type="checkbox" />
			<label for="ac-1">シリアルコード</label>
			<div class="ac-small">
			<p>
				<?php
					$serial_1 = SCF::get('serial_1');
					$serial_2 = SCF::get('serial_2');
					$serial_3 = SCF::get('serial_3');

					if($serial_1 != '') echo $serial_1 . '<br>';
					if($serial_2 != '') echo $serial_2 . '<br>';
					if($serial_3 != '') echo $serial_3 . '<br>';
				?>
			</p>
			</div>
		</div>

		<?php if ( 'post' == get_post_type() ) : ?>

		<!--
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div>--><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>',
				'after'  => '</div>',
			)
		);
?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
		if ( '' != $tag_list ) {
			$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
		} elseif ( '' != $categories_list ) {
			$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
		} else {
			$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
		}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php
				/** This filter is documented in author.php */
				echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 68 ) );
				?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyeleven' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
