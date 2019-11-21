<?php 	

	class LDClassModel extends Base_model
	{
		private $table_name = 'ld_lenders_groups';


		public function create($classInfo)
		{
			extract($classInfo);

			$branch = 'sampleBranch';
			$notes  = 'sampleNotes';
			$group_status = '1';
			$created_by = 3;

			$this->db->query(
				"INSERT INTO $this->table_name(day , time , name , branch , notes , created_by , group_status)
				VALUES('$day' , '$time' , '$name' , '$branch' , '$notes' , '$created_by' , '$group_status')"
			);

			if($this->db->execute()){
				Flash::set("Lenders group created");
				redirect('/LDClass/list');
			}else{
				Flash::set("Lenders not created");
			}
		}


		public function list()
		{

			$this->db->query(
				"SELECT * FROM $this->table_name"
			);

			return $this->db->resultSet();
		}


		public function view($classid){

			$this->db->query(

				"SELECT * FROM $this->table_name where id = '$classid'"
			);

			return $classInfo = $this->db->single();
		}

		public function classList($classid)
		{

			$this->db->query(
				"SELECT ld_users.id,ld_users.firstname,ld_users.middlename,ld_users.lastname,ld_users.email,ld_users.phone FROM ld_users INNER JOIN  ld_groups_attendees ON ld_users.id=ld_groups_attendees.userid WHERE ld_groups_attendees.groupid='$classid'"
			);

			return $this->db->resultSet();
		}


		public function noClass()
		{

			$this->db->query(
				"SELECT id,firstname,middlename,lastname,email,phone FROM ld_users WHERE id NOT IN (SELECT userid from ld_groups_attendees)"
			);

			return $this->db->resultSet();
		}

		public function addLender($lenderId){
			extract($lenderId);
			$this->db->query(
				"INSERT INTO ld_groups_attendees(userid ,groupid ) VALUES('$userId' , '$groupId' )"
			);

			if($this->db->execute()){
				Flash::set("Lenders group created");

				redirect("LDClass/preview/{$groupId}");
			}else{
				Flash::set("Lenders not created");
			}
		}


		    public function update_user($customerInfo){

			extract($customerInfo);

			$update_groups_attendees = "UPDATE `ld_groups_attendees` SET `groupid`='$newgroup' WHERE `userid`='$userId'";
			$insert_attendee_histories="INSERT INTO `ld_attendee_histories`(`userid`, `prevgroup`, `newgroup`, `approved_by`, `notes`) VALUES ('$userId','$prevgroup','$newgroup','1','$note')";

			$this->db->query($update_groups_attendees);
			$this->db->execute();
			$this->db->query($insert_attendee_histories);
			if($this->db->execute()){

				Flash::set(" updated" , 'success');
				redirect("LDUser/preview/{$userId}");
			}else
			{
				Flash::set('Something went wrong');
			}
		}

	}