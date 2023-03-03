<?php

require_once('../db/database.php');
$sql = "SELECT o.*, m.name FROM barbershop.order o join barbershop.master m on o.master_id = m.id";
$db = new Database();
$data = $db->customSelect($sql);

?>


<!DOCTYPE html>
<html>

<body>
    <table border="1">

        <tr>
            <th>id</th>
            <th>master_id</th>
            <th>for_date</th>
            <th>client_name</th>
            <th>client_phone_number</th>
            <th>client_email</th>
            <th>comment</th>
            <th>create_date</th>

        </tr>

        <?php foreach ($data as $item) { ?>

            <tr>
                <td>
                    <?= $item["id"] ?>
                </td>
                <td>
                    <?= $item["name"] ?>
                </td>
                <td>
                    <?= $item["for_date"] ?>
                </td>
                <td>
                    <?= $item["client_name"] ?>
                </td>
                <td>
                    <?= $item["client_phone_number"] ?>
                </td>
                <td>
                    <?= $item["client_email"] ?>
                </td>
                <td>
                    <?= $item["comment"] ?>
                </td>
                <td>
                    <?= $item["create_date"] ?>
                </td>

            </tr>

        <?php } ?>

    </table>
</body>

</html>