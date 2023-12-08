<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct(){
        parent::__construct();
        // Check login session
        if ($this->session->userdata('status') != "login") {
            redirect(base_url().'welcome?pesan=belumlogin');
        }
        $this->load->library('form_validation');
        $this->load->model('data_customer');
    }

    public function index()
    {
        $user['username'] = $this->session->userdata('username');
        $data['data_customer'] = $this->data_customer->get_data()->result();
        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('customer', $data);
        $this->load->view('footer');
        $this->load->view('source');
    }

    public function add()
    {
        $info['datatype'] = 'customer';
        $info['operation'] = 'Input';
        
        $customer_id = $this->input->post('customer_id');
        $customername = $this->input->post('customername');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact');
        $action = $this->input->post('action');

        $this->load->view('header');

        $records = $this->data_customer->get_records($customer_id)->result();
        if (count($records) == 0) {
            $data = array(
                'customer_id' => $customer_id,
                'customername' => $customername,
                'address' => $address,
                'contact' => $contact,
                'action' => $action
            );
            $action = $this->data_customer->insert_data($data, 'customer');
            $this->load->view('notifications/insert_success', $info);    
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }
        $this->load->view('source');    
    }

    public function edit()
    {
        $info['datatype'] = 'customer';
        $info['operation'] = 'Ubah';
        
        $customer_id = $this->input->post('customer_id');
        $customername = $this->input->post('customername');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact');
        $action = $this->input->post('action');

        $this->load->view('header');

        $data = array(
            'customer_id' => $customer_id,
            'customername' => $customername,
            'address' => $address,
            'contact' => $contact,
            'action' => $action
        );
        $action = $this->data_customer->update_data($customer_id, $data, 'customer');

        if ($action) {
            $this->load->view('notifications/insert_success', $info);
        } else {
            $this->load->view('notifications/insert_failed', $info);
        }

        $this->load->view('source');    
    }

    public function delete()
    {
        $info['datatype'] = 'customer';

        $customer_id = $this->uri->segment('3');

        $this->load->view('header');

        $action = $this->data_customer->delete_data($customer_id, 'customer');
        if ($action) {
            $this->load->view('notifications/delete_success', $info);
        } else {
            $this->load->view('notifications/delete_failed', $info);
        }

        $this->load->view('source');
    }

    public function report()
    {
        $user['username'] = $this->session->userdata('username');
        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('laporan/laporan_filter_customer');
        $this->load->view('footer');
        $this->load->view('source');
    }

    public function report_filter()
    {
        $user['username'] = $this->session->userdata('username');
        
        $address = $this->input->post('address');

        if ($address == "All") {
            $data['data_customer'] = $this->data_customer->get_data()->result();
        } else {
            $data['data_customer'] = $this->db->query("SELECT * FROM customer WHERE address = '$address'")->result();
        }

        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('laporan/laporan_customer', $data);
        $this->load->view('footer');
        $this->load->view('source');
    }

    public function print() {    

        $address = $this->uri->segment('3');

        $data['address'] = $address;
        if ($address == "All") {
            $data['data_customer'] = $this->data_customer->get_data()->result();
        } else {
            $data['data_customer'] = $this->db->query("SELECT * FROM customer WHERE address = '$address'")->result();
        }
        
        $this->load->view('print/customer', $data);
    }

    public function print_pdf() {
        $this->load->library('dompdf_gen');
        
        $address = $this->uri->segment('3');
    
        $data['address'] = $address;
        if ($address == "All") {
            $data['data_customer'] = $this->data_customer->get_data()->result();
        } else {
            $data['data_customer'] = $this->db->query("SELECT * FROM customer WHERE address = '$address'")->result();
        }
        
        $html = $this->load->view('pdf/customer', $data, true);
    
        $this->dompdf->load_html($html);
    
        $paper_size = 'A4';
        $orientation = 'landscape';
        $this->dompdf->set_paper($paper_size, $orientation);
    
        $this->dompdf->render();
    
        $this->dompdf->stream("customer_report.pdf", array("Attachment" => 0));
    }
    
}