<?php get_header(); ?>
	<div id="main">
		<?php get_sidebar(); ?>
		<?php get_sidebar('sp'); ?>
		<div id="content">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h3><?php echo the_title(); ?></h3>
				<p class="post-meta">
					<span class="post-date"><?php echo the_time('Y/m/d - H:i'); ?></span> * 
					<span class="post-cat"><?php the_category(' '); ?></span>
				</p>
				<div class="post-text">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<div class="post">
				<h3>Not Found</h3>
				<div class="post-text">
					<p>記事がみつかりませんでした。</p>
				</div>
			</div>
			<?php endif; ?>
			<div id="pager">
				<?php wp_pagenavi();?>	
			</div>
		</div>
		<?php get_template_part( 'sp-menu' ); ?>
	</div>
<?php get_footer(); ?>