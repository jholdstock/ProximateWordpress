<?php get_header(); ?>

<div class="section section--hero">
    <div class="block block--hero">
        <div class="block__inner">
            <img id="proximate-logo" src="<?php echo get_template_directory_uri() ?>/images/proximate-logo.png" />
            <h1 class="block__title">
                <?php if( get_field('slogan_1') ): ?>
                    <?php the_field('slogan_1'); ?>
                <?php else : ?>
                    nope
                <?php endif; ?>
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
                <h1 class="feature__title">Effortless peace of mind</h1>
                <div class="feature__text">
                    The ultimate app for enforcing security and keeping your family and friends safe in the communication age.
                    <br /><br />
                    Later versions will allow the use of cheap, long life GPS sensors that you can fit onto a young child or baby’s clothes to ensure you know where they are 100% of the time.
                    <br /><br />
                    To further improve communication the next revision of the app will include intergroup messaging either private or group wide.
                </div>
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
                <h1 class="feature__title">Instant security for the everyday life</h1>
                <div class="feature__text">Proximate provides a simple system for setting up groups that are defined by a perimeter or radius. Should one of these group members leave the group you are instantly notified.
                <br /><br />
                The group member could be a family friend, child or relative at risk.</div>
            </div>
        </div>
    </div>
</div>

<div class="section section--more">
    <a href="#" onclick="alert('Not yet idiot');return false;//TODO" class="button button--primary button--s block__action">Download now</a>
</div>

<?php get_footer(); ?>
