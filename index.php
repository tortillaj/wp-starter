<article <?php post_class( array( (has_post_thumbnail()) ? 'thumb' : 'no-thumb' ) ); ?> role="article">

  <?php get_template_part( 'templates/content/content', 'excerpt' ); ?>

</article>