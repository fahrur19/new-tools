<!-- jQuery 3 -->
<script src="{{ asset('/assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('/assets/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/assets/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<!-- <script src="{{ asset('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script> -->
<!-- jvectormap -->
<!-- <script src="{{ asset('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{ asset('/assets/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<!-- <script src="{{ asset('/assets/bower_components/moment/min/moment.min.js') }}"></script> -->
<script src="{{ asset('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ asset('/assets/dist/js/pages/dashboard.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('/assets/dist/js/demo.js') }}"></script> -->
<!-- DataTables -->
<script src="{{ asset('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('/assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('/assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('/assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- iCheck -->
<!-- <script src="{{ asset('/assets//iCheck/icheck.min.js') }}"></script> -->
<!-- Select2 -->
<script src="{{ asset('/assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script>
  $(function () {
    $('.select2').select2();
    $('#antrian-tools-ipa').DataTable({
      pageLength:5,
      scrollY: 300,
      "lengthMenu": [[5, 10, 15, 50], [5, 10, 15, 50]]
    });
    $('#list-topic-fb').DataTable({
      // pageLength:5,
      "scrollY": 200,
      "scrollX": true,
      "bLengthChange": false,
    });
    $('#example2').DataTable();
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
    // $('input').iCheck({
    //   checkboxClass: 'icheckbox_square-blue',
    //   radioClass: 'iradio_square-blue',
    //   increaseArea: '20%' /* optional */
    // });
    $('#datepicker1').datepicker({
      autoclose: true
    });
    $('#datepicker2').datepicker({
      autoclose: true
    });
    $('#datepicker3').datepicker({
      autoclose: true
    });
    $('#datepicker4').datepicker({
      autoclose: true
    });
    $('#datepicker5').datepicker({
      autoclose: true
    });
    $('#datepicker6').datepicker({
      autoclose: true
    });
    $('#datepicker10').datepicker({
      autoclose: true
    });
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
      //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Date range picker
    $('#reservation').daterangepicker();
  
  })
</script>
