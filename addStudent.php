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
            <h1 class="m-0">Tambah siswa</h1>
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
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Masukan Kelas</label>
                    <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
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