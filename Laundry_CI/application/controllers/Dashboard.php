<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		// check login session
		if ($this->session->userdata('status') != "login") {
			redirect(base_url().'welcome?pesan=belumlogin');
		}
		$this->load->model('data_employee');
		$this->load->model('data_customer');  
		$this->load->model('data_transaction');
		$this->load->model('data_expenditure');  
	}

	public function index()
	{
		$user['username'] = $this->session->userdata('username');

		$total_income = $this->data_transaction->total_income_year();  
		$total_expense = $this->data_expenditure->total_spend_year(); 
		$total_profit = $total_income - $total_expense;

		$data = array(
			'n_employee' => $this->data_employee->count_rows(),  
			'n_customer' => $this->data_customer->count_rows(),  
			'n_transaction' => $this->data_transaction->count_rows(),
			'n_active_transactions' => $this->data_transaction->count_active(),  
			'total_income' => $total_income,
			'total_expense' => $total_expense,
			'total_profit' => $total_profit
		);

		$this->load->view('header');
		$this->load->view('navigation', $user);
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
		$this->load->view('source');
	}
}
