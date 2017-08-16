<?php
  //Add jquery files inside assets/jquery folder
   class JqueryUI extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         
      } 
		
      public function Dragable() { 
//          $this->load->view('template/header');
           // $this->load->view('template/navigation');
            $this->load->view('Jquery_vw/Dragable_vw');
           // $this->load->view('template/footer');
        
      } 
      
      public function Dropable() {
          $this->load->view('Jquery_vw/Dropable_vw');
          
      }
      public function Resizeable() {
          $this->load->view('Jquery_vw/Resizeable_vw');
      }
      
      public function Selectable() {
          $this->load->view('Jquery_vw/Selectable_vw');
          
      }
      
      public function Sortable() {
          $this->load->view('Jquery_vw/Sortable_vw');
          
      }
      
      public function collapsible_content_panels() {
          $this->load->view('Jquery_vw/collapsible_content_panels');
          
      }
      
      public function Autocomplete() {
           $this->load->view('Jquery_vw/Autocomplete_vw');
          
      }
      public function Checkboxradio() {
          $this->load->view('Jquery_vw/Checkboxradio_vw');
          
      }
      public function Controlgroup() {
      $this->load->view('Jquery_vw/Controlgroup_vw');

      }
      public function Datepicker() {
      $this->load->view('Jquery_vw/Datepicker_vw');
 
      }
      public function ClickClose() {
          
            $this->load->view('Jquery_vw/ClickClose_vw');
 
      }
      public function Menu() {  
            $this->load->view('Jquery_vw/Menu_vw');
     
      }
       public function Slider() {  
            $this->load->view('Jquery_vw/Slider_vw');
     
      }
      public function Spinner() {
          $this->load->view('Jquery_vw/Spinner_vw');
          
      }
      public function Tabs() {
      $this->load->view('Jquery_vw/Tabs_vw');

          
      }
      public function Tooltip() {
           $this->load->view('Jquery_vw/Tooltip_vw');
          
      }
      public function AddClass() {
           $this->load->view('Jquery_vw/AddClass_vw');
          
          
      }
      public function ColorAnimation() {
      $this->load->view('Jquery_vw/ColorAnimation_vw');
   
      }
      public function Effects() {
            $this->load->view('Jquery_vw/Effects_vw');
    }
     public function Show() {
            $this->load->view('Jquery_vw/Show_vw');
    }
    public function OnclickLarge() {
         $this->load->view('Jquery_vw/OnclickLarge_vw');
        
    }
    
    public function Toggle() {
         $this->load->view('Jquery_vw/Toggle_vw');
        
    }
   } 
?>