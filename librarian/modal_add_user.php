	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">NOMBRE</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="username" placeholder="NOMBRE" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">CLAVE</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="CLAVE" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">APELLIDO PATERNO</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="firstname" placeholder="APELLIDO PATERNO" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">APELLIDO MATERNO</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="lastname" placeholder="APELLIDO MATERNO" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;GUARDAR</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;CERRAR</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysql_query("insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')")or die(mysql_error());
	}
	?>