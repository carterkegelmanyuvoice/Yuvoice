<?php

/**
 * The front page template file
 */

get_header(); ?>

<div class="content">

  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/YuvoiceWordmark.png" alt="<?php bloginfo('name'); ?>" class="yuvoice-wordmark" />
  <div class="inner-content grid-x grid-margin-x grid-padding-x">
    <main class="main small-12 medium-8 large-8 cell" role="main">
      <div class="yuvoice-intro grid-x grid-margin-x grid-padding-x">
        <div class="small-12 medium-6 large-6 cell">
          <div class="callout primary">
            <h2 class="yuvoice-intro-title">Yuvoice</h2>
            <p class="yuvoice-intro-text">Yuvoice is a platform that connects people with similar interests and passions. Join us to share your voice and connect with others.</p>
          </div>
        </div>
      </div>
    </main> <!-- end #main -->

    <?php get_sidebar(); ?>

  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>