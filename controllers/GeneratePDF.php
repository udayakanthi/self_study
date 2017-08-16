<?php
//  inside library folder add dompdf_gen file
// inside third party add Dompdffolder
// need to write correct proper html for PDF view otherwise get errors
   class GeneratePDF extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
        $this->load->model('Welcome_model');
        $this->load->library('dompdf_gen');
      }
		
      public function index() { 
          $this->load->view('template/header');
            $this->load->view('template/navigation');
         $this->load->view('pdfgenerate_vw'); 
         $this->load->view('template/footer');
      } 
      
      public function gen_pdf() {
$data['res']=$this->Welcome_model->select_Insert_data();

 $this->load->view('pdf_vw',$data);
		// Get output html
		$html = $this->output->get_output();
		
		// Load library
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
                $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
   } }
?>