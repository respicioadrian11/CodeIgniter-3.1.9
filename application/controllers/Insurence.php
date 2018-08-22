<?php
	class Insurence extends CI_Controller{
		public function index(){
			$this->load->view('customer/header');
			$this->load->view('customer/insurance');
			$this->load->view('customer/footer');
		}
	}