<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_employee extends CI_Model {

    public function get_data() {
        return $this->db->get('employee');
    }

    public function count_rows() {
        return $this->db->count_all('employee');
    }

    public function get_records($employee_id) {
        $where = array('employee_id' => $employee_id);
        $this->db->where($where);
        return $this->db->get('employee');
    }

    public function filter($from, $to) {
        return $this->db->query("SELECT * FROM employee WHERE (endDate >= '$from' AND endDate <= '$to') OR (joinDate <= '$to' AND endDate = '0000-00-00') AND (actions <= 1)");
    }

    public function insert_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function update_data($employee_id, $data, $table) {
        $where = array('employee_id' => $employee_id);
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function delete_data($employee_id, $table) {
        $where = array('employee_id' => $employee_id);
        $this->db->where($where);
        return $this->db->delete($table);
    }
}
