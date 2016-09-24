<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Result</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/buttons.dataTables.min.css"/>
  <link href="<?= base_url(); ?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?= base_url(); ?>asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard">
          <?php $this->load->view($header); ?>
            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Selected Item</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> ...
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Selected Item</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <?php for ($i = 0 ; $i < count($kolom) ; $i++) {
                          ?>
                          <th><?php echo $kolom[$i]; ?></th>
                          <?php
                          } ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                        $i = 0;
                        foreach ($data as $key) {
                        ?>
                        <tr>
            						  <td><?php echo ++$i; ?></td>
                          <?php  
                          for($j = 0 ; $j < count($kolom) ; $j++){
                          ?>
            						  <td><?php echo $key[$kolom[$j]]; ?></td>
                          <?php } ?>
            						</tr>
                        <?php
                        } ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
          <?php $this->load->view($footer); ?>
<!-- start: Javascript -->
<script src="<?= base_url(); ?>asset/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>asset/js/jquery.ui.min.js"></script>
<script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="<?= base_url(); ?>asset/js/plugins/moment.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/jquery.datatables.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/jszip.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="<?= base_url(); ?>asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable({
		dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
	});
  });
</script>
<!-- end: Javascript -->
</body>
</html>