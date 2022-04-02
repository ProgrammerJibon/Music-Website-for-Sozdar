<?php 
if (!isset($info)) {
	exit();
}
 ?>
 <div class="settings_main">
	<div class="settings_item">
		<div class="settings_title">
		    facebook:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.facebook', 'facebook')" class="change_text" value="<?php echo $info['facebook']; ?>">
		</div>
		<div class="facebook result_change_text"></div>
	</div>
	
	
	<div class="settings_item">
		<div class="settings_title">
		    twitter:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.twitter', 'twitter')" class="change_text" value="<?php echo $info['twitter']; ?>">
		</div>
		<div class="twitter result_change_text"></div>
	</div>
	
	
	<div class="settings_item">
		<div class="settings_title">
		    instagram:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.instagram', 'instagram')" class="change_text" value="<?php echo $info['instagram']; ?>">
		</div>
		<div class="instagram result_change_text"></div>
	</div>
	
	
	<div class="settings_item">
		<div class="settings_title">
		    spotify:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.spotify', 'spotify')" class="change_text" value="<?php echo $info['spotify']; ?>">
		</div>
		<div class="spotify result_change_text"></div>
	</div>
	
	
	<div class="settings_item">
		<div class="settings_title">
		    youtube:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.youtube', 'youtube')" class="change_text" value="<?php echo $info['youtube']; ?>">
		</div>
		<div class="youtube result_change_text"></div>
	</div>
	
	
	<div class="settings_item">
		<div class="settings_title">
		    soundcloud:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.soundcloud', 'soundcloud')" class="change_text" value="<?php echo $info['soundcloud']; ?>">
		</div>
		<div class="soundcloud result_change_text"></div>
	</div>
	
	
	<div class="settings_item">
		<div class="settings_title">
		    apple music:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.apple_music', 'apple_music')" class="change_text" value="<?php echo $info['apple_music']; ?>">
		</div>
		<div class="apple_music result_change_text"></div>
	</div>
 </div>