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
        $totalkbm = 0;
        foreach($train as $data){
            $kbm = 0;
            foreach($data->trainitem as $dtrain){
                if($dtrain->id_bahan!=19){
                    $kbm = $kbm+1;
                }
            }
            $totalkbm = $totalkbm+$kbm;
        }
        
        foreach($train as $data){
            $kbm = 0;
            foreach($data->trainitem as $dtrain){
                if($dtrain->id_bahan!=19){
                    $kbm = $kbm+1;
                }
            }
            $pbm = $kbm/$totalkbm;
            echo $pbm;
            print("<br>");
        }
    }

    public function hitung(){
        $bawang = 1;
        $tomat = 3;
        $cabe = 2;
        $daging = 14;
        $arr = [
            0 => 1,
            1 => 3,
            2 => 2,
            3 => 14
        ];
        $train = $this->Mhome->get_train();
        foreach($train as $data){
            $total = 0;
            foreach($data->trainitem as $dtrain){
                $jmlbahan = 0;
                $jmlrow = 4;
                foreach($arr as $darr){
                    if($dtrain->id_bahan==$darr){
                        $jmlbahan = $jmlbahan+1;
                    }
                }
                $hitung = $jmlbahan/$jmlrow;
                $total = $total+$hitung;
                echo $hitung.', ';
            }
            echo '='.$total;
            print("<br>");
        }
    }
}
