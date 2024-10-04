<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $apartment->name; ?></title>
</head>
<body>
    <h1><?php echo $apartment->name; ?></h1>
    <p><?php echo $apartment->description; ?></p>
    <p>Harga: <?php echo $apartment->price; ?></p>
    <a href="<?php echo site_url('apartment'); ?>">Kembali</a>
</body>
</html>
