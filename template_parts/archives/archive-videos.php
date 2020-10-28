<?php
    defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

    get_header();
?>
    <div class="block-title" style="background-image: url('<?=get_template_directory_uri()?>/images/bg_videos.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="oswald text-uppercase">Videos</h1>
                </div>
            </div>
        </div>
    </div>
    <main class="archives">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="recent-posts">
                        <div class="container-fluid">
                            <div class="row">
                                <?php 
                                    if (have_posts()) :
                                        while (have_posts()) : the_post();
                                ?>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                                <article id="post-<?=the_ID();?>" <?=post_class();?>>
                                                    <div class="row">
                                                        <div class="col-12 pb-2">
                                                            <a href="<?=get_the_permalink()?>">
                                                                <img src="<?=get_the_post_thumbnail_url()?>" class="img-fluid" alt="Responsive image">
                                                            </a>
                                                        </div>
                                                        <div class="col-12">
                                                            <p><small><?=get_the_date()?></small></p>
                                                            <h3 class="oswald text-uppercase"><a class="oswald text-uppercase" href="<?=get_the_permalink()?>"><?=the_title();?></a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                <?php 
                                        endwhile;
                                    endif;
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <aside class="sidebar">
                        <?php if ( is_active_sidebar( 'sidebar-videos-widget' ) ) : ?>
                            <div id="sidebar-videos-widget" class="primary-sidebar widget-area" role="complementary">
                                <?php dynamic_sidebar( 'sidebar-videos-widget' ); ?>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </main>
<?php
    wp_reset_postdata();

    get_footer();