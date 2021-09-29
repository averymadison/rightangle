<div id="primary" class="sidebar">
		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

			<li id="pages">
				<h3><?php _e( 'Pages', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_pages('title_li=&sort_column=menu_order' ) ?>
				</ul>
			</li>

<?php endif; // end primary sidebar widgets  ?>
		</ul>
	</div><!-- #primary .sidebar -->

	<div id="secondary" class="sidebar">
		<ul class="xoxo">
<?php if ( !is_page() ) : ?>	
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>

			<li id="categories">
				<h3><?php _e( 'Categories', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 

				</ul>
			</li>

			<li id="archives">
				<h3><?php _e( 'Archives', 'sandbox' ) ?></h3>
				<ul>
<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
  <option value=""><?php echo attribute_escape(__('Select Month')); ?></option> 
  <?php wp_get_archives('type=monthly&format=option&show_post_count=0'); ?> </select>

				</ul>
			</li>
			
			<li id="search">
				<h3><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h3>
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
						<input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
					</div>
				</form>
			</li>


	
<?php endif; // end secondary sidebar widgets  ?>
<?php endif; // end secondary sidebar widgets  ?>
		
		</ul>
	

	</div><!-- #secondary .sidebar -->
