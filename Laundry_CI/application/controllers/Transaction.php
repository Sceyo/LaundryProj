<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

    function __construct(){
        parent::__construct();
        // Check login session
        if ($this->session->userdata('status') != "login") {
            redirect(base_url().'welcome?pesan=belumlogin');
        }
        $this->load->library('form_validation');
        $this->load->model('data_transaction');
        $this->load->model('data_customer');
        $this->load->model('data_employee');
    }

    public function index()
    {
        $user['username'] = $this->session->userdata('username');
        $data['data_transaction'] = $this->data_transaction->get_data()->result();
        $data['data_customer'] = $this->data_customer->get_data()->result();
        $data['data_employee'] = $this->data_employee->get_data()->result();
        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('transaction', $data);
        $this->load->view('footer');
        $this->load->view('source');
    }

    public function add()
    {
        $info['datatype'] = 'transaction';
        $info['operation'] = 'Input';
        
        $customer_id = $this->input->post('customer_id');
        $employee_id = $this->input->post('employee_id');
        $weight = $this->input->post('weight');
        $tgl_order = $this->input->post('tgl_order');
        $tgl_finished =  $this->input->post('tgl_finished');

        date_default_timezone_set("Asia/Jakarta");
        $transaction_id = date('YmdHis');
        $total = $weight * 3.85;

        $this->load->view('header');

        $where = array(
            'transaction_id' => $transaction_id
        );
        $records = $this->data_transaction->get_records($where)->result();

        if (count($records) == 0) {
            $data = array(
                'transaction_id' => $transaction_id,
                'customer_id' => $customer_id,
                'employee_id' => $employee_id,
                'weight' => $weight,
                'total' => $total,
                'tgl_order' => $tgl_order,
                'tgl_finished' => $tgl_finished
            );
            $action = $this->data_transaction->insert_data($data, 'transaction');
            $this->load->view('notifications/insert_success', $info);
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }
        $this->load->view('source');
    }

    public function edit()
    {
        $info['datatype'] = 'transaction';
        $info['operation'] = 'Edit';
        
        $transaction_id = $this->input->post('transaction_id');
        $customer_id = $this->input->post('customer_id');
        $employee_id = $this->input->post('employee_id');
        $weight = $this->input->post('weight');
        $tgl_order = $this->input->post('tgl_order');
        $tgl_finished =  $this->input->post('tgl_finished');

        $total = $weight * 3.85;

        $this->load->view('header');

        $where = array(
            'transaction_id' => $transaction_id
        );
        $data = array(
            'transaction_id' => $transaction_id,
            'customer_id' => $customer_id,
            'employee_id' => $employee_id,
            'weight' => $weight,
            'total' => $total,
            'tgl_order' => $tgl_order,
            'tgl_finished' => $tgl_finished
        );
        $action = $this->data_transaction->update_data($where, $data, 'transaction');

        if ($action) {
            $this->load->view('notifications/insert_success', $info);
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }

        $this->load->view('source');
    }


    public function done()
    {
        $info['datatype'] = 'transaction';
        $info['operation'] = 'Edit';
        
        $transaction_id = $this->uri->segment('3');
        $tgl_finished = date('Y-m-d');

        $action = $this->db->query("update transaction set tgl_finished = '$tgl_finished' where transaction_id = '$transaction_id'");

        $this->load->view('header');
        if ($action) {
            $this->load->view('notifications/insert_success', $info);
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }
        $this->load->view('source');
    }
        public function delete()
    {
        $info['datatype'] = 'transaction';

        $transaction_id = $this->uri->segment('3');

        $where = array(
            'transaction_id' => $transaction_id
        );

        $this->load->view('header');

        $action = $this->data_transaction->delete_data($where, 'transaction');
        if ($action) {
            $this->load->view('notifications/delete_success', $info);
        } else {
            $this->load->view('notifications/delete_failed', $info);
        }

        $this->load->view('source');
    }
    public function print_receipt($transaction_id)
    {
        $data['transaction'] = $this->data_transaction->get_records(['transaction_id' => $transaction_id])->row();
    
        if (!$data['transaction']) {
            show_404();
        }
    
        $this->load->view('print/receipt', $data);
    }
    
}
