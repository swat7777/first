<?php
/*Шаблон категории*/
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
                <h3 class="page-subtitle">Рубрика : <?php echo single_cat_title() ?></h3>
        		<?php while ( have_posts() ) : the_post() ?>
        		<div id="post-<?php the_ID() ?>" class="post">
        			<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>								
        			<div class="post-meta">Опубликовано <?php the_time('F j, Y'); ?> рубрики: <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')) ?></div>
        			<div class="post-content">
                        <?php the_post_thumbnail('thumbnail'); ?>
        				<?php the_content('Подробнее &raquo;'); ?>
        			</div>
        		</div>    <!-- конец post -->
        		<?php endwhile ?>
        		<div class="navigation">
        			<div class="navleft"><?php next_posts_link('&laquo; Предыдущие записи', '0') ?></div>
        			<div class="navright"><?php previous_posts_link('Следующие записи &raquo;', '0') ?></div>
        		</div>    <!-- конец navigation -->
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>