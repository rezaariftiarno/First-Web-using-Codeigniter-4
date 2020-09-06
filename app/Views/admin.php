<?php 
    $session = session();
?>
<?php 
   if($session->get('isLoggedIn')): 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?= base_url('favicon/favicon.png')?>">

  <title>Administrator Page</title>

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('/admin/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?= base_url('/admin/css/bootstrap-theme.css')?>" rel="stylesheet">
  <!-- Script Text Editor dari "Ckeditor" -->
  <script src="<?= base_url('/admin/assets/ckeditor/ckeditor.js')?>"></script>
  <!--external css-->
  <!-- font icon -->
  <link href="<?= base_url('/admin/css/elegant-icons-style.css')?>" rel="stylesheet" />
  <link href="<?= base_url('/admin/css/font-awesome.min.css')?>" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?= base_url('/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet" />
  <link href="<?= base_url('/admin/assets/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?= base_url('/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?= base_url('/admin/css/owl.carousel.css')?>" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?= base_url('/admin/css/fullcalendar.css')?>">
  <link href="<?= base_url('/admin/css/widgets.css')?>" rel="stylesheet">
  <link href="<?= base_url('/admin/css/style.css')?>" rel="stylesheet">
  <link href="<?= base_url('/admin/css/style-responsive.css')?>" rel="stylesheet" />
  <link href="<?= base_url('/admin/css/xcharts.min.css')?>" rel=" stylesheet">
  <link href="<?= base_url('/admin/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">

      <!--logo start-->
      <a href="<?= site_url('home/index')?>" class="logo" target="blank">
        <marquee class="col-3">Selamat Datang, Reza Ariftiarno</marquee></a>
      <!--logo end-->



      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

        	<a href="<?=site_url('auth/logout')?>"><button class="btn btn-danger col-9" style="margin-top: 5px">Logout</button></a>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?= site_url('Administrator/admin')?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="<?= site_url('post/create')?>" class="">
                          <i class="icon_document_alt"></i>
                          <span>Input Berkas</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?= site_url('Administrator/admin')?>">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
            <div class="container">
                <?= $this->renderSection('content') ?>
            </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?= base_url('/admin/js/scripts.js')?>"></script>
    <!-- custom script for this page-->
    <script src="<?= base_url('/admin/js/sparkline-chart.js')?>"></script>
    <script src="<?= base_url('/admin/js/easy-pie-chart.js')?>"></script>
    <script src="<?= base_url('/admin/js/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script src="<?= base_url('/admin/js/jquery-jvectormap-world-mill-en.js')?>"></script>
    <script src="<?= base_url('/admin/js/xcharts.min.js')?>"></script>
    <script src="<?= base_url('/admin/js/jquery.autosize.min.js')?>"></script>
    <script src="<?= base_url('/admin/js/jquery.placeholder.min.js')?>"></script>
    <script src="<?= base_url('/admin/js/gdp-data.js')?>"></script>
    <script src="<?= base_url('/admin/js/morris.min.js')?>"></script>
    <script src="<?= base_url('/admin/js/sparklines.js')?>"></script>
    <script src="<?= base_url('/admin/js/charts.js')?>"></script>
    <script src="<?= base_url('/admin/js/jquery.slimscroll.min.js')?>"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

  <script>if( window.self == window.top ) { (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55234356-4', 'auto'); ga('send', 'pageview'); } </script>
  <script>
    CKEDITOR.replace( 'isi_artikel' );
  </script>
</body>

</html>

<?php endif ?>