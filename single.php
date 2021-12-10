<?php get_header() ?>

<?php if( have_posts() ) the_post(); ?>

<?php the_post_thumbnail( 'medium' ); ?>

<h1><?php the_title() ?></h1>
<small><?php  echo get_the_author_meta( 'display_name'); ?></small>

<small><?php the_time("d/m/Y") ?></small>

<small><?php the_category()?></small>

<p>
	<?php the_content(); ?>
</p>

<?php 

 if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;

?>

<?php get_footer() ?>