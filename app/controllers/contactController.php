<?php

class Contact extends Controller {

    private $data;

    public function index() {
        $data['judul'] = 'Contact';
        $data['CS'] = $this->db('callCenter');

        $this->view('layouts/header', $data);

        $this->view('contact/home', $data);
        $this->view('contact/callCenter', $data);
        $this->view('contact/index', $data);
        
        $this->view('layouts/footer');
    }
}