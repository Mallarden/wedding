<?php
/**
* Single post template
*
* @package WordPress
* @version 1.0
*/
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single">
		<div class="container">
				<h1 style="font-family: 'Abril Fatface', cursive;" class="pb-2"><?php echo the_title(); ?> </h1>
				<div class="blog-author pb-3">
					<span class="dashicons-calendar dashicons"></span><div class="date p-1"><?php the_date(); ?></div>
					<span class="ml-2 dashicons-admin-users dashicons"></span><div class="author p-1"><?php the_author(); ?></div>
				</div>
			<div class="">
				<?php echo the_content(); ?>
			</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer();