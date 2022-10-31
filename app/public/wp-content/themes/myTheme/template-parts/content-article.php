<div class="container">
	<header class="content-header">
		<div class="meta mb-3">
        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('large'); ?>" alt="image">
            <span class="date"><?php the_date(); ?></span>
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>')
            ?>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number() ?></a></span>
        </div>
	</header>
    <?php
    the_content();
    comments_template();
    ?>

</div>