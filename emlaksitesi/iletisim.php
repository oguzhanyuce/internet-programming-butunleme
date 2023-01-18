<?php require_once 'header.php'; ?>

<br>

  <div class="container">
    <div class="row">
	  <div class="col-md-12">
        <div class="utf-contact-map margin-bottom-50">
          <div class="utf-google-map-container">
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.6071848518245!2d29.898962015549824!3d39.47820207948538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c9483d0f896d39%3A0xee6d82ab3b451648!2sDP%C3%9C%20K%C3%BCtahya%20Teknik%20Bilimler%20Meslek%20Y%C3%BCksekokulu!5e0!3m2!1str!2str!4v1673810684343!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			  <a href="#" id="streetView">Sokak Görünümü</a>
		  </div>
        </div>
      </div>
      <!-- Contact Details -->
      <div class="col-md-4">
        <div  style="background color:black" class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-map"></i> Bilgilerimiz</h3>
        </div>
        <!-- Contact Details -->
        <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
          <ul class="contact-details">
            <li><i class="icon-feather-smartphone"></i> <strong>Telefon Numarası:</strong> <span><?php echo $ayargetir['ayar_telefon'] ?></span></li>
            <li><i class="icon-material-outline-email"></i> <strong>Email Adres:</strong> <span><a href="#"><?php echo $ayargetir['ayar_email'] ?></a></span></li>
			<li><i class="icon-feather-globe"></i> <strong>Website:</strong> <span>www.abcdemlak.com</span></li>
			<li><i class="icon-feather-map-pin"></i> <strong>Adres:</strong> <span>adres bilgilerimiz burdadır.</span></li>
          </ul>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-md-8">
        <section id="contact">
		  <div style="background-color:black "class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-layers"></i> İletişim Formu</h3>
          </div>
		  <div class="utf-contact-form-item">
			  <form action="phpmailer.php" method="post">
				<div class="row">
				  <div class="col-md-6">
					  <input name="name" type="text" placeholder="Ad & Soyad" required="">
				  </div>
				  <div class="col-md-6">
					  <input name="meslek" type="text" placeholder="Meslek" required="">
				  </div>
				  <div class="col-md-6">
					  <input name="email" type="email" placeholder="Email Adres" required="">
				  </div>
				  <div class="col-md-6">
					  <input name="konu" type="text" placeholder="Konu" required="">
				  </div>
				  <div class="col-md-12">
					  <textarea name="mesaj" cols="40" rows="3" placeholder="Mesajınız.." spellcheck="true" required=""></textarea>
				  </div>
				</div>
				<div class="utf-centered-button margin-bottom-10">
					<button type="submit" class="submit button" id="submit">Gönder</button>
				</div>
			  </form>
		    </div>
        </section>
      </div>
      <!-- Contact Form / End -->
    </div>
  </div>
  <!-- Container / End -->

<?php require_once 'footer.php'; ?>
