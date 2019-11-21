<?php 	

	class LDUser extends Controller
	{


		public function __construct()
		{

			//load user model
			$this->UserModel = $this->model('LDUserModel');	

				}

			public function register()
		{
		
	        $this->view('lending/user/register');

		}


		


			public function login()
		{

	  $this->view('lending/user/login');
			


		}

			public function preview($userId)
		{

			$userInfo  = $this->UserModel->preview($userId);
			$className  = $this->UserModel->className($userId);
			$data =[
				'userInfo' =>  $userInfo,
				'className' =>  $className
			];

	
	        $this->view('lending/user/preview',$data);

		}

			public function create()
		{
		
	        $this->view('lending/user/create');

		}


			public function list()
		{


			$data = [
				'userList' => $this->UserModel->list()
			];
		
	        $this->view('lending/user/list',$data);

		}




			public function check_loginInfo()
		{ 


             if($this->request() == 'POST') {
				 $this->UserModel->validation($_POST);

			}

		}

			public function add_user()
		{
		
	      if($this->request() == 'POST') {

				 $this->UserModel->register($_POST);

			}
		}



	}