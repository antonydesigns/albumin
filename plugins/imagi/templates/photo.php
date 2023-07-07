<?php

wp_head();

?>

<div class="border-top border-black">

    <!-- Photo -->

    <img src="<?php the_post_thumbnail_url() ?>">
    <p>Hello</p>
    <?php echo the_content() ?>

</div>