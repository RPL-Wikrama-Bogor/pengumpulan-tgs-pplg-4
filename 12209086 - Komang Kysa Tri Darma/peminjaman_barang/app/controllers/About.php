<?php

class About extends Controller{
    public function index($nama = 'Komang', $apa = 'Mengevaluasi Diri',$umur = 16){
        $data['nama']= $nama;
        $data['apa']= $apa;
        $data['umur']= $umur;
        $data['judul'] = 'About';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page($nama = "Komang", $sekolah = "Sekolah Iblis", $wanna = "Fullstack Dev"){
        $data['judul'] = 'Page';
        $data['gambar'] = 'iruma.jpeg';
        $data['nama'] = $nama;
        $data['sekolah'] = $sekolah;
        $data['wanna'] = $wanna;
        $this->view('templates/header',$data);
        $this->view('about/page',$data);
        $this->view('templates/footer');
    }
}