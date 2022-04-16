<?php get_header();?>

<?php 

if(have_posts()) :
while(have_posts()) : the_post();?>

<article class="post"> 
    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

    <div> <?php the_content(); ?> </div>

    <p>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> at <?php the_time('F jS, Y g:i a');?></p>
</article>
<?php endwhile; endif; ?>
<?php get_footer();?>
