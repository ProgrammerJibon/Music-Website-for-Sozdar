<div class="about-me">
    <view></view>
    <h1>About Myself</h1>
    <span><?php 
        foreach (explode("\n", $info['about_me']) as $key) {
            echo $key."</br></br>";
        }
    ?></span>
</div>