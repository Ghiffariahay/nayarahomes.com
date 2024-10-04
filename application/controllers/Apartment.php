<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartment extends CI_Controller {

    public function index() {
        // Load the Our Room view
        $this->load->view('our_room'); // Panggil view our_room.php
    }
}
