<?php
/*Шаблон автора блога*/
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
                <?php
                    if (have_posts()) :     // возвращает true в случае, если записи по существующему критерию существуют
                        while (have_posts()) : the_post();  //выводит все записи, удовлетворяющий критерию
                        
                        endwhile;   //конец while (have_posts())
                    endif;  //конец if(have_posts())
                ?>
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>