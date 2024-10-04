<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function index() {
        $this->load->view('booking'); // Load view untuk form booking
    }

    public function submit_booking() {
        // Ambil data dari form
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $room_type = $this->input->post('room_type');
        $durasi = $this->input->post('durasi');
        $tanggal = $this->input->post('tanggal');
        $time = $this->input->post('time');

        // Format pesan untuk WhatsApp
        $message = "Halo, saya ingin booking ruangan.\n";
        $message .= "Nama: $name\n";
        $message .= "No. HP: $phone\n";
        $message .= "Tipe Ruangan: $room_type\n";
        $message .= "Durasi: $durasi\n";
        $message .= "Tanggal Pemakaian: $tanggal\n";
        $message .= "Waktu Kedatangan: $time";

        // Encode URL untuk kirim pesan ke WhatsApp
        $whatsapp_url = "https://wa.me/6285882136492?text=" . urlencode($message); // Ganti nomor dengan yang dituju

        // Redirect ke WhatsApp
        redirect($whatsapp_url);
    }
}
