!-- =============================================== -->
<!--server mg-->
<!-- Left side column. contains the sidebar -->
<script>
function setLoading(){
	  $(".content-wrapper").html("");
	  document.getElementById("content-wrapper2").style.display="block";
}

 window.onbeforeunload = function(){ setLoading();return;} 
</script>
<div id="content-wrapper2" style='display:none;padding-top: 20%; padding-left: 40%; position: fixed; right: 36%; top: 20px; z-index: 1000;'><img src='<?php echo base_url();?>assets/img/loading4.gif'/></div>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
              <!--<img src="<?php // echo base_url('assets/img/user2-1/user260x160.jpg');     ?>" class="img-circle" alt="User Image" />-->
                <img src="<?php echo base_url('assets/img/logo/lms1.jpg'); ?>"  class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
       
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a  href="<?php// echo base_url('welcome/dashbord'); ?>">
                    <i class="fa fa-dashboard"></i> <span>BasicFunction</span> 
                    <!--<i class="fa fa-angle-left pull-right"></i>-->
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-circle-o"></i> Insert</a></li>
                     <li><a href="<?php echo base_url('index.php/Welcome/view_inserted_details'); ?>"><i class="fa fa-circle-o"></i> Inserted Details</a></li>
                    <li><a href="<?php echo base_url('index.php/Welcome/Load_popup'); ?>"><i class="fa fa-circle-o"></i>Popup</a></li>
                    <li><a href="<?php echo base_url('index.php/Welcome/Dynamic_AddItem'); ?>"><i class="fa fa-circle-o"></i>Dynamic AddItem</a></li>
                  <li><a href="<?php echo base_url('index.php/Welcome/dropdown_change_data'); ?>"><i class="fa fa-circle-o"></i>Dropdown data change</a></li>
                    <li><a href="<?php echo base_url('index.php/Upload'); ?>"><i class="fa fa-circle-o"></i>Browse File</a></li>
                 <li><a href="<?php echo base_url('index.php/SendMail'); ?>"><i class="fa fa-circle-o"></i>Send Email</a></li>
                   <li><a href="<?php echo base_url('index.php/GeneratePDF'); ?>"><i class="fa fa-circle-o"></i>GeneratePDF</a></li>
         <li><a href="<?php echo base_url('index.php/GenerateExcel'); ?>"><i class="fa fa-circle-o"></i>GenerateExcel</a></li>
            <li><a href="<?php echo base_url('index.php/LiveSearchl'); ?>"><i class="fa fa-circle-o"></i>LiveSearch</a></li>     
                            <li><a href="<?php echo base_url('index.php/Welcome/PlayVideo'); ?>"><i class="fa fa-circle-o"></i>PlayVideo</a></li>     
                            <li><a href="<?php echo base_url('index.php/Welcome/OpenNwWindow'); ?>"><i class="fa fa-circle-o"></i>OpenNwWindow</a></li>     
                            <li><a href="<?php echo base_url('index.php/Welcome/PrintPreview'); ?>"><i class="fa fa-circle-o"></i>PrintPreview</a></li>     

                </ul>
            </li>
            <li class="treeview <?php //if(!empty($first_menu) && $first_menu == 'master_table' ){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Jquery</span>
                    <i class="fa fa-angle-left pull-right"></i> 
                </a>
                <ul class="treeview-menu">
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Dragable'); ?>"><i class="fa fa-circle-o"></i> Dragable</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Dropable'); ?>"><i class="fa fa-circle-o"></i> Dropable</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Resizeable'); ?>"><i class="fa fa-circle-o"></i> Resizeable</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Selectable'); ?>"><i class="fa fa-circle-o"></i> Selectable</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Sortable'); ?>"><i class="fa fa-circle-o"></i> Sortable</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/collapsible_content_panels '); ?>"><i class="fa fa-circle-o"></i> collapsible content panels</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Autocomplete'); ?>"><i class="fa fa-circle-o"></i> Autocomplete</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Checkboxradio'); ?>"><i class="fa fa-circle-o"></i> Checkboxradio</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Controlgroup'); ?>"><i class="fa fa-circle-o"></i> Controlgroup</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/Datepicker'); ?>"><i class="fa fa-circle-o"></i> Datepicker</a></li>
                     <li><a href="<?php echo base_url('index.php/JqueryUI/ClickClose'); ?>"><i class="fa fa-circle-o"></i> ClickClose</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Menu'); ?>"><i class="fa fa-circle-o"></i> Menu</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Slider'); ?>"><i class="fa fa-circle-o"></i> Slider</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Spinner'); ?>"><i class="fa fa-circle-o"></i> Spinner</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Tabs'); ?>"><i class="fa fa-circle-o"></i> Tabs</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Tooltip'); ?>"><i class="fa fa-circle-o"></i> Tooltip</a></li>
                   <li><a href="<?php echo base_url('index.php/JqueryUI/AddClass'); ?>"><i class="fa fa-circle-o"></i> AddClass</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/ColorAnimation'); ?>"><i class="fa fa-circle-o"></i> ColorAnimation</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Effects'); ?>"><i class="fa fa-circle-o"></i> Effects</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Show'); ?>"><i class="fa fa-circle-o"></i> Show</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/OnclickLarge'); ?>"><i class="fa fa-circle-o"></i> OnclickLarge</a></li>
                    <li><a href="<?php echo base_url('index.php/JqueryUI/Toggle'); ?>"><i class="fa fa-circle-o"></i>Toggle</a></li>

                    <?php
