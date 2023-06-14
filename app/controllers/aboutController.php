<?php

class About extends Controller {

    private $data;

    public function index() {
        $data['judul'] = 'About';

        $this->view('layouts/header', $data);

        $this->view('about/home', $data);
        $this->view('about/index', $data);
        $this->view('about/vismis', $data);
        $this->view('about/keunggulan', $data);
        $this->view('home/review', $data);

        
        $this->view('layouts/footer');
    }
}