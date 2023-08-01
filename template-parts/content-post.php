<div class="home-blog">
    <div class="blog-title">
        <h4 class="optinal-h4">OUR BLOG</h4>
        <a class="btn btn-secondary" href="javascript:void(0);">View All Posts</a>
    </div>
    <div class="blog-main">
        <div class="blog-image">
            <?= the_post_thumbnail(); ?>
        </div>
        <div class="blog-content">
            <div class="blog-inner">
                <h4><?= the_title() ?></h4>
                <p><?= the_content(); ?></p>
                <div class="readmore">
                    <a class="btn btn-primary" href="javascript:void(0);">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>