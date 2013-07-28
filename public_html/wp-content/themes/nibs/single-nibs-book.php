<?php
/*
Template Name: Book
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php the_post(); ?>


<article class="book">
	<div class='post-head'>
		<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'large', array( 'class'=>'book-cover-image' ) ); } ?>
		<h2 class='book-title'><?php the_title(); ?></h2>
		<br />
		<div class="book-meta">
			<h3 class='author-name'>
				<?php echo get_the_term_list( get_the_ID(), 'nibs-book-author', 'by ', ', ', '' ); ?>
			</h3>

			<div class="publisher">
				<?php echo get_the_term_list( get_the_ID(), 'nibs-book-publisher', '', ', ', '' ); ?>
			</div>

			<div class="format">
				<?php echo get_the_term_list( get_the_ID(), 'nibs-book-format', '', ', ', '' ); ?>
			</div>

			<div class="year">
				Published:
				<?php the_field( 'nibs-book-year' ); ?>
			</div>

			<?php $page_count = get_field( 'nibs-page-count' ); ?>
			<?php if( $page_count > 0 ) : ?>
				<div class="page-count"><?php echo $page_count; ?> pages</div>
			<?php endif; ?>

			<?php the_div_field( 'nibs-isbn', 'isbn', 'ISBN: ', '' ); ?>
			<?php the_div_field( 'nibs-isbn-13', 'isbn-13', 'ISBN-13: ', '' ); ?>

		</div>
		<br />
		<div class="book-meta">
			<div class="price <?php echo has_term( 'nibs-on-sale', 'nibs-book-sale-option' ) ? 'on-sale' : 'not-on-sale' ?>">
				<div class="book-standard-price">
					Price: $<?php the_field('nibs-book-price') ?>
				</div>

				<?php if( has_term( 'nibs-on-sale', 'nibs-book-sale-option' ) ) : ?>
					<div class="book-sale-price">
						Sale Price: $<?php the_field('nibs-book-sale-price') ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<section class="post-body">
		<?php the_content(); ?>
	</section>
</article>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
