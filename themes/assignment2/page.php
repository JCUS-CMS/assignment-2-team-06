<?php get_header(); ?> 
<div class="container content">
		<div class="side">
           
</div>
        <div class="main block">
       <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                  
<?php the_content(); ?>

                </article>
            <?php endwhile; ?>
       <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
       <?php endif; ?>  
		</div>
</div>
<?php get_footer(); ?> 