//                      $sql   =   $this->db->query("SELECT * FROM preferences_unitlist");
//         $result    =   $sql->result();
//
// 
//         if(isset($result[0]->unit_list)){
//         if(count($result)<1 OR $result[0]->unit_list=="F"){
           ?>
                     <!--<li class="<?php //if(!empty($second_menu) && $second_menu == 'Unit_List' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Unit_List' ){ echo 'selected';}?>" href="<?php echo base_url('Unit_list_controll'); ?>"><i class="fa fa-circle-o"></i> Unit List</a></li>-->
                    
                     <?php
      //   }
            
            
//         if($result[0]->unit_list=="T"){
//           
//         }
//         
//         }else{
//            ?>
                           <!--<li class="<?php // if(!empty($second_menu) && $second_menu == 'Unit_List' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Unit_List' ){ echo 'selected';}?>" href="<?php echo base_url('Unit_list_controll'); ?>"><i class="fa fa-circle-o"></i> Unit List</a></li>-->
                    <?php
//         }  
         ?>
                          
<!--                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Unit_List' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Unit_List' ){ echo 'selected';}?>" href="<?php echo base_url('Unit_list_controll'); ?>"><i class="fa fa-circle-o"></i> Unit List</a></li>-->
<!--                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Fixed_assets' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Fixed_assets' ){ echo 'selected';}?>" href="<?php echo base_url('Fixed_assets_controll'); ?>"><i class="fa fa-circle-o"></i> Fixed Assets</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Find_Option' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Find_Option' ){ echo 'selected';}?>" href="<?php echo base_url('Find_Option_Controll'); ?>"><i class="fa fa-circle-o"></i> Find Option</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Other_Names' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Other_Names' ){ echo 'selected';}?>" href="<?php echo base_url('Other_names_controll'); ?>"><i class="fa fa-circle-o"></i> Other Names List</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Mycompany_Add' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Mycompany_Add' ){ echo 'selected';}?>" href="<?php echo base_url('Mycompany_controll/LoadMycompanyView'); ?>"><i class="fa fa-circle-o"></i> Add Company</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Mycompany_List' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Mycompany_List' ){ echo 'selected';}?>" href="<?php echo base_url('Mycompany_controll'); ?>"><i class="fa fa-circle-o"></i> My Company</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Tax_code' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Tax_code' ){ echo 'selected';}?>" href="<?php echo base_url('Tax_code_con'); ?>"><i class="fa fa-bars"></i> Tax Code List</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Opening_balance' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Opening_balance' ){ echo 'selected';}?>" href="<?php echo base_url('Opening_balance_con'); ?>"><i class="fa fa-bars"></i> Opening Balance</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Mycompany_List' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Mycompany_List' ){ echo 'selected';}?>" href="<?php echo base_url('Job_list_controll'); ?>"><i class="fa fa-bars"></i> Job List</a></li>-->
                   
                                        
                    //<?php
//                      $sql   =   $this->db->query("SELECT * FROM preferences_unitlist");
//         $result    =   $sql->result();
//
// 
//         if(isset($result[0]->unit_list)){
//         if(count($result)<1 OR $result[0]->unit_list=="F"){
//           ?>
                    
                     <?php
       //  }
            
            
//         if($result[0]->unit_list=="T"){
//             ?>
<!--                 <li><a href="<?php echo base_url('Unit_of_measure_controll'); ?>"><i class="fa fa-bars"></i> Unit of Measure</a></li>-->
      <?php //}
//         
//         }else{
//            ?>
                    //<?php
//         }  
         ?>
                    
                    
                    
<!--                    <li><a href="<?php echo base_url('Unit_of_measure_controll'); ?>"><i class="fa fa-bars"></i> Unit of Measure</a></li>-->
<!--                <li><a href="<?php echo base_url('areaList'); ?>"><i class="fa  fa-map-marker"></i> Area List</a></li>
<li><a href="<?php echo base_url('chargeList'); ?>"><i class="fa  fa-hand-lizard-o"></i> Charges Type List</a></li>
<li><a href="<?php echo base_url('assetsList'); ?>"><i class="fa  fa-tags"></i> Assets Type List</a></li>
<li><a href="<?php echo base_url('assetsList/assest_detail'); ?>"><i class="fa  fa-home"></i> Assets Detail</a></li>
<li><a href="<?php echo base_url('collector'); ?>"><i class="fa  fa-male"></i> Collector</a></li>
<li><a href="<?php echo base_url('marketingOfficer'); ?>"><i class="fa  fa-user"></i> Marketing Officer</a></li>
<li><a href="<?php echo base_url('customer'); ?>"><i class="fa  fa-users"></i> Customer</a></li>
<li><a href="<?php echo base_url('holiday'); ?>"><i class="fa  fa-futbol-o "></i> Holidays</a></li>
<li><a href="<?php echo base_url('loan'); ?>"><i class="fa fa-get-pocket"></i> Loan Types</a></li>
<li>
<a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
<li>
  <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
  </ul>
