<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {

    public function get_bahan(){
        return $this->db->get('bahan');
    }

    public function get_menu(){
        return $this->db->get('menu');
    }

    public function insert_training($menu, $bahan){
        $data = array(
            'id_menu' => $menu
        );
        $this->db->insert('train', $data);
        $id_train = $this->db->insert_id();
        foreach($bahan as $dbahan){
            $arr = array(
                'id_train' => $id_train,
                'id_bahan' => $dbahan
            );
            $this->db->insert('trainitem', $arr);
        }
    }

    public function get_train(){
        // $this->db->select('*');
        // $this->db->from('train');
        // $this->db->join('trainitem', 'train.id_train = trainitem.id_train');
        // $query = $this->db->get();
        // return $q = $query->result_array();
        $this->db->join('menu', 'menu.id_menu=train.id_menu');
        $train = $this->db->get('train')->result();
        foreach($train as $data){
            $trainitem = $this->db->query("SELECT * FROM trainitem JOIN bahan ON trainitem.id_bahan=bahan.id_bahan WHERE id_train = ".$data->id_train)->result();
            $data->trainitem = $trainitem;
        }
        return $train;
    }

}