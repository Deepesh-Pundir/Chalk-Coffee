<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri();?>/css/style.css"> -->
    <?php wp_head();?>
</head>

<body>
<?php $logimage=get_header_image();?>
<?php
    if (is_blog()) {

        $blog_background_image=get_field('blog',23);?>
    <script defer> 
        $( document ).ready(function() {
            var elements=document.getElementsByClassName("wp_anchor");
                    for(let i=0; i<elements.length ; i++)
                    {
                        document.getElementsByClassName('wp_anchor')[i].style.color='white'; // change color anchor tag in header-2 menu 
                        console.log(document.getElementsByClassName('menu5'));
                    }
                 });
    </script>
    <?php
    }

?>

<div class="background" style="background-image:url('<?php  echo $blog_background_image['background_image']['url']; ?>');height:50vh;background-size: cover;
    background-repeat: no-repeat;" >
<div class="header">           <!-- header part start-->
    <div class="hamburger2" onclick="myFunction(this)">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
                <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo $logimage;?>"></a></div>
                <div class="menu2 nav_bar2">
                    <ul>
                        <li><a href="" class="menu5"><?php wp_nav_menu(
                            array(
                                'theme_location'=>'primary-menu',
                                'menu_class'=>'top_menu',
                                'add_a_class'  => 'wp_anchor'    // add class i anchor tag
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
                <script>
                const hamburger2=document.getElementsByClassName('hamburger2')[0];
                const icon2=document.getElementsByClassName('nav_bar2')[0];
                console.log(hamburger2);
                hamburger2.addEventListener('click',()=>{
                    icon2.classList.toggle('active2');
                });
               
            </script>
            <script>
                function myFunction(x) {
                    x.classList.toggle("change");
                }
            </script>
                <?php
                if(is_blog()){?>
                    <div class="content">
                        <p><?php echo get_the_date();?></p>
                        <h4><?php echo wp_trim_words(get_the_title(), 10 ); ?></h4> 
                        <a href="<?php the_permalink(); ?>">Read Post</a>  
                    </div>
                    <?php }?>
        </div>