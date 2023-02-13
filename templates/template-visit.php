<?php
   /* Template Name:Visit  */ 
     get_header('2');
?>
<?php
    $visit=get_field('visit_body');
    // echo "<pre>";
    // print_r($visit);
    // echo "</pre>";
?>
<div class="visit_section1">
    <div class="visit_section1_b1">
        <div class="title"><?php the_title(); ?></div>
        <div class="description"><?php echo $visit['visit_page_descrip'];?></div>
    </div>
    <div class="visit_section1_b2">
        <div class="Visit_image">
            <img src="<?php echo $visit['image']['url'];?>" alt="">
        </div>
        <div class="image_content">
            <div class="visit_image_title"><?php echo $visit['image_title'];?></div>
            <div class="visit_image_description"><?php echo $visit['image_description'];?></div>
            <div class="visit_button_container">
                <div class="visit_image_button">
                    <a href="<?php echo $visit['button']['url'];?>"><?php echo $visit['button']['title'];?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map_container">
    <!-- <iframe src="<?php //echo $visit['map_link']?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    <div class="tooltip">
        <img src="<?php echo $visit['map']['map_image']['url'];?>" width="100%" alt="">
        <div class="buttonImage">
           <button type="button" onclick="document.getElementById('demo').style. visibility='visible'" ><img src="<?php echo get_stylesheet_directory_uri();?>/css/homePageImg/bodyImg/Ellipse 21.png" alt=""></button>
        </div>
        <div class="tooltip_container" id="demo">
                <div class="title tooltip_block">
                    <h4>Contact Info</h4>
                </div>
                <div class="mobile tooltip_block">
                    <img src="<?php echo $visit['map']['contact_info']['calling_icon']['url'];?>" alt="">
                    <p><?php echo $visit['map']['contact_info']['mobile_no'];?></p>
                </div>
                <div class="email tooltip_block">
                    <img src="<?php echo $visit['map']['contact_info']['email_icon']['url'];?>" alt="">
                    <p><?php echo $visit['map']['contact_info']['email'];?></p>
                </div>
                <div class="address tooltip_block">
                    <img src="<?php echo $visit['map']['contact_info']['location_icon']['url'];?>" alt="">
                    <p><?php echo $visit['map']['contact_info']['address'];?></p>
                </div>
                <div class="map_button tooltip_block">
                    <a href="<?php echo $visit['map']['contact_info']['button']['url'];?>" target="_blank"><?php echo $visit['map']['contact_info']['button']['title'];?></a>
                </div>
        </div>
    </div>

</div>
<?php
     get_footer();
?>