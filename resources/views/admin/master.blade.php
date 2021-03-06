<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Preloader -->
    @include('admin.includes.preloader')

  <!-- Navbar -->
  @include('admin.includes.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('admin.includes.leftsidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cemre Bakery</li>
            </ol>
          </div>
        </div>
       @yield('content')
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
 @include('admin.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.includes.scripts')
</body>
</html>