</li>
</ul>
</li>-->
                </ul>                
            </li>

            <li> <a href="<?php echo base_url('Suppliear_controll'); ?>"> <i class="fa fa-users "></i> <span>Suppliers</span> 
                </a>
            </li>
            <!--                        <li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-users"></i>
                                            <span>Suppliers</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php // echo base_url('Purches_requsisition_Control');     ?>"><i class="fa fa-bars"></i> Purchase Requisition</a></li>
                                            <li><a href="<?php // echo base_url('GRN_Returns_Control');     ?>"><i class="fa fa-circle-o"></i> GRN Returns</a></li>
                                            <li><a href="<?php // echo base_url('GRN_Control');     ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                                            <li><a href="<?php // echo base_url('Bill_Controll');     ?>"><i class="fa fa-circle-o"></i> Bill</a></li>
                                            <li><a href="<?php // echo base_url('Write_cheques_controll');      ?>"><i class="fa fa-circle-o"></i> Write Cheques</a></li>
                                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
                                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
                                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-circle-o"></i> GRN / Bill <i class="fa fa-angle-left pull-right"></i></a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="<?php // echo base_url('GRN_Control');      ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Bill</a></li>
                                                                </ul>
                                                            </li>
                                        </ul>
                                    </li>-->
            <li class="treeview <?php if(!empty($first_menu) && $first_menu == 'Bank' ){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-university"></i>
                    <span>Bank</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Write_cheques' ){ echo 'active';}?>" ><a class="<?php if(!empty($second_menu) && $second_menu == 'Write_cheques' ){ echo 'selected';}?>"  href="<?php echo base_url('Write_cheques_controll'); ?>"><i class="fa fa-circle-o"></i> Write Cheques</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Deposits' ){ echo 'active';}?>" ><a class="<?php if(!empty($second_menu) && $second_menu == 'Fund_Transfer' ){ echo 'selected';}?>" href="<?php echo base_url('Fund_Transfer_Controll'); ?>"><i class="fa fa-circle-o"></i> Fund Transfer</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Fund_Transfer' ){ echo 'active';}?>" ><a class="<?php if(!empty($second_menu) && $second_menu == 'Deposits' ){ echo 'selected';}?>" href="<?php echo base_url('Deposits_controll'); ?>"><i class="fa fa-circle-o"></i> Deposits</a></li>
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Bank_reconcilation' ){ echo 'active';}?>" ><a class="<?php if(!empty($second_menu) && $second_menu == 'Bank_reconcilation' ){ echo 'selected';}?>"  onclick="isCheakHavePreviousReconcile()" href="#" ><i class="fa fa-circle-o" ></i>Bank Reconciliation</a></li>
                    <!--<li><a onclick="" href="<?php // echo base_url('Bank_reconciliation_control'); ?>"><i class="fa fa-circle-o" ></i>Bank Reconciliation</a></li>-->
<!--                    <li><a href="#<?php // echo base_url('test_control');      ?>"><i class="fa fa-circle-o"></i> Data Table Test</a></li>-->
                    <!--<li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
                    <!--                <li>
                                        <a href="#"><i class="fa fa-circle-o"></i> GRN / Bill <i class="fa fa-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php // echo base_url('GRN_Control');      ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Bill</a></li>
                                        </ul>
                                    </li>-->
                </ul>
            </li>
            <!--//----------------------------------------------------------------------------------------------------------------->

            <!--//----------------------------------------------------------------------------------------------------------------->
            <script>
                function addNewSite() {
//                            if ($("#site :selected").text() == 'Add New') {
//                                document.getElementById('lblsiteDetails').innerHTML = '';
                    $('#sitesModal').modal('show');
//                            }
                }
            </script>

            <li> <a href="<?php echo base_url('Invoice_control'); ?>"> <i class="fa fa-user "></i> <span>Customer</span> 
                </a>
            </li>
            <li class="treeview">
                <a href="www.google.com"><i class="fa fa-industry"></i><span> Company</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
<!--                            <li><a href="<?php // echo base_url('Purches_requsisition_Control');     ?>"><i class="fa fa-bars"></i> Purchase Requisition</a></li>
                   <li><a href="<?php // echo base_url('GRN_Control');     ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                  <li><a href="<?php // echo base_url('Bill_Controll');     ?>"><i class="fa fa-circle-o"></i> Bill</a></li>
                  <li><a href="<?php echo base_url('Invoice_control/profoma_invoice_Add_UI'); ?>"><i class="fa fa-circle-o"></i> Proforma Invoice</a></li>-->
                    <li><a href="<?php echo base_url('Journal_controll'); ?>"><i class="fa fa-circle-o"></i> Journal</a></li>
