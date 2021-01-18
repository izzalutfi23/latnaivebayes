<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mhome');
    }

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
        $data = array(
            'title' => 'Tambah Data Training',
            'bahan' => $bahan,
        );
        $this->load->view('_header', $data);
        $this->load->view('page/addtraining');
        $this->load->view('_footer');
    }

    public function create(){
        $menu = $this->input->post('menu');
        $bahan = $this->input->post('id_bahan');
        $this->Mhome->insert_training($menu, $bahan);
        redirect('home/training');
    }

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

    public function editaction(){
        $menu = $this->input->post('menu');
        $idtrain = $this->input->post('id');
        $bahan = $this->input->post('id_bahan');
        $this->Mhome->edit_training($menu, $bahan, $idtrain);
        redirect('home/training');
    }

    public function deltrain($id){
        $this->Mhome->deltrain($id);
        redirect('home/training');
    }

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

    public function postuji(){
        $bahan = $this->input->post('id_bahan');
        $train = $this->Mhome->get_train();
        foreach($train as $data){
            $total = 0;
            foreach($data->trainitem as $dtrain){
                $jmlbahan = 0;
                $jmlrow = 0;
                foreach($bahan as $darr){
                    $jmlrow = $jmlrow+1;
                    if($dtrain->id_bahan==$darr&&$dtrain->id_bahan!=19){
                        $jmlbahan = $jmlbahan+1;
                    }
                }
                $hitung = $jmlbahan/$jmlrow;
                $total = $total+$hitung;
                // echo $jmlbahan.'/'.$jmlrow.'='.$hitung.', ';
            }
            // print("<br>");
            $ttotal = 1-$total;
            $data->hasil = $ttotal;
        }
        // foreach($train as $dt){
        //     print("<pre>".print_r($dt,true)."</pre>");
        // }

        $hasil = array();
        foreach($train as $key => $row)
        {
            $hasil[$key] = $row->hasil;
        }
        array_multisort($hasil, SORT_ASC, $train);

        $limit = array_slice($train, 0, 3);

        $data = array(
            'title' => 'Post Uji',
            'uji' => $limit
        );
        $this->load->view('_header', $data);
        $this->load->view('page/hasil');
        $this->load->view('_footer');
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

    public function addbahan(){
        $data = array(
            'title' => 'Tambah Bahan Masakan'
        );
        $this->load->view('_header', $data);
        $this->load->view('page/addbahan');
        $this->load->view('_footer');
    }

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
