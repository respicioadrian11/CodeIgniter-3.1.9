<?php
 class AccountModel extends CI_Model{
 	public function signup($data){
 		$q_signup = "INSERT INTO customer_account (full_name,email,password)VALUES(?,?,?)";
 		return $this->db->query($q_signup,$data);
 	}
 		public function userlogin($email,$pass){
 			$this->db->where('email',$email);			//LOGIN ADMIN
			$this->db->where('password',$pass);
			$query= $this->db->get('customer_account');			


				if($query->num_rows()>0)
				{
				$userdata = array(
						'user_id'=>$query->row(0)->id,
						'name'=>$query->row(0)->full_name,			//ADMIN LOGIN SESSION
						'email'=>$query->row(0)->email,
						'logged_in'=>TRUE
				);
				$this->session->set_userdata($userdata);
						return true;
				}else{
					return false;
				}
					echo json_encode($data);	
		}

			public function adminlogin($adminemail,$adminpass){
 			$this->db->where('email',$adminemail);			//LOGIN ADMIN
			$this->db->where('password',$adminpass);
			$query= $this->db->get('admin_account');			


				if($query->num_rows()>0)
				{
				$userdata = array(
						'adminuser_id'=>$query->row(0)->id,
						'adminname'=>$query->row(0)->full_name,			//ADMIN LOGIN SESSION
						'adminemail'=>$query->row(0)->email,
						'logged_in'=>TRUE
				);
				$this->session->set_userdata($userdata);
						return true;
				}else{
					return false;
				}
					echo json_encode($data);	
		} 		  		 
 	}
?>