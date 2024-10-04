<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartment_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat database
    }

    public function get_apartments() {
        $query = $this->db->get('apartments'); // Mengambil data dari tabel apartments
        return $query->result();
    }

    public function get_apartment($id) {
        $query = $this->db->get_where('apartments', array('id' => $id));
        return $query->row();
    }
}