<!--               <li><a href="<?php echo base_url('Stock_transfer_con'); ?>"><i class="fa fa-circle-o"></i> Stock Transfer</a></li>-->
<!--                <li><a href="<?php echo base_url('Invoice_control/SVAT_invoice_Add_UI'); ?>"><i class="fa fa-circle-o"></i> SVAT invoice</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/sales_return_Add_UI'); ?>"><i class="fa fa-circle-o"></i> Sales Return</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/dispatch_note_Add_UI'); ?>"><i class="fa fa-circle-o"></i> Dispatch Note</a></li>
                    <li><a href="#<?php // echo base_url('welcome');     ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="#<?php // echo base_url('welcome');     ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="#<?php // echo base_url('welcome');     ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
                    <!--                            <li>
                                                    <a href="#"><i class="fa fa-circle-o"></i> GRN / Bill <i class="fa fa-angle-left pull-right"></i></a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="<?php // echo base_url('GRN_Control');     ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Bill</a></li>
                                                    </ul>
                                                </li>-->
                    <li><a href="<?php echo base_url('Setupbudget_controll'); ?>"><i class="fa fa-circle-o"></i>Setup Budget</a></li>
                </ul>
            </li>





            <!--//Comment By DILAN-->


                <li class="treeview <?php if(!empty($first_menu) && $first_menu == 'Report' ){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Reports</span>
                    <!--<i class="fa fa-list"></i> <span>Reports</span>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                
                <ul class="treeview-menu ">
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'Acc_&_fin' ){ echo 'active';}?>">
                        <a href="#" ><i class="fa fa-line-chart"></i> Company and Financial <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                           
                            <li class="<?php if(!empty($thired_menu) && $thired_menu == 'p_&_l' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'p_&_l' ){ echo 'selected';}?>" href="<?php echo base_url('Report/profitAndLostReport'); ?>"><i class="fa fa-file-text-o "></i> Profit and Loss Report</a></li>
                            <li class="<?php if(!empty($thired_menu) && $thired_menu == 'balance_sheet' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'balance_sheet' ){ echo 'selected';}?>" href="<?php echo base_url('Report/balanceSheetReport'); ?>"><i class="fa fa-file-text-o "></i> Balance Sheet</a></li>
                            <li class="<?php if(!empty($thired_menu) && $thired_menu == 'balance_sheet' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'balance_sheet' ){ echo 'selected';}?>" href="<?php echo base_url('Report/balanceSheetReport2_year_comparison'); ?>"><i class="fa fa-file-text-o "></i> Balance Sheet Year Comparison</a></li>
                        </ul>
                    </li>
                <!--</ul>-->

<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/journalReport'); ?>"><i class="fa fa-file-text-o "></i> Journal Report</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/ledgerReport'); ?>"><i class="fa fa-file-text-o "></i> Ledger Report</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/trialBalanceReport'); ?>"><i class="fa fa-file-text-o "></i> Trial Balance Report</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/profitAndLostReport'); ?>"><i class="fa fa-file-text-o "></i> Profit and Lost Report</a></li>
                </ul>
                <!--                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Report/balanceSheetReport'); ?>"><i class="fa fa-file-text-o "></i> Balance Sheet</a></li>
                                </ul>-->
                
                <!--<ul class="treeview-menu">-->
                    <li>
                        <a href="#"><i class="fa fa-credit-card"></i> Vendors and Payable<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/ApAgingSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> AP Aging Summary</a></li>
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/ApAgingDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> AP Aging Details</a></li>
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/venderBalanceSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Vender Balance Summary</a></li>
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/venderBalanceDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Vender Balance Details</a></li>
                            
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/unpaidBillsReport'); ?>"><i class="fa fa-file-text-o "></i> Unpaid Bills</a></li>
                        </ul>
            </li>

<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/venderBalanceDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Vender Balance Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/venderBalanceSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Vender Balance Summary</a></li>
                </ul>-->

<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/ApAgingSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> AP Aging Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/ApAgingDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> AP Aging Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/unpaidBillsReport'); ?>"><i class="fa fa-file-text-o "></i> Unpaid Bills</a></li>
                </ul>-->

                <!--<ul class="treeview-menu">-->
                    <li>
                        <a href="#"><i class="fa fa-users"></i> Customers and Receivable<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/customerAgingSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Aging Summary</a></li>
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/customerAgingDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Aging Details</a></li>
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/CustomerStatement'); ?>"><i class="fa fa-file-text-o "></i> Customer Statement</a></li>
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/customerBalanceDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Balance Details</a></li>
                            
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/customerBalanceSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Balance Summary</a></li>
                            
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report/openInvoiceReport'); ?>"><i class="fa fa-file-text-o "></i> Open Invoices</a></li>
                        </ul>
                    </li>
                <!--</ul>-->

<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/openInvoiceReport'); ?>"><i class="fa fa-file-text-o "></i> Open Invoices</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/customerBalanceDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Balance Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/customerBalanceSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Balance Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/customerAgingDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Aging Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report/customerAgingSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Customer Aging Summary</a></li>
                </ul>-->


                
                
<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByCustomerSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Customer Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByCustomerDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Customer Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByItemSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Item Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByItemDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Item Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByRepSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Rep Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByRepDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Rep Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByClassSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Class Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleByClassDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Class Details</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleBySiteSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Site Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_two/saleBySiteDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Site Details</a></li>
                </ul>-->
                
                <!--<ul class="treeview-menu">-->
                    <li>
                      <a href="#"><i class="fa fa-money"></i> Sales <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByCustomerSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Customer Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByCustomerDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Customer Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByRepSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Rep Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByRepDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Rep Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByItemSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Item Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByItemDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Item Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByClassSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Class Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleByClassDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Class Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleBySiteSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Site Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_two/saleBySiteDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Sale by Site Details</a></li>
                      </ul>
                    </li>
