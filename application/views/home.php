<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Apartemen Kami</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Link CSS -->
</head>
<style>


    /* Reset CSS */

/* Main Content */
.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    text-align: center;
}

h1 {
    color: #008080;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
    color: #333;
    margin-bottom: 20px;
}

.room-gallery {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.room-gallery img {
    max-width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

    .hero-banner {
        width: 100%;
        height: auto;
        position: relative;
        overflow: hidden;
    }

    .banner-img {
        width: 100%;
        height: 400px;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .banner-img.active {
        opacity: 1;
        position: relative;
    }
    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Warna hitam dengan transparansi */
    z-index: 1; /* Supaya overlay di atas gambar */
}
    .banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Untuk memposisikan teks di tengah */
    color: white;
    text-align: center;
    z-index: 1; /* Supaya teks di atas gambar */
}

.banner-text h1 {
    font-size: 3em;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Menambah efek bayangan pada teks */
}

.banner-text p {
    font-size: 1.5em;
    margin-top: 10px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Menambah efek bayangan pada teks */
}

    .room-gallery img {
        width: 30%;
        margin-right: 5px;
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
<div class="hero-banner">
<div class="overlay"></div> <!-- Overlay gelap -->
    <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Hero Banner 1" class="banner-img active">
    <img src="<?php echo base_url('assets/images/room2.png'); ?>" alt="Hero Banner 2" class="banner-img">
    <img src="<?php echo base_url('assets/images/room3.png'); ?>" alt="Hero Banner 3" class="banner-img">
    
    <!-- Tambahkan teks di dalam hero-banner -->
    <div class="banner-text">
        <h1>Nayara Homes</h1>
        <p style="color: white;">Tempat terbaik untuk pengalaman menginap Anda!</p>
    </div>
    </div>    
    <br>
    <h2>Contoh Ruangan Kami</h2>
    <div class="room-gallery">
        <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Room 1">
        <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Room 2">
        <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Room 3">
    </div>
    </div>
    <h2 style="text-align: center;">Lokasi Kami</h2>
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0047085207734!2d106.82158110944766!3d-6.393392993570423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec0869d53b97%3A0x816a4fa460b11be9!2sSaladdin%20Mansion%20Apartment!5e0!3m2!1sen!2sid!4v1728041966265!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<br>
    <!-- Footer -->
<footer>
        <div class="container">
        <p style="color: white; font-size: 20px; text-align: center;">&copy; 2024 NayaraHomes - Alfin Fauzi Habibi.</p>
        </div>
    </footer>
</body>

<script>
   let currentIndex = 0;
    const banners = document.querySelectorAll('.hero-banner .banner-img');

    function showNextBanner() {
        // Hide current banner
        banners[currentIndex].classList.remove('active');
        
        // Calculate next banner index
        currentIndex = (currentIndex + 1) % banners.length;
        
        // Show next banner
        banners[currentIndex].classList.add('active');
    }

    // Change banner every 5 seconds
    setInterval(showNextBanner, 5000);
</script>
</html>
