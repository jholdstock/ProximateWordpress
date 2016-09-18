<?php get_header(); ?>

<div class="section section--hero">
    <div class="block--hero">
        <div class="block__inner">
            <img id="jh-proximate-logo"src="<?php echo get_template_directory_uri() ?>/images/proximate-logo.png" />
            <h1 class="jh-slogan-1">
                <?php the_field('slogan_1'); ?>
            </h1>
            <div class="jh-slogan-2">
                <?php the_field("slogan_2"); ?>
            </div>
            <a href="#" onclick="alert('Not yet idiot');return false;//TODO" class="jh-download-button">Download now</a>
        </div>
        <div class="jh-hero-phone-img">
            <img src="<?php echo get_template_directory_uri() ?>/images/phone1.png" class="hero-phone" />
        </div>
    </div>
</div>

<div class="section section--features">
    <div class="section__inner">
        <div class="feature jh-feature-left section__item">
            <div class="feature__inner">
                <h1 class="feature__title"><?php the_field('left_subtitle'); ?></h1>
                <div class="feature__text"><?php the_field('left_paragraph'); ?></div>
            </div>
            <div class="feature__img"></div>
        </div>
        <div class="section__divider"></div>
        <div class="feature jh-feature-right section__item">
            <div class="feature__inner">
                <div class="feature__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/radius.png" width="272" height="272" />
                </div>
                <h1 class="feature__title"><?php the_field('right_subtitle'); ?></h1>
                <div class="feature__text"><?php the_field('right_paragraph'); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="section jh-download-section">
    <a href="#" onclick="alert('Not yet idiot');return false;//TODO" class="jh-download-button">Download now</a>
</div>

<?php get_footer(); ?>
