<?php

//controller home adalah controller default saat user tidak memasukkan controller, method dan id, di url
//controller home extend ke /core/Controller.php
class Course extends Controller {
    public function index() {
        $data['judul'] = 'Courses';
        $data['courses'] = $this->db('courses');
        
        $this->view('layouts/header', $data);

        $this->view('course/home', $data);
        $this->view('course/about', $data);
        $this->view('course/index', $data);
        
        $this->view('layouts/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Course';
        $data['courses'] = $this->db('courses');
        $data['id'] = $id;

        $this->view('layouts/header', $data);

        $this->view('course/home', $data);
        $this->view('course/detail', $data);
        $this->view('course/detail-paket', $data);
        $this->view('course/detail-deskripsi', $data);
        $this->view('course/form', $data);
        $this->view('home/review', $data);
        $this->view('home/courses', $data);
        
        $this->view('layouts/footer');
    }
}