<!--                    <li>
                        <a href="#"><i class="fa fa-money"></i> Posting Reports<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                           <li>
                                <a href="#"><i class="fa fa-money"></i> Cash Sales<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php // echo base_url('Reports_con_5'); ?>"><i class="fa fa-file-text-o "></i> Cash Sales Summary</a></li> By Lahiru Attanayaka
                                    <li><a href="<?php // echo base_url('Reports_con_6'); ?>"><i class="fa fa-file-text-o "></i> Cash Sales Details</a></li> By Lahiru Attanayaka
                                </ul>
                    </li></ul>
                    </li>-->
                    <li>
                        <a href="#"><i class="fa fa-money"></i> Inventory<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Reports_con_8'); ?>"><i class="fa fa-file-text-o "></i> Stock Valuation Summary</a></li> <!--By Lahiru Attanayaka-->
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Reports_con_9'); ?>"><i class="fa fa-file-text-o "></i> Stock Valuation Details</a></li> 
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Reports_con_10'); ?>"><i class="fa fa-file-text-o "></i> Stock Valuation Details by Site</a></li> 
                            <!--<li><a href="<?php // echo base_url('Reports_con_7'); ?>"><i class="fa fa-file-text-o "></i> Stock Aging Report</a></li>--> 
                        </ul>
                    </li>
                <!--</ul>-->
                <!--<ul class="treeview-menu">-->
                    <li>
                      <a href="#"><i class="fa fa-shopping-cart"></i> Purchases <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseByVendorSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Vendor Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseByVendorDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Vendor Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseByItemSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Item Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseByItemDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Item Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseByClassSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Class Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseByClassDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Class Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseBySiteSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Site Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/purchaseBySiteDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Site Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/openPurchaseOrderReport'); ?>"><i class="fa fa-file-text-o "></i> Open Purchase Order Report</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/openPurchaseRequestReport'); ?>"><i class="fa fa-file-text-o "></i> Open Purchase Requests </a></li>
                      </ul>
                    </li>
                <!--</ul>-->
                <!--<ul class="treeview-menu">-->
                    <li>
                      <a href="#"><i class="fa fa-university"></i> Banking <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report/Chequereport'); ?>"><i class="fa fa-file-text-o "></i> Cheque & Voucher Printing</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/bankReconciliationSummary'); ?>"><i class="fa fa-file-text-o "></i> Bank Reconciliation Summary</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/bankReconciliationDetail'); ?>"><i class="fa fa-file-text-o "></i> Bank Reconciliation Details</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_con_6/PD_cheque_receviedReport'); ?>"><i class="fa fa-file-text-o "></i>PD Cheque Recevied Report</a></li>
                        <li><a  onclick="setLoading();" href="<?php echo base_url('Report_con_6/PD_cheque_issuedReport'); ?>"><i class="fa fa-file-text-o "></i>PD Issued Report</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-university"></i> Accountant & Taxes <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                                                      <li class="<?php if(!empty($thired_menu) && $thired_menu == 'trial_balance' ){ echo 'active';}?>"><a class="<?php if(!empty($thired_menu) && $thired_menu == 'trial_balance' ){ echo 'selected';}?>" href="<?php echo base_url('Report/trialBalanceReport'); ?>"><i class="fa fa-file-text-o "></i> Trial Balance</a></li>

                            <li class="<?php if(!empty($thired_menu) && $thired_menu == 'ledger' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'ledger' ){ echo 'selected';}?>" href="<?php echo base_url('Report/ledgerReport'); ?>"><i class="fa fa-file-text-o "></i> General Ledger</a></li>
                           <li class="<?php if(!empty($thired_menu) && $thired_menu == 'journal' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'journal' ){ echo 'selected';}?>" href="<?php echo base_url('Report/journalReport'); ?>"><i class="fa fa-file-text-o "></i> Journal</a></li>
                           <li class="<?php if(!empty($thired_menu) && $thired_menu == 'journal' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'journal' ){ echo 'selected';}?>" href="<?php echo base_url('Report/journalReport_Defference'); ?>"><i class="fa fa-file-text-o "></i> Journal different</a></li>
                                                  <li class="<?php if(!empty($thired_menu) && $thired_menu == 'audit_trail' ){ echo 'active';}?>"><a  onclick="setLoading();" class="<?php if(!empty($thired_menu) && $thired_menu == 'audit_trail' ){ echo 'selected';}?>" href="<?php echo base_url('Audit_trail'); ?>"><i class="fa fa-search "></i> Audit Trail</a></li>
                               <li><a  onclick="setLoading();" href="<?php echo base_url('Report_three/VATDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> VAT Details</a></li>
                          <li><a  onclick="setLoading();"href="<?php echo base_url('Report_three/NBTDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> NBT Details</a></li>
                          <li><a  onclick="setLoading();" href="<?php echo base_url('Report_con_tax/SvatInvoiceSummary'); ?>"><i class="fa fa-file-text-o "></i> SVAT Invoice Summary</a></li>
                      </ul>
                    </li>
