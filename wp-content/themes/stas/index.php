<?php

get_header();
?>
<main>
  <section id="offer" class="offer padding--huge container">
    <!-- <div class="container"> -->
    <div class="top mb--bg">
      <h2 class="heading-secondary">Nasza<span>oferta</span></h2>
      <h3 class="offer__description description">
        Wykonujemy schody wewnętrzne rożnego rodzaju, głównie dębowe ze
        względu na funkcjonalość i trwałość. Realizujemy także zamówiena na
        balustrady te tradycyjne jak i bardziej nowoczesne. Chętnie
        doradzamy niezdecydowanym klientom i zaspakajamy oczekiwania
        pozostałym.
      </h3>

    </div>
    <div class="offer__bottom">
      <div class="gallery">

        <?php
        while (have_posts()) {
          the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="single__image color">
            <img class="color" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            <p><?php the_title(); ?></p>
          </a>


        <?php }
        ?>
        <!-- 
        <a class="single__image color" href="zabieg.html">
          <img class="color" src="images/zabieg.png" alt="Schody z zabiegiem" />
          <p>Schody z zabiegiem</p>
        </a>

        <a class="single__image color" href="dywanowe.html"><img class="color" src="images/dywanowe.png" alt="Schody dywanowe" />
          <p>Schody dywanowe</p>
        </a>

        <a class="single__image color" href="proste.html"><img class="color" src="images/proste.png" alt="Schody proste" />
          <p>Schody proste</p>
        </a>

        <a class="single__image color" href="balustrady.html"><img class="color" src="images/balustrady.png" alt="balustrady" />
          <p>balustrady</p>
        </a>

        <a class="single__image color" href="domki.html"><img class="color" src="images/domki.jpg" alt="parapety" />
          <p>domki do apiterapii</p>
        </a> -->
      </div>
    </div>
    <!-- </div> -->
  </section>
</main>
<?php
get_footer();
?>