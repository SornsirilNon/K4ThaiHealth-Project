<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

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
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseCharts" aria-expanded="true" aria-controls="collapseCharts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
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
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTables" aria-expanded="true" aria-controls="collapseTables">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
        <div id="collapseTables" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="tablesChapter.php">ICD-10 Chapter Part</a>
            <a class="collapse-item" href="tablesBlock.php">ICD-10 Block Part</a>
            <a class="collapse-item" href="tablesCategory.php">ICD-10 Category Part</a>
            <a class="collapse-item" href="tablesSubCategory.php">ICD-10 Sub-Category Part</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="downloadable_file.php" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Download</span>
        </a>
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
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"></nav>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

            <!-- Begin Page Content -->
                <div class="text-left">
                    <a class="lead text-gray-800 mb-5">
                        <div style="padding: 12px 20px;float: left;margin-left: 0px;">ICD-10</div>
                        <div style="padding: 12px 20px;float: left;margin-left: 303px;">MeSH</div>
                        <div style="padding: 12px 20px;float: left;margin-left: 314px;">SNOMED-CT</a></div><br><br>
                
                    <style type = "text/css"> 
                        
                        #textarea_ICD10 {
                        width: 30%;
                        height: 300px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                        float: left;
                        margin-left: 20px;
                        }
                        
                        #textarea_MeSH {
                        width: 30%;
                        height: 300px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                        float: left;
                        margin-left: 20px;
                        }

                        #textarea_SNOMED {
                        width: 30%;
                        height: 300px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                        float: left;
                        margin-left: 20px;
                        }

                        #textarea_SNOMED_Syn {
                        width: 45%;
                        height: 300px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                        float: right;
                        margin-right: 70px;
                        }

                        #textarea_MeSH_Syn {
                        width: 45%;
                        height: 300px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                        float: left;
                        margin-left: 20px;
                        }
                    </style>
                
                <body>
                    <div id = "textarea_ICD10">
                      <?php
                        if(isset($_GET['value1'])){
                          $var1 = $_GET['value1'];
                           
                        }
                        echo "<b>Sub-category Code: </b>".$var1;
                        echo "<br>";
                        if(isset($_GET['value2'])){
                          $var2 = $_GET['value2'];
                           
                        }
                        echo "<b>Category Code: </b>".$var2;
                        echo "<br>";
                        if(isset($_GET['value3'])){
                          $var3 = $_GET['value3'];
                           
                        }
                        echo "<b>Sub-category ID: </b>".$var3;
                        echo "<br>";
                        if(isset($_GET['value4'])){
                          $var4 = $_GET['value4'];
                           
                        }
                        echo "<b>Label Type: </b>".$var4;
                        echo "<br>";
                        if(isset($_GET['value5'])){
                          $var5 = $_GET['value5'];
                           
                        }
                        echo "<b>Sub-category Description: </b>".$var5;
                      ?>
                    </div>
                    
                    
                    <div id = "textarea_MeSH"></div>

                    <div id = "textarea_SNOMED"></div>
                </body>
                <a class="lead text-gray-800 mb-5">
                        <div style="padding: 12px 20px;float: left;margin-left: 0px;">MeSH Synonym</div>
                        <div style="padding: 12px 20px;float: left;margin-left: 440px;">SNOMED-CT Synonym</a></div><br><br>
                <body>
                    <div id = "textarea_MeSH_Syn"></div>
                    <div id = "textarea_SNOMED_Syn"></div>
                </body>
                </div>   
            
                   
         </div>
        <!-- /.container-fluid -->

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

</body>

</html>
