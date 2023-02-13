<div id="footer">          <!-- footer part start-->
    <?php
    $footer1=get_field('footer1','option'); ?>        
<div class="footer1">
            <div class="footer1_b1"><h3><?php echo $footer1['title'];?></h3></div>
            <div class="footer1_b2">
                <?php
                    foreach($footer1['time_schedule'] as $value)
                    {
                        ?>
                        <div class="footer1_b2_b footer1_b2_b2">
                        <p><?php echo $value['week'];?></p><?php echo $value['timing'];?></div>
                        <?php        
                    }  
                ?>  
            </div>
        </div>
        <?php 
            $footer2=get_field('footer2','option');
         ?> 
        <div class="footer2">
        
            <div class="footer2_b1">
            <?php $logimage=get_header_image();?>
                <div class="footer2_b1_logo"><a href="<?php echo site_url();?>"><img src="<?php echo $footer2['logo']['url']; ?>"></a></div>
                <div class="footer2_b1_b2"><p><?php echo $footer2['timing_tagline']; ?></p><?php echo $footer2['timing_sub_tagline']; ?></div>
                <div class="footer2_b1_menu">  
                    <?php wp_nav_menu(
                            array(
                                'theme_location'=>'footer-menu',
                                'menu-class'=>'footer_menu'
                                )
                            )?>
                </div>
               
                <div class="footer2_b1_icon">
                    <?php
                    foreach($footer2['icon'] as $value)
                    {
                        ?>
                        <a href="<?php echo $value['link']['url']; ?>" target="_blank"><img src="<?php echo $value['icon_image']['url']; ?>" alt="_blank"></a>
                    
                    <?php }
                ?>
                </div>
            </div>
            <div class="footer2_b2">
                <p><?php echo $footer2['copy_write']; ?></p>
            </div>
        </div>
    </div>    
    <!-- footer part end-->
    <?php wp_footer(); ?>  
</body>
</html>