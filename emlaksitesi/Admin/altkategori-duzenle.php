<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php';

$altkategori=$baglan->prepare("SELECT * from altkategori where altkat_id=?");
$altkategori->execute(array($_GET['id']));

$altkategorigetir=$altkategori->fetch(PDO::FETCH_ASSOC);




?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
              <h1>Alt Kategori Düzenleme Sayfası</h1>
              <center>
              </div>

        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Alt Kategori Düzenle</h3>
        </div>


        </form>
        <!-- form start -->
        <form action="yukle.php"method="post" enctype="multipart/form-data">
          <div class="card-body">


            <div class="form-group">
              <label for="exampleInputPassword1">Kategori İsim</label>
              <input value="<?php echo $altkategorigetir['alt_baslik'] ?>" name="baslik" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Alt Kategori Başlığını Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kategori Sıra</label>
              <input value="<?php echo $altkategorigetir['alt_sira'] ?>" name="sira" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Alt Kategori Sırasını Giriniz.">
            </div>


<input type="hidden" name="kategoriid" value="<?php echo $altkategorigetir['kategori_id'] ?>">
<input type="hidden" name="id" value="<?php echo $altkategorigetir['altkat_id'] ?>">

          </div>
          <!-- /.card-body -->

          <div style="float:right"class="card-footer">
            <button name="altkategoriduzenle" type="submit" class="btn btn-primary">Kaydet</button>
          </div>
        </form>
      </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php'; ?>
