<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_model {

    public function Insert_data() {
        $data = array(
            'name' => $this->input->post('name'),
            'telephone' => $this->input->post('tp'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'));
        $this->db->insert('user', $data);
    }

    public function select_Insert_data() {
        $query = $this->db->query('SELECT * FROM `user`');
        return $query->result();
    }
    
    public function update_data($Id) {
       // exit('jfhgd');
        $data = array(
           
            'name' => $this->input->post('name'),
            'telephone' => $this->input->post('tp'),
            'email' => $this->input->post('email'));
          
        
       $this->db->where('Id', $Id);
       $this->db->update('user', $data);
   }
     public function select_update_data($Id) {
        $query = $this->db->query("SELECT * FROM `user` where `Id`='$Id'");
        return $query->result();
    }
    
    public function Delete_data($Id) {
          $this -> db -> where('Id', $Id);
  $this -> db -> delete('user');
    }

    public function saveListData() {
        $count=$this->input->post('rowCount1');
   //   echo $count;
      for($i=1;$i<=$count;$i++){
        //  $j=$i+1;
          $data = array(
            'name' => $this->input->post('name'.$i),
            'tp' => $this->input->post('tp'.$i),
            'email' => $this->input->post('email'.$i)
              );  
             $this->db->insert('userlist', $data);
         
             // echo $i;
       $data['id'.$i]=$this->db->insert_id();
   //   echo   $data['id'.$i]."U";
             
        }
        return $data;
     }
   
     
     public function select_username() {

           $query = $this->db->query('SELECT *FROM `user`');
           return $query->result();
         
         
     }
     
     public function getDropdownData() {
         $name = $this->input->post('user');
        $name = $this->db->escape($name);
        $query = $this->db->query("SELECT * FROM user where `name`=$name")->result();
        // echo print_r($query);
//       return $query->result();
        echo json_encode($query);

         
     }
     
     public function creat_Excel($table_data) { 
         $this->load->library('excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->getProtection()->setSheet(true);

        $this->excel->getActiveSheet()->getRowDimension(10)->setRowHeight(20);

        $styleArray = array(
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_TOP,
            ),
        );

        $styleArray1 = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        //background
        $styleArray12 = array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'startcolor' => array(
                    'rgb' => 'E0E0E0',
                ),
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        //background-in table
        $styleArray13 = array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'startcolor' => array(
                    'rgb' => 'FFFFFF',
                ),
            ),
        );
        //font - bold
        $styleArray14 = array(
            "font" => array(
                "bold" => true
            ),
        );
        //style alignment - left
        $styleArray5 = array(
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        //style alignment - right
        $styleArray6 = array(
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        $styleArray_center = array(
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        //style alignment - right
        $styleArray7 = array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'startcolor' => array(
                    'rgb' => 'E0E0E0',
                ),
            ),
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        //background-in table - Total
        $styleArray17 = array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'startcolor' => array(
                    'rgb' => 'FAF8F8',
                ),
            ),
        );

        //background
        $styleArray102 = array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'startcolor' => array(
                    'rgb' => 'E0E0E0',
                ),
            ),
        );
        
        $this->excel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('B3:D3')->applyFromArray($styleArray);
        $this->excel->getActiveSheet()->getStyle('B3:C3')->applyFromArray($styleArray12);
        $this->excel->getActiveSheet()->mergeCells('B3:C3');

        $this->excel->getActiveSheet()->setCellValue('B' . 3, 'User Details');

        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
//        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
//        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
//        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);

        $this->excel->getActiveSheet()->mergeCells('A5:A7');
        $this->excel->getActiveSheet()->mergeCells('B5:B7');
        $this->excel->getActiveSheet()->mergeCells('C5:C7');
//       $this->excel->getActiveSheet()->mergeCells('D5:D7');
//        $this->excel->getActiveSheet()->mergeCells('E5:E7');
//        $this->excel->getActiveSheet()->mergeCells('F5:F7');

        $this->excel->getActiveSheet()->getStyle('A5:C7')->applyFromArray($styleArray12);

        $this->excel->getActiveSheet()->getStyle('A5:C7')->applyFromArray($styleArray);

       // $this->excel->getActiveSheet()->getStyle('A5:D7')->getFont()->setBold(true);

        $this->excel->getActiveSheet()->setCellValue('A5', ' Name');
        $this->excel->getActiveSheet()->setCellValue('B5', 'Email');
        $this->excel->getActiveSheet()->setCellValue('C5', 'Telephone');
//        $this->excel->getActiveSheet()->setCellValue('D5', 'Contact No');
//        $this->excel->getActiveSheet()->setCellValue('E5', 'Invoiced Total');
//        $this->excel->getActiveSheet()->setCellValue('F5', 'Remaining');

        $cell_no = 8;

        $i = 0;                                        
                                        
