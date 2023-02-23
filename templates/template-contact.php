<?php
    // Template Name:Contact Us
    get_header('2');
?>
<?php
    $contact=get_field('contact');
    // echo "<pre>";
    // print_r($contact);
    // echo "</pre>";
?>
<div class="contact_page">
    <div class="contact_page_b1">
        <div class="title"><?php echo $contact['title']; ?></div>
        <div class="description"><?php echo $contact['description'];?></div>
    </div>
    <div class="contact_page_b2">
        <div class="contact_image">
            <img src="<?php echo $contact['image']['url'];?>" alt="">
        </div>
        <div class="contact_form">
            <div class="contact_form_b">
            <div class="form_title">
                <?php echo $contact['contact_form']['contact_form_title'];?>
            </div>
            <div class="icon">
                <img src="<?php echo $contact['contact_form']['calling_icon']['url'];?>" alt="">
                <p><?php echo $contact['contact_form']['mobile_no'];?></p>
            </div>
            <div class="icon">
                <img src="<?php echo $contact['contact_form']['email_icon']['url'];?>" alt="">
                <p><?php echo $contact['contact_form']['email'];?></p>
            </div>
            <div class="icon">
                <img src="<?php echo $contact['contact_form']['address_icon']['url'];?>" alt="">
                <p><?php echo $contact['contact_form']['address'];?></p>
            </div>
            <div class="form_slogan">
                <?php
                    echo $contact['contact_form']['form'];
                ?>
            </div>
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="317" title="Form1"]' ); ?>
            </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>