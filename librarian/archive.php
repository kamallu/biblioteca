<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php header("Content-Type: text/html;charset=utf-8");?>
<?php include('navbar_archive.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="archive.php">ARCHIVADOS</a></li>
									
									</ul>
						<!--  -->
						<center class="title">
						<h1>lISTA DE LIBROS</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> IMPRIMIR</a>
								</div>
							
                                <thead>
                                    <tr>
									    <th>Acc No.</th>                                 
                                        <th>TITULO</th>                                 
                                        <th>CATEGORIA</th>
										<th>AUTOR</th>
										<th class="action">Nº COPIAS</th>
										<th>EMPRESA O EDITORIAL</th>
										<th>EDITORIAL</th>
										<th>ISBN</th>
										<th>AÑO DE PUBLICACION</th>	
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from book where status = 'archivados'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];

											$cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo $row['book_copies']; ?> </td>
                                     <td><?php echo $row['book_pub']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
							
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>