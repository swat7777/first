<?php
/*Шаблон страницы с единственным постом*/
get_header();   //Подключение шапки header.php   
?>
    <div id="content">
        <div id="main">
            <div id="leftcolumn">
                <?php 
                    get_sidebar();  //Подключение сайдбара sidebar.php
                ?>
            </div>  <!-- конец leftcolumn -->
            <div id="rightcolumn">
                <?php if (have_posts()) { ?>
                <?php while (have_posts()) { the_post(); ?> 
                <div class="post">
                    <div class="post-date">
                        <span class="post-month"><?php the_time('M') ?></span>
                        <span class="post-day"><?php the_time('j') ?></span>
                    </div>
                    <div class="post-title">
                        <h2><?php the_title(); ?></h2> 
                        <span class="post-cat"><?php the_category(', ') ?></span> 
                    </div>
                    <div class="entry">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <?php the_content('Подробнее &raquo;'); ?>
                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    </div>
                    <?php comments_template(); ?>
                </div>
                    <?php } ?>
                <div class="navigation">
                    <span class="previous-entries"><?php next_posts_link('Вперед') ?></span>
                    <span class="next-entries"><?php previous_posts_link('Назад') ?></span>
                </div>
                <?php } else { ?>
                <h2>Ничего не найдено</h2>
                <?php } ?> 
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>