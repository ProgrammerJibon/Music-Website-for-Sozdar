        <div class="photos">
            <view></view>
            <h1>Photos Gallery</h1>
            <div class="photos-grid"><?php 
if($query = mysqli_query($connect, "SELECT * FROM `photos` ORDER BY `photos`.`id` DESC")){
    foreach ($query as $key) {
        ?>
                <div class="photos-item" title="Double click to download" oncontextmenu="if(confirm('Date: <?php echo $key['took_date'];?>.\n<?php echo $key['title'];?>.\nPress OK to download.')){forceDownload('<?php echo $key['pic'];?>')}; return false;">
                    <div class="photo">
                        <img src="<?php echo $key['pic'];?>" alt="">
                    </div>
                    <div class="date">
                        <span><?php echo $key['took_date'];?></span>
                    </div>
                    <div class="title">
                        <span><?php echo $key['title'];?></span>
                    </div>
                </div>
         
        <?php
    }
}
?>
            </div>
        </div>