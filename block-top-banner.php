<div class="top_banner" style="background: url('<?php echo $info['top_banner']; ?>');background-size: cover;background-repeat: no-repeat;background-position: center;background-attachment: fixed;">
    <div class="top_banner_outset">
        <div class="top_banner_inset">
            <div>
                <?php require_once"item-social.php"; ?>
            </div>
            <div class="title" onclick="href('/');">
                <span>
                    <?php echo $info['title']; ?>
                </span>
            </div>
            <div>
                <?php require_once"item-menu-bar.php"; ?>
            </div>
        </div>
    </div>
</div>