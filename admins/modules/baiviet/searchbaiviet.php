<style type="text/css">
	.tab-content {margin: 20px 0;} 
	.tab-content .show {width: 100%; border: 1px solid;}
	/*.tab-content .show th, .tab-content .show td, .tab-content .show tr {border: 1px solid;}*/
	.tab-content .show th, .tab-content .show td {padding: 0 5px; height: 35px;}
	.tab-content .show th {background-color: #006064; color: white;}
	.tab-content .show td {text-align: center;}
	.tab-content .show tr:nth-child(even) { background-color: #B0BEC5; }
	.tab-content .show .icons {width: 15px; margin-right: 3px;}
        .search input[type="text"] {width: 500px; height: 30px;}
	.search {text-align: right;}
</style>

<div class="search">
	<form action="index.php?mod=baiviet&ac=search" method="post">
		<input type="text" name="key"><input type="submit" name="sm" value="Search">
	</form>
</div>

<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->	
						<div class="tab-title" style="background-color: #555; padding: 10px; color: white; position: relative;">DANH SÁCH BÀI VIẾT<a href="index.php?mod=baiviet&ac=Addnew" style="color: white; background-color: black; padding: 10px 16px; position: absolute; right: 0; top: 0;">+ Thêm bài viết</a> </div>
						<table class="show">
							
							<thead>
								<tr>
								   <th style="width: 35px;">#</th>
								   <th style="width: 200px; text-align: left;">Tên bài viết</th>
								   <th>Hình đại diện</th>
								   <th>Ngày đăng</th>
								   
								   <th style="text-align: left; width: 115px;">Loại tin</th>
								   <th>Trạng thái hiển thị</th>
								   <th>Thứ tự</th>
								   <th>Thao tác</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="8" style="text-align: right;">
										
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                            <?php
											for($i=1; $i<= $page_count; $i++)
											{ $c =" number ";
											  if ($i==$page) $c .=" current ";?>
											<a style="padding: 6px 12px; border: 1px solid black; background-color: #555; color: white;" href="index.php?mod=baiviet&page=<?php echo $i;?>" class="<?php echo $c;?>" 
                                            	title="<?php echo $i;?>"><?php echo $i;?></a>
											<?php
											}
											?>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                            <?php 
                            $j = 1;
							foreach( $data as $r)

							{?>
								<tr>
									<td><?php echo $j; ?></td>
								<td style="text-align: left;"><a href="#" title="<?php echo $r["tenbaiviet"];?>"><?php echo $r["tenbaiviet"];?>
                                    </a></td>
                  <td><img src="../images/<?php echo $r["anhminhhoa"];?>" width="100px" height="50px"></td>
                  <td><?php echo $r["ngaydang"];?></td>
									
									<td style="text-align: left;"><?php echo $r["tenloaitin"];?></td>
									<td><?php echo $r["trangthaihienthi"];?></td>
									<td><?php echo $r["thutu"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=baiviet&ac=edit&id=<?php echo $r["idbaiviet"];?>" title="Edit"><img class="icons" src="img/pencil.png" alt="Edit" />Edit</a>&nbsp;&nbsp;
										 <a href="index.php?mod=baiviet&ac=delete&id=<?php echo $r["idbaiviet"];?>" title="Delete"><img class="icons" src="img/remove.png" alt="Delete" />Delete</a> 
										
									</td>
								</tr>
								<?php
								$j++;
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
<?php
  if ($ac == "Addnew")
  	include ROOT."/admins/modules/baiviet/addbaiviet.php";
  //if ($ac == "search")
  	//include ROOT."/admins/modules/baiviet/searchbaiviet.php";
?>