<?php get_header(); ?>

<div class="section section--hero">
    <div class="block block--hero">
        <div class="block__inner">
            <img id="proximate-logo" src="<?php echo get_template_directory_uri() ?>/images/proximate-logo.png" />
            <h1 class="block__title">
                <?php the_field('slogan_1'); ?>
            </h1>
            <div class="block__body">
                <?php the_field("slogan_2"); ?>
            </div>
            <a href="#" onclick="alert('Not yet idiot');return false;//TODO" class="button button--primary button--s block__action">Download now</a>
        </div>
        <div class="block__img">
            <div class="hero-phone"></div>
        </div>
    </div>
</div>

<div class="section section--features">
    <div class="section__inner">
        <div class="feature feature--left feature--calls section__item">
            <div class="feature__inner">
                <h1 class="feature__title"><?php the_field('left_subtitle'); ?></h1>
                <div class="feature__text"><?php the_field('left_paragraph'); ?></div>
            </div>
            <div class="feature__img"></div>
        </div>
        <div class="section__divider"></div>
        <div class="feature feature--right feature--security section__item">
            <div class="feature__inner">
                <div class="feature__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/radius.png" width="272" height="272" />
                </div>
                <h3 class="feature__intro"></h3>
                <h1 class="feature__title"><?php the_field('right_subtitle'); ?></h1>
                <div class="feature__text"><?php the_field('right_paragraph'); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="section section--more">
    <a href="#" onclick="alert('Not yet idiot');return false;//TODO" class="button button--primary button--s block__action">Download now</a>
</div>

<?php get_footer(); ?>
