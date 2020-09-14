<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php header("Content-Type: text/html;charset=utf-8");?>
<?php include('navbar_books.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">REGISTRO DE LIBROS</div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Atras</a></p>
	<div class="addstudent">
	<div class="details">Por Favor Introduzca Detalles Debajo</div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">TITULO:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="TITULO DEL LIBRO" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Categoria</label>
			<div class="controls">
			<select name="category_id" required>
			<option></option>
			<?php
			$cat_query = mysql_query("select * from category");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Autor:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="AUTOR DEL LIBRO" required>
			</div>
		</div>
		

		
		

		<div class="control-group">
			<label class="control-label" for="iionputPassword">Nª Copias:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="book_copies"  placeholder="Copias" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">EDITORIAL O EMPRESA:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="book_pub"  placeholder="EDITORIAL O EMPRESA" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">EDITORIAL:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="EDITORIAL" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="0-7172-0119-8" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">año de PUBLICACION:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="AÑO DE PUBLICACION" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">ESTADO:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Nuevo</option>
				<option>Viejo</option>
				<option>Perdidos</option>
				<option>Malogrado</option>
				<option>Tema de reemplazo</option>
                <option>archivados</option>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Registrar</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>