<!--                    <li>
                        <a href="#"><i class="fa fa-university"></i> Tax Reports <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                      
                        </ul>
                    </li>-->
                    <li>
                        <a href="#"><i class="fa fa-fonticons"></i> Fixed Asset  <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a  onclick="setLoading();" href="<?php echo base_url('Report_con_fixedasset/fixedasset_listing'); ?>"><i class="fa fa-file-text-o "></i> Fixed Asset Listing</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-paper-plane"></i> Posting Reports <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-retweet"></i> GRN<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Report_4/GRNReport'); ?>"><i class="fa fa-file-text-o "></i>GRN Details</a></li>
                                    <li><a href="<?php echo base_url('Report_4/GRNsummary'); ?>"><i class="fa fa-file-text-o "></i> GRN Summary</a></li>

 <!--<li><a href="<?php // echo base_url('Reports_con_7');         ?>"><i class="fa fa-file-text-o "></i> Stock Aging Report</a></li>--> 
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-repeat"></i> GRN Return<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">

                                    <li><a href="<?php echo base_url('Report_4/GrnReturnDeatail'); ?>"><i class="fa fa-file-text-o "></i>GRN Return Details</a></li>
                                    <li><a href="<?php echo base_url('Report_4/GrnReturnSummary'); ?>"><i class="fa fa-file-text-o "></i>GRN Return Summary</a></li>
                                     <!--<li><a href="<?php // echo base_url('Reports_con_7');         ?>"><i class="fa fa-file-text-o "></i> Stock Aging Report</a></li>--> 
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-indent"></i>Invoice<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">

                                    <li><a href="<?php echo base_url('Report_4/createInvoiceReport'); ?>"><i class="fa fa-file-text-o "></i> Invoice Details</a></li>
                                    <li><a href="<?php echo base_url('Report_4/InvoiceSummary'); ?>"><i class="fa fa-file-text-o "></i> Invoice Summary</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-money"></i>Cash Invoice<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">

                                    <li><a href="<?php echo base_url('Report_4/Cash_invoice_Deatail'); ?>"><i class="fa fa-file-text-o "></i> Cash Invoice Details</a></li>
                                    <li><a href="<?php echo base_url('Report_4/Cash_invoice_Summary'); ?>"><i class="fa fa-file-text-o "></i> Cash Invoice Summary</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-frown-o"></i>Sales return<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">

                                    <li><a href="<?php echo base_url('Report_4/Sales_return_Detail'); ?>"><i class="fa fa-file-text-o "></i> Sales return Details</a></li>
                                    <li><a href="<?php echo base_url('Report_4/Sales_return_Summary'); ?>"><i class="fa fa-file-text-o "></i> Sales return Summary</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-btc"></i>Bill<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">

                                    <li><a href="<?php echo base_url('Report_5/Bill_detail'); ?>"><i class="fa fa-file-text-o "></i> Bill Detail</a></li>
                                    <li><a href="<?php echo base_url('Report_5/Bill_Summary'); ?>"><i class="fa fa-file-text-o "></i> Bill Summary</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-exclamation-triangle"></i>Issue Note<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">

                                    <li><a href="<?php echo base_url('Report_5/Issue_note_detail'); ?>"><i class="fa fa-file-text-o "></i>Issue Note Detail</a></li>
                                    <li><a href="<?php echo base_url('Report_5/Issue_note_summary'); ?>"><i class="fa fa-file-text-o "></i>Issue Note Summary</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-cc-mastercard"></i>Customer Payment<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Report_con_6/Customer_Payment_Detail'); ?>"><i class="fa fa-file-text-o "></i>Customer Payment Detail</a></li>
                                    <li><a href="<?php echo base_url('Report_con_6/Customer_Payment_Summary'); ?>"><i class="fa fa-file-text-o "></i>Customer Payment Summary</a></li>


                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-balance-scale"></i>Pay Bill<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Report_con_6/Pay_Bill_Detail'); ?>"><i class="fa fa-file-text-o "></i>Pay Bill Detail</a></li>
                                    <li><a href="<?php echo base_url('Report_con_6/Pay_Bill_Summary'); ?>"><i class="fa fa-file-text-o "></i>Pay Bill Summary</a></li>
                                </ul>
                            </li>








                            <li><a href="<?php echo base_url('ReportItemTransfer'); ?>"><i class="fa fa-file-text-o "></i>Item Transfer</a></li>
                            <li><a href="<?php echo base_url('Report_5/Journal_detail'); ?>"><i class="fa fa-file-text-o "></i>Journal Detail</a></li>
                            <li><a href="<?php echo base_url('Report_5/Write_Cheque_detail'); ?>"><i class="fa fa-file-text-o "></i>Write Cheque Detail</a></li>
                            <li><a href="<?php echo base_url('Report_5/Diposit_detail'); ?>"><i class="fa fa-file-text-o "></i>Deposit Detail</a></li>
                            <li><a href="<?php echo base_url('Report_5/Stock_transfer_detail'); ?>"><i class="fa fa-file-text-o "></i>Stock Transfer Detail</a></li>
                            <!--<li><a href="<?php echo base_url('Report_6/profitAndLostReport_bymonth'); ?>"><i class="fa fa-file-text-o "></i>Profit & Lost by month</a></li>-->

