<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php header("Content-Type: text/html;charset=utf-8");?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">REGISTROS DE USUARIOS</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Atras</a></p>
	<div class="addstudent">
	<div class="details">Por Favor Introduzca Detalles Debajo</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nombres:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Nombres" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Apellidos:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Apellidos" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Genero:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Masculino</option>
				<option>Femenino</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Direccion:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Direccion" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nº Celular:</label>
			<div class="controls">
			<input type='tel'" class="search" name="contact"  placeholder="Numero de Celular"  autocomplete="off"  maxlength="09" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipo:</label>
			<div class="controls">
			<select name="type" required>
									<option></option>
									<option>Estudiante</option>
									<option>Profesor</option>
									<option></option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nivel o Grado:</label>
			<div class="controls">
				<select name="year_level" required>
					

									<option> </option>
									<option>Primero-Primaria</option>
									<option>Segundo-Primaria</option>
									<option>Tercero-Primaria</option>
									<option>Cuarto-Primaria</option>
									<option>Quinto- Primaria</option>
                                    <option>Sexto- Primaria</option>
                                    <option>Primero- Secundaria</option>
                                    <option>Segundo- Secundaria</option>
                                    <option>Tercero- Secundaria</option>
                                    <option>Cuarto- Secundaria</option>
                                    <option>Quinto- Secundaria</option>
                                    <option>Profesor- Primaria</option>
                                    <option>Profesor- Secundaria</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Guardar</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>