<?php

get_header();

?>

<main>
  <section id="stairs" class="stairs">
    <h2 class="heading-secondary container padding--big">


      <?php
      $value = get_the_title();
      $pieces = explode(' ', $value);
      echo array_shift($pieces);

      ?> <span> <?php echo implode(" ", $pieces); ?> </span>
    </h2>

    <div class="stairs__top top">
      <img class="stairs__img container--big" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
      <div class="stairs__info padding--small container--big">
        <h3 class="heading-tertiary"><?php echo get_the_title() . ' - realizacje'; ?></h3>
        <p class="stairs__invocation description">
          Zapraszamy do zapoznania się z realizacjami tego typu schodów w
          naszym wykonaniu jak i z samą balustradą, którą rownież montujemy.
          Na zdjęciach można obejrzeć zastosowanie takich konstrukcji oraz
          poznać więcej szczegółów.
        </p>
      </div>
    </div>


    <div class="stairs__bottom container--big mt--bg ">

      <?php
      while (have_posts()) {
        the_post(); ?>

        <?php the_content(); ?>

      <?php } ?>
      <!-- 
        <figure>
          <img src="images/dywanowe/dywanowe1.jpg" alt="Schody dywanowe" />
          <figcaption class="title">wzór nr 1</figcaption>
        </figure> -->

      <div class="stairs__btn">
        <a href="<?php echo site_url('/oferta') ?>" class="btn btn--empty">Wróć</a>
      </div>
    </div>
    <div class="stairs__description container--big">
      <div class="description__aside"></div>
      <p class="description">
        Schody dywanowe pasują do nowoczesnych stylizacji. Grubość trepa
        jest nieco większa od standardowch, dzięki temu całość sprawia
        wrażenie wiszącej w przestrzeni bryły.
      </p>
      <!-- <div class="description__aside"></div> -->
    </div>
  </section>
</main>
<?php

while (have_posts()) {
  the_post();

?>





<?php }

get_footer();

?>