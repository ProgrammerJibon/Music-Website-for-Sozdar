        <div class="photos">
            <view></view>
            <h1>Photos Gallery</h1>
            <div class="photos-grid"><?php 
if($query = mysqli_query($connect, "SELECT * FROM `photos` ORDER BY `photos`.`id` DESC")){
    foreach ($query as $key) {
        ?>
                <div class="photos-item" onclick="tab('<?php echo $key['pic'];?>')">
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