<?php get_header(); ?>
<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<header class="page-header">
		<div class="page-header-inner">
			<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
			<?php the_meta(); ?>
		</div>
	</header>
	<section class="main-page-section">
		<div class="main-page-section-inner">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="entry-content">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<?php the_content(); ?>
					<div class="entry-links"><?php wp_link_pages(); ?></div>
				</section>
			</article>
			<?php endwhile; endif; ?>
			<?php get_sidebar(); ?>
		</div>
	</section>

<?php get_footer(); ?>