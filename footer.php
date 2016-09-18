            </div> <!-- content -->
            <div id="footer">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu',
                    'container_class' => 'jh-footer-menu clearfix'
                 )); ?>

                <footer class="jh-copyright jh-proximate-bg">
                    <?php the_field('copyright_message', get_page_by_path("home-page")->ID); ?>
                </footer>
            </div>
        </div> <!-- wrapper -->

    </body>
</html>