<?php
	class About Extends CI_Controller{
		public function index(){
			$this->load->view('customer/header');
			$this->load->view('customer/about');
			$this->load->view('customer/footer');
		}
	}