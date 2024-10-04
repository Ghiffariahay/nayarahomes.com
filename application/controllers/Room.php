<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    // Simulasi data room
    private $rooms = [
        1 => [
            'name' => 'Standard Room',
            'description' => 'Tipe kamar standar dengan fasilitas lengkap, cocok untuk Anda yang menginginkan kenyamanan dengan harga terjangkau.',
            'price' => 'Rp 500.000,- / malam',
            'facilities' => ['Wi-Fi gratis', 'AC', 'Televisi', 'Kamar mandi dalam'],
            'image' => 'room1.png'
        ],
        2 => [
            'name' => 'Deluxe Room',
            'description' => 'Kamar yang lebih luas dengan pemandangan indah, ideal untuk pasangan atau keluarga kecil.',
            'price' => 'Rp 750.000,- / malam',
            'facilities' => ['Wi-Fi gratis', 'AC', 'Televisi', 'Balkon', 'Kamar mandi dalam'],
            'image' => 'room2.png'
        ],
        3 => [
            'name' => 'Suite Room',
            'description' => 'Kamar premium dengan ruang tamu terpisah, cocok untuk pengalaman menginap yang mewah dan eksklusif.',
            'price' => 'Rp 1.200.000,- / malam',
            'facilities' => ['Wi-Fi gratis', 'AC', 'Televisi', 'Ruang tamu', 'Balkon', 'Kamar mandi dalam'],
            'image' => 'room3.png'
        ]
    ];

    public function detail($id) {
        // Cek apakah room ada
        if (isset($this->rooms[$id])) {
            $data['room'] = $this->rooms[$id];
            $this->load->view('room_detail_view', $data);
        } else {
            show_404(); // Tampilkan error jika room tidak ditemukan
        }
    }
}
