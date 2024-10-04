<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Apartemen</title>
</head>
<body>
    <h1>Daftar Apartemen</h1>
    <ul>
        <?php foreach ($apartments as $apartment): ?>
            <li>
                <a href="<?php echo site_url('apartment/details/'.$apartment->id); ?>">
                    <?php echo $apartment->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
