<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/animate.min.css"/>
  <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body id="mimin" class="dashboard">
        <?php $this->load->view($header); ?>
          <!-- start: Content -->
          <div id="content" class="search-v1">
            <div class="panel">
              <div class="panel-body">
                <div class="col-md-12">
                    <form method="post" action="<?php echo base_url(); ?>index.php/Search/prosesSearch">
                     <div class="input-group">
                      <input type="text" placeholder="Type here to search..." name="search" class="form-control" aria-label="...">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default" aria-haspopup="true" aria-expanded="false">Search</button>
                      </div><!-- /btn-group -->
                    </div><!-- /input-group -->
                    </form>
                </div>
              </div>
            </div>
            <?php if (isset($cari)){ ?>
            <div class="col-md-12">
               <div class="col-md-12 tabs-area box-shadow-none">
                  <div id="tabsDemo6Content" class="tab-content tab-content-v6 col-md-12">
                    <div role="tabpanel" class="tab-pane search-v1-menu1 fade active in" id="tabs-demo7-area1" aria-labelledby="tabs-demo7-area1">
                      <h4> <?php echo count($cari); ?> results found for: “<?php echo $hasil; ?>”</h4></br></br>
                      <div class="col-md-6 padding-0">
                        <?php foreach ($cari as $key): ?>
                          <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="<?php echo base_url(); ?>asset/img/avatar2.png" class="media-object search-v1-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="<?php echo base_url(); ?>index.php/Profile/index/<?php echo $key['nik']; ?>"><?php echo $key['nama']; ?></a></h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-user icons"></i> <?php echo $key['deptname']; ?>
                                   </a>
                                   <a href=""> | <i class="icon-user icons"></i> <?php echo $key['job']; ?></a>
                                </div>
                              </div>
                        <?php endforeach ?>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
            <?php } else { ?>  
            <div class="col-md-12">
               <div class="col-md-12 tabs-area box-shadow-none">
                  <div id="tabsDemo6Content" class="tab-content tab-content-v6 col-md-12">
                    <div role="tabpanel" class="tab-pane search-v1-menu1 fade active in" id="tabs-demo7-area1" aria-labelledby="tabs-demo7-area1">
                      <div class="col-md-6 padding-0">
                          <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="<?php echo base_url(); ?>asset/img/avatar2.png" class="media-object search-v1-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="<?php echo base_url(); ?>index.php/Profile/index/; ?>">Rian Okik</a></h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-user icons"></i> HR-GA
                                   </a>
                                   <a href=""> | <i class="icon-user icons"></i> PAYROLL</a>
                                </div>
                              </div>
                          <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="<?php echo base_url(); ?>asset/img/avatar2.png" class="media-object search-v1-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="<?php echo base_url(); ?>index.php/Profile/index/; ?>">Rian Okik</a></h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-user icons"></i> HR-GA
                                   </a>
                                   <a href=""> | <i class="icon-user icons"></i> PAYROLL</a>
                                </div>
                              </div>
                          <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="<?php echo base_url(); ?>asset/img/avatar2.png" class="media-object search-v1-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="<?php echo base_url(); ?>index.php/Profile/index/; ?>">Rian Okik</a></h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-user icons"></i> HR-GA
                                   </a>
                                   <a href=""> | <i class="icon-user icons"></i> PAYROLL</a>
                                </div>
                              </div>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
            <?php } ?>
          </div>
          <!-- end: content -->
<?php $this->load->view($footer); ?>



<!-- start: Javascript -->
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="<?php echo base_url(); ?>asset/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/plugins/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/plugins/holder.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="<?php echo base_url(); ?>asset/js/main.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var $container = $('.masonry-container');
    $container.imagesLoaded( function () {
      $container.masonry({
        columnWidth: '.item',
        columnWidth: 100,
        itemSelector: '.item'
      });
    });
    
    $('a[data-toggle=tab]').each(function () {
      var $this = $(this);

      $this.on('shown.bs.tab', function () {
      
        $container.imagesLoaded( function () {
          $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
          });
        });

      });
    });
});
</script>
<!-- end: Javascript -->
</body>
</html>