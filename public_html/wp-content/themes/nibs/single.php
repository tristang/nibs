<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<div class='post-head'>
		<?php the_post_thumbnail('full'); ?>
		<div class='post-meta'>
			<h2 class='post-title'><?php the_title(); ?></h2>
			<br />
			<h3 class='author-name'> <?php the_author_meta( 'display_name' ) ?> </h3>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
		</div>
	</div>
	<section class='post-body with-sidebar'>
		<?php the_content(); ?>			
	</section>
	
	<section class='sidebar'>
		<?php dynamic_sidebar('post-sidebar'); ?>
	</section>

	<?php //comments_template( '', true ); ?>

</article>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
