<form method="POST" action="/json.php" class="settings_main">
    <h1>Add event</h1>
    <div class="settings_item">
		<div class="settings_title">
		    Event Date:
		</div>
		<div>
			<input required name="date" placeholder="Ex: 31 December 2022" type="text" class="change_text">
		</div>
	</div>
    <div class="settings_item">
		<div class="settings_title">
		    Event Name:
		</div>
		<div>
			<input required name="event" placeholder="Ex: Celebrating 31st night" type="text" class="change_text">
		</div>
	</div>
    <div class="settings_item">
		<div class="settings_title">
		    Event Location:
		</div>
		<div>
			<input required name="location" placeholder="Ex: Next to Barisal city corporation" type="text" class="change_text">
		</div>
	</div>
    <div class="settings_item">
		<div class="settings_title">
		    Contact number of event manager (Optional):
		</div>
		<div>
			<input type="text" name="contact" placeholder="Ex: www.bcc.gov.bd/tickets or +88016500XXXXX" class="change_text">
		</div>
	</div>
    <div class="settings_item">
		<div>
			<button  type="submit"  name="add_event" class="change_text">Add</button>
		</div>
	</div>
</form>

<div class="events" style="margin: 0 -32px; min-height: 100%; background: none;">
    <div class="events-x">
        <view></view>
        <h1>All Past and Upcoming Events</h1>
        <table style="width: 100%">
            <tbody>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Event</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php 
                    if($query = mysqli_query($connect, "SELECT * FROM `events` ORDER BY `events`.`event_id` DESC")){
                        foreach ($query as $key) {
                            ?>
                            <tr>
                                <td><?php echo strip_tags(addslashes($key['event_date'])); ?></td>
                                <td><?php echo strip_tags(addslashes($key['event_name'])); ?></td>
                                <td><?php echo strip_tags(addslashes($key['event_location'])); ?></td>
                                <td style="user-select: all;"><?php echo strip_tags(addslashes($key['event_contact'])); ?></td>
                                <td><form action="/json.php" method="POST">
                                    <button name="delete_event" value="<?php echo strip_tags(addslashes($key['event_id'])); ?>"><i class="fa-solid fa-trash"></i></button>
                                </form></td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>