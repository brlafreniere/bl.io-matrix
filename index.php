<?php get_header() ?>

<div class="container" id='content-container'>
    <h3>Recent Blog Posts</h3>
    <?php while (have_posts()) { ?>
        <div id="post-<?php the_ID() ?>" <?php post_class() ?>>
            <?php the_post(); ?>

            <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
        </div>
    <?php } ?>
</div>

<?php get_footer() ?>