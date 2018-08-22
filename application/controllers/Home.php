<?php
	class Home Extends CI_Controller{
		public function index(){
			$this->load->view('customer/header');
			$this->load->view('customer/index');
			$this->load->view('customer/footer');
		}
	}