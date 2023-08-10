<main class="content">
				<div class="container-fluid p-0">

				<div class="card">
								<div class="card-header">
									<h5 class="card-title">Manage Category</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:40%;">Category ID</th>
											<th style="width:25%">Category Name</th>
											<th style="width:25%">Edit/Delete</th>	
											
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $select->fetch_object())
			{
			?>
										<tr>
											<td><?php echo $row->cat_id; ?></td>
											<td><?php echo $row->cat_name; ?></td>
											<td class="table-action">
												<a href="edit_cat.php?eid=<?php echo $row->cat_id; ?>"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="delete_cat.php?did=<?php echo $row->cat_id; ?>"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>		</div>
									
			</main>
