<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Link CSS -->
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #e5edf2;
    color: #333;
}

.container-box {
    max-width: 1200px;
    margin: 20px auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.contact-info, .contact-form {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 48%;
}

.contact-info h2, .contact-form h2 {
    color: #008080;
    font-size: 24px;
    margin-bottom: 15px;
}

.contact-info p {
    margin-bottom: 20px;
    line-height: 1.6;
}

.contact-details .contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.contact-details .contact-item img {
    width: 30px;
    height: 30px;
    margin-right: 15px;
}

.contact-details .contact-item p {
    margin: 0;
    font-weight: bold;
}

.contact-details .contact-item span {
    font-size: 18px;
    color: #333;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input, .contact-form textarea, .contact-form select {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

.contact-form button {
    padding: 10px;
    background-color: #008080;
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form button:hover {
    background-color: #ffa500;
}

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

    <section class="contact-section">
        <div class="container-box">
            <div class="contact-info">
                <h2>Nayara Homes Management</h2>
                <p>Silakan hubungi kontak di bawah ini segala informasi terkait layanan Nayara Homes.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <img src="https://www.citypng.com/public/uploads/preview/-41601135752pjhrn8rpqo.png" alt="WhatsApp">
                        <div>
                            <p>WhatsApp</p>
                            <span>+62 857-1063-0117</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <img src="https://immersivedesignstudios.com/wp-content/uploads/2017/05/email-logo-black-png-pictures-1.png" alt="Email">
                        <div>
                            <p>Email</p>
                            <span>nayarahomes@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <img src="https://www.citypng.com/public/uploads/preview/address-location-map-black-icon-symbol-download-png-11640206707qbbrqva5rt.png" alt="Alamat">
                        <div>
                            <p>Alamat</p>
                            <span>Kota Depok, Jawa Barat 1642</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h2>Hubungi Kami</h2>
                <form action="#" method="post">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Nama" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>

                    <label for="topic">Topik</label>
                    <select id="topic" name="topic">
                        <option value="pengaduan">Pengaduan</option>
                        <option value="pertanyaan">Pertanyaan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>

                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" placeholder="Pesan" required></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <br>
        <!-- Footer -->
    <footer>
        <div class="container">
        <p style="color: white; font-size: 20px; text-align: center;">&copy; 2024 NayaraHomes - Alfin Fauzi Habibi.</p>
        </div>
    </footer>
</body>
</html>
        