<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transaction extends CI_Model {

    public function get_data() {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('customer', 'customer.customer_id = transaction.customer_id');
        $this->db->join('employee', 'employee.employee_id = transaction.employee_id');
        $this->db->order_by('transaction_id', 'desc');
        return $this->db->get();
    }

    public function count_rows() {
        return $this->db->count_all('transaction');
    }

    public function count_active() {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('tgl_finished', '0000-00-00');
        $num_results = $this->db->count_all_results();

        return $num_results;
    }

    public function get_records($where) {
        $this->db->where($where);
        return $this->db->get('transaction');
    }

    public function get_full_records($where) {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('customer', 'customer.customer_id = transaction.customer_id');
        $this->db->join('employee', 'employee.employee_id = transaction.employee_id');
        $this->db->where($where);
        return $this->db->get();
    }

    public function filter($from, $to) {
        return $this->db->query("SELECT * FROM `transaction`
        JOIN `employee` ON `employee`.`employee_id` = `transaction`.`employee_id`
        JOIN `customer` ON `customer`.`customer_id` = `employee`.`customer_id`
        ORDER BY `transaction_id` DESC");
    }
    

    public function insert_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        return $this->db->replace($table, $data);
    }

    public function delete_data($where, $table) {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function total_income_year() {
        $result = $this->db->query("SELECT SUM(total) AS total_income FROM transaction WHERE YEAR(tgl_order) = YEAR(CURDATE())")->result();
    
        return $result[0]->total_income;
    }
}
