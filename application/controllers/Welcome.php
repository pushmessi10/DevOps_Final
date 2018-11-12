<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{

		$this->load->view('welcome_message');
	}
	public function book(){
		$form_data = $this->input->post();
		$data['Name'] = $this->input->post("Name");
		$data['Phone_No'] = $this->input->post("Phone_No");
		$data['Address'] = $this->input->post("Address");
                $data['Email'] = $this->input->post("Email");
                $data['dob'] = $this->input->post("Year");
		$data['dob'] = $data['dob']."-";
		$data['dob'] = $data['dob'].$this->input->post("Month");
		$data['dob'] = $data['dob']."-";
                $data['dob'] = $data['dob'].$this->input->post("date");
                $data['dance_Type'] = $this->input->post("dance_type");
		// $departure = date('Y-m-d H:i:s',strtotime($this->input->post("departure")));
		// $data['departure'] = $departure;
		$this->load->model('Booking');
		$this->Booking->save($data);
		$this->load->view('welcome_result', $data);
	}
}
