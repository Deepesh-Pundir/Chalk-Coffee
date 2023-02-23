
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
            <div class="hamburger" onclick="myFunction(this)">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
                <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo $logimage;?>"></a></div>
                <div class="menu nav_bar">
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
            <script>
                const hamburger=document.getElementsByClassName('hamburger')[0];
                const icon=document.getElementsByClassName('nav_bar')[0];
                console.log(hamburger);
                hamburger.addEventListener('click',()=>{
                    icon.classList.toggle('active');
                });
               
            </script>
             <script>
                function myFunction(x) {
                    x.classList.toggle("change");
                }
            </script>
            <div class="text">
                <div class="text1"><?php echo $Banner_section_val['title'];?></div>
                <div class="text2"><?php echo $Banner_section_val['sub_title']?></div>
                <div class="text3"><?php echo $Banner_section_val['content']?></div>
                <div class="button button2"><a href="<?php echo $Banner_section_val['button']['url'];?>"><?php echo $Banner_section_val['button']['title'];?></a></div>
                ?>
            </div>
    </div>  