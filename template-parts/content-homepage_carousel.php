<div class="item">
    <div class="slide-image">
        <?= the_post_thumbnail(); ?>
    </div>
    <div class="container">
        <div class="slide-content">
            <h4 class="optinal-h4"><?= the_title(); ?></h4>
            <h3><?= the_content(); ?></h3>
            <a href="<?= the_field('button_url') ?>" class="btn btn-primary"><?= the_field('button_label') ?></a>
        </div>
    </div>
</div>