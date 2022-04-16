<?php get_header();?>

<?php 

if(have_posts()) :
while(have_posts()) : the_post();?>

<article class="post"> 
    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
    <h2>Index</h2>
    <div> <?php the_content(); ?> </div>

    <p>This post was written by <?php the_author(); ?> at <?php the_date();?></p>
</article>
<?php endwhile; endif; ?>
<?php get_footer();?>
