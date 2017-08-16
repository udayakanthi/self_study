<?php
//  inside library folder 
// inside third party 

   class GenerateExcel extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
        $this->load->model('Welcome_model');
      
      }
		
      public function index() { 
        $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('excelgenerate_vw');
            $this->load->view('template/footer');
      } 
      public function gen_excel() {
      

       

        //load our new PHPExcel library
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Customer list');

        // load database
        $this->load->database();

        // load model
        // get all users in array formate
       $this->load->model('Welcome_model');

        
//       $data['res'] = $this->customer_model->load_product_data($product, $type);
       
       $table_data = $this->Welcome_model->select_Insert_data();
       
//       echo '<pre>';
//       print_r($res);
//       exit();
       
//     $this->customer_model->create_openJobOrder_excel($data);
     $this->Welcome_model->creat_Excel($table_data);
      }
      }
?>