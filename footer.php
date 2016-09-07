    <footer id="footer">

        <div class="container">
            <div data-scroll-reveal="enter bottom and move 10px over 1.2s">
                <p data-scroll-reveal="enter over 3.2s">
                    Copyright &copy; Bad Man Apps Ltd. 2016
                </p>
            </div>
        </div>
    </footer>
    
	<?php wp_footer(); ?>
    
    <script>
        $(function() {
            window.scrollReveal = new scrollReveal();
            "use strict";

            // PreLoader
            $(window).load(function() {
                $(".loader").fadeOut(400);
            });

            // Backstretchs
            $("#header").backstretch("<?php echo get_template_directory_uri() ?>/images/3.jpg");
            $("#services").backstretch("<?php echo get_template_directory_uri() ?>/images/3.jpg");

        });
    </script>

</body>
</html>
