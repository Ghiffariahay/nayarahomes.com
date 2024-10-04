<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Room - Naraya Homes</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<style>
    
/* Main Container */
.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
}

/* Room Container */
.room-container {
    display: flex;
    background-color: #f9f9f9;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.room-container:hover {
    transform: scale(1.03);
}

.room-link {
    display: flex; /* Agar gambar dan info berada dalam satu baris */
    text-decoration: none; /* Menghapus garis bawah dari link */
    color: inherit; /* Menggunakan warna teks yang sama dengan elemen dalam link */
}

.room-link img {
    width: 300px;
    height: auto;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.room-info {
    padding: 20px;
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


    <!-- Main Content -->
    <div class="container">
    <h1>Tipe-Tipe Kamar di Nayara Homes</h1>
    <br>
    <!-- Room 1 -->
    <div class="room-container">
        <a href="<?php echo site_url('room/1'); ?>" class="room-link">
            <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Standard Room">
            <div class="room-info">
                <h2>Standard Room</h2>
                <p>Tipe kamar standar dengan fasilitas lengkap, cocok untuk Anda yang menginginkan kenyamanan dengan harga terjangkau.</p>
                <p><strong>Harga: Rp 500.000,- / malam</strong></p>
            </div>
        </a>
    </div>

    <!-- Room 2 -->
    <div class="room-container">
        <a href="<?php echo site_url('room/2'); ?>" class="room-link">
            <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Deluxe Room">
            <div class="room-info">
                <h2>Deluxe Room</h2>
                <p>Kamar yang lebih luas dengan pemandangan indah, ideal untuk pasangan atau keluarga kecil.</p>
                <p><strong>Harga: Rp 750.000,- / malam</strong></p>
            </div>
        </a>
    </div>

    <!-- Room 3 -->
    <div class="room-container">
        <a href="<?php echo site_url('room/3'); ?>" class="room-link">
            <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Suite Room">
            <div class="room-info">
                <h2>Suite Room</h2>
                <p>Kamar premium dengan ruang tamu terpisah, cocok untuk pengalaman menginap yang mewah dan eksklusif.</p>
                <p><strong>Harga: Rp 1.200.000,- / malam</strong></p>
            </div>
        </a>
    </div>
</div>

<!-- Footer -->
<footer>
        <div class="container">
        <p style="color: white; font-size: 20px; text-align: center;">&copy; 2024 NayaraHomes - Alfin Fauzi Habibi.</p>
        </div>
    </footer>
</body>
</html>
