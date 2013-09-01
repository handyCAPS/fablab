<?php get_header(); ?>
<?php get_sidebar(); ?>
		<div id="mainContent">
			
			<article <?php post_class(); ?>>

				<?php 
				if(have_posts()) : while(have_posts()): the_post(); ?>
	
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<footer>Gepubliceerd op <?php the_date(); ?> door <?php the_author_posts_link(); ?></footer>
				<p><?php the_tags('Tags: ', ' | '); ?></p>
				<p>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</p>

				<?php endwhile; else: ?>

				<p>Helaas, niets gevonden ...</p>
				<?php endif; ?>
			</article>

		</div><!--  end mainContent  -->
		<aside id="sideBarRight" class="sidebar">
			<?php 
				$querysidebar = new WP_Query('category_name=sidebar');
				if($querysidebar->have_posts()) : while($querysidebar->have_posts()): $querysidebar->the_post(); ?>
	
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				
				<p><?php the_tags('', ' | '); ?></p>
				<p>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</p>

				<?php endwhile; else: ?>

				<p>Helaas, niets gevonden ...</p>
				<?php endif; ?>
		</aside>

<?php get_footer(); ?>