<?php
	class Login extends CI_Controller{
			public function index(){
				$this->load->view("login");
				$this->load->view("modal");
			}

			public function signup(){
				$fname = $this->input->post("fname");
				$regemail = $this->input->post("regemail");
				$regpass = $this->input->post("regpass");
				
				
				$data = [];

					$c_query = $this->db->query("SELECT * FROM customer_account WHERE email = '$regemail'");
					if($c_query->num_rows() == 0){
						$data = [$fname,$regemail,$regpass];
						$this->load->model("accountmodel");
						$this->accountmodel->signup($data);
						$data['type'] = "success";
						$data['message'] = "Account Successfully Created";
						$data['status'] = 1;
					}else{
						$data['type'] = "warning";
						$data['message'] = "Email Is Already Taken";
						$data['status'] = 0;
					}
				echo json_encode($data);
			}

			public function userlogin(){
				$email	= $this->input->post("email");
				$pass	= $this->input->post("pass");
				

				$return['message'] = "Oops something went wrong!";
				$return['type']		 = "warning";
				$return['status']	 = 0;

				if($email == ""){
					$return['message'] = "Email is Required!";
					$return['status']	 = 0;
				}else if($pass == ""){
					$return['message'] = "Password is Required!";
					$return['status']	 = 0;
				}else{
					$this->load->model('accountModel');
					if($this->accountModel->userlogin($email, $pass)){
						$return['message']="WELCOME $email";
						$return['type']= "success";
						$return['status'] = 1;
					}else{
						$return['message']="invalid email or password!";
						$return['status'] = 0;
						
					}
				}
					echo json_encode($return);
			}	

			public function enter(){
				if($this->session->userdata('email') != '')
					{
					redirect('home');	
				}else{
					redirect('login');
				}
			}

			public function adminlogin(){
				$adminemail	= $this->input->post("adminemail");
				$adminpass	= $this->input->post("adminpass");

				$return['message'] = "Oops something went wrong!";
				$return['type']		 = "warning";
				$return['status']	 = 0;

				if($adminemail == ""){
					$return['message'] = "Email is Required!";
					$return['status']	 = 0;
				}else if($adminpass == ""){
					$return['message'] = "Password is Required!";
					$return['status']	 = 0;
				}else{
					$this->load->model('accountModel');
					if($this->accountModel->adminlogin($adminemail, $adminpass)){
						$return['message']="WELCOME $adminemail";
						$return['type']= "success";
						$return['status'] = 1;
					}else{
						$return['message']="invalid email or password!";
						$return['status'] = 0;
						
					}
				}
					echo json_encode($return);
			}	

			public function adminenter(){
				if($this->session->userdata('adminemail') != '')
					{
					redirect('admin/adminhome');	
				}else{
					redirect('login');
				}
			}

		public function logout(){
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('name');
			$this->session->unset_userdata('user_id');
			redirect('login');
		}

		public function admin_logout(){
			$this->session->unset_userdata('adminemail');
			$this->session->unset_userdata('adminname');
			$this->session->unset_userdata('adminuser_id');
			redirect('login');
		}
	}
?>