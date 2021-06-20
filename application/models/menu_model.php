<?php

class menu_model extends CI_model {

    public function getAllMenu()
    {
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function getMenuByID($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
                        ->limit(1)
                        ->get('menu');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }

}