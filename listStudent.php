<!DOCTYPE html>
<html lang="en">
    <?php
    include 'layout/head.php';
    ?>
<body>
    <div class="wrapper">
       
        <?php
            include 'layout/navbar.php';
            include 'layout/sidebar.php';
        ?>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel daftar siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Student id</th>
                    <th>name</th>
                    <th>Class id</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sinta
                    </td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>fatma
                    </td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>tia
                    </td>
                    <td>3</td>
                  </tr>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


        <?php
            include 'layout/footer.php';
        ?>

        <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
        </aside>
    </div>
    <?php
    include 'layout/script.php';
    
    ?>    
</body>
</html>