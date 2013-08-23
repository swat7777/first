<?php
/*Шаблон результатов поиска*/
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
                <h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>
                        <div id="posts">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <div id="post_info">
                                <div>Автор: <?php the_author() ?></div>
                                <div>Дата добавления: <?php the_date() ?></div>
                                <div id="clear"></div>
                            </div>
                            <p><?php the_excerpt() ?></p>
                            <span>Категория: <?php the_category(', ') ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php
                else :
                    echo "Извините по Вашему результату ничего не найдено";
                endif;
                ?>
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>