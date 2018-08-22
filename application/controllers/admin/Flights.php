<?php
	class Flights extends CI_Controller{
		public function index(){
			$this->load->view("admin/header");
			$this->load->view("admin/flights");
			$this->load->view("admin/footer");
		}

		public function flightscon(){
			$from = $this->input->post("from");
			$to = $this->input->post("to");
			$category = $this->input->post("category");
			$price = $this->input->post("price");
			$date = date('m-d-y');
			$id 	 = $this->input->post("id");
			
			$data = [];

	
			if($from == ""){
				$data['title'] = "Whoops";
				$data['msg'] = "Starting Destination is Required";
				$data['type'] = "error";
				$data['status'] = 0;
			}else if($to == ""){
				$data['title'] = "Whoops";
				$data['msg'] = "Destination is Required";
				$data['type'] = "error";
				$data['status'] = 0;
			}else if($category == ""){
				$data['title'] = "Whoops";
				$data['msg'] = "Category is Required";
				$data['type'] = "error";
				$data['status'] = 0;
			}else if(($price == "") || ($price <= 0)){
				$data['title'] = "Whoops";
				$data['msg'] = "Price is Required and Must Not be Negative!";
				$data['type']= "error";
				$data['status'] = 0;
			}else{
				$this->load->model('admin/adminModel');
				$data = [$from,$to,$category,$price,$date];
				if (is_numeric($id)) {
					$data[] = $id;
					$this->adminModel->updateflight($data);
					$data['title'] = "Success";
					$data['msg'] = "Flight successfully updated!";
				} else{
					if($this->adminModel->flights($data)){
						$data['title'] = "Success";
						$data['msg'] = "Flight Successfully Created";
					}
				}
				$data['type'] = "success";
				$data['status'] = 1;
			}
			echo json_encode($data);
		}
		public function allflights(){
			$data = [];
			$query = $this->db->query("SELECT * FROM flights");
		

			if($query->num_rows() > 0){
				foreach($query->result_array() as $row_query){
					$id = $row_query['id'];
					$from = $row_query['from_w'];
					$to = $row_query['destination'];
					$cat = $row_query['category'];
					$price = number_format($row_query['price'],2);
					$data['flight'][] = ['id' => $id, 'from' => $from, 'to' => $to, 'cat' => $cat, 'price' => $price]; 
				}
			}
			echo json_encode($data);
		}

		public function allflight(){
			$data = null;
			$id = $this->input->post('id');
			$query = $this->db->query("SELECT * FROM flights WHERE id = ?", $id);
			if ($query->num_rows() > 0) {
				$data = $query->row_array();
			}
			echo json_encode($data);
		}

		public function deleteflight(){
			$id = $this->input->post("id");
			$this->load->model('admin/adminModel');

			$return['message'] = "Oops something went wrong!";
			$return['type']		 = "danger";

			$this->adminModel->deleteflight($id);
			if ($this->db->affected_rows() > 0) {
				$return['message'] = "Flight successfully deleted!";
				$return['type']		 = "success";
			}
			echo json_encode($return);
		}
		public function search(){
			$data = [];
			$search = $this->input->post("search");
			$query =  $this->db->query("SELECT * FROM flights WHERE CONCAT(from_w,destination) LIKE '%$search%'");
			if($query->num_rows() > 0){
				foreach ($query->result_array() as $row_query) {
					$id = $row_query['id'];
					$from = $row_query['from_w'];
					$to = $row_query['destination'];
					$cat = $row_query['category'];
					$price = number_format($row_query['price'],2);
					$data['flight'][] = ['id' => $id, 'from' => $from, 'to' => $to, 'cat' => $cat, 'price' => $price]; 
				}
			}
			echo json_encode($data);
		}

		public function newflights(){
			$date = $date = date('m-d-y');
			$count = 0;
			$query = $this->db->query("SELECT * FROM flights WHERE date_created = ?",$date);
			if($query->num_rows() > 0){
				foreach ($query->result_array() as $row_query) {
					$count = $query->num_rows();
					$id = $row_query['id'];
					$from = $row_query['from_w'];
					$to = $row_query['destination'];
					$cat = $row_query['category'];
					$price = number_format($row_query['price'],2);;
					$data['info'][] = ['id' => $id, 'from' => $from, 'to' => $to, 'cat' => $cat, 'price' => $price];
					$data['count'] = $count; 
				}
			}else{
				$data['info'] = "No New Filghts Found";
				$data['count'] = 0;
			}
			echo json_encode($data);
		}
	}
?>