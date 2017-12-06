<?php
$data = $user->getAll();
?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<div class="tab-title" style="background-color: #555; padding: 10px; color: white;">DANH SÁCH USER</div>
						
						
						<table class="show">
							
							<thead>
								<tr>
								   <th style="width: 50px;">#</th>
								   <th>Tên user</th>
								   <th>Tên đăng nhập</th>
								   <th>Email</th>
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
									<td style="text-align: left;"><a href="#" title="title"><?php echo $r["fullname"];?>
                                    </a></td>
								<td style="text-align: left;"><a href="#" title="title"><?php echo $r["user"];?>
                                    </a></td>
                <td style="text-align: left;"><a href="#" title="title"><?php echo $r["email"];?>
                                    </a></td>                    
                                 
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=user&ac=edit&id=<?php echo $r["user"];?>" title="Edit"><img src="img/pencil.png" alt="Edit" />Edit</a>&nbsp;&nbsp;
										 <a href="index.php?mod=user&ac=delete&id=<?php echo $r["user"];?>" title="Delete"><img src="img/remove.png" alt="Delete" />Delete</a> 
										
									</td>
								</tr>
								<?php
								$i++;
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->