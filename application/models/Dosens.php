<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosens extends CI_Controller
{

    // List all your items
    public function index($id = null)
    {
        if (empty($id)) {
            return $this->db->get('tb_dosen')->result();
        } else {
            return $this->db->get_where('tb_dosen', array('dosen_id' => $id))->row();
        }
    }

    // Add a new item
    public function add($data)
    {
        return $this->db->insert('tb_dosen', $data);
    }

    //Update one item
    public function update($id = null, $data)
    {
        return $this->db->update('tb_dosen', $data, array('dosen_id' => $id));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        return $this->db->delete('tb_dosen', array('dosen_id' => $id));
    }
}

/* End of file Dosens.php */
