<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Welcome_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
          $this->load->helper(array('form', 'url')); 
    }

    public function index() {
        $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('Insert_form_vw');
            $this->load->view('template/footer');
      
    }
        public function Form_submit() {
        $SaveNew = $this->input->post('Save&_new');
        $SaveClose = $this->input->post('Save&_close');
        $Update=$this->input->post('Update');
        $Delete=$this->input->post('Delete');
        if ((!empty($SaveNew))&& $SaveNew=='Save & New') {
         $this->SNInsert();
       
        } 
        elseif(!empty($SaveClose) && $SaveClose=='Save & Close'){
           $this->SCInsert();
        }
        else if(!empty($Update)&& $Update=='Update'){
         $this->update_data();
        }
          else if(!empty($Delete)&& $Delete=='Delete'){
         $this->Delete_data();
        }
    }
    

    public function SNInsert() {
       
        if ($this->form_validation() == false) {
         $this->session->set_flashdata("error_msg", "Unableto Save.Please try again"); 

            $this->index();
        } else {
            
            $data['result'] = $this->Welcome_model->Insert_data();
              $this->session->set_flashdata("Success_msg", "Saved Successfully");
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('Insert_form_vw');
            $this->load->view('template/footer');
   }

        }

            public function SCInsert() {
     ;
        if ($this->form_validation() == false) {
 $this->session->set_flashdata("error_msg", "Unable to Insert.Please try again"); 
            $this->index();
        } else {
             $data['result'] = $this->Welcome_model->Insert_data();
           $this->session->set_flashdata("Success_msg"," Saved Successfully");
            $this->view_inserted_details();
   }

        }
     public function form_validation() {
    
    

        $this->form_validation->set_rules('name', 'name', 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Name is required'));
        $this->form_validation->set_rules('tp', 'tp', 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Phone number is required'));
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Valied email is required'));
        $this->form_validation->set_rules('password', 'password', 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Valied password is required'));
        return $this->form_validation->run();
  
     }
   



    public function view_inserted_details() {

        $this->load->model('Welcome_model');
//             echo '<pre>';
//             print_r($data);
//             exit();
        $sidata['sidata'] = $this->Welcome_model->select_Insert_data();

        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('Inserted_details_vw', $sidata);
        $this->load->view('template/footer');
    }

    public function select_update_data($id) {
       
        $data['res'] = $this->Welcome_model->select_update_data($id);
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('update_form_vw', $data);
        $this->load->view('template/footer');
    }



    public function update_data() {
         $Id=$this->input->post('Id');
    if ($this->form_validation() == true) {
        
      $data['result'] = $this->Welcome_model->update_data($Id);
        $this->session->set_flashdata("Success_msg", "Updated Successfully"); 
       $this->select_update_data($Id);
        } 
        else {
           $this->session->set_flashdata("error_msg", "Unableto update.Please try again"); 
           $this->select_update_data($Id);
         
   }
   
    }
    
    public function Delete_data() {
         $Id=$this->input->post('Id');
         $this->Welcome_model->Delete_data($Id);
         $this->session->set_flashdata("Delete_msg", "Deleted Successfully"); 
         $this->view_inserted_details();
    }
    
     public function Delete_directly($Id) {
        $this->Welcome_model->Delete_data($Id);
         $this->session->set_flashdata("Delete_msg", "Deleted Successfully"); 
         $this->view_inserted_details();
    }
  
    public function Load_popup() {
         $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('Load_Popup_vw');
            $this->load->view('template/footer');
    }
    
    public function Dynamic_AddItem() {
            $data['rowCount1']=1;
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('Dynamic_AddItem_vw',$data);
            $this->load->view('template/footer');
        
    }
    
    public function ItemList_Save() {
     $data['rowCount1']=$this->input->post('rowCount1');
     
        //if ($this->form_validationList() == true) {
        $data['res'] = $this->Welcome_model->saveListData();
//        echo '<pre>';
//        print_r($data);
//        exit();
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('Dynamic_AddItem_updateDelete_vw',$data);
            $this->load->view('template/footer');
   // }
//    else{
//         $data['rowCount1']=$this->input->post('rowCount1');
//        
//            $this->load->view('template/header');
//            $this->load->view('template/navigation');
//            $this->load->view('Dynamic_AddItem',$data);
//            $this->load->view('template/footer');
//        
//    }
        }
    
public function form_validationList() {
$rowCount=$this->input->post('rowCount1');

  for($i=1;$i<=$rowCount;$i++){
    
  $this->form_validation->set_rules('name'.$i, 'name'.$i, 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Name is required'));
        $this->form_validation->set_rules('tp'.$i, 'tp'.$i, 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Phone number is required'));
        $this->form_validation->set_rules('email'.$i, 'email'.$i, 'required', array('required' => '<i class="fa fa-times-circle" aria-hidden="true"></i>Valied email is required'));
 }
  return $this->form_validation->run();
  
 }

public function ItemList_Update() {
    
    
}

public function dropdown_change_data(){
   $data['user']= $this->Welcome_model->select_username();
//   echo '<pre>';
//   print_r($data);
//   exit();
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('dropdown_change_data_vw',$data);
            $this->load->view('template/footer');
    
}

public function getDropdownData() {
     $data['userData']= $this->Welcome_model->getDropdownData();
}

public function PlayVideo() {
    
        $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('PlayVideo_vw');
            $this->load->view('template/footer');
}

public function OpenNwWindow() {
      $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('OpenNwWindow_vw');
            $this->load->view('template/footer');
    
}

public function PrintPreview() {
    $data['res']=$this->Welcome_model->select_Insert_data();
     $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('PrintPreview_vw1',$data);
            $this->load->view('template/footer');
}

}