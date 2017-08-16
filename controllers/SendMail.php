<?php
  //put php mailer, stmp inside the controller 
 //https://www.google.com/settings/security/lesssecureapps    
  require 'class.phpmailer.php';
require 'class.smtp.php';
   class SendMail extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
          $this->load->view('template/header');
            $this->load->view('template/navigation');
         $this->load->view('Email_form_vw'); 
         $this->load->view('template/footer');
      } 
		
public function sendMail(){
  
$name=$this->input->post('name');
$from = $this->input->post('from');
$to = $this->input->post('to');
$subject =$this->input->post('subject');
$message=$this->input->post('msg');

   $mail = new PHPMailer;
  $mail->IsSMTP(); // telling the class to use SMTP
   $mail->Host       = "smtp.gmail.com"; // SMTP server
   //$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                       // 1 = errors and messages
                                       // 2 = messages only
   $mail->SMTPAuth   = true;                  // enable SMTP authentication
   $mail->Host       = "smtp.gmail.com"; // sets the SMTP server
   $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
   $mail->Username   = "nilminiudayakanthi@gmail.com"; // SMTP account username
   $mail->Password   = "madu123@A";        // SMTP account password
   $mail->SMTPSecure = 'ssl';



   $mail->From = $from;
   $mail->FromName = $name;
   $mail->addAddress($to );               // Name is optional

//  $mail->addCC('CC EMAIL ID');
//  $mail->addBCC('BCC EMAIL ID');
  $mail->WordWrap = 50;                                 // Set word wrap to    50 characters

  $mail->Subject = $subject;
  $mail->Body    = $message;
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail  clients';

  if(!$mail->send()) {
       $this->session->set_flashdata("error_msg", "Emailnot sent");
         $this->load->view('template/header');
            $this->load->view('template/navigation');
         $this->load->view('Email_form_vw'); 
         $this->load->view('template/footer');
 // echo 'Message could not be sent.';
  //echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
        $this->session->set_flashdata("success_msg", "Sent Successfully");
        $this->load->view('template/header');
            $this->load->view('template/navigation');
         $this->load->view('Email_form_vw'); 
         $this->load->view('template/footer');
     
 }
     }
   } 
?>