<?php get_header(); ?>

<div class="loader">
</div>

<header id="header">
    <div class="header-overlay">
        <div class="container">
            <div data-scroll-reveal="enter top and move 50px over 1.2s" class="hexagon">
                <img id="mylogo" src="<?php echo get_template_directory_uri() ?>/images/proximate-logo.png" />               
            </div>

            <div class="main-head">
                <h2 data-scroll-reveal="enter left and move 50px over 1.8s">
                    <?php bloginfo("name"); ?></h2>
                <p data-scroll-reveal="enter right and move 50px over 2.0s">
                    <?php bloginfo("description"); ?></p>
            </div>
        </div>
        <div id="countdown-area">
        </div>
       
    </div>
</header>

<section id="contact">
    <div class="container">
        <div class="main-head">
            <h2 data-scroll-reveal="enter top and move 50px over 1.2s" class="MT40">
                Subscribe &amp; Stay Updated</h2>
        </div>
        <div class="row">
            <div data-scroll-reveal="enter left and move 50px over 1.6s" id="contact-area" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form id="contact-form" class="contact-form" name="contact-form" method="post" action="contact.php">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" required placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Subscribe</button>
                </div>
                </form>
            </div>
            <div data-scroll-reveal="enter right and move 50px over 1.8s" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p>Subscribe to our newsletter to receive the latest news on ProxiMATE. You will never miss important updates and we will email you when the app is released.</p>
            </div>
        </div>
    </div>
</section>
    
<?php get_footer(); ?>
