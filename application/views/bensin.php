<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!--ion slider-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionslider/ion.rangeSlider.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionslider/ion.rangeSlider.skinNice.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-slider/slider.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css" >
  </head>

</head>
<body>
 <div class="container">
 	<div class="col-md-12">
 		<div class="col-md-4">
 			
 		</div>
 		<div class="col-md-4">
 			<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">isi bensi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body	">
	            <div>
	              <label>Premium (Rp. 7000)</label>
	              <input class="from-control" id="premium" placeholder="Jumlah liter" ></input>
	            </div>
	            <br>
	             <div>
	              <label>Pertalite (Rp. 7500)</label>
	              <input class="from-control" id="pertalite" placeholder="Jumlah liter"></input>
	            </div>
	            <br>
	             <div>
	              <label>Pretamax (Rp. 8000)</label>
	              <input class="from-control" id="pertamak" placeholder="Jumlah liter"></input>
	            </div>
	            <br>
	             <div>
	              <label>Bayar</label>
	              <input class="from-control" id="total" placeholder="Total bayar"></input>
	            </div>
	            <button class="btn btn-primary" onclick="total()"> Jumlah</button>
            </div>
            <!-- /.box-body -->
          </div>
 		</div>
 		<div class="col-md-4">
 			
 		</div>
 		
 	</div>

 </div>
 <script type="text/javascript">
 	function total() {
        var pertamak = document.getElementById("pertamak").value;
        var premium = document.getElementById("premium").value;
        var pertalite = document.getElementById("pertalite").value;
        var count = (premium*7000) + (pertalite*7500)  + (pertamak*8000);
        var total = document.getElementById("total").value=count;
}
 </script>
</body>
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
 <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js')?>"></script>
</html>