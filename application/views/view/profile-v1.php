<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/mediaelementplayer.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/plugins/icheck/skins/flat/red.css"/>
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
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src="<?= base_url(); ?>asset/img/avatar.jpg"/>
                      <h2><?php echo $pegawai['nama']; ?></h2>
                      <h2><?php echo $nik; ?></h2>
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="<?= base_url(); ?>asset/img/bg1.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1><?= substr($pegawai['tgl_masuk'], 8, 9); ?></h1>
                          <p>Date</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1><?= substr($pegawai['tgl_masuk'], 5, -3); ?></h1>
                           <p>Month</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1><?= substr($pegawai['tgl_masuk'], 0, 4); ?></h1>
                          <p>Year</p>
                        </div>
                    </div>
                </div>
             </div>

             <div class="col-md-12 col-sm-12 profile-v1-body">
             <?php 
             if (isset($suc)){ ?>
             <!-- buat form validation -->
             <?php if ($suc == 'no'){ ?>
             <div class="col-md-12">
                <div class="alert alert-danger col-md-12 col-sm-12 alert-icon alert-dismissible fade in" role="alert">
                	<div class="col-md-2 col-sm-2 icon-wrapper text-center">
                        <span class="fa fa-exclamation-triangle fa-2x"></span>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p><?php echo form_error('PE'); ?><?php echo form_error('grade'); ?><?php echo form_error('nama'); ?><?php echo form_error('no_sertifikat'); ?><?php echo form_error('penyelenggara'); ?><?php echo form_error('tempat'); ?></p>
                    </div>
                </div>
            </div>
             <?php }else{
             ?>
             <div class="col-md-12">
                <div class="alert alert-success col-md-12 col-sm-12 alert-icon alert-dismissible fade in" role="alert">
                	<div class="col-md-2 col-sm-2 icon-wrapper text-center">
                        <span class="fa fa-exclamation-triangle fa-2x"></span>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p><strong>Data</strong> berhasil dimasukan</p>
                    </div>
                </div>
            </div>
             <?php
             	} ?>
            <?php } ?>
            <!-- end buat form validation -->
                <div class="col-md-7">
					<ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                        <li class="active">
                         <a href="#tabs-demo6-area1" data-toggle="tab" title="welcome">
                          <span class="round-tabs one">
                            <i class="glyphicon glyphicon-user"></i>
                          </span> 
                        </a>
                      </li>

                      <li>
                        <a href="#tabs-demo6-area2" data-toggle="tab" title="profile">
                         <span class="round-tabs two">
                           <i class="glyphicon icon-notebook"></i>
                         </span> 
                       </a>
                     </li>
					
					<li>
                        <a href="#tabs-demo6-area3" data-toggle="tab" title="profile">
                         <span class="round-tabs two">
                           <i class="glyphicon icon-user-following"></i>
                         </span> 
                       </a>
                     </li>
					 
                    <li>
                      <a href="#tabs-demo6-area4" data-toggle="tab" title="blah blah">
                       <span class="round-tabs four">
                         <i class="glyphicon glyphicon-book"></i>
                       </span> 
                     </a>
                   </li>

                   <li><a href="#tabs-demo6-area5" data-toggle="tab" title="completed">
                     <span class="round-tabs five">
                      <i class="glyphicon glyphicon-pencil"></i>
                    </span> </a>
                  </li>
                </ul>
				<div class="tab-content tab-content-v5">
                  <div class="tab-pane fade in active" id="tabs-demo6-area1">

                    <div class="responsive-table">
                    
					   <table class="table table-striped">
						<tr>
						  <th>Nama</th>
						  <td><?= $pegawai['nama']; ?></td>
						</tr>
						<tr>
						  <th>Job</th>
						  <td><?= $pegawai['job']; ?></td>
						</tr>
						<tr>
						  <th>Department</th>
						  <td><?= $pegawai['deptname']; ?></td>
						</tr>
						<tr>
						  <th>PIC</th>
						  <td>Rahasia</td>
						</tr>
					</table>
					</div>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area2">
                    <h3 class="head text-center">Riwayat Karir/Jabatan</h3>
                    <div class="responsive-table">
                    
					   <table class="table table-striped">
						<tr>
						  <th>Riwayat</th>
						  <?php  
						  foreach ($riwayatJob as $key) {
						  ?>
						  <th><?php echo $key['tahun']; ?></th>
						  <?php
						  }
						  ?>
						</tr>
						<tr>
						  <th>PE</th>
						  <?php  
						  foreach ($riwayatJob as $key) {
						  ?>
						  <td><?php echo $key['pe']; ?></td>
						  <?php
						  }
						  ?>
						</tr>
						<tr>
						  <th>GRADE</th>
						  <?php  
						  foreach ($riwayatJob as $key) {
						  ?>
						  <td><?php echo $key['grade']; ?></td>
						  <?php
						  }
						  ?>
						</tr>
						<tr>
						  <th>DEPT</th>
						  <?php  
						  foreach ($riwayatJob as $key) {
						  ?>
						  <td><?php echo $key['deptname']; ?></td>
						  <?php
						  }
						  ?>
						</tr>
					</table>
					</div>
                    <p class="text-center">
                      <button type="button" class="btn btn-success btn-round green" data-toggle="modal" data-target="#importKarir"> Import Data <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                      <button type="button" class="btn btn-success btn-round red" data-toggle="modal" data-target="#exportKarir"> Export Data <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                    </p>
                  </div>
				  <div class="tab-pane fade" id="tabs-demo6-area3">
                    <h3 class="head text-center">Riwayat Pelatihan</h3>
                    <div class="responsive-table">
                    
					   <table class="table table-striped">
					   <tr>
					   	<th>No</th>
					   	<th>Nama Pelatihan</th>
					   	<th>Penyelenggara</th>
					   	<th>Waktu</th>
					   	<th>Tempat</th>
					   	<th>No Sertifikat</th>
					   </tr>
					   <?php
					   $i = 0;  
					   foreach ($riwayatPelatihan as $key) {
					   ?>
						<tr>
						  <td><?php echo ++$i; ?></td>
						  <td><?php echo $key['nama_pelatihan']; ?></td>
						  <td><?php echo $key['penyelenggara']; ?></td>
						  <td><?php echo $key['waktu_pelaksanaan']; ?></td>
						  <td><?php echo $key['tempat']; ?></td>
						  <td><a href="<?php echo base_url(); ?>index.php/Profile/download/<?php echo $key['upload_sertifikat']; ?>"><?php echo $key['no_sertifikat']; ?></a></td>
						</tr>
					   <?php
					   }
					   ?>
					</table>
					</div>
                    <p class="text-center">
                      <button type="button" class="btn btn-success btn-round green" data-toggle="modal" data-target="#importPelatihan"> Import Data <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                      <button type="button" class="btn btn-success btn-round red" data-toggle="modal" data-target="#exportPelatihan"> Export Data <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area4">
                    <h3 class="head text-center">Riwayat Rotasi/Mutasi</h3>
                    <div class="responsive-table">
                    
					   <table class="table table-striped">
						<tr>
						  <th rowspan='2'>NO</th>
						  <th colspan="2">DEPT</th>
						  <th colspan="2">PERIODE</th>
						</tr>
						<tr>
							<th>BEFORE</th>
							<th>AFTER</th>
							
							<th>START</th>
							<th>END</th>
						</tr>
						<?php if (count($riwayatRotasi) == 0){ ?>
						<tr>
							<td colspan="5" align="center">no history available</td>
						</tr>
						<?php } else { ?>

						<?php  
						$i = 1;
						foreach ($riwayatRotasi as $key) {
						?>
						<tr>
							<td><?php echo $i++; ?></td>
							<!-- MEMASUKAN NAMA DEPARTMENT -->
							<td><?php echo $key['dept_before']; ?></td>
							<td><?php echo $key['dept_after']; ?></td>
							<!-- MEMASUKAN PERIODE KERJA -->
							<td><?php echo $key['start_date']; ?></td>
							<td><?php echo $key['end_date']; ?></td>
						</tr>
						<?php
						}
					}
						?>
					</table>
					</div>
                    <p class="text-center">
                      <a href="" class="btn btn-success btn-round green"> Still pending <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area5">
                    <div class="text-center">
                      <i class="img-intro icon-checkmark-circle"></i>
                    </div>
						<div class="col-md-12">
						  <div class="panel form-element-padding">
							<div class="panel-heading">
							 <h4>Form Record</h4>
							</div>
							 <div class="panel-body" style="padding-bottom:30px;">
							 <form id="jajalan" role="form" method="post" action="<?php echo base_url(); ?>index.php/Profile/prosesPenilaian">
								<div class="col-md-12">
									<div class="form-group">
									  <div class="col-sm-10">
									  	<input type="text" required class="form-control" name="PE" placeholder="Masukan PE (number format)">
									  	<input type="hidden" name="nik" value="<?php echo $nik; ?>">
									  </div>
									</div>
									
									<div class="form-group" style="margin-top:45px">
									  <div class="col-sm-10"><input type="text" required class="form-control" name="grade" placeholder="Masukan Grade"></div>
									</div>
									
									<div class="form-group" style="margin-top: 90px;margin-left: 15px;">
										<select class="select2-A" name="kelker">
										<?php  
										foreach ($option['dept'] as $key) {
										?>
										  <optgroup label="<?php echo $key['deptname']; ?>">
										  	<?php  
										  	foreach ($option['kelk'] as $key2) {
										  	?>
											  	<?php if ($key2['deptno'] == $key['deptno']): ?>
													<option value="<?php echo $key2['deptno']; ?>"><?php echo $key2['kelker']; ?></option>
											  	<?php endif ?>
										  	<?php
										  	}
										  	?>
										  </optgroup>
										<?php
										}
										?>
										</select>
								  </div>
								  <div class="form-group" style="margin-top:5px">
									  <div class="col-sm-10"><input type="month" required class="form-control" name="tahun"></div>
									</div>
								  <div class="form-group">
									<input type="submit" class="col-md-10 btn ripple btn-3d btn-success" value="Submit">   
								  </div>
								</div>
								</form>
							</div>
						  </div>
						</div>
					</div>
                </div>
				</div>
                <div class="col-md-5">
                     <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Report</h4>
                                </div>
                                <div class="panel-body">
                                    
                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-wallet icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Salary</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-speedometer icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Overtime</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-energy icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Bonus</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-user icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Man Power</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="media">
                                    <div class="media-left">
                                        <span class="icon-close icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Error</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel-footer bg-white border-none">
                                    <center>
                                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Rotasi</button>
									  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Pelatihan</button>
                                    </center>
                                </div>
                              </div>
                </div>
             </div>
           
          </div>
		  <div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Form Rotasi</h4>
				  </div>
				  <form method="post" action="<?php echo base_url(); ?>index.php/Profile/prosesRotasi">
				  <div class="modal-body col-md-12">
				  <div class="col-md-12">
				  <input type="hidden" name="nik" value="<?php echo $nik; ?>">
				  <label> Dipindahkan ke department </label>
					<select class="select2-A" name="kelker">
						<?php  
						foreach ($option['dept'] as $key) {
						?>
						<optgroup label="<?php echo $key['deptname']; ?>">
						  	<?php  
						  	foreach ($option['kelk'] as $key2) {
						  	?>
							  	<?php if ($key2['deptno'] == $key['deptno']): ?>
									<option value="<?php echo $key2['deptno']; ?>"><?php echo $key2['kelker']; ?></option>
							  	<?php endif ?>
						  	<?php
						  	}
						  	?>
						</optgroup>
						<?php
							}
						?>
					</select>

					</div>
					<div class="col-md-12" style="margin-top: 20px">
						<label> Dipindahkan pada tanggal </label>
						<input type="date" name="tanggal">
					</div>
					<div class="col-md-12" style="margin-top: 20px">
						<label> Sampai tanggal </label>
						<input type="date" name="tanggal2">
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-default">
				  </div>
				  </form>
				</div>

			  </div>
			</div>
			<div id="myModal1" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Form Pelatihan</h4>
				  </div>
				  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Profile/prosesPelatihan">
				  <div class="modal-body">
				  	<input type="hidden" name="nik" value="<?php echo $nik; ?>">
					<input type="text" class="form-control" name="nama" placeholder="Nama Pelatihan" style="margin-bottom: 10px">
					<input type="text" class="form-control" name="no_sertifikat" placeholder="No Sertifikat" style="margin-bottom: 10px">
					<input type="text" class="form-control" name="penyelenggara" placeholder="Penyelenggara" style="margin-bottom: 10px">
					<input type="date" class="form-control" name="tanggal" style="margin-bottom: 10px">
					<input type="text" class="form-control" name="tempat" placeholder="Tempat" style="margin-bottom: 10px">
					<input type="file" class="form-control" name="fileUpload" style="margin-bottom: 10px">
				  <div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Submit">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				  </form>
				</div>

			  </div>
			</div>
			</div>

			<div id="importPelatihan" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Form Import</h4>
				  </div>
				  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Profile/import/Pelatihan">
				  <div class="modal-body">
					<input type="file" class="form-control" name="filePelatihan" style="margin-bottom: 10px">
				  <div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Submit">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				  </form>
				</div>

			  </div>
			</div>
      </div>

      <div id="importKarir" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Form Import</h4>
				  </div>
				  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Profile/import/Karir">
				  <div class="modal-body">
					<input type="file" class="form-control" name="fileKarir" style="margin-bottom: 10px">
				  <div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Submit">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				  </form>
				</div>

			  </div>
			</div>
      </div>

      <div id="exportKarir" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Export</h4>
          </div>
          <form method="post" action="<?php echo base_url(); ?>index.php/Export/index/karir">
          <div class="modal-body">
          <div class="form-group form-animate-checkbox">
          <input type="hidden" name="nik" value="<?php echo $nik; ?>">
            <table>
              <tr>
                <td>
                  <input type="checkbox" name="karir[]" class="checkbox" value="nik">
                  <label>Nik</label>
                </td>
                <td>
                  <input type="checkbox" name="karir[]" class="checkbox" value="pe">
                  <label>PE</label>
                </td>
                <td>
                  <input type="checkbox" name="karir[]" class="checkbox" value="grade">
                  <label>Grade</label>
                </td>
                <td>
                  <input type="checkbox" name="karir[]" class="checkbox" value="deptname">
                  <label>Department</label>
                </td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
        </div>
      </div>
      </div>



      <div id="exportPelatihan" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Export</h4>
          </div>
          <form method="post" action="<?php echo base_url(); ?>index.php/Export/index/pelatihan">
          <div class="modal-body">
          <div class="form-group form-animate-checkbox">
          <input type="hidden" name="nik" value="<?php echo $nik; ?>">
            <table>
              <tr>
                <td>
                  <input type="checkbox" name="pelat[]" class="checkbox" value="nama_pelatihan">
                  <label>Nama Pelatihan</label>
                </td>
                <td>
                  <input type="checkbox" name="pelat[]" class="checkbox" value="penyelenggara">
                  <label>Penyelenggara</label>
                </td>
                <td>
                  <input type="checkbox" name="pelat[]" class="checkbox" value="waktu_pelaksanaan">
                  <label>Waktu</label>
                </td>
                <td>
                  <input type="checkbox" name="pelat[]" class="checkbox" value="tempat">
                  <label>Tempat</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="pelat[]" class="checkbox" value="no_sertifikat">
                  <label>No Sertifikat</label>
                </td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
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
<script src="<?= base_url(); ?>asset/js/plugins/icheck.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/moment.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/mediaelement-and-player.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/jquery.nicescroll.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="<?= base_url(); ?>asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
   $('video,audio').mediaelementplayer({
            alwaysShowControls: true,
            videoVolume: 'vertical',
            features: ['playpause','progress','volume','fullscreen']
          });

	$("#emboh").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname"
      }
    });
 });
</script>
<!-- end: Javascript -->
</body>
</html>