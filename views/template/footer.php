<footer class="main-footer">
    <!--        <div class="pull-right hidden-xs">
              <b>Version</b> 2.2.0
            </div>-->
    <strong>
        <!--Copyright &copy; 2014-2015-->   &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://onlineaccounts.lk/">Â© Quickbalanze Online Accounting.</a></strong>&nbsp; All rights reserved. 
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li>
            <!--              <a href="#" data-toggle="tab">-->
                              <!--<i class="fa fa-home"></i>-->
            <!--</a>-->
        </li>

        <li>
            <!--<a href="#control-sidebar-settings-tab" data-toggle="tab">-->
                <!--<i class="fa fa-gears"></i>-->
            <!--</a>-->
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->

    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->


<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<!--<script src="<?php // echo base_url('assets/bootstrap/js/moment.min.js');             ?>" type="text/javascript"></script>-->
<!-- datatables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
<!--<script src="<?php // echo base_url('assets/plugins/datatables/dataTables.select.min.js'); ?>" type="text/javascript"></script>-->
<!--<script src="<?php // echo base_url('assets/plugins/datatables/jquery-1.11.3.min.js'); ?>" type="text/javascript"></script>-->
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/chartjs/Chart.min.js'); ?>" type="text/javascript"></script>
<!-- <script src="<?php //echo base_url('assets/js/pages/dashboard2.js'); ?>" type="text/javascript"></script> -->

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/accounting.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/nprogress.js'); ?>" type="text/javascript"></script>
<!--<script src="<?php // echo base_url('assets/js/script.js'); ?>" type="text/javascript"></script>-->
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>

<!-- Form Validator -->
<script src="<?php echo base_url('assets/bootstrap/js/validator.js'); ?>"></script>
<!-- Animation -->
<!--<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>-->


<script src="<?php echo base_url('assets/bootstrap/js/moment.min.js'); ?>" type="text/javascript"></script>
<!--<script src="<?php // echo base_url('assets/bootstrap/js/validator.js'); ?>" type="text/javascript"></script>-->
<script src="<?php echo base_url('assets/js/daterangepicker.js'); ?>" type="text/javascript"></script>
<!--<script src="<?php // echo base_url('assets/bootstrap/js/validator.js'); ?>"></script>-->
<script src="<?php echo base_url('assets/js/jQueryRotate.2.2.js'); ?>" type="text/javascript"></script>
<!--<script src="<?php // echo base_url('assets/js/daterangepicker.js');             ?>" type="text/javascript"></script>-->
        <!--<script src="<?php // echo btable-fixed-headerase_url('assets/js/table-fixed-header.js');                ?>" type="text/javascript"></script>-->
<script>
    jQuery(document).ready(function () {
        
NProgress.configure({ showSpinner: false , parent: '#processBar' });
//NProgress.configure({ parent: '#processBar' });
				NProgress.start();
				$('#nprogress .bar').css({'background': '#16a085'});
				$('#nprogress .peg').css({'box-shadow': '0 0 10px #16a085, 0 0 5px #16a085'});
				$('#nprogress .spinner-icon').css({'border-top-color': '#16a085', 'border-left-color': '#16a085'});
				NProgress.done();
//    NProgress.start();
//         $(".errorMsg").fadeOut(3000);
//                $(".information").fadeOut(4000);
        setTimeout(function () {
            $('.information').fadeOut('1500')
        }, 2000);

        $('.date-picker').datepicker({
            autoclose: true
        });
        $('input[name="daterange"]').daterangepicker();
//                $('.time-picker').timepicker();
//                Main.init();
//                FormElements.init();
    });
    
    $("#my_data_table").dataTable();
    $("#my_data_table1").dataTable();
    $("#my_data_table11").dataTable();
    $("#my_data_table2").dataTable();
    $("#my_data_table3").dataTable();
    $("#my_data_table4").dataTable();
    $("#my_data_table5").dataTable();
    $("#my_data_table6").dataTable();
