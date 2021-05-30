<?php get_header() ?>

<div class="container" id='content-container'>
    <?php while (have_posts()) { ?>
        <div id="post-<?php the_ID() ?>" <?php post_class() ?>>
            <h2 class=""><?php the_title() ?></h2>
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    <?php } ?>
</div>

<?php get_footer() ?>