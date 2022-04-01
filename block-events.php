<div class="events">
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
                        </tr>
                        <?php
                    }
                }
            ?>
        </tbody>
    </table>
</div>