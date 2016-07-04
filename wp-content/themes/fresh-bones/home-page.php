<?php
/*
 Template Name: Home Page
 For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div id="content-wrapper">
<div id="home-container">
  

  <?php the_content(); ?>

<!-- <img class="hero-img" src="<?php// echo get_stylesheet_directory_uri();?>/library/images/rci-assests/hero-images/red-truck.jpg" alt="rci environnement red truck image"> -->

<section class="wrapper">
    <figure>
      <span class="actualities-icon"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/hero-images/actualities/icon_actualities.png" alt="actualities icon for the news ticker"></span>
       <figcaption class="title-text">Actualities </figcaption>
  </figure>

 <section id="news-slider">

   <?php $query = new WP_Query( array( 'category_name' => 'News' ) );?>
  <article class="news-slides">

    <?php  if( $query->have_posts() ) : while($query->have_posts()) : $query->the_post(); ?>
      <article class="news-slide">
      <strong class="news-title"><?php the_title(); ?></strong>
      <p class="news-summary"><?php  the_excerpt(); ?></p>
      </article>
    <?php endwhile; ?>
    <article class="news-slide"></article>
   </article>

  </section>
  <section class="news-button-wrap">
  <a href="<?php the_permalink();?>" class="news-button">View News..</a>
</section>
  <?php endif; ?>
</section>


</div>



</div>

<?php get_footer(); ?>
