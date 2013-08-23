<?php
/*Шаблон для сообщения об ошибке 404 Not Found*/
get_header();   //Подключение шапки header.php   
?>
    <div id="content">
        <div id="main">
            <div id="leftcolumn">
                <h2 class="post-title">Не найдено</h2>
                <div class="post-content">
                    <p>Запрашиваемая Вами страница не найдена на сервере. Попробуйте начать поиск с 
                        <a href="<?php bloginfo('url'); ?>" title="Главная страница блога">первой страницы</a>.
                    </p>
                    <p>Если ошибка будет повторяться, обратитесь к Вебмастеру.</p>
                </div>
                <form id="error404-searchform" method="get" action="<?php bloginfo('home') ?>">
                    <div>
                        <input id="error404-s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="40" />
                        <input id="error404-searchsubmit" name="searchsubmit" type="submit" value="Найти" />
                    </div>
                </form>
            </div>  <!-- конец leftcolumn -->
            <div id="rightcolumn">
                <?php 
                    get_sidebar();  //Подключение сайдбара sidebar.php
                ?>
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>