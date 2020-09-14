	<div id="delete_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Esta seguro de querer eliminar este dato?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_books.php<?php echo '?id='.$id; ?>">Si</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Cerrar</button>
		</div>
    </div>
	
