<?php

//controller home adalah controller default saat user tidak memasukkan controller, method dan id, di url
//controller home extend ke /core/Controller.php
class Teacher extends Controller {
    public function index() {
        $data['judul'] = 'Teachers';
        $data['teachers'] = $this->db('teachers');
        
        $this->view('layouts/header', $data);

        $this->view('teacher/home', $data);
        $this->view('teacher/about', $data);
        $this->view('teacher/index', $data);
        
        $this->view('layouts/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Teacher';
        $data['teachers'] = $this->db('teachers');
        $data['teacher'] = $this->db('teachers')->getTeacher($id);
        $data['id'] = $id;
    
        $this->view('layouts/header', $data);

        $this->view('teacher/home', $data);
        $this->view('teacher/detail', $data);
        $this->view('home/teacher', $data);
        
        $this->view('layouts/footer');
    }
}