<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../LMS/E.B. Magalona.png" class="img-rounded">
					</div>
				<div class="login">
				<div class="log_txt">
				<p><strong>Por Favor Introduzca los Detalles Debajo..</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Usuario</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Ingrese Usuario" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Clave</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Ingrese Clave" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Entrar</button>
								</div>
								</div>
								
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:dashboard.php');
								$_SESSION['id']=$row['user_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Acceso Negado</div>		
								<?php
								}}
								?>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>