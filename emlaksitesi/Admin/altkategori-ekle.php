<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php';





?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
              <h1>Alt Kategori Sayfası</h1>
              <center>
              </div>

        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"> Alt Kategori Ekle</h3>
        </div>


        </form>
        <!-- form start -->
        <form action="yukle.php"method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="exampleInputPassword1">Alt Kategori Başlık</label>
              <input name="baslik" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Alt Kategori İsim Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Alt Kategori Sıra</label>
              <input name="sira" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Alt Kategori Sıra Giriniz.">
            </div>

<input type="hidden" name="katid" value="<?php echo $_GET['id'] ?>">


          </div>
          <!-- /.card-body -->

          <div style="float:right"class="card-footer">
            <button name="altkategoriekle" type="submit" class="btn btn-primary">Kaydet</button>
          </div>
        </form>
      </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php'; ?>
