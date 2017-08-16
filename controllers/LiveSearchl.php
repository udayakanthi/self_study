<?php
//  inside library folder 
// inside third party 

   class LiveSearchl extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
        $this->load->model('Welcome_model');
      
      }
		
      public function index() { 
        $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('LiveSearch_vw');
            $this->load->view('template/footer');
      } 
      public function live_search() {
      $search=  $this->input->post('search');
  $query = $this->Welcome_model->getEmployee($search);
  echo json_encode ($query);
      }
      }
?>