//        $type = '';     
//        $total_amount1 = 0;
//        $total_amount2 = 0;
//        $total_amount3 = 0;
//
//        $total_balance1 = 0;
//        $total_balance2 = 0;
//        $total_balance3 = 0;
//        $previousType = '';

//        if (!empty($res)) {
//            foreach ($res as $t_data) {
        
        if (!empty($table_data)) {
            foreach ($table_data as $t_data) {

//                    $total_balance1 += $t_data->Total;
//                    $total_balance2 += $t_data->InvoiceTotal;
//                    $total_balance3 += $t_data->Remaining;
                                                   
                        
                    $cell_no = $cell_no + 1;
                        
//					$this->excel->getActiveSheet()->getStyle('D' . $cell_no)->getNumberFormat()->setFormatCode('#,##0.00');
//					$this->excel->getActiveSheet()->getStyle('E' . $cell_no)->getNumberFormat()->setFormatCode('#,##0.00');
//					$this->excel->getActiveSheet()->getStyle('F' . $cell_no)->getNumberFormat()->setFormatCode('#,##0.00');
//                  
                    $this->excel->getActiveSheet()->setCellValue('A' . $cell_no, $t_data->name);
                    $this->excel->getActiveSheet()->setCellValue('B' . $cell_no, $t_data->email);
                    $this->excel->getActiveSheet()->setCellValue('C' . $cell_no, $t_data->telephone);
//                    $this->excel->getActiveSheet()->setCellValue('D' . $cell_no, $t_data->telephone);
//                    $this->excel->getActiveSheet()->setCellValue('D' . $cell_no, $t_data->Telephoneno);
//                    $this->excel->getActiveSheet()->setCellValue('D' . $cell_no, number_format((double)$t_data->Total,2));
//                    $this->excel->getActiveSheet()->setCellValue('E' . $cell_no, number_format((double)$t_data->InvoiceTotal,2));
//                    $this->excel->getActiveSheet()->setCellValue('F' . $cell_no, number_format((double)$t_data->Remaining,2));
                    
//                $total_amount1 += $total_balance1;
//                $total_amount2 += $total_balance2;
//                $total_amount3 += $total_balance3;
//
//                $total_balance1 = 0;
//                $total_balance2 = 0;
//                $total_balance3 = 0;
            }
                                                
                    
//                    $cell_no = $cell_no + 2;
//                    $this->excel->getActiveSheet()->getStyle('A' . $cell_no . ':F' . ($cell_no + 2))->getFont()->setBold(true);
//                    $this->excel->getActiveSheet()->getStyle('A' . $cell_no . ':F' . $cell_no)->applyFromArray($styleArray12);
//                    $this->excel->getActiveSheet()->setCellValue('A' . $cell_no, 'Total ');
//                    
////                    $this->excel->getActiveSheet()->setCellValue('A' . $cell_no, 'Total ' . $previousType);
//                    $this->excel->getActiveSheet()->setCellValue('D' . $cell_no, number_format($total_amount1,'2','.',','));
//                    $this->excel->getActiveSheet()->setCellValue('E' . $cell_no, number_format($total_amount2,'2','.',','));
//                    $this->excel->getActiveSheet()->setCellValue('F' . $cell_no, number_format($total_amount3,'2','.',','));
//                    
                     }
                     
            $this->excel->getActiveSheet()->getStyle('A8:A' . $cell_no)->applyFromArray($styleArray5); // ALIGN LEFT
            $this->excel->getActiveSheet()->getStyle('B8:B' . $cell_no)->applyFromArray($styleArray5); // ALIGN LEFT
            $this->excel->getActiveSheet()->getStyle('C8:C' . $cell_no)->applyFromArray($styleArray_center); // ALIGN CENTER
//            $this->excel->getActiveSheet()->getStyle('D8:D' . $cell_no)->applyFromArray($styleArray6); // ALIGN Right
//            $this->excel->getActiveSheet()->getStyle('E8:E' . $cell_no)->applyFromArray($styleArray6); // ALIGN Right
//            $this->excel->getActiveSheet()->getStyle('F8:F' . $cell_no)->applyFromArray($styleArray6); // ALIGN Right
        


        $this->excel->getActiveSheet()->setTitle('Customer Details');
        $filename = 'Open Job Order.xls'; //save our workbook as this file name
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        $objWriter->save('php://output');
         
     }
     
     public function getEmployee($search) {
          $this->db->select("EMPLOYEE_ID,FIRST_NAME,LAST_NAME");
  $whereCondition = array('LAST_NAME' =>$search);
  $this->db->where($whereCondition);
  $this->db->from('trn_employee');
  $query = $this->db->get();
  return $query->result();
     }
}
