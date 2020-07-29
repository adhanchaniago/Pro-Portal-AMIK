<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penelitians extends CI_Controller
{

    // List all your items
    public function index($id = null)
    {
        if (empty($id)) {
            $this->db->join('tb_dosen', 'tb_dosen.dosen_id = tb_penelitian.dosen_id', 'left');
            $this->db->join('tb_admin', 'tb_admin.admin_id = tb_penelitian.admin_id', 'left');
            return $this->db->get('tb_penelitian')->result();
        } else {
            $this->db->join('tb_dosen', 'tb_dosen.dosen_id = tb_penelitian.dosen_id', 'left');
            return $this->db->get_where('tb_penelitian', array('penelitian_id' => $id))->row();
            // $this->db->join('tb_admin', 'tb_admin.admin_id = tb_penelitian.admin_id', 'left');
        }
    }

    // Add a new item
    public function add($data)
    {
        return $this->db->insert('tb_penelitian', $data);
    }

    //Update one item
    public function update($id = NULL, $data)
    {
        return $this->db->update('tb_penelitian', $data, array('penelitian_id' => $id));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        return $this->db->delete('tb_penelitian', array('penelitian_id' => $id));
    }
}

/* End of file Penelitians.php */
