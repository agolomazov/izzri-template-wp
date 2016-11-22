<?php
/*
Template Name: Шаблон для поста
*/
?>
<?php get_header(); ?>
    <main class="main-content">
        <div class="main-content__wrapper clearfix">
            <div class="list-posts">
                <div class="list-posts__wrapper">
                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <div class="post-item">
                            <div class="thumbnail-post"
                                <?php if(!has_post_thumbnail()): ?>
                                    style="background-image: url(<?= get_template_directory_uri(); ?>/static/img/list-posts/no-image.png); background-repeat: no-repeat; background-size: cover;"
                                <?php else: ?>
                                    <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), array(850, 350));  ?>
                                    style="background-image: url(<?= $thumb[0]; ?>); background-repeat: no-repeat; background-size: cover;"
                                <?php endif; ?>
                            >

                                <div class="post-category-title">
                                    <?= the_category(); ?>
                                </div>
                                <div class="post-item__title">
                                    <h3 class="post-item__title-item"><?= the_title(); ?></h3>
                                </div>
                                <div class="post-item__meta">
                                    <span class="post-meta date-published">Дата публикации: <b class="published-time"><?php the_time('d.m.Y'); ?></b></span>
                                    <span class="post-meta author-punlished">Автор: <i class="post-meta__link" ><?= get_the_author(); ?></i></span>
                                </div>
                            </div>
                            <div class="post-item__content">
                                <?php the_content(); ?>
                            </div>
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