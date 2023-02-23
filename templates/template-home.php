<?php
   /* Template Name: Home */ 
     get_header();
?>

<!-- Body1 Start -->
<?php
    $body1=get_field('body_1');
    // echo '<pre>';
    // print_r($body1);
    // echo '</pre>';
?>
<div class="body1" style="background-image:url('<?php echo $body1['background_image']['url']; ?>')">
        <div class="body1_h2"><h2><?php echo $body1['title']; ?></h2></div>
        <div class="body1_p"><p><?php echo $body1['sub_title']; ?></p></div>
        <div class="body1_cards">
            <?php
            
                foreach($body1['card'] as $value)
                {
                    ?>
                        <div class="card">
                            <div class="relative">
                               <img src="<?php echo $value['image']['url']?>" alt="" class="main-img">
                               <a href="<?php echo $value['link']['url']; ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/css/homePageImg/bodyImg/Rollover.png" alt="" class="hover-img"></a>
                            </div>
                        <h4><?php echo $value['title'];?></h4>
                        <p><?php echo $value['sub_title'];?></p>
                </div>
                    <?php
                }
            ?>
        </div>
     </div>  
     
     <!-- Body1 End -->
     <!-- Body2 Start -->
     <?php $body2=get_field('body_2'); 
     ?>
     <div class="body2">
        <div class="body2_image" style="background-image:url('<?php echo $body2['background_image_1']['url']; ?>'),url('<?php echo $body2['background_image_2']['url'];?>')">
            <div class="body2_b1">
                <h1><?php echo $body2['title']; ?></h1>
                <p><?php echo $body2['content']; ?></p>
                <div class="button"><a href="<?php echo $body2['button']['url']?>"><?php echo $body2['button']['title'];?></a></div>
            </div>
        </div>    
        <div class="body2_b2">
            <div class="gallery">             
                <?php echo do_shortcode("[instagram-feed feed=2]"); ?>    
            </div>
        </div>
     <!-- Body2 End -->

<?php 
    get_footer();
 ?>