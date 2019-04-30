<?php include 'header.php' ;?>
<br>
<br>


			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bize Ulaşın</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg">Bize ulaşmak için aşağıda yer alan iletişim formunu eksiksizce doldurarak gönderebilirsiniz..</p>

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Hata</strong>Mesajınız Gönderilemedi
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Adınız" value="" data-msg-required="Adınızı Giriniz." maxlength="100" class="form-control input-lg" name="name" id="name" required>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="Email Adresinizl" value="" data-msg-required="Lütfen Email Adresinizi Giriniz" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Konu" value="" data-msg-required="Lütfen Konu Gİirniz" maxlength="100" class="form-control input-lg" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Mesaj" data-msg-required="Lütfen mesajınızı giriniz.." rows="5" class="form-control input-lg" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Mesaj Gönder" class="btn btn-success btn-lg mb-xlg" data-loading-text="Bekleyin...">
									</div>
								</div>
								<br>
							</form>

						</div>
						<br>
						<br>

						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Adres & İletişim</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<br>
								<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong><?php echo $ayarcek['ayar_adres']?><br><?php echo $ayarcek['ayar_ilce']?>/<?php echo $ayarcek['ayar_il']?></li>
								<br>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong><?php echo $ayarcek['ayar_tel'] ;?></li>
								<br>
								<li><i class="fa fa-envelope"></i> <strong>Mail Adresi:</strong> <a href="mailto:<?php echo $ayarcek['ayar_email'];?>"><?php echo $ayarcek['ayar_mail'];?></a></li>
							</ul>
							<br>

							<h4 class="pt-xl mb-none">Çalışma Saatleri</h4>
							<div class="divider divider-primary divider-small mb-xl">
							</div>
                             <?php echo $ayarcek['ayar_mesai'];?>

						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map google-map-footer"></div>
			</div>

			<?php include 'footer.php' ;?>