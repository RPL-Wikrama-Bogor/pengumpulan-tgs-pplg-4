<?php

class Home extends Controller {
    public function index()
    {
        $data['pinjam'] = $this->model('PinjamModel')->getAllItem();   
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}