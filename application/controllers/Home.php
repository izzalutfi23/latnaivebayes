<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mhome');
    }

    // Halaman Home
	public function index()
	{
        $bahan = $this->db->get('bahan');
        $training = $this->db->get('train');
        $jmlbahan = $bahan->num_rows();
        $jmltrain = $training->num_rows();
        $data = array(
            'title' => 'Home',
            'bahan' => $jmlbahan,
            'train' => $jmltrain
        );
        $this->load->view('_header', $data);
        $this->load->view('page/home');
        $this->load->view('_footer');
    }
    
    // Halaman Data Training
    public function training(){
        $train = $this->Mhome->get_train();
        $data = array(
            'title' => 'Data Training',
            'train' => $train
        );
        $this->load->view('_header', $data);
        $this->load->view('page/training');
        $this->load->view('_footer');
    }

    // Halaman Tambah Data Training
    public function adddatatraining(){
        $bahan = $this->Mhome->get_bahan()->result();
        $data = array(
            'title' => 'Tambah Data Training',
            'bahan' => $bahan,
        );
        $this->load->view('_header', $data);
        $this->load->view('page/addtraining');
        $this->load->view('_footer');
    }

    // Method Proses Tambah Data Training
    public function create(){
        $menu = $this->input->post('menu');
        $bahan = $this->input->post('id_bahan');
        $this->Mhome->insert_training($menu, $bahan);
        redirect('home/training');
    }

    // Halaman Edit Data Training
    public function edittrain($id){
        $train = $this->Mhome->get_trainbyid($id);
        $bahan = $this->Mhome->get_bahan()->result();
        $data = array(
            'title' => 'Edit Data Training',
            'bahan' => $bahan,
            'train' => $train
        );
        $this->load->view('_header', $data);
        $this->load->view('page/trainedit');
        $this->load->view('_footer');
    }

    // Method Proses Edit Data Training
    public function editaction(){
        $menu = $this->input->post('menu');
        $idtrain = $this->input->post('id');
        $bahan = $this->input->post('id_bahan');
        $this->Mhome->edit_training($menu, $bahan, $idtrain);
        redirect('home/training');
    }

    // Method Hapus Data Training
    public function deltrain($id){
        $this->Mhome->deltrain($id);
        redirect('home/training');
    }

    // Halaman Data Uji
    public function uji(){
        $bahan = $this->Mhome->get_bahan()->result();
        $data = array(
            'title' => 'Data Uji',
            'bahan' => $bahan
        );
        $this->load->view('_header', $data);
        $this->load->view('page/uji');
        $this->load->view('_footer');
    }

    // Method Untuk Menghitung Data Uji Menggunakan Teorema Naive Bayes
    public function postuji(){
        // Mendapatkan bahan masakan dari inputan
        $bahan = $this->input->post('id_bahan');
        // Mengambil data training dari database
        $train = $this->Mhome->get_train();
        // Melakukan perulangan data training
        foreach($train as $data){ 
            $total = 0;
            // Melakukan perulangan bahan masakan dari data train
            foreach($data->trainitem as $dtrain){
                $jmlbahan = 0;
                $jmlrow = 0;
                foreach($bahan as $darr){
                    // Menghitung jumlah bahan yang muncul dari data training
                    $jmlrow = $jmlrow+1;
                    if($dtrain->id_bahan==$darr&&$dtrain->id_bahan!=19){
                        // Menghitung jumlah data bahan inputan yang sama dengan data bahan pada data training
                        $jmlbahan = $jmlbahan+1;
                    }
                }
                // Menghitung total
                $hitung = $jmlbahan/$jmlrow;
                $total = $total+$hitung;
            }
            // Raw input - total hitungan
            $ttotal = 1-$total;
            $data->hasil = $ttotal;
        }


        // Mengurutkan hasil dari nilai yang paling kecil
        $hasil = array();
        foreach($train as $key => $row)
        {
            $hasil[$key] = $row->hasil;
        }
        array_multisort($hasil, SORT_ASC, $train);

        // Membatasi nilai yang muncul max 3
        $limit = array_slice($train, 0, 3);

        $data = array(
            'title' => 'Post Uji',
            'uji' => $limit
        );
        $this->load->view('_header', $data);
        $this->load->view('page/hasil');
        $this->load->view('_footer');
    }

    // Halaman Bahan
    public function bahan(){
        $bahan = $this->Mhome->get_bahan()->result();
        $data = array(
            'title' => 'Bahan Masakan',
            'bahan' => $bahan
        );
        $this->load->view('_header', $data);
        $this->load->view('page/bahan');
        $this->load->view('_footer');
    }

    // Halaman Form Tambah Bahan
    public function addbahan(){
        $data = array(
            'title' => 'Tambah Bahan Masakan'
        );
        $this->load->view('_header', $data);
        $this->load->view('page/addbahan');
        $this->load->view('_footer');
    }

    // Method untuk menambahkan bahan ke dalam database
    public function postbahan(){
        $data = [
            'bahan' => $this->input->post('bahan')
        ];
        $this->Mhome->insertbahan($data);
        redirect('home/bahan');
    }

    public function delbahan($id){
        $this->Mhome->delbahan($id);
        redirect('home/bahan');
    }
}
