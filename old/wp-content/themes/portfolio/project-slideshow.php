<?php
/*
Template Name: Project Slideshow
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
				
					<div class="nav"><a class="prev" href="#">Prev</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="next" href="#">Next</a>&nbsp;&nbsp;<span id="info"></span> 
</div> 

				<div class="slideshow">
					<?php 
					$args = array(
						'order'          => 'ASC',
						'orderby' 		 => 'menu_order',
						'post_type'      => 'attachment',
						'post_parent'    => $post->ID,
						'post_mime_type' => 'image',
						'post_status'    => null,
						'numberposts'    => -1,
					);
					$i=1;
					$attachments = get_posts($args);
					if ($attachments) {
						foreach ($attachments as $attachment)
						
						{if ($i == "1") {
							echo "<div class='next'>";} else {
							echo "<div class='next not-first'>";}
			
							echo wp_get_attachment_image($attachment->ID, 'large', false, false);
						$caption = $attachment->post_excerpt;
						if (isset($caption)) { echo '<p class="caption">'.$caption.'</p>';}
						$description = $attachment->post_content;
						if (isset($description)) { echo '<p class="caption">'.$description.'</p>';}
						echo "</div>";
						
						$i++;
						}
					}
					?>
					
				</div>
									
				<?php the_content() ?>
				
				</div>
			</div><!-- .post -->


		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>