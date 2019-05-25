<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
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
        <a class="nav-link collapsed" href="blank.php" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
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
            <a class="collapse-item" href="Chart_Chapter_Part.php">ICD-10 Chapter Part</a>
            <a class="collapse-item" href="Chart_Block_Part.php">ICD-10 Block Part</a>
            <a class="collapse-item" href="Chart_Category_Part.php">ICD-10 Category Part</a>
            <a class="collapse-item" href="Chart_Sub_Category_Part.php">ICD-10 Sub-Category Part</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
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

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Chapter</th>
                      <th>Sub-Category</th>
                      <th>Sub-Category Name</th>
                    </tr>
                  </thead>
                  
                  <tbody>                 
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
                    $chapter_sql = "select case
                    when sub_category_v3.sub_category_code like 'A%' or sub_category_v3.sub_category_code like 'B%' then 'CHAPTER I'
                    when sub_category_v3.sub_category_code like 'C%' or sub_category_v3.sub_category_code like 'D0%' or sub_category_v3.sub_category_code like 'D1%' or sub_category_v3.sub_category_code like 'D2%' or sub_category_v3.sub_category_code like 'D3%' or sub_category_v3.sub_category_code like 'D4%' then 'CHAPTER II'
                    when sub_category_v3.sub_category_code like 'D5%' or sub_category_v3.sub_category_code like 'D6%'or sub_category_v3.sub_category_code like 'D7%' or sub_category_v3.sub_category_code like 'D8%' then 'CHAPTER III'
                    when sub_category_v3.sub_category_code like 'E%' then 'CHAPTER IV'
                    when sub_category_v3.sub_category_code like 'F%' then 'CHAPTER V'
                    when sub_category_v3.sub_category_code like 'G%' then 'CHAPTER VI'
                    when sub_category_v3.sub_category_code like 'H0%' or sub_category_v3.sub_category_code like 'H1%' or sub_category_v3.sub_category_code like 'H2%' or sub_category_v3.sub_category_code like 'H3%' or sub_category_v3.sub_category_code like 'H4%' or sub_category_v3.sub_category_code like 'H5%' then 'CHAPTER VII'
                    when sub_category_v3.sub_category_code like 'H6%' or sub_category_v3.sub_category_code like 'H7%' or sub_category_v3.sub_category_code like 'H8%' or sub_category_v3.sub_category_code like 'H9%' then 'CHAPTER VIII'
                    when sub_category_v3.sub_category_code like 'I%' then 'CHAPTER IX'
                    when sub_category_v3.sub_category_code like 'J%' then 'CHAPTER X'
                    when sub_category_v3.sub_category_code like 'K%' then 'CHAPTER XI'
                    when sub_category_v3.sub_category_code like 'L%' then 'CHAPTER XII'
                    when sub_category_v3.sub_category_code like 'M%' then 'CHAPTER XIII'
                    when sub_category_v3.sub_category_code like 'N%' then 'CHAPTER XIV'
                    when sub_category_v3.sub_category_code like 'O%' then 'CHAPTER XV'
                    when sub_category_v3.sub_category_code like 'P%' then 'CHAPTER XVI'
                    when sub_category_v3.sub_category_code like 'Q%' then 'CHAPTER XVII'
                    when sub_category_v3.sub_category_code like 'R%' then 'CHAPTER XVIII'
                    when sub_category_v3.sub_category_code like 'S%' or sub_category_v3.sub_category_code like 'T%'  then 'CHAPTER XIX'
                    when sub_category_v3.sub_category_code like 'V%' or sub_category_v3.sub_category_code like 'W%' or sub_category_v3.sub_category_code like 'X%' or sub_category_v3.sub_category_code like 'Y%' then 'CHAPTER XX'
                    when sub_category_v3.sub_category_code like 'Z%' then 'CHAPTER XXI'
                    when sub_category_v3.sub_category_code like 'U%' then 'CHAPTER XXII'
                    end as CHAPTER, 
                    sub_category_v3.sub_category_code as sub_category,
                    sub_category_v3.preferred_sub_category_description as label
                    from sub_category_v3 where sub_category_v3.sub_category_code like '%.%'
                    ";
                    $result = $conn->query($chapter_sql);
                    while($row = $result->fetch_assoc()){
                      echo'<tr>';
                      echo '<td>'.$row["CHAPTER"].'</td>';
                      echo '<td>'.$row["sub_category"].'</td>';
                      echo '<td>'.$row["label"].'</td>';
                      echo'</tr>';
                    }
                    $conn->close();
                  ?>

                  </tbody>
                </table>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
