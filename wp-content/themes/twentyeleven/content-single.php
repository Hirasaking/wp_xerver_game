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
		<!--<h1 class="entry-title"><?php the_title(); ?></h1></div>-->

		<!--どこかでＭＶＣに整える-->
		<!--会社名-->
		<?php $developer_name = SCF::get('developer_name'); ?>

		<div style="display: grid; grid-template-rows: 40px 30px; grid-template-columns: 70px 1fr;">
                    <div style="grid-row: 1 / 3; grid-column: 1 / 2;text-align:center;margin-top:0.4em"><p class="thumnail-70"><?php the_post_thumbnail(array(60,60)); ?><p></div>
		    <div style="grid-row: 1 / 2; grid-column: 2 / 3; "><h1 class="entry-title"><?php the_title(); ?></h1></div>
                    <div style="grid-row: 2 / 3; grid-column: 2 / 3; "><?php echo $developer_name; ?></div>
		</div>

                
                
		<!--どこかでＭＶＣに整える-->
		<!--ダウンロードリンク-->
		<?php $download_url = SCF::get('download_url'); ?>
		<!--<div class="download-button"><a href="<?php echo $download_url; ?>">ダウンロード</a></div>-->

		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			/*
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
			*/
		?>

		<div class="link_box"><a href="<?php echo $download_url; ?>"></a>ダウンロード</div>
		<div class="link_box"><a href="#comments"></a>シリアル交換掲示板</div>

		<div class="ac-container">
			<input id="ac-1" name="accordion-1" type="checkbox" />
			<label for="ac-1">シリアルコード</label>
			<div class="ac-small">
			<p>
				<?php
					$serial_1 = SCF::get('serial_1');
					$serial_2 = SCF::get('serial_2');
					$serial_3 = SCF::get('serial_3');
					$serial_3 = SCF::get('serial_4');

					if($serial_1 != '') echo $serial_1 . '<br>';
					if($serial_2 != '') echo $serial_2 . '<br>';
					if($serial_3 != '') echo $serial_3 . '<br>';
					if($serial_4 != '') echo $serial_4;
				?>
			</p>
			</div>
		</div>

		<?php
			$page_info = get_page_by_path('rpg');
			$page = get_post($page_info);
			//echo $page->post_content;
		?>

		<?php $af_title_1 = get_the_title('52');
		$af_url_1 = get_post_meta(52, 'ad_1', true); //アフィリエイトＵＲＬ取得
		?>

		<div style="text-align:center; font-size:2em;">特典が使えるゲーム</div>
		<div class="link_box_af">
			<a href="<?php echo $af_url_1; ?>"></a>
			<div style="display: grid; grid-template-rows: 130px; grid-template-columns: 130px 1fr;">
			    <div style="grid-row: 1 / 3; grid-column: 1 / 2; background: #f88;">
						<img src="<?php echo get_the_post_thumbnail_url('51'); ?>">
					</div>
			    <div style="grid-row: 1 / 2; grid-column: 2 / 3; background: #8f8;"><?php echo $af_title_1; ?></div>
			</div>
		</div>

		<div class="link_box_af">
			<a href="<?php echo $af_url_1; ?>"></a>
			<div style="display: grid; grid-template-rows: 130px; grid-template-columns: 130px 1fr;">
			    <div style="grid-row: 1 / 3; grid-column: 1 / 2; background: #f88;">
						<img src="<?php echo get_the_post_thumbnail_url('51'); ?>">
					</div>
			    <div style="grid-row: 1 / 2; grid-column: 2 / 3; background: #8f8;"><?php echo $af_title_1; ?></div>
			</div>
		</div>

		<div class="link_box_af">
			<a href="<?php echo $af_url_1; ?>"></a>
			<div style="display: grid; grid-template-rows: 130px; grid-template-columns: 130px 1fr;">
			    <div style="grid-row: 1 / 3; grid-column: 1 / 2; background: #f88;">
						<img src="<?php echo get_the_post_thumbnail_url('51'); ?>">
					</div>
			    <div style="grid-row: 1 / 2; grid-column: 2 / 3; background: #8f8;"><?php echo $af_title_1; ?></div>
			</div>
		</div>

		<div class="link_box_af">
			<a href="<?php echo $af_url_1; ?>"></a>
			<div style="display: grid; grid-template-rows: 130px; grid-template-columns: 130px 1fr;">
			    <div style="grid-row: 1 / 3; grid-column: 1 / 2; background: #f88;">
						<img src="<?php echo get_the_post_thumbnail_url('51'); ?>">
					</div>
			    <div style="grid-row: 1 / 2; grid-column: 2 / 3; background: #8f8;"><?php echo $af_title_1; ?></div>
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
