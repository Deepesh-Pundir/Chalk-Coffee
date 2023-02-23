<?php
   /* Template Name:About  */ 
     get_header('2');
?>
<?php
    $about=get_field('about');
    
?>
<div class="about_page">
    <div class="section1_b1">
        <div class="title"><?php  echo $about['section1']['title'];?></div>
        <div class="subtitle"><?php  echo $about['section1']['sub_title'];?></div>
        <div class="description"><?php  echo $about['section1']['description'];?></div>
    </div>
    <div class="section1_b2">
        <div class="image">
            <img src="<?php  echo $about['section1']['image']['url'];?>" alt="">
        </div>
            <div class="image_content">
                <div class="image_title"><h4><?php  echo $about['section1']['image_title'];?></h4></div>
                <div class="image_desc"><?php  echo $about['section1']['image_description'];?></div>
                <div class="button_container">
                    <div class="image_button"><a href="<?php  echo $about['section1']['button']['url'];?>"><?php  echo $about['section1']['button']['title'];?></a></div>
                </div>
            </div>
    </div>

    <div class="section2_b1">
        <div class="title"><?php  echo $about['section2']['title'];?></div>
        <div class="description"><?php  echo $about['section2']['description'];?></div>
    </div>
    <div class="section2_b2">
        <div class="section2_image1">
        <img src="<?php  echo $about['section2']['image1']['url'];?>" alt="">
        </div>
        <div class="section2_image2">
        <img src="<?php  echo $about['section2']['image2']['url'];?>" alt="">
        </div>
    </div>

    <div class="section3_b1">
        <div class="title"><?php  echo $about['section3']['title'];?></div>
        <div class="description"><?php  echo $about['section3']['description'];?></div>
    </div>
    <div class="section3_b2">
        <div class="cards">
            <?php
                foreach($about['section3']['cards'] as $value){
                    ?>
                    <div class="card">
                    <img src="<?php echo $value['picture']['url'];?>" alt="">
                    <p class="job"><?php echo $value['job_role'];?></p>
                    <p class="name"><?php echo $value['name'];?></p>
                    </div>
               <?php }
            ?>
        </div>
    </div>
</div>
<?php
     get_footer();
?>