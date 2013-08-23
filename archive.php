<?php
/*
  Template Name: Archives
*/
/*Шаблон архива*/
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
                <?php while(have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <ul>
                    <?php
                    $myposts = get_posts('numberposts=all&offset=0');
                    foreach($myposts as $post) :
                    ?>
                    <li><?php the_time('d.m.y') ?>  |  
                        <a  href="<?php the_permalink(); ?>"><?php  the_title(); ?></a>
                    </li>
                    <?php  endforeach;  ?>
                </ul>
                <?php  endwhile;  ?>
            </div>  <!-- конец rightcolumn -->
        </div>  <!-- конец main -->
<?php
get_footer();   //Подключение подвала footer.php
?>