<?php 	

	class LDUserModel extends Base_model
	{

	private $table_name = 'ld_users';

	public function validation($loginInfo){

			extract($loginInfo);

			$sql = "SELECT `id`, `email`,`phone`, `password`, `user_type` FROM $this->table_name WHERE  (`email`='$email_num' AND `password`='$pass') OR (`phone`='$email_num' AND `password`='$pass')";

			$this->db->query($sql);
		    $result=$this->db->single();

           if(empty($result)){
				redirect('/LDUser/login');
        	 }else{				
			redirect('/LDClass/list');
        	 }
        	//Session::set('user',$result); 
        	}

		public function register($customerInfo){

			extract($customerInfo);

			$sql = "INSERT INTO $this->table_name(`firstname`, `middlename`, `lastname`, `email`, `password`, `phone`, `user_type`) VALUES ('$firstname','$middlename','$lastname','$email','$password','$phone','customer')";


			$this->db->query($sql);

			
			if($lastid = $this->db->insert()){
				Flash::set("New user has been inserted" , 'success');
				redirect('/LDUser/list');
			}else
			{
				Flash::set('Something went wrong');
			}
		}

		public function list()
		{

			$this->db->query(
				"SELECT * FROM $this->table_name"
			);

			return $this->db->resultSet();
		}




	public function preview($customerId){

			$sql = "SELECT * FROM $this->table_name WHERE  id=$customerId";

			$this->db->query($sql);
		    return $this->db->single();
		    }

	public function className($customerId){

			$sql = "SELECT ld_groups_attendees.groupid,ld_lenders_groups.name FROM $this->table_name INNER JOIN ld_groups_attendees ON ld_users.id=ld_groups_attendees.userid JOIN ld_lenders_groups ON ld_groups_attendees.groupid=ld_lenders_groups.id WHERE ld_users.id=$customerId";


			$this->db->query($sql);
			return $this->db->single();
		  	}
	   

	}