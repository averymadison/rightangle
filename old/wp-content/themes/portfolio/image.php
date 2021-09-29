<?php get_header() ?>

	<div id="container">
		<div id="content">

<div class="entry-content">

<?php the_post() ?>

		            
            		
<?php // code copied from adjacent_image_link() in wp-include/media.php
$attachments = array_values(get_children( array('post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') ));
foreach ( $attachments as $k => $attachment )
  if ( $attachment->ID == $post->ID )
    break;

$next_url = isset($attachments[$k+1]) ? get_permalink($attachments[$k+1]->ID) : get_permalink($attachments[0]->ID);

$previous_url = isset($attachments[$k-1]) ? get_permalink($attachments[$k-1]->ID) : get_permalink($attachments[0]->ID);?>
 
 <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
 	<h2 class="entry-title"><?php the_title() ?></h2>
					<div class="entry-attachment"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a></div>
				<p class="wp-caption-text"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></p>
<?php the_content() ?>

<div id="nav-images" class="navigation">
				<div class="nav-previous">
				
			<?php ft_previous_image_link('Previous'); ?>


</div>
				
				<div class="nav-next"><?php ft_next_image_link('Next'); ?>
</div></div>


				
				
				
				</div>

			
			</div><!-- .post -->




			

</div><!-- entry-content-->
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>