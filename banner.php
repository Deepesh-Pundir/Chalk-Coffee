<?php
        $Banner_section_val=get_field('banner_section');
        // print_r($Banner_section_val);
     ?>
    <div class="home" style="background-image:url('<?php echo $Banner_section_val['banner']['url'];?>')">
        <?php $logimage=get_header_image();?>