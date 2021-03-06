<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>DATA_SISWA</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />



</head>
<body>

  <div class="wrapper">
    <div class="sidebar">

  <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            IOT
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            SMKN4 BOGOR
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="view_siswa.php">
              <i class="tim-icons icon-single-02"></i>
              <p>DATA SISWA</p>
            </a>
          </li>
          <li>
            <a href="mode.php">
              <i class="tim-icons icon-settings"></i>
              <p>GANTI MODE</p>
            </a>
          </li>
          <li>
            <a href="view_rekapabsen.php">
              <i class="tim-icons icon-paper"></i>
              <p>REKAP ABSENSI</p>
            </a>
          </li>
          <li>
            <a href="view_scan.php">
              <i class="tim-icons icon-bell-55"></i>
              <p>SCANNING</p>
            </a>
          </li>
           <li>
            <a href="view_post_siswa.php">
              <i class="tim-icons icon-simple-add "></i>
              <p>TAMBAH DATA SISWA</p>
            </a>
          </li>

        </ul>
      </div>
    </div>


    <div class="main-panel">
      
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">TAMBAH DATA SISWA</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <i class="tim-icons icon-single-02"></i>
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    list
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
    

    <!--awalan isian-->

   

    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">TAMBAH DATA SISWA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                 

                  <form action="../config/routes.php?function=create_siswa" method="POST">
                  <table class="table tablesorter " id="">
                    <tbody class=" text-primary">
                      <tr id="norfid"></tr>
                      <tr>
                        <td>NISN</td>
                        <td><input type="text" name="nisn"></td>
                      </tr>
                      <tr>
                        <td>nama</td>
                        <td><input type="text" name="nama"></td>
                      </tr>

                      <tr>
                        <td>KELAS</td>
                        <td>
                      <select name="id_kelas">
                      <!-- logic combo get database-->
                      <option value= "1">X RPL 1</option>
                      <option value= "2">X RPL 2</option>
                      <option value= "3">XI RPL 1</option>
                      <option value= "4">XI RPL 2</option>
                      <option value= "5">XII RPL 1</option>
                      <option value= "6">XII RPL 2</option>
                      <option value= "7">X TFLM 1</option>
                      <option value= "8">X TFLM 2</option>
                      <option value= "9">XI TFLM 1</option>
                      <option value= "10">XI TFLM 2</option>
                      <option value= "11">XII TFLM 1</option>
                      <option value= "12">XII TFLM 2</option>
                      <option value= "13">XIII TFLM 1</option>
                      <option value= "14">XIII TFLM 2</option>
                      <option value= "15">X TKJ 1</option>
                      <option value= "16">X TKJ 2</option>
                      <option value= "17">X TKJ 3</option>
                      <option value= "18">XI TKJ 1</option>
                      <option value= "19">XI TKJ 2</option>
                      <option value= "20">XI TKJ 3</option>
                      <option value= "21">XII TKJ 1</option>
                      <option value= "22">XII TKJ 2</option>
                      <option value= "23">XII TKJ 3</option>
                      <option value= "15">X TKRO 1</option>
                      <option value= "16">X TKRO 2</option>
                      <option value= "17">X TKRO 3</option>
                      <option value= "18">XI TKRO 1</option>
                      <option value= "19">XI TKRO 2</option>
                      <option value= "20">XI TKRO 3</option>
                      <option value= "21">XII TKRO 1</option>
                      <option value= "22">XII TKRO 2</option>
                      <option value= "23">XII TKRO 3</option>
                      </select>
                        </td>
                      </tr>

    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="create_siswa" ></td>

      </tr>
                    </tbody>
                  </table>
                </form>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  </div>
    <!--akhiran isian-->

    <!--untuk background setting-->

    <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="tim-icons icon-settings"></i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Setting Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
      </ul>
    </div>
  </div>


<!--list script-->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function() {
        $("#norfid").load('nokartu.php')
      }, 0);
          });
  </script>
</body>
</html>