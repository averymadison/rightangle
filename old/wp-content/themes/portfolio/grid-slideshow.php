<?php
/*
Template Name: Grid Slideshow
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
				
				<div id="grid">
			
					<?php $exclude = get_post_meta($post->ID, exclude, $single);
									
					if ( !empty($exclude) ) {
						$exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
						$args = array(
						'order'          => 'ASC',
						'orderby' 		 => 'menu_order',
						'post_type'      => 'attachment',
						'post_parent'    => $post->ID,
						'post_mime_type' => 'image',
						'post_status'    => null,
						'numberposts'    => -1,
						'exclude'		 => $exclude);
					} else { $args = array(
						'order'          => 'ASC',
						'orderby' 		 => 'menu_order',
						'post_type'      => 'attachment',
						'post_parent'    => $post->ID,
						'post_mime_type' => 'image',
						'post_status'    => null,
						'numberposts'    => -1,
									);}
				
					$attachments = get_posts($args);
					if ($attachments) {
						foreach ($attachments as $attachment) {
						
						$imgsrc = wp_get_attachment_image_src($attachment->ID, 'full', false);
						
						echo '<div class="img-thumb"><a class="fancybox" rel="group1" href="'.$imgsrc[0].'">';
						
						echo wp_get_attachment_image($attachment->ID, array(200,150), false, false);
						
						echo '</a></div>';
						
					
						
					}}
					?>
				
				</div><!--//grid-->
									
				<?php the_content() ?>
				
				</div>
			</div><!-- .post -->


		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>