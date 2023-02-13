<?php
   /* Template Name:Career  */ 
     get_header('2');
?>


<?php
    $career=get_field('career');
    // echo "<pre>";
    // print_r($career);
    // echo "</pre>";
?>
<div class="career_page">
    <div class="career_section1_b1">
        <div class="title"><?php the_title();?></div>
        <div class="description"><?php echo $career['section1']['description'];?></div>
        <div class="career_button">
            <a href="<?php echo $career['section1']['button']['url'];?>"><?php echo $career['section1']['button']['title'];?></a>
        </div>
    </div>
    <div class="career_section1_b2">
        <div class="image">
            <img src="<?php  echo $career['section1']['image']['url'];?>" alt="">
        </div>
        <div class="image_content">
            <div class="image_title"><h4><?php  echo $career['section1']['image_content']['title'];?></h4></div>
            <div class="image_desc"><?php  echo $career['section1']['image_content']['description'];?></div>
        </div>
    </div>
</div>

    <div class="career_section2_b1">
        <div class="title" id="Opportunities"><?php echo $career['section2']['title'];?></div>
        <div class="description"><?php echo $career['section2']['description'];?></div>
    </div>
    <div class="career_section2_b2">
        <?php
            foreach($career['section2']['grid_image'] as $value){   
                    ?>
                    <div class="grid_image">
                        <div class="images">
                            <img src="<?php  echo $value['image']['url'];?>" alt="">
                        </div>

                    <div class="image_content">
                        <div class="image_title"><h4><?php  echo $value['image_title'];?></h4></div>
                        <div class="image_desc"><?php  echo $value['image_descrip'];?></div>
                        <div class="image_content_button">
                            <a href="<?php echo $value['button']['url']; ?>"><?php echo $value['button']['title']; ?></a>
                        </div>
                    </div>
             </div>
            <?php 
                } ?> 
    </div>
    
</div>
<?php
    get_footer();
?>