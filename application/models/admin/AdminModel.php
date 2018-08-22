<?php
	class AdminModel Extends CI_Model{
		public function flights($data){
			$query = "INSERT INTO flights (from_w,destination,category,price,date_created)VALUES(?,?,?,?,?)";
			return $this->db->query($query,$data);
		}
		public function deleteflight($id){
			$query = "DELETE FROM flights WHERE id = ?";
			return $this->db->query($query,$id);
		}

		// public function checkflight($prodname, $prodID){
	 //    $where  = "";
	 //    $data[] = $prodname;
	 //    if(is_numeric($prodID)){
	 //      $where  = "AND id != ?";
	 //      $data[] = $prodID;
	 //    }
	 //    $query = "SELECT * FROM products WHERE product_name = ? $where";
	 //    return $this->db->query($query, $data);
	 //  }
	   public function updateflight($data){
	    $query = "UPDATE flights SET from_w = ?, destination = ?, category = ?, price = ?, date_created = ? WHERE id = ?";
	    $this->db->query($query, $data);
	  }
	}
?>