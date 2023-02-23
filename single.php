<?php
    get_header('2');
?>
<?php
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id());

//   the_title();
//     echo $imagepath[0];
//     the_content();
?>
    <div class="single_page_body">
        <div class="title"><?php the_title();?></div>
        <div class="date"><?php echo get_the_date();?></div>
        <div class="thumbnail_image">
            <img src="<?php echo $imagepath[0]; ?>" width="100%" height="300px" alt="">
        </div>
        <div class="content"><?php the_content();?></div>
    </div>
<?php
    get_footer();
?>