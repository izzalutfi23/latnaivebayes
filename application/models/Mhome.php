<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {

    public function get_bahan(){
        return $this->db->get('bahan');
    }

    public function get_train(){
        $train = $this->db->get('train')->result();
        foreach($train as $data){
            $trainitem = $this->db->query("SELECT * FROM trainitem JOIN bahan ON trainitem.id_bahan=bahan.id_bahan WHERE id_train = ".$data->id_train)->result();
            $data->trainitem = $trainitem;
        }
        return $train;
    }

    public function get_trainbyid($id){
        $train = $this->db->get_where('train', ['id_train' => $id])->row();
        $trainitem = $this->db->query("SELECT * FROM trainitem JOIN bahan ON trainitem.id_bahan=bahan.id_bahan WHERE id_train = ".$train->id_train)->result();
        $train->trainitem = $trainitem;
        return $train;
    }

    public function insert_training($menu, $bahan){
        $data = array(
            'menu' => $menu
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

    public function edit_training($menu, $bahan, $idtrain){
        $datamenu = array(
            'menu' => $menu
        );
        $this->db->update('train', $datamenu, ['id_train'=>$idtrain]);
        $this->db->query("DELETE FROM trainitem WHERE id_train='$idtrain'");
        foreach($bahan as $dbahan){
            $arr = array(
                'id_train' => $idtrain,
                'id_bahan' => $dbahan
            );
            $this->db->insert('trainitem', $arr);
        }
    }

    public function deltrain($id){
        $this->db->where('id_train', $id);
        $this->db->delete('train');
    }

    public function insertbahan($data){
        $this->db->insert('bahan', $data);
    }

    public function delbahan($id){
        $this->db->where('id_bahan', $id);
        $this->db->delete('bahan');
    }

}