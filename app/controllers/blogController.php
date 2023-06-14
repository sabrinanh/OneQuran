<?php

class Blog extends Controller {

    private $data;

    public function index() {
        $data['judul'] = 'Articles';
        $data['articles'] = $this->db('articles');

        $this->view('layouts/header', $data);

        $this->view('blog/home', $data);
        $this->view('blog/index', $data);
        
        $this->view('layouts/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Blog';
        $data['articles'] = $this->db('articles');
        $data['article'] = $this->db('articles')->getArticle($id);
        $data['id'] = $id;

        $this->view('layouts/header', $data);

        $this->view('blog/home', $data);
        $this->view('blog/detail', $data);
        $this->view('home/blog', $data);
        
        $this->view('layouts/footer');
    }
}