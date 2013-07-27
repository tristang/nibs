<?php
/*
Template Name: Book
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php the_post(); ?>

<h1><?php the_title(); ?></h1>

<div class="authors">
  <?php echo get_the_term_list( get_the_ID(), 'nibs-book-author', 'by ', ', ', '' ); ?>
</div>

<?php
  if( has_post_thumbnail() ) {
    the_post_thumbnail( 'large', array( 'class'=>'book-cover-image') );
  }
?>

<div class="publisher">
  <?php echo get_the_term_list( get_the_ID(), 'nibs-book-publisher', '', ', ', '' ); ?>
</div>

<div class="format">
  <?php echo get_the_term_list( get_the_ID(), 'nibs-book-format', '', ', ', '' ); ?>
</div>

<div class="year">
  <?php the_field( 'nibs-book-year' ); ?>
</div>

<?php $page_count = get_field( 'nibs-page-count' ); ?>
<?php if( $page_count > 0 ) : ?>
  <div class="page-count"><?php echo $page_count; ?> pages.</div>
<?php endif; ?>

<?php the_div_field( 'nibs-isbn', 'isbn', 'ISBN: ', '' ); ?>

<?php the_div_field( 'nibs-isbn-13', 'isbn-13', 'ISBN-13: ', '' ); ?>

<?php the_div_field( 'nibs-book-price', 'book-standard-price', 'Price: ', '' ); ?>


<div class="content"><?php the_content(); ?></div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>