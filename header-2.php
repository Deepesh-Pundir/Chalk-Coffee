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
<?php $logimage=get_header_image();?>
<div class="header">           <!-- header part start-->
                <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo $logimage;?>"></a></div>
                <div class="menu2">
                    <ul>
                        <li><a href=""><?php wp_nav_menu(
                            array(
                                'theme_location'=>'primary-menu',
                                'menu_class'=>'top_menu'
                                )
                                )?></a></li>
                    </ul>
                </div>
                <div class="button_menu2">
                    <?php wp_nav_menu(
                            array(
                                'theme_location'=>'button',
                                )
                            )?>
                </div>
            </div>
            