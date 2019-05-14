<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ICD-10 Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
     
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="blank.html" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Browse</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!--h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a -->
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseCharts" aria-expanded="true" aria-controls="collapseCharts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
        <div id="collapseCharts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="charts.html">ICD-10 Chapter Part</a>
            <a class="collapse-item" href="charts.html">ICD-10 Block Part</a>
            <a class="collapse-item" href="charts.html">ICD-10 Category Part</a>
            <a class="collapse-item" href="charts.html">ICD-10 Sub-Category Part</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTables" aria-expanded="true" aria-controls="collapseTables">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTables" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="tablesChapter.php">ICD-10 Chapter Part</a>
            <a class="collapse-item" href="tablesBlock.php">ICD-10 Block Part</a>
            <a class="collapse-item" href="tablesCategory.php">ICD-10 Category Part</a>
            <a class="collapse-item" href="tablesSubCategory.php">ICD-10 Sub-Category Part</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Chapter Card -->
            <div class="col-xl-3 col-md-6 mb-4" >
              <div class="card border-left-primary shadow h-100 py-2" >
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total ICD-10 (Version 2016) Chapter</div>
                       <!-- PHP Session -->
                      <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "icd_10_tm_test";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                        $chapter_sql = "select count(chapter_v3_blockrange.chapter_name) as num from chapter_v3_blockrange";
                        $result = $conn->query($chapter_sql);
                        while($row = $result->fetch_assoc()){
                          echo '<div class="h5 mb-0 font-weight-bold text-gray-800"/>'. $row["num"].' Chapters</div>';
                        }
                        $conn->close();
                      ?>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>

            <!-- Block Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total ICD-10 (Version 2016) Block </div>
                      <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "icd_10_tm_test";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                        $block_sql = "select count(block_v3.block_code)as num from block_v3";
                        $result = $conn->query($block_sql);
                        while($row = $result->fetch_assoc()){
                          echo '<div class="h5 mb-0 font-weight-bold text-gray-800"/>'. $row["num"].' Blocks </div>';
                        }
                        $conn->close();
                      ?>
                    </div>
                    <div class="col-auto">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Category Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total ICD-10 (Version 2016) Category</div>
                      <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "icd_10_tm_test";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                        $block_sql = "select count(category_v3.category_code)as num from category_v3";
                        $result = $conn->query($block_sql);
                        while($row = $result->fetch_assoc()){
                          echo '<div class="h5 mb-0 font-weight-bold text-gray-800"/>'. $row["num"].' Categories </div>';
                        }
                        $conn->close();
                      ?>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Sub-Category Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total ICD-10 (Version 2016) Sub-Category</div>
                      <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "icd_10_tm_test";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                        $block_sql = "select count(sub_category_v3.sub_category_code) as num from sub_category_v3";
                        $result = $conn->query($block_sql);
                        while($row = $result->fetch_assoc()){
                          echo '<div class="h5 mb-0 font-weight-bold text-gray-800"/>'. $row["num"].' Sub-Categories </div>';
                        }
                        $conn->close();
                      ?>
                    </div>
                    <div class="col-auto">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
            

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Total sub-categories in particular chapters</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                      
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" id = "chart1">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Total errors in particular chapters</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body" id = "chart2">
                  <div class="chart-area">
                    <canvas id="myAreaChart2"></canvas>
                  </div>
                </div>
              </div>
            </div> 

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id ="#multiCollapseExample2">
                  <h6 class="m-0 font-weight-bold text-primary">Test Pie Chart</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> 1
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> 2
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> 3
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-area-demo2.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <script>
  
  </script>

</body>

</html>
