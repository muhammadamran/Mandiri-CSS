<!-- Bootstrap 3.3.2 JS -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->

<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='assets/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>

<!-- DATATABLES -->
<script type="text/javascript" src="assets/plugins/chosen/chosen.jquery.js"></script>
<script src="assets/plugins/input-mask/jquery.maskedinput.js"></script>
<script type="text/javascript">
  $("#dropdown").chosen({width: "100%"});
</script>  

<script src="assets/plugins/input-mask/jquery.maskedinput.js"></script>
<script>
  jQuery(function($){
   $(".date2").mask("9999-99-99",{placeholder:"yyyy-mm-dd"});
   $("#date").mask("9999-99-99",{placeholder:"yyyy-mm-dd"});
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ref").mask("9999-9999-999.999");
   $("#inv").mask("aaa9999999");
 });
</script>

<script type="text/javascript">
  $(document).ready(function() {
  $("#btnExport").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');
    var a = new Date();
    var date_now = a.getYear()+''+a.getDate()+''+ a.getMonth()+Math.floor((Math.random() * 9999999) + 1000000);

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'searchtr' + date_now + '.xls';
    a.click();
  });
});
</script>
<!-- DATATABLES -->
<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/jszip.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/pdfmake.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/vfs_fonts.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/button-flash.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/button.html5.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'      ]
    });
    $('#example2').dataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
</script>