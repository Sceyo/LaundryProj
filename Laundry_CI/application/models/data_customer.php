<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_customer extends CI_Model {

    public function get_data() {
        return $this->db->get('customer');
    }

    public function count_rows() {
        return $this->db->count_all('customer');
    }

    public function get_records($customer_id) {
        $where = array('customer_id' => $customer_id);
        $this->db->where($where);
        return $this->db->get('customer');
    }

    public function insert_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function update_data($customer_id, $data, $table) {
        $where = array('customer_id' => $customer_id);
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function delete_data($customer_id, $table) {
        $where = array('customer_id' => $customer_id);
        $this->db->where($where);
        return $this->db->delete($table);
    }
}
