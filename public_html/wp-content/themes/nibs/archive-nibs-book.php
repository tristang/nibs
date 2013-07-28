<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class='category-head'>
	<h2>Books</h2>
</section>

<ul>
	<?php
		$args = array( 'post_type' => 'nibs-book', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	?>

		<li class="book">
			<?php the_post_thumbnail( 'nibs-book-thumbnail' ); ?>
			<h2><?php the_title(); ?></h2>
			<div class="book-excerpt"><?php the_excerpt(); ?></div>
		</li>

	<?php endwhile; ?>
</ul>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
