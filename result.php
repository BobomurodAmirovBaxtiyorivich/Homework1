<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['sub'])) { ?>
        <h1 align="center">Name: <?= $_POST['name'] ?></h1>
        <h1 align="center">Surename: <?= $_POST['surename'] ?></h1>
        <h1 align="center">Age<?= $_POST['age'] ?></h1>
        <h1 align="center">Phone: <?= $_POST['phone'] ?></h1>
    <?php }
    ?>
</body>

</html>