<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard | Timbul Aquatic Club Pasuruan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/assets/images/favicon.ico" />
</head>

<body>
  <div class="container-scroller">
  <?= $this->include('layout/dashboard/navbar'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?= $this->include('layout/dashboard/sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <?= $this->renderSection('content'); ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Timbul Aquatic Club <?= date('Y'); ?></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed by <a href="https://www.instagram.com/bayufajariyanto/" target="_blank">Bayu Fajariyanto</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/assets/js/off-canvas.js"></script>
  <script src="/assets/js/hoverable-collapse.js"></script>
  <script src="/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="/assets/js/dashboard.js"></script>
  <script src="/assets/js/todolist.js"></script>
  <!-- End custom js for this page -->
</body>

</html>