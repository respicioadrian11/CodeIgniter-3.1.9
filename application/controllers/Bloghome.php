<?php
	class Bloghome extends CI_Controller{
		public function index(){
			$this->load->view('customer/header');
			$this->load->view('customer/blog-home');
			$this->load->view('customer/footer');
		}
	}