<?php
/*
Template Name: Шаблон главной страницы
*/
?>
<?php get_header(); ?>
    <main class="main-content">
        <div class="main-content__wrapper clearfix">
            <div class="list-posts">
                <div class="list-posts__wrapper">
                    <?php
                    if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <div class="post-item__preview-text">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <div class="page__buffer"></div>
    </section>
<?php get_footer(); ?>