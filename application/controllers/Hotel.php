<?php
	class Hotel extends CI_Controller{
		public function index(){
			$this->load->view('customer/header');
			$this->load->view('customer/hotels');
			$this->load->view('customer/footer');
		}
	}