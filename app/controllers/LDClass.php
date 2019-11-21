<?php 	

	class LDClass extends Controller
	{


		private $view = 'lending/';

		public function __construct()
		{
			$this->classModel = $this->model('LDClassModel');
		}
		public function create()
		{
			if($this->request() === 'POST'){

				$this->classModel->create($_POST);

			}else{

				$this->view($this->view.'class/create');
			}
		}

		public function updateClass()
		{
		

			$data = [
				'classList' => $this->classModel->list()
			];

				$this->view($this->view.'class/change_group',$data);
	
		
		}


		public function list()
		{

			$data = [
				'classList' => $this->classModel->list()
			];

			$this->view($this->view.'class/list' , $data);
		}



		public function preview($classid)
		{
			$class  = $this->classModel->view($classid);
			$classList  = $this->classModel->classlist($classid);
			$noClass  = $this->classModel->noClass();
			$scheduleOnCurrentDate = getDayMonthOccurence('2019' , '11' , convertNumericDay($class->day));

			$data =[
				'classId' => $classid,
				'class' =>  $class,
				'classList' => $classList,
				'noClass' => $noClass,
				'schedule' => $scheduleOnCurrentDate
			];

			$this->view($this->view.'class/preview', $data);
		}

		public function add_user()
		{
		
	     $class  = $this->classModel->addLender($_GET);

		}

		public function update_user_class()
		{
	  	 $class  = $this->classModel->update_user($_POST);
		}


        public function test(){
            echo "TEST HELLOldalsdlsdls";
             echo "TEST HELLOldalsdlsdls";
            
        }


        public function test(){
            echo "TEST HELLOldalsdlsdls";
             echo "TEST HELLOldalsdlsdls";
            
        }

	}