<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src='assets/plugins/fastclick/fastclick.min.js'></script>
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<script src="assets/dist/js/demo.js" type="text/javascript"></script>
<!-- <script src="assets/https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script> -->
<!-- DataTables -->
<!-- <script src="template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->

<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
    $( '#uang' ).mask('0.000.000.000.000.000.000.000', {
      reverse: true
    });
    $( '#uang1' ).mask('0.000.000.000.000.000.000.000', {
      reverse: true
    });
    $( '#uang2' ).mask('0.000.000.000.000.000.000.000', {
      reverse: true
    });
    $( '#uang3' ).mask('0.000.000.000.000.000.000.000', {
      reverse: true
    });
  });
</script>