<!--<li><a href="<?php // echo base_url('Report_three/NBTDetailsReport');         ?>"><i class="fa fa-file-text-o "></i> NBT Details</a></li>-->
                        </ul>
                    </li>
                    <li>
                <a href="#"><i class="fa fa-paper-plane-o"></i>Non Posting Reports <i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu">
                       <li>
                        <a href="#"><i class="fa fa-pinterest-p"></i>Proforma Invoise<i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Report_noncon_1/PI_detail');?>"><i class="fa fa-file-text-o "></i>PI Details</a></li>
                                <li><a href="<?php echo base_url('Report_noncon_1/PI_summary'); ?>"><i class="fa fa-file-text-o "></i>PI  Summary</a></li>
                          </ul>
                       </li>
                       <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i>Purchase Order<i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Report_noncon_1/POrder_detail'); ?>"><i class="fa fa-file-text-o "></i>POrder Details</a></li>
                                <li><a href="<?php echo base_url('Report_noncon_1/POrder_summary'); ?>"><i class="fa fa-file-text-o "></i>POrder Summary</a></li>
                            </ul>
                       </li>
                       <li>
                        <a href="#"><i class="fa fa-registered"></i>Purchase Requisition<i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Report_noncon_1/PRequisition_detail'); ?>"><i class="fa fa-file-text-o "></i>PRequisition detail</a></li>
                                <li><a href="<?php echo base_url('Report_noncon_1/PRequisition_summary'); ?>"><i class="fa fa-file-text-o "></i>PRequisition Summary</a></li>
                           </ul>
                       </li>
                       <li>
                        <a href="#"><i class="fa fa-shopping-basket"></i>Job Order<i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Report_noncon_2/JobOrder_detail'); ?>"><i class="fa fa-file-text-o "></i>JobOrder Detail</a></li>
                                <li><a href="<?php echo base_url('Report_noncon_2/JobOrder_summary'); ?>"><i class="fa fa-file-text-o "></i>JobOrder Summary</a></li>
                            </ul>
                       </li>
                       <li>
                        <a href="#"><i class="fa fa-edge"></i>Estimate<i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Report_noncon_2/Estimate_detail'); ?>"><i class="fa fa-file-text-o "></i>Estimate Detail</a></li>
                                <li><a href="<?php echo base_url('Report_noncon_2/Estimate_summary'); ?>"><i class="fa fa-file-text-o "></i>Estimate Summary</a></li>
                             </ul>
                       </li>                   
                                <li><a href="<?php echo base_url('Report_noncon_2/DeliverNote_detail'); ?>"><i class="fa fa-file-text-o "></i>Deliver Note Detail</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseByVendorSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Vendor Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseByVendorDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Vendor Details</a></li>
                </ul>-->
<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseByItemSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Item Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseByItemDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Item Details</a></li>
                </ul>-->
<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseByClassSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Class Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseByClassDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Class Details</a></li>
                </ul>-->
<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseBySiteSummaryReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Site Summary</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/purchaseBySiteDetailsReport'); ?>"><i class="fa fa-file-text-o "></i> Purchase by Site Details</a></li>
                </ul>-->
                
<!--                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/openPurchaseOrderReport'); ?>"><i class="fa fa-file-text-o "></i> Open Purchase Order Report</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Report_three/openPurchaseRequestReport'); ?>"><i class="fa fa-file-text-o "></i> Open Purchase Request Report</a></li>
                </ul>-->
            </li>
            
            <li class="treeview">
                <a href="www.google.com"><i class="fa fa-shopping-basket"></i><span> Inventory</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
<!--                            <li><a href="<?php // echo base_url('Purches_requsisition_Control');     ?>"><i class="fa fa-bars"></i> Purchase Requisition</a></li>
                   <li><a href="<?php // echo base_url('GRN_Control');     ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                  <li><a href="<?php // echo base_url('Bill_Controll');     ?>"><i class="fa fa-circle-o"></i> Bill</a></li>
                  <li><a href="<?php echo base_url('Invoice_control/profoma_invoice_Add_UI'); ?>"><i class="fa fa-circle-o"></i> Proforma Invoice</a></li>-->
                    <li><a href="<?php echo base_url('journal_controll'); ?>"><i class="fa fa-circle-o"></i> Journal</a></li>
                     <li><a href="<?php echo base_url('Item_transfer_con'); ?>"><i class="fa fa-circle-o"></i>Item Transfer</a></li>
                    <li><a href="<?php echo base_url('Stock_transfer_con'); ?>"><i class="fa fa-circle-o"></i> Stock Transfer</a></li>
<!--                            <li><a href="<?php echo base_url('Invoice_control/SVAT_invoice_Add_UI'); ?>"><i class="fa fa-circle-o"></i> SVAT invoice</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/sales_return_Add_UI'); ?>"><i class="fa fa-circle-o"></i> Sales Return</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/dispatch_note_Add_UI'); ?>"><i class="fa fa-circle-o"></i> Dispatch Note</a></li>
                    <li><a href="#<?php // echo base_url('welcome');     ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="#<?php // echo base_url('welcome');     ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="#<?php // echo base_url('welcome');     ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
                    <!--                            <li>
                                                    <a href="#"><i class="fa fa-circle-o"></i> GRN / Bill <i class="fa fa-angle-left pull-right"></i></a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="<?php // echo base_url('GRN_Control');     ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Bill</a></li>
                                                    </ul>
                                                </li>-->
                </ul>
            </li>



            <!--//Comment By DILAN-->

