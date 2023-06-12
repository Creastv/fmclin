<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <header>
        <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail()  )  : ?>
            <?php echo the_post_thumbnail('post-item');?>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri()."/src/img/thumbnail.png"; ?>" width="480" height="315" alt="<?php the_title(); ?>">
        <?php endif; ?>
        </a>
        <div class="meta-group">
            <div class="meta meta-category">
                <span><?php _e(' Kategoria: ', 'go' ); ?></span>
                <?php the_category();?>
            </div>
            <div class="meta meta-pub">
                <span><?php _e('Opublikowano: ', 'go' ); ?></span>
                <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
            </div>
        </div>
    </header>
    <hr>
    <div class="content">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
    </div>
</article>
