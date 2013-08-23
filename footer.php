            <div id="footer">
                <nav>
                    <?php //wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?><!-- меню в области футера -->
                </nav>		
                <ul id="footer-links">
                    <li>Авторские права &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li><!-- копирайт -->
                </ul>
                <br/>
                <p>
                    <a href="#" target="_blank" title="Шаблоны для блогов">АВТОР</a>
                </p>
            </div><!-- конец footer -->   
        </div>  <!-- конец content -->
        <?php wp_footer() ?>
    </body>
</html>