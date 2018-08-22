<?php
	class Packages extends CI_Controller{
		public function index(){
			$this->load->view('customer/header');
			$this->load->view('customer/packages');
			$this->load->view('customer/footer');
		}
	} 