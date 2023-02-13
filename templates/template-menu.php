<?php
   /* Template Name: Menu */ 
     get_header('2');
?>
<?php
    $menuBody=get_field('menu_body');
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
        $menuCat=get_terms(['taxonomy'=>'menu_category',
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
            echo the_title();
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
            <li><h4><a href=""><?php  echo $value->name; ?></a></h4></li>
            <?php }; 
            ?>
            
        </ul>
    </div>
    
    <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
</div>


<?php 
    get_footer();
 ?>