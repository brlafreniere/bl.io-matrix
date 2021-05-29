<?php get_header() ?>

<div class="container" id='content-container'>
    <?php while (have_posts()) { ?>
        <div id="post-<?php the_ID() ?>" <?php post_class() ?>>
            <?php the_post(); ?>

            <h1 class="mb-5 mt-5"><?php the_title() ?></h1>

            <?php the_content(); ?>
        </div>
    <?php } ?>
</div>

<?php get_footer() ?>