<article id="post-<?php the_ID(); ?>" class="single-uslugi hentry">
    <div class="single-uslugi__bg"></div>
    <div class="single-uslugi__header">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                   <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="75px" height="75px" alt="<?php the_title(); ?>">
                   <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
       
    </div>
    <div class="single-uslugi__wraper">
        <div class="single-uslugi__sidebar">
            <div class="single-uslugi__sidebar__wraper">
                <ul>
                    <li>kldfjsgh</li>
                </ul>
            </div>
        </div>
        <div class="single-uslugi__container">
            
            <?php the_content(); ?>
        </div>
    </div>
    
</article>
