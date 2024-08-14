<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="wrap">
        <div class="hero-singlepost">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
            <div class="data-title">
                <div>
                    <a href="<?php $categories = get_the_category();
                                                    echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                        <?php
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                        ?>
                    </a>
                    <h1><?php echo the_title(); ?></h1>
                </div>
                <div>
                    por <span class="cat"><?php echo get_the_author(); ?></span> | <span class="date"><?php echo get_the_date(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="contein-single-post">
            <div>
                <?php the_content(); ?>
            </div>
            <div>
                <div>
                    <?php include(get_template_directory() . "/comp/header/form-busqueda.php"); ?>
                </div>
                <?php if (is_active_sidebar('sidebar-1')) : ?>
                    <aside id="secondary" class="widget-area">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </aside>
                <?php endif; ?>
            </div>
            <div class="arr-single-post">
                <div class="post-navigation__prev">
                    <?php previous_post_link('%link', '← <span class="arr-wrod">Entrada anterior</span>'); ?>
                </div>
                <div class="post-navigation__next">
                    <?php next_post_link('%link', '<span class="arr-wrod">Siguiente entrada</span> →'); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
