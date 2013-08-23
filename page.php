<?php
/*Шаблон отдельной страницы*/
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
                    <div class="post-title">
                        <h2><?php the_title(); ?></h2> 
                        <span class="post-cat"><?php the_category(', ') ?></span> 
                    </div>
                    <div class="entry">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <?php the_content('Подробнее &raquo;'); ?>
                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    </div>
                </div>
                    <?php } ?>
                <?php } else { ?>
                <h2>Ничего не найдено</h2>
                <?php } ?> 
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>