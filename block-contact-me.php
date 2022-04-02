<div class="contact-me">
    <div class="dark-shadow">
    <view></view>
        <h1>Contact Me</h1>
        <div class="contact-me-details">
            <div style="padding-bottom: 16px;">
                <?php require "item-social.php";?>
            </div>
            <div class="contact-way">
                <div class="contact-way-logo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <a href="mailto:<?php echo $info['email']; ?>" target="_blank" class="contact-way-data">
                    <span><?php echo $info['email']; ?></span>
                </a>
            </div>
            <div class="contact-way">
                <div class="contact-way-logo">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <a href="mailto:<?php echo $info['booking_email']; ?>" target="_blank" class="contact-way-data">
                    <span><?php echo $info['booking_email']; ?></span>
                </a>
            </div>
            <div class="contact-way">
                <div class="contact-way-logo">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="contact-way-data">
                    <span><?php echo $info['address']; ?></span>
                </div>
            </div>
            <div class="contact-way">
                <div class="contact-way-logo">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <a href="tel:<?php echo $info['phone']; ?>" target="_blank" class="contact-way-data">
                    <span><?php echo $info['phone']; ?></span>
                </a>
            </div>
        </div>
    </div>
</div>