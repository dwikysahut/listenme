<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

    public function getDataTransaction()
    {   
        $this->db->select('id_transaksi, users.id, users.name, image_transaction.name as nameg, total');
        $this->db->from('transaction');
        $this->db->join('users', 'transaction.id_user = users.id');
        $this->db->join('image_transaction', 'transaction.id_image = image_transaction.id_image');
        $this->db->order_by('id_transaksi','ASC');

        $result = $this->db->get();
        return $result->result_array();
    }

    public function update_user_trans($id){
        $this->db->set('id_status', 2);
        $this->db->where('id', $id);
        $this->db->update('users');
    }
}
?>