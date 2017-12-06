<?php
$data = $loaitin->getAll();
?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<div class="tab-title" style="background-color: #555; padding: 10px; color: white;">DANH SÁCH LOẠI TIN</div>
						
						
						<table class="show">
							
							<thead>
								<tr>
								   <th style="width: 50px;">#</th>
								   <th style="width: 400px; text-align: left;">Tên Loại tin</th>
								  	<th>Trạng thái hiển thị</th>
								  	<th style="width: 75px;">Thứ tự</th>
								   <th>Thao tác</th>
								</tr>
								
							</thead>
						 
							
						 
							<tbody>
              <?php 
              $i = 1;
							foreach( $data as $r)
							{?>
								<tr>
									<td><?php echo $i;; ?></td>
								<td style="text-align: left;><a href="#" title="title"><?php echo $r["tenloaitin"];?>
                                    </a></td>
                   <td><a href="#" title="title"><?php echo $r["trangthaihienthi"];?>
                                    </a></td>                
									
									<td><a href="#" title="title"><?php echo $r["thutu"];?>
                                    </a></td>                
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=loaitin&ac=edit&id=<?php echo $r["idloaitin"];?>" title="Edit"><img src="img/pencil.png" alt="Edit" />Edit</a>&nbsp;&nbsp;
										 <a href="index.php?mod=loaitin&ac=delete&id=<?php echo $r["idloaitin"];?>" title="Delete"><img src="img/remove.png" alt="Delete" />Delete</a> 
										
									</td>
								</tr>
								<?php
								$i++;
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->