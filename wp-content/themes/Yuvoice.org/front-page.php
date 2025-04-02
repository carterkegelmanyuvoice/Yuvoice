<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/YuvoiceWordmark.png" alt="<?php bloginfo('name'); ?>" class="yuvoice-wordmark" />
	<div class="inner-content grid-x grid-margin-x grid-padding-x">
		<main class="main small-12 medium-8 large-8 cell" role="main">  
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
          <header class="article-header">
            <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
            <p class="byline vcard"><?php printf(__('Posted', 'jointswp') . ' %1$s %2$s', get_the_time(get_option('date_format')), get_the_author_link()); ?></p>
          </header> <!-- end article header -->

          <section class="entry-content" itemprop="articleBody">
            <?php the_content(); ?>
          </section> <!-- end article section -->

          <footer class="article-footer">
            <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
          </footer> <!-- end article footer -->

          <?php comments_template(); ?>

        </article> <!-- end article -->
      <?php endwhile; else : ?>
        <article id="post-not-found" class="hentry">
          <header class="article-header">
            <h1><?php _e('Sorry, nothing to display.', 'jointswp'); ?></h1>
          </header>
        </article>
      <?php endif; ?> 
		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>