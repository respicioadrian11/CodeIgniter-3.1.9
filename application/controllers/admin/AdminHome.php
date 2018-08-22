<?php
	class AdminHome extends CI_Controller{
		public function index(){
			$this->load->view('admin/header');
			$this->load->view('admin/admin_home');
			$this->load->view('admin/footer');
		}
		public function cust_counter($flag = ""){
			$query = $this->db->query("SELECT * FROM customer_account");
			$data = $query->num_rows();
			if($flag == ""){
				echo json_encode($data);
			}else{
				return $data;
			}
		}

		public function admin_counter($flag = ""){
			$query = $this->db->query("SELECT * FROM admin_account");
			$data = $query->num_rows();
			if($flag == ""){
				echo json_encode($data);
			}else{
				return $data;
			}
		}
		public function flightcounter($flag = ""){
			$query = $this->db->query("SELECT * FROM flights");
			$data = $query->num_rows();
			if($flag == ""){
				echo json_encode($data);
			}else{
				return $data;
			}
		}
		public function stats(){
			$data = [];
			$data1 = [];
			$data2 = [];

			$data1 = $this->cust_counter(1);
			$data2 = $this->admin_counter(1);
			$data3 = $this->flightcounter(1);
			
			$data = ['customer' => $data1, 'admin' => $data2, 'flight' => $data3];
			echo json_encode($data);
		}
	}
?>