<?php 
require_once 'functions.php';
$result = array();

if (isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == "4564654654lkasjdfowaietrjsaoidfjskldtjoidsjglk1dc451fs5d1f564asdf564as5df15ew64r54") {
    if (isset($_POST['change_text_settings']) && isset($_POST['name']) && isset($_POST['value']) && $_POST['name'] != "" && $_POST['value'] != "") {
		if (isset($_POST['is_pass']) && $_POST['is_pass'] == "pass") {
			$_POST['value'] = md5($_POST['value']);
		}
		if (@mysqli_query($connect, "UPDATE `info` SET `value` = '$_POST[value]' WHERE `info`.`name` = '$_POST[name]'")) {
			$result['settings_changed'] = "Successfully updated!";
		}else{
			$result['settings_changed'] = "Something went wrong!";
		}
	}
    

    if(isset($_POST['delete_event'])){
        if(mysqli_query($connect, "DELETE FROM `events` WHERE `events`.`event_id` = '$_POST[delete_event]'")){
            header("Location: /admin?p=0");
        }else{
            $result['add_menu_item']['error'] = mysqli_error($connect);
        }
    }


    if(isset($_POST['add_event'])){
        if(mysqli_query($connect, "INSERT INTO `events` (`event_id`, `event_date`, `event_name`, `event_location`, `event_contact`, `time`) VALUES (NULL, '$_POST[date]', '$_POST[event]', '$_POST[location]', '$_POST[contact]', '$time')")){
            header("Location: /admin?p=0");
        }else{
            $result['add_menu_item']['error'] = mysqli_error($connect);
        }
    }

    
    if (isset($_FILES['logo_change']['tmp_name'])) {
        if($file_name = upload($_FILES['logo_change']['tmp_name'], "image")){
            if (mysqli_query($connect, "UPDATE `info` SET `value` = '$file_name' WHERE `info`.`name` = 'logo'")) {
                header("Location: /admin?p=3");
                exit;
            }else{
                exit("Can't save to database! Try letter...");
            }
        }       
    }
    if (isset($_FILES['top_banner']['tmp_name'])) {
        if($file_name = upload($_FILES['top_banner']['tmp_name'], "image")){
            if (mysqli_query($connect, "UPDATE `info` SET `value` = '$file_name' WHERE `info`.`name` = 'top_banner'")) {
                header("Location: /admin?p=3");
                exit;
            }else{
                exit("Can't save to database! Try letter...");
            }
        }       
    }



    if(isset($_POST['news_letter_email'])){
        $sql_newsletter_mails = "SELECT * FROM `subscribed` ORDER BY `subscribed`.`id` DESC";
        $sql_newsletter_mails = mysqli_query($connect, $sql_newsletter_mails);
        foreach ($sql_newsletter_mails as $sql_newsletter_mail) {
            sent_mail($sql_newsletter_mail['email'], "", addslashes($_POST['news_letter_email']), addslashes($_POST['news_letter_title']));
        }
        header("Location: /admin?p=5&sent=".addslashes($_POST['news_letter_title']));
    }

    if(isset($_POST['delete_newsletter_email'])){
        if(mysqli_query($connect, "DELETE FROM `subscribed` WHERE `subscribed`.`id` = '$_POST[delete_newsletter_email]'")){
            header("Location: /admin?p=5");
        }else{
            $result['add_menu_item']['error'] = mysqli_error($connect);
        }
    }


    if(isset($_POST['delete_photo'])){
        if(mysqli_query($connect, "DELETE FROM `photos` WHERE `photos`.`id` = '$_POST[delete_photo]'")){
            header("Location: /admin?p=1");
        }else{
            $result['add_menu_item']['error'] = mysqli_error($connect);
        }
    }

    if(isset($_POST['add_photo'])){
        
        if($pic_url = upload($_FILES['pic']['tmp_name'], "image")){
            if (mysqli_query($connect, "INSERT INTO `photos` (`id`, `title`, `took_date`, `pic`, `time`) VALUES (NULL, '$_POST[desc]', '$_POST[date]', '$pic_url', '$time')")) {
                header("Location: /admin?p=1");
            }else{
                $result['add_photo'] = mysqli_error($connect);
            }
        }else{
            $result['add_photo'] = "Unable to upload photo!";
        }
    }
    

}


if(isset($_POST['admin_pass_enter']) && $admin_pass_enter = $_POST['admin_pass_enter']){
    if($info['password'] == md5($admin_pass_enter)){
        $_SESSION['user_admin'] = '4564654654lkasjdfowaietrjsaoidfjskldtjoidsjglk1dc451fs5d1f564asdf564as5df15ew64r54';
        $result['login'] = 'reload';
    }else{
        sleep(3);
        $result['login'] = md5('sozdar');
        // $result['login'] = "Wrong password!";
    }
}



if(isset($_POST['newsletter_subscription'])){
    if(filter_var($_POST['newsletter_subscription'], FILTER_VALIDATE_EMAIL)){
        if(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `subscribed` WHERE `email` LIKE '$_POST[newsletter_subscription]'")) == 0){
            if(mysqli_query($connect, "INSERT INTO `subscribed` (`id`, `email`, `ip`, `time`) VALUES (NULL, '$_POST[newsletter_subscription]', '$ip', '$time')")){
                $result['newsletter_subscription'] = 1;
            }else{
                $result['newsletter_subscription'] = 2;
            }
        }else{
            $result['newsletter_subscription'] = 3;
        }
    }else{
        $result['newsletter_subscription'] = 4;
    }
    
}


echo json_encode($result);