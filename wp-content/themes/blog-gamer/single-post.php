<?php get_header(); ?>

<div class="img-single-post">
    <img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_title() ?>">
    <div class="title-single-post">
        <div class="container h-100">
            <div class="flex-title h-100">
                <h1><?php echo the_title(); ?></h1>
            </div>

        </div>
    </div>
</div>
<div class="container pt-5 pb-5">
    <div class="row gap-2">
        <div class="col-12 col-md-8">
            <?php the_content(); ?>
        </div>
        <div class="col-12 col-md-3">
            <?php if (is_active_sidebar('sidebar-1')) : ?>
                <aside id="secondary" class="widget-area">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </aside>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-8 post-navigation">
            <div class="post-navigation__prev">
                <?php previous_post_link('%link', '← Entrada anterior'); ?>
            </div>
            <div class="post-navigation__next">
                <?php next_post_link('%link', 'Siguiente entrada →'); ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>