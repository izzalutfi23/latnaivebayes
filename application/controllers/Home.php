<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mhome');
    }

	public function index()
	{
        $data['title'] = 'Home';
        $this->load->view('_header', $data);
        $this->load->view('page/home');
        $this->load->view('_footer');
    }
    
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

    public function adddatatraining(){
        $bahan = $this->Mhome->get_bahan()->result();
        $menu = $this->Mhome->get_menu()->result();
        $data = array(
            'title' => 'Tambah Data Training',
            'bahan' => $bahan,
            'menu' => $menu
        );
        $this->load->view('_header', $data);
        $this->load->view('page/addtraining');
        $this->load->view('_footer');
    }

    public function create(){
        $menu = $this->input->post('id_menu');
        $bahan = $this->input->post('id_bahan');
        $this->Mhome->insert_training($menu, $bahan);
        redirect('home/training');
    }

    public function train(){
        $train = $this->Mhome->get_train();
        // print_r($train);
        // print("<pre>".print_r($train,true)."</pre>");
        // foreach($train as $data){
        //     foreach($data->trainitem as $dtrain){
        //         echo $dtrain->id_bahan;
        //     }
        // }
    }
}