<!--            <li> <a href="<?php // echo base_url('Process'); ?>"> <i class="fa fa-pencil-square-o "></i> <span>Marketing Form</span> 
                </a>
            </li>
            <li>
              <a href="<?php echo base_url('Process/loanApplication'); ?>">
                <i class="fa fa-pencil-square-o "></i> <span>Loan Application Form</span> 
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('Process/loanSummary'); ?>">
                <i class="fa fa-pencil-square-o "></i> <span>Loan Summary</span> 
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('Process/customerPaymentForm'); ?>">
                <i class="fa fa-pencil-square-o "></i> <span>Customer Payment</span> 
              </a>
            </li>-->






            <!--//end  Comment By DILAN-->

















            <!--            <li class="treeview">
                          <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Layout Options</span>
                            <span class="label label-primary pull-right">4</span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                          </ul>
                        </li>-->




            <!--            <li>
                          <a href="#<?php echo base_url('welcome'); ?>">
                            <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>
                          </a>
                        </li>-->
            <!--            <li class="treeview">
                          <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Charts</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                          </ul>
                        </li>-->
            <!--            <li class="treeview">
                          <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> General</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Icons</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Modals</a></li>
                          </ul>
                        </li>-->
            <!--            <li class="treeview">
                          <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
                          </ul>
                        </li>-->
            <!--            <li class="treeview">
                          <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Data tables</a></li>
                          </ul>
                        </li>-->
            <!--            <li>
                          <a href="#<?php // echo base_url('welcome');      ?>">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <small class="label pull-right bg-red">3</small>
                          </a>
                        </li>-->
            <!--            <li>
                          <a href="#<?php // echo base_url('welcome');      ?>">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <small class="label pull-right bg-yellow">12</small>
                          </a>
                        </li>-->
            <!--            <li class="treeview active">
                          <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Login</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Register</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                            <li class="active"><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                          </ul>
                        </li>-->



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Activities</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
<!--                    <li><a href="<?php echo base_url('Item_transfer_con'); ?>"><i class="fa fa-circle-o"></i>Item Transfer</a></li>-->
<!--                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                    <li class="<?php if(!empty($second_menu) && $second_menu == 'UWiseTrans' ){ echo 'active';}?>" ><a class="<?php if(!empty($second_menu) && $second_menu == 'UWiseTrans' ){ echo 'selected';}?>" href="<?php echo base_url('Report_user'); ?>"><i class="fa fa-circle-o"></i> User Wise Transactions</a></li>
                </ul>
            </li>
<!--            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Excel Integration</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('test_control'); ?>"><i class="fa fa-circle-o"></i> Data Table Test</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/loadAddExcel_File'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="<?php echo base_url('Excel_import_con'); ?>"><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/Excel_File_test'); ?>"><i class="fa fa-circle-o"></i>TEST Invoice</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>-->
             <?php //if($this->usertypemain=="admin"){
                               ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-thumbs-up"></i> <span>Approval</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Approvals_controll/grn_Approve_sumary'); ?>"><i class="fa fa-circle-o"></i> GRN</a></li>
                    <li><a href="<?php echo base_url('Approvals_controll/pi_Approve'); ?>"><i class="fa fa-circle-o"></i> Proforma Invoice</a></li>
                    <li><a href="<?php echo base_url('Approvals_controll/WriteCheques_Approve_sumary'); ?>"><i class="fa fa-circle-o"></i>  Write Cheques </a></li>
                    <li><a href="<?php echo base_url('Approvals_controll/Bill_Approve_sumary'); ?>"><i class="fa fa-circle-o"></i>  Bill</a></li>
                    <li><a href="<?php echo base_url('Approvals_controll/salseReturn_Approve_sumary'); ?>"><i class="fa fa-circle-o"></i>  Credit Note</a></li>
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--> 
<!--                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul> 
                    </li>-->
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
                </ul>
            </li>
<?php// } ?>

          <!--   <li class="treeview">
                <a href="<?php echo base_url('Excel_import_con'); ?>">
                    <i class="fa fa-share"></i> <span>Excel Integration</span>
           
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('test_control'); ?>"><i class="fa fa-circle-o"></i> Data Table Test</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/loadAddExcel_File'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="<?php echo base_url('Excel_import_con'); ?>"><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="<?php echo base_url('Invoice_control/Excel_File_test'); ?>"><i class="fa fa-circle-o"></i>TEST Invoice</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>-->
            <?php //if($this->usertypemain=="admin"){
                               ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-thumbs-up"></i> <span>Preferences</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                     
                           
                     <li class="<?php if(!empty($second_menu) && $second_menu == 'Setup User' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Setup User' ){ echo 'selected';}?>" href="<?php echo base_url('Setup_user_control'); ?>"><i class="fa fa-circle-o"></i> Setup User</a></li>
                     <li class="<?php if(!empty($second_menu) && $second_menu == 'Period Lock' ){ echo 'active';}?>"><a class="<?php if(!empty($second_menu) && $second_menu == 'Period Lock' ){ echo 'selected';}?>" href="<?php echo base_url('Period_lock_control'); ?>"><i class="fa fa-circle-o"></i>Period Lock</a></li>
    
                    <li><a href="<?php echo base_url('Preference_control/load_item_and_inventory'); ?>"><i class="fa fa-circle-o"></i>Item & Inventory</a></li>
                    <li><a href="<?php echo base_url('Preference_control/load_site_validation'); ?>"><i class="fa fa-circle-o"></i>Site Validation</a></li>
                    <li><a href="<?php echo base_url('Preference_control/form_customize'); ?>"><i class="fa fa-circle-o"></i>Form Customize</a></li>
<!--                    <li><a href="<?php // echo base_url('Approvals_controll/WriteCheques_Approve_sumary'); ?>"><i class="fa fa-circle-o"></i>  Write Cheques </a></li>
                    <li><a href="<?php // echo base_url('Approvals_controll/Bill_Approve_sumary'); ?>"><i class="fa fa-circle-o"></i>  Bill</a></li>-->
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
<!--                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
                </ul>
            </li>
 <?php// }?>

<!--            <li><a href="#<?php // echo base_url('welcome');      ?>"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->
