<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Editar Miembro</div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Atras</a></p>
	<div class="addstudent">
	<div class="details">Por Favor Introduzca Detalles Debajo</div>	
	<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nombres:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Nombres" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Apellidos:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Apellidos" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Genero:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="gender" value="<?php echo $row['gender']; ?>" placeholder="Genero" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Direccion:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Direccion" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contacto:</label>
			<div class="controls">
			<input type='tel'" class="search" name="contact" value="<?php echo $row['contact']; ?>"  placeholder="Numero de Telefono"  autocomplete="off"  maxlength="09" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipo:</label>
			<div class="controls">
			<select name="type" required>
			
			
	
									
									
									<option>Estudiante</option>
									<option>Profesor</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nivel o grado:</label>
			<div class="controls">
				<select name="year_level" required>			
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
			<label class="control-label" for="inputPassword">Estatus:</label>
			<div class="controls">
				<select name="status" required>
									<option>Activo</option>
									<option>Prohibido</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Actualizar</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>