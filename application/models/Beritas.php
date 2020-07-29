<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritas extends CI_Controller
{

    // List all your items
    public function index($id = null)
    {
        if (empty($id)) {
            return $this->db->get('tb_berita')->result();
        } else {
            return $this->db->get_where('tb_berita', array('berita_id' => $id))->row();
        }
    }

    // Add a new item
    public function add($data)
    {
        return $this->db->insert('tb_berita', $data);
    }

    //Update one item
    public function update($id = NULL, $data)
    {
        return $this->db->update('tb_berita', $data, array('berita_id' => $id));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        return $this->db->delete('tb_berita', array('berita_id' => $id));
    }
}

/* End of file Beritas.php */
