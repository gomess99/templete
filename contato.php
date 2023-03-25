<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2><?php echo retornoTexto('titulo1_contato');?></h2>
							<p><?php echo retornoTexto('subtitulo1_contato');?><br><?php echo retornoTexto('subtitulo2_contato');?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3><?php echo retornoTexto('titulo1_bloco_contato');?></h3>
						<p><?php echo retornoTexto('subtitulo1_bloco_contato');?></p>
						<p><i class="fa fa-phone"></i> <?php echo retornoTexto('telefone_bloco_contato');?></p>
						<p><i class="fa fa-envelope"></i><?php echo retornoTexto('email_bloco_contato');?></p>
					</div>
					<div class="col-md-3">
						<h3><?php echo retornoTexto('titulo2_bloco_contato');?></h3>
						<p><i class="fa fa-clock-o"></i> <span class="day"><?php echo retornoTexto('subtitulo2_bloco_contato');?></span></p>
						<p><i class="fa fa-clock-o"></i> <span class="day"><?php echo retornoTexto('subtitulo3_bloco_contato');?></span></p>
						<p><i class="fa fa-clock-o"></i> <span class="day"><?php echo retornoTexto('subtitulo4_bloco_contato');?>:</span></p>
					</div>
					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn"><?php echo retornoTexto('btn_contato');?></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>