//    $("#my_data_table7").dataTable();
//            $(".select2-class").select2({
////            placeholder: "Select a State",
//                allowClear: true
//            });
//$("#my_data_table_3").dataTable({"bFilter": false});
    $('#my_data_table_3').dataTable({
//        paging: true,
        "bFilter": false,
        "ordering": false,
        paging: false,
        orderable: false,
//        $("#my_data_table_3").hide();
        "aoColumnDefs": [
            {// this remove the sortable function in columns
                'bSortable': false,
                'aTargets': [1, 2, , 3, 4, 5, 6, 7, 8, 9, 10]
            }]
//        'bSortable' : false,
//        'aTargets' : [ 2, 5 ]
    });
    $('#my_data_table_3Update').dataTable({
        "bFilter": false,
        "ordering": false,
        paging: false,
        orderable: false,
        "aoColumnDefs": [
            {// this remove the sortable function in columns
                'bSortable': false,
                'aTargets': [1, 2, , 3, 4, 5, 6, 7, 8, 9, 10]
            }]
    });
    $('#my_data_table_3_bill').dataTable({
        "bFilter": false,
        "ordering": false,
        paging: false,
        orderable: false,
        "aoColumnDefs": [
            {// this remove the sortable function in columns

                'bSortable': false,
                'aTargets': [1, 2, , 3, 4, 5]
            }]
    });


    $('#my_data_table_journal').dataTable({
//        paging: true,
        "bInfo": false,
        "bFilter": false,
        "ordering": false,
        paging: false,
        orderable: false,
//        $("#my_data_table_3").hide();
        "aoColumnDefs": [
            {// this remove the sortable function in columns
                'bSortable': false,
                'aTargets': [1, 2, , 3, 4, 5, 6, 7],
            }]
//        'bSortable' : false,
//        'aTargets' : [ 2, 5 ]
    });
    function isCheakHavePreviousReconcile() { // this function fire navigation.php page -> bank->Bank Reconciliation link onclick="isCheakHavePreviousReconcile()"
        $.ajax({
            url: '<?php echo base_url("Bank_reconciliation_control/cheak_Previous_Reconcilation"); ?>',
            type: 'POST',
            data: {
//                "accountName": accountName,
            },
            success: function (data) {
                if (data === 'have previous Reconciliation') {
                    $('#model_alertReconcil').modal('show');
                } else if (data === 'Dont have previous Reconciliation') {
                    window.location.href = "<?php echo base_url("Bank_reconciliation_control"); ?>";
//                    window.location.href = "Bank_reconciliation_control/load_Previous_Reconcilation";
                }
            }
        });

    }
    function previousReconcilUserClick_No() {
//        alert('you click no delete data');
        $.ajax({
            url: '<?php echo base_url("Bank_reconciliation_control/Delete_Previous_Reconcil_Data"); ?>',
            type: 'POST',
            data: {
//                "accountName": accountName,
            },
            success: function (data) {
                if (data === 'deleteSuccess') {
//                    $('#model_alertReconcil').modal('show');
                    window.location.href = "<?php echo base_url("Bank_reconciliation_control"); ?>";
                }else{
                    alert('Error');
                }
            }
        });



    }
    function previousReconcilUserClick_Yes() {
        window.location.href = "<?php echo base_url("Bank_reconciliation_control/load_Previous_Reconcilation"); ?>";

    }

</script>
<script>
            var angleSec = 0;
            var angleMin = 0;
            var angleHour = 0;

            $(document).ready(function () {
                $("#seconds").rotate(angleSec);
                $("#minutes").rotate(angleMin);
                $("#hours").rotate(angleHour);
            });

            setInterval(function () {

                var d = new Date;

                angleSec = (d.getSeconds() * 6);
                $("#seconds").rotate(angleSec);

                angleMin = (d.getMinutes() * 6);
                $("#minutes").rotate(angleMin);

                angleHour = ((d.getHours() * 5 + d.getMinutes() / 12) * 6);
                $("#hours").rotate(angleHour);

            }, 1000);

        </script>
</body>
</html>
