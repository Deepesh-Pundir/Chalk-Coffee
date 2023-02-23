<?php
    get_header('2');

?>
<?php                       // for searching the blog posts
    $searchData="";
    if(isset($_GET['title'])){
        if($_GET['title']!='')
        {
            $searchData=$_GET['title'];
        }
    }
?>
<div class="blog_body">
<form action="" method="get">
        <input type="text" placeholder="Type Something..." name="title">
        <input type="submit" value="Search Post">
    </form>
<div class="blogs">
    <?php
    
        $wpsearch=array(
            'post_type'=>'post',
            'post_status'=>'publish',
            's'=>$searchData
        );
        $searchquery=new WP_Query($wpsearch);            // code end search blog posts
    ?>                                      
<?php

    while($searchquery->have_posts()){
        $searchquery->the_post();
        // the_title();
        // the_post_thumbnail();
        // the_content();
        $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id());
        // print_r($imagepath);
?>
<div class="blog">
    <div class="image">
        <img src="<?php echo $imagepath[0]; ?>" alt="">
    </div>
    <div class="content">
        <p><?php echo get_the_date();?></p>
        <h4><?php echo wp_trim_words(get_the_title(), 10 ); ?></h4> 
        <a href="<?php the_permalink(); ?>">Read Post</a>  
    </div>
</div>
<?php
 } 
?>
</div>
<?php
    echo wp_pagenavi();
?>
</div>

<?php
    get_footer();
?>