
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri();?>/css/style.css"> -->
    <?php wp_head();?>
</head>
<body>
       <?php include_once('banner.php'); ?>
            <div class="header">           <!-- header part start-->
                <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo $logimage;?>"></a></div>
                <div class="menu">
                    <ul>
                        <li><a href=""><?php wp_nav_menu(
                            array(
                                'theme_location'=>'primary-menu',
                                'menu_class'=>'top_menu'
                                )
                            )?></a></li>
                    </ul>
                </div>
                <div class="button">
                    <?php wp_nav_menu(
                            array(
                                'theme_location'=>'button',
                                )
                            )?>
                </div>
            </div>
            <div class="text">
                <div class="text1"><?php echo $Banner_section_val['title'];?></div>
                <div class="text2"><?php echo $Banner_section_val['sub_title']?></div>
                <div class="text3"><?php echo $Banner_section_val['content']?></div>
                <div class="button button2"><a href="<?php echo $Banner_section_val['button']['url'];?>"><?php echo $Banner_section_val['button']['title'];?></a></div>
                ?>
            </div>
    </div>  