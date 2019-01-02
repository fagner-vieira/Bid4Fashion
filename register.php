<?php include 'header.php'; ?>
  
	<!-- Main Content -->

		<section class="login-content">
			<div class="login-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="login-content-block">
							<div class="login-content-inner">
								<div id="customer-login" class="col-sm-6">
									<div class="customer-login-wrapper">
										<div id="login" class="">
											<h5 class="title">Entrar</h5>
											<form method="post" action="./index1.htmlaccount/login" id="customer_login" accept-charset="UTF-8">
												<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="customer_email" class="label">E-mail</label>
												<input type="email" value="" name="customer[email]" id="customer_email" class="text">
												<label for="customer_password" class="label">Senha</label>
												<input type="password" value="" name="customer[password]" id="customer_password" class="text" size="16">
												<a href="./index1.htmlaccount/login#" onclick="showRecoverPasswordForm();return false;">Esqueceu sua senha?</a>
												<div class="action_bottom">
													<input class="btn" type="submit" value="Entrar">
												</div>
											</form>
										</div>
										<div id="recover-password" style="display:none;" class="">
											<h5 class="title">Resetar senha</h5>
											<p class="note">
												Enviaremos um e-mail coma senha.
											</p>
											<form method="post" action="./index1.htmlaccount/recover" accept-charset="UTF-8">
												<input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="email" class="label">E-mail</label>
												<input type="email" value="" size="30" name="email" id="recover-email" class="text">
												<div class="action_bottom">
													<input class="btn" type="submit" value="Submit"> ou <span class="note"><a href="./index1.htmlaccount/login#" onclick="hideRecoverPasswordForm();return false;">Cancelar</a></span>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div id="customer-register" class="col-sm-6">
									<div class="customer-register-wrapper">
										<div class="customer-intro login-intro">
											<h5 class="title">Registrar</h5>
										</div>
										<div id="register" class="span12">
											<form method="post" action="./index1.htmlaccount" id="create_customer" accept-charset="UTF-8">
												<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<div id="first_name" class="clearfix large_form">
													<label for="first_name" class="label">Nome</label>
													<input type="text" value="" name="customer[first_name]" id="first_name" class="text" size="30">
												</div>
												<div id="last_name" class="clearfix large_form">
													<label for="last_name" class="label">Sobrenome</label>
													<input type="text" value="" name="customer[last_name]" id="last_name" class="text" size="30">
												</div>
												<div id="email" class="clearfix large_form">
													<label for="email" class="label">E-mail</label>
													<input type="email" value="" name="customer[email]" id="email" class="text" size="30">
												</div>
												<div id="password" class="clearfix large_form">
													<label for="password" class="label">Senha</label>
													<input type="password" value="" name="customer[password]" id="password" class="password text" size="30">
												</div>
												<div class="action_bottom">
													<input class="btn" type="submit" value="Registrar">
												</div>
											</form>
										</div>
										<!-- #register -->
									</div>
								</div>
								<!-- #customer-register -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script type="text/javascript">
		  function showRecoverPasswordForm() {
			document.getElementById('recover-password').style.display = 'block';
			document.getElementById('login').style.display='none';
		  }

		  function hideRecoverPasswordForm() {
			document.getElementById('recover-password').style.display = 'none';
			document.getElementById('login').style.display = 'block';
		  }

		  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
		</script>
          
	</div>  

<?php include 'footer.php'; ?>
	
