<div  class="menu-bar">
    <div class="menu-item" onclick="setState('/');" style="border: none;">
        <span>
            <img src="<?php echo $info['logo']; ?>" alt="">
        </span>
    </div>
    <div class="menu-item" onclick="setState('about-me');">
        <span>About Me</span>
    </div>
    <div class="menu-item" onclick="setState('events');">
        <span>Events</span>
    </div>
    <div class="menu-item" onclick="setState('photos');">
        <span>Photos</span>
    </div>
    <div class="menu-item" onclick="setState('contact-me');">
        <span>Contact me</span>
    </div>
    <div class="menu-item menu-item-login" onclick="href('admin')" style="color: red;">
        <span>Login</span>
    </div>
</div>