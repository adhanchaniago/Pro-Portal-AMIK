<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admins extends CI_Controller
{

    // List all your items
    public function index($id = null)
    {
        if (empty($id)) {
            return $this->db->get('tb_admin')->result();
        } else {
            return $this->db->get_where('tb_admin', array('admin_id' => $id))->row();
        }
    }

    // Add a new item
    public function add($data)
    {
        return $this->db->insert('tb_admin', $data);
    }

    //Update one item
    public function update($id = NULL, $data)
    {
        return $this->db->update('tb_admin', $data, array('admin_id' => $id));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        return $this->db->delete('tb_admin', array('admin_id' => $id));
    }
}

/* End of file Admins.php */
