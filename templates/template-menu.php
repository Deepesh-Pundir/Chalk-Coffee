<?php
   /* Template Name: Menu */ 
     get_header('2');
?>
<?php
    $menuBody=get_field('menu_body'); //get the menu page field
?>
<div class="menu_page">
    <div class="title">
        <?php the_title(); ?>
    </div>
    <div class="description">
        <p><?php echo $menuBody['description']; ?></p>
    </div>
    <div class="button_block">
        <div class="button">
            <a href="<?php echo $menuBody['button']['url']; ?>"><?php echo $menuBody['button']['title'];?></a>
            
        </div>
    </div>
    <?php
        $menuCat=get_terms(['taxonomy'=>'menu_category',     //get the custom taxonomy for title 
                            'hide_empty'=>false]);  
                            echo "<pre>";  
                            // print_r($menuCat);
                            echo "</pre>";             
    ?>
    <?php
        $wpMenu=array('post_type'=>'menu',
        'post_status'=>'publish');
        $menu=new WP_Query($wpMenu);
        // print_r($menu);
        while($menu->have_posts())
        {
            $menu->the_post();
            // echo the_title();
        //     echo get_the_date();
        //     // echo get_the_content();
        //    echo get_the_post_thumbnail_url( get_the_ID(), 'medium' );
        
        
        }
       
    ?>
    
    <div class="category">
        <ul>
            <?php
                foreach($menuCat as $value)
                {
            ?>
            <li><h4><a href="?category=<?php echo $value->name ;?>" ><?php  echo $value->name; ?></a></h4></li>
            <?php }; 
             $category='Drinks';
            if(isset($_GET['category'])){
                $category=$_GET['category'];
            }
            ?>
            
        </ul>
    </div>
</div>
<?php
 $args=array(
    'posts_per_page' => -1,    
    'post_type' => 'menu',
    'tax_query' => array(
        array(
            'taxonomy' => 'menu_category',
            'field'    => 'name',
            'terms'    => $category
        )
    )
);
$args1=new WP_Query($args);?>
    <div class="slider">
        <div class="owl-carousel owl-theme"> <?php
        while($args1->have_posts()){ $args1->the_post();
        ?>
        <div class="item">
            <a href="?postData=<?php echo get_the_ID();?>&category=<?php echo $category;?>"><img src="<?php  echo get_the_post_thumbnail_url( get_the_ID(), 'medium' );?>" alt="" width="100px" height="150px" class="main_image">
            <img src="<?php echo get_stylesheet_directory_uri();?>/css/homePageImg/bodyImg/Rollover2.png" alt="" class="hover_image"  width="100px" height="150px">
        </a>

            <?php the_title();?>
        </div>
        
        <?php }; ?>
        </div>
        <?php
        $posts='';  
        if(isset($_GET['postData'])){
            $posts=$_GET['postData'];
        }
        else{
            $posts='';
        }
        ?>
    </div>
    <?php
        if(isset($posts)){
        $post = get_post($posts); //assuming $id has been initialized
        setup_postdata($post);
        $postData=get_field('show_post',$post);
        // echo "<pre>";
        // print_r($postData);
        // echo "</pre>";
        ?>
        <div class="post_container">
        <div class="post">
        <div class=image>
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID($posts))); ?>" alt="">
            
        </div>
        <div class="content">
            <div class=" description">
                <img src="<?php echo $postData['information_icon']['url'];?>" alt="">
                <div class="title">
                    <?php the_title();?>
                </div>
                <div class="image_content">
                    <?php echo the_content();?>
                </div>
                <img src="<?php echo $postData['icon_1']['url'];?>" alt="">
                <img src="<?php echo $postData['icon_2']['url'];?>" alt="">
                <img src="<?php echo $postData['icon_3']['url'];?>" alt="">
            </div>
            <div class="price"><?php echo $postData['price'];?></div>
        </div>
    </div>
    </div>
    <?php
      wp_reset_postdata();
    }
?>
    
<?php 
    get_footer();
 ?>