<?php
/*
Template Name: Static Slideshow
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
				
				<?php 
					$args = array(
						'order'          => 'ASC',
						'orderby' 		 => 'menu_order',
						'post_type'      => 'attachment',
						'post_parent'    => $post->ID,
						'post_mime_type' => 'image',
						'post_status'    => null,
						'numberposts'    => 1,
					);
					$attachments = get_posts($args);
					if ($attachments) {
						foreach ($attachments as $attachment)
						
					
							echo wp_get_attachment_image($attachment->ID, 'large', false, false);
						$caption = $attachment->post_excerpt;
						if (isset($caption)) { echo '<p class="caption">'.$caption.'</p>';}
						$description = $attachment->post_content;
						if (isset($description)) { echo '<p class="caption">'.$description.'</p>';}
						echo "</div>";
						
						
						
					}
					?>
		
		<?php global $wpdb; $attachment_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_parent = '$post->ID' 
	AND post_status = 'inherit' AND post_type='attachment' ORDER BY menu_order ASC LIMIT 1 OFFSET 1"); ?>
	
		<?php the_content() ?>
		
	<p><a href="<?php echo get_attachment_link($attachment_id); ?>">View Slideshow</a></p>
	
				
				

	
									
			
				
				</div>
			</div><!-- .post -->


		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>