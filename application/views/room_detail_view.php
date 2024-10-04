<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $room['name']; ?> - Nayara Homes</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <style>
        .container-details {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .room-image img {
            width: 100%;
            border-radius: 10px;
        }
        h1 {
            color: #008080;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 5px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #008080;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color: #005959;
        }
        /* Footer */
footer {
    background: linear-gradient(to bottom, #B0E0E6, #008080);
    color: white;
    text-align: center;
    padding: 10px;
    position: relative;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
    <!-- Navbar -->
<nav>
    <div class="container">
        <a href="<?php echo site_url('home'); ?>"> 
            <!-- Logo yang bisa di klik untuk kembali ke home -->
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" style="height: 80px; width: auto;">
        </a>
        <ul>
            <li><a href="<?php echo site_url('apartment'); ?>">Our Room</a></li>
            <li><a href="<?php echo site_url('about'); ?>">About Us</a></li>
            <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
            <li>
                <!-- Button "Booking Sekarang" yang beda sendiri -->
                <a href="<?php echo site_url('booking'); ?>" class="booking-btn animated-btn">Booking Sekarang</a>
                </li>
        </ul>
    </div>
</nav>

    <div class="container-details">
        <div class="room-image">
            <img src="<?php echo base_url('assets/images/' . $room['image']); ?>" alt="<?php echo $room['name']; ?>">
        </div>
        <h1><?php echo $room['name']; ?></h1>
        <p><?php echo $room['description']; ?></p>
        <p><strong>Harga: <?php echo $room['price']; ?></strong></p>
        <h3>Fasilitas:</h3>
        <ul>
            <?php foreach ($room['facilities'] as $facility): ?>
                <li><?php echo $facility; ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="<?php echo site_url('apartment'); ?>" class="back-link">Kembali ke daftar kamar</a>
        <a href="<?php echo site_url('booking'); ?>" class="back-link">Pesan Sekarang!</a>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
        <p style="color: white; font-size: 20px; text-align: center;">&copy; 2024 NayaraHomes - Alfin Fauzi Habibi.</p>
        </div>
    </footer>
</body>
</html>
