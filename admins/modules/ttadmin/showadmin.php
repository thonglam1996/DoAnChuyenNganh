<?php
$data = $admin->getAll();
?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<div class="tab-title" style="background-color: #555; padding: 10px; color: white;">DANH SÁCH ADMIN</div>
						
						
						<table class="show">
							
							<thead>
								<tr>
								   <th style="width: 50px;">#</th>
								   <th>Hình đại diện</th>
								   <th  style="text-align: left;">Tên Admin</th>
								   <th style="width: 200px;">Thao tác</th>
								</tr>
								
							</thead>
						 
							
						 
							<tbody>
              <?php 
              $i = 1;
							foreach( $data as $r)
							{?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><a href="#" title="title"><img src="img/<?php echo $r["hinhdaidien"];?>" style="width: 50px;"></a></td>
								<td style="text-align: left;"><a href="#" title="title"><?php echo $r["tenadmin"];?>
                                    </a></td>
                                 
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=ttadmin&ac=edit&id=<?php echo $r["idadmin"];?>" title="Edit"><img src="img/pencil.png" alt="Edit" />Edit</a>&nbsp;&nbsp;
										 <a href="index.php?mod=ttadmin&ac=delete&id=<?php echo $r["idadmin"];?>" title="Delete"><img src="img/remove.png" alt="Delete" />Delete</a> 
										
									</td>
								</tr>
								<?php
								$i++;
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->