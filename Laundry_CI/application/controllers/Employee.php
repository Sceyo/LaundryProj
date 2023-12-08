<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct() {
        parent::__construct();
        // check login session
        if ($this->session->userdata('status') != "login") {
            redirect(base_url().'welcome?pesan=belumlogin');
        };
        $this->load->library('form_validation');
        $this->load->model('data_employee');
    }

    public function index() {
        $user['username'] = $this->session->userdata('username');
        $data['data_employee'] = $this->data_employee->get_data()->result();
        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('employee', $data); // Assuming your view is named 'employee'
        $this->load->view('footer');
        $this->load->view('source');
    }

    public function add() {
        $info['datatype'] = 'employee';
        $info['operation'] = 'Input';

        $employee_id = $this->input->post('employee_id');
        $name_employee = $this->input->post('name');
        $gender = $this->input->post('gender');
        $address = $this->input->post('address');
        $number = $this->input->post('number');
        $salary = $this->input->post('salary');
        $joinDate = $this->input->post('joinDate');
        $endDate = $this->input->post('endDate');

        $actions = 0;

        if ($endDate == null) {
            $actions = 1;
        }

        $this->load->view('header');

        $records = $this->data_employee->get_records($employee_id)->result();
        if (count($records) == 0) {
            $data = array(
                'employee_id' => $employee_id,
                'name_employee' => $name_employee,
                'gender' => $gender,
                'address' => $address,
                'number' => $number,
                'salary' => $salary,
                'joinDate' => $joinDate,
                'endDate' => $endDate,
                'actions' => $actions
            );
            $action = $this->data_employee->insert_data($data, 'employee');
            $this->load->view('notifications/insert_success', $info);
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }
        $this->load->view('source');
    }

    public function edit() {
        $info['datatype'] = 'employee';
        $info['operation'] = 'edit';

        $employee_id = $this->input->post('employee_id');
        $name_employee = $this->input->post('name');
        $gender = $this->input->post('gender');
        $address = $this->input->post('address');
        $number = $this->input->post('number');
        $salary = $this->input->post('salary');
        $joinDate = $this->input->post('joinDate');
        $endDate = $this->input->post('endDate');

        $actions = 0;

        if ($endDate == null) {
            $actions = 1;
        }

        $this->load->view('header');

        $data = array(
            'employee_id' => $employee_id,
            'name_employee' => $name_employee,
            'gender' => $gender,
            'address' => $address,
            'number' => $number,
            'salary' => $salary,
            'joinDate' => $joinDate,
            'endDate' => $endDate,
            'actions' => $actions
        );
        $action = $this->data_employee->update_data($employee_id, $data, 'employee');

        if ($action) {
            $this->load->view('notifications/insert_success', $info);
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }

        $this->load->view('source');
    }

    public function delete() {
        $info['datatype'] = 'employee';

        $employee_id = $this->uri->segment('3');

        $this->load->view('header');

        $action = $this->data_employee->delete_data($employee_id, 'employee');
        if ($action) {
            $this->load->view('notifications/delete_success', $info);
        } else {
            $this->load->view('notifications/delete_failed', $info);
        }

        $this->load->view('source');
    }

    public function report() {
        $user['username'] = $this->session->userdata('username');
        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('laporan/laporan_filter_employee');
        $this->load->view('footer');
        $this->load->view('source');
    }

    public function report_filter() {
        $user['username'] = $this->session->userdata('username');

        $from = $this->input->post('from');
        $to = $this->input->post('to');

        $data['data_employee'] = $this->data_employee->filter($from, $to)->result();

        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('laporan/laporan_employee', $data);
        $this->load->view('footer');
        $this->load->view('source');
    }

    function print() {

        $from = $this->uri->segment('3');
        $to = $this->uri->segment('4');

        $data['from'] = $from;
        $data['to'] = $to;
        $data['data_employee'] = $this->data_employee->filter($from, $to)->result();

        $this->load->view('print/employee', $data);
    }

    function pdf() {
        $this->load->library('dompdf_gen');

        $from = $this->uri->segment('3');
        $to = $this->uri->segment('4');

        $data['from'] = $from;
        $data['to'] = $to;
        $data['employee_data'] = $this->data_employee->filter($from, $to)->result();

        $this->load->view('pdf/employee', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
    }
}
