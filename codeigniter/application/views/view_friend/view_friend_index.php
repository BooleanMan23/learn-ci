<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend List</title>
</head>
<body>

<table border="1px solid black">
    <tr>
        <th>Friend Name</th>
        <th>Friend Number</th>
        <th>Friend Email</th>
    </tr>

    <?php foreach($friend as $friend) : ?>
        <tr>
            <td><?php echo $friend['friend_name']?></td>
            <td><?php echo $friend['friend_number']?></td>
            <td><?php echo $friend['friend_email']?></td>
        </tr>
    <?php endforeach;?>
</table>
   
</body>
</html>