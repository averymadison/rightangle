<?php
/*
Template Name: Home
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
			<div class="entry-content homepage">
				<h1>Welcome to Right Angle Woodworks.</h1>
				<p class="kicker"><span class="run-in">Located in the beautiful mountains of Western North Carolina, </span><br/>Right Angle Woodworks specializes in custom furniture and wood products designed to meet the individual needs of our customers. We cover a wide range of requests: from unique shelving for problematic spaces to comfortable furniture that looks great and is built to last.</p>
				<br/>
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
						foreach ($attachments as $attachment) {
						
						if ($i == "1") {
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
<br/><br/>
	<div class="fb-like" data-href="http://facebook.com/rightanglewoodworks" data-send="true" data-width="640" data-show-faces="true" data-font="lucida grande"></div>
</div>
			</div><!-- .post -->

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>