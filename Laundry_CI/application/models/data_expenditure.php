<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_expenditure extends CI_Model {

    public function get_data() {
        $this->db->select('*');
        $this->db->from('expenditure');
        $this->db->join('employee', 'employee.employee_id = expenditure.employee_ID');
        return $this->db->get();
    }

    public function count_rows() {
        return $this->db->count_all('expenditure');
    }

    public function get_records($where) {
        $this->db->where($where);
        return $this->db->get('expenditure');
    }

    public function filter($from, $to) {
        return $this->db->query("SELECT * FROM expenditure JOIN employee ON expenditure.employee_ID = employee.employee_id WHERE date >= '$from' AND date <= '$to'");
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

    public function total_salary() {
        $result = $this->db->query("SELECT SUM(monthly_salary) AS total_salary FROM employee WHERE active = 1")->result();
        return $result[0]->total_salary;
    }

    public function total_spend_year() {
        $result = $this->db->query("SELECT SUM(total) AS total_expense FROM expenditure WHERE YEAR(date) = YEAR(CURDATE())")->result();
        return $result[0]->total_expense;
    }
}
