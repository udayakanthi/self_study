<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
          $this->load->view('template/header');
            $this->load->view('template/navigation');
         $this->load->view('upload_form_vw', array('error' => ' ' )); 
         $this->load->view('template/footer');
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp'; 
         $config['max_size']      = 2048000; //2MB
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
                $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('upload_form_vw', $error);
            $this->load->view('template/footer');
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
              $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('upload_success_vw', $data); 
             $this->load->view('template/footer');
         } 
      } 
   } 
?>