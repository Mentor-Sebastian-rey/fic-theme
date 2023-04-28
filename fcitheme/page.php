<?php get_header(); ?>
<div class="Content-container Page contenido container">
  <main class="Main my-5">
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="PostContent">
        <article><?php the_content(); ?></article>
      </section>
    <?php endwhile; ?>
  </main>
</div>
<?php  get_footer(); ?>
