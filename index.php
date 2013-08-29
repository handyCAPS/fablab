<?php get_header(); ?>
<?php get_sidebar(); ?>
		<div id="mainContent">
			
			<article <?php post_class(); ?>>

				<?php if(have_posts()) : while(have_posts()): the_post(); ?>
	
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<footer>Gepubliceerd op <?php the_date(); ?> door <?php the_author_posts_link(); ?></footer>
				<p><?php the_tags(); ?></p>
				<p>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</p>

				<?php endwhile; else: ?>

				<p>Helaas, niets gevonden ...</p>
				<?php endif; ?>
			</article>

			<a href="#">
				<div id="actionCall">
					Ontdek
				</div><!--  end actionCall  -->
			</a>

		</div><!--  end mainContent  -->
		<aside id="sideBarRight" class="sidebar">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</aside>

<?php get_footer(); ?>