	<div id="delete_user<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Esta seguro de querer eliminar este dato?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_user.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i>&nbsp;Si</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Cerrar</button>
		</div>
    </div>
	
