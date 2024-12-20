<?php
require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('client', 'name', 'DESC');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Zipcode</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($select  as $row) {
                $city = $crud->selectId("city", $row['city_id']);
                $cityName = $city["name"];
            ?>
            <tr>
                <td><a href="client-show.php?id=<?= $row['id'];?>"><?= $row['name'] ?></a></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['zipcode'] ?></td>
                <td><?= $cityName ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="client-create.php" class="btn">New Client</a>
</body>
</html>
