<?php

class m_import extends CI_Model
{

    function select()
    {
        $query = $this->db->get('tbinput');
        return $query;
    }

    function insert($data)
    {
        $this->db->empty_table('tbinput');
        $this->db->insert_batch('tbinput', $data);
    }

    public function single($field, $value)
    {
        $data = $this->db->where($field, $value)->get('tbinput')->row();
        return $data;
    }

    public function insert_single($data)
    {
        $this->db->insert('tbinput', $data);
    }

    function update($id, $data) 
    {
        $this->db->where('idbilling', $id);
        $this->db->update('tbinput', $data);
    }
}
