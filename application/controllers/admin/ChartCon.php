<?php
	Class ChartCon extends CI_Controller{
		public function index(){
			$this->load->view("admin/header");
			$this->load->view("admin/charts");
			$this->load->view("admin/footer");
		}
	}
?>