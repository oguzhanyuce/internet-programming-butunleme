<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php';

$ilanlar=$baglan->prepare("SELECT * from ilanlar where ilan_id=?");
$ilanlar->execute(array($_GET['id']));

$ilanlargetir=$ilanlar->fetch(PDO::FETCH_ASSOC);



?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
              <h1>İlan Sayfası</h1>
              <center>
              </div>

        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">İlan Ekle</h3>
        </div>


        </form>
        <form action="yukle.php"method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">Yüklü Resim</label>
              <img style="width:400px"src="resimler/ilanlar/<?php echo $ilanlargetir['ilan_resim'] ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">İlan Resim</label>
              <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">İlan Başlık</label>
              <input value="<?php echo $ilanlargetir['ilan_baslik'] ?>" name="baslik" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen İlan Başlık Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">İlan Açıklama</label>
              <textarea name="aciklama" id="editor1"><?php echo $ilanlargetir['ilan_aciklama'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">İlan Sıra</label>
              <input name="sira" value="<?php echo $ilanlargetir['ilan_sira'] ?>" type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen İlan Sıra  Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Anahtar Kelime</label>
              <input name="anahtarkelime" value="<?php echo $ilanlargetir['ilan_anahtarkelime'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Anahtar Kelime Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Metrekare</label>
              <input name="metre" type="number" value="<?php echo $ilanlargetir['ilan_metrekare'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Lütfen İlan Metrekare değerini Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Oda Sayısı</label>
              <input name="oda" type="text" class="form-control" value="<?php echo $ilanlargetir['ilan_odasayisi'] ?>" id="exampleInputPassword1" placeholder="Lütfen Oda Sayısı Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Bina Yaşı</label>
              <input name="binayas" value="<?php echo $ilanlargetir['ilan_binayas'] ?>" type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Bina Yaşını Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Bulunduğu Kat</label>
              <input name="bkat" value="<?php echo $ilanlargetir['ilan_bkat'] ?>" type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Bulunduğu Katı Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Isıtma Tipi</label>
              <input name="isitma" value="<?php echo $ilanlargetir['ilan_isitma'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Isıtma Tipini Giriniz.">
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Takasa Uygun mudur?</label>
                <input name="takas" value="<?php echo $ilanlargetir['ilan_takas'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Takas Durumunu Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Aidat Giriniz.</label>
                <input name="aidat" value="<?php echo $ilanlargetir['ilan_aidat'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Aidat Değerini Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Adres Bilgisi</label>
                <input name="adres" value="<?php echo $ilanlargetir['ilan_adres'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Adres Bilgisi Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Fiyat</label>
                <input name="fiyat" value="<?php echo $ilanlargetir['ilan_fiyat'] ?>" type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen Fiyat Bilgisini Giriniz.">
              </div>
            </div>

            <input type="hidden" name="id" value ="<?php echo $_GET['id']; ?>"> <!--ilan id -->
            <input type="hidden" name="altkatid" value="<?php echo $_GET['altkatid'] ?>">
            <input type="hidden" name="katid" value ="<?php echo $_GET['katid']; ?>"> <!--üst kategori -->
            <input type="hidden" name="eskiresim" value="<?php echo $ilanlargetir['ilan_resim'] ?>">

          </div>
          <!-- /.card-body -->

          <div style="float:right"class="card-footer">
            <button name="ilanDuzenle" type="submit" class="btn btn-primary">Kaydet</button>
          </div>
        </form>
      </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php'; ?>
