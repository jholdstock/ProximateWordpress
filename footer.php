        <footer class="jh-footer-primary">
            <?php wp_nav_menu( array( 
                'theme_location' => 'footer-menu',
                'container_class' => 'jh-footer-menu'
             )); ?>
        </footer>

        <footer class="jh-copyright">
            <?php the_field('copyright'); ?>
        </footer>

        <script>
        </script>

    </body>
</html>