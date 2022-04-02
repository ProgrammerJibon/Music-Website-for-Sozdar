<?php 
if (!isset($info)) {
	exit();
}
 ?>
<div class="settings_main">
	<div class="settings_item">
		<div class="settings_title">
			Change Logo:
		</div>
		<div class="settings_img_change" onclick="document.querySelector('input#logo_change').click()">
			<img src="<?php echo $info['logo']; ?>">
		</div>
		<div>
			<form method="POST" enctype="multipart/form-data" action="/json.php">
				<input id="logo_change" type="file" oninput ="if (this.value != null) {document.querySelector('input#hit_logo_change').click()}" name="logo_change" accept="image/*" hidden>
				<input type="submit" id="hit_logo_change" hidden name="">
			</form>
		</div>
	</div>
	<div class="settings_item">
		<div class="settings_title">
			Change Homepage banner:
		</div>
		<div class="settings_img_change" onclick="document.querySelector('input#top_banner').click()">
			<img src="<?php echo $info['top_banner']; ?>">
		</div>
		<div>
			<form method="POST" enctype="multipart/form-data" action="/json.php">
				<input id="top_banner" type="file" oninput ="if (this.value != null) {document.querySelector('input#hit_top_banner').click()}" name="top_banner" accept="image/*" hidden>
				<input type="submit" id="hit_top_banner" hidden name="">
			</form>
		</div>
	</div>
	
	<div class="settings_item">
		<div class="settings_title">
			Change Website Title:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.changing_site_title', 'title')" class="change_text" value="<?php echo $info['title']; ?>">
		</div>
		<div class="changing_site_title result_change_text"></div>
	</div>
	
	<div class="settings_item">
		<div class="settings_title">
			Change about me text:
		</div>
		<div>
			<textarea type="text" onchange="change_text_settings(this, 'div.about_me', 'about_me')" class="change_text" value="<?php echo $info['about_me']; ?>"><?php echo $info['about_me']; ?></textarea>
		</div>
		<div class="about_me result_change_text"></div>
	</div>
	
	<div class="settings_item">
		<div class="settings_title">
			Change booking email:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.booking_email', 'booking_email')" class="change_text" value="<?php echo $info['booking_email']; ?>">
		</div>
		<div class="booking_email result_change_text"></div>
	</div>
	<div class="settings_item">
		<div class="settings_title">
			Change Phone Number:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.changing_phone', 'phone')" class="change_text" value="<?php echo $info['phone']; ?>">
		</div>
		<div class="changing_phone result_change_text"></div>
	</div>
	<div class="settings_item">
		<div class="settings_title">
			Change Address:
		</div>
		<div>
			<input type="text" onchange="change_text_settings(this, 'div.changing_site_address', 'address')" class="change_text" value="<?php echo $info['address']; ?>">
		</div>
		<div class="changing_site_address result_change_text"></div>
	</div>
	<div class="settings_item">
		<div class="settings_title">
			Change Email:
		</div>
		<div>
			<input type="email" onchange="change_text_settings(this, 'div.changing_site_email', 'email')" class="change_text" value="<?php echo $info['email']; ?>">
		</div>
		<div class="changing_site_email result_change_text"></div>
	</div>
	<div class="settings_item">
		<div class="settings_title">
			Change Admin Password:
		</div>
		<div>
			<input type="password" onchange="if(confirm(`Are you sure to change your password to: ${this.value}`)){change_text_settings(this, 'div.changing_password', 'password', 'pass')}else{this.value = null;return false;}" class="change_text" placeholder="Password">
		</div>
		<div class="changing_password result_change_text"></div>
	</div>		
</div>
<script type="text/javascript">
	document.querySelector("title").innerHTML = "Website General Settings";
</script>