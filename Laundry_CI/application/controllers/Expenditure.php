<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenditure extends CI_Controller {

    function __construct(){
        parent::__construct();
        // Check login session
        if ($this->session->userdata('status') != "login") {
            redirect(base_url().'welcome?pesan=belumlogin');
        }
        $this->load->library('form_validation');
        $this->load->model('data_expenditure');
        $this->load->model('data_employee');
    }

    public function index()
    {
        $user['username'] = $this->session->userdata('username');
        $data['data_expenditure'] = $this->data_expenditure->get_data()->result();
        $data['data_employee'] = $this->data_employee->get_data()->result();
        $this->load->view('header');
        $this->load->view('navigation', $user);
        $this->load->view('expenditure', $data);
        $this->load->view('footer');
        $this->load->view('source');
    }

	public function add()
	{
		$info['datatype'] = 'expenditure';
		$info['operation'] = 'Input';
	
		$detail = $this->input->post('detail');
		$total = $this->input->post('total');
		$date_expenditure = $this->input->post('date');
		$employee_ID = $this->input->post('employee_ID');
	
		// Check if a valid date is provided
		if ($date_expenditure == '') {
			$this->load->view('notifications/insert_failed', $info);
			$this->load->view('source');
			return;
		}
	
		$expenditure_id = date('YmdHis');
	
		$this->load->view('header');
	
		$where = array(
			'expenditure_id' => $expenditure_id
		);
		$records = $this->data_expenditure->get_records($where)->result();
	
		if (count($records) == 0) {
			$data = array(
				'expenditure_id' => $expenditure_id,
				'detail' => $detail,
				'total' => $total,
				'date' => $date_expenditure,
				'employee_ID' => $employee_ID
			);
			$action = $this->data_expenditure->insert_data($data, 'expenditure');
	
			if ($action) {
				$this->load->view('notifications/insert_success', $info);
			} else {
				$this->load->view('notifications/insert_success', $info);
			}
		} else {
			$this->load->view('notifications/insert_failed', $info);
		}
	
		$this->load->view('source');
	}
	
		
			public function pay_salary()
			{
				$info['datatype'] = 'expenditure';
				$info['operation'] = 'Input';
		
				$detail = 'Employee Salary Payment '.date('F Y');
				$total = $this->data_expenditure->total_salary();;
				$date_expenditure = date('Y-m-d');
				$employee_ID = 'K000'; //Bu Rindu
		
				$expenditure_id = date('YmdHis');
		
				$this->load->view('header');
		
				$where = array(
					'expenditure_id' => $expenditure_id
				);
				$records = $this->data_expenditure->get_records($where)->result();
		
				if (count($records) == 0) {
					$data = array(
						'expenditure_id' => $expenditure_id,                
						'detail' => $detail,
						'total' => $total,
						'date' => $date_expenditure,
						'employee_ID' => $employee_ID
					);
					$action = $this->data_expenditure->insert_data($data,'expenditure');
					$this->load->view('notifications/insert_success', $info);    
				} else {
					$this->load->view('notifications/insert_failed', $info);
				}
				$this->load->view('source');    
			}
		
			public function edit()
{
    $info['datatype'] = 'expenditure';
    $info['operation'] = 'Ubah';

    $expenditure_id = $this->input->post('employee_id');
    $detail = $this->input->post('detail');
    $total = $this->input->post('total');
    $date_expenditure = $this->input->post('date');
    $employee_ID = $this->input->post('employee_id'); // Assuming this is the correct field name

    $this->load->view('header');

    $where = array(
        'employee_id' => $expenditure_id // Corrected field name
    );
    $data = array(
        'expenditure_id' => $expenditure_id,                
        'detail' => $detail,
        'total' => $total,
        'date' => $date_expenditure,
        'employee_ID' => $employee_ID
    );
    $action = $this->data_expenditure->update_data($where, $data, 'expenditure');

    if ($action) {
        $this->load->view('notifications/insert_success', $info);
    } else {
        $this->load->view('notifications/insert_failed', $info);
    }

    $this->load->view('source');    
}

		
			public function delete()
			{
				$info['datatype'] = 'expenditure';
		
				$expenditure_id = $this->uri->segment('3');
		
				$where = array(
					'expenditure_id' => $expenditure_id
				);
		
				$this->load->view('header');
		
				$action = $this->data_expenditure->delete_data($where, 'expenditure');
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
				$this->load->view('report/report_filter_expenditure');
				$this->load->view('footer');
				$this->load->view('source');
			}
		
			public function report_filter()
			{
				$user['username'] = $this->session->userdata('username');
		
				$from = $this->input->post('from');
				$to = $this->input->post('to');
		
				$data['data_expenditure'] = $this->data_expenditure->filter($from, $to)->result();
		
				$this->load->view('header');
				$this->load->view('navigation', $user);
				$this->load->view('report/report_expenditure', $data);
				$this->load->view('footer');
				$this->load->view('source');
			}

			function print() {    
		
				$from = $this->uri->segment('3');
				$to = $this->uri->segment('4');
		
				$data['from'] = $from;
				$data['to'] = $to;
				$data['data_expenditure'] = $this->data_expenditure->filter($from, $to)->result();
				
				$this->load->view('print/expenditure', $data);
			}

    function print_pdf() {
        $this->load->library('dompdf_gen');
        
        $from = $this->uri->segment('3');
        $to = $this->uri->segment('4');
        
        $data['from'] = $from;
        $data['to'] = $to;
        $data['data_expenditure'] = $this->data_expenditure->filter($from, $to)->result();
        
        $this->load->view('pdf/expenditure', $data);
        
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Expenditure_Data.pdf", array('Attachment'=>0));
    }
}
