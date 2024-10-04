<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Naraya Homes</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Link CSS -->
</head>
<style>
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
    <!-- About Us Section -->
    <div class="container about-section">
        <h1>About Naraya Homes</h1>
        <p class="about-text">
            Naraya Homes adalah penyedia apartemen yang menawarkan kenyamanan dan kemewahan untuk pengalaman tinggal yang lebih baik.
            Dengan lokasi strategis dan fasilitas kelas atas, kami memastikan setiap penghuni merasakan kualitas hidup terbaik.
        </p>

        <div class="facilities-container">
            <h2>Fasilitas yang Kami Tawarkan</h2>
            <ul class="facilities">
                <li>Kolam renang</li>
                <li>Gym modern</li>
                <li>Area bermain anak</li>
                <li>Parkir luas</li>
                <li>Keamanan 24 jam dengan CCTV</li>
                <li>Internet berkecepatan tinggi</li>
                <li>Lounge dan ruang kerja bersama</li>
            </ul>
        </div>

        <div class="advantages-container">
            <h2>Keunggulan Naraya Homes</h2>
            <ul class="advantages">
                <li>Lokasi strategis dekat pusat perbelanjaan, restoran, dan transportasi umum</li>
                <li>Desain apartemen modern dan elegan</li>
                <li>Harga terjangkau dengan berbagai pilihan paket sewa</li>
                <li>Lingkungan yang aman dan ramah keluarga</li>
                <li>Fasilitas lengkap dan berkualitas tinggi</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
        <p style="color: white; font-size: 20px; text-align: center;">&copy; 2024 NayaraHomes - Alfin Fauzi Habibi.</p>
        </div>
    </footer>

    <!-- Script untuk Animasi -->
    <script>
        // Animasi saat scroll
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        });

        document.querySelectorAll('.about-section, .facilities-container, .advantages-container').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
