<?php get_header() ?>

<?php if( have_posts() ) the_post(); ?>

Image de l'article

<h1><?php the_title() ?></h1>
<small><?php  echo get_the_author_meta( 'display_name'); ?></small>
<small>Date</small>
<small>cat1 - cat2</small>

<p>
	Content
</p>

<?php get_footer() ?>