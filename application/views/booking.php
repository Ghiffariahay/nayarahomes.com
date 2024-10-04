<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Room - Nayara Homes</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Link CSS -->
    <style>
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .form-group input:focus {
            border-color: #ff4c4c;
            outline: none;
        }
        button {
            background-color: #ff4c4c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #ff1a1a;
        }

        /* Room Selection Styling */
        .room-selection {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .room-selection label {
            position: relative;
            display: inline-block;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .room-selection label:hover {
            transform: scale(1.05);
        }
        .room-selection img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            border: 3px solid transparent;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .room-selection input[type="radio"] {
            display: none;
        }
        .room-selection input[type="radio"]:checked + img {
            border-color: #ff4c4c;
            box-shadow: 0px 4px 20px rgba(255, 76, 76, 0.4);
        }

        footer {
            background: linear-gradient(to bottom, #B0E0E6, #008080);
            color: white;
            text-align: center;
            padding: 15px 0;
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

<div class="container">
    <h1>Booking Room</h1>
    <form action="<?php echo site_url('booking/submit_booking'); ?>" method="post">
        
        <!-- Room Selection -->
        <div class="form-group">
            <label for="room_type">Pilih Tipe Ruangan:</label>
            <div class="room-selection">
                <label>
                    <input type="radio" name="room_type" value="Deluxe" required>
                    <img src="<?php echo base_url('assets/images/room1.png'); ?>" alt="Deluxe Room">
                </label>
                <label>
                    <input type="radio" name="room_type" value="Suite" required>
                    <img src="<?php echo base_url('assets/images/room2.png'); ?>" alt="Suite Room">
                </label>
                <label>
                    <input type="radio" name="room_type" value="Standard" required>
                    <img src="<?php echo base_url('assets/images/room3.png'); ?>" alt="Standard Room">
                </label>
            </div>
        </div>

        <!-- Personal Information -->
        <div class="form-group">
            <label for="name">Nama Lengkap:</label>
            <input type="text" name="name" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="form-group">
            <label for="phone">No. HP:</label>
            <input type="text" name="phone" placeholder="Masukkan no. HP" required>
        </div>
        <div class="form-group">
        <label for="durasi">Durasi Pemakaian</label>
        <select name="durasi" required>
            <option value="" disabled selected>Pilih Durasi Pemakaian</option>
            <option value="3 Jam">3 Jam</option>
            <option value="6 Jam">6 Jam</option>
            <option value="12 Jam">12 Jam</option>
            <option value="Fullday">Fullday</option>
        </select>
        </div>
            <div class="form-group">
            <label for="tanggal">Tanggal Pemakaian</label>
            <input type="date" name="tanggal" placeholder="Masukkan Tanggal Pemakaian" required>
        </div>
        <div class="form-group">
            <label for="jam">Waktu Kedatangan</label>
            <input type="time" name="time" placeholder="Masukkan Waktu Kedatangan" required>
        </div>
        <!-- Submit Button -->
        <button type="submit">Booking Sekarang</button>
    </form>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        &copy; 2024 NayaraHomes - Alfin Fauzi Habibi.
    </div>
</footer>

</body>
</html>
