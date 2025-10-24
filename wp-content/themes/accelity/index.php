<?php get_header(); ?>
<main class="global-main py-5">
    <div class="container xl mx-auto px-4 sm:px-0">
    <?php if (have_posts()) {
    	while (have_posts()) {
    		the_post(); ?>
        <div class="row">
            <div class="col-12">
                <div class="content-styled">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    <?php
    	}
    } ?>
    </div>
</main>
<?php get_footer(); ?>
