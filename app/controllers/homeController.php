<?php

//controller home adalah controller default saat user tidak memasukkan controller, method dan id, di url
//controller home extend ke /core/Controller.php
class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $data['teachers'] = $this->db('teachers');
        $data['articles'] = $this->db('articles');
        $data['courses'] = $this->db('courses');

        $this->view('layouts/header', $data);

        $this->view('home/home', $data);
        $this->view('home/about', $data);
        $this->view('home/subjects', $data);
        $this->view('home/courses', $data);
        $this->view('home/teacher', $data);
        $this->view('home/review', $data);
        $this->view('home/blog', $data);
        $this->view('home/contact', $data);
        
        $this->view('layouts/footer');
    }
}